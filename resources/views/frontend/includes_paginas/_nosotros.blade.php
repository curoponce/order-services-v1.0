

<section class="page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-md-push-6">
                <div>
                    <img class="img-responsive" src="{{ asset('images/about/'. obtenerConfiguracion_seccion('section_nosotros_imagen')) }}">
                    </img>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-md-pull-6 sm-mt-30">
                <div class="section-title mb-20">
                    <h2>
                        {!!obtenerConfiguracion_seccion('seccion_titulo_nosotros')!!}
                    </h2>
                </div>
                <p>
                    {!!obtenerConfiguracion_seccion('seccion_nosotros_descripcion')!!}
                </p>
                <div class="col-lg-12 col-md-12">
                    <div class="tab tab-border">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#mision">
                                    Mision
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#vision">
                                    Visión
                                </a>
                            </li>
                            <li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="mision">
                                <p>
                                    {!!obtenerConfiguracion_seccion('seccion_nosotros_mision')!!}
                                </p>
                            </div>
                            <div class="tab-pane fade" id="vision">
                                <p>
                                    {!!obtenerConfiguracion_seccion('seccion_nosotros_vision')!!}
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-md-offset-2">
                <div class="section-title text-center">
                    
                    <h2 class="title-effect">
                        {!!obtenerConfiguracion_seccion('seccion_titulo_team')!!}
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
          @foreach($trabajadores as $t)
            <div class="col-lg-6 col-md-6 sm-mb-30">
                <div class="team team-list">
                    <div class="team-photo">
                        <img alt="" class="img-responsive center-block" src="{{ $t->imagen }}" style="width: 250px; height: 280px;">
                        </img>
                    </div>
                    <div class="team-description">
                        <div class="team-info">
                            <h5>
                                <a href="team-single.html">
                                    {{ $t->nombre }}
                                </a>
                            </h5>
                            <span>
                                {{ $t->designacion }}
                            </span>
                        </div>
                        <div class="team-contact">
                            <span class="call">
                                {{ $t->telefono }}
                            </span>
                            <span class="email">
                                <i class="fa fa-envelope-o">
                                </i>
                                {{ $t->email }}
                            </span>
                        </div>
                        <div class="social-icons border rounded color-hover clearfix">
                            <ul>
                                <li class="social-facebook">
                                    <a href="#">
                                        <i class="fa fa-facebook">
                                        </i>
                                    </a>
                                </li>
                                <li class="social-twitter">
                                    <a href="#">
                                        <i class="fa fa-twitter">
                                        </i>
                                    </a>
                                </li>
                                <li class="social-instagram">
                                    <a href="#">
                                        <i class="fa fa-instagram">
                                        </i>
                                    </a>
                                </li>
                                <li class="social-linkedin">
                                    <a href="#">
                                        <i class="fa fa-linkedin">
                                        </i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <br>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="page-section-ptb gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title text-center">
                    
                    <h2 class="title-effect">
                        {!!obtenerConfiguracion_seccion('seccion_titulo_testimonios')!!}
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="owl-carousel" data-items="2" data-md-items="2" data-nav-dots="true" data-sm-items="2" data-xs-items="1" data-xx-items="1">
                  @foreach($testimonios as $testimonio)
                    <div class="item">
                        <div class="testimonial light">
                            <div class="testimonial-avatar">
                                <img alt="" src="images/trabajadores/4.jpg">
                                </img>
                            </div>
                            <div class="testimonial-info">
                                {{ $testimonio->testimonio }}
                            </div>
                            <div class="author-info">
                                <strong>
                                    Cliente -
                                    <span>
                                        {{ $testimonio->user->nombre }}
                                    </span>
                                </strong>
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


