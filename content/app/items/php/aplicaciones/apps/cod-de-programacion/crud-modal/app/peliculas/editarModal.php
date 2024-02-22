
<!-- Modal -->
<div class="modal fade" id="editaModal" tabindex="-1" aria-labelledby="editaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editaModalLabel">Editar Registro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="actualiza.php" method="post" enctype="multipart/form-data">

        	<input type="hidden" name="id" id="id" />

        	<div class="mb-3">
        		<label for="nombre" class="form-label">Nombre:</label>
        		<input type="text" name="nombre" id="nombre" class="form-control" required />
        	</div>

        	<div class="mb-3">
        		<label for="descripcion" class="form-label">Descripcion:</label>
        		<textarea name="descripcion" id="descripcion" class="form-control" rows="3" required></textarea>
        	</div>

        	<div class="mb-3">
        		<label for="genero_" class="form-label">Genero:</label>
        		<select name="genero" id="genero" class="form-select" required />
        			<option value="">Seleccionar...</option>
        			<?php while ($row_genero=$generos->fetch_assoc()) { ?>
      				<option value="<?= $row_genero["id_genero"] ?>"><?= $row_genero["nombre_genero"]?></option>
        			<?php } ?>
        		</select>
        	</div>

          <div class="mb-3">
            <img id="img_poster" src="" width="100">
          </div>

        	<div class="mb-3">
        		<label for="poster" class="form-label">Póster:</label>
        		<input type="file" name="poster" id="poster" class="form-control" />
        	</div>

        	<div class="">
		        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill me-2"></i>Cerrar</button>
		        <button type="submit" class="btn btn-primary"><i class="bi bi-file-plus-fill me-2"></i>Guardar</button>
        	</div>

        </form>

      </div>
    </div>
  </div>
</div>