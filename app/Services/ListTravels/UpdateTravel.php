<?php
namespace App\Services\ListTravels;

use App\Models\Transaction;
use App\Models\Request;

class UpdateTravel
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute($id, $fields)
    {
        $transaction = Transaction::find($id);
        $transaction->update([
            'vehicle_id' => $fields['vehicle_id'],
            'starting_odo' => $fields['starting_odo'],
            'ending_odo' => $fields['ending_odo'],
            'date_submit_proc' => $fields['date_submitted_proc'],
            'travelled' => $fields['distance_travelled'],
            'rate_per_km' => $fields['rate_per_km'],
            'flat_rate' => $fields['flat_rate'],
            'rate_per_night' => $fields['rate_per_night'],
            'nights_count' => $fields['no_nights'],
            'total_cost' => $fields['total_cost'],
            'remarks' => $fields['remarks'],
        ]);

        $request = Request::find($transaction->request_id);
        $request->update([
            'travel_date' => $fields['travel_date'],
            'depart_time' => $fields['travel_time'],
            'is_status' => $fields['status'],
        ]);

        return $transaction;
    }
}   