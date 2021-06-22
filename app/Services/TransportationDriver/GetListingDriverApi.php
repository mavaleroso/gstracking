<?php
namespace App\Services\TransportationDriver;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class GetListingDriverApi
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://caraga-portal.dswd.gov.ph/api/employee/list/load',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER   => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Token 7a8203defd27f14ca23dacd19ed898dd3ff38ef6'
        ),
        ));

        $driver = curl_exec($curl);
        curl_close($curl);   
        return json_decode($driver);
    }
}   