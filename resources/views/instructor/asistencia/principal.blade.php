@extends('instructor.asistencia.layout')

@section('nav-message')
  Bienvenido - Panel de control de instructores
@endsection


@section('content')

  <main class="app-content">
    <div class="tile rounded-4 shadow-sm p-4">
    <h3 class="mb-4">Asistencia - {{ date('d/m/Y') }}</h3>

    <form method="POST" action="{{ route('asistencia.guardar') }}">
      @csrf
      <input type="hidden" name="fecha" value="{{ date('Y-m-d') }}">
      <input type="hidden" name="id_grupo" value="{{ $grupo->id }}">

      <table class="table table-bordered align-middle">
      <thead class="table-light">
        <tr>
        <th>#</th>
        <th>Estudiante</th>
        <th>Estado</th>
        <th>Detalles</th>
        </tr>
      </thead>
      <tbody>
        @foreach($estudiantes as $i => $estudiante)
      <tr>
      <td>{{ $i + 1 }}</td>
      <td>{{ $estudiante->nombre_1 }} {{ $estudiante->apellido_1 }}</td>
      <td>
        <select name="asistencia[{{ $estudiante->documento }}]" class="form-select form-select-sm">
        <option value="presente">Presente</option>
        <option value="ausente">Ausente</option>
        <option value="justificado">Justificado</option>
        </select>
      </td>
      <td>
        <button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="modal"
        data-bs-target="#detalles{{ $estudiante->documento }}">
        Ver más
        </button>

        @include('instructor.asistencia.partials.modal', ['estudiante' => $estudiante])
      </td>
      </tr>
      @endforeach
      </tbody>
      </table>

      <div class="text-end">
      <button class="btn btn-primary">Guardar Asistencia</button>
      </div>
    </form>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="app.js"></script>
  </main>
@endsection