<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PagesController extends Controller
{
    public function signUpForm()
    {
        return view('web.register');
    }

    public function userLoginForm()
    {
        return view('web.login');
    }

    public function forgotPasswordForm()
    {
        return view('web.forgot-password');
    }

    public function indexPage()
    {
        $new_books = DB::table('books')
            ->whereNull('deleted_at')
            ->where('status',1)
            ->where('approve_status',1)
            ->orderBy('id','desc')
            ->limit(10)
            ->get();
        return view('web.home',compact('new_books'));
    }
}
