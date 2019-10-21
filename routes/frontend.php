<?php

// Route::group(['namespace'=> 'Web'], function(){   


// });
Route::get('/', function () {

    return view('web.home');
})->name('web.index');
Route::get('/Signin', function () {

    return view('web.login');
});
Route::get('/Signup', function () {

    return view('web.register');
});

Route::get('seller/login','Seller\SellerController@sellerLoginForm')->name('seller_login');

Route::get('/Forgot-Password', function () {

    return view('web.forgot-password');
});
Route::get('/Seller-Signin', function () {

    return view('web.seller-login');
});

