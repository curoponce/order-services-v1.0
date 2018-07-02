<?php
use App\Configuracion;
use App\Seccion;
 

 
if (! function_exists('obtenerConfiguracion')) {

    function obtenerConfiguracion($key)
    {   
        //dd($key);
    	 
        $configuraciones = Configuracion::findOrFail('1'); 

        return $configuraciones->$key;
    }
}

if (! function_exists('obtenerConfiguracion_seccion')) {

    function obtenerConfiguracion_seccion($key)
    {
    	//dd($key);
        $secciones = Seccion::findOrFail('1'); 

        return $secciones->$key;
    }
}

if (! function_exists('activeMenu')) {

    function activeMenu($url)
    {

        return request()->is($url) ? 'active' : '';
    }
}


