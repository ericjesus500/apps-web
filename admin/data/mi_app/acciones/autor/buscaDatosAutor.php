<?php 

  if (isset($_POST['buscador'])) {
    include "../../../../config/conexion.php";
    
    $buscar = isset($_POST['buscador']) ? mysqli_real_escape_string($mysqli, $_POST['buscador']) : "";

    //echo (gettype($buscar));

    $query = "SELECT * FROM autor WHERE autor_id LIKE '%$buscar%' OR autor_nombre LIKE '%$buscar%' OR autor_canal LIKE '%$buscar%'";
    $result = mysqli_query($mysqli, $query);

    if (!$result) {
      throw new Exception("Error en la consulta: " . mysqli_error($mysqli));
    }

    $json = array();

    while ($row = mysqli_fetch_array($result)) {
      $json[] = array(
        'id' => $row['autor_id'],
        'autor' => $row['autor_nombre'],
        'canal' => $row['autor_canal'],
        'url' => $row['autor_url'],
        'web' => $row['autor_web'],
        'twitter' => $row['autor_twitter'],
        'facebook' => $row['autor_facebook'],
        'twitch' => $row['autor_twitch'],
        'discord' => $row['autor_discord'],
        'files' => $row['autor_file']
      );
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;
    mysqli_free_result($result);
  }

?>