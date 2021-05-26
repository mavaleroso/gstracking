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
                            ->select(['transactions.*','requests.travel_date', 'requests.depart_time', 'requests.purpose', 'vehicles.name',  DB::raw('IFNULL(vehicles.template,rental_vehicles.vehicle_template) as vehicle_template')])
                            ->where('requests.is_status',2)
                            ->get();

        $office = Transaction::leftJoin('requests','transactions.request_id','=','requests.id')
                            ->leftJoin('office_vehicles', 'transactions.office_id','=','office_vehicles.id')
                            ->leftJoin('vehicles', 'office_vehicles.vehicle_id', '=', 'vehicles.id')
                            ->select(['transactions.*','requests.travel_date', 'requests.depart_time', 'requests.purpose', 'vehicles.name', 'office_vehicles.vehicle_id'])
                            ->where('transactions.vehicle_type','office')
                            ->where('requests.is_status',2)
                            ->orderBy('requests.travel_date', 'ASC')
                            ->get();
        
        $rental = Transaction::leftJoin('requests','transactions.request_id','=','requests.id')
                                ->leftJoin('rental_vehicles', 'transactions.rental_id','=','rental_vehicles.id')
                                ->select(['transactions.*','requests.travel_date', 'requests.depart_time', 'requests.purpose', 'rental_vehicles.id as rental_id','rental_vehicles.vehicle_name','rental_vehicles.vehicle_template'])
                                ->where('requests.is_status',2)
                                ->where('transactions.vehicle_type','rental')
                                ->get();

        foreach ($query as $key) {
            $data['list'][] = array(
                'title' => $key['purpose'] . ' ( '. $key['vehicle_template'] .' )', 
                'description' => $key['trip_ticket'], 
                'start' => $key['travel_date'], 
                'className' => 'fc-event-light fc-event-solid-primary', 
            );
        }

        $data['office'] = $office;

        $data['rental'] = $rental;
        
        $data['officeData'] = Transaction::join('office_vehicles', 'transactions.office_id','=','office_vehicles.id')
                                            ->join('vehicles', 'office_vehicles.vehicle_id', '=', 'vehicles.id')
                                            ->select(['vehicles.*'])
                                            ->where('transactions.vehicle_type','office')
                                            ->groupBy('vehicles.id')
                                            ->get();

        $data['rentalData'] = Transaction::join('rental_vehicles', 'transactions.rental_id','=','rental_vehicles.id')
                                            ->select(['rental_vehicles.*'])
                                            ->get();

        return $data;
    }


}   