<?php 

  if (isset($_POST['buscador'])) {
    include "../../../../config/conexion.php";
    
    $buscar = isset($_POST['buscador']) ? mysqli_real_escape_string($mysqli, $_POST['buscador']) : "";

    //echo (gettype($buscar));
    
    $query = "SELECT videos.video_id, videos.video_titulo, videos.video_nombre_lista as lista, videos.video_url, videos.video_web, tecnologia.tecno_nombre as categoria, autor.autor_nombre as autor, origen_video.origen_nombre as origen, tipo_video.tipo_video_nombre as tipo, estado_video.estado_nombre as estado
    FROM videos
    INNER JOIN tecnologia
    ON videos.video_tecno_id = tecnologia.tecno_id
    INNER JOIN autor
    on videos.video_autor_id = autor.autor_id
    INNER JOIN origen_video
    on videos.video_origen_id = origen_video.origen_id
    INNER JOIN tipo_video
    on videos.video_tipo_id = tipo_video.tipo_video_id
    INNER JOIN estado_video
    on videos.video_estado_id = estado_video.estado_id
    WHERE videos.video_titulo LIKE '%$buscar%' OR videos.video_nombre_lista LIKE '%$buscar%' OR autor.autor_nombre LIKE '%$buscar%' OR tecnologia.tecno_nombre LIKE '%$buscar%' OR origen_video.origen_nombre LIKE '%$buscar%' OR tipo_video.tipo_video_nombre LIKE '%$buscar%' OR estado_video.estado_nombre LIKE '%$buscar%'";


    $result = mysqli_query($mysqli, $query);

    if (!$result) {
      throw new Exception("Error en la consulta: " . mysqli_error($mysqli));
    }

    $json = array();

    while ($row = mysqli_fetch_array($result)) {
      $json[] = array(
        'id' => $row['video_id'],
        'titulo' => $row['video_titulo'],
        'url' => $row['video_url'],
        'web' => $row['video_web'],
        'tecno' => $row['categoria'],
        'autor' => $row['autor'],
        'origen' => $row['origen'],
        'tipo' => $row['tipo'],
        'lista' => $row['lista'],
        'estado' => $row['estado']
      );
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;
    mysqli_free_result($result);
  }

?>