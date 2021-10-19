<?php

namespace App\Services\Api\v1;

use Illuminate\Support\Facades\DB;
use App\Models\Vehicle;
use App\Models\System;
use App\Models\Request;
use App\Models\TransactionVehicles;

class GetAvailableVehicles
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

        $vehicles = Vehicle::where('type', 1)->where('status', 1)->get();
        for ($i = 0; $i < count($vehicles); $i++) {
            $results[] = [
                'id' => $vehicles[$i]->id,
                'name' => $vehicles[$i]->name,
                'plate_no' => $vehicles[$i]->plate_no,
                'status' => $this->process_status($vehicles[$i]->id, $travelDates, 'status'),
                'travel_status' => $this->process_status($vehicles[$i]->id, $travelDates, 'travel')
            ];
        }
        return $results;
    }

    public function process_status($id, $travelDates, $type)
    {
        $trans = TransactionVehicles::select(['request_transactions.type', 'request_transactions.request_id'])
            ->leftJoin('request_transactions', 'request_transactions.transaction_vehicles_id', '=', 'transaction_vehicles.id')
            ->where('transaction_vehicles.vehicle_id', $id)
            ->where('transaction_vehicles.status', 2)
            ->get();
        $trans_length = count($trans);
        if ($trans_length < 1) return $type == 'status' ? 'available' : NULL;
        $status_results = 'available';
        $travel_results = NULL;
        for ($i = 0; $i < $trans_length; $i++) {
            if ($trans[$i]->type == 'rito') {
                $rito = $this->rito_data($trans[$i]->request_id);
                $rDate = getDatesFromRange($rito->inclusive_from, $rito->inclusive_to);

                if (array_intersect($travelDates, $rDate)) {
                    if ($rito->status == 'Approved') {
                        $status_results = 'unavailable';
                        $travel_results = $rito->status;
                    } else if ($rito->status == 'Pending') {
                        $status_results = 'available';
                        $travel_results = $rito->status;
                    }
                }
            } else if ($trans[$i]->type == 'local') {
                $local = Request::find($trans[$i]->request_id);
                $lDate = getDatesFromRange($local->travel_date, $local->return_date);

                if (array_intersect($travelDates, $lDate)) {
                    if ($local->is_status == 2) {
                        $status_results = 'unavailable';
                        $travel_results = 'Approved';
                    } else if ($local->is_status == 1) {
                        $status_results = 'available';
                        $travel_results = 'Pending';
                    }
                }
            }
        }

        return $type == 'status' ? $status_results : $travel_results;
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
