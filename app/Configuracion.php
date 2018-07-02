<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    protected $table = 'configuraciones';

    protected $fillable = [
    	'nombre_del_sitio',
    	'email_del_sitio',
    	'logo_del_sitio',
    	'favicon_del_sitio',
    	'descripcion_del_sitio',
    	'codigo_css_del_sitio',
    	'codigo_js_del_sitio',
    	'copyright_del_sitio',
    	'facebook_url',
    	'linkedin_url',
    	'twitter_url',
    	'pinterest_url',
    	'google_plus_url'];

}
