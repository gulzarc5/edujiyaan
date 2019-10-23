<?php

namespace App\Http\Middleware;

use Auth;
use DB;
use Closure;

class ProjectFileAuthorization
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
                    $project_id = decrypt($request->route('project_id'));
                }catch(DecryptException $e) {
                    abort(404);
                }
                $seller_id = Auth::guard('seller')->user()->id;
                
                $check_data = DB::table('projects')
                    ->where('id',$project_id)
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
