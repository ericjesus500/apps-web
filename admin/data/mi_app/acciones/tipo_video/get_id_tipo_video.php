<?php

if (isset($_POST['tipo_video_id'])) {
    include "../../../../config/conexion.php";
    $id = isset($_POST['tipo_video_id']) ? mysqli_real_escape_string($mysqli, $_POST['tipo_video_id']) : "";
    //echo $id;
    $query = "SELECT * FROM tipo_video WHERE tipo_video_id = $id";
    $result = mysqli_query($mysqli, $query);

    if (!$result) {
        throw new Exception("Error en la consulta: " . mysqli_error($mysqli));
    }
    $json = array();

    while ($row = mysqli_fetch_array($result)) {
        
        $json[] = array(
            'id' => $row['tipo_video_id'],
            'tipoVideo' => $row['tipo_video_nombre'],
        );
    }
    
    $jsonstring = json_encode($json);
    echo $jsonstring;
    mysqli_free_result($result);

} else {
    echo "no hay data";
}