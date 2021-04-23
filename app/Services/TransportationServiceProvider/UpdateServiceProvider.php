<?php
namespace App\Services\TransportationServiceProvider;

use Illuminate\Http\Request;
use App\Models\ServiceProvider;

class UpdateServiceProvider 
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute($id, $fields)
    {
        $svc = ServiceProvider::where('id', $id)->update([
            'type' => $fields['type'],
            'company_name' => $fields['companyName'],
            'vehicle_count' => $fields['vehicleCount'],
        ]);

        return $svc;
    }
}   