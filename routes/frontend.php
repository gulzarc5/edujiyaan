<?php

Route::group(['namespace'=> 'Web','middleware'=>'web'], function(){   
    Route::group(['prefix'=>'Book'],function(){
        Route::get('List/{academic?}','BookController@bookList')->name('web.new_book_list');
        Route::get('List/Category/{cat_id}','BookController@bookListCategory')->name('web.new_book_list_category');

        Route::post('Ajax/Book/List','BookController@ajaxBookList')->name('ajax_book_list');
        Route::get('/search/pagination','BookController@ajaxBookList');
        Route::get('/Books/Detail/{book_id}', 'BookController@bookDetail')->name('web.books-detail');

        ///////////////////////Old Books Route ////////////////////////////////
        Route::get('Old/List/{academic?}','BookController@bookListOld')->name('web.old_book_list');
        Route::get('Old/List/Category/{cat_id}','BookController@bookListCategoryOld')->name('web.old_book_list_category');

        Route::post('Old/Ajax/Book/List','BookController@ajaxBookListOld')->name('ajax_book_list_old');
        Route::get('Old/search/pagination','BookController@ajaxBookListOld');
        Route::get('Book/Detail/{book_id}', 'BookController@bookDetail')->name('web.books-detail');
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

            Route::get('Orders/{tab_status}','OrderController@viewOrders')->name('web.view_orders');
            
            Route::get('/Shipping/Address/List', 'UserController@viewShippingAddressList')->name('web.view_shipping_address_list');
            Route::get('/Shipping/Address', 'UserController@viewShippingAddressForm')->name('web.shipping_address_form');
            Route::post('/Shipping/Address/Add', 'UserController@ShippingAddressAdd')->name('web.shipping_address_add');
            Route::get('/Shipping/Address/Delete/{shipping_id}', 'UserController@ShippingAddressDelete')->name('web.shipping_address_delete');
            Route::get('/Shipping/Address/Edit/{shipping_id}', 'UserController@ShippingAddressEdit')->name('web.shipping_address_edit');
            Route::post('/Shipping/Address/Update', 'UserController@ShippingAddressUpdate')->name('web.shipping_address_update');

            Route::group(['prefix'=>'Checkout'],function(){
                Route::get('/Book', 'CheckoutController@CheckoutBook')->name('web.checkout_book');
                Route::get('/Add/Address', 'CheckoutController@CheckoutAddAddress')->name('web.add_checkout_address');
                Route::post('/Add/Address', 'CheckoutController@CheckoutInsertAddress')->name('web.add_checkout_insert_address');
                Route::post('/Book/Order/Place','CheckoutController@bookOrderPlace')->name('web.book_order_place');
                Route::get('Book/Online/Pay/Success/{order_id}','CheckoutController@bookPaySuccess')->name('book_pay_success');

                /** Project Buying Route **/
                Route::get('/Project/{project_id}', 'CheckoutController@CheckoutProject')->name('web.checkout_project');
                Route::get('project/pay/{project_id}', 'CheckoutController@payProject')->name('project_pay');
                Route::get('project/pay_success/{project_id}', 'CheckoutController@successProject')->name('project_success');

                /** Megazine Buying Route **/
                Route::get('/Megazine/{megazine_id}', 'CheckoutController@CheckoutMegazine')->name('web.checkout_megazine');
                Route::get('megazine/pay/{megazine_id}', 'CheckoutController@payMegazine')->name('megazine_pay');
                Route::get('megazine/pay_success/{megazine_id}', 'CheckoutController@successMegazine')->name('megazine_success');
            }); 

            //Quiz View Route for logged user
            Route::get('quiz/pdf/view/{quiz_id}','QuizController@quizPdfView')->name('web.quiz_pdf');
            Route::get('Book/Order/Thanks/{order_id}/{payment_method}/{payment_id?}','CheckoutController@bookOrderThanks')->name('web.book_order_thanks');
        });
    });

    Route::group(['prefix'=>'cart'],function(){
        Route::get('/view', 'CartController@viewCart')->name('web.viewCart');
        Route::get('/Add/{book_id}', 'CartController@AddCart')->name('web.add_cart');
        Route::post('/Update', 'CartController@updateCart')->name('web.updateCart');
        Route::get('/item/remove/{p_id}','CartController@cartItemRemove')->name('cartItemRemove');
    }); 

    Route::group(['prefix'=>'project'],function(){
        Route::get('List','ProjectController@projectList')->name('web.project_list');
        Route::get('List/Category/{cat_id}','ProjectController@projectListCategory')->name('web.project_list_category');
        Route::any('Ajax/Project/List','ProjectController@ajaxProjectList')->name('ajax_project_list');        
        Route::get('Detail/{project_id}','ProjectController@projectDetail')->name('web.project_detail');

        Route::get('Preview/{project_id}','ProjectController@previewFileDownload')->name('web.project_preview');
        Route::group(['middleware'=>'auth:buyer'], function(){
        Route::get('Synopsis/{project_id}','ProjectController@synopsisFileDownload')->name('web.project_synopsis')->middleware('projectFileAuthorization');
        Route::get('Documentation/{project_id}','ProjectController@documentationFileDownload')->name('web.project_documentation')->middleware('projectFileAuthorization');
        Route::get('PPT/{project_id}','ProjectController@pptFileDownload')->name('web.project_ppt')->middleware('projectFileAuthorization');
        });
    });

    Route::group(['prefix'=>'megazine'],function(){
        Route::get('List','MegazineController@megazineList')->name('web.megazine_list');
        Route::get('List/Category/{cat_id}','MegazineController@megazineListCategory')->name('web.megazine_list_category');
        Route::any('Ajax/Megazine/List','MegazineController@ajaxMegazineList')->name('ajax_megazine_list');        
        Route::get('Detail/{megazine_id}','MegazineController@megazineDetail')->name('web.megazine_detail');
        Route::group(['middleware'=>'auth:buyer'], function(){
        Route::get('File/{megazine_id}','MegazineController@megazineFileDownload')->name('web.megazine_file')->middleware('megazineFileAuthorization');
        });
    });


    Route::group(['prefix'=>'Quiz'],function(){
        Route::get('List/{category_id?}','QuizController@quizList')->name('web.quiz_list');
        Route::any('Ajax/Quiz/List','QuizController@ajaxQuizList')->name('web.ajax_quiz_list');
        Route::get('Detail/{quiz_id}','QuizController@quizDetail')->name('web.quiz_detail');
    });
});

