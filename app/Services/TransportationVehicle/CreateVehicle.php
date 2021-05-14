<?php
namespace App\Services\TransportationVehicle;

use Illuminate\Http\Request;
use App\Models\Vehicle;

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

        // dd($fields);
        $file_name = NULL;
        
        if($fields['picture']) {
            $file = $fields['picture'];
            $file_name = 'vehicle-photo-' . time() . '.' . $file->getClientOriginalExtension();
        }
        
        $vehicle = Vehicle::create([
            (!$file_name)? NULL:'image' => $file_name,
            'name' => $fields['name'],
            'description' => $fields['description'],
            'template' => $fields['templateNumber'],
            'capacity' => $fields['capacityNumber'],
            'status' => $fields['status'],
            'remarks' => $fields['remarks']
        ]);

        if ($fields['picture']) {
            ($vehicle)? $file->storeAs('public/images', $file_name):NULL;
        }

        return $vehicle;
    }
}   