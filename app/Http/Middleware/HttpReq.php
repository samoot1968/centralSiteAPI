<?php

namespace App\Http\Middleware;

use Closure;

class HttpReq
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

        return $next($request)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-allow-Methods', 'GET, POST,PUT,PATCH,DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-CSRF-Token');
    }
}
