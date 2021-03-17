<?php
namespace App\Services\Tracking;

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
        try {
            if($this->request->hasFile('picture')) {
                $file = $this->request->file('picture');
                $file_name = 'vehicle-photo-' . time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('images', $file_name);
                return response()->json([
                    'message' => 'File uploaded successfully!'
                ], 200);
            }
        } catch (\Exeption $e) {
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
        // $vehicle = Vehicle::create([
        //     'service_provider_id' => $fields['serviceProvider'],
        // ]);
    }
}