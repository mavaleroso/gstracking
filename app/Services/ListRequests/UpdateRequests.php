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
    public function execute($fields)
    {
        $requests = Request::where('id', $fields['id'])->update([
            'is_status' => 4,
            'remarks' => $fields['remarks']
        ]);
        return $requests;
    }
}   