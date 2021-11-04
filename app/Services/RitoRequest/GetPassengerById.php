<?php

namespace App\Services\RitoRequest;

use App\Models\Passenger;

class GetPassengerById
{
    /**
     * Get user by email
     *1
     * @param string $email
     */
    public function execute(int $id)
    {
        $data['emp'] = $this->employee($id);
        $data['ext'] = $this->external($id);

        return $data;
    }

    public function employee($id)
    {
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
                'Authorization: Token 7a8203defd27f14ca23dacd19ed898dd3ff38ef6',
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);
    }

    public function external($id)
    {
        return Passenger::where('request_type', 'rito')->where('type', 2)->where('request_id', $id)->get();
    }
}
