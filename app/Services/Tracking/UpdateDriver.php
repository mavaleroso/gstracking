<?php
namespace App\Services\Tracking;

use Illuminate\Http\Request;
use App\Models\Driver;

class UpdateDriver 
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute($id, $fields)
    {
        $driver = Driver::where('id', $id)->update([
            'fullname' => $fields['fullname'],
            'age' => $fields['age'],
            'sex' => $fields['gender'],
            'contact' => $fields['contactNumber'],
        ]);

        return $driver;
    }
}   