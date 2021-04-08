<?php
namespace App\Services\ListTravel;

use Illuminate\Http\Request;
use App\Models\Transaction;

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
        // $driver = Driver::where('id', $id)->update([
        //     'fullname' => $fields['fullname'],
        //     'age' => $fields['age'],
        //     'sex' => $fields['gender'],
        //     'contact' => $fields['contactNumber'],
        // ]);

        // return $driver;
    }
}   