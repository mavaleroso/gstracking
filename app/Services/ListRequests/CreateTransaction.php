<?php
namespace App\Services\ListRequests;

use App\Models\Transaction;
use App\Models\Request;
use App\Models\TransactionVehicles;
use App\Models\Vehicle;
use App\Models\Driver;

class CreateTransaction 
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute($fields)
    {
        $request = Request::where('id', $fields['id'])->first();
        $trip_ticket = substr($request->serial_code, 4);

        $transaction = Transaction::create([
            'request_id' => $fields['id'],
            'procurement_id' => (isset($fields['po']))? $fields['po']:NULL,
            'trip_ticket' => $trip_ticket,
        ]);

        ($transaction)? Request::find($fields['id'])->update(['is_status' => 2]):NULL;

        if(isset($fields['vehicle_office'])) {
            for ($i=1; $i <= $fields['office_vehicle_total']; $i++) { 
                TransactionVehicles::create([
                    'type' => 1,
                    'transaction_id' => $transaction->id,
                    'vehicle_id' => $fields['vehicle_'.$i],
                    'driver_id' => $fields['driver_'.$i],
                ]);
            }
        } 
        
        if (isset($fields['vehicle_rental'])) {
            for ($i=1; $i <= $fields['rental_vehicle_total']; $i++) { 
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

                TransactionVehicles::create([
                    'type' => 2,
                    'transaction_id' => $transaction->id,
                    'vehicle_id' => $vehicle->id,
                    'driver_id' => $driver->id,
                ]);
            }
        }


        

        return $transaction;
    }

}   