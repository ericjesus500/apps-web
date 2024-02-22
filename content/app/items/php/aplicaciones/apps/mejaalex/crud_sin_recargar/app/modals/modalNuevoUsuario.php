
<!-- Modal -->
<div class="modal fade" id="nuevoUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Nuevo Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form_agregar">
          <div class="mb-3">
            <label for="agg_usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="agg_usuario" name="agg_usuario">
          </div>

          <div class="mb-3">
            <label for="agg_contrasenia" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="agg_contrasenia" name="agg_contrasenia">
          </div>

          <div class="mb-3">
            <label for="agg_correo" class="form-label">Correo</label>
            <input type="text" class="form-control" id="agg_correo" name="agg_correo">
          </div>

          <div class="mb-3">
            <label for="agg_telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="agg_telefono" name="agg_telefono">
          </div>
        
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" id="agregar_adm">Agregar</button>
        </form>
      </div>      
    </div>
  </div>
</div>