<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Controllers\Base\BaseController as Controller;
use App\Http\Requests\Po\PoRequest;
use App\Services\Po\GetListingPo;
use App\Services\Po\CreatePo;
use App\Services\Po\UpdatePo;
use App\Services\Po\GetPoById;
use App\Services\Po\DeletePo;

class PoController extends Controller
{
     /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:po-list', ['only' => ['index']]);
        $this->middleware('permission:po-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:po-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:po-delete', ['only' => ['destroy']]);
        $this->middleware('permission:po-view', ['only' => ['show']]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetListingPo $getListingPo)
    {
        $records = $getListingPo->execute();
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
    public function store(PoRequest $poRequest, CreatePo $createPo)
    {
        $result = $createPo->execute($poRequest->validated());
        return json_encode(['type' => 'success','message' => __('main/notifications.po_created_successfully'), 'result' => $result]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, GetPoById $getPoById)
    {
        $data = $getPoById->execute($id);
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
    public function update(Request $request, UpdatePo $updatePo, $id)
    {
        $result = $updatePo->execute($id, $request);
        return json_encode(['type' => 'success','message' => __('main/notifications.po_updated_successfully'), 'result' => $result]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, DeletePo $deletePo)
    {
        $result = $deletePo->execute($id);
        return json_encode(['type' => 'success','message' => __('main/notifications.po_deleted_successfully'), 'result' => $result]);
    }
}
