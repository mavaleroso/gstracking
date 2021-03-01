<?php
namespace App\Services\Travels;

use App\Models\Request;
use Illuminate\Support\Arr;

class CreateTravel
{
    /**
     * create user execution     
     *
     * @return object
     */
    public function execute($fields)
    {

        // 'travel_radio' => 'required',
        // 'prog_div_sec' => 'required',
        // 'pur_travel' => 'required',
        // 'region' => 'required',
        // 'province' => 'required',
        // 'city' => 'required',
        // 'brgy' => 'required',
        // 'date_travel' => 'required',
        // 'time_depart' => 'required',
        // 'pax_name_1' => 'required',
        // 'pax_des_1' => 'required'
        // $request = Request::create(Arr::only($fields, [
        //     'type_vehicle',
        //     'department',
        //     'purpose',
        //     'travel_date',
        //     'depart_time',        
        //     'status',
        // ]));
        dd($fields);
    }
}
