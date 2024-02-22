<?php 
    session_start();
    if (!isset($_SESSION['usuario'])) {
      header('Location:../index.php');
    }
?>

<!doctype html>
<html lang="es">
  <head>
    <title>App Alumnos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->    
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">     -->
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/tomselect210/tomselect210.css">
  </head>
  <body>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="index.php"><i class="bi bi-house-door-fill me-1 text-primary"></i>Inicio</a>
            <a class="nav-item nav-link" href="vista_alumnos.php"><i class="bi bi-person-raised-hand me-1 text-primary"></i>Alumnos</a>
            <a class="nav-item nav-link" href="vista_cursos.php"><i class="bi bi-stack me-1 text-primary"></i>Cursos</a>
            <a class="nav-item nav-link" href="cerrar.php"><i class="bi bi-x-square-fill me-1 text-primary"></i>Cerrar Sesión</a>
        </div>
    </nav>

    <div class="container">
      

          

      