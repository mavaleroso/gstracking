<?php

namespace App\Http\Controllers\ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Province;

class ProvinceController extends Controller
{
    public function index()
    {
        return response()->json(Province::all());
    }

    public function show(Request $request)
    {
        $id = $request->id;
        return response()->json(Province::where('region_id', $id)->get());
    }
}
