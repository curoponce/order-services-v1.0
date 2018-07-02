<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Orden;
use App\User;

class DashboardController extends Controller
{	

	
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {	
    	$users = \App\User::all();
        $clienteCount = 0;
        $trabajadorCount = 0;
        $administradorCount = 0;

        foreach ($users as $user) {
            if ($user->isClient()){
                ++$clienteCount;
            }

            elseif ($user->isEmployee()){
                ++$trabajadorCount;
            }

            else ++$administradorCount;
        }

        $ordenes = Orden::all();
        $ordenEspera = 0;
        $ordenProceso = 0;
        $ordenFinalizado = 0;

        foreach ($ordenes as $orden) {
            if ($orden->estado_id == 1){
                ++$ordenEspera;
            }

            elseif ($orden->estado_id == 2){
                ++$ordenProceso;
            }

            else ++$ordenFinalizado;
        }

        $servicios = \App\Servicio::all();

        $usuarios = User::all();

        $ordenesRecientes = Orden::where('estado_id', '1')->get();

        $ordenesTotal = Orden::all();

        $ultimasOrdenesTabla = Orden::orderBy('id', 'DESC')->take(5)->get();

        $usuariosRecientes = User::orderBy('id', 'DESC')->take(10)->get();

        return view('backend.paginas.dashboard', compact('clienteCount', 'trabajadorCount', 'administradorCount', 'ordenEspera', 'ordenProceso', 'ordenFinalizado', 'servicios', 'usuarios', 'ordenesRecientes', 'ordenesTotal', 'ultimasOrdenesTabla', 'usuariosRecientes')); 
    }
}
