<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Po\GetListingPo;

class PoController extends Controller
{
    public function index(GetListingPo $getListingPo)
    {
        $records = $getListingPo->execute();
        return response()->json($records);
    }

}
