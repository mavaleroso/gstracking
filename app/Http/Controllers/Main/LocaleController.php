<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Main\BaseController as Controller;
use Illuminate\Http\Request;

class LocaleController extends Controller
{
    /**
     * Main panel Language
     *
     * @return \Illuminate\Http\Response
     */
     public function changeLanguage($language)
     {
         session()->put('winepromo_main_language', $language);
         app()->setLocale($language);
         return redirect()->back();
     }


}
