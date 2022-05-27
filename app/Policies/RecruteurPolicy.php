<?php

namespace App\Policies;

use App\Models\Recruteur;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RecruteurPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Recruteur $recruteur)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Recruteur $recruteur)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Recruteur $recruteur)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Recruteur $recruteur)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Recruteur $recruteur)
    {
        //
    }
}
