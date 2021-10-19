<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Cookie;
use Closure;

class MainLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = session()->has('gstracking_main_language') ? ( (session()->get('gstracking_main_language')=='categories') ? 'en' : session()->get('gstracking_main_language') ) : 'en';
        Cookie::queue('gstracking_main_language', $locale, 30);
        session()->put('gstracking_main_language', $locale);
        app()->setLocale($locale);
        return $next($request);
    }
}
