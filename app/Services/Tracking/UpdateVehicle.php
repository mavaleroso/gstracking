<?php
namespace App\Services\Tracking;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Driver;

class UpdateVehicle 
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute($fields)
    {
        
        
        $vehicle = Vehicle::where('id', $fields['id'])->update([
            'service_provider_id' => $fields['serviceProvider'],
            'name' => $fields['name'],
            'description' => $fields['description'],
            'template' => $fields['templateNumber'],
            'capacity' => $fields['capacityNumber'],
        ]);

        if($fields['picture']) {
            $file = $fields['picture'];
            $file_name = 'vehicle-photo-' . time() . '.' . $file->getClientOriginalExtension();
            ($vehicle)? $file->storeAs('public/images', $file_name):NULL;
            Vehicle::where('id', $fields['id'])->update([
                'image' => $file_name
            ]);
            Storage::delete('public/images/'.$fields['pictureName']);
        }

        if ($vehicle) {
            if ($fields['drivers']) {
                $drivers = explode(',', $fields['drivers']);
                $driver = Driver::where('vehicle_id', $fields['id'])->update([
                    'vehicle_id' => NULL
                ]);
                $driver = Driver::whereIn('id', $drivers)->update([
                    'vehicle_id' => $fields['id']
                ]);
            }
        }

        return $vehicle;
    }
}   