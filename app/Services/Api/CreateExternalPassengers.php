<?php

namespace App\Services\Api;

use Illuminate\Support\Arr;
use App\Models\Passenger;

class CreateExternalPassengers
{
    /**
     * create user execution     
     *
     * @return object
     */
    public function execute($fields)
    {

        $passenger = Passenger::create([
            'type' => 2,
            'request_type' => 'rito',
            'request_id' => $fields['travel_id'],
            'name' => $fields['fullname'],
            'designation' => $fields['designation'],
            'gender' => $fields['gender']
        ]);

        return $passenger;
    }
}
