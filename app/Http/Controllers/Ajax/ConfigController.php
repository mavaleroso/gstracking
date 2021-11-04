<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Request;
use App\Models\System;

class ConfigController extends Controller
{
    public function request_year()
    {
        $year = Request::select(DB::raw('YEAR(travel_date) AS travel_year'))->groupBy('travel_year')->get();
        return response()->json($year);
    }
    
    public function system()
    {
        $sys = System::all();
        return response()->json($sys);
    }
}
