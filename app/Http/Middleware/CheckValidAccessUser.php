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
        dd(Auth::guard()->name());
        if (Auth::check()) {
            if (Auth::guard('admin')) {
                return $next($request);
            } elseif(Auth::guard('seller')) {
                try {
                    $project_id = decrypt($request->route('project_id'));
                }catch(DecryptException $e) {
                    abort(404);
                }

                dd($project_id);
                $seller_id = Auth::guard('seller')->user()->id;

            }elseif(Auth::guard('buyer')){

            }            
        }else{
         return redirect()->route('we.index');
        }
    }
}
