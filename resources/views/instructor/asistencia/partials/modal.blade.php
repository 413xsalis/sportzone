<div class="modal fade" id="detalleModal{{ $index }}" tabindex="-1" aria-labelledby="detalleModalLabel{{ $index }}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="detalleModalLabel{{ $index }}">Detalles de {{ $alumno['nombre'] }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <p><i class="bi bi-telephone me-2"></i><strong>Teléfono:</strong> {{ $alumno['telefono'] }}</p>
        <p><i class="bi bi-envelope me-2"></i><strong>Correo:</strong> {{ $alumno['correo'] }}</p>
        <p><i class="bi bi-person-circle me-2"></i><strong>Acudiente:</strong> {{ $alumno['acudiente'] }}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
