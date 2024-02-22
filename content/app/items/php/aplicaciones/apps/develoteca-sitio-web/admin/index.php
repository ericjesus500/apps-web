<?php
    session_start();
    if ($_POST) {
        if(($_POST['usuario']=="jesus")&&($_POST['contrasenia']=="sistema")){
            $_SESSION['usuario']="ok";
            $_SESSION['nombreUsuario']="jesus";
            header('location:inicio.php');
        }else{
            $mensaje="Error: El usuario o contraseña son incorrectos";
        }
    }
?>

<!doctype html>
<html lang="es">
    <head>
        <title>Administrador</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <br/><br/><br/>
                    <div class="card">
                        <div class="card-header">
                            Login
                        </div>
                        <div class="card-body">
                            <form method="POST">

                                <?php if(isset($mensaje)){?>
                                    <div class="alert alert-danger">
                                        <?= $mensaje; ?>
                                    </div>
                                <?php } ?>
                                
                                <div class="form-group">
                                    <label for="exampleInputUsuario" class="form-label mt-4">Usuario</label>
                                    <input type="text" class="form-control" id="exampleInputUsuario" name="usuario" aria-describedby="emailHelp">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="contrasenia">
                                </div>

                                <button type="submit" class="btn btn-primary mt-4">Entrar al administrador del sitio</button>

                            </form>
                        </div>                      
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </body>
</html>