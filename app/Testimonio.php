<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonio extends Model
{
    protected $table = 'testimonios';

    protected $fillable = ['testimonio'];


    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
