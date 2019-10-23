<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Auth;
use Carbon\Carbon;

class CartController extends Controller
{
    public function viewCart()
    {
        return view('web.user.cart');
    }
}
