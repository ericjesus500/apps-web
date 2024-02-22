<?php
  session_start();
  
    if (!isset($_SESSION['usuario'])) {
      header("Location:../index.php");
    }else{
      if($_SESSION['usuario']=="ok"){
        $nombreUsuario=$_SESSION['nombreUsuario'];
      }
    }
?>

<!doctype html>
<html lang="es">

<head>
    <title>Productos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>

    <?php $url="http://".$_SERVER['HTTP_HOST']."/items/php/aplicaciones/apps/develoteca-sitio-web"?>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link disabled" href="#">Administrador del sitio</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/admin/inicio.php">Inicio</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/admin/seccion/productos.php">Productos</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/admin/seccion/cerrar.php">Cerrar sesion</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>">Ver sitio web</a>
        </div>
    </nav>
    <div class="container">
        <br />
        <div class="row">