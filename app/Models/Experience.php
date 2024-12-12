<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Experience extends Model
{
    //
	use HasFactory;
	protected $table = 'experiences';
	protected $primaryKey = 'experience_id';
	public $timestamps = false;
	    protected $fillable = [
		'experience_id',
		'cv_id',
        'JobRole',
        'company',
        'DateEnrolled',
        'DateFinished',
        'description'
    ];
	public function cv(){
		return $this->belongsTo(CV::class , 'cv_id');
	}
}
