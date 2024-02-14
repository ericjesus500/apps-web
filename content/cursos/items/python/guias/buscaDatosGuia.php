<?php 

  if (isset($_POST['buscador'])) {

    include "../../../../../admin/config/conexion.php";
    
    $buscar = isset($_POST['buscador']) ? mysqli_real_escape_string($mysqli, $_POST['buscador']) : "";

    //echo $buscar;

    if ($buscar != "") {
      $query = "SELECT guia.guia_id, guia.guia_titulo, guia.guia_href, guia.guia_href_local, autor.autor_nombre as autor
      FROM guia
      INNER JOIN autor
      on guia.guia_autor = autor.autor_id
      WHERE guia_titulo LIKE '%$buscar%'";

      $result = mysqli_query($mysqli, $query);
  
      if (!$result) {
        throw new Exception("Error en la consulta: " . mysqli_error($mysqli));
      }
  
      $json = array();
  
      while ($row = mysqli_fetch_array($result)) {
        $json[] = array(
          'id' => $row['guia_id'],
          'titulo' => $row['guia_titulo'],
          'autor' => $row['autor'],
          'href' => $row['guia_href'],
          'hrefLocal' => $row['guia_href_local']
        );
      }
  
      $jsonstring = json_encode($json);
      echo $jsonstring;
      mysqli_free_result($result);
    } else {
      echo "NO HAY DATA";
    }
    
  }

?>