<?php 
    include_once "../config/bd.php";
    $conexionBD=BD::crearInstancia();    
?>

<!-- <h5>Confirmando Recepción de Variables:</h5>
    <?php print_r($_POST); ?> -->

<?php 
    //Consulta a la Base de Datos
    $consulta=$conexionBD->prepare("SELECT * FROM cursos");
    $consulta->execute();
    $listaCursos=$consulta->fetchAll();
?>

<!-- <div class="container">
    <div class="row">
        <h5>Consultando a la base de datos</h5>
        <?=print_r($listaCursos)?>
    </div>
</div> -->

<?php 

    //Evaluación de la llegada de la información enviada en el formulario
    $id_curso=isset($_POST['id_curso'])?$_POST['id_curso'] : '';
    $nombre_curso=isset($_POST['nombre_curso'])?$_POST['nombre_curso'] : '';
    $accion = isset($_POST['accion']) ? $_POST['accion'] : '';

    if ($accion !='') {
        switch ($accion) {

            //Inserción de datos a la base de datos
            case 'agregar':
                $sql="INSERT INTO cursos (id_curso, nombre_curso) VALUES (NULL, :nombre_curso)";
                //echo $sql;
                $consulta=$conexionBD->prepare($sql);
                $consulta->bindParam(':nombre_curso', $nombre_curso);
                $consulta->execute();
                header("location:vista_cursos.php");
            break;

            case 'editar':
                $sql="UPDATE cursos SET nombre_curso=:nombre_curso WHERE id_curso=:id_curso";
                //echo $sql;
                $consulta=$conexionBD->prepare($sql);
                $consulta->bindParam(':id_curso', $id_curso);
                $consulta->bindParam(':nombre_curso', $nombre_curso);
                $consulta->execute();
                header("location:vista_cursos.php");
            break;
            
            case 'eliminar':
                $sql="DELETE FROM cursos WHERE id_curso=:id_curso";
                //echo $sql;
                $consulta=$conexionBD->prepare($sql);
                $consulta->bindParam(':id_curso', $id_curso);
                $consulta->execute();
                header("location:vista_cursos.php");
            break;          
            
            case 'Seleccionar':
                $sql="SELECT * FROM cursos WHERE id_curso=:id_curso";
                $consulta=$conexionBD->prepare($sql);
                $consulta->bindParam(':id_curso', $id_curso);
                $consulta->execute();
                $curso=$consulta->fetch(PDO::FETCH_ASSOC);
                $nombre_curso=$curso['nombre_curso'];
                //echo $nombre_curso;

                
            break;
        }
    }
?>





