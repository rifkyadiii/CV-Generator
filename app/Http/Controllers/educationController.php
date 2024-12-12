<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Certification;

class educationController extends Controller
{
    //
	
	function getview(){
		return view('educationForm');
	}

	function gotoUpdate($id){
		$education = Education::find($id);
		return view('educationForm2' , compact('education'));
	}
	
	function insert(Request $request){
		$education = new Education;
		
		$id = $request->session()->get('cvID')[0];
		$education->cv_id = $request->session()->get('cvID')[0];
        $education->EducationInstitute = $request->EducationInstitute;
        $education->AcademicalDegree = $request->AcademicalDegree;
        $education->DateEnrolled = $request->DateEnrolled;
        $education->DateFinished= $request->DateFinished;
        $education->Major = $request->Major;
		$education->GPA = $request->GPA;
		$education->save();

		$experienceData = Experience::where('cv_id','=',$id)->orderBy('DateEnrolled','desc')->get();
		$educationData = Education::where('cv_id' , '=' , $id)->orderBy('DateEnrolled','desc')->get();
		$projectData = Project::where('cv_id' , '=' , $id)->get();
		$certificationData = Certification::where('cv_id' , '=' , $id)->get();
		$certificationData = Certification::where('cv_id' , '=' , $id)->get();
		return view('updateresume2',compact('experienceData','educationData' , 'projectData' , 'certificationData' ));
	}


	public function update(Request $request,$id){
		
        $education= Education::find($id);
		$cvid = $request->session()->get('cvID')[0];
		
        $education->EducationInstitute = $request->EducationInstitute;
        $education->AcademicalDegree = $request->AcademicalDegree;
        $education->DateEnrolled = $request->DateEnrolled;
        $education->DateFinished= $request->DateFinished;
        $education->Major = $request->Major;
		$education->GPA = $request->GPA;
		$education->save();
	
		$experienceData = Experience::where('cv_id','=',$cvid)->orderBy('DateEnrolled','desc')->get();
		$educationData = Education::where('cv_id' , '=' , $cvid)->orderBy('DateEnrolled','desc')->get();
		$projectData = Project::where('cv_id' , '=' , $cvid)->get();
		$certificationData = Certification::where('cv_id' , '=' , $cvid)->get();
        return view('updateresume2',compact('experienceData','educationData' , 'projectData' , 'certificationData' ));
    }
	

    public function destroy(Request $request,$id){
		$CVid = $request->session()->get('cvID')[0];
        $education= Education::find($id);
        $education->delete();

		$experienceData = Experience::where('cv_id','=',$CVid)->orderBy('DateEnrolled','desc')->get();
		$educationData = Education::where('cv_id' , '=' , $CVid)->orderBy('DateEnrolled','desc')->get();
		$projectData = Project::where('cv_id' , '=' , $CVid)->get();
		$certificationData = Certification::where('cv_id' , '=' , $CVid)->get();
		return view('updateresume2',compact('experienceData','educationData' , 'projectData' , 'certificationData' ));
    }
}