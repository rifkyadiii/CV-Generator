<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Certification;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Project;

class certificationController extends Controller
{
    //

	function getview(){
		return view('certificationForm');
	}


	function gotoUpdate($id){
		$certification = Certification::find($id);
		return view('certificationForm2' , compact('certification'));
	}


	function update(Request $request,$id){
		$cvid = $request->session()->get('cvID')[0];
		$certification= Certification::find($id);
			
        $certification->CertificationTitle = $request->CertificationTitle;
        $certification->IssuedBy = $request->IssuedBy;
        $certification->SkillSets = $request->SkillSets;
		
		$certification->save();

		$experienceData = Experience::where('cv_id','=',$cvid)->orderBy('DateEnrolled','desc')->get();
		$educationData = Education::where('cv_id' , '=' , $cvid)->orderBy('DateEnrolled','desc')->get();
		$projectData = Project::where('cv_id' , '=' , $cvid)->get();
		$certificationData = Certification::where('cv_id' , '=' , $cvid)->get();
		return view('updateresume2',compact('experienceData','educationData' , 'projectData' , 'certificationData' ));
	
	
	}
	

	
	function insert(Request $request){
		$certification = new Certification;
		$id = $request->session()->get('cvID')[0];
		$certification->cv_id = $request->session()->get('cvID')[0];
        $certification->CertificationTitle = $request->CertificationTitle;
        $certification->IssuedBy = $request->IssuedBy;
        $certification->SkillSets = $request->SkillSets;

       
		$certification->save();
		$experienceData = Experience::where('cv_id','=',$id)->orderBy('DateEnrolled','desc')->get();
		$educationData = Education::where('cv_id' , '=' , $id)->orderBy('DateEnrolled','desc')->get();
		$projectData = Project::where('cv_id' , '=' , $id)->get();
		$certificationData = Certification::where('cv_id' , '=' , $id)->get();
		$certificationData = Certification::where('cv_id' , '=' , $id)->get();
		return view('updateresume2',compact('experienceData','educationData' , 'projectData' , 'certificationData' ));	}

    public function destroy(Request $request,$id){
		$CVid = $request->session()->get('cvID')[0];
        $certification= Certification::find($id);
        $certification->delete();

		$experienceData = Experience::where('cv_id','=',$CVid)->orderBy('DateEnrolled','desc')->get();
		$educationData = Education::where('cv_id' , '=' , $CVid)->orderBy('DateEnrolled','desc')->get();
		$projectData = Project::where('cv_id' , '=' , $CVid)->get();
		$certificationData = Certification::where('cv_id' , '=' , $CVid)->get();
		return view('updateresume2',compact('experienceData','educationData' , 'projectData' , 'certificationData' ));
    }


}
