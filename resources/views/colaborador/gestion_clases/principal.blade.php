@extends('colaborador.gestion_clases.layout')

@section('title', 'Gestión de Clases')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="bi bi-speedometer"></i> Gestión de Clases </h1>
      <p>Módulo Colaborador</p>
    </div>
  </div>

  <div class="container mt-4">
    <h2 class="mb-4 text-center">Horario de Clases</h2>

    <table class="table table-bordered table-striped">
      <thead class="table-dark text-center">
  <tr>
    <th>Día</th>
    <th>Hora</th>
    <th>Instructor</th>
    <th>Grupo</th>
    <th>Acciones</th>
  </tr>
</thead>
<tbody class="text-center">
  @foreach ($horarios as $horario)
    <tr>
      <td>{{ ucfirst($horario->dia) }}</td>
      <td>{{ $horario->hora_inicio }} - {{ $horario->hora_fin }}</td>
      <td>{{ $horario->instructor->nombre }}</td>
      <td>{{ $horario->grupo->nombre }}</td>
      <td>
        <a href="{{ route('horarios.edit', $horario->id) }}" class="btn btn-sm btn-primary">Editar</a>

        <form action="{{ route('horarios.destroy', $horario->id) }}" method="POST" style="display:inline-block;">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este horario?')">Eliminar</button>
        </form>
      </td>
    </tr>
  @endforeach
</tbody>

    </table>
  </div>

  <div class="container mt-5">
    <h3 class="text-center">Calendario</h3>
    <div class="row justify-content-center">
      <div class="col-md-6 mb-4">
        <label for="calendar" class="form-label">Selecciona una fecha:</label>
        <input type="date" class="form-control" id="calendar">
      </div>
    </div>
  </div>

  <br>
  <br>
  <h3 class="mb-4">Registrar Nuevo Horario</h3>
<form action="{{ route('horarios.store') }}" method="POST" class="mb-5">
    @csrf

    <div class="row g-3">
        <div class="col-md-3">
            <label for="dia" class="form-label">Día</label>
            <select name="dia" id="dia" class="form-select" required>
                <option value="">Selecciona un día</option>
                <option value="lunes">Lunes</option>
                <option value="martes">Martes</option>
                <option value="miércoles">Miércoles</option>
                <option value="jueves">Jueves</option>
                <option value="viernes">Viernes</option>
                <option value="sábado">Sábado</option>
                <option value="domingo">Domingo</option>
            </select>
        </div>

        <div class="col-md-2">
            <label for="hora_inicio" class="form-label">Hora Inicio</label>
            <input type="time" name="hora_inicio" id="hora_inicio" class="form-control" required>
        </div>

        <div class="col-md-2">
            <label for="hora_fin" class="form-label">Hora Fin</label>
            <input type="time" name="hora_fin" id="hora_fin" class="form-control" required>
        </div>

        <div class="col-md-2">
            <label for="instructor_id" class="form-label">Instructor</label>
            <select name="instructor_id" id="instructor_id" class="form-select" required>
                <option value="">Selecciona</option>
                @foreach($instructores as $instructor)
                    <option value="{{ $instructor->id }}">{{ $instructor->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-2">
            <label for="grupo_id" class="form-label">Grupo</label>
            <select name="grupo_id" id="grupo_id" class="form-select" required>
                <option value="">Selecciona</option>
                @foreach($grupos as $grupo)
                    <option value="{{ $grupo->id }}">{{ $grupo->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-1 d-flex align-items-end">
            <button type="submit" class="btn btn-success w-100">Guardar</button>
        </div>
    </div>
</form>

</main>
@endsection
