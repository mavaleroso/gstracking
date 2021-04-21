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
        $query = Vehicle::leftJoin('service_providers', 'vehicles.service_provider_id', '=', 'service_providers.id')
                        ->leftJoin('drivers', 'vehicles.driver_id', '=', 'drivers.id')
                        ->select(['vehicles.*', 'service_providers.type', 'service_providers.company_name', 'drivers.fullname']);

        $result = Datatable::of($query, request(), [
            'searchable' => [
                'vehicle_type',
                'name',
                'description',
                'template',
                'fullname',
                'company_name',
                'type'
            ],
            'orderable' => [
                'id',
                'vehicle_type',
                'name',
                'description',
                'template',
                'fullname',
                'company_name',
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