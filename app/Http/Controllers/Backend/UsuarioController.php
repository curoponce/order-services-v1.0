<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Http\Requests\FormUsuario;


class UsuarioController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('roles:admin', ['except' => ['edit', 'update', 'show']]);
        //$this->middleware('roles');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $usuarios = User::with('roles')->get();

        return view('backend.usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('display_name', 'id');

        return view('backend.usuarios.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\FormCrearUsuarioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormUsuario $request)
    {
        $usuario = User::create($request->all());

        $usuario->password = bcrypt($request->password);

        $usuario->save();

        $usuario->roles()->attach($request->roles);

        return redirect()->route('usuarios.index')->with('message', ['success', ("se ha registrado un nuevo usuario")]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = User::findOrFail($id);

        return view('backend.usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $usuario = User::findOrFail($id);

        $this->authorize('edit',$usuario);

        $roles   = Role::pluck('display_name', 'id');


        return view('backend.usuarios.edit', compact('usuario', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormUsuario $request, $id)
    {   

        //dd($request->toArray());
        $usuario = User::findOrFail($id);

        $this->authorize('update',$usuario);

        $usuario->update($request->only('nombre', 'apellidos', 'telefono', 'direccion', 'email'));

        $usuario->roles()->sync($request->roles);

        return back()->with('message', ['info', ("se ha actualizado al usuario correctamente")]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);

        $this->authorize('destroy',$usuario);

        $usuario->roles()->detach();

        $usuario->delete();

        return back()->with('message', ['warning', ("se ha eliminado al usuario")]);
    }
}
