<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Tracking\DriverRequest;
use App\Services\Tracking\CreateDriver;
use App\Services\Tracking\UpdateDriver;
use App\Services\Tracking\GetListingDriver;
use App\Models\Driver;

class TransportationDriverController extends Controller
{
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
    public function create(DriverRequest $driverRequest, CreateDriver $createDriver)
    {
        $result = $createDriver->execute($driverRequest->validated());
        return json_encode(['type' => 'success','message' => __('main/notifications.driver_created_successfully'), 'result' => $result]);
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
    public function edit(DriverRequest $driverRequest, UpdateDriver $updateDriver)
    {
        $result = $updateDriver->execute($driverRequest->validated());
        return json_encode(['type' => 'success','message' => __('main/notifications.driver_created_successfully'), 'result' => $result]);
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
        $result = Driver::destroy($id);
        return json_encode(['type' => 'success','message' => __('main/notifications.driver_deleted_successfully'), 'result' => $result]);
    }
}
