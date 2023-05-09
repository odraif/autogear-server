<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CorsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $request->header('Access-Control-Allow-Origin',"*");
        $request->header('Access-control-Allow-Methods',"GET,HEAD,OPTIONS,POST,PUT");
        $request->header('Access-control-Allow-Hearders',"Origin, X-Requested-With, Content-Type, Accept, x-client-key, x-client-token, x-client-secret, Authorization");
        return $next($request);
    }
}
