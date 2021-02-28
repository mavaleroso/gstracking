<?php

namespace App\Http\Controllers\ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barangay;

class BrgyController extends Controller
{
    public function index()
    {
        return response()->json(Barangay::all());
    }

    public function show(Request $request)
    {
        $id = $request->id;
        return response()->json(Barangay::whereIn('city_id', $id)->get());
    }
}
