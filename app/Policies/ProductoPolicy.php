<?php

namespace App\Policies;

use App\Models\Producto;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProductoPolicy
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
    public function view(User $user, Producto $producto): bool
    {
        return $user->type_user == 'administrador' or $user->type_user == 'vendedor' or $user->type_user == 'cliente';
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->type_user == 'administrador' or $user->type_user == 'vendedor';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Producto $producto): bool
    {
        return ($user->type_user == 'administrador' or $user->type_user == 'vendedor') and ($producto->name !='Producto Default');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Producto $producto): bool
    {
        return ($user->type_user == 'administrador' or $user->type_user == 'vendedor') and ($producto->name !='Producto Default');
    }

    public function log(User $user): bool
    {
        return $user->type_user == 'administrador';
    }

}
