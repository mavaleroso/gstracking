<?php
namespace App\Services\ListTravels;

use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class GetTravelById
{
    /**
     * Get user by id
     *
     * @param string $id
     * @return App\Models\Transaction
     */
    public function execute(int $id)
    {
        
        $trans = Transaction::where('transactions.id', $id);
        $data = $trans->leftJoin('requests', 'transactions.request_id', '=', 'requests.id')
                ->leftJoin('office_vehicles', 'transactions.office_id','=','office_vehicles.id')
                ->leftJoin('rental_vehicles', 'transactions.rental_id','=','rental_vehicles.id')
                ->leftJoin('vehicles', 'office_vehicles.vehicle_id', '=', 'vehicles.id')
                ->leftJoin('procurements', 'transactions.procurement_id', '=', 'procurements.id')
                ->select(['transactions.id','transactions.trip_ticket', 'transactions.vehicle_type', 'requests.travel_date','requests.depart_time', 'transactions.starting_odo','transactions.ending_odo','transactions.date_submit_proc','transactions.travelled','procurements.po_no','procurements.po_amount','transactions.rate_per_km','transactions.flat_rate','transactions.rate_per_night','transactions.nights_count','transactions.total_cost','transactions.created_at', 'requests.is_status','transactions.remarks','vehicles.id as vehicle_id',DB::raw('IFNULL(vehicles.name,rental_vehicles.vehicle_name) AS vehicle_name'),'vehicles.image'])
                ->get();

        return $data;
    }
}
