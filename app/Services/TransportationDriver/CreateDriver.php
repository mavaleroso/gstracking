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
    public function execute($fields, $url)
    {

        $user = auth()->user()->id;
        $arr = array('luser' => $user, 'lpage' => 'Office_driver', 'lurl' => $url, 'laction' => 'create');
        $createLogs = createLogs($arr);

        $driver = Driver::create([
            'type' => 1,
            'emp_id' => $fields['emp_id'],
            'fullname' => $fields['fullname'],
            'birthdate' => $fields['birthdate'],
            'sex' => $fields['gender'],
            'contact' => $fields['contactNumber'],
            'status' => $fields['status'],
        ]);

        return $driver;
    }
}
