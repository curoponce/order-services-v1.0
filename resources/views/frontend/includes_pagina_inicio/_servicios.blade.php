<section class="page-section-ptb position-re ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title text-center">
                    <h6>
                        
                    </h6>
                    <h2 class="title-effect">
                        {!! obtenerConfiguracion_seccion('seccion_titulo_servicios') !!}
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($servicios as $servicio)
            <div class="col-lg-4 col-md-4 col-sm-4 xs-mb-30">
                <div class="feature-box">
                    <div class="feature-box-content">
                        <h4>
                            {{ $servicio->titulo }}
                        </h4>
                        <p align="justify">
                            {{ str_limit($servicio->descripcion, $limit = 130, $end = '...')  }}
                        </p>
                    </div>
                    <a href="{{ route('servicio.detalle', $servicio->id) }}">
                        Ver Más
                    </a>
                    <div class="feature-box-img" style="background-image: url('{{ asset('images/servicios/'.$servicio->imagen) }}');">
                    </div>
                    <span class="border">
                    </span>
                </div>
                <br>
                </br>
            </div>
            @endforeach
            <div class="col-lg-4 col-md-4 col-sm-4 xs-mb-30">
                <div class="feature-box">
                    <div class="feature-box-content">
                        <div class="text-center">
                            <p style="font-size: 89px;">
                                {{ $servicios_count }}
                            </p>
                            <a class="button black x-small" href="{{ route('pagina.servicios') }}">
                                Ver todos los servicios
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Info Box -->

{{-- <div class="container">
    <div class="row ">

        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
            <div class="heading align-center">
                <h4 class="heading-title h1">{!! obtenerConfiguracion_seccion('seccion_titulo_servicios') !!}</h4>
                <div class="heading-line">
                    <span class="short-line"></span>
                    <span class="long-line"></span>
                </div>
                
            </div>
        </div>

    </div>

    <div class="row mb30">
        @foreach($servicios as $servicio)
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="info-box--modern">
                <div class="info-box-image">
                    <img src="{{ asset('images/servicios/'.$servicio->imagen) }}" alt="image" width="75" height="100">
                </div>
                <div class="info-box-content">
                    <h5 class="info-box-title">{{ $servicio->titulo  }}</h5>
                    <p class="text">{{ str_limit($servicio->descripcion, $limit = 130, $end = '...')  }}
                    </p>

                    <a href="#" class="read-more">Read More
                        <i class="seoicon-right-arrow"></i>
                    </a>
                </div>
            </div>
            <br>
        </div>
        @endforeach
    </div>


    <div class="row pb120">
        <div class="col-lg-3 col-lg-offset-3 col-md-4 col-md-offset-2 col-sm-6 col-xs-12">
            <a href="22_contacts.html" class="btn btn-medium btn--blue btn-hover-shadow mb30">
                <span class="text">Free SEO Consultation</span>
                <span class="semicircle"></span>
            </a>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a href="22_contacts.html" class="btn btn-medium btn--yellow btn-hover-shadow">
                <span class="text">Request a Free Quote</span>
                <span class="semicircle"></span>
            </a>
        </div>
    </div>

</div> --}}

<!-- End Info Box -->