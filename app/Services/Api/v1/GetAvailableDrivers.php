<?php

namespace App\Services\Api\v1;

use Illuminate\Support\Facades\DB;
use App\Models\Driver;
use App\Models\System;
use App\Models\Request;

class GetAvailableDrivers
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute($from = NULL, $to = NULL)
    {
        $drivers = Driver::select(['drivers.id AS driver_id', 'drivers.fullname', 'drivers.sex', 'drivers.contact', 'request_transactions.type', 'request_transactions.request_id'])
            ->leftJoin('transaction_vehicles', 'transaction_vehicles.driver_id', '=', 'drivers.id')
            ->leftJoin('request_transactions', 'request_transactions.transaction_vehicles_id', '=', 'transaction_vehicles.id')
            ->where('transaction_vehicles.status', NULL)
            ->orWhere('transaction_vehicles.status', 2)
            ->where('drivers.type', 1)
            ->groupBy('driver_id')
            ->get();

        for ($i = 0; $i < count($drivers); $i++) {
            $results[] = [
                'id' => $drivers[$i]->driver_id,
                'fullname' => $drivers[$i]->fullname,
                'sex' => $drivers[$i]->sex,
                'contact' => $drivers[$i]->contact,
                'type' => $drivers[$i]->type,
                'travel_status' => $drivers[$i]->type ? $this->process_status($drivers[$i]->request_id, $drivers[$i]->type, 'travel', $from, $to) : NULL,
                'status' => $drivers[$i]->type ? $this->process_status($drivers[$i]->request_id, $drivers[$i]->type, 'status', $from, $to) : 'available'
            ];
        }
        return $results;
    }

    public function process_status($id, $type, $args, $from = NULL, $to = NULL)
    {
        $travelDates = getDatesFromRange($from, $to);

        if ($type == 'rito') {
            $rito = $this->rito_data($id);
            $rDate = getDatesFromRange($rito->inclusive_from, $rito->inclusive_to);

            if ($args == 'status') {
                if (array_intersect($travelDates, $rDate) && $results = strtolower($rito->status) == 'approved') {
                    $results = 'unavailable';
                } else {
                    $results = 'available';
                }
            } else if ($args == 'travel') {
                $results = strtolower($rito->status);
            }


            return $results;
        } else if ($type == 'local') {
            $local = $this->local_data($id);
            $lDate = getDatesFromRange($local->travel_date, $local->return_date);

            if ($args == 'status') {
                if (array_intersect($travelDates, $lDate) && $results = strtolower(travelStatusEng($local->is_status)) == 'approved') {
                    $results = 'unavailable';
                } else {
                    $results = 'available';
                }
            } else if ($args == 'travel') {
                $results = strtolower(travelStatusEng($local->is_status));
            }

            return $results;
        }
    }

    public function rito_data($id)
    {
        $portal_token = System::where('handler', 'PORTAL_TOKEN')->pluck('value')->first();

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://caraga-portal.dswd.gov.ph/api/travel/details/?travel_id=' . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: ' . $portal_token,
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response)[0];
    }

    public function local_data($id)
    {
        return Request::find($id);
    }
}
