<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckValidAccessUser
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
        if (Auth::check()) {
            if (Auth::guard('admin')) {
                return $next($request);
            } elseif(Auth::guard('seller')) {
                # code...
            }elseif(Auth::guard('buyer')){

            }            
        }else{

        }
    }
}
