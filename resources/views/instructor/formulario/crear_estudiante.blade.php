@extends('instructor.formulario.layout')

@section('title', 'Registrar Nuevo Estudiante')

@section('content')
<div class="container mt-4">
    <h2>Registrar Nuevo Estudiante</h2>

    {{-- Mensaje flash de éxito --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('instructor.formulario.guardar') }}" method="POST">
        @csrf

        {{-- Campo: Nombre --}}
        <div class="mb-3">
            <label for="first_name" class="form-label">Nombre:</label>
            <input
                type="text"
                name="first_name"
                id="first_name"
                class="form-control"
                value="{{ old('first_name') }}"
                required
            >
            @error('first_name')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        {{-- Campo: Apellido --}}
        <div class="mb-3">
            <label for="last_name" class="form-label">Apellido:</label>
            <input
                type="text"
                name="last_name"
                id="last_name"
                class="form-control"
                value="{{ old('last_name') }}"
                required
            >
            @error('last_name')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        {{-- Campo: Usuario --}}
        <div class="mb-3">
            <label for="username" class="form-label">Usuario:</label>
            <input
                type="text"
                name="username"
                id="username"
                class="form-control"
                value="{{ old('username') }}"
                required
            >
            @error('username')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        {{-- Botón Registrar --}}
        <button type="submit" class="btn btn-success">Registrar</button>

        {{-- Enlace para volver al listado --}}
        <a href="{{ route('instructor.formulario.principal') }}" class="btn btn-link">
            ← Volver al listado
        </a>
    </form>
</div>
@endsection
