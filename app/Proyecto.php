<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';

    protected $fillable = ['titulo', 'servicio_id', 'descripcion','imagen'];

    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }

    public function pathAttachment()
    {
        return '/images/proyectos/'. $this->imagen;
    }

}
