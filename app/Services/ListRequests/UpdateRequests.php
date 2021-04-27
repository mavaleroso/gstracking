<?php
namespace App\Services\ListRequests;

// use Illuminate\Http\Request;
use App\Models\Request;

class UpdateRequests 
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute($id)
    {
        $requests = Request::where('id', $id)->update([
            'is_status' => 4
        ]);
        return $requests;
    }
}   