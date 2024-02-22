
<!-- Modal -->
<div class="modal fade" id="eliminaModal" tabindex="-1" aria-labelledby="eliminaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="eliminaModalLabel">Aviso</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Desea eliminar el registro?
      </div>

      <div class="modal-footer">
        <form action="elimina.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" id="id">        	
		      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill me-2"></i>Cerrar</button>
		      <button type="submit" class="btn btn-danger"><i class="bi bi-file-plus-fill me-2"></i>Eliminar</button>
        	
        </form>
      </div>

      </div>      
    </div>
  </div>
</div>