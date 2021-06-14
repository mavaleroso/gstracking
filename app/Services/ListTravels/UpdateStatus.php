<?php
namespace App\Services\ListTravels;

use App\Models\TransactionVehicles;
use App\Models\Request;

class UpdateStatus
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute($id, $url)
    {
        $user = auth()->user()->id;
        $arr = array('luser' => $user, 'lpage' => 'Local_requests' , 'lurl' => $url, 'laction' => 'undo');
        $createLogs = createLogs($arr);

        $requestid = TransactionVehicles::where('id' , $id)->first();
        Request::where('id', $requestid->request_id)->update(['is_status'=> '1']);
        $requests = TransactionVehicles::destroy($id);
        return $requests;
    }
}   