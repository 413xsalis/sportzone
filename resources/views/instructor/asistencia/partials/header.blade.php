<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <title>Proyecto sportzone</title>
</head>

<body class="app sidebar-mini">
  <!-- Navbar-->
  <header class="app-header">
    <a class="app-header__logo" href="index.html">
      <img src="{{ asset('assets/images/logo_sf.png') }}" alt="Logo" style="height: 65px; vertical-align: middle;">
    </a>

    <!-- Sidebar toggle button + Bienvenida -->
    <div class="d-flex align-items-center flex-grow-1">
      <a class="app-sidebar__toggle me-3" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      @hasSection('nav-message')
      <span class="text-white fw-bold fs-5 mb-0">@yield('nav-message')</span>
    @endif
    </div>

    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <li class="app-search">
        <input class="app-search__input" type="search" placeholder="Search">
        <button class="app-search__button"><i class="bi bi-search"></i></button>
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
          <li class="app-sidebar__user-designation breadcrumb-item"><a href="#">Inicio</a></li>

      </div>
    </div>

    <ul class="app-menu">
      <a class="app-menu__item" href="{{ route('inst.principal') }}"></i><span class="app-menu__label">Inicio</span></a>

      <ul class="app-menu">
        <a class="app-menu__item" href="{{ route('inst.horarios') }}"></i><span
            class="app-menu__label">Horarios</span></a>


      </ul>

  </aside>