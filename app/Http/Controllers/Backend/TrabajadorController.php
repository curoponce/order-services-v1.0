<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Trabajador;

use App\Http\Requests\FormTrabajador;

use App\User;

use Illuminate\Support\Facades\Validator;

class TrabajadorController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {	
    	$trabajadores = Trabajador::paginate(15);



    	return view('backend.trabajadores.index', compact('trabajadores'));
    }

    public function create()
    {
    	return view('backend.trabajadores.create');
    }

    public function store(FormTrabajador $request)
    {
    	$request->all();

        
        $user = User::create([
            'nombre'	=> $request->get('nombre'),
            'apellidos' => $request->get('apellidos'),
            'password'  => bcrypt( $request->get('dni') ),
            'telefono'     => $request->get('telefono'),
            'email'     => $request->get('email'),
            'direccion' => $request->get('direccion')
        ]);

        $id = User::all()->max('id');

        $trabajador = Trabajador::create([
            'user_id' => $id,
            'dni'        => $request->get('dni'),
            'sueldo'     => $request->get('sueldo')
        ]);

        $user->roles()->attach('2');
        $user->save();
        $trabajador->save();

        return redirect()->route('trabajadores.index')->with('success', "El trabajador con Email: ".$user->email." y CLAVE: ".$trabajador->dni." ha sido registrado correctamente.");

    }

    public function edit($id)
    {

        $trabajador = Trabajador::findOrFail($id);


        return view('backend.trabajadores.edit', compact('trabajador'));
    }

    public function update(FormTrabajador $request, $id)
    {
        Trabajador::findOrFail($id)->update($request->all());

        $trabajador = Trabajador::findOrFail($id);

        $user = User::findOrFail($trabajador->user_id)->update($request->all());


        return back()->with('info', 'se ha actualizado sus datos correctamente');
    }

    public function destroy($id)
    {
        $usuario_identificado = Trabajador::where('id', $id)->first();

        //dd($usuario_identificado->id);

        $destroy_usuario = User::find($usuario_identificado->user_id);

        $destroy_usuario->roles()->detach();

        $destroy_usuario->delete();

        /*$destroy_trabajador = Trabajadores::find($usuario_identificado->id);


        $destroy_trabajador->delete();*/

        return back()->with('destroy', 'se ha eliminado al trabajador');
    }
}
