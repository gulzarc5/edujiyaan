<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
