<?php

namespace App\Services\Api\v1;

use Illuminate\Support\Facades\DB;
use App\Models\Driver;
use App\Models\System;
use App\Models\Request;
use App\Models\TransactionVehicles;

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
        $travelDates = getDatesFromRange($from, $to);

        $drivers = Driver::where('type', 1)->get();
        for ($i = 0; $i < count($drivers); $i++) {
            $results[] = [
                'id' => $drivers[$i]->id,
                'fullname' => $drivers[$i]->fullname,
                'sex' => $drivers[$i]->sex,
                'contact' => $drivers[$i]->contact,
                'status' => $this->process_status($drivers[$i]->id, $travelDates)
            ];
        }
        return $results;
    }

    public function process_status($id, $travelDates)
    {
        $trans = TransactionVehicles::select(['request_transactions.type', 'request_transactions.request_id'])
            ->leftJoin('request_transactions', 'request_transactions.transaction_vehicles_id', '=', 'transaction_vehicles.id')
            ->where('transaction_vehicles.driver_id', $id)
            ->where('transaction_vehicles.status', 2)
            ->get();

        $trans_length = count($trans);
        if ($trans_length < 1) return 'available';
        $status_results = 'available';
        for ($i = 0; $i < $trans_length; $i++) {
            if ($trans[$i]->type == 'rito') {
                $rito = $this->rito_data($trans[$i]->request_id);
                $rDate = getDatesFromRange($rito->inclusive_from, $rito->inclusive_to);

                if (array_intersect($travelDates, $rDate)) {
                    $status_results = 'unavailable';
                }
            } else if ($trans[$i]->type == 'local') {
                $local = Request::find($trans[$i]->request_id);
                $lDate = getDatesFromRange($local->travel_date, $local->return_date);

                if (array_intersect($travelDates, $lDate)) {
                    $status_results = 'unavailable';
                }
            }
        }

        return $status_results;
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
}
