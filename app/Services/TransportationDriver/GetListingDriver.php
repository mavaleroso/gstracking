<?php

namespace App\Services\TransportationDriver;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Driver;
use App\Models\System;

class GetListingDriver
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute($fields)
    {
        $results = [];
        $columns = Schema::getColumnListing('drivers');
        $query = Driver::query();

        foreach ($columns as $column) {
            $query->orWhere($column, 'LIKE', '%' . $fields['search'] . '%');
        }

        $driver = $query->where('type', 1)->paginate(10, ['*'], 'page', $fields['pages']);

        for ($i = 0; $i < count($driver); $i++) {
            $results['data'][] = [
                'id' => $driver[$i]->id,
                'emp_id' => $driver[$i]->emp_id,
                'fullname' => $driver[$i]->fullname,
                'age' => $driver[$i]->age,
                'sex' => $driver[$i]->sex,
                'birthdate' => $driver[$i]->birthdate,
                'contact' => $driver[$i]->contact,
                'status' => $this->process_status($driver[$i]->emp_id, 'status'),
                'reasons' => $this->process_status($driver[$i]->emp_id, 'reason'),
                'created_at' => $driver[$i]->created_at,

            ];
        }

        $results['count'] = count(Driver::where('type', 1)->get());

        return $results;
    }

    public function process_status($emp_id, $type)
    {

        $emp_status = $this->employee_details($emp_id);
        $dateToday = System::select(DB::raw('DATE(now())'))->first();
        $status = 'active';
        $reason = '';
        for ($i = 0; $i < count($emp_status); $i++) {
            if (($dateToday == $emp_status[$i]->start_date || $dateToday == $emp_status[$i]->end_date || in_array($dateToday, $emp_status[$i]->random_dates)) && $emp_status[$i]->status == 'Approved') {
                $status = 'inactive' . $emp_status[$i]->status;
                $reason = $emp_status[$i]->reasons;
            }
        }
        if ($type == 'status') {
            $result = $status;
        } else if ($type == 'reason') {
            $result = $reason;
        }

        return $result;
    }

    public function employee_details($emp_id)
    {
        $portal_token = System::where('handler', 'PORTAL_TOKEN')->pluck('value')->first();


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://caraga-portal.dswd.gov.ph/api/leave/details/?id_number='  . $emp_id,
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
}
