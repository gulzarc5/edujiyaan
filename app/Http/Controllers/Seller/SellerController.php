<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\Seller;
use DB;
use Auth;
use Carbon\Carbon;

class SellerController extends Controller
{
    // Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString();

    public function sellerLoginForm()
    {
        return view('seller.index');
    }
    
    public function index(){
        return view('seller.seller_deshboard');
    }

    public function myProfileForm()
    {
        $seller_id = Auth::guard('seller')->user()->id;
        $seller = DB::table('users')
        ->first();

        $state = DB::table('state')->whereNull('deleted_at')->get();

        $city = null;
        if (!empty($seller->state_id)) {
            $city = DB::table('city')
            ->where('state_id',$seller->state_id)
            ->get();
        }
        $seller_bank = DB::table('seller_bank_account')
            ->whereNull('deleted_at')
            ->where('user_id',$seller_id)
            ->first();
        return view('seller.profile.myprofile',compact('seller','state','city','seller_bank'));
    }

    public function sellerUpdate(Request $request)
    {
        $seller_id = Auth::guard('seller')->user()->id;

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'dob' => 'required',
            'pan' => 'required',
            'gender' => 'required',
            'pin' => 'required',
            'state' => 'required',
            'city' => 'required',
            'bank_name' => 'required',
            'branch_name' => 'required',
            'account_no' => 'required',
            'ifsc' => 'required',
        ]);

        $seller = DB::table('users')
        ->where('id',$seller_id)
        ->update([
            'name' => $request->input('name'),
            'mobile' => $request->input('mobile'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'pan' => $request->input('pan'),
            'state_id' => $request->input('state'),
            'city_id' => $request->input('city'),
            'address' => $request->input('address'),
            'pin' => $request->input('pin'),     
            'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
        ]);

        $seller_details = DB::table('seller_bank_account')
        ->where('user_id',$seller_id)
        ->update([
            'bank_name' => $request->input('bank_name'),
            'branch_name' => $request->input('branch_name'),
            'account_no' => $request->input('account_no'),
            'ifsc' => $request->input('ifsc'),
            'upi_name' => $request->input('upi_name'),
            'upi_id' => $request->input('upi_id'),
            'upi_mobile' => $request->input('upi_mobile'),
            'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
        ]);

        return redirect()->back();

    }

    public function viewChangePasswordForm()
    {
        return view('seller.profile.change_password');
    }

    public function ChangePassword(Request $request)
    {
        $validatedData = $request->validate([
            'current_password' => ['required', 'string', 'min:8'],
            'new_password' => ['required', 'string', 'min:8'],
            'confirm_password' => ['required', 'string', 'min:8', 'same:new_password'],
        ]);

        $current_password = Auth::guard('seller')->user()->password;   

        if(Hash::check($request->input('current_password'), $current_password)){           
            $user_id = Auth::guard('seller')->user()->id; 
            $password_change = DB::table('user')
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
    
    public function myCategoryForm($status=null)
    {
        $seller_id = Auth::guard('seller')->user()->id;
        $dealing_category = DB::table('seller_deals')->where('seller_id',$seller_id)->whereNull('deleted_at')->count();
        if ($dealing_category > 0  && empty($status)) {
            $dealing_category = DB::table('seller_deals')
                ->select('seller_deals.*', 'category.name as category_name','first_category.name as f_cat_name')
                ->join('category','category.id','=','seller_deals.category_id')
                ->join('first_category','first_category.id','=','seller_deals.first_category_id')
                ->where('seller_deals.seller_id',$seller_id)
                ->whereNull('seller_deals.deleted_at')->get();
            return view('seller.profile.my_category',compact('dealing_category','status'));
        } else {
            $category = DB::table('category')->where('status',1)->whereNull('deleted_at')->get();
            foreach ($category as $key => $value) {          
                $first_category = DB::table('first_category')->where('category_id',$value->id)->whereNull('deleted_at')->where('status',1)->get();
                $first_categories = [];
                foreach ($first_category as $key => $value1) {

                    $status = 1;
                    $status_chk =  DB::table('seller_deals')->where('first_category_id',$value1->id)->where('seller_id',$seller_id)->count();
                    if ($status_chk > 0) {
                        $status = 2;
                    }

                    $first_categories[] = [
                        'id' => $value1->id,
                        'name' => $value1->name,
                        'status' => $status,
                    ];
                }
            
                $categories[] =[
                    'category' => $value->name,
                    'first_category' => $first_categories,
                ]; 
            }
            return view('seller.profile.my_category',compact('categories','status'));
        }
        return redirect()->back();
    }

    public function myCategoryUpdate(Request $request)
    {
        $seller_id = Auth::guard('seller')->user()->id;
        $seller_name = Auth::guard('seller')->user()->name;
        $validatedData = $request->validate([
            "deal_cat"    => "required|array|min:1",
            "deal_cat.*"  => "required|distinct|min:1",
        ]);
        $flag = false;
        $deal_category = $request->input('deal_cat'); // deal category array 
        $user_id = Auth::guard('seller')->user()->id; 

        foreach ($deal_category as $key => $value) {
            if (!empty( $value)) {
                $check_deal_cat = DB::table('seller_deals')->where('seller_id',$seller_id)->where('first_category_id',$value)->whereNull('deleted_at')->count();
                if ($check_deal_cat < 1) {
                    $main_cat = DB::table('first_category')->whereNull('deleted_at')->where('id',$value)->first();
                    if (isset($main_cat->category_id) && !empty(isset($main_cat->category_id))) {
                        
                        $deal_cat = DB::table('seller_deals')
                            ->insert([
                                'seller_id' => $seller_id,
                                'category_id' => $main_cat->category_id,
                                'first_category_id' => $value,
                                'created_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                            ]);
                        $brand_check = DB::table('brand_name')->where('name',$seller_name)->where('first_category',$value)->count();
                        if ($brand_check < 1) {
                            $brand_ins = DB::table('brand_name')
                                ->insert([
                                    'user_id' => $seller_id,
                                    'name' => $seller_name,
                                    'category' => $main_cat->category_id,
                                    'first_category' => $value,
                                    'status' => 2,
                                    'created_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                                ]);
                        }
                    
                    }
                }
            }
        }
        if ($user_id = Auth::guard('seller')->user()->seller_deal_status == 1 ) {
            $seller = DB::table('user')
                ->where('id',$seller_id)
                ->update([
                    'seller_deal_status' => 2,
                    'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                ]);
        }        

        return redirect()->back();
    }

    public function myCategoryDelete($id)
    {
        try {
            $id = decrypt($id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $seller_name = Auth::guard('seller')->user()->name;
        $get_deal_category = DB::table('seller_deals')->where('id',$id)->first();
        // dd($get_deal_category);
        $brand_delete = DB::table('brand_name')
            ->where('name',$seller_name)
            ->where('first_category',$get_deal_category->first_category_id)
            ->update([
                'deleted_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]);
        $my_deal_delete = DB::table('seller_deals')
            ->where('id',$id)
            ->update([
                'deleted_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]);
        return redirect()->back();
    }

    public function sellerFirstCategoryWithCategory($id)
    {
        $seller_id = Auth::guard('seller')->user()->id;
        $category = DB::table('seller_deals')
            ->select('first_category.*')
            ->join('first_category','seller_deals.first_category_id','first_category.id')
            ->where('seller_deals.seller_id',$seller_id)
            ->where('seller_deals.category_id',$id)
            ->get();
        echo $category;
    }
}
