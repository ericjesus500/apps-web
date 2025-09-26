<?php include_once "./fetch_object.php" ?>
<?php
  if ($_POST) {
    $id = isset($_POST['id']) ? $_POST['id'] : "";
    $obj = new ShowData;
    $data = $obj->verData($id);    
  }
?>
  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap533/css/bootstrap.min.css">
    <title>PDOStatement::fetchObject</title>
    <style>
      .subtitulo {
        color: lightcoral;
      }
    </style>
  </head>

  <body>
    <div class="container mt-5 mx-auto w-75">
      <h1 class="text-center text-primary my-5">USO DE <span class="subtitulo">PDOStatement::fetchObject()</span></h1>

      <div class="row">
        <div class="col-md-12">
          <form action="" method="post">
            <div class="input-group my-5 w-75 mx-auto">
              <span class="input-group-text" id="basic-addon1">Ingresar Registro(ID) a buscar: </span>
              <input id="id" name="id" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
              <button class="btn btn-primary" type="submit">Buscar Registro de ID::</button>
            </div>
          </form>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
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

              <tbody class="table-group-divider">
                <tr class="table-primary">
                  <?php foreach ($data as $value) { ?>
                    <td><?= $value ?></td>
                  <?php } ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


    <script src="../assets/bootstrap533/js/bootstrap.bundle.min.js"></script>

  </body>

  </html>