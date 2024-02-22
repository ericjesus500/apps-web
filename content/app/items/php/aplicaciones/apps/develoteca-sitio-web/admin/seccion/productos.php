<?php include("../template/head.php");?>

<?php
    $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
    $txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
    $accion=(isset($_POST['accion']))?$_POST['accion']:"";

    /* echo $txtID."<br/>";
    echo $txtNombre."<br/>";
    echo $txtImagen."<br/>";
    echo $accion."<br/>";  */
?>

<div class="container">
    <?php include("../config/bd.php"); ?>

</div>

<?php
    switch ($accion) {
        case 'Agregar':

            /* echo "presionado el boton Agregar";
            break; */
            
            $sentenciaSQL = $conexion->prepare("INSERT INTO libros (nombre_libro, imagen_libro) VALUES (:nombre, :imagen);");
            $sentenciaSQL->bindParam(':nombre', $txtNombre);

            $fecha = new DateTime();
            $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
            $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

            if ($tmpImagen !="") {
                move_uploaded_file($tmpImagen, "../../img/".$nombreArchivo);             
            }

            $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
            $sentenciaSQL->execute();
            header("Location:productos.php");

            break;

        case 'Modificar':

            /* echo "presionado el boton Modificar";
            break; */

            $sentenciaSQL = $conexion->prepare("UPDATE libros SET nombre_libro=:nombre WHERE id_libro=:id");
            $sentenciaSQL->bindParam(':nombre', $txtNombre);
            $sentenciaSQL->bindParam(':id', $txtID);
            $sentenciaSQL->execute();

            if($txtImagen !=""){
                
                $fecha = new DateTime();
                $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "imagen.jpg";
                $tmpImagen = $_FILES["txtImagen"]["tmp_name"];

                move_uploaded_file($tmpImagen, "../../img/" . $nombreArchivo);

                $sentenciaSQL = $conexion->prepare("SELECT imagen_libro FROM libros WHERE id_libro=:id");
                $sentenciaSQL->bindParam(':id', $txtID);
                $sentenciaSQL->execute();
                $libro = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

                if (isset($libro["imagen_libro"]) && ($libro["imagen_libro"] != "imagen.jpg")) {
                    if (file_exists("../../img/" . $libro["imagen_libro"])) {
                        unlink("../../img/" . $libro["imagen_libro"]);
                    }
                }

                $sentenciaSQL = $conexion->prepare("UPDATE libros SET imagen_libro=:imagen WHERE id_libro=:id");
                $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
                $sentenciaSQL->bindParam(':id', $txtID);
                $sentenciaSQL->execute();
            }

            header("Location:productos.php");
            break;

        case 'Cancelar':

            /* echo "presionado el boton Cancelar";
            break; */

            header("Location:productos.php");
            break;

        case 'Seleccionar':
            $sentenciaSQL = $conexion->prepare("SELECT * FROM libros WHERE id_libro=:id");
            $sentenciaSQL->bindParam(':id', $txtID);
            $sentenciaSQL->execute();
            $libro=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

            $txtNombre=$libro['nombre_libro'];
            $txtImagen=$libro['imagen_libro'];
            //echo "Presionado boton Seleccionar";
            break;

        case 'Borrar':

            //Borrado de imagen
            $sentenciaSQL = $conexion->prepare("SELECT imagen_libro FROM libros WHERE id_libro=:id");
            $sentenciaSQL->bindParam(':id', $txtID);
            $sentenciaSQL->execute();
            $libro = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

            if (isset($libro["imagen_libro"]) && ($libro["imagen_libro"] != "imagen.jpg")) {
                if (file_exists("../../img/".$libro["imagen_libro"])) {
                    unlink("../../img/".$libro["imagen_libro"]);
                }
            }

            //Borrado de datos del libro
            $sentenciaSQL = $conexion->prepare("DELETE FROM libros WHERE id_libro=:id");
            $sentenciaSQL->bindParam(':id', $txtID);
            $sentenciaSQL->execute();                
            header("Location:productos.php");

            break;
        
        default:            
            break;
    }

    //Aqui se selecciona todos los registros de la base de datos y se guarda en la variable $listaLibros
    $sentenciaSQL = $conexion->prepare("SELECT * FROM libros");
    $sentenciaSQL->execute();
    $listaLibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="row mt-4">
    <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Datos de Libro
            </div>

            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group mt-4">
                        <label for="txtID">ID: </label>
                        <input type="text" required readonly class="form-control" value="<?php echo $txtID; ?>"
                            name="txtID" id="txtID" placeholder="ID">
                    </div>

                    <div class="form-group mt-4">
                        <label for="txtNombre">Titulo: </label>
                        <input type="text" required class="form-control" value="<?php echo $txtNombre; ?>"
                            name="txtNombre" id="txtNombre" placeholder="Nombre del libro">
                    </div>

                    <div class="form-group mt-4">
                        <label for="txtImagen">Imagen: <?php echo $txtImagen; ?> </label>

                        <br />

                        <?php if ($txtImagen!="") { ?>
                        <img class="img-thumbnail rounded" src="../../img/<?php echo $txtImagen; ?>" width="80" alt="">
                        <?php } ?>

                        <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Portada">
                    </div>

                    <div class="btn-group mt-4" role="group" aria-label="">
                        <button type="submit" name="accion" <?php echo ($accion == "Seleccionar") ? "disabled" : ""; ?>
                            value="Agregar" class="btn btn-success">Agregar</button>
                        <button type="submit" name="accion" <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?>
                            value="Modificar" class="btn btn-warning">Modificar</button>
                        <button type="submit" name="accion" <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?>
                            value="Cancelar" class="btn btn-info">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>


<div class="row mt-4">

    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($listaLibros as $libro) { ?>
                <tr>
                    <td><?php echo $libro['id_libro'];?></td>
                    <td><?php echo $libro['nombre_libro'];?></td>
                    <td class="text-center">
                        <img class="img-thumbnail rounded" src="../../img/<?php echo $libro['imagen_libro']; ?>"
                            width="50" alt="">
                        <!-- <?php echo $libro['imagen_libro'];?> -->
                    </td>
                    <td class="text-center">
                        <form method="post">
                            <input type="hidden" name="txtID" id="txtID" value="<?php echo $libro['id_libro'] ?>" />
                            <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary" />
                            <input type="submit" name="accion" value="Borrar" class="btn btn-danger" />
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</div>



<?php include "../template/footer.php";