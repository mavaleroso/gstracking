<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Base\BaseController as Controller;
use Illuminate\Http\Request;
use App\Services\RitoRequest\GetListingRito;
use App\Services\RitoRequest\GetPassengerById;
use App\Services\RitoRequest\CreateRequestTransactions;
use App\Http\Requests\RitoRequests\RequestTransactionStoreRequest;

class RitoRequestController extends Controller
{
    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:ritorequest-list', ['only' => ['index']]);
        $this->middleware('permission:ritorequest-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:ritorequest-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:ritorequest-delete', ['only' => ['destroy']]);
        $this->middleware('permission:ritorequest-view', ['only' => ['show']]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetListingRito $getListingRito, Request $request)
    {
        $data = $getListingRito->execute($request);
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
    public function store(RequestTransactionStoreRequest $requestTransactionStoreRequest, CreateRequestTransactions $createRequestTransactions)
    {
        $result = $createRequestTransactions->execute($requestTransactionStoreRequest->validated());
        return json_encode(['type' => 'success','message' => __('main/notifications.requestTransaction_created_successfully'), 'result' => $result]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, GetPassengerById $getPassengerById)
    {
        $data = $getPassengerById->execute($id);
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
