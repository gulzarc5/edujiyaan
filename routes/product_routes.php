<?php

Route::group(['namespace'=> 'Books','prefix'=>'Book'], function(){

	Route::get('Add/','BookController@addBookForm')->name('add_new_book');
	Route::post('insert/','BookController@addBook')->name('insert_new_book');
});

Route::group(['namespace' => 'Order'],function(){
	
});