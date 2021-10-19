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
    public function execute($fields, $url)
    {

        $user = auth()->user()->id;
        $arr = array('luser' => $user, 'lpage' => 'Office_vehicle' , 'lurl' => $url, 'laction' => 'create');
        $createLogs = createLogs($arr);

        $file_name = NULL;
        
        if($fields['picture']) {
            $file = $fields['picture']; 
            $file_name = 'vehicle-photo-' . time() . '.' . $file->getClientOriginalExtension();
        }
        
        $vehicle = Vehicle::create([
            (!$file_name)? NULL:'image' => $file_name,
            'type' => 1,
            'name' => $fields['name'],
            'description' => $fields['description'],
            'plate_no' => $fields['templateNumber'],
            'capacity' => $fields['capacityNumber'],
            'status' => $fields['status_radio'],
            'remarks' => $fields['remarks']
        ]);

        if ($fields['picture']) {
            ($vehicle)? $file->storeAs('public/images', $file_name):NULL;
        }

        return $vehicle;
    }
}   