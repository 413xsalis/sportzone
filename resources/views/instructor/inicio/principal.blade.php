@extends('instructor.layout')

@section('title', 'Panel de Instructor')

@section('content')
<main class="app-content">
    <div class="app-title d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1><i class="bi bi-speedometer me-2"></i> BIENVENIDO, {{ Auth::user()->name }}</h1>
            <p class="mb-0">Panel de control para instructores</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ul>
    </div>
    
    <div class="row mb-4">
        <!-- Calendario Interactivo -->
        <div class="col-lg-8 mb-4">
            <div class="tile shadow-sm rounded-4 h-100">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="tile-title mb-0">Calendario de Actividades</h3>
                    <div>
                        <button class="btn btn-sm btn-outline-primary me-1" id="prevMonth">
                            <i class="bi bi-chevron-left"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-primary" id="nextMonth">
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Selector de fecha mejorado -->
                <div class="mb-3">
                    <input type="month" class="form-control" id="monthSelector" value="{{ now()->format('Y-m') }}">
                </div>
                
                <!-- Mini calendario interactivo -->
                <div class="mini-calendar">
                    <div class="calendar-header d-flex justify-content-between bg-light py-2 rounded-top">
                        @foreach(['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'] as $day)
                            <div class="text-center text-muted" style="width: 14.28%;">{{ $day }}</div>
                        @endforeach
                    </div>
                    <div class="calendar-body">
                        @for($i = 0; $i < 6; $i++)
                            <div class="calendar-row d-flex">
                                @for($j = 0; $j < 7; $j++)
                                    @php
                                        $day = $i * 7 + $j + 1;
                                        $isToday = $day === (int)now()->format('d');
                                        $hasEvent = in_array($day, [5, 10, 15, 20, 25]);
                                    @endphp
                                    <div class="calendar-day text-center p-2 border" 
                                         style="width: 14.28%; height: 60px; cursor: pointer;"
                                         data-day="{{ $day }}">
                                        <div class="d-flex flex-column h-100">
                                            <div class="day-number {{ $isToday ? 'bg-primary text-white rounded-circle d-inline-block mx-auto' : '' }}" 
                                                 style="width: 24px; height: 24px; line-height: 24px;">
                                                {{ $day }}
                                            </div>
                                            @if($hasEvent)
                                                <div class="event-indicator mt-auto">
                                                    <span class="badge bg-success rounded-pill" style="font-size: 6px;">●</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        @endfor
                    </div>
                </div>
                
                <!-- Eventos del día seleccionado -->
                <div class="mt-4" id="dailyEvents">
                    <h5 class="mb-3">Actividades para hoy</h5>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Fútbol juvenil</h6>
                                <small>08:00 - 09:30</small>
                            </div>
                            <p class="mb-1">Cancha principal - Grupo A</p>
                            <small class="text-success"><i class="bi bi-check-circle"></i> Confirmado</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Baloncesto avanzado</h6>
                                <small>17:00 - 18:30</small>
                            </div>
                            <p class="mb-1">Cancha cubierta - Grupo B</p>
                            <small class="text-warning"><i class="bi bi-exclamation-circle"></i> Pendiente de confirmación</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Panel lateral con imagen y estadísticas -->
        <div class="col-lg-4">
            <div class="tile shadow-sm rounded-4 mb-4">
                <div class="d-flex justify-content-center mb-3">
                    <img
                        src="{{ asset('images/depor.jpg') }}"
                        alt="Deporte"
                        class="img-fluid rounded-4"
                        style="max-height: 220px; object-fit: cover;">
                </div>
                <div class="text-center">
                    <h5 class="mb-1">Próximo evento destacado</h5>
                    <p class="mb-0">Torneo de fútbol interescuelas</p>
                    <p class="mb-0"><i class="bi bi-calendar-event"></i> 15 de Julio, 2024</p>
                    <button class="btn btn-sm btn-primary mt-2">Ver detalles</button>
                </div>
            </div>
            
            <!-- Estadísticas rápidas -->
            <div class="tile shadow-sm rounded-4 p-3">
                <h5 class="mb-3">Resumen de actividades</h5>
                <div class="d-flex justify-content-between mb-2">
                    <div class="text-center">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" 
                             style="width: 50px; height: 50px;">
                            <i class="bi bi-people fs-4"></i>
                        </div>
                        <div class="mt-1">Alumnos</div>
                        <strong>24</strong>
                    </div>
                    <div class="text-center">
                        <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center" 
                             style="width: 50px; height: 50px;">
                            <i class="bi bi-calendar-check fs-4"></i>
                        </div>
                        <div class="mt-1">Clases/sem</div>
                        <strong>12</strong>
                    </div>
                    <div class="text-center">
                        <div class="bg-info text-white rounded-circle d-inline-flex align-items-center justify-content-center" 
                             style="width: 50px; height: 50px;">
                            <i class="bi bi-trophy fs-4"></i>
                        </div>
                        <div class="mt-1">Eventos</div>
                        <strong>3</strong>
                    </div>
                </div>
                
                <!-- Acciones rápidas -->
                <div class="mt-4">
                    <h5 class="mb-3">Acciones rápidas</h5>
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-primary btn-sm d-flex align-items-center justify-content-start">
                            <i class="bi bi-plus-circle me-2"></i> Nueva actividad
                        </button>
                        <button class="btn btn-outline-success btn-sm d-flex align-items-center justify-content-start">
                            <i class="bi bi-person-plus me-2"></i> Agregar alumno
                        </button>
                        <button class="btn btn-outline-info btn-sm d-flex align-items-center justify-content-start">
                            <i class="bi bi-calendar-plus me-2"></i> Programar evento
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Últimas notificaciones -->
    <div class="row">
        <div class="col-12">
            <div class="tile shadow-sm rounded-4">
                <h5 class="mb-3"><i class="bi bi-bell me-2"></i>Últimas notificaciones</h5>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex align-items-center">
                            <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center me-3" 
                                 style="width: 40px; height: 40px;">
                                <i class="bi bi-check-lg"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Nuevo alumno inscrito</h6>
                                <small class="text-muted">Carlos Mendoza se ha inscrito en fútbol juvenil</small>
                            </div>
                            <small class="ms-auto text-muted">Hace 2 horas</small>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-3" 
                                 style="width: 40px; height: 40px;">
                                <i class="bi bi-calendar-event"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Evento próximo</h6>
                                <small class="text-muted">Torneo de baloncesto este sábado</small>
                            </div>
                            <small class="ms-auto text-muted">Ayer</small>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex align-items-center">
                            <div class="bg-warning bg-opacity-10 text-warning rounded-circle d-flex align-items-center justify-content-center me-3" 
                                 style="width: 40px; height: 40px;">
                                <i class="bi bi-exclamation-triangle"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Recordatorio de pago</h6>
                                <small class="text-muted">5 alumnos con pagos pendientes</small>
                            </div>
                            <small class="ms-auto text-muted">Hace 3 días</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('styles')
