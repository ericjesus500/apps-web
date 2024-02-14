<?php 

include "../../../config/conexion.php";

$query = "SELECT * FROM autor WHERE 1";
$result = mysqli_query($mysqli, $query);

if (!$result) {
    throw new Exception("Error en la consulta: " . mysqli_error($mysqli));
}

$num_rows = mysqli_num_rows($result);
echo $num_rows;

mysqli_free_result($result);

?>