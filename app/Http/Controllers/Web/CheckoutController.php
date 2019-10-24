<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    public function CheckoutBook()
    {
        $user_id = Auth::guard('buyer')->user()->id;
        $shipping_address = DB::table('user_shipping_address')
        ->select('user_shipping_address.*','state.name as s_name','city.name as c_name')
        ->leftjoin('state','state.id','=','user_shipping_address.state_id')
        ->leftjoin('city','city.id','=','user_shipping_address.city_id')
        ->where('user_shipping_address.user_id',$user_id)
        ->whereNull('user_shipping_address.deleted_at')
        ->orderBy('user_shipping_address.id','desc')
        ->get();

        if ($shipping_address->count() > 0) {
            return view('web.checkout.checkout',compact('shipping_address'));
        }else{
            $states = DB::table('state')
            ->whereNull('deleted_at')
            ->get();
            return view('web.checkout.checkout-add-address',compact('states'));
        }
        
    }

    public function CheckoutAddAddress()
    {
        $states = DB::table('state')
            ->whereNull('deleted_at')
            ->get();
        return view('web.checkout.checkout-add-address',compact('states'));
    }

    public function CheckoutInsertAddress(Request $request)
    {        
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => 'email|required',
            'mobile' =>  ['required','digits:10','numeric'],
            'pin' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
        ]);
        
        $user_id = Auth::guard('buyer')->user()->id;
        $shipping_add = DB::table('user_shipping_address')
            ->insert([
                'user_id' => $user_id,
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'mobile' =>  $request->input('mobile'),
                'pin' => $request->input('pin'),
                'state_id' => $request->input('state'),
                'city_id' => $request->input('city'),
                'address' => $request->input('address'),
                'created_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]);
        if ($shipping_add) {
            return redirect()->route('web.checkout_book')->with('message','Shipping Address Added Successfully');
        } else {
            return redirect()->back()->with('error','Sorry Something Went Wrong Please Try Again');
        }
    }

    public function bookOrderPlace(Request $request)
    {
        
    }

}
