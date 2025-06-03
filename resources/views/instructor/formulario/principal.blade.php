{{-- resources/views/instructor/formulario/principal.blade.php --}}
@extends('instructor.formulario.layout')

@section('title', 'Lista de Estudiantes')

@section('content')
<main class="app-content">
  <div class="app-title d-flex justify-content-between align-items-center mb-4">
    <h1><i class="bi bi-people me-2"></i> Lista de Estudiantes</h1>

    {{-- Botón “➕ Registrar Estudiante” --}}
    <div class="text-end mb-3">
      <a href="{{ route('instructor.formulario.crear') }}">
        <button class="btn btn-primary">➕ Registrar Estudiante</button>
      </a>
    </div>

    {{-- Buscador rápido --}}
    <form action="{{ route('instructor.formulario.principal') }}" method="GET" class="d-flex">
      <input
        type="search"
        name="q"
        value="{{ request('q') }}"
        placeholder="Buscar..."
        class="form-control form-control-sm me-2"
      >
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
          <th>Nombre Completo</th>
          <th>Estado</th>
        </tr>
      </thead>
      <tbody>
        @forelse($estudiantes as $index => $est)
          {{-- Si el alumno está inactivo, podemos sombrear la fila --}}
          <tr class="{{ $est->activo ? '' : 'table-secondary text-muted' }}">
            {{-- Cálculo de índice según paginación --}}
            <td>{{ $estudiantes->firstItem() + $index }}</td>

            {{-- Concatenamos nombre_1 + apellido_1 --}}
            <td>{{ $est->nombre_1 }} {{ $est->apellido_1 }}</td>

            {{-- Estado: activo = true → “Activo” en verde; si es false → “Inactivo” en rojo --}}
            <td>
              @if($est->activo)
                <span class="badge bg-success">Activo</span>
              @else
                <span class="badge bg-danger">Inactivo</span>
              @endif
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="3" class="text-center text-muted">
              No hay estudiantes registrados.
            </td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  {{-- Paginación centrada --}}
  <div class="d-flex justify-content-center mt-3">
    {{ $estudiantes->withQueryString()->links() }}
  </div>
</main>
@endsection
