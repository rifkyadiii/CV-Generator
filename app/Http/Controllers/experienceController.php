<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Project;
use App\Models\Certification;

class experienceController extends Controller
{
    //
	
	function getview(){
		return view('experienceForm');
	}
	
	function gotoUpdate($id){
		$experience = Experience::find($id);
		return view('experienceForm2' , compact('experience'));
	}
	
	
	function insert(Request $request){
		$experience = new Experience;
		$id = $request->session()->get('cvID')[0];
		$experience->cv_id = $id;
        $experience->JobRole = $request->JobRole;
        $experience->company = $request->company;
        $experience->DateEnrolled = $request->DateEnrolled;
        $experience->DateFinished= $request->DateFinished;
        $experience->description = $request->description;
       
		$experience->save();
		
		$experienceData = Experience::where('cv_id','=',$id)->orderBy('DateEnrolled','desc')->get();
		$educationData = Education::where('cv_id' , '=' , $id)->orderBy('DateEnrolled','desc')->get();
		$projectData = Project::where('cv_id' , '=' , $id)->get();
		$certificationData = Certification::where('cv_id' , '=' , $id)->get();
		return view('updateresume2',compact('experienceData','educationData' , 'projectData' , 'certificationData' ));

	}
	

	
	function update(Request $request,$id){
		$cvid = $request->session()->get('cvID')[0];
		$experience= Experience::find($id);
			
	    $experience->JobRole = $request->JobRole;
        $experience->company = $request->company;
        $experience->DateEnrolled = $request->DateEnrolled;
        $experience->DateFinished= $request->DateFinished;
        $experience->description = $request->description;
		
		$experience->save();

		$experienceData = Experience::where('cv_id','=',$cvid)->orderBy('DateEnrolled','desc')->get();
		$educationData = Education::where('cv_id' , '=' , $cvid)->orderBy('DateEnrolled','desc')->get();
		$projectData = Project::where('cv_id' , '=' , $cvid)->get();
		$certificationData = Certification::where('cv_id' , '=' , $cvid)->get();
		return view('updateresume2',compact('experienceData','educationData' , 'projectData' , 'certificationData' ));
	
	
	}
	
		
    public function destroy(Request $request , $id){

		$CVid = $request->session()->get('cvID')[0];
        $experience= Experience::find($id);
        $experience->delete();

		$experienceData = Experience::where('cv_id','=',$CVid)->orderBy('DateEnrolled','desc')->get();
		$educationData = Education::where('cv_id' , '=' , $CVid)->orderBy('DateEnrolled','desc')->get();
		$projectData = Project::where('cv_id' , '=' , $CVid)->get();
		$certificationData = Certification::where('cv_id' , '=' , $CVid)->get();
		
		return view('updateresume2',compact('experienceData','educationData' , 'projectData' , 'certificationData' ));
    }
}
