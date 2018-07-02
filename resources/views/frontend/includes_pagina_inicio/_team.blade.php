
<section class="white-bg page-section-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h6>
                    </h6>
                    <h2 class="title-effect">
                        {!! obtenerConfiguracion_seccion('seccion_titulo_team') !!}
                    </h2>
                    <p>
                        
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($trabajadores as $trabajador)
            <div class="col-lg-3 col-md-3 col-sm-6 sm-mb-30">
                <div class="team team-hover">
                    <div class="team-photo">
                        <img alt="" class="img-responsive center-block img-rounded" src="{{ asset('images/team/4.jpg') }}" style="width: 250px; height: 250px;">
                        </img>
                    </div>
                    <div class="team-description">
                        <div class="team-info">
                            <h5>
                                <a href="team-single.html">
                                    {{ $trabajador->nombre }}
                                </a>
                            </h5>
                            <span>
                                {{ $trabajador->designacion }}
                            </span>
                        </div>
                        <div class="team-contact">
                            <span class="call">
                                {{ $trabajador->telefono }}
                            </span>
                            <span class="email">
                                <i class="fa fa-envelope-o">
                                </i>
                                {{  $trabajador->email }}
                            </span>
                        </div>
                        <div class="social-icons color clearfix">
                            <ul>
                                <li class="social-facebook">
                                    <a href="{{ $trabajador->facebook_url }}" target="_blank">
                                        <i class="fa fa-facebook">
                                        </i>
                                    </a>
                                </li>
                                <li class="social-twitter">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-twitter">
                                        </i>
                                    </a>
                                </li>
                                <li class="social-instagram">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-instagram">
                                        </i>
                                    </a>
                                </li>
                                <li class="social-linkedin">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-linkedin">
                                        </i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Team members -->

