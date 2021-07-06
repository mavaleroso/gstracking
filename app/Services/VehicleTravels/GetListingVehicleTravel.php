<?php

namespace App\Services\VehicleTravels;

use Illuminate\Support\Facades\DB;
use App\Models\TransactionVehicles;
use App\Models\RequestTransactions;
use App\Models\System;
use App\Models\Request;
use App\Models\Destination;
use App\Models\Passenger;

class GetListingVehicleTravel
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute($fields)
    {
        $reqt = RequestTransactions::select(DB::raw('GROUP_CONCAT(DISTINCT request_transactions.request_id) AS req_id'), 'type')->groupBy('group')->get();
        for ($i = 0; $i < count($reqt); $i++) {
            $data[] = ($reqt[$i]->type == 'rito') ? $this->api($reqt[$i]->req_id) : $this->local($reqt[$i]->req_id);
        };

        $ndata = [];

        for ($x = 0; $x < count($data); $x++) {
            for ($y = 0; $y < count($data[$x]); $y++) {
                array_push($ndata, $data[$x][$y]);
            }
        }

        $ids = [];

        for ($i = 0; $i < count($ndata); $i++) {
            if ($ndata[$i]->status == 'Approved') {
                array_push($ids, $ndata[$i]->id);
            }
        }

        $results = [];
        $query = TransactionVehicles::leftJoin('vehicles', 'vehicles.id', '=', 'transaction_vehicles.vehicle_id')
            ->leftJoin('procurements', 'transaction_vehicles.procurement_id', '=', 'procurements.id')
            ->leftJoin('request_transactions', 'transaction_vehicles.id', '=', 'request_transactions.transaction_vehicles_id')
            ->select(['transaction_vehicles.id', 'transaction_vehicles.trip_ticket', 'transaction_vehicles.starting_odo', 'transaction_vehicles.ending_odo', 'transaction_vehicles.date_submit_proc', 'transaction_vehicles.travelled', 'procurements.po_no', 'procurements.po_amount', 'transaction_vehicles.rate_per_km', 'transaction_vehicles.flat_rate', 'transaction_vehicles.rate_per_night', 'transaction_vehicles.nights_count', 'transaction_vehicles.total_cost', 'transaction_vehicles.created_at', 'transaction_vehicles.remarks', 'request_transactions.mot as vehicle_type', 'vehicles.plate_no', 'transaction_vehicles.status', DB::raw('GROUP_CONCAT(DISTINCT request_transactions.request_id) AS req_id'), 'request_transactions.group', 'request_transactions.type'])
            ->whereIn('request_transactions.request_id', $ids)
            ->groupBy('transaction_vehicles.id');

        $data = $query->paginate(10, ['*'], 'page', $fields['pages']);

        for ($i = 0; $i < count($data); $i++) {
            $results['data'][] = [
                'tracking_no' => ($data[$i]->type == 'rito') ? $this->api($data[$i]->req_id) : $this->local($data[$i]->req_id),
                'results' => $data[$i]
            ];
        }
        $results['count'] = count($query->get());

        return $results;
    }

    public function api($requests)
    {
        $tracking = [];
        $req = explode(',', $requests);

        $portal_token = System::where('handler', 'PORTAL_TOKEN')->pluck('value')->first();

        for ($i = 0; $i < count($req); $i++) {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://caraga-portal.dswd.gov.ph/api/travel/details?travel_id=' . $req[$i],
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
            if (header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found", true, 404)) {
                $tracking[] = 'Error 404';
            } else {
                try {
                    $tracking[] = json_decode($response)[0];
                } catch (\Throwable $th) {
                    $tracking[] = json_decode($response);
                }
            }
        }

        return $tracking;
    }

    public function local($id)
    {
        $request = Request::find($id);
        $place = Destination::select(DB::raw("GROUP_CONCAT(IF(lib_brgys.`brgy_name`, CONCAT(lib_brgys.`brgy_name`, ' ', lib_cities.`city_name`, ' ', lib_provinces.`province_code`, ' ', lib_regions.`region_nick`) , CONCAT(lib_cities.`city_name`, ' ', lib_provinces.`province_code`, ' ', lib_regions.`region_nick`))) as place"))
            ->leftJoin('lib_regions', 'lib_regions.id', '=', 'destinations.region_id')
            ->leftJoin('lib_provinces', 'lib_provinces.id', '=', 'destinations.province_id')
            ->leftJoin('lib_cities', 'lib_cities.id', '=', 'destinations.city_id')
            ->leftJoin('lib_brgys', 'lib_brgys.id', '=', 'destinations.brgy_id')
            ->where('destinations.request_id', $id)
            ->first();
        // $data =[
        //     'purpose' => $request->purpose,
        //     'inclusive_from' => $request->travel_date,
        //     'inclusive_to' => $request->return_date,
        //     'place' => $place->place,
        //     'status' => "Approved",
        //     'passenger_count' => (string) Passenger::select(DB::raw('COUNT(*) as total'))->where('request_id', $id)->first()->total,
        // ];
        $data[] = (object) array(
            'id' => $request->id,
            'purpose' => $request->purpose,
            'inclusive_from' => $request->travel_date,
            'inclusive_to' => $request->return_date,
            'place' => $place->place,
            'status' => "Approved",
            'passenger_count' => (string) Passenger::select(DB::raw('COUNT(*) as total'))->where('request_id', $id)->first()->total,
        );
        return $data;
    }

    // if ($fields['division']){
    //     $query->where('requests.division_id', 'like' , '%'.$fields['division'].'%');
    // }
    // if ($fields['section']){
    //     $query->where('requests.section_id', 'like' , '%'.$fields['section'].'%');
    // }
    // if ($fields['tripTicket']){
    //     $query->where('transaction_vehicles.trip_ticket', 'like' , '%'.$fields['tripTicket'].'%');
    // }
    // if ($fields['dateTravel']){
    //     $query->where('requests.travel_date', 'like' , '%'.$fields['dateTravel'].'%');
    // }
    // if ($fields['procurementSub']){
    //     $query->where('transaction_vehicles.date_submit_proc', 'like' , '%'.$fields['procurementSub'].'%');
    // }
    // if ($fields['distanceTravelled']){
    //     $query->where('transaction_vehicles.travelled', 'like' , '%'.$fields['distanceTravelled'].'%');
    // }
    // if ($fields['poNumber']){
    //     $query->where('procurements.po_no', 'like' , '%'.$fields['poNumber'].'%');
    // }
    // if ($fields['poAmount']){
    //     $query->where('procurements.po_amount', 'like' , '%'.$fields['poAmount'].'%');
    // }
    // if ($fields['rateperKm']){
    //     $query->where('transaction_vehicles.rate_per_km', 'like' , '%'.$fields['rateperKm'].'%');
    // }
    // if ($fields['flatRate']){
    //     $query->where('transaction_vehicles.flat_rate', 'like' , '%'.$fields['flatRate'].'%');
    // }
    // if ($fields['rateperNight']){
    //     $query->where('transaction_vehicles.rate_per_night', 'like' , '%'.$fields['rateperNight'].'%');
    // }
    // if ($fields['numberofNights']){
    //     $query->where('transaction_vehicles.nights_count', 'like' , '%'.$fields['numberofNights'].'%');
    // }
    // if ($fields['vehicleTemplate']){
    //     $query->where('vehicles.plate_no', 'like' , '%'.$fields['vehicleTemplate'].'%');
    // }
}
