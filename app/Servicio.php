<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicios';

    protected $fillable = ['titulo', 'descripcion','imagen'];

    public function ordenes()
    {
    	return $this->hasMany(Orden::class);
    }

    public function proyectos()
    {
    	return $this->hasMany(Proyecto::class);
    }

    public function pathAttachment()
    {
        return '/images/servicios/'. $this->imagen;
    }
}
