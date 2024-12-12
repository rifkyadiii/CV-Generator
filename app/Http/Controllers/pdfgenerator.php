<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;
use App\Models\CV;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Project;
use App\Models\Certification;

class pdfgenerator extends Controller
{
    function generatePDFType1($id){
		$userData = CV::findOrfail($id);
		$experienceData = Experience::where('cv_id','=',$id)->get();
		$educationData = Education::where('cv_id' , '=' , $id)->get();
		$projectData = Project::where('cv_id' , '=' , $id)->get();
		$certificationData = Certification::where('cv_id' , '=' , $id)->get();
		return Pdf::view('templates\test',
		['userData'=> $userData ,
		'experienceData'=> $experienceData ,
		'educationData'=> $educationData ,
		'projectData'=> $projectData,
		'certificationData'=> $certificationData ])->format('A4')->margins(10,10,30,20)->save('gyatt.pdf');
	}


    function generatePDFType2($id){
		$userData = CV::findOrfail($id);
		$experienceData = Experience::where('cv_id','=',$id)->get();
		$educationData = Education::where('cv_id' , '=' , $id)->get();
		$projectData = Project::where('cv_id' , '=' , $id)->get();
		$certificationData = Certification::where('cv_id' , '=' , $id)->get();
		return Pdf::view('templates\test1',
		['userData'=> $userData ,
		'experienceData'=> $experienceData ,
		'educationData'=> $educationData ,
		'projectData'=> $projectData,
		'certificationData'=> $certificationData ])->format('A4')->margins(10,10,10,10)->save('gyatt.pdf');
	}

    function generatePDFType3($id){
		$userData = CV::findOrfail($id);
		$experienceData = Experience::where('cv_id','=',$id)->get();
		$educationData = Education::where('cv_id' , '=' , $id)->get();
		$projectData = Project::where('cv_id' , '=' , $id)->get();
		$certificationData = Certification::where('cv_id' , '=' , $id)->get();
		return Pdf::view('templates\test2',
		['userData'=> $userData ,
		'experienceData'=> $experienceData ,
		'educationData'=> $educationData ,
		'projectData'=> $projectData,
		'certificationData'=> $certificationData ])->format('A4')->margins(10,10,10,10)->save('gyatt.pdf');
	}

    function generatePDFType4($id){
		$userData = CV::findOrfail($id);
		$experienceData = Experience::where('cv_id','=',$id)->get();
		$educationData = Education::where('cv_id' , '=' , $id)->get();
		$projectData = Project::where('cv_id' , '=' , $id)->get();
		$certificationData = Certification::where('cv_id' , '=' , $id)->get();
		return Pdf::view('templates\test3',
		['userData'=> $userData ,
		'experienceData'=> $experienceData ,
		'educationData'=> $educationData ,
		'projectData'=> $projectData,
		'certificationData'=> $certificationData ])->format('A4')->margins(10,10,30,10)->save('gyatt.pdf');
	}

    function generatePDFType5($id){
		$userData = CV::findOrfail($id);
		$experienceData = Experience::where('cv_id','=',$id)->get();
		$educationData = Education::where('cv_id' , '=' , $id)->get();
		$projectData = Project::where('cv_id' , '=' , $id)->get();
		$certificationData = Certification::where('cv_id' , '=' , $id)->get();
		return Pdf::view('templates\test4',
		['userData'=> $userData ,
		'experienceData'=> $experienceData ,
		'educationData'=> $educationData ,
		'projectData'=> $projectData,
		'certificationData'=> $certificationData ])->format('A4')->margins(10,10,10,10)->save('gyatt.pdf');
	}
}
