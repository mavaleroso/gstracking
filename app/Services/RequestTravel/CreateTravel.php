<?php
namespace App\Services\RequestTravel;

use App\Models\Request;
use App\Models\Destination;
use App\Models\Passenger;
use App\Models\System;
use Illuminate\Support\Arr;
use App\Services\Api\GetBrgy;
use App\Services\Api\GetCity;
use App\Services\Core\GenerateCode;

class CreateTravel
{
    protected $getBrgy;
    protected $getCity;

    /**
     * Initialization
     */
    public function __construct(GetBrgy $getBrgy, GetCity $getCity, GenerateCode $getCode)
    {
        $this->getBrgy = $getBrgy;
        $this->getCity = $getCity;
        $this->getCode = $getCode;
    }
    /**
     * create user execution     
     *
     * @return object
     */
    public function execute($fields, $url)
    {

        $arr = array('luser' => auth()->user()->id, 'lpage' => 'Request_travel' , 'lurl' => $url, 'laction' => 'create');
        createLogs($arr);


        $request = Request::create([
            'user_id' => auth()->user()->id,
            'division_id' => $fields['division'],
            'section_id' => $fields['section'],
            'purpose' => $fields['pur_travel'],
            'travel_date' => $fields['date_travel'],
            'return_date' => $fields['date_return'],
            'depart_time' => $fields['time_depart']

        ]);

        $check = (isset($fields['brgy']))? 1:0;
        for ($i=0; $i < count($fields['city']); $i++) { 
            $request->destinations()->create([
                'region_id' => $fields['region'],
                'province_id' => $this->getCity->execute($fields['city'][$i])->province_id,
                'city_id' => $fields['city'][$i],
                'brgy_id' => ($check == 0)? NULL:((isset($fields['brgy'][$i]))? $fields['brgy'][$i]:NULL),
                'others' => $fields['destination_place']
            ]);    
        }      
        for ($i=1; $i <= $fields['pax_total']; $i++) {
            $request->passengers()->create([
                'type' => 1,
                'name' => $fields['passenger_'.$i],
                'designation' => $fields['pax_des_'.$i],
                'gender' => $fields['pax_gen_'.$i]
            ]);
        }

        return $request->fresh();
    }
}
