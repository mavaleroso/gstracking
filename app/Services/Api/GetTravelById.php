<?php

namespace App\Services\Api;

use App\Models\RequestTransactions;

class GetTravelById
{
    /**
     * create user execution     
     *
     * @return object
     */
    public function execute($id)
    {
        return RequestTransactions::where('type', 'rito')->where('request_id', $id)->first();
    }
}
