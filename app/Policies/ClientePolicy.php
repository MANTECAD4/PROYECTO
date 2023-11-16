<?php

namespace App\Policies;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ClientePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->type_user == 'administrador' or $user->type_user == 'vendedor';
    } 

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Cliente $cliente): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(?User $user): bool
    {
        if (auth()->check()) {
            return false;
        }
        else
        {
            return true;
        }
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Cliente $cliente): bool
    {
        return $user->id === $cliente->user_id and $user->type_user == 'cliente' and $cliente->user->email != 'cliente@gmail.com';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Cliente $cliente): bool
    {
        return $user->id === $cliente->user_id and $user->type_user == 'cliente' and $cliente->user->email != 'cliente@gmail.com';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user): bool
    {
        return $user->type_user == 'administrador';
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Cliente $cliente): bool
    {
        //
    }
}
