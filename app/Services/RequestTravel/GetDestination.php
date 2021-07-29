<?php

namespace App\Services\RequestTravel;

use App\Models\Request;
use App\Models\Destination;
use App\Models\Passenger;
use App\Models\System;
use Illuminate\Support\Arr;
use App\Services\Api\GetBrgy;
use App\Services\Api\GetCity;
use App\Services\Core\GenerateCode;

class GetDestination
{
    protected $getBrgy;
    protected $getCity;

    /**
     * Initialization
     */

    /**
     * create user execution     
     *
     * @return object
     */
    public function execute()
    {
        $request = Request::select('destination')->get();
        return $request;
    }
}
