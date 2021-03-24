<?php
namespace App\Services\Tracking;

use Illuminate\Http\Request;
use App\Models\ServiceProvider;

class CreateServiceProvider 
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute($fields)
    {
        $serviceprovider = ServiceProvider::create([
            'type' => $fields['type'],
            'company_name' => $fields['companyName'],
            'vehicle_count' => $fields['vehicleCount'],
        ]);

        return $serviceprovider;
    }
}   