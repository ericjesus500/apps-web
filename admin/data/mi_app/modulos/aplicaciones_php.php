<?php 

  include "../../../../admin/config/conexion.php";

  $queryTecno = "SELECT tecno_id, tecno_nombre AS tecnologia FROM tecnologia";
  $resultTecno = mysqli_query($mysqli, $queryTecno);

  if (!$resultTecno) {
    throw new Exception("Error en la consulta: " . mysqli_error($mysqli));
  }

  $queryAutor = "SELECT autor_id, autor_nombre AS autor FROM autor";
  $resultAutor = mysqli_query($mysqli, $queryAutor);

  if (!$resultAutor) {
    throw new Exception("Error en la consulta: " . mysqli_error($mysqli));
  }

?>

<?php include "../templates/head_mi_app.php"; ?>

<div class="container-fluid content">
  <div class="row m-auto">
    <div class="col-12">
      <?php include "../templates/nav_mi_app.php"?>
    </div>
  </div>
  <!-- form -->
  <div class="container-fluid content">
    <div class="row m-auto mt-3">
      <!-- input datos -->
      <div class="col-md-12">
        <!-- formulario -->
        <form autocomplete="off" action="../acciones/app/evaluarAccion.php" enctype="multipart/form-data" id="formApp" method="post">
          <div class="row mt-2">
            <!-- inputs -->
            <div class="col-md-8 card bg-skyblue_2 py-4 mb-4">
              <div class="row">
                <div class="col-md-12">
                  <div class="mb-4 w-25">
                    <input class="form-control" type="text" name="app_id" id="app_id" placeholder="Id App" disabled>
                  </div>
                </div>
              </div>
              <div class="mb-2">
                <div class="row g-2">
                  <div class="col-md-6">
                    <input class="form-control" type="text" name="app_nombre" id="app_nombre" placeholder="Nombre de App">
                  </div>
                  <div class="col-md-6">
                    <select class="form-select mb-3" name="app_autor" id="app_autor">
                      <option disabled selected>Seleccione un autor</option>
                      <?php while ($rowAutor = mysqli_fetch_array($resultAutor)) { ?>
                      <option value="<?=$rowAutor['autor_id']?>"><?=$rowAutor['autor']?></option>"
                      <?php } mysqli_free_result($resultAutor);?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="mb-2">
                <div class="row g-1">
                  <div class="col-md-6">
                    <input class="form-control" type="text" name="app_url" id="app_url" placeholder="Url">
                  </div>
                  <div class="col-md-6">
                    <select class="form-select mb-3" name="app_tecno" id="app_tecno">
                      <option disabled selected>Seleccione una tecnología</option>
                      <?php while ($rowTecno = mysqli_fetch_array($resultTecno)) { ?>
                      <option value="<?=$rowTecno['tecno_id']?>"><?=$rowTecno['tecnologia']?></option>"
                      <?php } mysqli_free_result($resultTecno);?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="w-100 px-3">
                  <label class="form-label" for="app_descripcion">Descripción</label>
                  <textarea class="form-control textarea" form="formApp" name="app_descripcion" id="app_descripcion"></textarea>
                </div>
              </div>
            </div>
            <!-- imagen -->
            <div class="col-md-4">
              <div class="shadow p-3 bg-body-tertiary rounded d-flex justify-content-center align-items-center m-auto card" style="width: 18rem; height: 18rem;">
                <img class="img-75" src="../../img/apps.png" alt="portada" id="portada">
              </div>
            </div>
          </div>
          <!-- botones -->
          <div class="row mt-4">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="d-flex justify-content-evenly align-items-center">
                <button class="btn btn-success" type="button" name="accion" value="Agregar" id="agregar"><i class="bi bi-plus-square me-2 text-white"></i>Agregar</button>
                <button class="btn btn-warning" type="button" name="accion" value="Modificar" id="modificar" disabled><i class="bi bi-pencil-square text-dark me-2"></i>Modificar</button>
                <button class="btn btn-danger" type="reset" name="accion" value="Cancelar" id="cancelar" disabled><i class="bi bi-x-square text-white me-2"></i>Cancelar</button>
                <!-- <button class="btn btn-primary" type="button" name="accion" value="Pruebas" id="pruebas"><i class="bi bi-x-square text-white me-2"></i>Pruebas</button> -->
              </div>
            </div>
            <div class="col-md-3 mt-4 border" id="rpta"></div>
          </div>
        </form>
        <!-- tabla -->
        <div class="row m-auto p-2">
          <div class="col-md-12">
            <form>
              <div class="row mt-5">
                <div class="col-md-6 col-sm-12 mb-5">
                  <div class="col-md-12 d-flex justify-content-evenly align-items-md-center">
                    <label class="px-2" for="num_registros">Mostrar: </label>
                    <select class="form-select w-25" name="num_registros" id="num_registros">
                      <option value="10">10</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                    </select>
                    <label class="px-2">Filas</label>
                    <input class="btn btn-primary" type="button" value="Mostrar Todo" id="mostrarTodo">
                  </div>
                </div>
                <!-- BUSCADOR -->
                <div class="col-md-6 col-sm-12">
                  <div class="d-flex flex-row-reverse">
                    <input class="w-75 p-3 buscador" type="text" name="buscador" id="buscador" placeholder="Ingrese un dato a buscar">
                  </div>
                </div>
              </div>
            </form>
            <div id="table_view" class="mt-4 w-100">
              <?php include "../vistas/ver_aplicaciones.php";?>
            </div>
          </div>
        </div>
        <!-- Paginas -->
        <div class="row mt-4 w-100 mb-5">
          <div class="col-md-6">
            <label id="lbl-total"></label>
          </div>
          <div class="col-md-6 d-flex flex-row-reverse" id="nav-paginacion"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="./js/aplicaciones_php.js"></script>
<?php include "../templates/footer_mi_app.php"?>