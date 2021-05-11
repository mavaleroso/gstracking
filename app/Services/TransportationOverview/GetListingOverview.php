<?php
namespace App\Services\TransportationOverview;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Vehicle;

class GetListingOverview
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute()
    {
        $query = Vehicle::leftJoin('drivers', 'vehicles.driver_id', '=', 'drivers.id')
                        ->select(['vehicles.*','drivers.fullname']);

        $result = Datatable::of($query, request(), [
            'searchable' => [
                'vehicle_type',
                'name',
                'description',
                'template',
                'fullname',
                'type'
            ],
            'orderable' => [
                'id',
                'vehicle_type',
                'name',
                'description',
                'template',
                'fullname',
                'type'
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