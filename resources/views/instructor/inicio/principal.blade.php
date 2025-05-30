@extends('instructor.inicio.layout')

@section('title', 'Panel de Instructor')

@section('content')
<main class="app-content">
  <div class="app-title d-flex justify-content-between align-items-center mb-4">
    <div>
      <h1><i class="bi"></i> Bienvenido</h1>
      <h5 class="mb-0">Panel de control para instructores</h5>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ul>
  </div>

  <div class="row mb-4">
    <!-- Calendario Interactivo -->
    <div class="col-lg-8 mb-4">
      <div class="tile shadow-sm rounded-4 h-100">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h3 class="tile-title mb-0">Calendario de Actividades</h3>
          <div>
            <button class="btn btn-sm btn-outline-primary me-1" id="prevMonth">
              <i class="bi bi-chevron-left"></i>
            </button>
            <button class="btn btn-sm btn-outline-primary" id="nextMonth">
              <i class="bi bi-chevron-right"></i>
            </button>
          </div>
        </div>

        <!-- Selector de fecha mejorado -->
        <div class="mb-3">
          <input type="month" class="form-control" id="monthSelector" value="{{ now()->format('Y-m') }}">
        </div>

        <!-- Mini calendario interactivo -->
        <div class="mini-calendar">
          <div class="calendar-header d-flex justify-content-between bg-light py-2 rounded-top">
            @foreach(['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'] as $day)
            <div class="text-center text-muted" style="width: 14.28%;">{{ $day }}</div>
            @endforeach
          </div>
          <div class="calendar-body">
            @for($i = 0; $i < 6; $i++)
              <div class="calendar-row d-flex">
              @for($j = 0; $j < 7; $j++)
                @php
                $day=$i * 7 + $j + 1;
                $isToday=$day===(int) now()->format('d');
                $hasEvent = in_array($day, [5, 10, 15, 20, 25]);
                @endphp
                <div class="calendar-day text-center p-2 border"
                  style="width: 14.28%; height: 60px; cursor: pointer;"
                  data-day="{{ $day }}">
                  <div class="d-flex flex-column h-100">
                    <div class="day-number {{ $isToday ? 'bg-primary text-white rounded-circle d-inline-block mx-auto' : '' }}"
                      style="width: 24px; height: 24px; line-height: 24px;">
                      {{ $day }}
                    </div>
                    @if($hasEvent)
                    <div class="event-indicator mt-auto">
                      <span class="badge bg-success rounded-pill" style="font-size: 6px;">●</span>
                    </div>
                    @endif
                  </div>
                </div>
                @endfor
          </div>
          @endfor
        </div>
      </div>

      <!-- Eventos del día seleccionado -->
      <div class="mt-4" id="dailyEvents">
        <h5 class="mb-3">Actividades para hoy</h5>
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h6 class="mb-1">Fútbol juvenil</h6>
              <small>08:00 - 09:30</small>
            </div>
            <p class="mb-1">Cancha principal - Grupo A</p>
            <small class="text-success"><i class="bi bi-check-circle"></i> Confirmado</small>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Panel lateral con imagen y estadísticas -->
  <div class="col-lg-4">
    <div class="tile shadow-sm rounded-4 mb-4">
      <div class="d-flex justify-content-center mb-3">
        <img
          src="{{ asset('assets/images/foto.jpg') }}"
          alt="Deporte" class="img-fluid rounded-4"
          style="max-height: 220px; object-fit: cover;">
      </div>
      <div class="text-center">
        <h5 class="mb-1">Próximo evento destacado</h5>
        <p class="mb-0">Practica entre grupos A - B</p>
        <p class="mb-0"><i class="bi bi-calendar-event"></i> 15 de Julio, 2024</p>
        <button class="btn btn-sm btn-primary mt-2">Ver detalles</button>
      </div>
    </div>

    <!-- Estadísticas rápidas -->
    <div class="tile shadow-sm rounded-4 p-3">
      <h5 class="mb-3">Resumen de actividades</h5>
      <div class="d-flex justify-content-between mb-2">
        <div class="text-center">
          <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center"
            style="width: 50px; height: 50px;">
            <i class="bi bi-people fs-4"></i>
          </div>
          <div class="mt-1">Alumnos</div>
          <strong>24</strong>
        </div>
        <div class="text-center">
          <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center"
            style="width: 50px; height: 50px;">
            <i class="bi bi-calendar-check fs-4"></i>
          </div>
          <div class="mt-1">Clases/sem</div>
          <strong>12</strong>
        </div>
        <div class="text-center">
          <div class="bg-info text-white rounded-circle d-inline-flex align-items-center justify-content-center"
            style="width: 50px; height: 50px;">
            <i class="bi bi-trophy fs-4"></i>
          </div>
          <div class="mt-1">Eventos</div>
          <strong>3</strong>
        </div>
      </div>

      <!-- Acciones rápidas -->
      <div class="mt-4">
        <h5 class="mb-3">Acciones rápidas</h5>
        <div class="d-grid gap-2">
          <button class="btn btn-outline-primary btn-sm d-flex align-items-center justify-content-start">
            <i class="bi bi-plus-circle me-2"></i> Nueva actividad
          </button>
          <button class="btn btn-outline-success btn-sm d-flex align-items-center justify-content-start">
            <i class="bi bi-person-plus me-2"></i> Agregar alumno
          </button>
          <button class="btn btn-outline-info btn-sm d-flex align-items-center justify-content-start">
            <i class="bi bi-calendar-plus me-2"></i> Programar evento
          </button>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Últimas notificaciones -->
  <div class="row">
    <div class="col-12">
      <div class="tile shadow-sm rounded-4">
        <h5 class="mb-3"><i class="bi bi-bell me-2"></i>Últimas notificaciones</h5>
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex align-items-center">
              <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center me-3"
                style="width: 40px; height: 40px;">
                <i class="bi bi-check-lg"></i>
              </div>
              <div>
                <h6 class="mb-0">Nuevo alumno inscrito</h6>
                <small class="text-muted">Carlos Mendoza se ha inscrito en fútbol juvenil</small>
              </div>
              <small class="ms-auto text-muted">Hace 2 horas</small>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex align-items-center">
              <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-3"
                style="width: 40px; height: 40px;">
                <i class="bi bi-calendar-event"></i>
              </div>
              <div>
                <h6 class="mb-0">Evento próximo</h6>
                <small class="text-muted">Torneo de futbol este sábado</small>
              </div>
              <small class="ms-auto text-muted">Ayer</small>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex align-items-center">
              <div class="bg-warning bg-opacity-10 text-warning rounded-circle d-flex align-items-center justify-content-center me-3"
                style="width: 40px; height: 40px;">
                <i class="bi bi-exclamation-triangle"></i>
              </div>
              <div>
                <h6 class="mb-0">Recordatorio de activacion</h6>
                <small class="text-muted">5 alumnos para agregar a la lista</small>
              </div>
              <small class="ms-auto text-muted">Hace 2 días</small>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection