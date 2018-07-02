<section class="gray-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h6>
                        clientes
                    </h6>
                    <h2 class="title-effect">
                        {!! obtenerConfiguracion_seccion('seccion_titulo_testimonios') !!}
                    </h2>
                </div>
                <div class="owl-carousel" data-items="2" data-md-items="2" data-nav-dots="true" data-sm-items="1">

                    @foreach($testimonios as $test)
                    <div class="item">
                        <div class="testimonial theme-bg bottom_pos">
                            <div class="testimonial-avatar">
                                <img alt="" src="images/trabajadores/4.jpg">
                                </img>
                            </div>
                            <div class="testimonial-info">
                                {{ $test->testimonio }}
                            </div>
                            <div class="author-info">
                                <strong>
                                    Cliente -
                                    <span>
                                        {{ $test->user->nombre }} {{ $test->user->apellidos }}
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
