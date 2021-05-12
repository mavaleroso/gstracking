<?php
namespace App\Services\ListRequests;

use App\Models\Transaction;
use App\Models\Request;
use App\Models\Office_vehicle;
use App\Models\Rental_vehicle;

class CreateTransaction 
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute($fields)
    {
        // dd($fields);
        $request = Request::where('id', $fields['id'])->first();
        $trip_ticket = substr($request->serial_code, 4);
        $office = NULL;
        $rental = NULL;

        if($fields['vehicle_type'] == 'office') {
            $office = Office_vehicle::create([
                'vehicle_id' => $fields['vehicle'],
                'driver_id' => $fields['driver']
            ]);
        } else if ($fields['vehicle_type'] == 'rental') {
            $rental = Rental_vehicle::create([
                'vehicle_description' => $fields['vehicle_desc'],
                'vehicle_template' => $fields['vehicle_template'],
                'driver_name' => $fields['driver_name'],
                'driver_contact' => $fields['driver_contact']
            ]);
        }

        $office_id = ($office) ? $office->id : NULL;
        $rental_id = ($rental) ? $rental->id : NULL;

        $transaction = Transaction::create([
           'request_id' => $fields['id'],
           'procurement_id' => $fields['po'],
           'trip_ticket' => $trip_ticket,
           'vehicle_type' => $fields['vehicle_type'],
           'office_id' => $office_id,
           'rental_id' => $rental_id,
        ]);

        ($transaction)? Request::find($fields['id'])->update(['is_status' => 2]):NULL;

        return $transaction;
    }

}   