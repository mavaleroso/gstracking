<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Base\BaseController as Controller;
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
