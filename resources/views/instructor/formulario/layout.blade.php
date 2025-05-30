<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SportZone · @yield('title','Formulario')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-…" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" integrity="sha384-…" crossorigin="anonymous">
    @stack('styles')
</head>

<body class="app sidebar-mini">
  @include('instructor.formulario.partials.header')
  <main class="container-fluid py-4">
    @yield('content')
  </main>
    @include('instructor.formulario.partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-…" crossorigin="anonymous" defer>
    </script>
    @stack('scripts')
</body>

</html>