<?php
namespace App\Services\TransportationServiceProvider;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ServiceProvider;

class GetListingServiceProvider
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute()
    {
        $query = ServiceProvider::select(['*']);

      

        $result = Datatable::of($query, request(), [
            'searchable' => [
                'type',
                'company_name',
                'vehicle_count'

            ],
            'orderable' => [
                'id',
                'type',
                'company_name',
                'vehicle_count'
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