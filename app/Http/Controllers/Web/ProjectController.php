<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use Session;

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
}
