<?php

namespace App\Services\Store;

use Illuminate\Support\Facades\DB;
use App\Models\Vehicle;

class GetListingVehicles
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute($type)
    {
        return Vehicle::select(['vehicles.id', 'vehicles.name', 'vehicles.plate_no', DB::raw('IF(transaction_vehicles.status=3, 1, 0) AS stats'), DB::raw('IF(transaction_vehicles.id, 1, 0) AS used')])
            ->leftJoin('transaction_vehicles', 'transaction_vehicles.vehicle_id', '=', 'vehicles.id')
            ->where('vehicles.type', $type)
            ->where('vehicles.status', 1)
            ->groupBy('vehicles.id')
            ->having('stats', '=', 0)
            ->get();
    }
}
