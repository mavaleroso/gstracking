<?php
namespace App\Services\PrintRequest;

use App\Models\UserDetail;
use App\Models\RequestTransactions;
use App\Models\System;
use App\Models\Request;
use App\Models\Destination;
use App\Models\Passenger;
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
        $reqTrans = RequestTransactions::where('group', $id)->groupBy('request_id')->get();

        for ($i=0; $i < count($reqTrans); $i++) { 
            $requests['travels'][] = [
                'data' => ($reqTrans[0]->type == 'rito') ? $this->rito_travel_api($reqTrans[$i]->request_id) : $this->local_travel($reqTrans[$i]->request_id),
                'passengers' => ($reqTrans[0]->type == 'rito') ? $this->rito_passenger_api($reqTrans[$i]->request_id) : $this->local_passenger($reqTrans[$i]->request_id),
            ];
        }
        $requests['trans'] = $reqTrans;
        $requests['date_now'] = System::select([DB::raw('now() as dn')])->first()->dn;
        $requests['gs_staff'] = UserDetail::where('user_id', $reqTrans[0]->user_id)->first();
        $requests['vehicles'] = $this->vehicles_drivers($id);
      
       
        return $requests;
    }

    public function rito_travel_api($id)
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

    public function rito_passenger_api($id)
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

    public function vehicles_drivers($id)
    {
        $query = RequestTransactions::select(['vehicles.name', 'vehicles.plate_no', 'drivers.fullname', 'drivers.contact'])
                                    ->leftJoin('transaction_vehicles', 'request_transactions.transaction_vehicles_id', '=', 'transaction_vehicles.id')
                                    ->leftJoin('vehicles', 'transaction_vehicles.vehicle_id', '=', 'vehicles.id')
                                    ->leftJoin('drivers', 'transaction_vehicles.driver_id', '=', 'drivers.id')
                                    ->where('request_transactions.group', $id)
                                    ->get();

        return $query;
    }

    public function local_travel($id)
    {
        $req = Request::find($id);
        $place = Destination::select(DB::raw("GROUP_CONCAT(IF(lib_brgys.`brgy_name`, CONCAT(lib_brgys.`brgy_name`, ' ', lib_cities.`city_name`, ' ', lib_provinces.`province_code`, ' ', lib_regions.`region_nick`) , CONCAT(lib_cities.`city_name`, ' ', lib_provinces.`province_code`, ' ', lib_regions.`region_nick`))) as place"))
                            ->leftJoin('lib_regions', 'lib_regions.id', '=', 'destinations.region_id')
                            ->leftJoin('lib_provinces', 'lib_provinces.id', '=', 'destinations.province_id')
                            ->leftJoin('lib_cities', 'lib_cities.id', '=', 'destinations.city_id')
                            ->leftJoin('lib_brgys', 'lib_brgys.id', '=', 'destinations.brgy_id')
                            ->where('destinations.request_id', $id)
                            ->first();
                
        $department = Request::select(DB::raw('CONCAT(divisions.division_name, " ", sections.section_name) as dept'))
                            ->leftJoin('divisions', 'divisions.id', '=', 'requests.division_id')
                            ->leftJoin('sections', 'sections.id', '=', 'requests.section_id')
                            ->where('requests.id', $id)->first()->dept;
        $data[] = [
            'department' => $department,
            'depart_time' => $req->depart_time,
            'purpose' => $req->purpose,
            'inclusive_from' => $req->travel_date,
            'inclusive_to' => $req->return_date,
            'place' => $place->place,
            'requested_by' =>  $this->requestor($req->user_id),
            'passenger_count' => (string) Passenger::select(DB::raw('COUNT(*) as total'))->where('request_id', $id)->first()->total,
        ];

        return $data;
    }

    public function local_passenger($id)
    {
        return Passenger::where('request_id', $id)->get();
    }

    public function requestor($id)
    {
        $user = UserDetail::where('user_id', $id)->first();
        return $user->first_name . ' ' . $user->last_name;
    }
}
