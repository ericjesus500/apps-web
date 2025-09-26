<?php

include "../../../../../admin/config/conexion.php";

$query = "SELECT guia.guia_id, guia.guia_titulo, guia.guia_href, guia.guia_href_local, autor.autor_nombre as autor 
FROM guia 
INNER JOIN autor
ON guia.guia_autor = autor.autor_id
WHERE guia_categoria ='2'";

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
<title>CSS Guías</title>
</head>

<body>
  <div class="container-fluid mt-2">
    <div class="row">
      <div class="row w-100 m-auto rounded-3">
        <nav class="navbar navbar-expand-lg bg-orange rounded-3">
          <div class="container px-0">
            <a class="navbar-brand text-white" href="/index.php">APPS-WEB</a>
            <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="text-white"><i class="bi bi-list"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item d-sm-inline-block">
                  <a href="https://www.w3.org/TR/CSS/" class="nav-link text-white" target="_blank">CSS Oficial</a>
                </li>
                <li class="nav-item d-sm-inline-block">
                  <a href="/content/cursos/items/css/referencias/referencias.php" class="nav-link text-white">Referencias</a>
                </li>
                <li class="nav-item d-sm-inline-block">
                  <a href="/content/cursos/items/css/guias/guias.php" class="nav-link text-white">Guias</a>
                </li>                
                <li class="nav-item d-sm-inline-block">
                  <a href="/content/cursos/items/css/ejercicios/ejercicios.php" class="nav-link text-white" target="_blank">Ejercicios</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- rpta -->
    <!-- <div class="row w-100 m-auto border my-3" id="rpta"></div> -->
    <!-- TABLA -->
    <div class="row mt-3">
      <div class="col-md-12">
        <div class="table-responsive">
          <table id="add_tecnos" class="table">
            <thead class="table-warning">
              <tr>
                <th class="border" scope="col">Id</th>
                <th class="border" scope="col">Título</th>
                <th class="border" scope="col">Autor</th>
                <th class="border" scope="col">Web del artículo</th>
                <th class="border" scope="col">URL local</th>
              </tr>
            </thead>
            <tbody id="tabla_guia" class="bg-table">
              <?php for ($i = 0; $i <= $countJson - 1; $i++) { ?>

                <tr class="text-white fila">
                  <td><?= $json[$i]['id'] ?></td>
                  <td><?= $json[$i]['titulo'] ?></td>
                  <td><?= $json[$i]['autor'] ?></td>
                  <td><a class="text-primary" href="<?= $json[$i]['web'] ?>" target="_blank"><?= $json[$i]['web'] ?></a></td>
                  <td><a class="text-primary" href="<?= $url . $json[$i]['local'] ?>" target="_blank"><?= $json[$i]['local'] ?></a></td>
                </tr>

              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>  
  <script src="/assets/bootstrap533/js/bootstrap.bundle.min.js"></script>
</body>

</html>