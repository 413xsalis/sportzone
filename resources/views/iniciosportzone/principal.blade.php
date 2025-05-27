@extends('iniciosportzone.layout')

@section('content')

<main class="app-content">
<section class="inicio">
    <div class="content">
            <h3> JARD TI <span> TECNOLOGIA Y Desarrollo </span></h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                 Minima odio possimus rem. 
                 Ab, natus ad hic nisi enim ex omnis mollitia dolor, 
                 neque laborum saepe debitis eius. Perspiciatis, 
                 molestias laudantium.</p>
              <a href="#" class="boton"> MAS DETALLES</a>   
        </div>

        <div class="imagen">
            <img src="{{ asset('assets/imginicio/copa-ganadora-concepto-medalla-oro.png') }}" alt="">
        </div>

    </section>
<section class="inicio" style="background: url('{{ asset('assets/imginicio/inicio_fondo.png') }}') no-repeat; background-size: cover; background-position: center;">
    <!-- Contenido de la sección inicio -->
</section>

    <section class="detalles" id="detalles">
        <h1 class="heading"> Nosotros </h1>
        <div class="caja-contenedor">
            <div class="caja">
                <img src="{{ asset('assets/imginicio/grupo_jard.png') }}" alt="jard">
                <h3>Empresa de Desarrollo TI</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Voluptas suscipit illum a repellendus adipisci ullam nesciunt!
                     Dolores, in! Deleniti omnis amet animi voluptate
                     quod molestias perspiciatis sint laborum autem id!</p>

                     <a href="#" class="boton"> VER MAS </a>
            </div>
            <div class="caja">
                <img src="{{ asset('assets/imginicio/digital-blue-hud-interface-laptop-concept.jpg') }}" alt="jard">
                <h3>Compromiso al Desarrollo TI</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Voluptas suscipit illum a repellendus adipisci ullam nesciunt!
                     Dolores, in! Deleniti omnis amet animi voluptate
                     quod molestias perspiciatis sint laborum autem id!</p>

                     <a href="#" class="boton"> VER MAS </a>
            </div>
            <div class="caja">
                <img src="{{ asset('assets/imginicio/businessman-working-futuristic-office.jpg') }}" alt="jard">
                <h3> Versatilidad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Voluptas suscipit illum a repellendus adipisci ullam nesciunt!
                     Dolores, in! Deleniti omnis amet animi voluptate
                     quod molestias perspiciatis sint laborum autem id!</p>

                     <a href="#" class="boton"> VER MAS </a>
            </div>
        </div>
    </section>

    <section class="servicios" id = "servicios">

    <h1 class="heading"> Servicios </h1>
    <div class="columna">
        <div class="imagen">
                     <section class="servicios" style="background: url('{{ asset('assets/imginicio/fondo_2.png') }}') no-repeat; background-size: center; background-position: left; padding: 3rem;">
     Contenido de la sección servicios 
</section> 
            <img src="{{ asset('assets/imginicio/logo_sportzone-no fondo.png') }}" alt="logo">
        </div>
        <div class="content">
            <h3>Empresa de Desarrollo</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
               Quam quod corrupti cupiditate alias quo iure suscipit id ad. 
               Reprehenderit ipsum totam quisquam autem dolore, 
               rem commodi culpa minus beatae minima!</p>

               <div class="botones">
                <a href="#" class="boton"><i class="fab fa-google-play"></i> GOOGLE PLAY </a>
                <a href="#" class="boton"><i class="fab fa-facebook"></i> FACEBOOK</a>
               </div>
        </div>
    </div>
</section>

<section class="contactos" id="contactos">
    <div class="imagen">
        <img src="{{ asset('assets/imginicio/contactos.jpg') }}" alt="">
    </div>

    <form action="">
        <h1 class="heading">contactos</h1>
        <div class="inputcaja">
            <input type="text" required>
            <label for="">nombre</label>
        </div>
        <div class="inputcaja">
            <input type="email" required>
            <label for="">email</label>
        </div>
        <div class="inputcaja">
            <input type="number" required>
            <label for="">telefono</label>
        </div>
        <div class="inputcaja">
            <textarea name="" id="" cols="30"
            rows="10"></textarea>
            <label for="">Mensaje</label>
        </div>
        <input type="submit" class="boton" value="ENVIAR">
    </form>
</section>
</main>

@endsection