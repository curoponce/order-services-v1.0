<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="vidrieria cerro azul, servicios, nosotros, contactanos, proyectos" />
    <meta name="description" content="@yield('meta-descripcion', obtenerConfiguracion('descripcion_del_sitio'))" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>@yield('titulo', obtenerConfiguracion('nombre_del_sitio'))</title>

    <link rel="shortcut icon" href="{{ URL::asset('images/'.obtenerConfiguracion('favicon_del_sitio')) }}" />

    <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/plugins-css.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('revolution/css/settings.css') }}" media="screen" />

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/typography.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/shortcodes/shortcodes.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/responsive.css') }}" /> 


    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/skins/skin-water-blue.css') }}" data-style="styles"/>
     
    </head>

    <body>
        <div class="wrapper">


            <!--=================================
             preloader -->
             
            <div id="pre-loader">
                <img src="{{ asset('backend/app-assets/images/docubot.gif') }}" alt="">
            </div>

            <!--=================================
             preloader -->


            <header class="header light" id="header">
                <div class="topbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="topbar-call text-left">
                                    <ul>
                                        <li>
                                            <i class="fa fa-envelope-o theme-color">
                                            </i>
                                            gethelp@webster.com
                                        </li>
                                        <li>
                                            <i class="fa fa-phone">
                                            </i>
                                            <a href="tel:7042791249">
                                                <span>
                                                    +(704) 279-1249
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="topbar-social text-right">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="ti-facebook">
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="ti-instagram">
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="ti-google">
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="ti-twitter">
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="ti-linkedin">
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="ti-dribbble">
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu">

                    <nav class="mega-menu" id="menu">

                        <section class="menu-list-items">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">

                                        <ul class="menu-logo">
                                            <li>
                                                <a href="{{ route('pagina.inicio') }}">
                                                    <img alt="logo" id="logo_img" src="{{ asset('images/'.obtenerConfiguracion('logo_del_sitio')) }}">
                                                    </img>
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="menu-bar">
                                            <ul class="menu-links">
                                                <li class="{{ activeMenu('/') }}">
                                                    <a href="{{ route('pagina.inicio') }}">
                                                        <i class="fa fa-home">
                                                        </i>
                                                        Inicio
                                                    </a>
                                                </li>
                                                <li class="{{ activeMenu('nosotros') }}">
                                                    <a href="{{ route('pagina.nosotros') }}">
                                                        <i class="fa fa-users">
                                                        </i>
                                                        Quienes somos?
                                                    </a>
                                                </li>
                                                <li class="{{ activeMenu('servicios*') }}">
                                                    <a href="{{ route('pagina.servicios') }}">
                                                        <i class="fa fa-cog">
                                                        </i>
                                                        Servicios
                                                        <i class="fa fa-angle-down fa-indicator">
                                                        </i>
                                                    </a>
                                                    <!-- drop down multilevel  -->
                                                    <ul class="drop-down-multilevel">
                                                        <li class="">
                                                            <a href="{{ route('pagina.solicitar.servicio') }}">
                                                                Solicitar orden de servicio
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="{{ activeMenu('proyectos') }}">
                                                    <a href="{{ route('pagina.proyectos') }}">
                                                        <i class="fa fa-flask">
                                                        </i>
                                                        Proyectos
                                                    </a>
                                                </li>
                                                <li class="{{ activeMenu('contactanos') }}">
                                                    <a href="{{ route('pagina.contactanos') }}">
                                                        <i class="fa fa-phone">
                                                        </i>
                                                        Contactanos
                                                    </a>
                                                </li>
                                                @guest
                                                <li class="{{ activeMenu('login') }}">
                                                    <a href="{{ route('login') }}">
                                                        <i class="fa fa-sign-out">
                                                        </i>
                                                        Login
                                                    </a>
                                                </li>
                                                <li class="{{ activeMenu('register') }}">
                                                    <a href="{{ route('register') }}">
                                                        <i class="fa fa-edit">
                                                        </i>
                                                        Registrarse
                                                    </a>
                                                </li>
                                                @else
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-user">
                                                        </i>
                                                        {{ Auth::user()->nombre }}
                                                        <i class="fa fa-angle-down fa-indicator">
                                                        </i>
                                                    </a>

                                                    <ul class="drop-down-multilevel">
                                                        <li>
                                                            <a href="{{ route('dashboard') }}">
                                                                <i class="fa fa-th">
                                                                </i>
                                                                Panel de control
                                                            </a>
                                                        </li>
                                                        <div class="divider">
                                                        </div>
                                                        <li>
                                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                                                                <i class="fa fa-sign-out">
                                                                </i>
                                                                Desconectar
                                                            </a>
                                                            <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                                                                {{ csrf_field() }}
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </li>
                                                @endguest
                                            </ul>
                                            <div class="search-cart">
                                                <div class="search">
                                                          <div class="search-box not-click">
                                                        <input class="not-click form-control" name="s" placeholder="Search" type="text" value="">
                                                            <i class="fa fa-search">
                                                            </i>
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class="shpping-cart">

                                                    <div class="cart">
                                                        <div class="cart-title">
                                                            <h6 class="uppercase mb-0">
                                                                Shopping cart
                                                            </h6>
                                                        </div>
                                                        <div class="cart-item">
                                                            <div class="cart-image">
                                                                <img alt="" class="img-responsive" src="images/shop/01.jpg">
                                                                </img>
                                                            </div>
                                                            <div class="cart-name clearfix">
                                                                <a href="#">
                                                                    Product name
                                                                    <strong>
                                                                        x2
                                                                    </strong>
                                                                </a>
                                                                <div class="cart-price">
                                                                    <del>
                                                                        $24.99
                                                                    </del>
                                                                    <ins>
                                                                        $12.49
                                                                    </ins>
                                                                </div>
                                                            </div>
                                                            <div class="cart-close">
                                                                <a href="#">
                                                                    <i class="fa fa-times-circle">
                                                                    </i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="cart-item">
                                                            <div class="cart-image">
                                                                <img alt="" class="img-responsive" src="images/shop/01.jpg">
                                                                </img>
                                                            </div>
                                                            <div class="cart-name clearfix">
                                                                <a href="#">
                                                                    Product name
                                                                    <strong>
                                                                        x2
                                                                    </strong>
                                                                </a>
                                                                <div class="cart-price">
                                                                    <del>
                                                                        $24.99
                                                                    </del>
                                                                    <ins>
                                                                        $12.49
                                                                    </ins>
                                                                </div>
                                                            </div>
                                                            <div class="cart-close">
                                                                <a href="#">
                                                                    <i class="fa fa-times-circle">
                                                                    </i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="cart-total">
                                                            <h6 class="mb-15">
                                                                Total: $104.00
                                                            </h6>
                                                            <a class="button" href="#">
                                                                View Cart
                                                            </a>
                                                            <a class="button black" href="#">
                                                                Checkout
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </nav>

                </div>
            </header>

            @yield('frontend')
            <footer class="footer footer-topbar black-bg">
            <div class="copyright">
            <div class="container">
            <div class="row">
            <div class="col-lg-6 col-sm-6">
            <img class="img-responsive mb-10" id="logo-footer" src="{{ asset('images/logo-cerro-azul.png') }}" alt="">
                  <div class="footer-text">
                     <p> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> VCA </a> All Rights Reserved </p>
                  </div>
              </div>
              <div class="col-lg-6 col-sm-6">
              <div class="footer-social">
                  <ul class="list-inline text-right">
                     <li><a href="#">Terms & Conditions </a> &nbsp;&nbsp;&nbsp;|</li>
                     <li><a href="#">API Use Policy </a> &nbsp;&nbsp;&nbsp;|</li>
                     <li><a href="#">Privacy Policy </a> </li>
                  </ul></div>
                <div class="social-icons color-hover pull-right mt-20">
                     <ul class="clearfix"> 
                      <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i> </a></li>
                      <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i> </a></li>
                     </ul>
                   </div>
              </div>
            </div>
            </div>
            </div>
            </footer>

        </div>
        <div id="back-to-top">
            <a class="top arrow" href="#top">
                <i class="fa fa-angle-up" style="padding-top: 3px; font-size: 30px;">
                </i>
                
            </a>
        </div>

        <script src="{{ URL::asset('js/jquery-1.12.4.min.js') }}" type="text/javascript">
        </script>

        <script src="{{ URL::asset('js/plugins-jquery.js') }}" type="text/javascript">
        </script>

        <script type="text/javascript">
            var plugin_path = 'js/';
        </script>

        <script src="{{ URL::asset('revolution/js/jquery.themepunch.tools.min.js') }}" type="text/javascript">
        </script>
        <script src="{{ URL::asset('revolution/js/jquery.themepunch.revolution.min.js') }}" type="text/javascript">
        </script>

        <script src="{{ URL::asset('revolution/js/extensions/revolution.extension.actions.min.js') }}" type="text/javascript">
        </script>
        <script src="{{ URL::asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}" type="text/javascript">
        </script>
        <script src="{{ URL::asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}" type="text/javascript">
        </script>
        <script src="{{ URL::asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}" type="text/javascript">
        </script>
        <script src="{{ URL::asset('revolution/js/extensions/revolution.extension.migration.min.js') }}" type="text/javascript">
        </script>
        <script src="{{ URL::asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}" type="text/javascript">
        </script>
        <script src="{{ URL::asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}" type="text/javascript">
        </script>
        <script src="{{ URL::asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}" type="text/javascript">
        </script>
        <script src="{{ URL::asset('revolution/js/extensions/revolution.extension.video.min.js') }}" type="text/javascript">
        </script>
        <!-- revolution custom -->
        <script src="{{ URL::asset('revolution/js/revolution-custom.js') }}" type="text/javascript">
        </script>
        <!-- custom -->
        <script src="{{ URL::asset('js/custom.js') }}" type="text/javascript">
        </script>
        <script async="async" src="//platform-api.sharethis.com/js/sharethis.js#property=5add56b022309d0013d4f168&product=sticky-share-buttons">
        </script>
       

        <script type="text/javascript">
        window.__lc = window.__lc || {};
        window.__lc.license = 9826685;
        (function() {
          var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
          lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
        })();
        </script>
    </body>
</html>



