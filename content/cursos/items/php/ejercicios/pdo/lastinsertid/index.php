<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap533/css/bootstrap.min.css">
  <title>lastInsertId</title>
  <style>
    .subtitulo {
      color: lightcoral;
    }
  </style>
</head>

<body>
  <div class="container mt-5 mx-auto w-75">
    <h1 class="text-center text-primary">USO DE <span class="subtitulo">PDO::lastInsertId()</span></h1>
    <h2 style="color:brown;">Uso con marcadores tipo ?</h2>
    <form action="" method="post">
      <div class="form-floating form-group my-3">
        <input
          type="text"
          name="nombre"
          id="nombre"
          class="form-control"
          placeholder="Ingrese un nombre" />
        <label for="nombre" class="form-label">Nombre</label>
      </div>
      <div class="form-floating form-group my-3">
        <input
          type="text"
          name="apellido"
          id="apellido"
          class="form-control"
          placeholder="Ingrese un apellido" />
        <label for="apellido" class="form-label">Apellido</label>
      </div>
      <div class="form-floating form-group my-3">
        <input
          type="email"
          name="email"
          id="email"
          class="form-control"
          placeholder="Ingrese un email" />
        <label for="email" class="form-label">Email</label>
      </div>
      <div class="mt-3">
        <button class="btn btn-primary" type="submit">Guardar</button>
      </div>
    </form>
  </div>
  <script src="../assets/bootstrap533/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php

if ($_POST) {
  $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
  $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : "";
  $email = isset($_POST['email']) ? $_POST['email'] : "";

  if ($nombre != "" && $apellido != "" && $email != "") {

    include_once "./lastinsertid.php";

    $data = new AgregarData;
    $data->newData($nombre, $apellido, $email);
  } else {
    die("Ingrese todos los datos solicitados");
  }
}

?>