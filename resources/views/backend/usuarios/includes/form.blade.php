{!! csrf_field() !!}
<h4 class="form-section">
    <i class="ft-user">
    </i>
    Datos Personales
</h4>
<div class="row">
    <div class="col-md-7">
        <div class="form-group row">
            <div class="col-6">
                <label for="mega-firstname">
                    Nombres*
                </label>
                <input class="form-control" id="mega-firstname" name="nombre" placeholder="ingrese su nombre.." type="text" value="{{ $usuario->nombre or old('nombre') }}">
                </input>
            </div>
            <div class="col-6">
                <label for="mega-lastname">
                    Apellidos*
                </label>
                <input class="form-control" id="mega-lastname" name="apellidos" placeholder="ingrese sus apellidos.." type="text" value="{{ $usuario->apellidos or old('apellidos') }}">
                </input>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group row">
            <div class="col-12">
                <label for="mega-lastname">
                    Telefono
                </label>
                <input class="form-control" id="mega-username" name="telefono" placeholder="ingrese su numero de telefono.." type="text" value="{{ $usuario->telefono or old('telefono') }}">
                </input>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group row">
            <div class="col-6">
                <label for="mega-firstname">
                    Email*
                </label>
                <input class="form-control " id="mega-firstname" name="email" placeholder="ingrese su email.." type="text" value="{{ $usuario->email or old('email') }}">
                </input>
            </div>
            <div class="col-6">
                <label for="mega-lastname">
                    Direccion
                </label>
                <input class="form-control" id="mega-lastname" name="direccion" placeholder="ingrese su direccion.." type="text" value="{{ $usuario->direccion or old('direccion') }}">
                </input>
            </div>
        </div>
    </div>
</div>

@unless($usuario->id)
<div class="row">
    <div class="col-md-12">
        <div class="form-group row">
            <div class="col-6">
                <label for="mega-firstname">
                    Contraseña*
                </label>
                <input class="form-control " id="mega-firstname" name="password" placeholder="ingrese su contraseña" type="password">
                </input>
            </div>
            <div class="col-6">
                <label for="mega-lastname">
                    Confirmar Contraseña*
                </label>
                <input class="form-control " id="mega-lastname" name="password_confirmation" placeholder="confirmar contraseña.." type="password" >
                </input>
            </div>
        </div>
    </div>
</div>
@endunless


<div class="row">
    <div class="col-md-12">
        <div class="form-group row">
            <div class="col-12">
                <label for="mega-firstname">
                    Roles*:
                </label>
                @foreach($roles as $id => $name)
                <fieldset class="checkboxsas">
                <label>
                    <input
                    name="roles[]" 
                    type="checkbox" 
                    value="{{ $id }}" 
                    {{ $usuario->roles->pluck('id')->contains($id) ? 'checked' : '' }}
                    >
                    {{ $name }}
                </label>
            </fieldset>
                @endforeach
            </div>
        </div>
    </div>
</div>

