<?php

namespace App\Http\Middleware;

use Closure;

class IpCheck
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
        if($request->ip()=='127.0.0.1')
        {
           // dump('aaaa');
            return $next($request);     
        }
        return redirect('/');
    }
}
