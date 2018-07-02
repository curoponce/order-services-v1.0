<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mensaje;

class MensajeController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensajes = Mensaje::with('user')
            ->orderBy('created_at', 'DESC')
            ->where('user_id', auth()->user()->id)
            ->get();

        return view('backend.mensajes.index', compact('mensajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.mensajes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (auth()->check()) {
            $mensaje = new Mensaje;
            $mensaje -> user_id = auth()->user()->id;
            $mensaje -> nombre = auth()->user()->nombre;
            $mensaje -> apellidos = auth()->user()->apellidos;
            $mensaje -> email = auth()->user()->email;
            $mensaje -> contenido = $request -> get('contenido');
            $mensaje->save();

            return redirect()->route('mensajes.index')->with('message', ['success', ("se ha enviado su mensaje correctamente.")]);
        }


        else

        $mensaje = Mensaje::create($request->all());

        if (auth()->check())
        {
            auth()->user()->mensajes()->save($mensaje);

        }
        return view('backend.mensajes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mensaje = Mensaje::findOrFail($id);

        return view('backend.mensajes.edit', compact('mensaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Mensaje::findOrFail($id)->update($request->all());

        return back()->with('message', ['info', ("se ha actualizado su mensaje correctamente.")]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mensaje = Mensaje::findOrFail($id);

        $mensaje->delete();

        return back()->with('message', ['warning', ("se ha eliminado su mensaje correctamente.")]);
    }
}
