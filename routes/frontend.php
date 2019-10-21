<?php

Route::group(['namespace'=> 'Web'], function(){   


});
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
// Route::get('/Seller-Signin', function () {

//     return view('web.seller-login');
// });
Route::get('/Books', function () {

    return view('web.books');
})->name('web.books');
Route::get('/Old-Books', function () {

    return view('web.old-books');
})->name('web.old-books');
Route::get('/Books-Detail', function () {

    return view('web.books-detail');
})->name('web.books-detail');
Route::get('/Project', function () {

    return view('web.project');
})->name('web.project');
