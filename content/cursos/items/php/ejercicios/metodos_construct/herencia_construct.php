<?php 

    class Coche {
      public $color;

      public function __construct( $color ){
          $this -> color = $color;
      }
    }

    class CocheDeLujo extends Coche {
      public $extras;

      public function __construct( $color, $extras ){
          parent :: __construct( $color );
          $this -> extras = $extras;
      }
    }

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/bootstrap533/css/bootstrap.min.css">
  <title>Herencia en constructores</title>
</head>

<body>
  <h1 class="text-center text-primary mt-4">Herencia en constructores</h1>
  <div class="print w-50 m-auto my-5 border rounded p-3">
    <?php

      $miCoche = new CocheDeLujo( 'Rojo', 'TV' );
      echo "Color del coche: " . $miCoche -> color . "<br/>"; // Devuelve Rojo
      echo "Accesorios extras: " . $miCoche -> extras . "<br/>"; // Devuelve TV
      
    ?>
  </div>
</body>

</html>