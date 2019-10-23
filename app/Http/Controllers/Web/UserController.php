<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Contracts\Encryption\DecryptException;

class UserController extends Controller
{
    public function myProfile()
    {
        $user_id = Auth::guard('buyer')->id();
        $user_details = DB::table('users')
            ->select('users.*','state.name as s_name','city.name as c_name')
            ->leftjoin('state','state.id','=','users.state_id')
            ->leftjoin('city','city.id','=','users.city_id')
            ->where('users.id',$user_id)
            ->first();

        return view('web.user.user-detail',compact('user_details'));
    }

    public function myProfileEdit()
    {
        $user_id = Auth::guard('buyer')->id();
        $user_details = DB::table('users')
            ->select('users.*','state.name as s_name','city.name as c_name')
            ->leftjoin('state','state.id','=','users.state_id')
            ->leftjoin('city','city.id','=','users.city_id')
            ->where('users.id',$user_id)
            ->first();
        
        $states = DB::table('state')
            ->whereNull('deleted_at')
            ->get();
        $city = null;
            if (!empty($user_details->state_id)) {
                $city = DB::table('city')
                ->where('state_id',$user_details->state_id)
                ->get();
            }

        return view('web.user.add-user-addrs',compact('user_details','states','city'));
    }

    public function myProfileUpdate(Request $request)
    {
        $user_id = Auth::guard('buyer')->user()->id;

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'dob' => 'required',
            'pan' => 'required',
            'gender' => 'required',
            'pin' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
        ]);
        
        $user_update = DB::table('users')
            ->where('id',$user_id)
            ->update([
                'name' => $request->input('name'),
                'dob' => $request->input('dob'),
                'pan' => $request->input('pan'),
                'gender' => $request->input('gender'),
                'pin' => $request->input('pin'),
                'state_id' => $request->input('state'),
                'city_id' => $request->input('city'),
                'address' => $request->input('address'),
            ]);
        if ($user_update) {
            return redirect()->route('web.myProfile')->with('message','Your Password Changed Successfully');
        } else {
            return redirect()->back()->with('error','Sorry Current Password Does Not matched');
        }
        

    }

    public function viewChangePasswordForm()
    {
        return view('web.user.change-password');
    }

    public function ChangePassword(Request $request)
    {
        $validatedData = $request->validate([
            'current_password' => ['required', 'string', 'min:8'],
            'new_password' => ['required', 'string', 'min:8'],
            'confirm_password' => ['required', 'string', 'min:8', 'same:new_password'],
        ]);

        $current_password = Auth::guard('buyer')->user()->password;   

        if(Hash::check($request->input('current_password'), $current_password)){           
            $user_id = Auth::guard('buyer')->user()->id; 
            $password_change = DB::table('users')
            ->where('id',$user_id)
            ->update([
                'password' => Hash::make($request->input('confirm_password')),
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]);
            return redirect()->back()->with('message','Your Password Changed Successfully');            
        }else{           
            return redirect()->back()->with('error','Sorry Current Password Does Not matched');
       }
    }
}
