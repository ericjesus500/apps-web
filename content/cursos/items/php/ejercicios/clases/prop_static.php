<?php 

  Class Persona {
    public $nombre = "Xareni Evangeline";
    public $apellido = "Chuye";    
    public $edad = 30;
    public static $dni = "02855520";
    public static $curso = "Javascript";

    public function getDatosPersona(){
      
      $name = $this->nombre;
      $lastname = $this->apellido;
      $age = $this->edad;
      

      echo "<span class='text-decoration-underline'>Datos de Persona: </span><br>";
      echo "<br /> Nombre: " . $name;
      echo "<br /> Apellido: " . $lastname;
      echo "<br /> Edad: " . $age;
    }    
    
  }  

  class Autor extends Persona{
    public $nombre = "Kenny Abdiel";
    public $apellido = "Chuye";
    public static $dni = "40177791";    

    public function getDatosAutor(){

      $name = $this->nombre;
      $lastname = $this->apellido;

      echo "<span class='text-decoration-underline'>Datos de Autor: </span><br>";
      echo "<br /> Nombre: " . $name;
      echo "<br /> Apellido: " . $lastname;
    }   

    public function getCurso(){
      return parent::$curso;
    }
    
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
  <h1 class="text-center text-primary mt-4">Propiedades Estáticas en POO</h1>
  <div class="print w-75 m-auto my-5 border rounded p-3">
    <?php

      $objPersona = new Persona();
      $objPersona -> getDatosPersona();

      echo "<br /><br /> <p class='text-decoration-underline'>Primera forma de mostrar la propiedad estatica:</p>";
      echo "Usando: <span class='text-primary'>NombreDeLaClase</span> <span class='text-tomato'><strong> :: </strong></span> <span class='text-success'>nombre_de_la_propiedad</span>";
      echo "<br />DNI: " . Persona :: $dni;
      echo "<br />Curso: " . Persona :: $curso;
      
      echo "<br /><br /> <p class='text-decoration-underline'>Segunda forma</p>";
      echo "Usando <span class='text-primary'>objetoInstanciado</span><span class='text-danger'><strong> :: </strong></span> <span class='text-success'>nombre_de_la_propiedad</span> : ";
      echo "<br />DNI: " . $objPersona :: $dni;
      echo "<br />Curso: " . $objPersona :: $curso;
    ?>
  </div>

  <div class="print w-75 m-auto my-5 border rounded p-3">
    <?php

      $objAutor = new Autor();
      $objAutor -> getDatosAutor();

      echo "<br /><br /> <p class='text-decoration-underline'>Mostrar la propiedad estática &#36;dni de la clase extendida:</p>";
      echo "Usando: <span class='text-primary'>NombreDeLaClase</span> <span class='text-tomato'><strong> :: </strong></span> <span class='text-success'>nombre_de_la_propiedad</span>";
      echo "<br />DNI: " . Autor :: $dni;
      
      echo "<br /><br /> <p class='text-decoration-underline'>Mostrar propiedad estática &#36;curso de la clase principal</p>";
      echo "Usando <span class='text-primary'>objetoInstanciado</span><span class='text-danger'><strong> -> </strong></span> <span class='text-success'>nombre_de_método_que_devuelve_la_propiedad_estatica</span> : ";
      echo "<br />Curso: " . $objAutor -> getCurso();
    ?>
  </div>
</body>

</html>