<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Carbon\Carbon;
use Illuminate\Contracts\Encryption\DecryptException;

class OrderController extends Controller
{
    public function viewOrders()
    {
        $user_id = Auth::guard('buyer')->id();
        $book_orders = DB::table('book_order_details')
            ->select('book_order_details.*','books.book_name as book_name','books.price as price','books.book_image as book_image','book_orders.payment_status as payment_status')
            ->leftjoin('book_orders','book_orders.id','=','book_order_details.order_id')
            ->leftjoin('books','books.id','=','book_order_details.book_id')
            ->where('book_order_details.user_id',$user_id)
            ->orderBy('book_order_details.id')
            ->get();
        $status = 1;
        return view('web.user.orders',compact('book_orders','status'));
    }
}
