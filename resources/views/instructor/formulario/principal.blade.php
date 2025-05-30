@extends('instructor.formulario.layout')

@section('title', 'Lista de Estudiantes')

@section('content')
<main class="app-content">
  <div class="app-title d-flex justify-content-between align-items-center mb-4">
    <h1><i class="bi bi-people me-2"></i> Lista de Estudiantes</h1>
    {{-- Buscador rápido --}}
    <form action="{{ route('instructor.formulario.principal') }}" method="GET" class="d-flex">
      <input type="search" name="q" value="{{ request('q') }}" placeholder="Buscar..."
        class="form-control form-control-sm me-2">
      <button class="btn btn-sm btn-primary">Buscar</button>
    </form>
  </div>

  {{-- Mensajes flash --}}
  @if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <div class="table-responsive">
    <table class="table table-hover align-middle">
      <thead class="table-light">
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Usuario</th>
          <th>Asistencia</th>
        </tr>
      </thead>
      <tbody>
        @forelse($estudiantes as $index => $est)
        <tr class="{{ $est->asistio ? 'table-success' : '' }}">
          <td>{{ $estudiantes->firstItem() + $index }}</td>
          <td>{{ $est->first_name }}</td>
          <td>{{ $est->last_name }}</td>
          <td>{{ $est->username }}</td>
          <td>
            <form action="{{ route('instructor.formulario.asistencia', $est) }}" method="POST" class="d-inline">
              @csrf
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"
                  name="asistencia" id="asistio{{ $est->id }}"
                  value="1" {{ $est->asistio ? 'checked' : '' }}
                  onchange="this.form.submit()">
                <label class="form-check-label text-success" for="asistio{{ $est->id }}">Sí</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"
                  name="asistencia" id="noasistio{{ $est->id }}"
                  value="0" {{ !$est->asistio ? 'checked' : '' }}
                  onchange="this.form.submit()">
                <label class="form-check-label text-danger" for="noasistio{{ $est->id }}">No</label>
              </div>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="5" class="text-center text-muted">No hay estudiantes registrados.</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  {{-- Paginación --}}
  <div class="d-flex justify-content-center mt-3">
    {{ $estudiantes->withQueryString()->links() }}
  </div>
</main>
@endsection