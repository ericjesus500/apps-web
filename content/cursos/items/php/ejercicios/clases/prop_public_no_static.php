<?php 

  Class Autor {
    public $nombre = "Jhon";
    public $apellido = "Mircha";
    public $profesion = "Desarrollador Frontend";    
  }  

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/bootstrap533/css/bootstrap.min.css">
  <title>Ejemplo Propiedades estaticas en POO</title>
</head>

<body>
  <h1 class="text-center text-primary mt-4">Propiedades NO Estáticas en POO</h1>
  <div class="print w-50 m-auto my-5 border rounded p-3">
    <?php

      $autor = new Autor();
      echo "<br /><br /> <p class='text-decoration-underline'>Mostrar la propiedad Pública NO estatica:</p>";
      echo "<br />Usando: <span class='text-primary'>&#36;objInstanciado</span> <strong><span class='text-danger'>-></span></strong> <span class='text-success'>nombre_de_la_propiedad</span>";
      echo "<br />Nombre del Autor: " . $autor -> nombre;
      echo "<br />-----------------------------------------------------------<br />";
    ?>
  </div>
</body>

</html>