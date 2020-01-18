<?php

namespace App\Policies;

use App\User;
use App\Coment;
use Illuminate\Auth\Access\HandlesAuthorization;

class ComentPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Coment $coment)
    {
        return $coment->user_id === $user->id || $user->id == 1;
    }
}
