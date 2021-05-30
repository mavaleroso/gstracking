<?php
namespace App\Services\ListTravels;

use App\Models\TransactionVehicles;
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
        
        $trans = TransactionVehicles::where('transaction_vehicles.id', $id);
        $data = $trans->leftJoin('transactions', 'transaction_vehicles.transaction_id', '=', 'transactions.id')
                ->leftJoin('requests', 'transactions.request_id', '=', 'requests.id')
                ->leftJoin('vehicles', 'transaction_vehicles.vehicle_id', '=', 'vehicles.id')
                ->leftJoin('procurements', 'transactions.procurement_id', '=', 'procurements.id')
                ->select(['transaction_vehicles.id','transactions.trip_ticket', 'requests.travel_date','requests.depart_time', 'transaction_vehicles.starting_odo','transaction_vehicles.ending_odo','transactions.date_submit_proc','transaction_vehicles.travelled','procurements.po_no','procurements.po_amount','transaction_vehicles.rate_per_km','transaction_vehicles.flat_rate','transaction_vehicles.rate_per_night','transaction_vehicles.nights_count','transaction_vehicles.total_cost','transaction_vehicles.created_at', 'requests.is_status','transactions.remarks','vehicles.id as vehicle_id','vehicles.name','vehicles.image', 'vehicles.plate_no', 'transaction_vehicles.type as vehicle_type'])
                ->get();

        return $data;
    }
}
