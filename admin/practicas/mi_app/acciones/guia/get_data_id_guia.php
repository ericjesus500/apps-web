<?php

if (isset($_POST['guia_id'])) {
    include "../../../../config/conexion.php";
    $id = mysqli_real_escape_string($mysqli, $_POST['guia_id']);
    //echo $id;
    $query = "SELECT * FROM guia WHERE guia_id = $id";
    $result = mysqli_query($mysqli, $query);

    if (!$result) {
        throw new Exception("Error en la consulta: " . mysqli_error($mysqli));
    }
    $json = array();

    while ($row = mysqli_fetch_array($result)) {
        
        $json[] = array(
            'id' => $row['guia_id'],
            'titulo' => $row['guia_titulo'],
            'href' => $row['guia_href'],
            'hrefLocal' => $row['guia_href_local'],
            'autor' => $row['guia_autor'],
            'categoria' => $row['guia_categoria']
        );
    }
    
    $jsonstring = json_encode($json);
    echo $jsonstring;
    mysqli_free_result($result);

} else {
    echo "no hay data";
}