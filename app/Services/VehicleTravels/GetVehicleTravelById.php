<?php
namespace App\Services\VehicleTravels;

use App\Models\TransactionVehicles;
use Illuminate\Support\Facades\DB;

class GetVehicleTravelById
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
        $data = $trans->leftJoin('requests', 'transaction_vehicles.request_id', '=', 'requests.id')
                ->leftJoin('vehicles', 'transaction_vehicles.vehicle_id', '=', 'vehicles.id')
                ->leftJoin('procurements', 'transaction_vehicles.procurement_id', '=', 'procurements.id')
                ->select(['transaction_vehicles.id','transaction_vehicles.trip_ticket', 'requests.travel_date','requests.return_date','requests.depart_time', 'transaction_vehicles.starting_odo','transaction_vehicles.ending_odo','transaction_vehicles.date_submit_proc','transaction_vehicles.travelled','procurements.po_no','procurements.po_amount','transaction_vehicles.rate_per_km', 'transaction_vehicles.flat_rate','transaction_vehicles.rate_per_night','transaction_vehicles.nights_count','transaction_vehicles.total_cost','transaction_vehicles.created_at', 'transaction_vehicles.status','transaction_vehicles.remarks','vehicles.id as vehicle_id','vehicles.name','vehicles.image', 'vehicles.plate_no', 'transaction_vehicles.mot as vehicle_type'])
                ->get();

        return $data;
    }
}
