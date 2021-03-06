<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Base\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TransportationVehicle\VehicleRequest;
use App\Services\TransportationVehicle\CreateVehicle;
use App\Services\TransportationVehicle\UpdateVehicle;
use App\Services\TransportationVehicle\GetListingVehicle;
use App\Models\Vehicle;
use App\Models\Driver;

class TransportationVehicleController extends Controller
{
    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:vehicle-list', ['only' => ['index']]);
        $this->middleware('permission:vehicle-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:vehicle-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:vehicle-delete', ['only' => ['destroy']]);
        $this->middleware('permission:vehicle-view', ['only' => ['show']]);
    }      
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetListingVehicle $getListingVehicle)
    {
        $records = $getListingVehicle->execute();
        return response()->json($records);
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleRequest $vehicleRequest, CreateVehicle $createVehicle)
    {
        $url = $vehicleRequest->url();
        $result = $createVehicle->execute($vehicleRequest->validated(), $url);
        return json_encode(['type' => 'success','message' => __('main/notifications.travel_created_successfully'), 'result' => $result]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['vehicles'] = Vehicle::where('id', $id)->get();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, VehicleRequest $vehicleRequest, UpdateVehicle $updateVehicle)
    {
        $url = $vehicleRequest->url();
        $result = $updateVehicle->execute($id, $vehicleRequest->validated(), $url);
        return json_encode(['type' => 'success','message' => __('main/notifications.vehicle_updated_successfully'), 'result' => $result]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {


        
        $url = $request->url();

        $user = auth()->user()->id;
        $arr = array('luser' => $user, 'lpage' => 'Office_vehicle' , 'lurl' => $url, 'laction' => 'delete');
        $createLogs = createLogs($arr);

        $result = Vehicle::destroy($id);
        return json_encode(['type' => 'success','message' => __('main/notifications.vehicle_deleted_successfully'), 'result' => $result]);
    }
}
