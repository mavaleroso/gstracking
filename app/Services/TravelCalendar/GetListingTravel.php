<?php

namespace App\Services\TravelCalendar;

use Illuminate\Support\Facades\DB;
use App\Models\TransactionVehicles;
use App\Models\Request;
use App\Models\System;
use App\Models\Vehicle;
use App\Models\Driver;

class GetListingTravel
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute()
    {
        $transVehicles = TransactionVehicles::select('transaction_vehicles.id as trans_id', 'transaction_vehicles.trip_ticket', 'request_transactions.type', DB::raw('GROUP_CONCAT(request_transactions.request_id) as request_id'))
            ->leftJoin('request_transactions', 'request_transactions.transaction_vehicles_id', '=', 'transaction_vehicles.id')
            ->where('transaction_vehicles.status', 2)
            ->groupBy('transaction_vehicles.id')
            ->get();

        foreach ($transVehicles as $key) {
            $data['data'][] = array(
                'type' => $key['type'],
                'request' => $key['type'] == 'rito' ? $this->rito_request($key['request_id']) :
                    $this->local_request($key['request_id']),
                'vehicle' => Vehicle::find($key['trans_id']),
                'drivers' => Driver::find($key['trans_id']),
                'trip_ticket' => $key['trip_ticket']
            );
        }

        for ($j = 0; $j < count($data['data']); $j++) {
            $data['list'][] = array(
                'title' => $data['data'][$j]['request']['purpose'] . ' ( )',
                'description' => $data['data'][$j]['trip_ticket'],
                'start' => $data['data'][$j]['request']['inclusive_from'],
                'className' => 'fc-event-light fc-event-solid-primary',
            );
        }

        return $data;
        // $office = Transaction::leftJoin('requests', 'transactions.request_id', '=', 'requests.id')
        //     ->leftJoin('transaction_vehicles', 'transactions.id', '=', 'transaction_vehicles.transaction_id')
        //     ->leftJoin('vehicles', 'transaction_vehicles.vehicle_id', '=', 'vehicles.id')
        //     ->select(['transactions.*', 'requests.travel_date', 'requests.depart_time', 'requests.purpose', 'vehicles.name', 'vehicles.plate_no', 'transaction_vehicles.vehicle_id'])
        //     ->where('requests.is_status', 2)
        //     ->where('transaction_vehicles.type', 1)
        //     ->orderBy('requests.travel_date', 'ASC')
        //     ->get();

        // $rental = Transaction::leftJoin('requests', 'transactions.request_id', '=', 'requests.id')
        //     ->leftJoin('transaction_vehicles', 'transactions.id', '=', 'transaction_vehicles.transaction_id')
        //     ->leftJoin('vehicles', 'transaction_vehicles.vehicle_id', '=', 'vehicles.id')
        //     ->select(['transactions.*', 'requests.travel_date', 'requests.depart_time', 'requests.purpose', 'vehicles.name', 'vehicles.plate_no', 'transaction_vehicles.vehicle_id'])
        //     ->where('requests.is_status', 2)
        //     ->where('transaction_vehicles.type', 2)
        //     ->orderBy('requests.travel_date', 'ASC')
        //     ->get();



        // $data['office'] = $office;

        // $data['rental'] = $rental;

        // $data['officeData'] = Transaction::leftJoin('transaction_vehicles', 'transactions.id', '=', 'transaction_vehicles.transaction_id')
        //     ->leftJoin('vehicles', 'transaction_vehicles.vehicle_id', '=', 'vehicles.id')
        //     ->select(['vehicles.*'])
        //     ->where('transaction_vehicles.type', 1)
        //     ->groupBy('vehicles.id')
        //     ->get();

        // $data['rentalData'] = Transaction::leftJoin('transaction_vehicles', 'transactions.id', '=', 'transaction_vehicles.transaction_id')
        //     ->leftJoin('vehicles', 'transaction_vehicles.vehicle_id', '=', 'vehicles.id')
        //     ->select(['vehicles.*'])
        //     ->where('transaction_vehicles.type', 2)
        //     ->groupBy('vehicles.id')
        //     ->get();

        // return $data;

    }

    public function local_request($request_id)
    {
        $id = explode(',', $request_id);
        for ($i = 0; $i < count($id); $i++) {
            $request = Request::select(DB::raw('GROUP_CONCAT(destination) as place'), DB::raw('GROUP_CONCAT(serial_code) as code'), DB::raw('GROUP_CONCAT(travel_date) as travel_date'), DB::raw('GROUP_CONCAT(return_date) as return_date'), DB::raw('GROUP_CONCAT(purpose) as purpose'))->where('id', $id[$i])->get();
        }
        foreach ($request as $key) {
            $result = array(
                'tracking_no' => $key['code'],
                'place' => $key['place'],
                'inclusive_from' => $key['travel_date'],
                'inclusive_to' => $key['return_date'],
                'purpose' => $key['purpose']
            );
        }
        return $result;
    }

    public function rito_request($request_id)
    {
        $id = explode(',', $request_id);

        $tracking = [];

        $portal_token = System::where('handler', 'PORTAL_TOKEN')->pluck('value')->first();
        for ($i = 0; $i < count($id); $i++) {

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://caraga-portal.dswd.gov.ph/api/travel/details/?travel_id=' . $id[$i],
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
            if (header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found", true, 404)) {
                $tracking = 'Error 404';
            } else {
                try {
                    $tracking[] = json_decode($response)[0];
                } catch (\Throwable $th) {
                    $tracking[] = json_decode($response);
                }
            }
            curl_close($curl);
        }

        $tracking_no = [];
        $place = [];
        $purpose = [];
        for ($j = 0; $j < count($tracking); $j++) {
            array_push($tracking_no, $tracking[$j]->tracking_no);
            array_push($place, $tracking[$j]->place);
            array_push($purpose, $tracking[$j]->purpose);
            $inclusive_from = $tracking[$j]->inclusive_from;
            $inclusive_to = $tracking[$j]->inclusive_to;
        }


        $result = array(
            'tracking_no' => implode(", ", $tracking_no),
            'place' => implode(", ", $place),
            'inclusive_from' => $inclusive_from,
            'inclusive_to' => $inclusive_to,
            'purpose' => implode(", ", $purpose)
        );
        return $result;
    }
}
