<?php

include_once "../conexion/conexion.php";

class ReadData{
  public $id;
  public $titulo;
  public $url;

  public function leerData()
  {
    $cnx = new Conexion;
    $cnx = Conexion::conectar();
    $sql = 'SELECT guia_id, guia_titulo, guia_href_local FROM guia';
    try {
      $stmt = $cnx->prepare($sql);
      $stmt->execute();
  
      /* Vincular por número de columna */
      $stmt->bindColumn(1, $this->id);
      $stmt->bindColumn(2, $this->titulo);
  
      /* Vincular por nombre de columna */
      $stmt->bindColumn('guia_href_local', $this->url);
  
      while ($fila = $stmt->fetch(PDO::FETCH_BOUND)) {
        $datos = $this->id . ": " . $this->titulo . ": " . $this->url . "<br>";
        print $datos;
      }
    } catch (PDOException $e) {
      print $e->getMessage();
    }
  }

}

?>