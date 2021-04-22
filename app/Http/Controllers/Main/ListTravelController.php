<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Base\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ListTravels\TravelRequest;
use App\Services\ListTravel\GetListingTravel;
use App\Services\ListTravel\GetTravelById;
use App\Services\ListTravel\UpdateTravel;

class ListTravelController extends Controller
{

     /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:listtravel-list', ['only' => ['index']]);
        $this->middleware('permission:listtravel-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:listtravel-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:listtravel-delete', ['only' => ['destroy']]);
        $this->middleware('permission:listtravel-view', ['only' => ['show']]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetListingTravel $getListingTravel, Request $request)
    {
        $records = $getListingTravel->execute($request);
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
    public function show($id, GetTravelById $getTravelById)
    {
        $data = $getTravelById->execute($id);
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
    public function update(TravelRequest $travelRequest, UpdateTravel $updateTravel , $id)
    {
        $result = $updateTravel->execute($id, $travelRequest->validated());
        return json_encode(['type' => 'success','message' => __('main/notifications.travel_updated_successfully'), 'result' => $result]);
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
