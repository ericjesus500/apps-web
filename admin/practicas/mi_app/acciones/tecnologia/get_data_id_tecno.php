<?php

if (isset($_POST['tecno_id'])) {
    include "../../../../config/conexion.php";
    $id = isset($_POST['tecno_id']) ? mysqli_real_escape_string($mysqli, $_POST['tecno_id']) : "";
    //echo $id;
    $query = "SELECT * FROM tecnologia WHERE tecno_id = $id";
    $result = mysqli_query($mysqli, $query);

    if (!$result) {
        throw new Exception("Error en la consulta: " . mysqli_error($mysqli));
    }
    $json = array();

    while ($row = mysqli_fetch_array($result)) {
        
        $json[] = array(
            'id' => $row['tecno_id'],
            'tecno' => $row['tecno_nombre'],
            'file' => $row['tecno_file']
        );
    }
    
    $jsonstring = json_encode($json);
    echo $jsonstring;
    mysqli_free_result($result);

} else {
    echo "no hay data";
}