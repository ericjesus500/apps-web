<?php include_once "./execute1.php"?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap533/css/bootstrap.min.css">
  <title>execute</title>
  <style>
    .subtitulo {
      color: lightcoral;
    }
  </style>
</head>

<body>
  <div class="container mt-5 mx-auto w-75">
    <h1 class="text-center text-primary">USO DE <span class="subtitulo">PDOStatement::execute()</span></h1>
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
        type="email"
        name="email"
        id="email"
        class="form-control"
        placeholder="Ingrese un email" />
        <label for="email" class="form-label">Email</label>
      </div>
      <div class="form-floating form-group my-3">
        <input
        type="text"
        name="passw"
        id="passw"
        class="form-control"
        placeholder="Ingrese un passw" />
        <label for="passw" class="form-label">Passw</label>
      </div>
      <div class="mt-3">
        <button class="btn btn-primary" type="submit">Guardar</button>
      </div>
    </form>
  </div>

</body>

</html>