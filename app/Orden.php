<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orden extends Model
{	
    use SoftDeletes;
    
	protected $table = 'ordenes';

    protected $fillable = [ 'user_id', 'trabajador_id', 'fecha_inicio', 'fecha_fin', 'servicio_id', 'contenido', 'estado_id'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function servicio()
    {
    	return $this->belongsTo(Servicio::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function trabajador()
    {
        return $this->belongsTo(Trabajador::class);
    }

}
