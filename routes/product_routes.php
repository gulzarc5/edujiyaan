<?php

Route::group(['namespace'=> 'Books','prefix'=>'Book'], function(){

	Route::get('Add/','BookController@addBookForm')->name('admin.add_new_book');
	Route::post('insert/','BookController@addBook')->name('admin.insert_new_book');
	Route::get('Edit/{book_id}','BookController@editBookForm')->name('admin.edit_book_form');
	Route::post('update/','BookController@updateBook')->name('admin.update_book');
	Route::get('Status/Update/{book_id}/{status}','BookController@bookStatusUpdate')->name('admin.book_status_update');
	Route::get('Detail/View/{book_id}','BookController@bookDetailView')->name('admin.book_detail_view');


	Route::get('list/','BookController@bookList')->name('admin.book_list');
	Route::get('ajax/list/','BookController@ajaxBookList')->name('admin.ajax_book_list');

});

Route::group(['namespace' => 'Order'],function(){
	
});