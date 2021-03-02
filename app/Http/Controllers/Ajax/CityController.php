<?php

namespace App\Http\Controllers\ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function show(Request $request)
    {
        $id = $request->id;
        return response()->json(City::whereIn('province_id', $id)->get());
    }
}
