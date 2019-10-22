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

// ======== Main Pages ==========

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

// ======== Main Pages ==========

Route::get('/User-Detail', function () {

    return view('web.user.user-detail');
})->name('web.user.user-detail');

Route::get('/Cart', function () {

    return view('web.user.cart');
})->name('web.user.cart');

Route::get('/My-Orders', function () {

    return view('web.user.orders');
})->name('web.user.orders');

// ======== Shiping Address Pages ==========

Route::get('/Shipping-Address', function () {

    return view('web.shipping-address.shipping-address');
})->name('web.shipping-address.shipping-address');

Route::get('/Add-Shipping-Address', function () {

    return view('web.shipping-address.add-shipping-address');
})->name('web.shipping-address.add-shipping-address');

Route::get('/Edit-Shipping-Address', function () {

    return view('web.shipping-address.edit-shipping-address');
})->name('web.shipping-address.edit-shipping-address');

