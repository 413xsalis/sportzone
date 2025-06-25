@extends('instructor.asistencia.layout')

@section('nav-message')
Bienvenido - Panel de control de instructores
@endsection


@section('content')

<main class="app-content">
  <div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h3 class="mb-0">Asistencia - TaekWondo</h3>
        <small class="text-muted">Grupo A | {{ now()->format('d \d\e F \d\e Y') }}</small>
      </div>
      <div>
        <input type="date" class="form-control" value="{{ now()->toDateString() }}">
      </div>
    </div>

    <div class="table-responsive">
      <table class="table table-hover align-middle shadow-sm rounded-4 overflow-hidden">
        <thead class="table-light">
          <tr>
            <th>Alumno</th>
            <th class="text-center">Estado</th>
          </tr>
        </thead>
        <tbody>
          @php
          $alumnos = ['María Rodríguez', 'Jorge Mendoza', 'Laura Gómez', 'Juan Pérez'];
          @endphp

          @foreach ($alumnos as $nombre)
          <tr>
            <td>{{ $nombre }}</td>
            <td class="text-center">
              <div class="btn-group" role="group">
                <input type="radio" class="btn-check" name="estado_{{ $loop->index }}" id="p_{{ $loop->index }}" autocomplete="off" checked>
                <label class="btn btn-outline-success btn-sm" for="p_{{ $loop->index }}"><i class="bi bi-check-circle"></i> Presente</label>

                <input type="radio" class="btn-check" name="estado_{{ $loop->index }}" id="a_{{ $loop->index }}" autocomplete="off">
                <label class="btn btn-outline-danger btn-sm" for="a_{{ $loop->index }}"><i class="bi bi-x-circle"></i> Ausente</label>

                <input type="radio" class="btn-check" name="estado_{{ $loop->index }}" id="j_{{ $loop->index }}" autocomplete="off">
                <label class="btn btn-outline-warning btn-sm" for="j_{{ $loop->index }}"><i class="bi bi-exclamation-circle"></i> Justificado</label>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="d-flex justify-content-between align-items-center mt-4">
      <div>
        <button class="btn btn-secondary btn-sm me-2"><i class="bi bi-check-all"></i> Marcar todos como presentes</button>
        <button class="btn btn-outline-danger btn-sm"><i class="bi bi-x-lg"></i> Cancelar</button>
      </div>
      <button class="btn btn-primary btn-sm"><i class="bi bi-save"></i> Guardar asistencia</button>
    </div>

    <div class="mt-4">
      <h6>Resumen:</h6>
      <p class="text-muted mb-0">🎯 3 presentes, 1 ausente, 0 justificados</p>
    </div>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="app.js"></script>
</main>
@endsection