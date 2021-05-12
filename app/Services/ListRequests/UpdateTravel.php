<?php
namespace App\Services\ListRequests;

use App\Models\Request;
use App\Models\Destination;
use App\Models\Passenger;
use App\Models\System;
use Illuminate\Support\Arr;
use App\Services\Api\GetBrgy;
use App\Services\Api\GetCity;
use App\Services\Core\GenerateCode;

class UpdateTravel
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
    public function execute($id, $fields)
    {

        $request = Request::find($id);
        
        $request->update([
            'user_id' => auth()->user()->id,
            'purpose' => $fields['pur_travel'],
            'travel_date' => $fields['date_travel'],
            'depart_time' => $fields['time_depart']
        ]);

        $dest = Destination::select('id')->where('request_id', $id)->get();
        $destDiff = (count($dest) - count($fields['brgy']));
        if ($destDiff > 0) {
            for ($i=$destDiff-1; $i >= 0 ; $i--) { 
                Destination::where('id', $dest[(count($dest) - 1) - $i]->id)->delete();
            }
        }
        for ($i=0; $i < count($fields['brgy']); $i++) { 
            try {
                if ($id) {
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
        
        $pax = Passenger::select('id')->where('request_id', $id)->get();
        $paxDiff = count($pax) - $fields['pax_total'];
        if ($paxDiff > 0) {
            for ($i=$paxDiff-1; $i >= 0 ; $i--) { 
                Passenger::where('id', $pax[(count($pax)-1) - $i]->id)->delete();
            }
        }
        for ($i=1; $i <= $fields['pax_total']; $i++) {
            try {
                if ($id) {
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

        return $request->fresh();
    }
}
