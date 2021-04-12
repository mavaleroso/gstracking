<?php
namespace App\Services\ListTravel;

use App\Models\Transaction;

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
        
        $trans = Transaction::find($id);
        $data = $trans->leftJoin('requests', 'transactions.request_id', '=', 'requests.id')
                ->leftJoin('vehicles', 'transactions.vehicle_id', '=', 'vehicles.id')
                ->leftJoin('procurements', 'transactions.procurement_id', '=', 'procurements.id')
                ->leftJoin('service_providers', 'vehicles.service_provider_id', '=', 'service_providers.id')
                ->select(['transactions.id','transactions.trip_ticket', 'service_providers.company_name', 'requests.travel_date','requests.depart_time', 'transactions.starting_odo','transactions.ending_odo','transactions.date_submit_proc','transactions.travelled','procurements.po_no','procurements.po_amount','transactions.rate_per_km','transactions.flat_rate','transactions.rate_per_night','transactions.nights_count','transactions.total_cost','transactions.created_at', 'requests.is_status','transactions.remarks','vehicles.id as vehicle_id','vehicles.name as vehicle_name','vehicles.image'])
                ->get();

        return $data;
    }
}