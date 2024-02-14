<?php
include "../../../../config/conexion.php";

$query = "SELECT * FROM tecnologia WHERE 1";
$result = mysqli_query($mysqli, $query);

if (!$result) {
    throw new Exception("Error en la consulta: " . mysqli_error($mysqli));
}
$json = array();

//$row -> almacena cada fila(registro) de la tabla de datos en formato de array
while ($row = mysqli_fetch_array($result)) {
    //echo gettype($row); //COMPRUEBALO!!!
    //COMPRUEBA ESTO:
    // echo "<pre>";
    // print_r($row[0]." - ");
    // print_r($row[1]);
    // echo "</pre>";

    //se convierte cada columna de la tabla, de cada fila($row) en array y se almacena en $json
    $json[] = array(
        'id' => $row['tecno_id'],
        'tecno' => $row['tecno_nombre'],
        'file' => $row['tecno_file'],
    );
    //echo gettype($json)."<br />";
    //COMPRUEBA ESTO:
    // echo "<pre>";
    // print_r($json);
    // echo "</pre>";
}

//Finalmente se convierte cada $row en un objeto JSON y se almacena TODO en el array $jsonstring
$jsonstring = json_encode($json);
//echo gettype($jsonstring);//string
echo $jsonstring;
mysqli_free_result($result);