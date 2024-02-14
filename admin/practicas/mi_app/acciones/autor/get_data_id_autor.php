<?php

if (isset($_POST['autor_id'])) {    
    include "../../../../config/conexion.php";
    $id = mysqli_real_escape_string($mysqli, $_POST['autor_id']);
    //echo $id;

    $query = "SELECT * FROM autor WHERE autor_id = $id";
    $result = mysqli_query($mysqli, $query);

    if (!$result) {
        throw new Exception("Error en la consulta: " . mysqli_error($mysqli));
    }
    $json = array();

    while ($row = mysqli_fetch_array($result)) {
        
        $json[] = array(
            'id' => $row['autor_id'],
            'autor' => $row['autor_nombre'],
            'canal' => $row['autor_canal'],
            'url' => $row['autor_url'],
            'web' => $row['autor_web'],
            'twitter' => $row['autor_twitter'],
            'facebook' => $row['autor_facebook'],
            'twitch' => $row['autor_twitch'],
            'discord' => $row['autor_discord'],
            'file' => $row['autor_file']
        );
    }
    
    $jsonstring = json_encode($json);
    echo $jsonstring;
    mysqli_free_result($result);

} else {
    echo "no hay data";
}