<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;

class ListRequestController extends Controller
{
    public function index()
    {
    }

    public function show(Request $request)
    {
        $id = $request->id;
        return response()->json(Destination::where('request_id', $id)->get());
    }
}
