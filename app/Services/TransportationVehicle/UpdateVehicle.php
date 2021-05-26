<?php
namespace App\Services\TransportationVehicle;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Vehicle;

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
            'name' => $fields['name'],
            'description' => $fields['description'],
            'plate_no' => $fields['templateNumber'],
            'capacity' => $fields['capacityNumber'],
            'status' => $fields['status_radio'],
            'remarks' => $fields['remarks']

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