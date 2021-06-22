<?php
namespace App\Services\PendingTravels;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\RequestTransactions;
use App\Models\transactionVehicles;
use App\Models\System;

class GetListingPendingTravels
{
    /**
     * Get user by email
     *1
     * @param string $email
     */
    public function execute($fields)
    {
        
        $results = [];

        $reqt = RequestTransactions::select('group',DB::raw('GROUP_CONCAT(DISTINCT request_id) AS requests'),DB::raw('GROUP_CONCAT(DISTINCT transaction_vehicles_id) AS transveid'))
                                    ->groupBy('group')
                                    ->paginate(10, ['*'], 'page', $fields['pages']);
        

        for ($i=0; $i < count($reqt); $i++) { 
             $results['data'][] = [
                'tracking_no' => $this->api($reqt[$i]->requests),
                'transactions' => $this->transaction($reqt[$i]->transveid)
            ];
        }
        $results['count'] = count(RequestTransactions::groupBy('group')->get());

        return $results;
    }

    public function api($requests)
    {
        $tracking = [];
        $req = explode(',',$requests);

        $portal_token = System::where('handler', 'PORTAL_TOKEN')->pluck('value')->first();

        for ($i=0; $i < count($req); $i++) { 
            $curl = curl_init();
        
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://caraga-portal.dswd.gov.ph/api/travel/details?travel_id='.$req[$i],
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
                    'Authorization: '.$portal_token,
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            if(header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404)) {
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
        $trans = explode(',',$trans_id);
        return $transactions[] = transactionVehicles::whereIn('id', $trans)->get();
    }


}   