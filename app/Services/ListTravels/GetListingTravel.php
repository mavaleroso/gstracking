<?php
namespace App\Services\ListTravels;

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
    public function execute($fields)
    {
        $query = Transaction::leftJoin('requests', 'transactions.request_id', '=', 'requests.id')
                        ->leftJoin('vehicles', 'transactions.vehicle_id', '=', 'vehicles.id')
                        ->leftJoin('procurements', 'transactions.procurement_id', '=', 'procurements.id')
                        ->leftJoin('service_providers', 'vehicles.service_provider_id', '=', 'service_providers.id')
                        ->select(['transactions.id','transactions.trip_ticket', 'service_providers.company_name', 'requests.travel_date', 'transactions.starting_odo','transactions.ending_odo','transactions.date_submit_proc','transactions.travelled','procurements.po_no','procurements.po_amount','transactions.rate_per_km','transactions.flat_rate','transactions.rate_per_night','transactions.nights_count','transactions.total_cost','transactions.created_at', 'requests.is_status','transactions.remarks']);
                        if ($fields['tripTicket']){
                            $query->where('transactions.trip_ticket', 'like' , '%'.$fields['tripTicket'].'%');
                        }
                        if ($fields['serviceProviders']){
                            $query->where('service_providers.company_name', 'like' , '%'.$fields['serviceProviders'].'%');
                        }
                        if ($fields['dateTravel']){
                            $query->where('requests.travel_date', 'like' , '%'.$fields['dateTravel'].'%');
                        }
                        if ($fields['procurementSub']){
                            $query->where('transactions.date_submit_proc', 'like' , '%'.$fields['procurementSub'].'%');
                        }
                        if ($fields['distanceTravelled']){
                            $query->where('transactions.travelled', 'like' , '%'.$fields['distanceTravelled'].'%');
                        }
                        if ($fields['poNumber']){
                            $query->where('procurements.po_no', 'like' , '%'.$fields['poNumber'].'%');
                        }
                        if ($fields['poAmount']){
                            $query->where('procurements.po_amount', 'like' , '%'.$fields['poAmount'].'%');
                        }
                        if ($fields['rateperKm']){
                            $query->where('transactions.rate_per_km', 'like' , '%'.$fields['rateperKm'].'%');
                        }
                        if ($fields['flatRate']){
                            $query->where('transactions.flat_rate', 'like' , '%'.$fields['flatRate'].'%');
                        }
                        if ($fields['rateperNight']){
                            $query->where('transactions.rate_per_night', 'like' , '%'.$fields['rateperNight'].'%');
                        }
                        if ($fields['numberofNights']){
                            $query->where('transactions.nights_count', 'like' , '%'.$fields['numberofNights'].'%');
                        }


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
                'total_cost',
                'is_status'
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