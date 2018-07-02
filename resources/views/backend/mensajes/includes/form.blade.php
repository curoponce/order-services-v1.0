{!! csrf_field() !!}

@if($mostrarCampos)
<div class="row">
    <div class="col-md-12">
        <div class="form-group row">
            <div class="col-4">
                <label for="mega-firstname">
                    Nombres
                </label>
                <input class="form-control form-control-lg" id="mega-firstname" name="nombre" placeholder="ingrese su nombre.." type="text" value="{{ $mensaje->nombre or old('nombre')}}">
                </input>
            </div>
            <div class="col-4">
                <label for="mega-lastname">
                    Apellidos
                </label>
                <input class="form-control form-control-lg" id="mega-lastname" name="apellidos" placeholder="ingrese sus apellidos.." type="text" value="{{ $mensaje->apellidos or old('apellidos') }}">
                </input>
            </div>
            <div class="col-4">
                <label for="mega-firstname">
                    Email
                </label>
                <input class="form-control form-control-lg" id="mega-firstname" name="email" placeholder="ingrese su email.." type="text" value="{{ $mensaje->email or old('email')}}">
                </input>
            </div>
        </div>
    </div>
</div>
@endif

<div class="row">
    <div class="col-md-12">
        <div class="form-group row">
            <div class="col-12">
                <label for="mega-firstname">
                    Contenido
                </label>
                <textarea class="form-control" id="example-textarea-input" name="contenido" placeholder="Content.." rows="6">
                    {{ $mensaje->contenido or old('contenido') }}
                </textarea>
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-12">
        <input type="submit" class="btn btn-success" value="{{ $btnText or 'Guardar' }}">
    </div>
</div>