Route::get('seller/login','Seller\SellerController@sellerLoginForm')->name('seller_login');
Route::get('/','Web\PagesController@indexPage')->name('web.index');


// Route::get('/Old-Books', function () {

//     return view('web.old-books');
// })->name('web.old-books');

// Route::get('/Magazines', function () {

//     return view('web.magazines');
// })->name('web.magazines');

// Route::get('/Magazines-Detail', function () {

//     return view('web.magazines-detail');
// })->name('web.magazines-detail');

// Route::get('/Quiz-Detail', function () {

//     return view('web.quiz-detail');
// })->name('web.quiz-detail');

// Route::get('/Checkout', function () {

//     return view('web.checkout.checkout');
// })->name('web.checkout.checkout');

// Route::get('/Add-Address', function () {

//     return view('web.checkout.checkout-add-address');
// })->name('web.checkout.checkout-add-address');

// Route::get('/Thank-You', function () {

//     return view('web.thankyou.thank');
// })->name('web.thankyou.thank');

Route::get('/Contact-Us', function () {

    return view('web.thankyou.contact');
})->name('web.thankyou.contact');

Route::get('/Tips-&-Tricks', function () {

    return view('web.thankyou.tips');
})->name('web.thankyou.tips');

// ======== Main Pages ==========



// Route::get('/Magazine-Checkout', function () {

//     return view('web.checkout.magazine-checkout');
// })->name('web.checkout.magazine-checkout');

Route::get('/Membership', function () {

    return view('web.user.membership');
})->name('web.user.membership');

Route::get('/Membership-Checkout', function () {

    return view('web.checkout.membership-checkout');
})->name('web.checkout.membership-checkout');


