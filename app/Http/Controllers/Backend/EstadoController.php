<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Orden;
use Carbon\Carbon;

class EstadoController extends Controller
{	
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function iniciar($id)
    {   

        $orden = Orden::findOrFail($id);

        $orden -> trabajador_id = auth()->user()->trabajador->id;

        $orden -> estado_id = 2;
        $mytime = Carbon::now('America/Lima');
        $orden -> fecha_inicio = $mytime -> toDateTimeString();
        $orden -> update();
        
        return back()->with('message', ['info', ("se ha iniciado la orden de servicio correctamente ahora se encuentra en proceso.")]);
    }

    public function finalizar($id)
    {   

        $orden = Orden::findOrFail($id);

        if ($orden->trabajador_id == auth()->user()->trabajador->id) 
        {
            $orden -> estado_id = 3; 
            //$orden -> fecha_fin = Carbon::now('America/Lima');
            $mytime = Carbon::now('America/Lima');
            $orden -> fecha_fin = $mytime -> toDateTimeString(); 
            $orden -> update();
            return back()->with('message', ['success', ("se ha finalizado la orden de servicio con exito.")]);
        }

        return redirect()->route('dashboard');

    }
}
