<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable =[
		'professional','carrer','date',
	];
    public function user()
    {
    	return $this->belongsTo(User::user);
    }
}
