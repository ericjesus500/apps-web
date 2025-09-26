<?php

    class Producto
    {
      #defino algunas propiedades
      public $nombre;
      public $precio;
      protected $estado;

      #defino el método set_estado_producto()
      protected function set_estado_producto($estado)
      {
        return "Estado: " . $this->estado = $estado;
      }

      # constructor de la clase
      function __construct()
      {
        echo $this->set_estado_producto("en uso");
      }
      
    }

     $objProducto = new Producto;
     
?>