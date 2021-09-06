<?php

namespace App\Services\FuelCharges;

use Illuminate\Support\Facades\DB;
use App\Models\FuelCharges;

class GetFuelChargesById
{
    /**
     * Get user by id
     *
     * @param string $id
     * @return App\Models\Transaction
     */
    public function execute(int $id)
    {
        return FuelCharges::select('drivers.fullname', 'vehicles.plate_no', 'procurements.po_no', 'fuel_charges.created_at', 'fuel_charges.purpose', 'fuel_charges.code')
            ->leftJoin('drivers', 'drivers.id', '=', 'fuel_charges.drivers_id')
            ->leftJoin('vehicles', 'vehicles.id', '=', 'fuel_charges.vehicles_id')
            ->leftJoin('procurements', 'procurements.id', '=', 'fuel_charges.procurements_id')->where('fuel_charges.id', $id)->first();
    }
}
