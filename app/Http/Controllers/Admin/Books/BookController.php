<?php

namespace App\Http\Controllers\Admin\Books;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use DataTables;
use Intervention\Image\Facades\Image;
use File;
use Carbon\Carbon;

class BookController extends Controller
{
    public function addBookForm()
    {
    	$category = DB::table('book_category')
    		->whereNull('deleted_at');
    		->get();
    	$sub_category = DB::table('book_sub_category')
    		->whereNull('deleted_at')
    		->get();

    	return view('admin.books.add_book_form',compact('category','sub_category'));
    }

    public function addBook(Request $request)
    {
    	 $validatedData = $request->validate([
            'book_id_prefix' => 'required',
            'book_name' => 'required',
            'author_name' => 'required',
            'publisher_name' => 'required',
            'book_condition' => 'required',
            'book_type' => 'required',
            'category' => 'required',
            'language' => 'required',
            'stock' => 'required',
            'image' => 'required',
        ]);

    }
}
