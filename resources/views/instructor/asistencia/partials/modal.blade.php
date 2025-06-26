<div class="modal fade" id="detalles{{ $estudiante->documento }}" tabindex="-1"
  aria-labelledby="modalLabel{{ $estudiante->documento }}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalLabel{{ $estudiante->documento }}">
          Detalles del Estudiante
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>

      <div class="modal-body">
        <p><strong>Documento:</strong> {{ $estudiante->documento }}</p>
        <p><strong>Nombre:</strong> {{ $estudiante->nombre_1 }} {{ $estudiante->apellido_1 }}</p>
        <p><strong>Teléfono:</strong> {{ $estudiante->telefono }}</p>
        <p><strong>Correo:</strong> {{ $estudiante->correo ?? 'No registrado' }}</p>
        <hr>
        <p><strong>Acudiente:</strong> {{ $estudiante->nombre_contacto }}</p>
        <p><strong>Teléfono acudiente:</strong> {{ $estudiante->telefono_contacto }}</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>