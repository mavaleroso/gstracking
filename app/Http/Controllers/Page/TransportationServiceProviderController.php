<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Tracking\ServiceProviderRequest;
use App\Services\Tracking\CreateServiceProvider;
use App\Services\Tracking\UpdateDriver;
use App\Services\Tracking\GetListingServiceProvider;
use App\Models\ServiceProvider;

class TransportationServiceProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetListingServiceProvider $getListingServiceProvider)
    {
        $records = $getListingServiceProvider->execute();
        return response()->json($records);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ServiceProviderRequest $serviceproviderRequest, CreateServiceProvider $createserviceprovider)
    {
        $result = $createserviceprovider->execute($serviceproviderRequest->validated());
        return json_encode(['type' => 'success','message' => __('main/notifications.serviceProvider_created_successfully'), 'result' => $result]);
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
        $data = ServiceProvider::where('id', $id)->get();

        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceProviderRequest $serviceproviderRequest, UpdateDriver $updateDriver)
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
        //
    }
}
