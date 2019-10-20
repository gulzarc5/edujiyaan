<?php
Route::group(['prefix'=>'Books'], function(){
	Route::get('Add/Form','BookController@addBookForm')->name('seller.add_book_form');
	Route::post('Add','BookController@addBook')->name('seller.insert_book');
	Route::get('Edit/{book_id}','BookController@editBookForm')->name('seller.edit_book_form');
	Route::post('update/','BookController@updateBook')->name('seller.update_book');
	Route::get('Status/Update/{book_id}/{status}','BookController@bookStatusUpdate')->name('seller.book_status_update');
	Route::get('Detail/View/{book_id}','BookController@bookDetailView')->name('seller.book_detail_view');

	Route::get('list/','BookController@bookList')->name('seller.book_list');
	Route::get('ajax/list/','BookController@ajaxBookList')->name('seller.ajax_book_list');
});