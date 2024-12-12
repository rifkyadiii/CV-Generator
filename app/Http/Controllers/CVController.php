<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CV;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Project;
use App\Models\Certification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class CVController extends Controller
{
    //

	function retrieveCVdata($id){
		$userData = CV::where('cv_id' , '=', $id)->first();
		$experienceData = Experience::where('cv_id','=',$id)->orderBy('DateEnrolled','desc')->get();
		$educationData = Education::where('cv_id' , '=' , $id)->orderBy('DateEnrolled','desc')->get();
		$projectData = Project::where('cv_id' , '=' , $id)->get();
		$certificationData = Certification::where('cv_id' , '=' , $id)->get();

		return view('templates\test1' , compact('userData'  , 'experienceData','educationData' , 'projectData' , 'certificationData' ));
	}

	function retrieveCVs(){
		$id  = auth()->id();
		$cvDatas   = Cv::where('user_id', '=', $id)->get();
		session()->pull('cvID');
		return view('myresumes' , compact('cvDatas'));

	}

	function insert(Request $request){
		$cv = new CV;
        $cv->Firstname = $request->Firstname;
		$cv->user_id = Auth()->id();
		$cv->Lastname = $request->Lastname;
        $cv->Birthdate = $request->Birthdate;
        $cv->Description = $request->Description;
		$cv->photo = $request->photo;
		$cv->PhoneNumber = $request->PhoneNumber;
		$cv->WorkEmail = $request->WorkEmail;
		$cv->Title = $request->Title;
		$cv->Address= $request->Address;
		if($request->file('Photo') != null){
        $path = $request->file('Photo')->store('uploads', 'public');
        $cv->photo = $path;
		}



		$cv->save();
		$id = $cv->cv_id;
		$experienceData = Experience::where('cv_id','=',$id)->orderBy('DateEnrolled','desc')->get();
		$educationData = Education::where('cv_id' , '=' , $id)->orderBy('DateEnrolled','desc')->get();
		$projectData = Project::where('cv_id' , '=' , $id)->get();
		$certificationData = Certification::where('cv_id' , '=' , $id)->get();
		session()->push('cvID',$cv->cv_id);
		return view('updateresume2', [
			'experienceData' => $experienceData,
			'educationData' => $educationData,
			'projectData' => $projectData,
			'certificationData' => $certificationData,
		]);
	}

    public function destroy($id){
        $cv = CV::find($id);
        $cv->delete();

        return Redirect::route('dashboard');
    }

	function gotoUpdate($id){
		$cv= CV::find($id);

		return view('updateresume' , compact('cv'));
	}

	public function update(Request $request,$id){

        $cv= CV::find($id);


          $cv->Firstname = $request->Firstname;
          $cv->user_id =   Auth()->id();
          $cv->Lastname = $request->Lastname;
          $cv->Birthdate = $request->Birthdate;
		  $cv->Description = $request->Description;
		  $cv->Photo = $request->Photo;
		  $cv->PhoneNumber = $request->PhoneNumber;
		  $cv->WorkEmail = $request->WorkEmail;
		  $cv->Title = $request->Title;
		  $cv->Address= $request->Address;


      if($request->file('Photo') != null){
        Storage::disk('public')->delete($cv->Photo);
        $path = $request->file('Photo')->store('uploads','public');
        $cv->Photo = $path;
      }


        $cv->save();
		$experienceData = Experience::where('cv_id','=',$id)->orderBy('DateEnrolled','desc')->get();
		$educationData = Education::where('cv_id' , '=' , $id)->orderBy('DateEnrolled','desc')->get();
		$projectData = Project::where('cv_id' , '=' , $id)->get();
		$certificationData = Certification::where('cv_id' , '=' , $id)->get();
		session()->push('cvID' , $id);
        return view('updateresume2',compact('experienceData','educationData' , 'projectData' , 'certificationData' ));
    }

	public function index()
    {
        // Render the main page with dropdown options
        return view('preview', [
            'templates' => [
                'template1' => 'Template 1',
                'template2' => 'Template 2',
                'template3' => 'Template 3',
            ]
        ]);
    }

    public function loadTemplate(Request $request)
    {
        // Get the selected template
        $template = $request->input('template');
        $images = [
            'template1' => asset('images/template1.png'),
            'template2' => asset('images/template2.png'),
            'template3' => asset('images/template3.png'),
        ];

        return response()->json([
            'image' => $images[$template] ?? null,
        ]);
    }
}
