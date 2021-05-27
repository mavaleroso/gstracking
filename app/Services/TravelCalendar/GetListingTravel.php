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
                            ->leftJoin('transaction_vehicles', 'transactions.id','=','transaction_vehicles.transaction_id')
                            ->leftJoin('vehicles', 'transaction_vehicles.vehicle_id', '=', 'vehicles.id')
                            ->select(['transactions.*','requests.travel_date', 'requests.depart_time', 'requests.purpose', 'vehicles.name', 'vehicles.plate_no'])
                            ->where('requests.is_status',2)
                            ->get();

        $office = Transaction::leftJoin('requests','transactions.request_id','=','requests.id')
                            ->leftJoin('transaction_vehicles', 'transactions.id','=','transaction_vehicles.transaction_id')
                            ->leftJoin('vehicles', 'transaction_vehicles.vehicle_id', '=', 'vehicles.id')
                            ->select(['transactions.*','requests.travel_date', 'requests.depart_time', 'requests.purpose', 'vehicles.name', 'vehicles.plate_no', 'transaction_vehicles.vehicle_id'])
                            ->where('requests.is_status',2)
                            ->where('transaction_vehicles.type',1)
                            ->orderBy('requests.travel_date', 'ASC')
                            ->get();
        
        $rental = Transaction::leftJoin('requests','transactions.request_id','=','requests.id')
                                ->leftJoin('transaction_vehicles', 'transactions.id','=','transaction_vehicles.transaction_id')
                                ->leftJoin('vehicles', 'transaction_vehicles.vehicle_id', '=', 'vehicles.id')
                                ->select(['transactions.*','requests.travel_date', 'requests.depart_time', 'requests.purpose', 'vehicles.name', 'vehicles.plate_no', 'transaction_vehicles.vehicle_id'])
                                ->where('requests.is_status',2)
                                ->where('transaction_vehicles.type',2)
                                ->orderBy('requests.travel_date', 'ASC')
                                ->get();

        foreach ($query as $key) {
            $data['list'][] = array(
                'title' => $key['purpose'] . ' ( '. $key['plate_no'] .' )', 
                'description' => $key['trip_ticket'], 
                'start' => $key['travel_date'], 
                'className' => 'fc-event-light fc-event-solid-primary', 
            );
        }

        $data['office'] = $office;

        $data['rental'] = $rental;
        
        $data['officeData'] = Transaction::leftJoin('transaction_vehicles', 'transactions.id','=','transaction_vehicles.transaction_id')
                                            ->leftJoin('vehicles', 'transaction_vehicles.vehicle_id', '=', 'vehicles.id')
                                            ->select(['vehicles.*'])
                                            ->where('transaction_vehicles.type',1)
                                            ->groupBy('vehicles.id')
                                            ->get();

        $data['rentalData'] = Transaction::leftJoin('transaction_vehicles', 'transactions.id','=','transaction_vehicles.transaction_id')
                                            ->leftJoin('vehicles', 'transaction_vehicles.vehicle_id', '=', 'vehicles.id')
                                            ->select(['vehicles.*'])
                                            ->where('transaction_vehicles.type',2)
                                            ->groupBy('vehicles.id')
                                            ->get();

        return $data;
    }


}   