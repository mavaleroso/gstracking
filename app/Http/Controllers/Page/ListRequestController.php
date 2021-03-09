<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Passenger;

class ListRequestController extends Controller
{
    public function index()
    {
    }

    public function destinations(Request $request)
    {
        $id = $request->id;
        return response()->json(Destination::where('request_id', $id)->get());
    }

    public function passengers(Request $request)
    {
        $id = $request->id;
        return response()->json(Passenger::where('request_id', $id)->get());
    }
}
