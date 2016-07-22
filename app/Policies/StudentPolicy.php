<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Student;
class StudentPolicy
{
    use HandlesAuthorization;

    public function owner(User $user, Student $student)
    {
        return $user->id === $student->user_id;
    }
}
