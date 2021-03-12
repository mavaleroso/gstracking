<?php
namespace App\Services\Travels;

use App\Models\Request;
use App\Models\Destination;
use App\Models\Passenger;
use App\Models\System;
use Illuminate\Support\Arr;
use App\Services\Travels\CreateTravel;
use App\Services\Travels\GetBrgy;
use App\Services\Travels\GetCity;
use App\Services\Travels\GenerateCode;

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

        $request = Request::updateOrCreate([
            'id' =>  $fields['request_id']
        ],[
            'user_id' => auth()->user()->id,
            ($fields['request_id'])? NULL:'serial_code' => $rqt_code,
            'type_vehicle' => $fields['travel_radio'],
            'department' => $fields['prog_div_sec'],
            'purpose' => $fields['pur_travel'],
            'travel_date' => $fields['date_travel'],
            'depart_time' => $fields['time_depart']
        ]);

        ($request)? System::where('handler', 'RQT_CODE')->update(['value'=> $rqt_code]):NULL;

        $dest = Destination::select('id')->where('request_id', $fields['request_id'])->get();
        $destDiff = (count($dest) - count($fields['brgy']));
        if ($destDiff > 0) {
            for ($i=$destDiff-1; $i >= 0 ; $i--) { 
                Destination::where('id', $dest[(count($dest) - 1) - $i]->id)->delete();
            }
        }
        for ($i=0; $i < count($fields['brgy']); $i++) { 
            try {
                if ($fields['request_id']) {
                    $request->destinations()->where('id', $dest[$i]->id)->update([
                        'region_id' => $fields['region'],
                        'province_id' => $this->getCity->execute($fields['brgy'][$i])->province_id,
                        'city_id' => $this->getBrgy->execute($fields['brgy'][$i])->city_id,
                        'brgy_id' => $fields['brgy'][$i]
                    ]);
                } else {
                    $request->destinations()->where('id', $dest[$i]->id)->update([
                        'region_id' => $fields['region'],
                        'province_id' => $this->getCity->execute($fields['brgy'][$i])->province_id,
                        'city_id' => $this->getBrgy->execute($fields['brgy'][$i])->city_id,
                        'brgy_id' => $fields['brgy'][$i]
                    ]);
                }
            } catch (\Throwable $th) {
                $request->destinations()->create([
                    'region_id' => $fields['region'],
                    'province_id' => $this->getCity->execute($fields['brgy'][$i])->province_id,
                    'city_id' => $this->getBrgy->execute($fields['brgy'][$i])->city_id,
                    'brgy_id' => $fields['brgy'][$i]
                ]);
            }
        }
        
        $pax = Passenger::select('id')->where('request_id', $fields['request_id'])->get();
        $paxDiff = count($pax) - $fields['pax_total'];
        if ($paxDiff > 0) {
            for ($i=$paxDiff-1; $i >= 0 ; $i--) { 
                Passenger::where('id', $pax[(count($pax)-1) - $i]->id)->delete();
            }
        }
        for ($i=1; $i <= $fields['pax_total']; $i++) {
            try {
                if ($fields['request_id']) {
                    $request->passengers()->where('id', $pax[$i-1]->id)->update([
                        'name' => $fields['pax_name_'.$i],
                        'designation' => $fields['pax_des_'.$i]
                    ]);
                } else {
                    $request->passengers()->create([
                        'name' => $fields['pax_name_'.$i],
                        'designation' => $fields['pax_des_'.$i]
                    ]);
                }
            } catch (\Throwable $th) {
                $request->passengers()->create([
                    'name' => $fields['pax_name_'.$i],
                    'designation' => $fields['pax_des_'.$i]
                ]);
            }
        }

        return $request;
    }
}
