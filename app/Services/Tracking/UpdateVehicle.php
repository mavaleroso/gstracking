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
    public function execute($id, $fields)
    {
        $data = [
            'service_provider_id' => $fields['serviceProvider'],
            'name' => $fields['name'],
            'description' => $fields['description'],
            'template' => $fields['templateNumber'],
            'capacity' => $fields['capacityNumber'],
            ($fields['driver'] == '')? NULL:'driver_id' => $fields['driver'],
        ];
        
        $vehicle = Vehicle::find($id);
        $response = $vehicle->update($data);

        if($fields['picture']) {
            $file = $fields['picture'];
            $file_name = 'vehicle-photo-' . time() . '.' . $file->getClientOriginalExtension();
            ($response)? $file->storeAs('public/images', $file_name):NULL;
            $vehicle->update([
                'image' => $file_name
            ]);
            Storage::delete('public/images/'.$fields['pictureName']);
        }

        return $response;
    }
}   