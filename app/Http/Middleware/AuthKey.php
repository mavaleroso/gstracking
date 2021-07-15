<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Api;

class AuthKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $api = Api::where('host', $request->header('host'))->where('key', $request->header('KEY'))->first();
        if (!$api) {
            return response()->json(['message' => 'App key not found'], 401);
        }
        return $next($request);
    }
}
