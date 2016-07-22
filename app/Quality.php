<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quality extends Model
{
    protected $fillable =[
		'question1','question2','question3','question4','question5','question6','question7'
		,'question8',
	];
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
