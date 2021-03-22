<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Tracking\VehicleRequest;
use App\Services\Tracking\CreateVehicle;
use App\Services\Tracking\UpdateVehicle;
use App\Services\Tracking\GetListingVehicle;
use App\Models\Vehicle;
use App\Models\Driver;

class TransportationVehicleController extends Controller
{
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
    public function create(VehicleRequest $vehicleRequest, CreateVehicle $createVehicle)
    {
        $result = $createVehicle->execute($vehicleRequest->validated());
        return json_encode(['type' => 'success','message' => __('main/notifications.travel_created_successfully'), 'result' => $result]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

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
        $data['drivers'] = Driver::where('vehicle_id', $id)->get();

        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(VehicleRequest $vehicleRequest, UpdateVehicle $updateVehicle)
    {
        $result = $updateVehicle->execute($vehicleRequest->validated());
        return json_encode(['type' => 'success','message' => __('main/notifications.vehicle_updated_successfully'), 'result' => $result]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Vehicle::destroy($id);
        return json_encode(['type' => 'success','message' => __('main/notifications.vehicle_deleted_successfully'), 'result' => $result]);
    }
}
