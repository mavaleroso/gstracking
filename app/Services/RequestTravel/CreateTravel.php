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
    public function execute($fields)
    {

        $rqt_code = $this->getCode->request_code();

        $request = Request::create([
            'user_id' => auth()->user()->id,
            'serial_code' => $rqt_code,
            'department' => $fields['prog_div_sec'],
            'purpose' => $fields['pur_travel'],
            'travel_date' => $fields['date_travel'],
            'depart_time' => $fields['time_depart']
        ]);

        for ($i=0; $i < count($fields['brgy']); $i++) { 
            $request->destinations()->create([
                'region_id' => $fields['region'],
                'province_id' => $this->getCity->execute($fields['brgy'][$i])->province_id,
                'city_id' => $this->getBrgy->execute($fields['brgy'][$i])->city_id,
                'brgy_id' => $fields['brgy'][$i]
            ]);
        }
        
        for ($i=1; $i <= $fields['pax_total']; $i++) {
            $request->passengers()->create([
                'name' => $fields['pax_name_'.$i],
                'designation' => $fields['pax_des_'.$i]
            ]);
        }

        ($request)? System::where('handler', 'RQT_CODE')->update(['value' => $rqt_code]):NULL;

        return $request->fresh();
    }
}
