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
     *
     * @param string $email
     */
    public function execute()
    {
        // $query = Vehicle::select(['*']);
        $query = Procurement::select(['*']);
       
        $result = Datatable::of($query, request(), [
            'searchable' => [
                'id',
                'po_no',
                'po_amount',
                'created_at',
                'balance',
                'status',
            ],
            'orderable' => [
                'id',
                'po_no',
                'po_amount',
                'created_at',
                'balance',
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