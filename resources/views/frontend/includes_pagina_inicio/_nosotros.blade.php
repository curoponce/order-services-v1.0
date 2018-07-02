<section class="page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 sm-mb-30">
                <div class="owl-carousel bottom-left-dots" data-items="1" data-md-items="1" data-nav-dots="ture" data-sm-items="1" data-xs-items="1" data-xx-items="1">
                    <div class="item">
                        <img alt="" class="img-responsive" src="{{ asset('images/about/'. obtenerConfiguracion_seccion('section_nosotros_imagen')) }}">
                        </img>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="section-title">
                    <h6>
                        Quienes Somos?
                    </h6>
                    <h2 class="title-effect">
                        {!!obtenerConfiguracion_seccion('seccion_titulo_nosotros')!!}
                    </h2>
                    
                </div>
                <p align="justify">
                    {!!obtenerConfiguracion_seccion('seccion_nosotros_descripcion')!!}
                </p>
                    
                    <a class="button border icon" href="{{ route('pagina.nosotros') }}">
                        <span>
                            Ver más detalles
                        </span>
                        <i class="fa fa-info">
                        </i>
                    </a>
            </div>
        </div>
        
    </div>
</section>
<!-- Our-video -->

<!-- Offers -->


<!-- ... End Offers -->
