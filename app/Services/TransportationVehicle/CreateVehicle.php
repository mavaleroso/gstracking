<?php
namespace App\Services\TransportationVehicle;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Driver;

class CreateVehicle 
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute($fields)
    {
        $file_name = NULL;
        
        if($fields['picture']) {
            $file = $fields['picture'];
            $file_name = 'vehicle-photo-' . time() . '.' . $file->getClientOriginalExtension();
        }
        
        $vehicle = Vehicle::create([
            'service_provider_id' => $fields['serviceProvider'],
            'driver_id' => $fields['driver'],
            (!$file_name)? NULL:'image' => $file_name,
            'name' => $fields['name'],
            'description' => $fields['description'],
            'template' => $fields['templateNumber'],
            'capacity' => $fields['capacityNumber'],
        ]);

        if ($fields['picture']) {
            ($vehicle)? $file->storeAs('public/images', $file_name):NULL;
        }

        return $vehicle;
    }
}   