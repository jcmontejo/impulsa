<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'company','address', 'phone', 'city', 'turn', 'position', 'name_boss', 'area', 'period', 'description',
    ];
    
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
