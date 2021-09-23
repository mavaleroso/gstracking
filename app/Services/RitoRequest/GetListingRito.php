<?php

namespace App\Services\RitoRequest;

use App\Models\System;
use App\Models\Passenger;

class GetListingRito
{
    /**
     * Get user by email
     *1
     * @param string $email
     */
    public function execute($fields)
    {
        $reqt = $this->api($fields);

        $results = [
            'data' => $reqt->results,
            'count' => $reqt->count
        ];

        for ($i = 0; $i < count($results['data']); $i++) {
            $results['data'][$i]->requestor = $this->requested_by($results['data'][$i]->requested_by)[0];
            $results['data'][$i]->ext_passengers = $this->external_passengers($results['data'][$i]->id);
        }
        return $results;
    }

    public function api($fields)
    {
        $portal_token = System::where('handler', 'PORTAL_TOKEN')->pluck('value')->first();

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://caraga-portal.dswd.gov.ph/api/travel/details?page=' . $fields['pages'] . '&status=Pending',
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

        $response = json_decode(curl_exec($curl));
        curl_close($curl);
        return $response;
    }

    public function requested_by($emp_id)
    {
        $portal_token = System::where('handler', 'PORTAL_TOKEN')->pluck('value')->first();

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://caraga-portal.dswd.gov.ph/api/employee/list/search/?q=' . $emp_id,
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

        $response = json_decode(curl_exec($curl));
        curl_close($curl);
        return $response;
    }

    public function external_passengers($id)
    {
        return Passenger::where('type', 2)->where('request_id', $id)->get()->count();
    }
}
