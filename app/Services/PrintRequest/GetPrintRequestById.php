<?php
namespace App\Services\PrintRequest;

use App\Models\Transaction;
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
        $data['requests'] = Request::select(['requests.serial_code','requests.purpose',DB::raw('CONCAT(divisions.division_code," ", sections.section_code) as department'),'requests.travel_date','requests.return_date','requests.depart_time','requests.is_status'])
                                    ->leftJoin('divisions','requests.division_id','=','divisions.id')   
                                    ->leftJoin('sections','requests.section_id','=','sections.id')
                                    ->leftJoin('destinations','destinations.id','=','requests.id')
                                    ->where('requests.id',$id)->get();

        $data['destinations'] = Destination::leftJoin('lib_regions','lib_regions.id','=','destinations.region_id')
                                    ->leftJoin('lib_provinces','lib_provinces.id','=','destinations.province_id')
                                    ->leftJoin('lib_cities','lib_cities.id','=','destinations.city_id')
                                    ->leftJoin('lib_brgys','lib_brgys.id','=','destinations.brgy_id')
                                    ->where('destinations.request_id', $id)
                                    ->get();

        $data['passengers'] = Passenger::where('passengers.request_id', $id)->get();
        return $data;
    }
}
