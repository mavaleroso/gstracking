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
    public function execute()
    {
        return Vehicle::where('type', 1)->get();
    }
}
