<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    protected $fillable = [
        'name_posgrado', 'school_posgrado', 'period_posgrado', 'name_university', 'school_university', 'period_university', 'name_preparotory', 'school_preparatory', 'period_preparatory',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    
}
