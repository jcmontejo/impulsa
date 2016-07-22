<?php

namespace App\Http\Middleware;

use Closure;

class IsInternalMiddleware
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
        if (\Auth::user()->role == 'internal') {
            return $next($request);
        }else
        {
            return abort(403);
        }
        
    }
}
