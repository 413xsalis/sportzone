@extends('colaborador.inscripcion_estudent.layout')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="bi bi-people"></i> Lista de Estudiantes Inscritos</h1>
      <p>Listado general de estudiantes registrados</p>
    </div>
  </div>

  <div class="tile">
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Documento</th>
            <th>Nombre completo</th>
            <th>Teléfono</th>
            <th>EPS</th>
            <th>Grupo/Nivel</th>
          </tr>
        </thead>
        <tbody>
          @forelse($estudiantes as $est)
          <tr>
            <td>{{ $est->id }}</td>
            <td>{{ $est->documento }}</td>
            <td>{{ $est->nombre_1 }} {{ $est->nombre_2 }} {{ $est->apellido_1 }} {{ $est->apellido_2 }}</td>
            <td>{{ $est->telefono }}</td>
            <td>{{ $est->eps }}</td>
            <td>{{ $est->id_grupo_nivel }}</td>
            <td>
          <!-- Botón Editar -->
          <a href="{{ route('$est.edit', $est->id) }}" class="btn btn-sm btn-warning">Editar</a>

          <!-- Botón Eliminar -->
          <form action="{{ route('$est.destroy', $est->id) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este estudiante?')">Eliminar</button>
          </form>
        </td>
          </tr>
          
          @empty
          <tr>
            <td colspan="6" class="text-center">No hay estudiantes registrados.</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</main>
@endsection
