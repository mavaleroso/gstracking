<?php
namespace App\Services\ListRequests;

use App\Models\Request;
use App\Models\TransactionVehicles;
use App\Models\Vehicle;
use App\Models\Driver;
use App\Services\Core\GenerateTripTicket;
use App\Models\System;

class CreateTransaction 
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function __construct(GenerateTripTicket $genTripTicket)
    {
        $this->genTripTicket = $genTripTicket;
    }

    public function execute($fields)
    {
        $request = Request::where('id', $fields['id'])->first();

        if(isset($fields['vehicle_office'])) {
            for ($i=1; $i <= $fields['office_vehicle_total']; $i++) { 
                $trip_ticket = $this->genTripTicket->trip_ticket();

                $trans = TransactionVehicles::create([
                    'type' => 1,
                    'vehicle_id' => $fields['vehicle_'.$i],
                    'driver_id' => $fields['driver_'.$i],
                    'request_id' => $fields['id'],
                    'procurement_id' => (isset($fields['po']))? $fields['po']:NULL,
                    'trip_ticket' => $trip_ticket,
                    'status' => 2
                ]);

                ($trans) ? System::where('handler', 'TRIP_TICKET')->update(['value' => $trip_ticket]) : NULL;
            }
        } 
        
        if (isset($fields['vehicle_rental'])) {
            for ($i=1; $i <= $fields['rental_vehicle_total']; $i++) { 
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
                    'type' => 2,
                    'vehicle_id' => $vehicle->id,
                    'driver_id' => $driver->id,
                    'request_id' => $fields['id'],
                    'procurement_id' => (isset($fields['po']))? $fields['po']:NULL,
                    'trip_ticket' => $trip_ticket,
                    'status' => 2
                ]);

                ($trans) ? System::where('handler', 'TRIP_TICKET')->update(['value' => $trip_ticket]) : NULL;
            }
        }

        Request::find($fields['id'])->update(['is_status' => 2]);
        
        return $trans;
    }

}   