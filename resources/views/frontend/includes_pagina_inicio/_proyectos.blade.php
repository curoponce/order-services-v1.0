<section class="our-blog gray-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title text-center">
                    <h6>
                    </h6>
                    <h2 class="title-effect">
                        {!! obtenerConfiguracion_seccion('seccion_titulo_proyectos') !!}
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($proyectos as $proyecto)
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="blog-box blog-2">
                    <img alt="" class="img-responsive full-width" src="{{ asset('/images/servicios/'. $proyecto->imagen) }}" style="height: 250px;">
                        <div class="blog-info">
                            <span class="post-category">
                                <a href="#">
                                    {{ $proyecto->servicio->titulo }}
                                </a>
                            </span>
                            <h4>
                                <a href="#">
                                    {{ $proyecto->titulo }}
                                </a>
                            </h4>
                            <p class="justify">
                                {{ str_limit($proyecto->descripcion, $limit = 30, $end = '...')  }}
                            </p>
                            <span>
                                <i class="fa fa-clock-o">
                                </i>
                                {{ $proyecto->created_at->diffForHumans() }}
                            </span>
                            <a class="button icon-color" href="#">
                                Read More
                                <i class="fa fa-angle-right">
                                </i>
                            </a>
                        </div>
                    </img>
                </div>
                <br>
            </div>
            @endforeach
        </div>
        <div class="text-center">
          <a class="button border gray large" href="{{ route('pagina.proyectos') }}"> Ver Todos los Proyectos</a>
        </div>
    </div>
</section>
<!-- Post-slider -->

<!-- Recent-case -->


<!-- End Recent-case -->

<!-- End Post-slider -->