<?php

if (isset($_POST['estado_id'])) {
    $id = $_POST['estado_id'];
    //echo $id;
    include "../../../../config/conexion.php";
    $query = "SELECT * FROM estado_video WHERE estado_id = $id";
    $result = mysqli_query($mysqli, $query);

    if (!$result) {
        throw new Exception("Error en la consulta: " . mysqli_error($mysqli));
    }
    $json = array();

    while ($row = mysqli_fetch_array($result)) {
        
        $json[] = array(
            'id' => $row['estado_id'],
            'estadoNombre' => $row['estado_nombre']
        );
    }
    
    $jsonstring = json_encode($json);
    echo $jsonstring;
    mysqli_free_result($result);

} else {
    echo "no hay data";
}