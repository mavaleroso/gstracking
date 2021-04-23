<?php
namespace App\Services\ListRequests;

use App\Models\Request;

class GetRequestById
{
    /**
     * Get user by id
     *
     * @param string $id
     * @return App\Models\Transaction
     */
    public function execute(int $id)
    {
        $req = Request::where('id', $id)->get();
        return $req;
    }
}
