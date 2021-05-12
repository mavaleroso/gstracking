<?php
namespace App\Services\ListRequests;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;
use App\Models\Request;

class GetListingRequest
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute()
    {
        $query = Request::leftJoin('users_details', 'requests.user_id', '=', 'users_details.user_id')
                        ->leftJoin('divisions', 'requests.division_id','=','divisions.id')
                        ->leftJoin('sections', 'requests.section_id','=','sections.id')
                        ->select(['requests.*', DB::raw('CONCAT(users_details.first_name," ",users_details.last_name) AS fullname'), DB::raw('CONCAT(divisions.division_code, ", ", sections.section_code) AS department')]);

        $result = Datatable::of($query, request(), [
            'searchable' => [
                'serial_code',
                'department',
                'purpose',
                'travel_date',
                'depart_time',
                'is_status',
                'created_at',
                'fullname',
            ],
            'orderable' => [
                'id',
                'serial_code',
                'department',
                'purpose',
                'travel_date',
                'depart_time',
                'is_status',
                'created_at',
                'fullname',
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