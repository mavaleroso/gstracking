<?php
namespace App\Services\ListTravel;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Transaction;

class GetListingTravel
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute()
    {
        $query = Transaction::leftJoin('requests', 'transactions.request_id', '=', 'requests.id')
                        ->leftJoin('vehicles', 'transactions.vehicle_id', '=', 'vehicles.id')
                        ->leftJoin('procurements', 'transactions.procurement_id', '=', 'procurements.id')
                        ->leftJoin('service_providers', 'vehicles.service_provider_id', '=', 'service_providers.id')
                        ->select(['transactions.id','transactions.trip_ticket', 'service_providers.company_name', 'requests.travel_date', 'transactions.starting_odo','transactions.ending_odo','transactions.date_submit_proc','transactions.travelled','procurements.po_no','procurements.po_amount','transactions.rate_per_km','transactions.flat_rate','transactions.rate_per_night','transactions.nights_count','transactions.total_cost','transactions.created_at']);

        $result = Datatable::of($query, request(), [
            'searchable' => [
                'trip_ticket',
                'company_name',
                'travel_date',
                'starting_odo',
                'ending_odo',
                'date_submit_proc',
                'travelled',
                'po_no',
                'po_amount',
                'rate_per_km',
                'flat_rate',
                'rate_per_night',
                'total_cost'
            ],
            'orderable' => [
                'id',
                'trip_ticket',
                'company_name',
                'travel_date',
                'starting_odo',
                'ending_odo',
                'date_submit_proc',
                'travelled',
                'po_no',
                'po_amount',
                'rate_per_km',
                'flat_rate',
                'rate_per_night',
                'total_cost'
            ]
        ]);

        $records = $result['query']->get();

        return [
            'data' => $records,
            'draw' => intval(request()->draw),
            'recordsTotal' => $result['total'],
            'recordsFiltered' => $result['total']
        ];
    }
}   