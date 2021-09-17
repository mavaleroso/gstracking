<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Base\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RitoRequests\ExternalPassengersStoreRequest;
use App\Services\RitoRequest\UpdateExternalPassengers;

class ExternalPassengersController extends Controller
{

    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:externalpassenger-list', ['only' => ['index']]);
        $this->middleware('permission:externalpassenger-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:externalpassenger-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:externalpassenger-delete', ['only' => ['destroy']]);
        $this->middleware('permission:externalpassenger-view', ['only' => ['show']]);
    }
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
    public function update(ExternalPassengersStoreRequest $externalPassengersStoreRequest, UpdateExternalPassengers $updateExternalPassengers, $id)
    {
        $url = $externalPassengersStoreRequest->url();
        $result = $updateExternalPassengers->execute($id, $externalPassengersStoreRequest->validated(), $url);
        return json_encode(['type' => 'success', 'message' => __('main/notifications.externalpassengers_updated_successfully'), 'result' => $result]);
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
