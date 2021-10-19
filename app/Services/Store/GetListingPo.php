<?php

namespace App\Services\Store;

use App\Models\Procurement;
use Illuminate\Support\Facades\DB;

class GetListingPo
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute()
    {
        $query = Procurement::leftJoin('transaction_vehicles', 'procurements.id', '=', 'transaction_vehicles.procurement_id')
            ->select(['procurements.*', DB::raw('(procurements.po_amount - SUM(transaction_vehicles.total_cost)) as totalBalance')])
            ->where('procurements.status', 1)
            ->groupBy('procurements.id', 'procurements.po_no')
            ->get();
        return $query;
    }
}
