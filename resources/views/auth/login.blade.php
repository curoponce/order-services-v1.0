@extends('frontend.layouts.frontend')

@section('frontend')


<section class="white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title text-center">
                    <h2 class="title-effect">
                        Iniciar Sesión
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="pb-50 clearfix">
                        <div class="section-field mb-20">
                            <label class="mb-10" for="email">
                                Email*
                            </label>
                            <input class="web form-control" name="email" placeholder="email" type="text" value="{{ old('email') }}">
                            </input>
                        </div>
                        <div class="section-field mb-20">
                            <label class="mb-10" for="Password">
                                Password*
                            </label>
                            <input class="Password form-control" name="password" placeholder="Password" type="password">
                            </input>
                        </div>
                        <div class="section-field">
                            <div class="remember-checkbox mb-30">
                                <input class="form-control" id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">
                                   Recordar Contraseña
                                </label>
                            </div>
                        </div>
                        <input class="button" type="submit" value="Ingresar">
                            <p class="mt-20 mb-0">
                                No tienes cuenta?
                                <a href="{{ route('register') }}">
                                    Registrate Aquí
                                </a>
                            </p>
                        </input>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</section>
@endsection
