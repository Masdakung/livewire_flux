<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RequestUrlMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(str_contains($request->getHost(), 'ngrok-free.app')){
            // echo "APP_ENV:>";
            // \Illuminate\Support\Facades\URL::forceScheme('https');
            // echo "get url:>".$getUrls;
        }
        return $next($request);
    }
}
