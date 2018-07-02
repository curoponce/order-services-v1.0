@extends('frontend.layouts.frontend')
@section('frontend')


<section class="white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title text-center">
                    <h2 class="title-effect">
                       Registrarse
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

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
                
                <form action="{{ route('register') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="pb-50 clearfix">
                        <div class="row">
                            <div class="section-field mb-20 col-sm-6">
                                <label class="mb-10" for="name">
                                    Nombres*
                                </label>
                                <input class="web form-control" id="name" name="nombre" placeholder="Ingrese su Nombre" type="text" value="{{ old('nombre') }}">
                                </input>
                            </div>
                            <div class="section-field mb-20 col-sm-6">
                                <label class="mb-10" for="name">
                                    Apellidos*
                                </label>
                                <input class="web form-control" id="name" name="apellidos" placeholder="Ingrese sus apellidos" type="text" value="{{ old('apellidos') }}">
                                </input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="section-field mb-20 col-sm-6">
                                <label class="mb-10" for="name">
                                    Telefono*
                                </label>
                                <input class="web form-control" id="name" name="telefono" placeholder="Telefono" type="number" value="{{ old('telefono') }}">
                                </input>
                            </div>
                            <div class="section-field mb-20 col-sm-6">
                                <label class="mb-10" for="name">
                                    Direccion*
                                </label>
                                <input class="web form-control" id="name" name="direccion" placeholder="Direccion" type="text" value="{{ old('direccion') }}">
                                </input>
                            </div>
                        </div>
                        <div class="section-field mb-20">
                            <label class="mb-10" for="name">
                                Email*
                            </label>
                            <input class="form-control" name="email" placeholder="Email*" type="email" value="{{ old('email') }}">
                            </input>
                        </div>
                        <div class="section-field mb-20">
                            <label class="mb-10" for="Password">
                                Contraseña*
                            </label>
                            <input class="Password form-control" id="Password" name="password" placeholder="ingrese una contraseña" type="password">
                            </input>
                        </div>
                        <div class="section-field mb-20">
                            <label class="mb-10" for="Password">
                                Repita la Contraseña*
                            </label>
                            <input class="Password form-control" id="Password" name="password_confirmation" placeholder="Repita su contraseña ingresada" type="password">
                            </input>
                        </div>
                        <input class="button" type="submit" value="Registrarse">
                            <p class="mt-20 mb-0">
                                ya tienes una cuenta?
                                <a href="{{ route('login') }}">
                                    Inicia sesión 
                                </a>
                            </p>
                        </input>
                    </div>
                </form>
                <hr/>
                
            </div>
        </div>
    </div>
</section>
@endsection
