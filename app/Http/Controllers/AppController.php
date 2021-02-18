<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\User;

class AppController extends Controller
{
    public function init()
    {
        $user = Auth::user();
    	return response()->json(['user' => $user], 200);
    }

    public function main()
    {
        if(session()->has('user_id')){
			return view('main');
		} else {
			return redirect()->route('login');
		}
    }

    public function login()
    {
        if (session()->has('user_id')) {
			return redirect()->route('main');
		} else {
			return view('login');
		}
    }
}
