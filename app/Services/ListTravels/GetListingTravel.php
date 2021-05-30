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
                        ->leftJoin('transaction_vehicles', 'transactions.id', '=', 'transaction_vehicles.transaction_id')
                        ->leftJoin('divisions', 'requests.division_id', '=', 'divisions.id')
                        ->leftJoin('sections', 'requests.section_id', '=', 'sections.id')
                        ->leftJoin('procurements', 'transactions.procurement_id', '=', 'procurements.id')
                        ->select(['transaction_vehicles.id','transactions.trip_ticket', 'requests.travel_date', 'transaction_vehicles.starting_odo','transaction_vehicles.ending_odo','transactions.date_submit_proc','transaction_vehicles.travelled','procurements.po_no','procurements.po_amount','transaction_vehicles.rate_per_km','transaction_vehicles.flat_rate','transaction_vehicles.rate_per_night','transaction_vehicles.nights_count','transaction_vehicles.total_cost','transactions.created_at', 'requests.is_status','transactions.remarks', 'divisions.division_code', 'sections.section_code']);

        if ($fields['division']){
            $query->where('requests.division_id', 'like' , '%'.$fields['division'].'%');
        }
        if ($fields['section']){
            $query->where('requests.section_id', 'like' , '%'.$fields['section'].'%');
        }
        if ($fields['tripTicket']){
            $query->where('transactions.trip_ticket', 'like' , '%'.$fields['tripTicket'].'%');
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
                'division_code',
                'section_code',
            ],
            'orderable' => [
                'id',
                'trip_ticket',
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
                'is_status',
                'division_code',
                'section_code',
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