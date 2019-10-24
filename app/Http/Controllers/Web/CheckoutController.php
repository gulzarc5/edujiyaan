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
        ->get();
        return view('web.checkout.checkout',compact('shipping_address'));
    }
}
