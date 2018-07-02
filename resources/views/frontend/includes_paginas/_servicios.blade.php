



<section class="page-section-ptb position-re">
   <div class="container">
   <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="section-title">
          
          <h2 class="title-effect">{!! obtenerConfiguracion_seccion('seccion_titulo_servicios') !!}</h2>
          <p align="justify">{!! obtenerConfiguracion_seccion('seccion_descripcion') !!}</p>
        </div>
      </div>
    </div>
     <div class="row">
      @foreach($servicios as $servicio)
      <div class="col-lg-4 col-md-4 col-sm-4 xs-mb-30">
        <div class="feature-box">
          <div class="feature-box-content">
          <i class="ti-check-box"></i>
          <h4>{{ $servicio->titulo }}</h4>
          <p class="justify">{{ str_limit($servicio->descripcion, $limit = 50, $end = '...')  }}</p>
          </div>
          <a href="#">Ver Detalles</a>
          <div class="feature-box-img" style="background-image: url('{{ asset('images/servicios/'.$servicio->imagen)}}');"></div>
          <span class="border"></span>
        </div>
        <br>
      </div>
      @endforeach
     </div>
   </div> 
</section>

