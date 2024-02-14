<?php
include "../templates/head_mi_app.php";
?>

<div class="container-fluid content">
  <div class="row m-auto">
    <div class="col-12">
      <?php include "../templates/nav_mi_app.php"?>
    </div>
  </div>
  <!-- form -->
  <div class="container-fluid content">
    <div class="row mt-3">
      <!-- input datos -->
      <div class="col-md-12">
        <div class="row m-auto">
          <!-- Imagen -->
          <div class="col-md-4 mb-4">
            <div class="row w-100">
              <img class="img_fluid" src="../../img/guias.jpeg" alt="guias">
              <div id="data" class="w-100 m-auto text-center mt-4 border border-warning rounded"></div>
            </div>
          </div>
          <!-- formulario -->
          <div class="col-md-8 m-auto px-3">
            <div class="row card bg-skyblue_2 p-3">
              <form autocomplete="off" action="../acciones/guia/evaluarAccion.php" enctype="multipart/form-data" id="formGuia" method="post">
                <!-- datos input -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3 w-25">
                      <label class="form-label" for="guia_id">Guia ID</label>
                      <input class="form-control" type="text" name="guia_id" id="guia_id" disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label class="form-label" for="guia_titulo">Título</label>
                    <input class="form-control mb-3" type="text" name="guia_titulo" id="guia_titulo" placeholder="Título de la Guía">
                    <label class="form-label" for="guia_href">Url Web</label>
                    <input class="form-control mb-3" type="text" name="guia_href" id="guia_href" placeholder="URL de la guia">
                    <label class="form-label" for="guia_href_local">Url Local</label>
                    <input class="form-control mb-3" type="text" name="guia_href_local" id="guia_href_local" placeholder="URL Local de la guia">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label for="guia_categoria" class="form-label">Categoria</label>
                    <select class="form-select mb-3" name="guia_categoria" id="guia_categoria">
                      <option disabled selected>Seleccione una categoría</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="guia_Autor" class="form-label">Autor</label>
                    <select class="form-select" name="guia_autor" id="guia_autor">
                      <option disabled selected>Seleccione un Autor</option>
                    </select>
                  </div>
                </div>
              </form>
            </div>
            <!-- Botones -->
            <div class="row mt-4">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <div class="d-flex justify-content-evenly align-items-center">
                  <button class="btn btn-success" type="button" name="accion" value="Agregar" id="agregar"><i class="bi bi-plus-square me-2 text-white"></i>Agregar</button>
                  <button class="btn btn-warning" type="button" name="accion" value="Modificar" id="modificar" disabled><i class="bi bi-pencil-square text-dark me-2"></i>Modificar</button>
                  <button class="btn btn-danger" type="button" name="accion" value="Cancelar" id="cancelar" disabled><i class="bi bi-x-square text-white me-2"></i>Cancelar</button>
                </div>
              </div>
              <div class="col-md-3 border mt-5" id="rpta">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- tabla -->
      <div class="col-md-12">
        <div class="row m-auto p-2">
          <div class="col-md-12">
            <div class="my-4">
              <button class="btn btn-primary" type="button" id="btnMostrarTodo">Mostrar Todo</button>
            </div>
            <div class="col-md-12">
              <div id="table_view" class="mt-4 w-100">
                <?php include "../vistas/ver_guia.php";?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<script src="./js/guia.js"></script>
<?php include "../templates/footer_mi_app.php"?>