<?php

namespace App\Services\TransportationVehicle;

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
        $query = Vehicle::select(['*'])->where('type', 1);

        $result = Datatable::of($query, request(), [
            'searchable' => [
                'name',
                'description',
                'plate_no',
                'status',
                'remarks'

            ],
            'orderable' => [
                'id',
                'name',
                'description',
                'plate_no',
                'status',
                'remarks'
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
