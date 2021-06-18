<?php
namespace App\Services\PendingTravels;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\RequestTransactions;
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
        $portal_token = System::where('handler', 'PORTAL_TOKEN')->pluck('value')->first();
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://caraga-portal.dswd.gov.ph/api/travel/details?page='.$fields['pages'],
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
        return json_decode($response);
    }


}   