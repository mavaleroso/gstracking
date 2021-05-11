<?php
namespace App\Services\Po;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Procurement;

class GetListingPo 
{
    /**
     * Get user by email
     *1
     * @param string $email
     */
    public function execute()
    {
        $query = Procurement::leftJoin('transactions','procurements.id','=','transactions.procurement_id')
                ->select(['procurements.*', DB::raw('(procurements.po_amount - SUM(transactions.total_cost)) as totalBalance')])
                ->groupBy('procurements.id','procurements.po_no');
        
        $result = Datatable::of($query, request(), [
            'searchable' => [
                'id',
                'po_no',
                'po_amount',
                'created_at',
                'status',
            ],
            'orderable' => [
                'id',
                'po_no',
                'po_amount',
                'totalBalance',
                'created_at',
                'status',
            ]
        ]);

        $records = $result['query']->get();

        return [
            'data' => $records,
            'draw' => intval(request()->draw),
            'recordsTotal' => $result['total'],
            'recordsFiltered' => $result['total']
        ];

        return $query;
    }


}   