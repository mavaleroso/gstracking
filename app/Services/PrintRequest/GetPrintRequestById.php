<?php
namespace App\Services\PrintRequest;

use App\Models\UserDetail;
use App\Models\RequestTransactions;
use App\Models\System;
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
                'data' => $this->travel_api($reqTrans[$i]->request_id),
                'passengers' => $this->passenger_api($reqTrans[$i]->request_id),
            ];
        }
        $requests['trans'] = $reqTrans;
        $requests['date_now'] = System::select([DB::raw('now() as dn')])->first()->dn;
        $requests['gs_staff'] = UserDetail::where('user_id', $reqTrans[0]->user_id)->first();
        $requests['vehicles'] = $this->vehicles_drivers($id);
      
       
        return $requests;
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
}
