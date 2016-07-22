<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'phone','role','email', 'password','status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function student()
    {
        return $this->hasMany(Student::class);
    }

    public function academic()
    {
        return $this->hasMany(Academic::class);
    }

    public function work()
    {
        return $this->hasMany(Work::class);
    }

    public function apply()
    {
        return $this->hasMany(Apply::class);
    }

    public function profile()
    {
        return $this->hasMany(Profile::class);
    }

    public function poll()
    {
        return $this->hasMany(Poll::class);
    }

    public function company()
    {
        return $this->hasMany(Company::class);
    }   
    
    public function quality()
    {
        return $this-> hasMany(Quality::class);
    }
    
    public function publication()
    {
        return $this-> hasMany(Publication::class);
    }

    public function notification()
    {
        return $this-> hasMany(Notification::class);
    }

    public function evaluation()
    {
        return $this->hasMany(Evaluation::class);
    }

}
