<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Publication;

class PublicationPolicy
{
    use HandlesAuthorization;

    public function owner(User $user, Publication $publication)
    {
        return $user->id== $publication->user_id;
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
