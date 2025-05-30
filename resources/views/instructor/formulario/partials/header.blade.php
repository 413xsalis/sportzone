<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('instructor.formulario.principal') }}">
        <i class="bi bi-journal-text me-2"></i> SportZone
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="topNavbar">
        {{-- Buscador --}}
        <form class="d-flex ms-auto" action="{{ url()->current() }}" method="GET">
          <input name="q" class="form-control form-control-sm me-2" type="search"
            placeholder="Buscar…" value="{{ request('q') }}" aria-label="Buscar">
          <button class="btn btn-sm btn-outline-light" type="submit">
            <i class="bi bi-search"></i>
          </button>
        </form>

        {{-- Notificaciones (ejemplo estático) --}}
        <ul class="navbar-nav ms-3">
          <li class="nav-item dropdown">
            <a class="nav-link position-relative" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-bell fs-5"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                3<span class="visually-hidden">nuevas notificaciones</span>
              </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow-sm">
              <li class="dropdown-header">Notificaciones</li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-start" href="#">
                  <i class="bi bi-envelope fs-4 text-primary me-2"></i>
                  <div>
                    <div>Nuevo mensaje recibido</div>
                    <small class="text-muted">5 min ago</small>
                  </div>
                </a>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-start" href="#">
                  <i class="bi bi-exclamation-triangle fs-4 text-warning me-2"></i>
                  <div>
                    <div>Sistema requiere atención</div>
                    <small class="text-muted">1 h ago</small>
                  </div>
                </a>
              </li>
              <li>
                <a class="dropdown-item text-center" href="#">
                  Ver todas
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  {{-- Sidebar --}}
  <div class="d-flex">
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-light">
      <div class="position-sticky">
        <ul class="nav flex-column pt-3">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('instructor.formulario.principal') ? 'active' : '' }}"
              href="{{ route('instructor.formulario.principal') }}">
              <i class="bi bi-list-ul me-2"></i> Lista de Alumnos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-calendar3 me-2"></i> Horarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-graph-up me-2"></i> Reportes
            </a>
          </li>
          {{-- Añade aquí más ítems según se necesite --}}
        </ul>
      </div>
    </nav>

    {{-- Abre un contenedor para el contenido real --}}
    <div class="flex-fill">
      {{-- yield content va en layout --}}
    </div>
  </div>
</header>

@push('styles')
<style>
  .sidebar {
    width: 220px;
  }

  .navbar-nav .badge {
    font-size: 0.6rem;
  }

  .nav-link.active {
    background-color: #0d6efd;
    color: #fff !important;
    border-radius: 0.25rem;
  }
</style>
@endpush