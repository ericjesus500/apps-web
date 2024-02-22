
<!-- Modal -->
<div class="modal fade" id="eliminarUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirme eliminar usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form_del">
          <div class="mb-3">
            <label for="id" class="col-form-label" id="del_id_label"></label>
            <input type="text" class="form-control" id="del_id" name="del_id" hidden>
          </div>

          <div class="mb-3">
            <label for="usuario" class="col-form-label" id="del_usuario_label" name="del_usuario_label"></label>
            <input type="text" class="form-control" id="del_usuario" name="del_usuario" hidden>
          </div>
        
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger" id="eliminar_adm">Eliminar</button>
        </form>
      </div>      
    </div>
  </div>
</div>