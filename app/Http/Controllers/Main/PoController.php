<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Po\GetListingPo;
use App\Http\Requests\Po\PoRequest;
use App\Services\Po\CreatePo;

class PoController extends Controller
{
    public function index(GetListingPo $getListingPo)
    {
        $records = $getListingPo->execute();
        return response()->json($records);
    }

    public function create(PoRequest $poRequest, CreatePo $createPo)
    {
        $result = $createPo->execute($poRequest->validated());
        return json_encode(['type' => 'success','message' => __('main/notifications.po_created_successfully'), 'result' => $result]);
    }
}
