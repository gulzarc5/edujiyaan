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

Route::group(['prefix'=>'Quiz'], function(){
	Route::get('Add/','QuizController@addQuizForm')->name('seller.add_new_quiz_form');
	Route::post('insert/','QuizController@addQuiz')->name('seller.insert_new_quiz');
	Route::get('Edit/{quiz_id}','QuizController@editQuizForm')->name('seller.edit_quiz_form');
	Route::post('update/','QuizController@updateQuiz')->name('seller.update_quiz');
	Route::get('Status/Update/{quiz_id}/{status}','QuizController@quizStatusUpdate')->name('seller.quiz_status_update');
	Route::get('Detail/View/{quiz_id}','QuizController@quizDetailView')->name('seller.quiz_detail_view');
	// Route::get('Download/file/{quiz_id}','QuizController@quizFileDownload')->name('admin.quiz_file_download')->middleware('fileAuthorization');


	Route::get('list/','QuizController@quizList')->name('seller.quiz_list');
	Route::get('ajax/list/','QuizController@ajaxQuizList')->name('seller.ajax_quiz_list');
});