<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Base\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\VehicleTravels\VehicleTravelRequest;
use App\Services\VehicleTravels\GetListingVehicleTravel;
use App\Services\VehicleTravels\GetVehicleTravelById;
use App\Services\VehicleTravels\UpdateVehicleTravel;
use App\Services\VehicleTravels\UpdateVehicleStatus;

class VehicleTravelsController extends Controller
{

    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:vehicletravels-list', ['only' => ['index']]);
        $this->middleware('permission:vehicletravels-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:vehicletravels-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:vehicletravels-delete', ['only' => ['destroy']]);
        $this->middleware('permission:vehicletravels-view', ['only' => ['show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetListingVehicleTravel $getListingVehicleTravel, Request $request)
    {
        $records = $getListingVehicleTravel->execute($request);
        return response()->json($records);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, GetVehicleTravelById $getVehicleTravelById)
    {
        $data = $getVehicleTravelById->execute($id);
        return response()->json($data);
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
    public function update(VehicleTravelRequest $vehicleTravelRequest, UpdateVehicleTravel $updateVehicleTravel, $id)
    {
        $url = $vehicleTravelRequest->url();
        $result = $updateVehicleTravel->execute($id, $vehicleTravelRequest->validated(), $url);
        return json_encode(['type' => 'success', 'message' => __('main/notifications.travel_updated_successfully'), 'result' => $result]);
    }

    public function undo($id, Request $request, UpdateVehicleStatus $updateVehicleStatus)
    {
        $url = $request->url();
        $result = $updateVehicleStatus->execute($id, $url);
        return json_encode(['type' => 'success', 'message' => __('main/notifications.list_travel_updated_successfully'), 'result' => $result]);
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
