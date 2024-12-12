<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Certification extends Model
{
    //
    use HasFactory;
	protected $table = 'certifications';
	protected $primaryKey = 'certification_id';
	public $timestamps = false;
	    protected $fillable = [
		'certification_id',
        'CertificationTitle',
        'IssuedBy',
        'SkillSets',
        'cv_id'
    ];



		public function cv(){
		return $this->belongsTo(CV::class , 'cv_id');
	}
}
