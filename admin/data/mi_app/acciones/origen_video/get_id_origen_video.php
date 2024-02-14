<?php

if (isset($_POST['origen_id'])) {
    $id = $_POST['origen_id'];
    //echo $id;
    include "../../../../config/conexion.php";

    $query = "SELECT * FROM origen_video WHERE origen_id = $id";
    $result = mysqli_query($mysqli, $query);

    if (!$result) {
        throw new Exception("Error en la consulta: " . mysqli_error($mysqli));
    }
    $json = array();

    while ($row = mysqli_fetch_array($result)) {
        
        $json[] = array(
            'id' => $row['origen_id'],
            'origenNombre' => $row['origen_nombre']
        );
    }
    
    $jsonstring = json_encode($json);
    echo $jsonstring;
    mysqli_free_result($result);

} else {
    echo "no hay data";
}