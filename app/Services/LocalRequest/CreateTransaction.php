<?php

namespace App\Services\LocalRequest;

use App\Models\RequestTransactions;
use App\Models\Request;
use App\Models\TransactionVehicles;
use App\Models\Vehicle;
use App\Models\Driver;
use App\Services\Core\GenerateTripTicket;
use App\Services\Core\GenerateCode;
use App\Models\System;

class CreateTransaction
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function __construct(GenerateTripTicket $genTripTicket, GenerateCode $getCode)
    {
        $this->genTripTicket = $genTripTicket;
        $this->getCode = $getCode;
    }

    public function execute($fields, $url)
    {

        $arr = array('luser' => auth()->user()->id, 'lpage' => 'Local_requests', 'lurl' => $url, 'laction' => 'approved');
        createLogs($arr);

        $rg = System::select('value')->where('handler', 'REQUEST_GROUP')->first();
        $process = false;

        if ($fields['radio_vehicle'] == 1) {
            RequestTransactions::create([
                'type' => 'local',
                'mot' => $fields['radio_vehicle'],
                'group' => $rg->value,
                'request_id' => $fields['id'],
                'user_id' => auth()->user()->id,
                'remarks' => $fields['remarks'],
            ]);
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

                RequestTransactions::create([
                    'type' => 'local',
                    'mot' => $fields['radio_vehicle'],
                    'group' => $rg->value,
                    'user_id' => auth()->user()->id,
                    'request_id' => $fields['id'],
                    'transaction_vehicles_id' => $trans->id,
                ]);
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

                RequestTransactions::create([
                    'type' => 'local',
                    'mot' => $fields['radio_vehicle'],
                    'group' => $rg->value,
                    'user_id' => auth()->user()->id,
                    'request_id' => $fields['id'],
                    'transaction_vehicles_id' => $trans->id,
                ]);
            }
            $process = true;
        }

        ($process) ? System::where('handler', 'REQUEST_GROUP')->update(['value' => $rg->value + 1]) : NULL;

        Request::find($fields['id'])->update(['is_status' => 2]);

        return $trans;
    }
}
