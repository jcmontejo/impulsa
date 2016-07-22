<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
	protected $fillable= [
		 'date','name','last_name','carrer','institution','age','sex','status','address','birthdate','experience','phone','email','testing','zavic','htp','autobiografia','terman','cleaver','machover','diez','kostick','tat','veinte',
	];

    public function user()
    {
    	return $this-> belongsTo(User::class);
    }
}
