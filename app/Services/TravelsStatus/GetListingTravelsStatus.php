<?php

namespace App\Services\TravelsStatus;

use Illuminate\Support\Facades\DB;
use App\Models\RequestTransactions;
use App\Models\transactionVehicles;
use App\Models\System;
use App\Models\Request;
use App\Models\Passenger;
use App\Models\Destination;

class GetListingTravelsStatus
{
    /**
     * Get user by email
     *1
     * @param string $email
     */
    public function execute($fields)
    {

        $results = [];

        $reqt = RequestTransactions::select('type', 'mot', 'group', DB::raw('GROUP_CONCAT(DISTINCT request_id) AS requests'), DB::raw('GROUP_CONCAT(DISTINCT transaction_vehicles_id) AS transveid'))
            ->groupBy('group')
            ->paginate(10, ['*'], 'page', $fields['pages']);


        for ($i = 0; $i < count($reqt); $i++) {
            $results['data'][] = [
                'group' => $reqt[$i]->group,
                'type' => $reqt[$i]->type,
                'mot' => $reqt[$i]->mot,
                'tracking_no' => ($reqt[$i]->type == 'rito') ? $this->rito($reqt[$i]->requests) : $this->local($reqt[$i]->requests),
                'transactions' => $this->transaction($reqt[$i]->transveid)
            ];
        }
        $results['count'] = count(RequestTransactions::groupBy('group')->get());

        return $results;
    }

    public function rito($requests)
    {
        $tracking = [];
        $req = explode(',', $requests);

        $portal_token = System::where('handler', 'PORTAL_TOKEN')->pluck('value')->first();

        for ($i = 0; $i < count($req); $i++) {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://caraga-portal.dswd.gov.ph/api/travel/details/?travel_id=' . $req[$i],
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

    public function transaction($trans_id)
    {
        $trans = explode(',', $trans_id);
        return $transactions[] = transactionVehicles::whereIn('id', $trans)->get();
    }

    public function local($id)
    {
        $req = Request::find($id);
        // $place = Destination::select(DB::raw("GROUP_CONCAT(IF(lib_brgys.`brgy_name`, CONCAT(lib_brgys.`brgy_name`, ' ', lib_cities.`city_name`, ' ', lib_provinces.`province_code`, ' ', lib_regions.`region_nick`) , CONCAT(lib_cities.`city_name`, ' ', lib_provinces.`province_code`, ' ', lib_regions.`region_nick`))) as place"))
        //     ->leftJoin('lib_regions', 'lib_regions.id', '=', 'destinations.region_id')
        //     ->leftJoin('lib_provinces', 'lib_provinces.id', '=', 'destinations.province_id')
        //     ->leftJoin('lib_cities', 'lib_cities.id', '=', 'destinations.city_id')
        //     ->leftJoin('lib_brgys', 'lib_brgys.id', '=', 'destinations.brgy_id')
        //     ->where('destinations.request_id', $id)
        //     ->first();
        $data[] = [
            'purpose' => $req->purpose,
            'inclusive_from' => $req->travel_date,
            'inclusive_to' => $req->return_date,
            'tracking_no' => $req->serial_code,
            'place' => $req->destination,
            'passenger_count' => (string) Passenger::select(DB::raw('COUNT(*) as total'))->where('request_id', $id)->first()->total,
        ];

        return $data;
    }
}
