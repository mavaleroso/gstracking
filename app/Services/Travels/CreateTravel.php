<?php
namespace App\Services\Travels;

use App\Models\Request;
use Illuminate\Support\Arr;
use App\Services\Travels\CreateTravel;
use App\Services\Travels\GetBrgy;
use App\Services\Travels\GetCity;

class CreateTravel
{
    protected $getBrgy;
    protected $getCity;

    /**
     * Initialization
     */
    public function __construct(GetBrgy $getBrgy, GetCity $getCity)
    {
        $this->getBrgy = $getBrgy;
        $this->getCity = $getCity;
    }
    /**
     * create user execution     
     *
     * @return object
     */
    public function execute($fields)
    {

        $request = Request::create([
            'user_id' => auth()->user()->id,
            'type_vehicle' => $fields['travel_radio'],
            'department' => $fields['prog_div_sec'],
            'purpose' => $fields['pur_travel'],
            'travel_date' => $fields['date_travel'],
            'depart_time' => $fields['time_depart']
        ]);

        for ($i=0; $i < count($fields['brgy']); $i++) { 
            $request->destinations()->create([
                'region_id' => $fields['region'][0],
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

        return $request;
    }
}
