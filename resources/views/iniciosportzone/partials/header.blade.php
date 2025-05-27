<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPORT_ZONE</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

    <header>
        <a href="#" class="logo">
            <span>JARD</span>developers</a>

        <input type="checkbox" id="menu-bar">
        <label for="menu-bar" class="fa fa-bars"></label>
        <nav class="navbar">
            <a href="#inicio">Inicio</a>
            <a href="#detalles">Nosotros</a>
            <a href="#servicios">Servicios</a>
            <a href="{{ route('admin.principal') }}">Login</a>
            <!-- <button id="cambiarVistaBtn" class="btn btn-primary">Cambiar vista</button>

            <script>
                document.getElementById('cambiarVistaBtn').addEventListener('click', function () {
                    window.location.href = "{{ route('admin.principal') }}";
                }); 
            </script>-->
            <a href="#contactos">contactos</a>
        </nav>
    </header>