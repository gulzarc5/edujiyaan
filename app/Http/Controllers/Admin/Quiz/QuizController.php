<?php

namespace App\Http\Controllers\Admin\Quiz;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use DataTables;
use Intervention\Image\Facades\Image;
use File;
use Carbon\Carbon;

class QuizController extends Controller
{
    public function addQuizForm()
    {
    	$category = DB::table('quiz_category')
    		->whereNull('deleted_at')
    		->get();

    	return view('admin.quiz.add_quiz_form',compact('category'));
	}
	
	public function addQuiz(Request $request)
    {
    	$validatedData = $request->validate([
			'name' => 'required',
            'category' => 'required',
            'file' => 'required|file|mimes:pdf,doc,docx',
        ]);

        $file_name = null;
        if($request->hasfile('file'))
        {
        	$file = $request->file('file');
    		$file_name = date('d-m-Y').time().'-'.$request->input('project_name').'.'.$file->getClientOriginalExtension();
    		$file->storeAs('files/quiz', $file_name);
        }

        $quiz_insert = DB::table('quiz')
            ->insert([
                'user_id' => 'A',
                'category_id' => $request->input('category'),
                'name' => $request->input('name'),
                'pages' => $request->input('pages'),
                'file_name' => $file_name,
                'description' => $request->input('description'),
                'created_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]);
        if ($quiz_insert) {
            return redirect()->back()->with('message','Quiz Added Successfully');
        }else{
             return redirect()->back()->with('error','Something Went Wrong Please Try Again');
        }
    }

    public function quizList()
    {
        return view('admin.quiz.quiz_list');
    }

    public function ajaxQuizList()
    {
        $query = DB::table('quiz')	
        ->select('quiz.*', 'quiz_category.name as cat_name')
        ->leftJoin('quiz_category', 'quiz.category_id', '=', 'quiz_category.id')
        ->whereNull('quiz.deleted_at')
        ->orderBy('quiz.id','desc');
       
            return datatables()->of($query->get())
            ->addIndexColumn()
            ->addColumn('action', function($row){
                   $btn = '
                   <a href="'.route('admin.quiz_detail_view',['quiz_id'=>encrypt($row->id)]).'" class="btn btn-info btn-sm" target="_blank">View</a>
                   <a href="'.route('admin.edit_project_form',['book_id'=>encrypt($row->id)]).'" class="btn btn-warning btn-sm">Edit</a>                 
                   ';
                   if ($row->status == '1') {
                       $btn .= '<a href="'.route('admin.project_status_update',['project_id'=>encrypt($row->id),'status' => encrypt(2)]).'" class="btn btn-danger btn-sm">Disable</a>';
                        return $btn;
                    }else{
                       $btn .= '<a href="'.route('admin.project_status_update',['project_id'=>encrypt($row->id),'status' => encrypt(1)]).'" class="btn btn-success btn-sm">Enable</a>';
                        return $btn;
                    }
                    return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function quizDetailView($quiz_id)
    {
        try {
            $quiz_id = decrypt($quiz_id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $quiz = DB::table('quiz')->where('quiz.id', $quiz_id)      
            ->select('quiz.*','quiz_category.name as cat_name')     
            ->leftjoin('quiz_category','quiz_category.id','=','quiz.category_id')
            ->first();
        $seller = null;
        if (!empty($quiz->user_id) && $quiz->user_id != "A") {
            $seller = DB::table('users')->where('id',$quiz->user_id)->first();
        }
        return view('admin.quiz.quiz_details',compact('quiz', 'seller'));
    }
}
