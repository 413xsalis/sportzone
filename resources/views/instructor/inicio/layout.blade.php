<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- CSRF para peticiones AJAX --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SportZone – @yield('title', 'Inicio')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-…tu-integrity-hash…"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css"
        integrity="sha384-…tu-integrity-hash…"
        crossorigin="anonymous">
    @stack('styles')
</head>

<body>
    @include('instructor.inicio.partials.header')
    <main class="container-fluid py-4">
        @yield('content')
    </main>
    @include('instructor.inicio.partials.footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-…tu-integrity-hash…"
        crossorigin="anonymous" defer>
    </script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-…tu-integrity-hash…"
        crossorigin="anonymous" defer>
    </script>
    @stack('scripts')
</body>

</html>