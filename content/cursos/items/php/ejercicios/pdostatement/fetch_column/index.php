<?php include_once "./fetch_column.php" ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap533/css/bootstrap.min.css">
  <title>PDOStatement::fetchColumn</title>
  <style>
    .subtitulo {
      color: lightcoral;
    }
  </style>
</head>

<body>
  <div class="container mt-5 mx-auto w-75">
    <h1 class="text-center text-primary my-5">USO DE <span class="subtitulo">PDOStatement::fetchColumn()</span></h1>
    <?php
    $obj = new ShowData;
    $data = $obj->verData();
    ?>

    <div class="table-responsive">
      <table class="table table-striped table-hover table-borderless table-primary align-middle">
        <thead class="table-light">
          <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Email</th>
          </tr>
        </thead>  
        <tbody class="table-group-divider">
          <tr class="table-primary">
            <td><?= $data[0] ?></td>
          </tr>
          <tr class="table-primary">
            <td scope="row"></td>
            <td><?= $data[1] ?></td>
          </tr>
          <tr class="table-primary">
            <td scope="row"></td>
            <td scope="row"></td>
            <td><?= $data[2] ?></td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>

  <script src="../../assets/bootstrap533/js/bootstrap.bundle.min.js"></script>

</body>

</html>