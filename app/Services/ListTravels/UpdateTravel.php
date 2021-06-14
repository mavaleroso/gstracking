<?php
namespace App\Services\ListTravels;

use App\Models\TransactionVehicles;
use App\Models\Request;

class UpdateTravel
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute($id, $fields, $url)
    {

        $user = auth()->user()->id;
        $arr = array('luser' => $user, 'lpage' => 'Local_requests' , 'lurl' => $url, 'laction' => 'edit');
        $createLogs = createLogs($arr);

        $trans = TransactionVehicles::where('id',$id);
        $trans->update([
            'starting_odo' => $fields['starting_odo'],
            'ending_odo' => $fields['ending_odo'],
            'travelled' => $fields['distance_travelled'],
            'rate_per_km' => ($fields['vehicle_type'] == 2) ? $fields['rate_per_km'] : NULL,
            'fuel_charge' => ($fields['vehicle_type'] == 1) ? $fields['fuel_charge'] : NULL,
            'fuel_liters' => ($fields['vehicle_type'] == 1) ? $fields['fuel_liters'] : NULL,
            'flat_rate' => $fields['flat_rate'],
            'rate_per_night' => $fields['rate_per_night'],
            'nights_count' => $fields['no_nights'],
            'total_cost' => $fields['total_cost'],
            'date_submit_proc' => $fields['date_submitted_proc'],
            'remarks' => $fields['remarks'],
            'status' => $fields['status']
        ]);

        $trans_id = TransactionVehicles::find($id);
        $request = Request::find($trans_id->request_id);
        $request->update([
            'travel_date' => $fields['travel_date'],
            'travel_return' => $fields['travel_return'],
            'depart_time' => $fields['travel_time'],
        ]);

        return $trans;
    }
}   
