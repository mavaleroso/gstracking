<?php
namespace App\Services\TransportationDriver;

use Illuminate\Http\Request;
use App\Models\Driver;

class CreateDriver 
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute($fields)
    {
        $driver = Driver::create([
            'fullname' => $fields['fullname'],
            'age' => $fields['age'],
            'sex' => $fields['gender'],
            'contact' => $fields['contactNumber'],
        ]);

        return $driver;
    }
}   