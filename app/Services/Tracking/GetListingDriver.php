<?php
namespace App\Services\Tracking;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Driver;

class GetListingDriver
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute()
    {
        $query = Driver::select(['*']);

        $result = Datatable::of($query, request(), [
            'searchable' => [
                'fullname',
                'age',
                'sex',
                'contact',
                'updated_at'
            ],
            'orderable' => [
                'id',
                'fullname',
                'age',
                'sex',
                'contact',
                'updated_at'
            ]
        ]);

        $records = $result['query']->get();

        return [
            'data' => $records,
            'draw' => intval(request()->draw),
            'recordsTotal' => $result['total'],
            'recordsFiltered' => $result['total']
        ];
    }
}   