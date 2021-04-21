<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Base\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TransportationDriver\DriverRequest;
use App\Services\TransportationDriver\CreateDriver;
use App\Services\TransportationDriver\UpdateDriver;
use App\Services\TransportationDriver\GetListingDriver;
use App\Models\Driver;

class TransportationDriverController extends Controller
{
    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:driver-list', ['only' => ['index']]);
        $this->middleware('permission:driver-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:driver-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:driver-delete', ['only' => ['destroy']]);
        $this->middleware('permission:driver-view', ['only' => ['show']]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetListingDriver $getListingDriver)
    {
        $records = $getListingDriver->execute();
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
    public function store(DriverRequest $driverRequest, CreateDriver $createDriver)
    {
        $result = $createDriver->execute($driverRequest->validated());
        return json_encode(['type' => 'success','message' => __('main/notifications.driver_created_successfully'), 'result' => $result]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Driver::where('id', $id)->get();
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
    public function update($id, DriverRequest $driverRequest, UpdateDriver $updateDriver)
    {
        $result = $updateDriver->execute($id, $driverRequest->validated());
        return json_encode(['type' => 'success','message' => __('main/notifications.driver_created_successfully'), 'result' => $result]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Driver::destroy($id);
        return json_encode(['type' => 'success','message' => __('main/notifications.driver_deleted_successfully'), 'result' => $result]);
    }
}
