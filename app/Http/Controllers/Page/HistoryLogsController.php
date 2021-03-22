<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceProvider;
use App\Models\Transaction_log;
use App\Services\Tracking\GetListingLogs;


class HistoryLogsController extends Controller
{
    public function Logs(GetListingLogs $getListingLogs)
    {
        $records = $getListingLogs->execute();
        return response()->json($records);
    }
}
