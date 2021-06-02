<?php
namespace App\Services\PrintRequest;

use App\Models\TransactionVehicles;
use App\Models\Destination;
use App\Models\Passenger;
use App\Models\Request;
use Illuminate\Support\Facades\DB;

class GetPrintRequestById
{
    /**
     * Get user by id
     *
     * @param string $id
     * @return App\Models\Transaction
     */
    public function execute(int $id)
    {
        $data['requests'] = TransactionVehicles::select([''])
                                    ->leftJoin('requests', 'requests.id', '=', 'transaction_vehicles.request_id')
                                    ->leftJoin('divisions','requests.division_id','=','divisions.id')   
                                    ->leftJoin('sections','requests.section_id','=','sections.id')
                                    ->leftJoin('destinations','destinations.id','=','requests.id')
                                    ->where('requests.id',$id)
                                    ->groupBy('requests.id')
                                    ->get();

        $data['destinations'] = Destination::leftJoin('lib_regions','lib_regions.id','=','destinations.region_id')
                                    ->leftJoin('lib_provinces','lib_provinces.id','=','destinations.province_id')
                                    ->leftJoin('lib_cities','lib_cities.id','=','destinations.city_id')
                                    ->leftJoin('lib_brgys','lib_brgys.id','=','destinations.brgy_id')
                                    ->where('destinations.request_id', $id)
                                    ->get();

        $data['passengers'] = Passenger::where('passengers.request_id', $id)->get();

        $data['vehicles'] = TransactionVehicles::select(['transaction_vehicles.id', 'vehicles.name', 'vehicles.plate_no', 'drivers.fullname', 'drivers.contact'])
                                    ->leftJoin('vehicles','vehicles.id','=','transaction_vehicles.vehicle_id')
                                    ->leftJoin('drivers','drivers.id','=','transaction_vehicles.driver_id')
                                    ->where('transaction_vehicles.request_id', $id)
                                    ->get();
        return $data;
    }
}
