<?php
namespace App\Services\PrintRequest;

use App\Models\TransactionVehicles;
use App\Models\Destination;
use App\Models\Passenger;
use App\Models\Request;
use App\Models\RequestTransactions;
use App\Models\System;
use Illuminate\Support\Facades\DB;
use RequestTransaction;

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
        $reqTrans = RequestTransactions::where('group', $id)->get();

        for ($i=0; $i < count($reqTrans); $i++) { 
            $requests[] = [
                'data' => $this->travel_api($reqTrans[$i]->request_id),
                'passengers' => $this->passenger_api($reqTrans[$i]->request_id),
                'vehicles'
            ];
        }
      
        // $data['requests'] = TransactionVehicles::select(['requests.serial_code','requests.purpose',DB::raw('CONCAT(divisions.division_code," ", sections.section_code) as department'),'requests.travel_date','requests.return_date','requests.depart_time','requests.is_status'])
        //                             ->leftJoin('requests', 'requests.id', '=', 'transaction_vehicles.request_id')
        //                             ->leftJoin('divisions','requests.division_id','=','divisions.id')   
        //                             ->leftJoin('sections','requests.section_id','=','sections.id')
        //                             ->leftJoin('destinations','destinations.id','=','requests.id')
        //                             ->where('requests.id',$id)
        //                             ->groupBy('requests.id')
        //                             ->get();

        // $data['destinations'] = Destination::leftJoin('lib_regions','lib_regions.id','=','destinations.region_id')
        //                             ->leftJoin('lib_provinces','lib_provinces.id','=','destinations.province_id')
        //                             ->leftJoin('lib_cities','lib_cities.id','=','destinations.city_id')
        //                             ->leftJoin('lib_brgys','lib_brgys.id','=','destinations.brgy_id')
        //                             ->where('destinations.request_id', $id)
        //                             ->get();

        // $data['passengers'] = Passenger::where('passengers.request_id', $id)->get();

        // $data['vehicles'] = TransactionVehicles::select(['transaction_vehicles.id', 'vehicles.name', 'vehicles.plate_no', 'drivers.fullname', 'drivers.contact'])
        //                             ->leftJoin('vehicles','vehicles.id','=','transaction_vehicles.vehicle_id')
        //                             ->leftJoin('drivers','drivers.id','=','transaction_vehicles.driver_id')
        //                             ->where('transaction_vehicles.request_id', $id)
        //                             ->get();
        // return $data;
    }

    public function travel_api($id)
    {
        $portal_token = System::where('handler', 'PORTAL_TOKEN')->pluck('value')->first();

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://caraga-portal.dswd.gov.ph/api/travel/details?travel_id=' . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: ' . $portal_token,
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);
    }

    public function passenger_api($id)
    {
        $portal_token = System::where('handler', 'PORTAL_TOKEN')->pluck('value')->first();

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://caraga-portal.dswd.gov.ph/api/travel/details/people/?travel_id=' . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: ' . $portal_token,
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);
    }
}
