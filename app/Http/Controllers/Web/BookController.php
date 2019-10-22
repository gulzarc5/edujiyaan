<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use Session;

class BookController extends Controller
{
    public function bookList($academic=null)
    {
        Session::forget('category');
        Session::forget('book_type');
        if (!empty($academic)) {
            try {
                $academic = decrypt($academic);
            }catch(DecryptException $e) {
                return redirect()->back();
            }

            Session::put('book_type', $academic); 
        }
        
       
        $book_language = DB::table('book_language')->whereNull('deleted_at')->where('status',1)->get();
       
        $books = DB::table('books')
            ->where('status',1)
            ->where('approve_status',1)
            ->whereNull('deleted_at');
        if (!empty($academic)) {
            $books->where('book_type',$academic);
        }
        $books = $books->paginate(12);
        $book_type = $academic;
        return view('web.books',compact('books','book_language','book_type'));
    }

    public function bookListCategory($category_id)
    {
        Session::forget('category');
        Session::forget('book_type');
        if (!empty($category_id)) {
            try {
                $category_id = decrypt($category_id);
            }catch(DecryptException $e) {
                return redirect()->back();
            }
            Session::put('category', $category_id); 
        }
        $book_language = DB::table('book_language')->whereNull('deleted_at')->where('status',1)->get();
       
        $books = DB::table('books')
            ->where('status',1)
            ->where('approve_status',1)
            ->whereNull('deleted_at');
        if (!empty($category_id)) {
            $books->where('category_id',$category_id);
        }
        $books = $books->paginate(12);
        return view('web.books',compact('books','book_language','category_id'));
    }

    public function ajaxBookList(Request $request)
    {
        $category = Session::get('category');
        $book_type = Session::get('book_type');
        $language = $request->input('language');
        $book_title = $request->input('book_title');
        $publisher = $request->input('publisher');
        $books = DB::table('books')
        ->where('status',1)
        ->where('approve_status',1)
        ->whereNull('deleted_at')
        ->where(function($q) use ($language,$book_title,$publisher) {
            $count_data = 1;
            if (isset($language) && !empty($language) ) {  
                if ($count_data == '1') {
                    $q->where('language_id',$language);
                    $count_data++;
                } else {
                    $q->orWhere('language_id',$language);
                    $count_data++;
                }
            }  
            if (isset($book_title) && !empty($language) ) {               
                if ($count_data == '1') {
                    $q->where('book_name','like','%'.$book_title.'%');
                    $count_data++;
                } else {
                    $q->orWhere('book_name','like','%'.$book_title.'%');
                    $count_data++;
                }
            }    
            if (isset($publisher) && !empty($publisher) ) {               
                if ($count_data == '1') {
                    $q->where('publisher_name','like','%'.$publisher.'%');
                    $count_data++;
                } else {
                    $q->orWhere('publisher_name','like','%'.$publisher.'%');
                    $count_data++;
                }
            }         
        });
        if (!empty($category)) {
            $books->where('category_id',$category);
        }
        if (!empty($book_type)) {
            $books->where('book_type',$book_type);
        }
        $books = $books->paginate(12);

        return view('web.pagination.book_search',compact('books'));
    }
}
