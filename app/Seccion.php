<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    protected $table = 'secciones';

    protected $fillable = [
    	'seccion_nombre_servicios',
    	'seccion_titulo_servicios',
    	'seccion_servicio_descripcion',
    	'seccion_nombre_nosotros',
    	'seccion_titulo_nosotros',
    	'seccion_nosotros_descripcion',
    	'section_nosotros_imagen',
    	'seccion_nombre_proyectos',
    	'seccion_titulo_proyectos'];

}
