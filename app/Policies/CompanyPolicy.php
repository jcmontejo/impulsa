<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Company;

class CompanyPolicy
{
    use HandlesAuthorization;

    public function owner(User $user, Company $company){
        return $user->id == $company->user_id;
    }

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
