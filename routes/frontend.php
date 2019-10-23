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

        Route::post('/Login', 'LoginController@userLogin')->name('web.user_login_submit');
        Route::post('/logout', 'LoginController@logout')->name('user.logout');

        Route::get('/Forgot/Password', 'PagesController@forgotPasswordForm')->name('web.forgot_password_form');
        Route::post('/Register/User', 'RegisterController@userRegister')->name('web.register');
        Route::get('Cart','CartController@viewCart')->name('web.view_cart');

        Route::group(['middleware'=>'auth:buyer'], function(){
            Route::get('Profile','UserController@myProfile')->name('web.myProfile');
            Route::get('Profile/Edit','UserController@myProfileEdit')->name('web.myProfileEdit');
            Route::post('Profile/Update','UserController@myProfileUpdate')->name('web.myProfileUpdate');

            Route::get('/change/Password', 'UserController@viewChangePasswordForm')->name('web.change_password_form');
		    Route::post('/change/Password', 'UserController@ChangePassword')->name('web.change_password');
        });
    });

    Route::group(['prefix'=>'cart'],function(){
        Route::get('/view', 'CartController@viewCart')->name('web.viewCart');
        Route::get('/Add/{book_id}', 'CartController@AddCart')->name('web.add_cart');
        Route::post('/Update', 'CartController@updateCart')->name('web.updateCart');
        Route::get('/item/remove/{p_id}','CartController@cartItemRemove')->name('cartItemRemove');
    }); 
});

Route::get('seller/login','Seller\SellerController@sellerLoginForm')->name('seller_login');
Route::get('/', function () {
    return view('web.home');
})->name('web.index');


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


Route::get('/Project-Cart', function () {

    return view('web.project-cart');
})->name('web.project-cart');

Route::get('/Membership', function () {

    return view('web.user.membership');
})->name('web.user.membership');

Route::get('/Membership-Checkout', function () {

    return view('web.membership-checkout');
})->name('web.membership-checkout');

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

