<?php
namespace App\Services\TravelCalendar;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Vehicle;

class GetListingTravel 
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute()
    {
        $query = Transaction::leftJoin('requests','transactions.request_id','=','requests.id')
                            ->leftJoin('vehicles','transactions.vehicle_id','=','vehicles.id')
                            ->select(['transactions.*','requests.travel_date', 'requests.depart_time', 'requests.purpose', 'vehicles.name'])->get();
        
        foreach ($query as $key) {
            $data['list'][] = array(
                'title' => $key['purpose'] . ' ( ' . $key['name'] . ' )', 
                'description' => $key['trip_ticket'], 
                'start' => $key['travel_date'], 
                'className' => 'fc-event-light fc-event-solid-primary', 
            );
        }
        
        $data['records'] = $query;

        $data['data'] = Vehicle::join('transactions','transactions.vehicle_id','=','vehicles.id')
                        ->select(['vehicles.*'])
                        ->groupBy('vehicles.id')
                        ->get();

        return $data;
    }


}   