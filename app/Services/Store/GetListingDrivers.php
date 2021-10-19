<?php

namespace App\Services\Store;

use App\Models\Driver;

class GetListingDrivers
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute()
    {
        return Driver::where('status', 'Active')->get();
    }
}
