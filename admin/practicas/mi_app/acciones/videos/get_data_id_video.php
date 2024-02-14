<?php

if (isset($_POST['video_id'])) {    
    include "../../../../config/conexion.php";
    $id = mysqli_real_escape_string($mysqli, $_POST['video_id']);
    //echo $id;

    $query = "SELECT * FROM videos WHERE video_id = $id";
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
            'autor' => $row['video_autor_id'],
            'tecno' => $row['video_tecno_id'],
            'origen' => $row['video_origen_id'],
            'tipo' => $row['video_tipo_id'],
            'lista' => $row['video_nombre_lista'],
            'estado' => $row['video_estado_id']
        );
    }
    
    $jsonstring = json_encode($json);
    echo $jsonstring;
    mysqli_free_result($result);

} else {
    echo "no hay data";
}