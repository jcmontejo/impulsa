<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable =[
		'tradename', 'business_name','rfc','turn','manager','contact','position','location','phone','cell','email','web','business_address','street','colony','city','postal','telephone','country','state',
	];

    public function user()
    {
    	return $this-> belongsTo(User::class);
    }
    public function publication()
    {
    	return $this-> hasMany(Publication::class);
    }
    public function notification()
    {
    	return $this-> hasMany(Notification::class);
    }
}
