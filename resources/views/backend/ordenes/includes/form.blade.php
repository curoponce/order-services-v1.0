

{!! csrf_field() !!}


<div class="row">
    <div class="col-md-12">
        <div class="form-group row">
            <div class="col-12">

                <label>Servicio</label>
                <select class="form-control" name="servicio_id">
                    @foreach($servicios as $ser)
                    @if($ser ->id == $orden->servicio->id)
                         <option value="{{ $ser ->id }}" selected>{{ $ser ->titulo}}</option>
                        @else
                          <option value="{{$ser->id}}" >{{$ser->titulo}}</option>
                    @endif
                 @endforeach
                </select>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group row">
            <div class="col-12">
                <fieldset class="form-group">
                    <label for="descTextarea">
                        Descripción
                    </label>

                    <textarea class="form-control" id="descTextarea" name="contenido" rows="3" placeholder="Textarea with description">
                        {{ $orden->contenido or old('contenido') }}
                    </textarea>
                </fieldset>
            </div>
        </div>
    </div>
</div>
