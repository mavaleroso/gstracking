<?php
namespace App\Services\Tracking;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Log;

class GetListingLogs 
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute()
    {
        // $query = Vehicle::select(['*']);
        $query = Log::select(['*']);
        
       
        $result = Datatable::of($query, request(), [
            'searchable' => [
                'page',
                'url',
                'action'
            ],
            'orderable' => [
                'page',
                'url',
                'action'
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