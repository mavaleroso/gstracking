<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Tracking\VehicleRequest;
use App\Services\Tracking\CreateVehicle;

class TransportationVehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(VehicleRequest $vehicleRequest, CreateVehicle $createVehicle)
    {
        $result = $createVehicle->execute($vehicleRequest->validated());
        // try {
        //     if($request->hasFile('picture')) {
        //         $file = $request->file('picture');
        //         $file_name = 'vehicle-photo-' . time() . '.' . $file->getClientOriginalExtension();
        //         $file->storeAs('images', $file_name);
        //         return response()->json([
        //             'message' => 'File uploaded successfully!'
        //         ], 200);
        //     }
        // } catch (\Exeption $e) {
        //     return response()->json([
        //         'message' => $e->getMessage()
        //     ]);
        // }
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
