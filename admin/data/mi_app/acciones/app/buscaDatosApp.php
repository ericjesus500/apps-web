<?php 

  if (isset($_POST['buscador'])) {
    include "../../../../config/conexion.php";
    
    $buscar = isset($_POST['buscador']) ? mysqli_real_escape_string($mysqli, $_POST['buscador']) : "";

    //echo (gettype($buscar));

    $query = "SELECT * FROM aplicacion WHERE app_id LIKE '%$buscar%' OR app_nombre LIKE '%$buscar%' OR app_autor LIKE '%$buscar%' OR app_tecno LIKE '%$buscar%'";
    $result = mysqli_query($mysqli, $query);

    if (!$result) {
      throw new Exception("Error en la consulta: " . mysqli_error($mysqli));
    }

    $json = array();

    while ($row = mysqli_fetch_array($result)) {
      $json[] = array(
        'id' => $row['app_id'],
        'nombre' => $row['app_nombre'],
        'tecnologia' => $row['app_tecno'],
        'autor' => $row['app_autor'],
        'url' => $row['app_url'],
        'descripcion' => $row['app_descripcion']
      );
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;
    mysqli_free_result($result);
  }

?>