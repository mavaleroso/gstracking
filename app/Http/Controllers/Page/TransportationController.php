<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Tracking\VehicleRequest;
use App\Services\Tracking\StoreVehicle;
use App\Models\ServiceProvider;
use App\Models\Driver;

class TransportationController extends Controller
{
    public function service_providers()
    {
        return response()->json(ServiceProvider::all());
    }

    public function drivers()
    {
        return response()->json(Driver::where('vehicle_id', NULL)->get());
    }

    public function store_vehicle(VehicleRequest $vehicleRequest, StoreVehicle $storeVehicle)
    {
        $result = $storeVehicle->execute($vehicleRequest->validated());
        return json_encode(['type' => 'success','message' => __('main/notifications.travel_created_successfully'), 'result' => $result]);
    }
}
