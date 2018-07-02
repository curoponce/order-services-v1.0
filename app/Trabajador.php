<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table = 'trabajadores';

    protected $fillable = [
    	'user_id',
	    'dni',
	    'sueldo', 
	    'designacion',
	    'imagen',
	    'facebook_url',
	    'twitter_url',
	    'linkedin_url',
	    'gplus_url'];

	public function ordenes()
	{
		return $this->hasMany(Orden::class);
	}

	public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pathAttachment()
    {
        return '/images/trabajadores/'. $this->imagen;
    }

}
