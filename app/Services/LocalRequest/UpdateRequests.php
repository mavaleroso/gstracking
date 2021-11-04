<?php

namespace App\Services\LocalRequest;

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
    public function execute($fields, $url)
    {
        $user = auth()->user()->id;
        $arr = array('luser' => $user, 'lpage' => 'Local_requests', 'lurl' => $url, 'laction' => 'declined');
        createLogs($arr);

        $requests = Request::where('id', $fields['id'])->update([
            'is_status' => 4,
            'remarks' => $fields['remarks']
        ]);
        return $requests;
    }
}
