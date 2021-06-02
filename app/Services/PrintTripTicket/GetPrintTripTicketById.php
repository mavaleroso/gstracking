<?php
namespace App\Services\PrintTripTicket;

use App\Models\TransactionVehicles;
use App\Models\Destination;
use Illuminate\Support\Facades\DB;

class GetPrintTripTicketById
{
    /**
     * Get user by id
     *
     * @param string $id
     * @return App\Models\Transaction
     */
    public function execute(int $id)
    {
        $data['travel'] = TransactionVehicles::select(['drivers.fullname','vehicles.name as vehicle_name','transaction_vehicles.type as vehicle_type','vehicles.plate_no as vehicle_plate_no', 'requests.purpose','requests.travel_date'])
                                    ->leftJoin('requests', 'requests.id', '=', 'transaction_vehicles.request_id')
                                    ->leftJoin('vehicles', 'vehicles.id','=','transaction_vehicles.vehicle_id')
                                    ->leftJoin('drivers', 'drivers.id','=','transaction_vehicles.driver_id')
                                    ->where('transaction_vehicles.id',$id)
                                    ->get();

        $data['destinations'] = TransactionVehicles::select(['lib_cities.city_name','lib_provinces.province_code'])
                                    ->leftJoin('requests','requests.id','=','transaction_vehicles.request_id')
                                    ->leftJoin('destinations','destinations.request_id','=','requests.id')
                                    ->leftJoin('lib_provinces','lib_provinces.id','=','destinations.province_id')
                                    ->leftJoin('lib_cities','lib_cities.id','=','destinations.city_id')
                                    ->where('transaction_vehicles.id',$id)
                                    ->get();

        return $data;        
    }
}
