<?php

namespace App\Services\PrintTripTicket;

use App\Models\TransactionVehicles;
use App\Models\RequestTransactions;
use App\Models\Destination;
use App\Models\System;
use App\Models\Request;
use App\Models\Passenger;
use App\Models\UserDetail;
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
        $data['travel'] = TransactionVehicles::select(['drivers.fullname', 'vehicles.name as vehicle_name', 'vehicles.plate_no as vehicle_plate_no', 'request_transactions.mot', 'transaction_vehicles.starting_odo', 'transaction_vehicles.ending_odo', 'transaction_vehicles.travelled'])
            ->leftJoin('request_transactions', 'transaction_vehicles.id', '=', 'request_transactions.transaction_vehicles_id')
            ->leftJoin('vehicles', 'vehicles.id', '=', 'transaction_vehicles.vehicle_id')
            ->leftJoin('drivers', 'drivers.id', '=', 'transaction_vehicles.driver_id')
            ->where('transaction_vehicles.id', $id)
            ->first();

        $req = RequestTransactions::select('type', DB::raw('GROUP_CONCAT(DISTINCT request_id) as req_id'))
            ->where('transaction_vehicles_id', $id)
            ->get();

        for ($i = 0; $i < count($req); $i++) {
            $data['request'] = $req[$i]->type == 'rito' ? $this->rito($req[$i]->req_id) : $this->local($req[$i]->req_id);
        }
        $data['date_now'] = System::select([DB::raw('now() as dn')])->first()->dn;

        return $data;
    }

    public function rito($id)
    {
        $tracking = [];
        $req = explode(',', $id);

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

        $data[] = (object) array(
            'id' => $request->id,
            'purpose' => $request->purpose,
            'inclusive_from' => $request->travel_date,
            'inclusive_to' => $request->return_date,
            'place' => $place->place,
            'status' => "Approved",
            'requested_by' =>  $this->requestor($request->user_id),
            'passenger_count' => (string) Passenger::select(DB::raw('COUNT(*) as total'))->where('request_id', $id)->first()->total,
        );
        return $data;
    }

    public function requestor($id)
    {
        $user = UserDetail::where('user_id', $id)->first();
        return $user->first_name . ' ' . $user->last_name;
    }
}
