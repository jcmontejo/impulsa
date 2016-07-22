<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
	protected $fillable = [
        'publication_id', 'position', 'company',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
