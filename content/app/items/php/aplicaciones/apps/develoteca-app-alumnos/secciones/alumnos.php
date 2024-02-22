<?php 
    include_once "../config/bd.php";
    $conexionBD=BD::crearInstancia();
    
    //Comprobar el envio de datos del formulario
    //print_r($_POST);

    /* $sql="SELECT * FROM alumnos";
    $listaAlumnos=$conexionBD->query($sql);
    $alumnos=$listaAlumnos->fetchAll();
    //print_r($alumnos); */

    $id_alumno=isset($_POST['id_alumno'])?$_POST['id_alumno'] : "";
    $nombre_alumno=isset($_POST['nombre_alumno'])?$_POST['nombre_alumno'] : "";
    $apellidos_alumno=isset($_POST['apellidos_alumno'])?$_POST['apellidos_alumno'] : "";
    $cursos=isset($_POST['cursos'])?$_POST['cursos'] : "";
    $accion=isset($_POST['accion'])?$_POST['accion'] : "";

    if ($accion !='') {
        switch ($accion) {
            case 'agregar':
                $sql="INSERT INTO alumnos (id_alumno, nombre_alumno, apellidos_alumno) VALUES (NULL, :nombre_alumno, :apellidos_alumno)";
                $consulta=$conexionBD->prepare($sql);
                $consulta->bindParam(':nombre_alumno', $nombre_alumno);
                $consulta->bindParam(':apellidos_alumno', $apellidos_alumno);
                $consulta->execute();
                //ID del alumno que se agrego necesario para controlar los cursos a los que se va a suscribir
                $idAlumno=$conexionBD->lastInsertId();                

                foreach($cursos as $curso) {
                    $sql="INSERT INTO alumnos_cursos (id, idalumno, idcurso) VALUES (NULL, :idalumno, :idcurso)";
                    $consulta=$conexionBD->prepare($sql);
                    $consulta->bindParam(':idalumno', $idAlumno);
                    $consulta->bindParam(':idcurso', $curso);
                    $consulta->execute();
                }

                header("location:vista_alumnos.php");

            break;

            case 'seleccionar':                
                $sql="SELECT * FROM alumnos WHERE id_alumno=:id_alumno";
                $consulta=$conexionBD->prepare($sql);
                $consulta->bindParam(':id_alumno', $id_alumno);
                $consulta->execute();                
                $data_alumno=$consulta->fetch(PDO::FETCH_ASSOC);
                //print_r($data_alumno);
                $nombre_alumno=$data_alumno['nombre_alumno'];                
                $apellidos_alumno=$data_alumno['apellidos_alumno'];

                $sqlCursos="SELECT cursos.id_curso FROM alumnos_cursos
                INNER JOIN cursos ON cursos.id_curso=alumnos_cursos.idcurso 
                WHERE alumnos_cursos.idalumno=:id_alumno";
                $consultaCursos=$conexionBD->prepare($sqlCursos);
                $consultaCursos->bindParam(':id_alumno', $id_alumno);
                $consultaCursos->execute();
                $cursosAlumno=$consultaCursos->fetchAll(PDO::FETCH_ASSOC);                
                //print_r($cursosAlumno);

                foreach( $cursosAlumno as $curso ) {
                    //echo $curso['id_curso'];
                    $arregloCursos[]=$curso['id_curso'];
                }

            break;

            case 'editar':
                $sqlEditar="UPDATE alumnos SET nombre_alumno=:nombre_alumno, apellidos_alumno=:apellidos_alumno WHERE id_alumno=:id_alumno";
                $consulta=$conexionBD->prepare($sqlEditar);
                $consulta->bindParam(':nombre_alumno', $nombre_alumno);
                $consulta->bindParam(':apellidos_alumno', $apellidos_alumno);
                $consulta->bindParam(':id_alumno', $id_alumno);
                $consulta->execute();

                if (isset($cursos)) {
                    $sql="DELETE FROM alumnos_cursos WHERE idalumno=:id_alumno";
                    $consulta=$conexionBD->prepare($sql);
                    $consulta->bindParam(':id_alumno', $id_alumno);
                    $consulta->execute();

                    foreach($cursos as $curso){
                        $sql="INSERT INTO alumnos_cursos (id, idalumno, idcurso) VALUES (NULL, :idalumno, :idcurso)";
                        $consulta=$conexionBD->prepare($sql);
                        $consulta->bindParam(':idalumno', $id_alumno);
                        $consulta->bindParam(':idcurso', $curso);
                        $consulta->execute();
                    }
                    $arregloCursos=$cursos;
                }

            break;

            case 'eliminar':
                $sqlEliminar="DELETE FROM alumnos WHERE id_alumno=:id_alumno";
                $consulta=$conexionBD->prepare($sqlEliminar);
                $consulta->bindParam(':id_alumno', $id_alumno);
                $consulta->execute();
            break;

        }
    }
    
    //Relacion de alumnos con sus cursos
    $sqlAlumnos="SELECT * FROM alumnos";
    $listaAlumnos=$conexionBD->query($sqlAlumnos);
    $alumnos=$listaAlumnos->fetchAll();
    //print_r($alumnos);

    foreach ($alumnos as $clave => $alumno) {
        $sql="SELECT * FROM cursos WHERE id_curso IN(SELECT idcurso FROM alumnos_cursos WHERE idalumno=:idalumno)";
        $consulta=$conexionBD->prepare($sql);
        $consulta->bindParam(':idalumno', $alumno['id_alumno']);
        $consulta->execute();
        $cursosAlumno=$consulta->fetchAll();
        $alumnos[$clave]['cursos']=$cursosAlumno;
    }

    $sqlCursos="SELECT * FROM cursos";
    $listaCursos=$conexionBD->query($sqlCursos);
    $cursos=$listaCursos->fetchAll();
    //print_r($cursos);
?>