<?php

namespace App\Services\TravelsStatus;

use App\Models\RequestTransactions;

class UpdateTravelStatusById
{
    public function execute($id)
    {
        return RequestTransactions::where('id', $id)->update(['status' => 1]);
    }
}
