<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Academic;
class AcademicPolicy
{
    use HandlesAuthorization;

    public function ownerAcademic(User $user, Academic $academic)
    {
        return $user->id === $academic->user_id;
    }
}
