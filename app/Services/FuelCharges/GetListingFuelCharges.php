<?php

namespace App\Services\FuelCharges;

use Ccore\Core\Datatable;
use App\Models\FuelCharges;
use Illuminate\Support\Facades\DB;

class GetListingFuelCharges
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute()
    {
        $query = FuelCharges::select(['fuel_charges.id', 'fuel_charges.code', 'drivers.fullname', 'drivers.contact', 'vehicles.name', 'vehicles.plate_no', 'procurements.po_no', 'fuel_charges.gasoline_liters', 'fuel_charges.diesel_liters', 'fuel_charges.unit_price', 'fuel_charges.amount', 'fuel_charges.purpose', 'fuel_charges.status', 'fuel_charges.created_at', DB::raw('IF((procurements.po_amount - SUM(transaction_vehicles.total_cost)) > 0, (procurements.po_amount - SUM(transaction_vehicles.total_cost)), procurements.po_amount) as totalBalance')])
            ->leftJoin('drivers', 'fuel_charges.drivers_id', '=', 'drivers.id')
            ->leftJoin('vehicles', 'fuel_charges.vehicles_id', '=', 'vehicles.id')
            ->leftJoin('procurements', 'fuel_charges.procurements_id', 'procurements.id')
            ->leftJoin('transaction_vehicles', 'procurements.id', '=', 'transaction_vehicles.procurement_id');


        $result = Datatable::of($query, request(), [
            'searchable' => [
                'code',
                'fullname',
                'contact',
                'name',
                'plate_no',
                'po_no',
                'gasoline_liters',
                'diesel_liters',
                'unit_price',
                'amount',
                'purpose',
                'status',
                'totalBalance',
                'created_at'
            ],
            'orderable' => [
                'code',
                'fullname',
                'contact',
                'name',
                'plate_no',
                'po_no',
                'gasoline_liters',
                'diesel_liters',
                'unit_price',
                'amount',
                'purpose',
                'status',
                'totalBalance',
                'created_at'
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
