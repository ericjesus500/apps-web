<?php 

  Class Persona {    
    protected $profesion = "Programador";    

    protected function setProfesion($profesion){
      $this->profesion = $profesion;
      return $this->profesion;
    }

    public function getProfesion(){
      return $this->setProfesion($this->profesion);
    }

    public function obtenerProfesion(){
      return $this->profesion;
    }
  }  

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/bootstrap533/css/bootstrap.min.css">
  <title>Método protected</title>
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
  <h1 class="text-center text-primary mt-4">Método Protected</h1>
  <div class="print w-50 m-auto my-5 border rounded p-3">
    <?php

    echo "<p class='fw-bold text-decoration-underline fs-4'>Forma de Uso:</p>";
    echo "<p class='fs-5'> <span class='text-primary'>&#36;objInstanciado</span> =  <span class='text-tomato'>new</span> <span class='text-lila'>Nombre_Clase</span></p>";
    $objInstanciado = new Persona;
    echo "<p class='fs-5'> <span class='text-primary'>&#36;objInstanciado</span> <span class='text-tomato'>-></span> <span class='text-lila'>nombre_metodo_publico()</span></p>";
      
      echo "Profesion1: " . $objInstanciado->getProfesion();
      echo "<br>";
      echo "Profesion2: " . $objInstanciado->obtenerProfesion();
      
    ?>
  </div>
</body>

</html>