<style>
    .app-content {
        padding: 20px;
        background-color: #f8f9fa;
    }
    
    .tile {
        background: #fff;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        height: 100%;
    }
    
    .mini-calendar {
        border: 1px solid #dee2e6;
        border-radius: 8px;
        overflow: hidden;
    }
    
    .calendar-day {
        transition: all 0.2s ease;
    }
    
    .calendar-day:hover {
        background-color: #f1f3f5;
        transform: scale(1.05);
        z-index: 1;
        box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }
    
    .calendar-day.selected {
        background-color: #e7f5ff;
        border: 2px solid #0d6efd;
    }
    
    .app-title h1 {
        font-size: 1.8rem;
        font-weight: 600;
    }
    
    .list-group-item {
        border-radius: 8px !important;
        margin-bottom: 8px;
        border: none;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    }
</style>
@endpush

@push('scripts')
<script>
    $(document).ready(function() {
        // Seleccionar día en el calendario
        $('.calendar-day').click(function() {
            $('.calendar-day').removeClass('selected');
            $(this).addClass('selected');
            
            const day = $(this).data('day');
            const month = $('#monthSelector').val().split('-')[1];
            const year = $('#monthSelector').val().split('-')[0];
            
            // Aquí podrías cargar eventos para este día desde el servidor
            $('#dailyEvents h5').html(`Actividades para el ${day}/${month}/${year}`);
        });
        
        // Cambiar mes
        $('#monthSelector').change(function() {
            // Aquí podrías cargar eventos para el mes seleccionado
            console.log('Mes cambiado a:', $(this).val());
        });
        
        // Navegación entre meses
        $('#prevMonth').click(function() {
            const current = $('#monthSelector').val();
            const date = new Date(current + '-01');
            date.setMonth(date.getMonth() - 1);
            $('#monthSelector').val(date.toISOString().slice(0, 7));
        });
        
        $('#nextMonth').click(function() {
            const current = $('#monthSelector').val();
            const date = new Date(current + '-01');
            date.setMonth(date.getMonth() + 1);
            $('#monthSelector').val(date.toISOString().slice(0, 7));
        });
        
        // Seleccionar hoy por defecto
        const today = new Date().getDate();
        $(`.calendar-day[data-day="${today}"]`).click();
    });
