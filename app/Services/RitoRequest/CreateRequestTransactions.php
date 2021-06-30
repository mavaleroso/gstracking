<?php
namespace App\Services\RitoRequest;

use Illuminate\Support\Arr;
use App\Models\RequestTransactions;
use App\Models\TransactionVehicles;
use App\Services\Core\GenerateTripTicket;
use App\Models\System;
use App\Models\Vehicle;
use App\Models\Driver;

class CreateRequestTransactions
{

    public function __construct(GenerateTripTicket $genTripTicket)
    {
        $this->genTripTicket = $genTripTicket;
    }
    public function execute($fields)
    {
        $rg = System::select('value')->where('handler', 'REQUEST_GROUP')->first();
        $process = false;

        if ($fields['radio_vehicle'] == 2 || $fields['radio_vehicle'] == 3) {
            for ($i=1; $i <= $fields['rp_total'] ; $i++) { 
                $trip_ticket = $this->genTripTicket->trip_ticket();

                $trans = TransactionVehicles::create([
                    'type' => $fields['radio_vehicle'],
                    'vehicle_id' => $fields['vehicle_'.$i],
                    'driver_id' => $fields['driver_'.$i],
                    'trip_ticket' => $trip_ticket,
                    'status' => 2
                ]);

                ($trans) ? System::where('handler', 'TRIP_TICKET')->update(['value' => $trip_ticket]) : NULL;

                $request_id = explode(',',$fields['selected']);
                for ($x=0; $x < count($request_id); $x++) { 

                    $rt = RequestTransactions::create([
                        'type' => 'rito',
                        'group' => $rg->value,
                        'request_id' => $request_id[$x],
                        'transaction_vehicles_id' => $trans->id,
                    ]);

                }
            }
            $process = true;
        }

        if ($fields['radio_vehicle'] == 4) {
            for ($i=1; $i <= $fields['hired_total'] ; $i++) { 
                $trip_ticket = $this->genTripTicket->trip_ticket();

                $vehicle = Vehicle::create([
                    'type' => 2,
                    'name' => $fields['vehicle_name_'.$i],
                    'plate_no' => $fields['vehicle_plate_'.$i]
                ]);

                $driver = Driver::create([
                    'type' => 2,
                    'fullname' => $fields['driver_name_'.$i],
                    'contact' => $fields['driver_contact_'.$i]
                ]);

                $trans = TransactionVehicles::create([
                    'type' => $fields['radio_vehicle'],
                    'vehicle_id' => $vehicle->id,
                    'driver_id' => $driver->id,
                    'procurement_id' => (isset($fields['travel_po']))? $fields['travel_po']:NULL,
                    'trip_ticket' => $trip_ticket,
                    'status' => 2
                ]);

                ($trans) ? System::where('handler', 'TRIP_TICKET')->update(['value' => $trip_ticket]) : NULL;

                $request_id = explode(',',$fields['selected']);
                for ($x=0; $x < count($request_id); $x++) { 

                    $rt = RequestTransactions::create([
                        'type' => 'rito',
                        'group' => $rg->value,
                        'request_id' => $request_id[$x],
                        'transaction_vehicles_id' => $trans->id,
                    ]);

                }
            }
            $process = true;
        }

        ($process) ? System::where('handler', 'REQUEST_GROUP')->update(['value' => $rg->value + 1]) : NULL;
    }
}
