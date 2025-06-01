<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--Main CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Proyecto sportzone</title>
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">
      <img src="{{ asset('assets/images/logo_sf.png') }}" alt="Logo" style="height: 65px; vertical-align: middle;">
    </a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="bi bi-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Show notifications"><i class="bi bi-bell fs-5"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><i class="bi bi-envelope fs-4 text-primary"></i></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><i class="bi bi-exclamation-triangle fs-4 text-warning"></i></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><i class="bi bi-cash fs-4 text-success"></i></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><i class="bi bi-envelope fs-4 text-primary"></i></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><i class="bi bi-exclamation-triangle fs-4 text-warning"></i></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><i class="bi bi-cash fs-4 text-success"></i></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Open Profile Menu"><i class="bi bi-person fs-4"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="bi bi-gear me-2 fs-5"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="bi bi-person me-2 fs-5"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="bi bi-box-arrow-right me-2 fs-5"></i> Logout</a></li>
          </ul>
        </li>
      </ul> 
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="" src="" alt="">
        <div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
          <li class="app-sidebar__user-designation breadcrumb-item"><a href="index.php?accion=inicio_colab">Inicio</a></li>

        </div>
      </div>
      <ul class="app-menu">
        <a class="app-menu__item" href="index.php?accion=gestion_clases"></i><span
            class="app-menu__label">Gestion de clases</span></a>
        <a class="app-menu__item" href="index.php?accion=inscripcion_estudiantes"></i><span
            class="app-menu__label">Inscripcíon de Estudiantes</span></a>
        <a class="app-menu__item" href="index.php?accion=reportes_colab"></i><span
            class="app-menu__label">Reportes</span></a>

    </aside>


   <!--<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!- Main CSS--
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
  <!- Font-icon css--
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <title>Proyecto SportZone</title>
</head>
<body class="app sidebar-mini">

  <!- Navbar --
  <header class="app-header">
    <a class="app-header__logo" href="{{ route('colaborador.dashboard') }}">
      <img src="{{ asset('assets/images/logo_sf.png') }}" alt="Logo" style="height: 65px;">
    </a>

    <!- Sidebar toggle button--
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>

    <!- Navbar Right Menu--
    <ul class="app-nav">
      <li class="app-search">
        <input class="app-search__input" type="search" placeholder="Buscar">
        <button class="app-search__button"><i class="bi bi-search"></i></button>
      </li>

      <!- Notificaciones --
      <li class="dropdown">
        <a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Show notifications">
          <i class="bi bi-bell fs-5"></i>
        </a>
        <ul class="app-notification dropdown-menu dropdown-menu-right">
          <li class="app-notification__title">Tienes 4 notificaciones nuevas.</li>
          <div class="app-notification__content">
            <!- Aquí van las notificaciones --
          </div>
          <li class="app-notification__footer"><a href="#">Ver todas las notificaciones.</a></li>
        </ul>
      </li>

      <!- Usuario --
      <li class="dropdown">
        <a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Open Profile Menu">
          <i class="bi bi-person fs-4"></i>
        </a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2 fs-5"></i> Configuración</a></li>
          <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2 fs-5"></i> Perfil</a></li>
          <li><a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right me-2 fs-5"></i> Cerrar sesión
          </a></li>
        </ul>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </li>
    </ul>
  </header>

  <!- Sidebar --
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user">
      <div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
          <li class="breadcrumb-item">
            <a href="{{ route('colaborador.dashboard') }}">Inicio</a>
          </li>
        </ul>
      </div>
    </div>

    <ul class="app-menu">
      <li>
        <a class="app-menu__item" href="{{ route('colaborador.gestion_clases') }}">
          <span class="app-menu__label">Gestión de clases</span>
        </a>
      </li>
      <li>
        <a class="app-menu__item" href="{{ route('colaborador.inscripcion_estudiantes') }}">
          <span class="app-menu__label">Inscripción de Estudiantes</span>
        </a>
      </li>
      <li>
        <a class="app-menu__item" href="{{ route('colaborador.reportes') }}">
          <span class="app-menu__label">Reportes</span>
        </a>
      </li>
    </ul>
  </aside>
 
 