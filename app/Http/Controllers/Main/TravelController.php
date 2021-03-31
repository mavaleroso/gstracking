<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Base\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Travels\TravelStoreRequest;
use App\Services\Travels\CreateTravel;
use Illuminate\Support\Facades\DB;

class TravelController extends Controller
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
    public function store(TravelStoreRequest $travelStoreRequest, CreateTravel $createTravel)
    {
        $result = $createTravel->execute($travelStoreRequest->validated());
        return json_encode(['type' => 'success','message' => __('main/notifications.travel_created_successfully'), 'result' => $result]);
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
