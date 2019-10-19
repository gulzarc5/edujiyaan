<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AdminDeshboardController extends Controller
{
    public function index(){
    	return view('admin.admindeshboard');
    }
}
