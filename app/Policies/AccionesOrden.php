<?php

namespace App\Policies;

use App\User;

use App\Orden;


use Illuminate\Auth\Access\HandlesAuthorization;

class AccionesOrden
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function before($user, $ability)
    {
        if ($user->isEmployee()) {
            
            return true;

        }
    }

    public function edit(User $authUser, Orden $orden)
    {
        return $authUser->trabajador->id === $orden->trabajador_id;
    }

    public function update(User $authUser, Orden $orden)
    {
        return $authUser->trabajador->id === $orden->trabajador_id;
    }

    public function destroy(User $authUser, Orden $orden)
    {
        return $authUser->trabajador->id === $orden->trabajador_id;
    }
}
