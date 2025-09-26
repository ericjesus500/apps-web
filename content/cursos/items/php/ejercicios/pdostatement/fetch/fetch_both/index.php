<?php include_once "./fetch_both.php" ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/bootstrap533/css/bootstrap.min.css">
  <title>Fetch_Both</title>
  <style>
    .subtitulo {
      color: lightcoral;
    }
  </style>
</head>

<body>
  <div class="container mt-5 mx-auto w-75">
    <h1 class="text-center text-primary my-5">USO DE <span class="subtitulo">PDO::FETCH_BOTH</span></h1>
    <?php
    $obj = new ShowData;
    $data = $obj->verData();
    ?>

    <div class="table-responsive">
      <table class="table table-striped table-hover table-borderless table-primary align-middle">
        <thead class="table-light">
          <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Email</th>
          </tr>
        </thead>
        <?php foreach ($data as $key => $value) { ?>
          <tbody class="table-group-divider">
            <tr class="table-primary">
              <td scope="row"><?= $key ?></td>
              <td><?= $value['nombre'] ?></td>
              <td><?= $value['apellido'] ?></td>
              <td><?= $value['email'] ?></td>
            </tr>
          </tbody>
        <?php } ?>
      </table>
    </div>

  </div>

  <script src="../../assets/bootstrap533/js/bootstrap.bundle.min.js"></script>

</body>

</html>