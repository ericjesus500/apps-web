<?php
include "../templates/head_mi_app.php";
?>

<div class="container-fluid content">
  <div class="row m-auto g-3">
    <div class="col-12">
      <?php include "../templates/nav_mi_app.php"?>
    </div>
  </div>
  <!-- form -->
  <div class="container-fluid">
    <div class="row m-auto mt-4">
      <div class="col-12">
        <form autocomplete="off" action="../acciones/autor/evaluarAccion.php" enctype="multipart/form-data" id="formAutor" method="post">
          <!-- formulario -->
          <div class="row mt-2">
            <!-- inputs -->
            <div class="col-md-8 card bg-skyblue_2 py-4 mb-4">
              <div class="row">
                <div class="col-md-12">
                  <div class="mb-4 w-25">
                    <input class="form-control" type="text" name="autor_id" id="input_id" placeholder="Id Autor" disabled>
                  </div>
                </div>
              </div>
              <div class="mb-2">
                <div class="row g-2">
                  <div class="col-md-6">
                    <input class="form-control" type="text" name="autor_nombre" id="input_autor" placeholder="Nombre del Autor">
                  </div>
                  <div class="col-md-6">
                    <input class="form-control" type="text" name="autor_canal" id="input_canal" placeholder="Canal de Youtube">
                  </div>
                </div>
              </div>
              <div class="mb-2">
                <div class="row g-1">
                  <div class="col-md-6">
                    <input class="form-control" type="text" name="autor_url" id="input_url" placeholder="URL del canal de Youtube">
                  </div>
                  <div class="col-md-6">
                    <input class="form-control" type="text" name="autor_web" id="input_web" placeholder="Web del autor">
                  </div>
                </div>
              </div>
              <div class="mb-2">
                <div class="row g-1">
                  <div class="col-md-6">
                    <input class="form-control me-2" type="text" name="autor_twitter" id="input_twitter" placeholder="Twitter">
                  </div>
                  <div class="col-md-6">
                    <input class="form-control" type="text" name="autor_facebook" id="input_facebook" placeholder="Facebook">
                  </div>
                </div>
              </div>
              <div class="mb-2">
                <div class="row g-1">
                  <div class="col-md-6">
                    <input class="form-control me-2" type="text" name="autor_twitch" id="input_twitch" placeholder="Twitch">
                  </div>
                  <div class="col-md-6">
                    <input class="form-control" type="text" name="autor_discord" id="input_discord" placeholder="Discord">
                  </div>
                </div>
              </div>
              <div id="data" class="text-center bg-warning w-100 rounded"></div>
            </div>
            <!-- imagen -->
            <div class="col-md-4">
              <div class="mb-4">
                <label for="autor_file" class="form-label">Seleccione una imagen</label>
                <input class="form-control" type="file" name="autor_file" id="autor_file">
              </div>
              <div class="shadow p-3 bg-body-tertiary rounded d-flex justify-content-center align-items-center m-auto card" style="width: 18rem; height: 18rem;">
                <img class="img-75" src="" alt="" id="portada">
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
              <?php include "../vistas/ver_autor.php";?>
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

<script src="./js/autor.js"></script>
<?php include "../templates/footer_mi_app.php"?>