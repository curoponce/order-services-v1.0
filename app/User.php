<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellidos', 'telefono', 'direccion', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*public function setPasswordAttribute($password )
    {
        $this->attributes['password'] = bcrypt($password);
    }*/

    public function isAdmin()
    {
        return $this->hasRoles(['admin']);
    }

    public function isClient()
    {
        return $this->hasRoles(['cliente']);
    }

    public function isEmployee()
    {
        return $this->hasRoles(['trabajador']);
    }

    public function trabajador()
    {
        return $this->hasOne(Trabajador::class);
    }
    
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'roles_asignados');
    }

    public function hasRoles(array $roles)
    {
        foreach ($roles as $role) 
        {

            foreach ($this->roles as $userRole) 
            {
                # code...
                if ($userRole->nombre === $role) 
                {

                    return true;

                }
            }  
        }

        return false;
    }
    
    public function testimonios()
    {
        $this->hasMany(Testimonio::class);
    }

    public function ordenes()
    {
        return $this->hasMany(Orden::class);
    }

    public function mensajes()
    {
        return $this->hasMany(Mensaje::class);
    }
}
