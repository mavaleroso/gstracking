<?php
namespace App\Services\Logs;

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
        $query = Log::leftJoin('users', 'users.id', '=', 'logs.user_id')
                    ->select(['logs.*','users.name']);

        $result = Datatable::of($query, request(), [
            'searchable' => [
                'name',
                'page',
                'url',
                'action'
            ],
            'orderable' => [
                'id',
                'name',
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