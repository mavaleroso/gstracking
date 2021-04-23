<?php
namespace App\Services\ListRequests;

use App\Models\Transaction;
use App\Models\Request;

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
           'vehicle_id' => $fields['vehicle'],
           'procurement_id' => $fields['po'],
           'trip_ticket' => $trip_ticket,
        ]);

        ($transaction)? Request::find($fields['id'])->update(['is_status' => 2]):NULL;

        return $transaction;
    }

}   