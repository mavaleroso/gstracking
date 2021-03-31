<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Base\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Tracking\ServiceProviderRequest;
use App\Services\Tracking\CreateServiceProvider;
use App\Services\Tracking\UpdateDriver;
use App\Services\Tracking\GetListingServiceProvider;
use App\Models\ServiceProvider;

class TransportationServiceProviderController extends Controller
{
    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:serviceProvider-list', ['only' => ['index']]);
        $this->middleware('permission:serviceProvider-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:serviceProvider-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:serviceProvider-delete', ['only' => ['destroy']]);
        $this->middleware('permission:serviceProvider-view', ['only' => ['show']]);
    } 
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
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceProviderRequest $serviceProviderRequest, CreateServiceProvider $createServiceProvider)
    {
        $result = $createServiceProvider->execute($serviceProviderRequest->validated());
        return json_encode(['type' => 'success','message' => __('main/notifications.serviceProvider_created_successfully'), 'result' => $result]);
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
