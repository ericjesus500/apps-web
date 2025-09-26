<?php

class Autor{
  public $nombre = "Jhon";
  public $apellido = "Mircha";
  public $profesion = "Desarrollador Frontend";
  public $edad = 30;

  public function getDatosAutor(){

    echo "<span class='text-decoration-underline'>Datos del Autor: </span>";
    echo "<br /> Nombre: " . $this->nombre;
    echo "<br /> Apellido: " . $this->apellido;
    echo "<br /> Profesión: " . $this->profesion;
    echo "<br /> Edad: " . $this->edad;
  }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/bootstrap533/css/bootstrap.min.css">
  <title>La Pseudo-variable $this</title>
</head>

<body>
  <h1 class="text-center text-primary mt-4">La Pseudo-variable $this</h1>
  <div class="print w-50 m-auto my-5 border rounded p-3">
    <?php

      $autor = new Autor();
      $autor->getDatosAutor();
    
    ?>
  </div>
</body>

</html>