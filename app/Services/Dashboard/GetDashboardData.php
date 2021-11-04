<?php

namespace App\Services\Dashboard;

use Illuminate\Support\Facades\DB;
use App\Models\RequestTransactions;
use App\Models\System;
use App\Models\Request;
use App\Models\TransactionVehicles;

class GetDashboardData
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute()
    {
        $req = RequestTransactions::select('*')
            ->groupBy('request_id')
            ->get();
        $divisions = [];
        $travels = [];
        $overview = [];
        for ($i = 0; $i < count($req); $i++) {
            $divisions[] = $req[$i]['type'] == 'rito' ? $this->rito($req[$i]['request_id'], 'division') : $this->local($req[$i]['request_id'], 'division');
            $travels[] = $req[$i]['type'] == 'rito' ? $this->rito($req[$i]['request_id'], 'travel') : $this->local($req[$i]['request_id'], 'travel');
            $overview[] = $req[$i]['type'] == 'rito' ? $this->overview_rito($req[$i]['request_id']) : $this->overview_local($req[$i]['request_id']);
        }

        usort($travels, array($this, "compare_months"));


        $data['divisions'] = array_count_values($divisions);
        $data['travels'] = array_count_values($travels);
        $data['overview'] = array_count_values($overview);
        return $data;
    }

    public function compare_months($a, $b)
    {
        $monthA = date_parse($a);
        $monthB = date_parse($b);

        return $monthA["month"] - $monthB["month"];
    }


    public function rito($id, $type)
    {
        $curl = curl_init();
        $portal_token = System::where('handler', 'PORTAL_TOKEN')->pluck('value')->first();

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
        switch ($type) {
            case 'division':
                $result = $this->employee_details($response[0]->requested_by);
                break;
            case 'travel':
                $result = date("F", strtotime($response[0]->inclusive_from));
                break;
            case 'overview':
                $result = $response[0]->status;
                break;
        }
        return $result;
    }

    public function local($id, $type)
    {
        $data = Request::select('divisions.division_name', 'requests.travel_date')
            ->leftJoin('divisions', 'divisions.id', '=', 'requests.division_id')
            ->where('requests.id', $id)
            ->first();


        switch ($type) {
            case 'division':
                $result = $data->division_name;
                break;
            case 'travel':
                $result = date("F", strtotime($data->travel_date));

                break;
        }
        return $result;
    }

    public function employee_details($id_num)
    {
        $curl = curl_init();
        $portal_token = System::where('handler', 'PORTAL_TOKEN')->pluck('value')->first();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://caraga-portal.dswd.gov.ph/api/employee/list/search/?q=' . $id_num,
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
        return $response[0]->division;
    }

    public function overview_rito($id)
    {
        $result = RequestTransactions::groupBy('request_id')->where('request_id', $id)->first();
        $trans = TransactionVehicles::where('id', $result->transaction_vehicles_id)->first();
        if ($result->mot == 1) {
            return travelStatusEng(0);
        } else {

            $status = $this->rito($id, 'overview');
            if ($trans->status == 3) {
                return travelStatusEng(3);
            } else if ($status == 'Pending') {
                return travelStatusEng(1);
            } else if ($status == 'Approved') {
                return travelStatusEng(2);
            }
        }
    }

    public function overview_local($id)
    {
        $result = Request::select('is_status')->where('id', $id)->first();
        return travelStatusEng($result->is_status);
    }
}
