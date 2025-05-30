<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('instructor.inicio.principal') }}">
      <i class="bi bi-speedometer me-2"></i> SportZone
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs('instructor.inicio.principal')) active @endif"
            href="{{ route('instructor.inicio.principal') }}">
            <i class="bi bi-house-door"></i> Inicio
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="bi bi-calendar"></i> Horarios
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="bi bi-people"></i> Alumnos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="bi bi-clipboard-data"></i> Reportes
          </a>
        </li>
      </ul>

      {{-- Zona de usuario (temporal) --}}
      <!-- <ul class="navbar-nav">
                <li class="nav-item"> -->
      {{-- Sustituye por tu enlace de login o perfil cuando lo implementes --}}
      <!-- <a class="nav-link" href="#">
                        <i class="bi bi-person-circle"></i> Invitado
                    </a>
                </li>
            </ul> -->
    </div>
  </div>
</nav>