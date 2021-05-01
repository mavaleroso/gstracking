<?php
namespace App\Services\ListTravels;

use App\Models\Transaction;
use App\Models\Request;

class UpdateStatus
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute($id)
    {
        $requestid = Transaction::where('id' , $id)->first();
        Request::where('id', $requestid->request_id)->update(['is_status'=> '1']);
        $requests = Transaction::destroy($id);
        return $requests;
    }
}   