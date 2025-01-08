<?php

namespace App\Policies;

use App\Models\User;
use App\Models\posts1;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;

    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, posts1 $posts1): bool
    {
        return false;
        // return $user->is_admin;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // return false;
        // return $user->is_admin;
        // return $user->is_admin;
        return $user->role_id ==1 || $user->role_id==2;

    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, posts1 $posts1): bool
    {
        // return false;
        // return $user->is_admin;
        return $user->role_id ==1 || $user->role_id==2;


    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, posts1 $posts1): bool
    {
        // return false;
        // return $user->is_admin;
        return $user->role_id ==1 || $user->role_id==2;


    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, posts1 $posts1): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, posts1 $posts1): bool
    {
        return false;
    }

    public function trash(user $user,posts1 $posts1)
    {
        return $user->is_admin;

    }
}
