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
        return Vehicle::where('type', $type)->get();
    }
}
