<?php
namespace App\Services\Tracking;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Vehicle;

class GetListingVehicle 
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute()
    {
        $query = Vehicle::join('service_providers', 'vehicles.service_provider_id', '=', 'service_providers.id')
                    ->select(['vehicles.*', 'service_providers.company_name']);

      

        $result = Datatable::of($query, request(), [
            'searchable' => [
                'vehicle_type',
                'name',
                'description',
                'template'
            ],
            'orderable' => [
                'id',
                'vehicle_type',
                'name',
                'description',
                'template'
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