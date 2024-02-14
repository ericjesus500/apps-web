<?php
include "../templates/head_mi_app.php";
?>
<div class="container-fluid content">
  <div class="row m-auto">
    <div class="col-12">
      <?php include "../templates/nav_mi_app.php"?>
    </div>
  </div>
  <div class="row m-auto mt-4">
    <!-- FORMULARIO -->
    <div class="col-lg-5 col-md-4 col-sm-12 p-2">
      <div class="div-form p-2 rounded">
        <form autocomplete="off" action="../acciones/tecnologia/evaluarAccion.php" enctype="multipart/form-data" id="formTecno" method="post">
          <!-- FORM - INPUTS -->
          <div class="mb-4">
            <input class="form-control" type="text" name="tecno_id" id="tecno_id" placeholder="Id Tecnologia" disabled>
          </div>
          <div class="mb-4">
            <input class="form-control" type="text" name="tecno_nombre" id="tecno_nombre" placeholder="Tecnologia">
          </div>
          <div class="mb-4 div-select">
            <label for="tecno_file" class="form-label">Seleccione una imagen</label>
            <input class="form-control" type="file" name="tecno_file" id="tecno_file">
          </div>
          <div class="w-100 shadow p-3 bg-body-tertiary rounded d-flex justify-content-center align-items-center m-auto card" style="width: 18rem; height: auto;">
            <img class="img-fluid" src="" alt="" id="portada">
          </div>
          <!-- FORM - BOTONES -->
          <div class="col-md-12 mt-5 mb-4 text-center">
            <button class="btn btn-success" type="button" name="accion" value="Agregar" id="agregar"><i class="bi bi-plus-square me-2 text-white"></i>Agregar</button>
            <button class="btn btn-warning" type="button" name="accion" value="Modificar" id="modificar" disabled=><i class="bi bi-pencil-square text-dark me-2"></i>Modificar</button>
            <button class="btn btn-danger" type="button" name="accion" value="Cancelar" id="cancelar" disabled><i class="bi bi-x-square text-white me-2"></i>Cancelar</button>
          </div>
          <div id="rpta" class="border"></div>
        </form>
      </div>
    </div>
    <!-- TABLA -->
    <div class="col-lg-7 col-md-8 col-sm-12 p-2">
      <div class="mb-3">
        <button class="btn btn-skyblue_2" type="button" id="btnMostrarTodo">Mostrar Todo</button>
      </div>
      <div id="table_view">
        <?php include "../vistas/ver_tecnologia.php";?>
      </div>
    </div>
  </div>
</div>

<script src="./js/tecnologia.js"></script>

<?php include "../templates/footer_mi_app.php"?>