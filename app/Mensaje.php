<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{	
	protected $table = 'mensajes';

    protected $fillable = ['user_id', 'nombre', 'apellidos', 'email', 'contenido'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
