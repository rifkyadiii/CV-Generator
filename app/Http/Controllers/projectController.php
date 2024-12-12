<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Certification;
use App\Models\Project;

class projectController extends Controller
{
    //
	function getview(){
		return view('projectForm');
	}
	
	function gotoUpdate($id){
		$project =Project::find($id);
		return view('projectForm2' , compact('project'));
	}

	function update(Request $request,$id){
		$cvid = $request->session()->get('cvID')[0];
		
		
		
		$project= Project::find($id);
		
		
		
        //$project->ProjectTitle = $request->ProjectTitle;
       // $project->ToolsForProjects = $request->ToolsForProjects;
       // $project->Projectdescription = $request->Projectdescription;
		$project->update([
			"ProjectTitle" =>  $request->ProjectTitle,
      "ToolsForProjects"=> $request->ToolsForProjects,
       "Projectdescription" => $request->Projectdescription,
		]);

		$experienceData = Experience::where('cv_id','=',$cvid)->orderBy('DateEnrolled','desc')->get();
		$educationData = Education::where('cv_id' , '=' , $cvid)->orderBy('DateEnrolled','desc')->get();
		$projectData = Project::where('cv_id' , '=' , $cvid)->get();
		$certificationData = Certification::where('cv_id' , '=' , $cvid)->get();
		return view('updateresume2',compact('experienceData','educationData' , 'projectData' , 'certificationData' ));
	
	
	}
	
	
	function insert(Request $request){
		$project = new Project;
		$id = $request->session()->get('cvID')[0];
		$project->cv_id = $request->session()->get('cvID')[0];
        $project->ProjectTitle = $request->ProjectTitle;
        $project->ToolsForProjects = $request->ToolsForProjects;
        $project->Projectdescription = $request->Projectdescription;
       
		$project->save();
		$experienceData = Experience::where('cv_id','=',$id)->orderBy('DateEnrolled','desc')->get();
		$educationData = Education::where('cv_id' , '=' , $id)->orderBy('DateEnrolled','desc')->get();
		$projectData = Project::where('cv_id' , '=' , $id)->get();
		$certificationData = Certification::where('cv_id' , '=' , $id)->get();
		$certificationData = Certification::where('cv_id' , '=' , $id)->get();
		return view('updateresume2',compact('experienceData','educationData' , 'projectData' , 'certificationData' ));	}

    public function destroy(Request $request,$id){
		$CVid = $request->session()->get('cvID')[0];
        $project= Project::find($id);
        $project->delete();

		$experienceData = Experience::where('cv_id','=',$CVid)->orderBy('DateEnrolled','desc')->get();
		$educationData = Education::where('cv_id' , '=' , $CVid)->orderBy('DateEnrolled','desc')->get();
		$projectData = Project::where('cv_id' , '=' , $CVid)->get();
		$certificationData = Certification::where('cv_id' , '=' , $CVid)->get();
		return view('updateresume2',compact('experienceData','educationData' , 'projectData' , 'certificationData' ));
    }
}
