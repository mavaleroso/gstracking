<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Base\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FuelCharges\FuelChargesStoreRequest;
use App\Http\Requests\FuelCharges\FuelChargesUpdateRequest;
use App\Services\FuelCharges\CreateFuelCharges;
use App\Services\FuelCharges\GetListingFuelCharges;
use App\Services\FuelCharges\UpdateFuelCharges;

class FuelChargesController extends Controller
{
    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:fuelcharges-list', ['only' => ['index']]);
        $this->middleware('permission:fuelcharges-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:fuelcharges-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:fuelcharges-delete', ['only' => ['destroy']]);
        $this->middleware('permission:fuelcharges-view', ['only' => ['show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetListingFuelCharges $getListingFuelCharges)
    {
        $records = $getListingFuelCharges->execute();
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
    public function store(FuelChargesStoreRequest $fuelChargesStoreRequest, CreateFuelCharges $createFuelCharges)
    {
        $url = $fuelChargesStoreRequest->url();
        $result = $createFuelCharges->execute($fuelChargesStoreRequest->validated(), $url);
        return json_encode(['type' => 'success', 'message' => __('main/notifications.fuelCharges_created_successfully'), 'result' => $result]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(FuelChargesUpdateRequest $fuelChargesUpdateRequest, UpdateFuelCharges $updateFuelCharges, $id)
    {
        $url = $fuelChargesUpdateRequest->url();
        $result = $updateFuelCharges->execute($fuelChargesUpdateRequest->validated(), $url);
        return json_encode(['type' => 'success', 'message' => __('main/notifications.fuelCharges_updated_successfully'), 'result' => $result]);
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
