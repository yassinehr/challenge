<?php

namespace App\Policies;

use App\Challenge;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChallengePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any challenges.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the challenge.
     *
     * @param  \App\User  $user
     * @param  \App\Challenge  $challenge
     * @return mixed
     */
    public function view(User $user, Challenge $challenge)
    {
        //
        return in_array($user->authority, [
            '1','0','2'
        ]);
    }

    /**
     * Determine whether the user can create challenges.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //

        return in_array($user->authority, [
            '1','0'
        ]);
    }

    /**
     * Determine whether the user can update the challenge.
     *
     * @param  \App\User  $user
     * @param  \App\Challenge  $challenge
     * @return mixed
     */
    public function update(User $user)
    {
        //
        return in_array($user->authority, [
            '1','0'
        ]);
    }

    /**
     * Determine whether the user can delete the challenge.
     *
     * @param  \App\User  $user
     * @param  \App\Challenge  $challenge
     * @return mixed
     */
    public function delete(User $user)
    {
        //
        return in_array($user->authority, [
            '1','0'
        ]);
    }

    /**
     * Determine whether the user can restore the challenge.
     *
     * @param  \App\User  $user
     * @param  \App\Challenge  $challenge
     * @return mixed
     */
    public function restore(User $user, Challenge $challenge)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the challenge.
     *
     * @param  \App\User  $user
     * @param  \App\Challenge  $challenge
     * @return mixed
     */
    public function forceDelete(User $user, Challenge $challenge)
    {
        //
    }
}
