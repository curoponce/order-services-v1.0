
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>Order Services V1.0</title>
  <link rel="apple-touch-icon" href="{{ asset('backend/app-assets/images/ico/apple-icon-120.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/app-assets/images/ico/favicon.ico') }}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/fonts/simple-line-icons/style.css') }}">

  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/vendors.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/core/menu/menu-types/horizontal-menu.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/core/colors/palette-gradient.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/core/colors/palette-callout.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
</head>
<body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="hover"
data-menu="horizontal-menu" data-col="2-columns">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-static-top navbar-dark bg-gradient-x-primary navbar-shadow  navbar-border navbar-brand-center">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
              <img class="brand-logo" alt="stack admin logo" src="{{ asset('backend/app-assets/images/logo/stack-logo-light.png') }}">
              <h2 class="brand-text">Order Services</h2>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
            <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
              <div class="search-input">
                <input class="input" type="text" placeholder="Explore Stack...">
              </div>
            </li>
          </ul>
          <ul class="nav navbar-nav float-right">

            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="avatar avatar-online">
                  <img src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-1.png') }}" alt="avatar"><i></i></span>
                <span class="user-name">{{ Auth::user()->nombre }} {{ Auth::user()->apellidos }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{ route('usuarios.edit', Auth::user()->id) }}"><i class="ft-user"></i> Editar Perfil</a>
                
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="ft-power"></i> Desconectar
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow navbar-shadow menu-border"
  role="navigation" data-menu="menu-wrapper">
    <div class="navbar-container main-menu-content" data-menu="menu-container">
      <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">

        @if (auth()->check())

          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"><i class="ft-home"></i>
              <span>Panel de Control</span>
            </a>
          </li>
          
          @if (Auth::user()->hasRoles(['admin']))
            <li class="nav-item"><a class="nav-link" href="{{ route('usuarios.index') }}" ><i class="ft-user"></i><span>Usuarios</span></a>
            </li>

            <li class="nav-item"><a class="nav-link" href="{{ route('trabajadores.index') }}" ><i class="ft-users"></i><span>Trabajadores</span></a>
            </li>
          @endif

          <li class="nav-item"><a class="nav-link" href="{{ route('ordenes.index') }}" ><i class="ft-clipboard"></i><span>Ordenes de Servicio</span></a>
          </li>

          <li class="nav-item"><a class="nav-link" href="{{ route('mensajes.index') }}" ><i class="ft-message-square"></i><span>Mensajes</span></a>
          </li>

          <li class="nav-item"><a class="nav-link" href="{{ route('pagina.inicio') }}"  target="_blank"><i class="ft-eye"></i><span>Visitar Web</span></a>
          </li>

        @endif


      </ul>
    </div>

  </div>

  <!-- Horizontal navigation-->
  <div class="app-content content">
      <div class="content-wrapper">
          
          @if(session('message'))
          <div class="alert alert-{{ session('message')[0] }} alert-dismissable" role="alert">
              <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                  <span aria-hidden="true">
                      ×
                  </span>
              </button>
              <h3 class="alert-heading font-size-h4 font-w400">
                  Mensaje informativo
              </h3>
              <p class="mb-0">
                  {{ session('message')[1] }}
              </p>
          </div>
          @endif

          @if (count($errors) > 0)
          <div class="alert alert-danger alert-dismissable" role="alert">
              <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                  <span aria-hidden="true">
                      ×
                  </span>
              </button>
              @foreach ($errors->all() as $error)
              <li>
                  <i class="fa fa-info-circle">
                            </i>
                  {{ $error }}
              </li>
              @endforeach
          </div>
          @endif
          
          <div class="content-body">
              @yield('backend')
          </div>
      </div>
  </div>

  <footer class="footer footer-static footer-light navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="#"
        target="_blank">Chappie System </a>, All rights reserved. </span>
      <span class="float-md-right d-block d-md-inline-block d-none d-lg-block"> <i class="ft-heart pink"></i></span>
    </p>
  </footer>
  <script src="{{ asset('backend/app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
  <script type="text/javascript" src="{{ asset('backend/app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/app-assets/vendors/js/charts/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('backend/app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
  <script src="{{ asset('backend/app-assets/js/core/app.js') }}" type="text/javascript"></script>
  <script src="{{ asset('backend/app-assets/js/scripts/customizer.js') }}" type="text/javascript"></script>
  <script type="text/javascript" src="{{ asset('backend/app-assets/js/scripts/ui/breadcrumbs-with-stats.js') }}"></script>
  
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{ asset('backend/app-assets/js/scripts/pages/dashboard-ecommerce.js') }}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>
</html>