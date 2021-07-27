<?php

namespace App\Services\FuelCharges;

use Ccore\Core\Datatable;
use App\Models\FuelCharges;

class GetListingFuelCharges
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute()
    {
        $query = FuelCharges::select(['fuel_charges.id', 'fuel_charges.code', 'drivers.fullname', 'drivers.contact', 'vehicles.name', 'vehicles.plate_no', 'procurements.po_no', 'fuel_charges.particulars', 'fuel_charges.num_liters', 'fuel_charges.unit_price', 'fuel_charges.amount', 'fuel_charges.purpose', 'fuel_charges.status', 'fuel_charges.created_at'])
            ->leftJoin('drivers', 'fuel_charges.drivers_id', '=', 'drivers.id')
            ->leftJoin('vehicles', 'fuel_charges.vehicles_id', '=', 'vehicles.id')
            ->leftJoin('procurements', 'fuel_charges.procurements_id', 'procurements.id');


        $result = Datatable::of($query, request(), [
            'searchable' => [
                'code',
                'fullname',
                'contact',
                'name',
                'plate_no',
                'po_no',
                'particulars',
                'num_liters',
                'unit_price',
                'amount',
                'purpose',
                'status',
                'created_at'
            ],
            'orderable' => [
                'id',
                'code',
                'fullname',
                'contact',
                'name',
                'plate_no',
                'po_no',
                'particulars',
                'num_liters',
                'unit_price',
                'amount',
                'purpose',
                'status',
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
