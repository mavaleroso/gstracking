<?php

namespace App\Services\RitoRequest;

use App\Models\Passenger;

class UpdateExternalPassengers
{
    /**
     * Get user by email
     *1
     * @param string $email
     */
    public function execute($id, $fields, $url)
    {
        Passenger::where('type', 2,)->where('request_id', $id)->delete();
        for ($i = 0; $i < $fields['ext_total']; $i++) {
            Passenger::create([
                'type' => 2,
                'request_id' => $id,
                'name' => $fields['name_' . $i],
                'designation' => $fields['designation_' . $i],
                'gender' => $fields['gender_' . $i]
            ]);
        }
    }
}
