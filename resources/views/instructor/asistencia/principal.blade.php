@extends('instructor.asistencia.layout')

@section('nav-message')
Bienvenido - Panel de control de instructores
@endsection


@section('content')

<main class="app-content">
  <div class="tile p-4 rounded-4 shadow-sm">
    <h3 class="mb-4">Selecciona un grupo para tomar asistencia</h3>

    @if(count($grupos))
      <ul class="list-group">
        @foreach($grupos as $grupo)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $grupo->nombre }}
            <a href="{{ route('asistencia.tomar', ['id' => $grupo->nombre]) }}" class="btn btn-success btn-sm">
              Tomar asistencia
            </a>
          </li>
        @endforeach
      </ul>
    @else
      <div class="alert alert-warning mt-3">No hay grupos disponibles.</div>
    @endif
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="app.js"></script>
</main>
@endsection