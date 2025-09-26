<?php
include "../../../../../admin/config/conexion.php";

$query = "SELECT guia.guia_id, guia.guia_titulo, guia.guia_href, guia.guia_href_local, autor.autor_nombre as autor 
FROM guia 
INNER JOIN autor
ON guia.guia_autor = autor.autor_id
WHERE guia_categoria ='4'";

$result = mysqli_query($mysqli, $query);
if (!$result) {
  throw new Exception("Error en la consulta: " . mysqli_error($mysqli));
}


$json = array();

while ($row = mysqli_fetch_array($result)) {
  $json[] = array(
    'id' => $row['guia_id'],
    'titulo' => $row['guia_titulo'],
    'autor' => $row['autor'],
    'web' => $row['guia_href'],
    'local' => $row['guia_href_local'],
  );
}

$countJson = count($json);
$url = "/content/cursos/articulos/";
?>
<?php
include_once "../../../../../templates/header.php";
?>
<link rel="stylesheet" href="/admin/practicas/mi_app/css/data.css">
<title>PHP Guías</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row bg-primary">
      <?php include_once "../templates/navbar-php.php" ?>
      <h1 class="text-center">GUIAS DE PHP</h1>
    </div>
    <!-- BUSCADOR -->
    <div class="row my-3">
      <div class="col-md-12 my-2 d-flex">
        <div class="w-50">
          <input class="w-75 p-2 buscador" type="text" name="buscador" id="buscador" placeholder="Ingrese un dato a buscar">
        </div>
        <div class="w-50 d-flex flex-row-reverse">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-plus-circle-fill me-2 text-white"></i>Nuevo</button>
        </div>
      </div>
    </div>
    <!-- rpta -->
    <div class="row w-100 m-auto my-3" id="rpta"></div>
    <!-- TABLA -->
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <table id="add_tecnos" class="table table-dark">
            <thead class="table-info">
              <tr class="bg-info">
                <th class="" scope="col">Id</th>
                <th class="" scope="col">Título</th>
                <th class="" scope="col">Autor</th>
                <th class="" scope="col">Web del artículo</th>
                <th class="" scope="col">URL local</th>
              </tr>
            </thead>
            <tbody id="tabla_guia" class="bg-dark">
              <?php for ($i = 0; $i <= $countJson - 1; $i++) { ?>

                <tr class="text-white fila">
                  <td><?= $json[$i]['id'] ?></td>
                  <td><?= $json[$i]['titulo'] ?></td>
                  <td><?= $json[$i]['autor'] ?></td>
                  <td><a class="text-amarillo" href="<?= $json[$i]['web'] ?>" target="_blank"><?= $json[$i]['web'] ?></a></td>
                  <td><a class="text-amarillo" href="<?= $url . $json[$i]['local'] ?>" target="_blank"><?= $json[$i]['local'] ?></a></td>
                </tr>

              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- MODAL -->
  <div class="row">
    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="col-12">
              <form autocomplete="off" id="formGuia" action="../acciones/guardaGuia.php" enctype="multipart/form-data">
                <!-- formulario -->
                <div class="row mt-2">
                  <!-- Imagen -->
                  <div class="col-md-4">
                    <div class="row">
                      <img src="../../../../../admin/practicas/img/guias.jpeg" alt="guias">
                      <div id="data" class="text-center bg-warning w-100 rounded"></div>
                    </div>
                  </div>
                  <!-- datos input -->
                  <div class="col-md-8 card bg-skyblue_2 py-3">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3 w-25">
                          <input class="form-control" type="text" name="guia_id" placeholder="Id Guia" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row g-1">
                      <div class="col-md-12">
                        <input class="form-control mb-3" type="text" name="guia_titulo" id="guia_titulo" placeholder="Título del artículo">
                        <input class="form-control mb-3" type="text" name="guia_href" id="guia_href" placeholder="URL de la guia">
                        <input class="form-control mb-3" type="text" name="guia_href_local" id="guia_href_local" placeholder="URL Local de la guia">
                      </div>
                    </div>
                    <div class="row g-1">
                      <div class="col-md-6">
                        <select class="form-select mb-3" name="guia_categoria" id="guia_categoria">
                          <option disabled selected>Seleccione una categoría</option>
                          <div id="categTecnos" class="list-group mt-3"></div>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <select class="form-select" name="guia_autor" id="guia_autor">
                          <option disabled selected>Seleccione un Autor</option>
                        </select>
                      </div>
                    </div>
                    <div class="row" id="rpta"></div>
                  </div>
                </div>
                <!-- Botones -->
                <div class="row mt-4">
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                    <div class="d-flex justify-content-evenly align-items-center">
                    </div>
                  </div>
                  <div class="col-md-4" id="rptData">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-danger" type="button" data-bs-dismiss="modal" name="accion" value="Cancelar" id="cancelar"><i class="bi bi-x-square text-white me-2"></i>Cancelar</button>
            <button class="btn btn-primary" type="submit" name="accion" value="Agregar" id="agregar"><i class="bi bi-plus-square me-2 text-white"></i>Agregar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="/assets/bootstrap533/js/bootstrap.bundle.min.js"></script>
  <script src="./guias.js"></script>
</body>
</html>