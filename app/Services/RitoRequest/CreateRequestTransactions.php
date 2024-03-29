<?php

namespace App\Services\RitoRequest;

use App\Models\RequestTransactions;
use App\Models\TransactionVehicles;
use App\Services\Core\GenerateTripTicket;
use App\Models\System;
use App\Models\Vehicle;
use App\Services\Core\GenerateCode;
use App\Models\Driver;

class CreateRequestTransactions
{

    public function __construct(GenerateTripTicket $genTripTicket, GenerateCode $getCode)
    {
        $this->genTripTicket = $genTripTicket;
        $this->getCode = $getCode;
    }

    public function execute($fields)
    {
        $rg = System::select('value')->where('handler', 'REQUEST_GROUP')->first();
        $process = false;

        if ($fields['radio_vehicle'] == 1) {
            $request_id = explode(',', $fields['selected']);
            for ($x = 0; $x < count($request_id); $x++) {
                $rt = RequestTransactions::create([
                    'type' => 'rito',
                    'mot' => $fields['radio_vehicle'],
                    'group' => $rg->value,
                    'request_id' => $request_id[$x],
                    'user_id' => auth()->user()->id,
                    'remarks' => $fields['remarks'],
                ]);
                ($rt) ? $this->portal_mot_update($request_id[$x], $fields['radio_vehicle']) : NULL;
            }
            $rt ? $process = true : NULL;
        }

        if ($fields['radio_vehicle'] == 2 || $fields['radio_vehicle'] == 3) {
            $trip_ticket = $this->genTripTicket->trip_ticket();

            for ($i = 1; $i <= $fields['rp_total']; $i++) {

                $trans = TransactionVehicles::create([
                    'vehicle_id' => $fields['vehicle_' . $i],
                    'driver_id' => $fields['driver_' . $i],
                    'trip_ticket' => $trip_ticket,
                    'status' => 2
                ]);

                ($trans) ? System::where('handler', 'TRIP_TICKET')->update(['value' => $trip_ticket]) : NULL;

                $request_id = explode(',', $fields['selected']);
                for ($x = 0; $x < count($request_id); $x++) {
                    $rt = RequestTransactions::create([
                        'type' => 'rito',
                        'mot' => $fields['radio_vehicle'],
                        'group' => $rg->value,
                        'user_id' => auth()->user()->id,
                        'request_id' => $request_id[$x],
                        'transaction_vehicles_id' => $trans->id,
                    ]);
                    ($rt) ? $this->portal_mot_update($request_id[$x], $fields['radio_vehicle']) : NULL;
                }
            }
            $process = true;
        }

        if ($fields['radio_vehicle'] == 4) {
            for ($i = 1; $i <= $fields['hired_total']; $i++) {
                $trip_ticket = $this->genTripTicket->trip_ticket();

                $vehicle = Vehicle::create([
                    'type' => 2,
                    'name' => $fields['vehicle_name_' . $i],
                    'plate_no' => $fields['vehicle_plate_' . $i]
                ]);

                $driver = Driver::create([
                    'type' => 2,
                    'fullname' => $fields['driver_name_' . $i],
                    'contact' => $fields['driver_contact_' . $i]
                ]);

                $trans = TransactionVehicles::create([
                    'vehicle_id' => $vehicle->id,
                    'driver_id' => $driver->id,
                    'procurement_id' => (isset($fields['travel_po'])) ? $fields['travel_po'] : NULL,
                    'trip_ticket' => $trip_ticket,
                    'status' => 2
                ]);

                ($trans) ? System::where('handler', 'TRIP_TICKET')->update(['value' => $trip_ticket]) : NULL;

                $request_id = explode(',', $fields['selected']);
                for ($x = 0; $x < count($request_id); $x++) {
                    $rt = RequestTransactions::create([
                        'type' => 'rito',
                        'mot' => $fields['radio_vehicle'],
                        'group' => $rg->value,
                        'user_id' => auth()->user()->id,
                        'request_id' => $request_id[$x],
                        'transaction_vehicles_id' => $trans->id,
                    ]);
                    ($rt) ? $this->portal_mot_update($request_id[$x], $fields['radio_vehicle']) : NULL;
                }
            }
            $process = true;
        }
        ($process) ? System::where('handler', 'REQUEST_GROUP')->update(['value' => $rg->value + 1]) : NULL;
    }

    public function portal_mot_update($travel_id, $mot_id)
    {
        $portal_token = System::where('handler', 'PORTAL_TOKEN')->pluck('value')->first();

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://caraga-portal.dswd.gov.ph/api/travel/details/update/?travel_id=' . $travel_id . '&mot_id=' . $mot_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_HTTPHEADER => array(
                'Authorization: ' . $portal_token,
            ),
        ));

        $response = json_decode(curl_exec($curl));
        curl_close($curl);
        return $response;
    }
}
