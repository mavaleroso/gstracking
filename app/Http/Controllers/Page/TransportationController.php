<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceProvider;
use App\Models\Driver;

class TransportationController extends Controller
{
    public function service_providers()
    {
        return response()->json(ServiceProvider::all());
    }

    public function drivers()
    {
        return response()->json(Driver::all());
    }
}
