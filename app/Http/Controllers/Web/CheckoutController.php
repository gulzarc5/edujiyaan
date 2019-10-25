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
            $cart = DB::table('cart')
                ->select(DB::raw('SUM(books.price) AS total_cart_amount'),DB::raw('SUM(cart.quantity) AS total_quantity'),DB::raw('SUM(books.shipping_charge) AS total_shipping_charge'))
                ->leftjoin('books','books.id','=','cart.book_id')
                ->where('cart.user_id',$user_id)
                ->first();
            // dd($cart);

            return view('web.checkout.checkout',compact('shipping_address','cart'));
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
        $validatedData = $request->validate([
            'shipping_id' => ['required', 'numeric'],
            'payment_method' => 'numeric|required',
        ]);

        $shipping_id = $request->input('shipping_id');
        $payment_method = $request->input('payment_method'); // value 1 = COD, 2 = Online
        $user_id = Auth::guard('buyer')->user()->id;
        $total_order_amount = 0;
        $total_shipping_charge = 0;
        $total_quantity = 0 ;
        $book_order = DB::table('book_orders')
            ->insertGetId([
                'user_id' => $user_id,
                'payment_method' => $payment_method,
                'created_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]);
        
        $cart = DB::table('cart')
            ->where('user_id',$user_id)
            ->get();

        foreach ($cart as $key => $value) {
            $book = DB::table('books')->where('id',$value->book_id)
                ->first();
            if ($book) {
                $total_order_amount += $book->price*$value->quantity;
                $total_shipping_charge += $book->shipping_charge*$value->quantity;
                $total_quantity += $value->quantity ;
                DB::table('book_order_details')
                    ->insert([
                        'user_id' => $user_id,
                        'book_id' => $book->id,
                        'order_id' => $book_order,
                        'seller_id' => $book->user_id,
                        'rate' => $book->price,
                        'shipping_charge' => $book->shipping_charge,
                        'quantity' => $value->quantity,
                        'created_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                        'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                    ]);                    
            }
        }

        $book_order_update = DB::table('book_orders')
            ->where('id',$book_order)
            ->update([
                'total_quantity' => $total_quantity,
                'shipping_charge' => $total_shipping_charge,
                'total_amount' => $total_order_amount,
                'created_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]);
        if ($payment_method == '1') {
            return redirect()->route('web.index');
        }else {
            return redirect()->route('web.index');
        }
        
    }

}
