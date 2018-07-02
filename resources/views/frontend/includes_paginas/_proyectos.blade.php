


<section class="white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <div class="isotope-filters">
                    <button class="active" data-filter="*">
                        All
                    </button>

                    @foreach($servicios as $servicio)
                    <button data-filter=".{{ $servicio->id }}">
                        {{ $servicio->titulo }}
                    </button>
                    @endforeach
                    
                </div>
                <div class="isotope columns-3 popup-gallery">

                  @foreach($proyectos as $proyecto)
                    <div class="grid-item photography branding {{ $proyecto->servicio_id }}">
                        <div class="portfolio-item">
                            <img alt="" src="{{ asset('images/servicios/'.$proyecto->imagen) }}" style="height: 250px;">
                                <div class="portfolio-overlay">
                                    <h4 class="text-white">
                                        <a href="#">
                                            {{ $proyecto->titulo }}
                                        </a>
                                    </h4>
                                    <span class="text-white">
                                        <a href="#">
                                            {{ $proyecto->servicio->titulo }}
                                        </a>
                                    </span>
                                </div>
                                <a class="popup portfolio-img" href="{{ asset('images/servicios/'.$proyecto->imagen) }}">
                                    <i class="fa fa-arrows-alt">
                                    </i>
                                </a>
                            </img>
                        </div>
                    </div>
                  @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

