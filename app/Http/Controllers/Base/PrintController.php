<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Base\BaseController as Controller;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function index()
    {
        if (auth('users')->check()) {
            return view('print');
        }
        return view('login');
    }
}
