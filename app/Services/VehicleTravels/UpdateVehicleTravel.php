<?php

namespace App\Services\VehicleTravels;

use App\Models\TransactionVehicles;
use App\Models\Request;
use App\Models\RequestTransactions;

class UpdateVehicleTravel
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute($id, $fields, $url)
    {

        $arr = array('luser' => auth()->user()->id, 'lpage' => 'Local_requests', 'lurl' => $url, 'laction' => 'edit');
        createLogs($arr);

        $trans = TransactionVehicles::where('id', $id);
        $trans->update([
            'starting_odo' => $fields['starting_odo'],
            'ending_odo' => $fields['ending_odo'],
            'travelled' => $fields['distance_travelled'],
            'rate_per_km' => ($fields['vehicle_type'] == 4) ? $fields['rate_per_km'] : NULL,
            'flat_rate' => $fields['flat_rate'],
            'rate_per_night' => $fields['rate_per_night'],
            'nights_count' => $fields['no_nights'],
            'total_cost' => $fields['total_cost'],
            'date_submit_proc' => $fields['date_submitted_proc'],
            'remarks' => $fields['remarks'],
            'status' => $fields['status']
        ]);

        $requestTrans = RequestTransactions::where('transaction_vehicles_id', $id)->first();
        $trans ? Request::where('id', $requestTrans['request_id'])->update(['is_status' => $fields['status']]) : NULL;

        return $trans;
    }
}
