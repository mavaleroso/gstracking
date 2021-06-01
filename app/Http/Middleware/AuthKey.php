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
        $host = Api::where('host', $request->header('host'))->first();
        $token = $request->header('authorization');
        if ($host == false || $token != 'Bearer '.env('APP_KEY')) {
            return response()->json(['message' => 'App key not found'], 401);
        }
        return $next($request);
    }
}
