

<section class="checkout-page page-section-ptb">
    <div class="container">
        @if (session()->has('info'))
        <div class="alert alert-success fade in">
            <a aria-label="close" class="close" data-dismiss="alert" href="#">
                ×
            </a>
            <p>
                {{ session('info') }}
                <span class="close pe-7s-close" data-dismiss="alert">
                </span>
            </p>
        </div>
        @else

        @if (count($errors) > 0)
        <div class="alert alert-danger fade in">
            <a aria-label="close" class="close" data-dismiss="alert" href="#">
                ×
            </a>
            @foreach ($errors->all() as $error)
            <li>
                <i class="fa fa-info-circle">
                </i>
                {{ $error }}
            </li>
            @endforeach
        </div>
        @endif
        <form action="{{ route('solicitar.servicio') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-6">
                    <h2 class="mb-20">
                        ORDEN DE SERVICIO
                    </h2>
                        <div class="section-field mb-30">
                            <label class="mb-10">
                                SELECCIONE UN SERVICIO *
                            </label>
                            <div class="box">
                                <select class="wide fancyselect mb-30" name="servicio_id">
                                    <option value="">
                                        Seleccione un Servicio
                                    </option>
                                    @foreach($servicios as $servicio)
                                    <option value="{{ $servicio->id }}">
                                        {{ $servicio->titulo }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </input>
                </div>
                <div class="col-lg-12 col-md-6 col-sm-6">
                    <div class="section-field mb-30">
                        <label class="mb-10">
                            DESCRIBA DETALLADAMENTE LA ORDEN QUE USTED REQUIERE *
                        </label>
                        <textarea class="form-control input-message" name="contenido" rows="7">
                            {{ old('contenido') }}
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="gray-bg pl-50 pr-50 pt-50 pb-50">
                        <input class="button btn-block" href="#" type="submit" value="ENVIAR SOLICITUD DE ORDEN DE SERVICIO">
                        </input>
                    </div>
                </div>
            </div>
        </form>
        @endif
    </div>
</section>
