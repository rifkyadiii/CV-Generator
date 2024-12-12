<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class CV extends Model
{
    
	use HasFactory;
	protected $table = 'CV';
	protected $primaryKey = 'cv_id';

	protected $fillable = [
		'cv_id',
        'Firstname',
        'Lastname',
        'Birthdate',
        'Description',
        'photo',
		'PhoneNumber',
		'WorkEmail',
		'Address',
		'Title'
    ];

	
	public function user(){
		return $this->belongsTo(User::class);
	}
	
	public function education(){
		return $this->HasMany(Education::class, 'cv_id', 'cv_id');
	}
	
	public function experience(){
		return $this->HasMany(Experience::class , 'cv_id', 'cv_id');
	}
	
	public function project(){
		return $this->HasMany(Project::class, 'cv_id', 'cv_id');
	}
	
	public function certification(){
		return $this->HasMany(Certification::class, 'cv_id', 'cv_id');
	}
	

}
