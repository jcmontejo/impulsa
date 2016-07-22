<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Student' => 'App\Policies\StudentPolicy',
        'App\Company'=> 'App\Policies\CompanyPolicy',
        'App\Publication' => 'App\Policies\PublicationPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        /*$gate->define('read-student', function($user, $student){
            return $user->id === $student->user_id;
        });*/
        $gate->define('read-academic', function($user, $academic){
            return $user->id === $academic->user_id;
        });

        $gate->define('read-work', function($user, $work){
            return $user->id === $work->user_id;
        });

        $gate->define('read-quality',function($user, $quality){
            return $user->id == $quality->user_id;
        });
    }
}
