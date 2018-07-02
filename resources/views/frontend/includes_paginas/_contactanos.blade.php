
<section class="page-section-ptb contact-2">
    <div class="container">
        <div class="row text-center mb-50">
            <div class="col-md-offset-2 col-md-8">
                <div class="section-title">
                    <h2 class="title-effect">
                        {!! obtenerConfiguracion_seccion('seccion_titulo_contacto') !!}
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div id="formmessage">
                    Success/Error Message Goes Here
                </div>
                <form action="{{ route('contactar') }}" class="form-horizontal" method="post" role="form">
                    {{ csrf_field() }}
                    <div class="contact-form clearfix">

                        @if(auth()->guest())

                        <div class="section-field">
                            <input class="form-control"  name="nombre" placeholder="nombre*" type="text">
                            </input>
                        </div>

                        <div class="section-field">
                            <input class="form-control"  name="apellidos" placeholder="apellidos*" type="text">
                            </input>
                        </div>
                        <div class="section-field">
                            <input class="form-control" name="email" placeholder="Email*" type="email">
                            </input>
                        </div>

                        @endif

                        <label for="contenido">Ingrese su mensaje</label>
                        <div class="section-field textarea">
                            <textarea class="input-message form-control" name="contenido" placeholder="Comment*" rows="7">
                            </textarea>
                        </div>
                        

                        <div class="section-field submit-button">
                            <button class="button" type="submit">
                                <span>
                                    Enviar  mensaje
                                </span>
                                <i class="fa fa-paper-plane">
                                </i>
                            </button>
                        </div>
                    </div>
                </form>
                <div id="ajaxloader" style="display:none">
                    <img alt="" class="center-block mt-30 mb-30" src="images/pre-loader/loader-02.svg"/>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="theme-bg contact-2 clearfix o-hidden">
    <div class="container-fluid pos-r">
        <div class="row">
            <div class="col-lg-6 col-md-6 map-side g-map map-right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.3782367818717!2d-76.37542608562343!3d-13.075198390787968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910ff95065c85ca7%3A0x33556b3e9727bc35!2sMegaPlaza+Ca%C3%B1ete!5e0!3m2!1ses!2spe!4v1524277671504" style="width: 100%; height: 530px; ">
                </iframe>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="contact-3-info page-section-ptb text-white">
                    <div class="clearfix">
                        <ul class="addresss-info list-unstyled">
                            <li>
                                <i class="ti-map-alt">
                                </i>
                                <p>
                                    {!! obtenerConfiguracion_seccion('seccion_contacto_direccion') !!}
                                </p>
                            </li>
                            <li>
                                <i class="ti-mobile">
                                </i>
                                {!! obtenerConfiguracion_seccion('seccion_contacto_phone1') !!}
                            </li>
                            <li>
                                <i class="ti-email">
                                </i>
                                {!! obtenerConfiguracion_seccion('seccion_contacto_email1') !!}
                            </li>
                        </ul>
                        <div class="social-icons border rounded color-hover mt-50">
                            <ul>
                                <li class="social-facebook">
                                    <a href="#">
                                        <span class="ti-facebook">
                                        </span>
                                    </a>
                                </li>
                                <li class="social-google">
                                    <a href="#">
                                        <span class="ti-google">
                                        </span>
                                    </a>
                                </li>
                                <li class="social-twitter">
                                    <a href="#">
                                        <span class="ti-twitter">
                                        </span>
                                    </a>
                                </li>
                                <li class="social-linkedin">
                                    <a href="#">
                                        <span class="ti-linkedin">
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

