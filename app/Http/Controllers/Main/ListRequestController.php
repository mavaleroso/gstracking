<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Base\BaseController as Controller;
use Illuminate\Http\Request;

class ListRequestController extends Controller
{
    public function index()
    {
    }

    // public function destinations(Request $request)
    // {
    //     $id = $request->id;
    //     return response()->json(Destination::where('request_id', $id)->get());
    // }

    // public function passengers(Request $request)
    // {
    //     $id = $request->id;
    //     return response()->json(Passenger::where('request_id', $id)->get());
    // }
}
