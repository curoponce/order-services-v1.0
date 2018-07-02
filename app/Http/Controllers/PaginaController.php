<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\FormOrden;

use App\Servicio;
use App\Proyecto;
use App\Trabajador;
use App\Testimonio;
use App\Proveedor;
use App\Orden;
use App\Mensaje;
use Mail;

class PaginaController extends Controller
{   
    
    public function inicio()
    {   

        $servicios=Servicio::orderBy('id')->take(5)->get();

        $servicios_count=Servicio::all('id')->count();

        $proyectos=Proyecto::orderBy('id')->take(6)->get();  

        $trabajadores=Trabajador::orderBy('id')->take(4)->get();

        /*$trabajador = Trabajadores::where('id', 4)->pluck('id')->first();

        $ordenes = Orden::where('trabajador_id', $trabajador)
               ->orderBy('id', 'DESC')->get();
        dd($ordenes);*/

        $testimonios=Testimonio::orderBy('id')->get();

        $proveedores = Proveedor::orderBy('id')->get();

        
    	return view('frontend.index', compact('sliders', 'servicios', 'proyectos', 'trabajadores', 'testimonios', 'proveedores', 'servicios_count'));
    }

    public function servicios()
    {   
        $servicios = Servicio::orderBy('created_at', 'DESC')->get();
    	return view('frontend.paginas.servicios', compact( 'servicios'));
    }

    public function formSolicitarServicio()
    {
        $servicios = Servicio::orderBy('titulo', 'ASC')->get();
        return view('frontend.paginas.orden', compact('servicios'));
    }

    public function solicitarServicio(FormOrden $request)
    {   
        $orden = new Orden;
        $orden -> user_id = auth()->user()->id;
        $orden -> servicio_id = $request -> get('servicio_id');
        $orden -> contenido = $request -> get('contenido');
        $orden -> estado_id = 1;
        $orden->save();

        return back()->with('info', 'se ha enviado su solicitud correctamente. Se le respondera lo mas pronto posible.');
    }

    public function nosotros()
    {   
        $testimonios = Testimonio::all();
        $trabajadores=Trabajador::orderBy('id')->take(4)->get();
    	return view('frontend.paginas.nosotros', compact('trabajadores', 'testimonios'));
    }

    public function proyectos()
    {   
        $servicios = Servicio::all();
        $proyectos = Proyecto::orderBy('created_at', 'DESC')->get();
    	return view('frontend.paginas.proyectos', compact( 'proyectos', 'servicios'));
    }

    public function contacto()
    {   
    	return view('frontend.paginas.contactanos');
    }


    public function enviarMensaje(Request $request)
    {   
        /*$mensaje = Mensaje::create($request->all());

        if (auth()->check())
        {
            auth()->user()->mensajes()->save($mensaje);
        }*/

        
        if (auth()->check()) {
            $mensaje = new Mensaje;
            $mensaje -> user_id = auth()->user()->id;
            $mensaje -> nombre = auth()->user()->nombre;
            $mensaje -> apellidos = auth()->user()->apellidos;
            $mensaje -> email = auth()->user()->email;
            $mensaje -> contenido = $request -> get('contenido');
            $mensaje->save();
            
            Mail::send('emails.contact', ['msg' => $mensaje], function($m) use ($mensaje)
            {

                $m->to($mensaje->email, $mensaje->nombre)->subject('Tu mensaje fue recibido');

            });

            return back()->with('success', 'Se ha enviado su mensaje correctamente');
        }


        else

        $mensaje = Mensaje::create($request->all());

        if (auth()->check())
        {
            auth()->user()->mensajes()->save($mensaje);

        }

        Mail::send('emails.contact', ['msg' => $mensaje], function($m) use ($mensaje)
        {

            $m->to($mensaje->email, $mensaje->nombre)->subject('Tu mensaje fue recibido');

        });

        return back()->with('success', 'Se ha enviado su mensaje correctamente');
    }

}
