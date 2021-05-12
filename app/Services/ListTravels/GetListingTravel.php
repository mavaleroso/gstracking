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
                        ->leftJoin('office_vehicles', 'transactions.office_id','=','office_vehicles.id')
                        ->leftJoin('rental_vehicles', 'transactions.rental_id','=','rental_vehicles.id')
                        ->leftJoin('vehicles', 'office_vehicles.vehicle_id', '=', 'vehicles.id')
                        ->leftJoin('drivers', 'office_vehicles.driver_id', '=', 'drivers.id')
                        ->leftJoin('divisions', 'requests.division_id', '=', 'divisions.id')
                        ->leftJoin('sections', 'requests.section_id', '=', 'sections.id')
                        ->leftJoin('procurements', 'transactions.procurement_id', '=', 'procurements.id')
                        ->select(['transactions.id','transactions.trip_ticket', 'transactions.vehicle_type', 'requests.travel_date', 'transactions.starting_odo','transactions.ending_odo','transactions.date_submit_proc','transactions.travelled','procurements.po_no','procurements.po_amount','transactions.rate_per_km','transactions.flat_rate','transactions.rate_per_night','transactions.nights_count','transactions.total_cost','transactions.created_at', 'requests.is_status','transactions.remarks', DB::raw('IFNULL(vehicles.name,rental_vehicles.vehicle_name) AS vehicle_name'), DB::raw('IFNULL(vehicles.template,rental_vehicles.vehicle_template) as vehicle_template'), DB::raw('IFNULL(drivers.fullname,rental_vehicles.driver_name) as driver_name'), DB::raw('IFNULL(drivers.contact,rental_vehicles.driver_contact) as driver_contact'), 'divisions.division_code', 'sections.section_code']);

        if ($fields['division']){
            $query->where('requests.division_id', 'like' , '%'.$fields['division'].'%');
        }
        if ($fields['section']){
            $query->where('requests.section_id', 'like' , '%'.$fields['section'].'%');
        }
        if ($fields['tripTicket']){
            $query->where('transactions.trip_ticket', 'like' , '%'.$fields['tripTicket'].'%');
        }
        if ($fields['serviceProviders']){
            $query->where('transactions.vehicle_type', 'like' , '%'.$fields['serviceProviders'].'%');
        }
        if ($fields['vehicleName']){
            $query->where('vehicle_name', 'like' , '%'.$fields['vehicleName'].'%');
        }
        if ($fields['vehicleTemplate']){
            $query->where('vehicle_template', 'like' , '%'.$fields['vehicleTemplate'].'%');
        }
        if ($fields['driverName']){
            $query->where('driver_name', 'like' , '%'.$fields['driverName'].'%');
        }
        if ($fields['driverContact']){
            $query->where('driver_contact', 'like' , '%'.$fields['driverContact'].'%');
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
                'vehicle_type',
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
                'vehicle_name',
                'vehicle_template',
                'driver_name',
                'driver_contact',
                'division_code',
                'section_code',
            ],
            'orderable' => [
                'id',
                'trip_ticket',
                'vehicle_type',
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
                'vehicle_name',
                'vehicle_template',
                'driver_name',
                'driver_contact',
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