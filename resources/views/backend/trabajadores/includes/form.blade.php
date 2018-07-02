
{!! csrf_field() !!}

<div class="row">
    <div class="col-md-7">
        <div class="form-group row">
            <div class="col-6">
                <label for="mega-firstname">
                    Nombres*
                </label>
                <input class="form-control " id="mega-firstname" name="nombre" placeholder="ingrese su nombre.." type="text" value="{{ $trabajador->user->nombre or old('nombre') }}">
                </input>
            </div>
            <div class="col-6">
                <label for="mega-lastname">
                    Apellidos*
                </label>
                <input class="form-control " id="mega-lastname" name="apellidos" placeholder="ingrese sus apellidos.." type="text" value="{{ $trabajador->user->apellidos or old('apellidos') }}">
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
                <input class="form-control " id="mega-username" name="telefono" placeholder="ingrese su numero de telefono.." type="text" value="{{ $trabajador->user->telefono or old('telefono') }}">
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
                    Email
                </label>
                <input class="form-control " id="mega-firstname" name="email" placeholder="ingrese su email.." type="text" value="{{ $trabajador->user->email or old('email') }}">
                </input>
            </div>
            <div class="col-6">
                <label for="mega-lastname">
                    Direccion
                </label>
                <input class="form-control " id="mega-lastname" name="direccion" placeholder="ingrese su direccion.." type="text" value="{{ $trabajador->user->direccion or old('direccion') }}">
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
                    Dni*
                </label>
                <input class="form-control " id="mega-firstname" name="dni" placeholder="ingrese su dni.." type="text" value="{{ $trabajador->dni or old('dni') }}">
                </input>
            </div>
            <div class="col-6">
                <label for="mega-lastname">
                    Sueldo
                </label>
                <input class="form-control " id="mega-lastname" name="sueldo" placeholder="ingrese su sueldo.." type="number" value="{{ $trabajador->sueldo or old('sueldo') }}">
                </input>
            </div>
        </div>
    </div>
</div>