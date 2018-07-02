@extends('frontend.layouts.frontend')

@section('frontend')

<div class="container-fluid">
    <div class="row">
        <div class="content-page-404">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <h4 class="title">404</h4>
                        <div class="subtitle">Lo sentimos! Esta página esta obsoleta ;(</div>
                        {{-- <p class="text">The Link You Folowed Probably Broken, or the page has been removed.</p> --}}
                        <a href="{{ route('pagina.inicio') }}" class="btn btn-small btn--primary btn-hover-shadow">
                            <span class="text">Retornar a la página principal</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection