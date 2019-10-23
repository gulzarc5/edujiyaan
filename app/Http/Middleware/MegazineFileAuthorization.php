<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use DB;
use Illuminate\Contracts\Encryption\DecryptException;

class MegazineFileAuthorization
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
            if (Auth::guard('admin')->check()) {
                return $next($request);
            } elseif(Auth::guard('seller')->check()) {
                try {
                    $megazine_id = decrypt($request->route('megazine_id'));
                }catch(DecryptException $e) {
                    abort(404);
                }
                $seller_id = Auth::guard('seller')->user()->id;
                
                $check_data = DB::table('megazines')
                    ->where('id',$megazine_id)
                    ->where('user_id',$seller_id)
                    ->count();
                if ($check_data > 0) {
                    return $next($request);
                }else{
                    abort(404);
                }
            }elseif(Auth::guard('buyer')->check()){

            }            
        }else{
         return redirect()->route('we.index');
        }
    }
}
