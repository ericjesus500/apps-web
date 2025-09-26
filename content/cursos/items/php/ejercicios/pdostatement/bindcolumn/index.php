<?php 

  include_once "./bindcolumn.php";

  $data = new ReadData;

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>bindColumn</title>
  <style>
    .content{
      width: 80%;
      margin: 50px auto;
    }
    .titulo{
      text-align: center;
      color:blue;
    }
    .subtitulo{
      color:lightcoral;
    }
  </style>
</head>
<body>
<div class="content">
  <h1 class="titulo">USO DE <span class="subtitulo">PDOStatement::bindColumn()</span></h1>
  <?php $data->leerData(); ?>
</div>
  
</body>
</html>