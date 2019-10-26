<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Crypt;
use File;
use Response;
use Auth;

class ProjectController extends Controller
{
    public function projectList()
    {   
         Session::forget('project_category');     
        $project = DB::table('projects')
                        ->select('projects.*', 'project_spalization.name as ps_name')
        				->leftJoin('project_spalization', 'projects.specialization_id', '=', 'project_spalization.id')
        				->whereNull('projects.deleted_at')
                        ->where('projects.status',1)
                        ->where('projects.approval_status',1)
        				->paginate(3);
        $specialization = DB::table('project_spalization')
                                ->get();
        return view('web.project',compact('project', 'specialization'));
    }

    public function projectListCategory($category_id)
    {
        Session::forget('project_category');
        if (!empty($category_id)) {
            try {
                $category_id = decrypt($category_id);
            }catch(DecryptException $e) {
                return redirect()->back();
            }
            Session::put('project_category', $category_id); 
        }
        $project = DB::table('projects')
                        ->select('projects.*', 'project_spalization.name as ps_name')
                        ->leftJoin('project_spalization', 'projects.specialization_id', '=', 'project_spalization.id')
                        ->whereNull('projects.deleted_at')
                        ->where('projects.approval_status',1)
                        ->where('projects.status',1);
        $specialization = DB::table('project_spalization')
                                ->get();

        if (!empty($category_id)) {
            $project->where('specialization_id',$category_id);
        }
        $project = $project->paginate(3);
        return view('web.project',compact('project', 'specialization'));
    }

    public function ajaxProjectList(Request $request)
    {
        $category = Session::get('project_category');
        $project_search_value = $request->input('project_search_value');
       
        // DB::connection()->enableQueryLog();
        $project = DB::table('projects')
        ->select('projects.*', 'project_spalization.name as ps_name')
        ->leftJoin('project_spalization', 'projects.specialization_id', '=', 'project_spalization.id')
        ->where('projects.status',1)
        ->where('projects.approval_status',1)
        ->whereNull('projects.deleted_at')
        ->where(function($q) use ($project_search_value) {
            if (isset($project_search_value) && !empty($project_search_value) ) {  
                $q->where('projects.name','like', $project_search_value.'%');
            }         
        });
        if (!empty($category)) {
            $project->where('projects.specialization_id',$category);
        }
        $project = $project->paginate(3);
        // dd(str_replace_array('?', \DB::getQueryLog()[0]['bindings'], 
        // \DB::getQueryLog()[0]['query']));
        return view('web.pagination.project_search',compact('project'));
    }

    public function projectDetail($project_id) {

        try {
            $project_id = decrypt($project_id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $project = DB::table('projects')
                        ->leftJoin('project_spalization', 'projects.specialization_id', '=', 'project_spalization.id')
                        ->select('projects.*', 'project_spalization.name as ps_name')
                        ->where('projects.id', $project_id)
                        ->get();

        $purchase_status = 1;
        if (Auth::check()) {
            if (Auth::guard('buyer')->check()) {
                if($project){
                    $order_check_count = DB::table('project_orders')
                                        ->where('user_id', Auth::guard('buyer')->user()->id)
                                        ->where('payment_status', 1)
                                        ->count();
                
                    if(!empty($order_check_count))                    
                        $purchase_status = 2;
                }
            }
        }
        
        return view('web.project-detail', ['project' =>$project, 'purchase_status' => $purchase_status]);
    }

    public function previewFileDownload($project_id) {
        try {
            $project_id = decrypt($project_id);
        }catch(DecryptException $e) {
            abort(404);
        }

        $project_file = DB::table('projects')->select('preview')->where('id', $project_id)->first();    
        $path = storage_path('app\files\projects\preview\\'.$project_file->preview);
        if (!File::exists($path)){
            $response = 404;
            return $response;
        } 
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }

    public function synopsisFileDownload($project_id) {
        try {
            $project_id = decrypt($project_id);
        }catch(DecryptException $e) {
            abort(404);
        }

        $project_file = DB::table('projects')->select('preview')->where('id', $project_id)->first();    
        $path = storage_path('app\files\projects\synopsis\\'.$project_file->synopsis);
        if (!File::exists($path)){
            $response = 404;
            return $response;
        } 
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }

    public function documentationFileDownload($project_id) {
        try {
            $project_id = decrypt($project_id);
        }catch(DecryptException $e) {
            abort(404);
        }

        $project_file = DB::table('projects')->select('documentation')->where('id', $project_id)->first();    
        $path = storage_path('app\files\projects\documentation\\'.$project_file->documentation);
        if (!File::exists($path)){
            $response = 404;
            return $response;
        } 
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }

    public function pptFileDownload($project_id) {
        try {
            $project_id = decrypt($project_id);
        }catch(DecryptException $e) {
            abort(404);
        }

        $project_file = DB::table('projects')->select('ppt')->where('id', $project_id)->first();    
        $path = storage_path('app\files\projects\ppt\\'.$project_file->ppt);
        if (!File::exists($path)){
            $response = 404;
            return $response;
        } 
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }
}
