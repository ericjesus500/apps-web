<?php 

    session_start();

    if ($_POST) {
        
        $mensaje="Usuario o contraseña incorrecto";

        if ($_POST['usuario']=='jesus' && $_POST['password']=='admin') {
            $_SESSION['usuario']=$_POST['usuario'];
            //echo "Login correcto";
            header('Location:./secciones/index.php');
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>App Alumnos</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            Inicio de Sesión
                        </div>
                        <div class="card-body">
                            <?php if(isset($mensaje)){ ?>
                                    <div class="alert alert-danger" role="alert">                                        
                                    <strong class="alert-heading"><?= $mensaje ?></strong>                                      
                                    </div>
                            <?php } ?>                            
                            <div class="mb-3">
                            <label for="" class="form-label">Usuario</label>
                            <input type="text"
                                class="form-control" name="usuario" id="usuario" aria-describedby="helpId">
                            <small id="helpId" class="form-text text-muted">Escriba su usuario</small>
                            </div>
                            <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password"
                                class="form-control" name="password" id="password" aria-describedby="helpId">
                            <small id="helpId" class="form-text text-muted">Ingrese su contraseña</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                        </div>                    
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>