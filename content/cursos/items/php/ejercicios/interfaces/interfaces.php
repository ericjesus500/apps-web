<?php

// Generar la interface:
interface Postre{
  public function set_ingredientes();
}

// Implementamos la interface:
class Bizcochuelo implements Postre{
  public $ingredientes = array();
  public function set_ingredientes(){
    $this->ingredientes = array(
      'harina' => '2 tazas',
      'leche'  => '1 taza',
      'azucar' => '1 taza',
      'huevo'  => 1
    );
    return $this->ingredientes;
  }
}

// Extendemos una clase (que por defecto, implementará la interface):
class BizcochueloVainilla extends Bizcochuelo{
  public function set_ingredientes(){
    $this->ingredientes['escencia de vainilla'] = 'a gusto';
  }

  function __construct(){
    parent::set_ingredientes();
    $this->set_ingredientes();
  }
}

// También podemos crear otra clase que implemente la interface:
class Alfajor implements Postre{
  public $ingredientes = array();
  public function set_ingredientes(){
    $this->ingredientes = array(
      'tapas de maizena' => 2,
      'dulce de leche'   => '1 cda. sopera',
      'coco rallado'     => '1 cdta. de te'
    );
    return $this->ingredientes;
  }

  function __construct(){
    $this->set_ingredientes();
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/bootstrap533/css/bootstrap.min.css">
  <title>PHP | Interfaces</title>
</head>

<body>
  <div class="container">
    <h1 class="text-center text-primary my-5">INTERFACES</h1>
    <div class="row">
      <div class="col-12">
        <div class="w-50 m-auto">
          <?php

          $objBizcochueloVainilla = new BizcochueloVainilla;

          foreach ($objBizcochueloVainilla as $ingrediente) {
            echo "Harina: " . $ingrediente['harina'] . "<br>";
            echo "Leche: " . $ingrediente['leche'] . "<br>";
            echo "Azucar: " . $ingrediente['azucar'] . "<br>";
            echo "Huevos: " . $ingrediente['huevo'] . "<br>";
            echo "Escencias: " . $ingrediente['escencia de vainilla'] . "<br>";
          }

          echo "<hr>";
          
          $objAlfajor = new Alfajor;
          foreach ($objAlfajor as $alfajor) {
            echo "Tapas de maizena: " . $alfajor['tapas de maizena'] . "<br>";
            echo "dulce de leche: " . $alfajor['dulce de leche'] . "<br>";
            echo "Coco rayado: " . $alfajor['coco rallado'] . "<br>";
          }

          ?>
        </div>
      </div>
    </div>
  </div>


</body>

</html>