<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pdfgenerator;
use App\Http\Controllers\CVController;
use App\Http\Controllers\experienceController;
use App\Http\Controllers\certificationController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\educationController;


Route::get('/', function () {
    return view('landingPage');
});
Route::get('/download/{id}' , [pdfgenerator::class , 'generatePDF'])->name('pdfdownload');

Route::get('/dashboard', [CVController::class , 'retrieveCVs'])->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/dashboard', [CVController::class , 'retrieveCVs'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/createCV/page/1', function(){return view('createresume');})->middleware(['auth', 'verified'])->name('cvCreate');

Route::post('/createCV/page/1', [CVController::class,'insert'])->middleware(['auth', 'verified'])->name('cvInsert');

Route::post('/createCV/page/2', function(){return view('createresume2');})->middleware(['auth', 'verified'])->name('cvCreate2');

Route::get('/createCV/page/2', function(){return view('createresume2');})->middleware(['auth', 'verified'])->name('cvCreate2');

Route::get('/experienceform', [experienceController::class, 'getview'])->middleware(['auth', 'verified'])->name('experienceForm');

Route::get('/experienceUpdateform/{id}', function() {return view('experienceform2');})->middleware(['auth', 'verified'])->name('experienceUpdateForm');

Route::put('/experienceUpdateform/{id}', [experienceController::class, 'update'])->middleware(['auth', 'verified'])->name('retrieveExperienceUpdate');

Route::get('/educationform', [educationController::class, 'getview'])->middleware(['auth', 'verified'])->name('educationForm');

Route::get('/projectform', [projectController::class, 'getview'])->middleware(['auth', 'verified'])->name('projectForm');

Route::get('/certificationform', [certificationController::class, 'getview'])->middleware(['auth', 'verified'])->name('certificationForm');

Route::post('/result', function(){return dd(request());})->middleware(['auth', 'verified'])->name('result');

Route::post('/experienceform',[experienceController::class, 'insert'] )->middleware(['auth', 'verified'])->name('retrieveExperience');

Route::post('/educationform', [educationController::class, 'insert'])->middleware(['auth', 'verified'])->name('retrieveEducation');

Route::post('/projectform', [projectController::class, 'insert'])->middleware(['auth', 'verified'])->name('retrieveProject');

Route::post('/certificationform', [certificationController::class, 'insert'])->middleware(['auth', 'verified'])->name('retrieveCertification');

Route::get('/previews/{id}' , function($id){return view('preview' , compact('id'));})->middleware(['auth', 'verified'])->name('pdfPreview');

Route::delete('/deleteCV/{id}' , [CVController::class , 'destroy'])->middleware(['auth', 'verified'])->name('DeleteCV');

Route::delete('/deleteExperience/{id}' , [experienceController::class , 'destroy'])->middleware(['auth', 'verified'])->name('DeleteExperience');

Route::delete('/deleteEducation/{id}' , [educationController::class , 'destroy'])->middleware(['auth', 'verified'])->name('DeleteEducation');

Route::delete('/deleteProject/{id}' , [projectController::class , 'destroy'])->middleware(['auth', 'verified'])->name('DeleteProject');

Route::delete('/deleteCertification/{id}' , [certificationController::class , 'destroy'])->middleware(['auth', 'verified'])->name('DeleteCertification');

Route::get('/updateCV/{id}/page/1', [CVController::class , 'gotoUpdate'])->middleware(['auth', 'verified'])->name('cvUpdate');

Route::put('/updateCV/{id}/page/1', [CVController::class , 'update'])->middleware(['auth', 'verified'])->name('cvApplyUpdate');

Route::get('/updateCV/page/2', function(){return view('updateresume2');})->middleware(['auth', 'verified'])->name('cvUpdate2');

Route::put('/updateCV/page/2', [CVController::class , 'update'])->middleware(['auth', 'verified'])->name('cvApplyUpdate2');

//update for education section

Route::put('/updateCV/page/2/{id}/Education',[educationController::class,'update'])->name('ApplyUpdateEducationForm');

Route::get('/updateCV/page/2/{id}/Education',[educationController::class,'gotoUpdate'])->name('UpdateEducationForm');

//update for experience section

Route::put('/updateCV/page/2/{id}/Experience',[experienceController::class,'update'])->name('ApplyUpdateExperienceForm');

Route::get('/updateCV/page/2/{id}/Experience',[experienceController::class,'gotoupdate'])->name('UpdateExperienceForm');

//update for project section

Route::put('/updateCV/page/2/{id}/Project',[projectController::class,'update'])->name('ApplyUpdateProjectForm');

Route::get('/updateCV/page/2/{id}/Project',[projectController::class,'gotoUpdate'])->name('UpdateProjectForm');

//update for certification section

Route::put('/updateCV/page/2/{id}/Certification',[certificationController::class,'update'])->name('ApplyUpdateCertificationForm');

Route::get('/updateCV/page/2/{id}/Certification',[certificationController::class,'gotoUpdate'])->name('UpdateCertificationForm');

// web.php
Route::get('/download/{id}/type1', [pdfgenerator::class, 'generatePDFType1'])->name('type1');
Route::get('/download/{id}/type2', [pdfgenerator::class, 'generatePDFType2'])->name('type2');
Route::get('/download/{id}/type3', [pdfgenerator::class, 'generatePDFType3'])->name('type3');
Route::get('/download/{id}/type4', [pdfgenerator::class, 'generatePDFType4'])->name('type4');
Route::get('/download/{id}/type5', [pdfgenerator::class, 'generatePDFType5'])->name('type5');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
