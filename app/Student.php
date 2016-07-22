<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'last_name','birthdate', 'place', 'sex', 'email', 'civil_status', 'phone', 'address', 'post_code', 'country', 'state', 'city', 'travel', 'relocation','licence', 'car', 'title', 'description', 
    ]; 

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    

}
