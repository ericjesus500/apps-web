<?php 

  Class Autor {
    public $nombre;
    public $apellido;
    public $profesion;
    public $edad;

    public static function getDatosAutor($nombre, $apellido, $profesion, $edad){      

      echo "<span class='fs-5 text-decoration-underline fw-bold'>Datos del Autor:</span> ";
      echo "<br /> Nombre: " . $nombre;
      echo "<br /> Apellido: " . $apellido;
      echo "<br /> Profesión: " . $profesion;
      echo "<br /> Edad: " . $edad;
    }
  }  

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/bootstrap533/css/bootstrap.min.css">
  <title>Métodos estaticos</title>
  <style>
    .text-lila{
      color:purple;
    }
    .text-tomato{
      color:tomato;
    }
  </style>
</head>

<body>
  <h1 class="text-center text-primary mt-4">Métodos Estáticos</h1>
  <div class="print w-50 m-auto my-5 border rounded p-3">
    <?php

    echo "<p class='fw-bold text-decoration-underline fs-4'>Forma de Uso:</p>";
    echo "<p class='fs-5'> <span class='text-primary'>Nombre_Clase</span> <span class='text-tomato'>::</span> <span class='text-lila'>nombre_metodo_estatico()</span></p>";

      Autor::getDatosAutor("Jhon", "Mircha", "Desarrollador Frontend", 30);
      
    ?>
  </div>
</body>

</html>