<?php
namespace App\Services\LocalRequest;

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
    public function execute($id, $fields, $url)
    {

        $user = auth()->user()->id;
        $arr = array('luser' => $user, 'lpage' => 'Local_requests' , 'lurl' => $url, 'laction' => 'edit');
        $createLogs = createLogs($arr);

        $request = Request::find($id);
        
        $request->update([
            'user_id' => auth()->user()->id,
            'purpose' => $fields['pur_travel'],
            'destination' => $fields['destination_place'],
            'travel_date' => $fields['date_travel'],
            'return_date' => $fields['date_return'],
            'depart_time' => $fields['time_depart']
        ]);
        
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
                        'type' => 1,
                        'name' => $fields['pax_name_'.$i],
                        'designation' => $fields['pax_des_'.$i],
                        'gender' => $fields['pax_gen_'.$i]
                    ]);
                } else {
                    $request->passengers()->create([
                        'type' => 1,
                        'name' => $fields['pax_name_'.$i],
                        'designation' => $fields['pax_des_'.$i],
                        'gender' => $fields['pax_gen_'.$i]
                    ]);
                }
            } catch (\Throwable $th) {
                $request->passengers()->create([
                    'type' => 1,
                    'name' => $fields['pax_name_'.$i],
                    'designation' => $fields['pax_des_'.$i],
                    'gender' => $fields['pax_gen_'.$i]
                ]);
            }
        }

        return $request->fresh();
    }
}
