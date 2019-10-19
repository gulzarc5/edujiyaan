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
    		->whereNull('deleted_at')
    		->get();
    	$sub_category = DB::table('book_sub_category')
    		->whereNull('deleted_at')
            ->get();
        $language = DB::table('book_language')
            ->where('status',1)
    		->whereNull('deleted_at')
    		->get();

    	return view('admin.books.add_book_form',compact('category','sub_category','language'));
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
            'image' => 'required|mimes:jpg,jpeg,png,bmp,tiff |max:4096',
        ]);

        $image_name = null;
        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $destination = base_path().'/public/images/book_image/';
            $image_extension = $image->getClientOriginalExtension();
            $image_name = md5(date('now').time())."-".$request->input('name')."."."$image_extension";
            $original_path = $destination.$image_name;
            Image::make($image)->save($original_path);
            $thumb_path = base_path().'/public/images/book_image/thumb/'.$image_name;
            Image::make($image)
            ->resize(300, 400)
            ->save($thumb_path);
        }


        $book_insert = DB::table('books')
            ->insert([
                'user_id' => 'A',
                'category_id' => $request->input('category'),
                'sub_category_id' => $request->input('sub_category'),
                'language_id' => $request->input('language'),
                'book_name' => $request->input('book_name'),
                'author_name' => $request->input('author_name'),
                'publisher_name' => $request->input('publisher_name'),
                'published_year' => $request->input('published_year'),
                'isbn' => $request->input('isbn'),
                'mrp' => $request->input('mrp'),
                'price' => $request->input('price'),
                'book_condition' => $request->input('book_condition'),
                'book_type' => $request->input('book_type'),
                'stock' => $request->input('stock'),
                'book_type' => $request->input('book_type'),
                'book_image' => $image_name,
                'description' => $request->input('description'),
                'created_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]);
        if ($book_insert) {
            return redirect()->back()->with('message','Book Added Successfully');
        }else{
             return redirect()->back()->with('error','Something Went Wrong Please Try Again');
        }
    }

    public function bookList()
    {
        return view('admin.books.book_list');
    }

    public function ajaxBookList()
    {
        $query = DB::table('books')
        ->whereNull('deleted_at')
        ->orderBy('id','desc');
       
            return datatables()->of($query->get())
            ->addIndexColumn()
            ->addColumn('action', function($row){
                   $btn = '
                   <a href="'.route('admin.book_detail_view',['book_id'=>encrypt($row->id)]).'" class="btn btn-info btn-sm" target="_blank">View</a>
                   <a href="'.route('admin.edit_book_form',['book_id'=>encrypt($row->id)]).'" class="btn btn-warning btn-sm">Edit</a>                 
                   ';
                   if ($row->status == '1') {
                       $btn .= '<a href="'.route('admin.book_status_update',['book_id'=>encrypt($row->id),'status' => encrypt(2)]).'" class="btn btn-danger btn-sm">Disable</a>';
                        return $btn;
                    }else{
                       $btn .= '<a href="'.route('admin.book_status_update',['book_id'=>encrypt($row->id),'status' => encrypt(1)]).'" class="btn btn-success btn-sm">Enable</a>';
                        return $btn;
                    }
                    return $btn;
            })
            ->addColumn('status_tab', function($row){
                if ($row->status == '1') {
                    $btn = '<a href="#" class="btn btn-success btn-sm">Enable</a>';
                 }else{
                    $btn = '<a href="#" class="btn btn-danger btn-sm">Disable</a>';
                 }
                 return $btn;
            })
            ->rawColumns(['action','status_tab'])
            ->make(true);
    }

    public function editBookForm($book_id)
    {
        try {
            $book_id = decrypt($book_id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $category = DB::table('book_category')
    		->whereNull('deleted_at')
    		->get();
    	$sub_category = DB::table('book_sub_category')
    		->whereNull('deleted_at')
            ->get();
        $language = DB::table('book_language')
            ->where('status',1)
    		->whereNull('deleted_at')
            ->get();
        $book = DB::table('books')->where('id',$book_id)->first();

        return view('admin.books.edit_book',compact('category','sub_category','language','book'));
    }

    public function bookStatusUpdate($book_id,$status)
    {
        try {
            $book_id = decrypt($book_id);
            $status = decrypt($status);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $book_status = DB::table('books')
            ->where('id',$book_id)
            ->update([
                'status' => $status,
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]);
        if ($book_status) {
            return redirect()->back()->with('message','Book Status Updated Successfully');
        } else {
            return redirect()->back()->with('error','Something Went Wrong Please Try Again');
        }
        
    }

    public function bookDetailView($book_id)
    {
        try {
            $book_id = decrypt($book_id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $book = DB::table('books')
            ->select('books.*')
            ->get();
        return view('admin.books.book_details',compact('book'));
    }
}
