<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Base\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ListRequests\TravelRequestStaff;
use App\Http\Requests\ListRequests\ListRequestStaff;
use App\Services\ListRequests\CreateTransaction;
use App\Services\ListRequests\UpdateRequests;




class ListRequestStaffController extends Controller
{
    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:listrequeststaff-list', ['only' => ['index']]);
        $this->middleware('permission:listrequeststaff-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:listrequeststaff-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:listrequeststaff-delete', ['only' => ['destroy']]);
        $this->middleware('permission:listrequeststaff-view', ['only' => ['show']]);
    } 
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
    public function store(TravelRequestStaff $travelRequestStaff, CreateTransaction $createTransaction)
    {
        $result = $createTransaction->execute($travelRequestStaff->validated());
        return json_encode(['type' => 'success','message' => __('main/notifications.request_created_successfully'), 'result' => $result]);
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

    public function declined(ListRequestStaff $request,UpdateRequests $updateRequests){
        $result = $updateRequests->execute($request);
        return json_encode(['type' => 'success','message' => __('main/notifications.list_requests_updated_successfully'), 'result' => $result]);
    }

    public function update()
    {

    }



        // $result = $updateStatus->execute($id);
        // return json_encode(['type' => 'success','message' => __('main/notifications.list_travel_updated_successfully'), 'result' => $result]);
   

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
