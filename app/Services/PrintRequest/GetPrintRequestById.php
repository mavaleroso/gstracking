<?php
namespace App\Services\PrintRequest;

use App\Models\Transaction;
use App\Models\Destination;
use App\Models\Passenger;

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
        $data['transaction'] = Transaction::select(['requests.id', 'transactions.trip_ticket','requests.type_vehicle','requests.department','requests.purpose','requests.travel_date','requests.depart_time','users_details.first_name','users_details.last_name','vehicles.name','vehicles.template','drivers.fullname'])
                                            ->leftJoin('requests','requests.id','=','transactions.request_id')
                                            ->leftJoin('users_details','users_details.user_id','=','requests.user_id')
                                            ->leftJoin('vehicles','vehicles.id','=','transactions.vehicle_id')
                                            ->leftJoin('drivers','drivers.id','=','vehicles.driver_id')
                                            ->where('transactions.id',$id)
                                            ->get();

        $data['destinations'] = Destination::leftJoin('lib_regions','lib_regions.id','=','destinations.region_id')
                                            ->leftJoin('lib_provinces','lib_provinces.id','=','destinations.province_id')
                                            ->leftJoin('lib_cities','lib_cities.id','=','destinations.city_id')
                                            ->leftJoin('lib_brgys','lib_brgys.id','=','destinations.brgy_id')
                                            ->where('destinations.request_id', $data['transaction'][0]->id)
                                            ->get();
        $data['passengers'] = Passenger::where('request_id', $data['transaction'][0]->id)->get();
        return $data;
    }
}
