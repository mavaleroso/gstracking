<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Base\BaseController as Controller;
use Illuminate\Http\Request;
use App\Services\TransportationOverview\GetListingOverview;

class TransportationOverviewController extends Controller
{   
    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:overview-list', ['only' => ['index']]);
        $this->middleware('permission:overview-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:overview-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:overview-delete', ['only' => ['destroy']]);
        $this->middleware('permission:overview-view', ['only' => ['show']]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetListingOverview $getListingOverview)
    {
        $records = $getListingOverview->execute();
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
