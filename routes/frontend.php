<?php

Route::group(['namespace'=> 'Web'], function(){   
    Route::group(['prefix'=>'Book'],function(){
        Route::get('List/{academic?}','BookController@bookList')->name('web.new_book_list');
        Route::get('List/Category/{cat_id}','BookController@bookListCategory')->name('web.new_book_list_category');

        Route::post('Ajax/Book/List','BookController@ajaxBookList')->name('ajax_book_list');
        Route::get('/search/pagination','BookController@ajaxBookList');
        Route::get('/Books-Detail/{book_id}', 'BookController@bookDetail')->name('web.books-detail');
    });

    Route::group(['prefix'=>'User'],function(){
        Route::get('/Signup', 'PagesController@signUpForm')->name('web.signup');
        Route::get('/Login', 'PagesController@userLoginForm')->name('web.user_login');

        Route::get('/Login', 'LoginController@userLogin')->name('web.user_login_submit');

        Route::post('/Register/User', 'RegisterController@userRegister')->name('web.register');
    });
    
});

Route::get('seller/login','Seller\SellerController@sellerLoginForm')->name('seller_login');

Route::get('/', function () {
    return view('web.home');
})->name('web.index');



Route::get('/Forgot-Password', function () {

    return view('web.forgot-password');
});
Route::get('/Old-Books', function () {

    return view('web.old-books');
})->name('web.old-books');



Route::get('/Project', function () {

    return view('web.project');
})->name('web.project');

Route::get('/Project-Detail', function () {

    return view('web.project-detail');

})->name('web.project-detail');

Route::get('/Magazines', function () {

    return view('web.magazines');
})->name('web.magazines');

Route::get('/Checkout', function () {

    return view('web.checkout');
})->name('web.checkout');

// ======== Main Pages ==========

Route::get('/User-Detail', function () {

    return view('web.user.user-detail');
})->name('web.user.user-detail');

Route::get('/Add-User-Detail', function () {

    return view('web.user.add-user-addrs');
})->name('web.user.add-user-addrs');

Route::get('/Cart', function () {

    return view('web.user.cart');
})->name('web.user.cart');

Route::get('/My-Orders', function () {

    return view('web.user.orders');
})->name('web.user.orders');

Route::get('/Change-Password', function () {

    return view('web.user.change-password');
})->name('web.user.change-password');

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

