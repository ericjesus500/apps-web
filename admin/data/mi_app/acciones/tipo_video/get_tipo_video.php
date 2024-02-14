<?php
include "../../../../config/conexion.php";

$query = "SELECT * FROM tipo_video WHERE 1";
$result = mysqli_query($mysqli, $query);

if (!$result) {
    throw new Exception("Error en la consulta: " . mysqli_error($mysqli));
}
$json = array();

//$row -> almacena cada fila(registro) de la tabla de datos en formato de array
while ($row = mysqli_fetch_array($result)) {    
    $json[] = array(
        'id' => $row['tipo_video_id'],
        'tipoVideo' => $row['tipo_video_nombre']
    );    
}

$jsonstring = json_encode($json);

echo $jsonstring;
mysqli_free_result($result);