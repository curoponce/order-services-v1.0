
<section class="white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h6>
                    </h6>
                    <h2 class="title-effect">
                        {!! obtenerConfiguracion_seccion('seccion_titulo_proveedores') !!}
                    </h2>
                </div>
                <div class="col-md-offset-1 col-md-10 text-center">
                    <div class="clients-list mt-50">
                        <div class="owl-carousel" data-items="4" data-md-items="4" data-nav-dots="false" data-sm-items="3" data-xs-items="2" data-xx-items="2">

                            @foreach($proveedores as $proveedor)
                            <div class="item">
                                <img alt="" class="img-responsive center-block" src="{{ asset('images/proveedores/'. $proveedor->imagen) }}">
                                </img>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Clients -->


<!-- End Clients -->