</script>
@endpush
  <!-- Horarios
  <div class="row">
    <div class="col-12">
      <div class="tile p-4 shadow-sm mb-4 rounded-4">
        <h3 class="tile-title mb-3"><i class="bi bi-clock-history me-2"></i>Horarios</h3>
        <div class="table-responsive">
          <table class="table table-striped table-hover align-middle mb-0">
            <thead class="table-light">
              <tr>
                <th>Día</th>
                <th>Hora inicio</th>
                <th>Hora fin</th>
                <th>Actividad</th>
                <th>Estado</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              Se crean las tabalas  -->
              <!-- <tr>
                <td>Lunes</td>
                <td>08:00</td>
                <td>09:30</td>
                <td>----------</td>
                <td><span class="badge bg-success">Confirmado</span></td>
                <td> -->
                  <!-- Boton de editar y eliminar -->
                  <!-- <button
                    class="btn btn-sm btn-outline-primary me-1"
                    data-bs-toggle="modal" data-bs-target="#editHorarioModal"
                    data-dia="Lunes"
                    data-inicio="08:00"
                    data-fin="09:30"
                    data-actividad="----------"
                    data-estado="Confirmado"> <i class="bi bi-pencil"></i>
                  </button>
                  <button class="btn btn-sm btn-outline-danger">
                    <i class="bi bi-trash"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>Martes</td>
                <td>10:00</td>
                <td>11:30</td>
                <td>----------</td>
                <td><span class="badge bg-warning text-dark">Pendiente</span></td>
                <td> -->
                  <!-- Boton de editar y eliminar -->
                  <!-- <button
                    class="btn btn-sm btn-outline-primary me-1"
                    data-bs-toggle="modal" data-bs-target="#editHorarioModal"
                    data-dia="Lunes"
                    data-inicio="08:00"
                    data-fin="09:30"
                    data-actividad="----------"
                    data-estado="Confirmado"> <i class="bi bi-pencil"></i>
                  </button>
                  <button class="btn btn-sm btn-outline-danger">
                    <i class="bi bi-trash"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>Miércoles</td>
                <td>17:00</td>
                <td>18:30</td>
                <td>----------</td>
                <td><span class="badge bg-success">Confirmado</span></td>
                <td> -->
                  <!-- Boton de editar y eliminar -->
                  <!-- <button
                    class="btn btn-sm btn-outline-primary me-1"
                    data-bs-toggle="modal" data-bs-target="#editHorarioModal"
                    data-dia="Lunes"
                    data-inicio="08:00"
                    data-fin="09:30"
                    data-actividad="----------"
                    data-estado="Confirmado"> <i class="bi bi-pencil"></i>
                  </button>
                  <button class="btn btn-sm btn-outline-danger">
                    <i class="bi bi-trash"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>Jueves</td>
                <td>19:00</td>
                <td>20:30</td>
                <td>----------</td>
                <td><span class="badge bg-danger">Cancelado</span></td>
                <td> -->
                  <!-- //Boton de editar y eliminar -->
                  <!-- <button
                    class="btn btn-sm btn-outline-primary me-1"
                    data-bs-toggle="modal" data-bs-target="#editHorarioModal"
                    data-dia="Lunes"
                    data-inicio="08:00"
                    data-fin="09:30"
                    data-actividad="----------"
                    data-estado="Confirmado"> <i class="bi bi-pencil"></i>
                  </button>
                  <button class="btn btn-sm btn-outline-danger">
                    <i class="bi bi-trash"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div> --> 
</main>
<!-- Modal
<div class="modal fade" id="editHorarioModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form id="editHorarioForm" action="controllers/horarios.controlador.php?a=guardar" method="post">
        <input type="hidden" name="id" id="id">
        <div class="modal-header">
          <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>Editar Horario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="dia" class="form-label">Día</label>
            <input type="text" id="dia" name="dia" class="form-control" readonly>
          </div>
          <div class="mb-3">
            <label for="inicio" class="form-label">Hora inicio</label>
            <input type="time" id="inicio" name="inicio" class="form-control">
          </div>
          <div class="mb-3">
            <label for="fin" class="form-label">Hora fin</label>
            <input type="time" id="fin" name="fin" class="form-control">
          </div>
          <div class="mb-3">
            <label for="actividad" class="form-label">Actividad</label>
            <input type="text" id="actividad" name="actividad" class="form-control">
          </div>
          <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select id="estado" name="estado" class="form-select">
              <option value="Confirmado">Confirmado</option>
              <option value="Pendiente">Pendiente</option>
              <option value="Cancelado">Cancelado</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>
      </form>
    </div>
  </div>
</div> -->
