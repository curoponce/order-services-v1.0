<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['nombre', 'display_name'];

    public function usuarios()
    {
    	return $this->hasMany(User::class);
    }
}
