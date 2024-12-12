<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Education extends Model
{
    //
	use HasFactory;
	protected $table = 'educations';
	protected $primaryKey = 'education_id';
	public $timestamps = false;
	    protected $fillable = [
		'education_id',
        'EducationInstitute',
        'AcademicalDegree',
        'DateEnrolled',
        'DateFinished',
        'Major',
		'GPA',
        'cv_id'
    ];


		public function cv(){
		return $this->belongsTo(CV::class , 'cv_id');
	}
}
