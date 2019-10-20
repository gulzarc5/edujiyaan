<?php

Route::group(['namespace'=> 'Web'], function(){

   


});
Route::get('seller/login','Seller\SellerController@sellerLoginForm')->name('seller_login');