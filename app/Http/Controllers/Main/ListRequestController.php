<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Base\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Travels\TravelStoreRequest;
use App\Services\Travels\UpdateTravel;
use Illuminate\Support\Facades\DB;

class ListRequestController extends Controller
{
    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:listrequest-list', ['only' => ['index']]);
        $this->middleware('permission:listrequest-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:listrequest-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:listrequest-delete', ['only' => ['destroy']]);
        $this->middleware('permission:listrequest-view', ['only' => ['show']]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(DB::table('requests')
            ->select('requests.*', DB::raw('CONCAT(users_details.first_name," ",users_details.last_name) AS fullname'))
            ->leftJoin('users_details', 'requests.user_id', '=', 'users_details.user_id')
            ->get());
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
    public function update($id, TravelStoreRequest $travelStoreRequest, UpdateTravel $updateTravel)
    {
        $result = $updateTravel->execute($id, $travelStoreRequest->validated());
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
