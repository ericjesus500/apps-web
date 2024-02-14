<?php 

  include "../../../config/conexion.php";

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

  $queryEstVideo = "SELECT estado_id, estado_nombre AS estado FROM estado_video";
  $resultEstVideo = mysqli_query($mysqli, $queryEstVideo);

  if (!$resultEstVideo) {
    throw new Exception("Error en la consulta: " . mysqli_error($mysqli));
  }

  $queryOrigenVideo = "SELECT origen_id, origen_nombre FROM origen_video";
  $resultOrigenVideo = mysqli_query($mysqli, $queryOrigenVideo);

  if (!$resultOrigenVideo) {
    throw new Exception("Error en la consulta: " . mysqli_error($mysqli));
  }

  $queryTipoVideo = "SELECT tipo_video_id AS tipoID, tipo_video_nombre AS tipoVideo FROM tipo_video";
  $resultTipoVideo = mysqli_query($mysqli, $queryTipoVideo);

  if (!$resultTipoVideo) {
    throw new Exception("Error en la consulta: " . mysqli_error($mysqli));
  }

?>

<?php include "../templates/head_mi_app.php"; ?>

<div class="container-fluid content">
  <!-- NavBar -->
  <div class="row m-auto">
    <div class="col-12">
      <?php include "../templates/nav_mi_app.php"?>
    </div>
  </div>
  <!-- FORMULARIO -->
  <div class="row m-auto mt-4">
    <form autocomplete="off" action="../acciones/videos/evaluarAccion.php" enctype="multipart/form-data" id="formVideo" method="post">
      <div class="m-auto">
        <!-- INPUTS -->
        <div class="row">
          <div class="col-md-8 border border-danger bg-table rounded">
            <div class="my-3 w-100 d-flex">
              <!-- id del video -->
              <div class="w-25 me-5">
                <input class="form-control" type="text" name="video_id" id="video_id" disabled placeholder="Id Video">
              </div>
              <!-- Tipo de video  -->
              <div class="w-50 me-3">
                <select class="form-select" name="video_tipo" id="video_tipo">
                  <option selected disabled>Tipo de video</option>
                  <?php while ($rowTipoVideo = mysqli_fetch_array($resultTipoVideo)) { ?>
                  <option value="<?=$rowTipoVideo['tipoID']?>"><?=$rowTipoVideo['tipoVideo']?></option>"
                  <?php } mysqli_free_result($resultTipoVideo);?>
                </select>
              </div>
              <!-- Nombre Lista -->
              <div class="w-50">
                <input class="form-control" type="hidden" name="video_nombre_lista" id="video_nombre_lista" placeholder="Nombre de la lista">
              </div>
            </div>
            <!-- titulo /url del video -->
            <div class="my-3 w-100">
              <input class="form-control" type="text" name="video_titulo" id="video_titulo" placeholder="Titulo del Video">
            </div>
            <div class="my-3 w-100">
              <input class="form-control" type="text" name="video_url" id="video_url" placeholder="URL del Video">
            </div>
            <div class="my-3 w-100">
              <input class="form-control" type="text" name="video_web" id="video_web" placeholder="WEB del Video">
            </div>
          </div>
          <!-- opciones de listas -->
          <div class="col-md-4 border border-danger bg-table rounded">
            <!-- Tecnologia -->
            <div class="w-100 my-3">
              <select class="form-select" name="video_tecno" id="video_tecno">
                <option selected disabled>Seleccione una tecnología</option>
                <?php while ($rowTecno = mysqli_fetch_array($resultTecno)) { ?>
                <option value="<?=$rowTecno['tecno_id']?>"><?=$rowTecno['tecnologia']?></option>"
                <?php } mysqli_free_result($resultTecno);?>
              </select>
            </div>
            <!-- Autor -->
            <div class="w-100 my-3">
              <select class="form-select" name="video_autor" id="video_autor">
                <option selected disabled>Seleccione un autor</option>
                <?php while ($rowAutor = mysqli_fetch_array($resultAutor)) { ?>
                <option value="<?=$rowAutor['autor_id']?>"><?=$rowAutor['autor']?></option>"
                <?php } mysqli_free_result($resultAutor);?>
              </select>
            </div>
            <!-- Origen del video -->
            <div class="w-100 my-3">
              <select class="form-select" name="video_origen" id="video_origen">
                <option selected disabled>Seleccione origen del video</option>
                <?php while ($rowOrigenVideo = mysqli_fetch_array($resultOrigenVideo)) { ?>
                <option value="<?=$rowOrigenVideo['origen_id']?>"><?=$rowOrigenVideo['origen_nombre']?></option>"
                <?php } mysqli_free_result($resultOrigenVideo);?>
              </select>
            </div>
            <!-- Estado del video -->
            <div class="w-100 my-3">
              <select class="form-select" name="video_estado" id="video_estado">
                <option selected disabled>Seleccione el estado del video</option>
                <?php while ($rowEstVideo = mysqli_fetch_array($resultEstVideo)) { ?>
                <option value="<?=$rowEstVideo['estado_id']?>"><?=$rowEstVideo['estado']?></option>"
                <?php } mysqli_free_result($resultEstVideo);?>
              </select>
            </div>
          </div>
        </div>
        <!-- BOTONES -->
        <div class="row my-5">
          <div class="col-md-12">
            <div class="w-100 text-center">
              <button class="btn btn-primary" type="button" name="accion" value="Agregar" id="agregar"><i class="bi bi-plus-square me-2 text-white"></i>Agregar</button>
              <button class="btn btn-warning" type="button" name="accion" value="Modificar" id="modificar" disabled><i class="bi bi-pencil-square text-dark me-2"></i>Modificar</button>
              <button class="btn btn-danger" type="button" name="accion" value="Cancelar" id="cancelar" disabled><i class="bi bi-x-square text-white me-2"></i>Cancelar</button>
            </div>
          </div>
        </div>
        <div class="row border w-50 m-auto" id="rpta"></div>
      </div>
    </form>
  </div>
  <!-- <div class="my-3 border border-info p-5"></div> -->

  <!-- TABLA-->
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
        <?php include "../vistas/ver_tabla_videos.php";?>
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
  <!-- FIN TABLA -->



  <script src="./js/videos.js"></script>
  <?php include "../templates/footer_mi_app.php"; ?>