<?php

namespace App\Services\PrintRequest;

use App\Models\UserDetail;
use App\Models\RequestTransactions;
use App\Models\System;
use App\Models\Request;
use App\Models\Destination;
use App\Models\Passenger;
use Illuminate\Support\Facades\DB;
use Mockery\Generator\StringManipulation\Pass\Pass;

class GetPrintRequestById
{
    /**
     * Get user by id
     *
     * @param string $id
     * @return App\Models\Transaction
     */
    public function execute(int $id, string $type)
    {
        $requests['travel'] = ($type == 'rito') ? $this->rito_travel_api($id) : $this->local_travel($id);
        $requests['passengers'] = ($type == 'rito') ? $this->rito_passenger_api($id) : $this->passengers($id, 'local', 1);
        $requests['ext_passengers'] = $this->passengers($id, $type, 2);

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

        $response = json_decode(curl_exec($curl));
        curl_close($curl);
        $response[0]->requestor = $this->rito_requested_by($response[0]->requested_by)[0];
        return $response;
    }

    public function rito_requested_by($emp_id)
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

    public function local_travel($id)
    {
        $req = Request::find($id);
        $department = Request::select(DB::raw('CONCAT(divisions.division_name, ", ", sections.section_name) as dept'))
            ->leftJoin('divisions', 'divisions.id', '=', 'requests.division_id')
            ->leftJoin('sections', 'sections.id', '=', 'requests.section_id')
            ->where('requests.id', $id)->first()->dept;
        $data[] = [
            'department' => $department,
            'depart_time' => $req->depart_time,
            'purpose' => $req->purpose,
            'inclusive_from' => $req->travel_date,
            'inclusive_to' => $req->return_date,
            'place' => $req->destination,
            'serial_code' => $req->serial_code,
            'created_at' => $req->created_at,
            'depart_time' => $req->depart_time,
            'passenger_count' => (string) Passenger::select(DB::raw('COUNT(*) as total'))->where('request_id', $id)->first()->total,
            'requestor' => $this->requestor($req->user_id)

        ];

        return $data;
    }

    public function passengers($id, $req, $type)
    {
        return Passenger::where('request_type', $req)->where('type', $type)->where('request_id', $id)->get();
    }

    public function requestor($id)
    {
        $user = UserDetail::where('user_id', $id)->first();
        return $user;
    }
}
