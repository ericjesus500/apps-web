
<!-- Modal -->
<div class="modal fade" id="editarUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">        
        <form id="form_adm">
          <div class="mb-3">
            <label for="id_" class="form-label">ID Usuario</label>
            <input type="text" class="form-control" id="id_" name="id_">
          </div>

          <div class="mb-3">
            <label for="usuario_" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="usuario_" name="usuario_">
          </div>

          <div class="mb-3">
            <label for="correo_" class="form-label">Correo</label>
            <input type="text" class="form-control" id="correo_" name="correo_">
          </div>

          <div class="mb-3">
            <label for="telefono_" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono_" name="telefono_">
          </div>

          <div class="mb-3">
            <label class="form-label">Rol</label>
            <select name="rol_" id="rol_" class="form-select form-control">
              <option value="administrador">Administrador</option>
              <option value="cliente">Cliente</option>
              <option value="editor">Editor</option>
            </select>
          </div>
        
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-info" id="modificar_adm">Modificar</button>
        </form>
      </div>      
    </div>
  </div>
</div>