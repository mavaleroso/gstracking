<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Tracking\VehicleRequest;
use App\Services\Tracking\CreateVehicle;
use App\Services\Tracking\GetListingVehicle;
use App\Models\Vehicle;

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
        return response()->json(Vehicle::join('drivers', 'vehicles.id', '=', 'drivers.vehicle_id')->select('vehicles.*')->where('id', $id)->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
