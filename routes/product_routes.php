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

Route::group(['namespace'=> 'Projects','prefix'=>'Project'], function(){

	Route::get('Add/','ProjectController@addProjectForm')->name('admin.add_new_project');
	Route::post('insert/','ProjectController@addProject')->name('admin.insert_new_project');
	Route::get('Edit/{project_id}','ProjectController@editProjectForm')->name('admin.edit_project_form');
	Route::post('update/','ProjectController@projectUpdate')->name('admin.project_update');
	// Route::get('Status/Update/{project_id}/{status}','ProjectController@projectStatusUpdate')->name('admin.project_status_update');
	// Route::get('Detail/View/{book_id}','BookController@bookDetailView')->name('admin.book_detail_view');


	Route::get('list/','ProjectController@projectList')->name('admin.project_list');
	Route::get('ajax/list/','ProjectController@ajaxProjectList')->name('admin.ajax_project_list');

});

Route::group(['namespace' => 'Order'],function(){
	
});