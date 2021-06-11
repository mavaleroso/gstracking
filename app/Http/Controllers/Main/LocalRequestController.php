<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Base\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RequestTravel\TravelStoreRequest;
use App\Services\LocalRequest\UpdateTravel;
use App\Services\LocalRequest\GetListingRequest;
use App\Services\LocalRequest\GetRequestById;
use Illuminate\Support\Facades\DB;

class LocalRequestController extends Controller
{
    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:localrequest-list', ['only' => ['index']]);
        $this->middleware('permission:localrequest-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:localrequest-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:localrequest-delete', ['only' => ['destroy']]);
        $this->middleware('permission:localrequest-view', ['only' => ['show']]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetListingRequest $getListingRequest)
    {
        $records = $getListingRequest->execute();
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
    public function show($id, GetRequestById $geRequestById)
    {
        $data = $geRequestById->execute($id);
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
    public function update($id, TravelStoreRequest $travelStoreRequest, UpdateTravel $updateTravel)
    {
        $url = $travelStoreRequest->url();
        $result = $updateTravel->execute($id, $travelStoreRequest->validated(), $url);
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
