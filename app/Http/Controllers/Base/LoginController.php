<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Base\BaseController as Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Staff panel login page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth('users')->check()) {
            return redirect()->route('main.dashboard');
        }
        return view('login');
    }
}
