<?php 

  Class Autor {
    
    public $nombre;
    public $apellido;
    public $profesion;    

    public function getNombreAutor(){      
      return $this->nombre;
    }

    public function getApellidoAutor(){      
      return $this->apellido;
    }

    public function getProfesionAutor(){      
      return $this->profesion;
    }
  }

  function mostrarDataAutor($dataAutor){
    echo "<br />Nombre de Autor: " . $dataAutor->getNombreAutor();
    echo "<br />Apellido de Autor: " . $dataAutor->getApellidoAutor();
    echo "<br />Profesión del Autor: " . $dataAutor->getProfesionAutor();
  }

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/bootstrap533/css/bootstrap.min.css">
  <title>Clases como plantillas de Métodos en POO</title>
</head>

<body>
  <h1 class="text-center text-primary mt-4">Métodos en POO</h1>
  <div class="print w-50 m-auto my-5 border rounded p-3">
    <?php

      $autor1 = new Autor;
      $autor1->nombre = "Jhon";
      $autor1->apellido = "Mircha";
      $autor1->profesion = "Desarrollador Web Frontend";

      $autor2 = new Autor;
      $autor2->nombre = "Daniel";
      $autor2->apellido = "Salinas";
      $autor2->profesion = "Desarrollador Web Backend";

      mostrarDataAutor($autor1);
      echo "<br /><br />-------------------------------------------------------------------<br />";
      mostrarDataAutor($autor2);
      
    ?>
  </div>
</body>

</html>