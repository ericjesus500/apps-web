<?php
include "../templates/head_mi_app.php";
?>

<div class="container content">
  <div class="row m-auto">
    <div class="col-12">
      <?php include "../templates/nav_mi_app.php"?>
    </div>
    <div class="row m-auto mt-4">
      <!-- FORM -->
      <div class="col-md-4 p-2">
        <form autocomplete="off" action="../acciones/tipo_video/evaluarAccion.php" enctype="multipart/form-data" id="formTipoVideo" method="post">
          <!-- FORM INPUTS -->
          <div class="mb-4">
            <input class="form-control" type="text" name="tipo_video_id" id="tipo_video_id" placeholder="Id Tipo de video" disabled>
          </div>
          <div class="mb-4">
            <input class="form-control" type="text" name="tipo_video_nombre" id="tipo_video_nombre" placeholder="Tipo de video">
          </div>
          <!-- FORM BUTTONS -->
          <div class="mb-4 text-center">
            <button class="btn btn-success" type="button" name="accion" value="Agregar" id="agregar"><i class="bi bi-plus-square me-2 text-white"></i>Agregar</button>
            <button class="btn btn-warning" type="button" name="accion" value="Modificar" id="modificar" disabled><i class="bi bi-pencil-square text-dark me-2"></i>Modificar</button>
            <button class="btn btn-danger" type="button" name="accion" value="Cancelar" id="cancelar" disabled><i class="bi bi-x-square text-white me-2"></i>Cancelar</button>
          </div>
          <div id="rpta" class="border"></div>
        </form>
      </div>
      <!-- TABLA -->
      <div class="col-md-8 p-2">
        <div class="mb-3">
          <button class="btn btn-skyblue_2" type="button" id="btnMostrarTodo">Mostrar Todo</button>
        </div>
        <div id="table_view">
          <?php include "../vistas/ver_tipo_video.php";?>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="./js/tipo_video.js"></script>

<?php include "../templates/footer_mi_app.php"?>