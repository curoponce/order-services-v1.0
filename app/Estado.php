<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['nombre','descripcion'];

    public function ordenes()
    {
        return $this->hasMany(Orden::class);
    }
}
