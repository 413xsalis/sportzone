<main class="app-content">
  <div class="app-title d-flex justify-content-between align-items-center">
    <div>
      <h1><i class="bi bi-speedometer"></i> BIENVENIDO</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ul>
  </div>
  <div class="row mb-4">
    <div class="col-md-6">
      <div class="tile">
        <h3 class="tile-title">Calendario</h3>
        <input type="date" class="form-control">
      </div>
    </div>
    <div class="col-lg-3 mb-2">
      <div class="d-flex justify-content-center">
        <img
          src="assets/images/depor.jpg"
          alt="Deporte"
          class="img-fluid rounded-4 shadow-sm"
          style="width: 100%; height: auto; max-height: 300px; object-fit: contain;">
      </div>
    </div>
  </div>
  <!-- Horarios -->
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
              <!-- Se crean las tabalas  -->
              <tr>
                <td>Lunes</td>
                <td>08:00</td>
                <td>09:30</td>
                <td>----------</td>
                <td><span class="badge bg-success">Confirmado</span></td>
                <td>
                  <!-- Boton de editar y eliminar -->
                  <button
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
                <td>
                  <!-- Boton de editar y eliminar -->
                  <button
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
                <td>
                  <!-- Boton de editar y eliminar -->
                  <button
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
                <td>
                  <!-- Boton de editar y eliminar -->
                  <button
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
  </div>
</main>
<!-- Modal -->
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
</div>
