<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/bootstrap533/css/bootstrap.min.css">
  <title>PDO::FETCH_BOUND</title>
  <style>
    .content {
      width: 80%;
      margin: 50px auto;
    }

    .titulo {
      text-align: center;
      color: blue;
    }

    .subtitulo {
      color: lightcoral;
    }
  </style>
</head>

<body>
  <div class="content">
    <h1 class="titulo">USO DE <span class="subtitulo">PDOStatement::bindColumn()</span></h1>
    <?php
      include_once "./fetch_bound.php";
      $data = new ReadData;
    ?>
    <div class="table-responsive mt-5">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">TITULO</th>
            <th scope="col">URL LOCAL</th>
          </tr>
        </thead>
        <tbody>
        <?= $data->leerData();?>
        </tbody>
      </table>
    </div>
  </div>

</body>

</html>