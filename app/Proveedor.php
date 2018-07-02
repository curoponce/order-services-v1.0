<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';

    protected $fillable = ['nombre', 'imagen','url'];

    public function pathAttachment()
    {
        return '/images/proveedores/'. $this->imagen;
    }
}
