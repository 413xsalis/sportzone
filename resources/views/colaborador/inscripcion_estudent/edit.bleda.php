@extends('colaborador.inscripcion_estudent.layout')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="bi bi-pencil-square"></i> Editar Estudiante</h1>
      <p>Modificar información del estudiante inscrito</p>
    </div>
  </div>

  <div class="col-md-12 mb-4">
    <form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="documento" class="form-label">Documento</label>
          <input type="number" class="form-control" name="documento" id="documento" value="{{ old('documento', $estudiante->documento) }}" required>
        </div>

        <div class="col-md-6 mb-3">
          <label for="nombre_1" class="form-label">Nombre 1</label>
          <input type="text" class="form-control" name="nombre_1" id="nombre_1" value="{{ old('nombre_1', $estudiante->nombre_1) }}" required>
        </div>

        <div class="col-md-6 mb-3">
          <label for="nombre_2" class="form-label">Nombre 2</label>
          <input type="text" class="form-control" name="nombre_2" id="nombre_2" value="{{ old('nombre_2', $estudiante->nombre_2) }}">
        </div>

        <div class="col-md-6 mb-3">
          <label for="apellido_1" class="form-label">Apellido 1</label>
          <input type="text" class="form-control" name="apellido_1" id="apellido_1" value="{{ old('apellido_1', $estudiante->apellido_1) }}">
        </div>

        <div class="col-md-6 mb-3">
          <label for="apellido_2" class="form-label">Apellido 2</label>
          <input type="text" class="form-control" name="apellido_2" id="apellido_2" value="{{ old('apellido_2', $estudiante->apellido_2) }}">
        </div>

        <div class="col-md-6 mb-3">
          <label for="telefono" class="form-label">Teléfono</label>
          <input type="text" class="form-control" name="telefono" id="telefono" value="{{ old('telefono', $estudiante->telefono) }}">
        </div>

        <div class="col-md-6 mb-3">
          <label for="telefono_contacto" class="form-label">Teléfono de Contacto</label>
          <input type="text" class="form-control" name="telefono_contacto" id="telefono_contacto" value="{{ old('telefono_contacto', $estudiante->telefono_contacto) }}">
        </div>

        <div class="col-md-6 mb-3">
          <label for="eps" class="form-label">EPS</label>
          <input type="text" class="form-control" name="eps" id="eps" value="{{ old('eps', $estudiante->eps) }}">
        </div>

        <div class="col-md-6 mb-3">
          <label for="id_grupo_nivel" class="form-label">Grupo o Nivel</label>
          <select class="form-select" id="id_grupo_nivel" name="id_grupo_nivel">
            <option value="">Seleccione un grupo</option>
            <option value="1" {{ $estudiante->id_grupo_nivel == 1 ? 'selected' : '' }}>Nivel 1</option>
            <option value="2" {{ $estudiante->id_grupo_nivel == 2 ? 'selected' : '' }}>Nivel 2</option>
            <option value="3" {{ $estudiante->id_grupo_nivel == 3 ? 'selected' : '' }}>Nivel 3</option>
          </select>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Actualizar</button>
      <a href="{{ route('colab.inscripcion.listado') }}" class="btn btn-secondary">Cancelar</a>
    </form>
  </div>
</main>
@endsection
