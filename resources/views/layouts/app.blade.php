<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Panel de administración</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="/assets/styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="/assets/styles/extras.1.1.0.min.css">
    <link rel="stylesheet" href="/assets/plugins/slim/slim.min.css">
    <link rel="stylesheet" href="/assets/plugins/toast/css/toastr.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!--==============Favicon==========================================================================-->
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--==END=FAVICON=======================================================================-->
    <style>
      .header_main {
          position: sticky !important;
          top: 0 !important;
          background-color: #ffffff !important; /* Cambia esto al color de fondo deseado */
          z-index: 1000 !important; /* Asegura que el encabezado aparezca por encima del contenido al hacer scroll */
          /* Otros estilos como altura, relleno, bordes, etc. */
      }
      .bg-light-two {
          background-color: #f8f9fa !important;
      }
      .input-in-text{
        width: 40px; 
        height: 40px;
        padding:2px;
        border-radius: .25rem;
        border: 1px solid #e1e5eb;
      }
      input[type="checkbox"], input[type="radio"] {
        top:-2px !important;
      }
    </style>
    @yield('head')
  </head>
  <body class="h-100">
    <!-- <div class="color-switcher animated">
      <h5>Guía</h5>
      <ul class="accent-colors">
        <li class="accent-primary active" data-color="primary">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-secondary" data-color="secondary">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-success" data-color="success">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-info" data-color="info">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-warning" data-color="warning">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-danger" data-color="danger">
          <i class="material-icons">check</i>
        </li>
      </ul>
      <div class="actions mb-4">
        <a class="mb-2 btn btn-sm btn-primary w-100 d-table mx-auto extra-action" href="https://designrevision.com/downloads/shards-dashboard-lite/">
          <i class="material-icons">cloud</i> Download</a>
        <a class="mb-2 btn btn-sm btn-white w-100 d-table mx-auto extra-action" href="https://designrevision.com/docs/shards-dashboard-lite">
          <i class="material-icons">description</i> Documentación</a>
      </div>
      <div class="close">
        <i class="material-icons">close</i>
      </div>
    </div> -->
    <!-- <div class="color-switcher-toggle animated pulse infinite">
      <i class="material-icons">settings</i>
    </div> -->
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="/" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 45px;" src="/assets/images/logo1.png" alt="Shards Dashboard">
                  <span class="d-none d-md-inline ml-1 pt-2" style="vertical-align: middle;">Mi Tienda</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <!-- <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
          </form> -->
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              @if(auth()->check() && auth()->user()->type_id == 3)
              <li class="nav-item">
                <a class="nav-link " href="/admin/home">
                  <i class="material-icons">dashboard</i>
                  <span>Resumen</span>
                </a>
              </li>
              @endif
              @if(auth()->check() && auth()->user()->userType->profile_show == 1)
              <li class="nav-item">
                <a class="nav-link " href="/admin/profile">
                  <i class="material-icons">person</i>
                  <span>Mi Perfil</span>
                </a>
              </li>
              @endif
              @if(auth()->check() && auth()->user()->userType->category_show == 1)
              <li class="nav-item">
                <a class="nav-link " href="/admin/categories">
                  <i class="material-icons">view_comfy_alt</i>
                  <span>Cateogrías</span>
                </a>
              </li>
              @endif
              @if(auth()->check() && auth()->user()->userType->product_show == 1)
              <li class="nav-item">
                <a class="nav-link " href="/admin/products">
                  <i class="material-icons">vertical_split</i>
                  <span>Productos</span>
                </a>
              </li>
              @endif
              @if(auth()->check() && auth()->user()->type_id == 1)
              <li class="nav-item">
                <a class="nav-link " href="/admin/purchases">
                  <i class="material-icons">local_mall</i>
                  <span>Compras</span>
                </a>
              </li>
              @endif
              @if(auth()->check() && auth()->user()->userType->sales_show == 1)
              <li class="nav-item">
                <a class="nav-link " href="/admin/payments">
                  <i class="material-icons">paid</i>
                  <span>Ventas</span>
                </a>
              </li>
              @endif
              @if(auth()->check() && auth()->user()->userType->shipping_show == 1)
              <li class="nav-item">
                <a class="nav-link " href="/admin/shipping">
                  <i class="material-icons">local_shipping</i>
                  <span>Envíos</span>
                </a>
              </li>
              @endif
              @if(auth()->check() && auth()->user()->userType->user_show  == 1)
              <li class="nav-item">
                <a class="nav-link " href="/admin/accounts">
                  <i class="material-icons">group</i>
                  <span>Usuarios</span>
                </a>
              </li>
              @endif
              @if(auth()->check() && auth()->user()->userType->activity_show == 1)
              <li class="nav-item">
                <a class="nav-link " href="/admin/activity">
                  <i class="material-icons">app_registration</i>
                  <span>Registro de Actividades</span>
                </a>
              </li>
              @endif
              @if(auth()->check() && auth()->user()->userType->blog_show  == 1)
              <li class="nav-item">
                <a class="nav-link " href="/admin/blog">
                  <i class="material-icons">feed</i>
                  <span>Blog</span>
                </a>
              </li>
              @endif
              @if(auth()->check() && auth()->user()->userType->message_show  == 1)
              <!-- <li class="nav-item">
                <a class="nav-link " href="/admin/message">
                  <i class="material-icons">chat</i>
                  <span>Mensajes</span>
                </a>
              </li> -->
              @endif
              @if(auth()->check() && auth()->user()->userType->subscriber_show  == 1)
              <li class="nav-item">
                <a class="nav-link " href="/admin/subscriber">
                  <i class="material-icons">mail</i>
                  <span>Suscriptores</span>
                </a>
              </li>
              @endif
              @if(auth()->check())
                @if(auth()->user()->userType->general_slider_show == 1 ||
                auth()->user()->userType->general_logo_show  == 1 ||
                auth()->user()->userType->general_color_show   == 1 ||
                auth()->user()->userType->general_contact_show   == 1 ||
                auth()->user()->userType->general_filter_show   == 1 ||
                auth()->user()->userType->general_about_show  == 1)
                <li class="nav-item">
                  <a class="nav-link " href="/admin/settings">
                    <i class="material-icons">settings</i>
                    <span>Generales Web</span>
                  </a>
                </li>
                @endif
              @endif
              <li class="nav-item">
                <a class="nav-link active" href="/">
                  <i class="material-icons">web</i>
                  <span>Ir a la tienda</span>
                </a>
              </li>
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                <div class="input-group input-group-seamless ml-3">
                  <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                      <i class="fas fa-search"></i>
                    </div> -->
                  </div>
                  <!-- <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> -->
                </div>
              </form>
              <ul class="navbar-nav border-left flex-row ">
                <li class="nav-item border-right dropdown notifications">
                  <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="nav-link-icon__wrapper">
                      <i class="material-icons">&#xE7F4;</i>
                      <!-- <span class="badge badge-pill badge-danger">2</span> -->
                    </div>
                  </a>
                  <!-- nofificaciones de campana -->
                  <!-- <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">
                      <div class="notification__icon-wrapper">
                        <div class="notification__icon">
                          <i class="material-icons">&#xE6E1;</i>
                        </div>
                      </div>
                      <div class="notification__content">
                        <span class="notification__category">Analytics</span>
                        <p>Your website’s active users count increased by
                          <span class="text-success text-semibold">28%</span> in the last week. Great job!</p>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="notification__icon-wrapper">
                        <div class="notification__icon">
                          <i class="material-icons">&#xE8D1;</i>
                        </div>
                      </div>
                      <div class="notification__content">
                        <span class="notification__category">Sales</span>
                        <p>Last week your store’s sales count decreased by
                          <span class="text-danger text-semibold">5.52%</span>. It could have been worse!</p>
                      </div>
                    </a>
                    <a class="dropdown-item notification__all text-center" href="#"> View all Notifications </a>
                  </div> -->
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle mr-2" src="@if(auth()->user()->image) /assets/images/users/{{auth()->user()->image}} @else /assets/images/no-user.png @endif" alt="User Avatar">
                    <span class="d-none d-md-inline-block">@if(auth()->check()) {{auth()->user()->name}} @else user @endif</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item" href="/admin/profile">
                      <i class="material-icons">&#xE7FD;</i> Mi Perfil
                    </a>
                    <!-- <a class="dropdown-item" href="/admin/about">
                      <i class="material-icons">badge</i> Nosotros</a> -->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}" 
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <i class="material-icons text-danger">&#xE879;</i> Salir </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                  </div>
                </li>
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div>
          <!-- / .main-navbar -->


          <!-- content -->
          <div class="p-3">
              <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    @yield('content')
                </div>
              </div>
          </div>
          <!-- / .content -->


        </main>
      </div>
    </div>
    <div class="promo-popup animated">
      <a href=#" class="pp-cta extra-action"></a>
      <div class="pp-intro-bar"> Necesitas Ayuda?
        <span class="close">
          <i class="material-icons">close</i>
        </span>
        <span class="up">
          <i class="material-icons">keyboard_arrow_up</i>
        </span>
      </div>
      <div class="pp-inner-content">
        <h2>Contacta con Soporte</h2>
        <p>A premium & modern Bootstrap 4 admin dashboard template pack.</p>
        <a class="pp-cta extra-action bg-success" href="#">Whatsapp</a>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="/assets/js/extras.1.1.0.min.js"></script>
    <script src="/assets/js/shards-dashboards.1.1.0.min.js"></script>
    <script src="/assets/js/app/app-blog-overview.1.1.0.js"></script>
    <script src="/assets/plugins/slim/slim.jquery.js"></script>
    <script>
        $(document).ready(function() {
            $('.slim').slim();
        });
    </script>

    <!-- Vendor JS Files -->
    <!-- <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script> -->
    <script src="/assets/plugins/toast/js/toastr.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>
    
    @yield('script')
  </body>
</html>