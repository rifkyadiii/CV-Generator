<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Project extends Model
{
    //
	use HasFactory;
	protected $table = 'projects';
	protected $primaryKey = 'project_id';
	public $timestamps = false;

	protected $fillable = [
		'project_id',
        'ProjectTitle',
        'ToolsForProjects',
        'Projectdescription',
        'cv_id'
    ];



		public function cv(){
		return $this->belongsTo(CV::class , 'cv_id');
	}
}
