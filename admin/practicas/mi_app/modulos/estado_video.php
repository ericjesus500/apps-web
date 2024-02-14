<?php
include "../templates/head_mi_app.php";
?>
<div class="container-fluid content">
  <div class="row m-auto g-3">
    <div class="col-12">
      <?php include "../templates/nav_mi_app.php"?>
    </div>
  </div>
  <div class="row m-auto mt-4">
    <!-- FORMULARIO -->
    <div class="col-lg-5 col-md-4 col-sm-12 p-2">
      <form autocomplete="off" action="../acciones/estado_video/evaluarAccion.php" id="formEstadoVideo" method="post" enctype="multipart/form-data">
        <!-- FORM INPUTS -->
        <div class="mb-4">
          <input class="form-control" type="text" name="estado_id" id="estado_id" placeholder="Id Estado" disabled>
        </div>
        <div class="mb-4">
          <input class="form-control" type="text" name="estado_nombre" id="estado_nombre" placeholder="Nombre del Estado">
        </div>
        <!-- FORM BUTTONS -->
        <div class="mb-4 text-center">
          <button class="btn btn-success" type="button" name="accion" value="Agregar" id="agregar"><i class="bi bi-plus-square me-2 text-white"></i>Agregar</button>
          <button class="btn btn-warning" type="button" name="accion" value="Modificar" id="modificar" disabled><i class="bi bi-pencil-square text-dark me-2"></i>Modificar</button>
          <button class="btn btn-danger" type="button" name="accion" value="Cancelar" id="cancelar" disabled><i class="bi bi-x-square text-white me-2"></i>Cancelar</button>
        </div>
        <!-- <div id="rpta" class="border"></div> -->
      </form>
    </div>
    <!-- TABLA -->
    <div class="col-lg-7 col-md-8 col-sm-12 p-2">
      <div class="mb-3">
        <button class="btn btn-skyblue_2" type="button" id="btnMostrarTodo">Mostrar Todo</button>
      </div>
      <div id="table_view">
        <?php include "../vistas/ver_estado_video.php";?>
      </div>
    </div>
  </div>
</div>

<script src="./js/estado_video.js"></script>

<?php include "../templates/footer_mi_app.php"?>