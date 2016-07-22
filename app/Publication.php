<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [
		'job','vacancies','studies','sex','job_type','days','age','requirements','company','status_civil','travel','relocation','experience','job_position','skills','functions','state','city','salary','curricular',
	];
		
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
