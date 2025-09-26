<?php

include_once "../../conexion/conexion.php";

class ReadData
{
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
      $stmt->bindColumn(3, $this->url);

      $html="";

      while ($stmt->fetch(PDO::FETCH_BOUND)) {
        $html .= "<tr>
                    <td>$this->id</td>
                    <td>$this->titulo</td>
                    <td><a href='/content/cursos/articulos/$this->url'>$this->url</a></td>
                  </tr>";
      }
      print $html;


    } catch (PDOException $e) {
      print $e->getMessage();
    }
  }
}
