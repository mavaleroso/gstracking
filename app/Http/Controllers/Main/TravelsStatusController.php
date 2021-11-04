<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Base\BaseController as Controller;
use Illuminate\Http\Request;
use App\Services\TravelsStatus\GetListingTravelsStatus;
use App\Services\TravelsStatus\UpdateTravelStatusById;

class TravelsStatusController extends Controller
{
    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:travelsstatus-list', ['only' => ['index']]);
        $this->middleware('permission:travelsstatus-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:travelsstatus-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:travelsstatus-delete', ['only' => ['destroy']]);
        $this->middleware('permission:travelsstatus-view', ['only' => ['show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, GetListingTravelsStatus $getListingTravelsStatus)
    {
        $data = $getListingTravelsStatus->execute($request);
        return response()->json($data);
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
    public function show($id)
    {
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
    public function update(UpdateTravelStatusById $updateTravelStatusById, $id)
    {
        $data = $updateTravelStatusById->execute($id);
        return json_encode(['type' => 'success', 'message' => __('main/notifications.travelstatus_updated_successfully'), 'result' => $data]);
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
