<?php
namespace App\Services\TransportationDriver;

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
    public function execute($id, $fields, $url)
    {
        $user = auth()->user()->id;
        $arr = array('luser' => $user, 'lpage' => 'Office_driver' , 'lurl' => $url, 'laction' => 'edit');
        $createLogs = createLogs($arr);

        $driver = Driver::where('id', $id)->update([
            'fullname' => $fields['fullname'],
            'age' => $fields['age'],
            'sex' => $fields['gender'],
            'contact' => $fields['contactNumber'],
            'status' => $fields['status'],
        ]);

        return $driver;
    }
}   