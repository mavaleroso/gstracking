<?php
namespace App\Services\Tracking;

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
    public function execute($fields)
    {
        $svc = ServiceProvider::where('id', $fields['id'])->update([
            'type' => $fields['type'],
            'company_name' => $fields['companyname'],
            'vehicle_count' => $fields['vehiclecount'],
        ]);

        return $svc;
    }
}   