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
}
