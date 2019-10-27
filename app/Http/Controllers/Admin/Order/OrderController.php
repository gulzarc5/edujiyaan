<?php

namespace App\Http\Controllers\Admin\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use Validator;

class OrderController extends Controller
{
    public function BookOrderDispatchedForm($order_id)
    {
        try {
            $order_id = decrypt($order_id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        return view('admin.orders.book_orders.order_dispatch',compact('order_id'));
    }

    public function BookOrderDispatched(Request $request)
    {
        $validatedData = $request->validate([
            'order_id' => 'required',
            'courier_name' => 'required',
            'consignment' => 'required',
        ]);

        $update_order_details =DB::table('book_order_details')
            ->where('id',$request->input('order_id'))
            ->update([
                'courier_name' => $request->input('courier_name'),
                'consighment_no' => $request->input('consignment'),
                'status' => 2,
            ]);
        if ($update_order_details) {
            $order = DB::table('book_order_details')->where('id',$request->input('order_id'))->first();
            $check_order_status = DB::table('book_order_details')
                ->where('order_id',$order->order_id)
                ->get();
            $status_update = true;
            foreach ($check_order_status as $key => $value) {
                if ($value->status < 2) {
                    $status_update = false;
                    break;
                }
            }

            if ($status_update == true) {
                $order_update = DB::table('book_orders')
                    ->where('id',$order->order_id)
                    ->update([
                        'status' => 2,
                    ]);
            }

            return redirect()->route('admin.book_order_detail',['order_id'=>encrypt( $order->order_id)]);
        }else{
            return redirect()->back()->with('error','Something Went Wrong Please Try Again');
        }
    }

    public function bookOrderStatus($order_id,$status)
    {
        try {
            $order_id = decrypt($order_id);
            $status = decrypt($status);            
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $update_order_details =DB::table('book_order_details')
            ->where('id',$order_id)
            ->update([
                'status' => $status,
            ]);
        if ($update_order_details) {
            $order = DB::table('book_order_details')->where('id',$order_id)->first();
            $check_order_status = DB::table('book_order_details')
                ->where('order_id',$order->order_id)
                ->get();
            $status_update = true;
            foreach ($check_order_status as $key => $value) {
                if ($value->status < $status) {
                    $status_update = false;
                    break;
                }
            }

            if ($status_update == true) {
                $order_update = DB::table('book_orders')
                    ->where('id',$order->order_id)
                    ->update([
                        'status' => $status,
                    ]);
            }

            return redirect()->route('admin.book_order_detail',['order_id'=>encrypt( $order->order_id)]);
        }else{
            return redirect()->back()->with('error','Something Went Wrong Please Try Again');
        }
    }
}
