<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = [
        'question1', 'question2', 'question3', 'question4', 'question5', 'question6',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
