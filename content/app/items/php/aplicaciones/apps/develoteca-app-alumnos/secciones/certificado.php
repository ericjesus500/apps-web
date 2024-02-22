<?php 

    require "/proyectos/apps-web/assets/libreria/fpdf184/fpdf.php";

    include_once("../config/bd.php");
    $conexionBD=BD::crearInstancia();
    //print_r($_GET);

    function agregarTexto($pdf, $texto, $x, $y, $fuente, $align='L', $size, $r=0, $g=0, $b=0){
        $pdf->SetFont($fuente, "", $size);
        $pdf->SetXY($x, $y);
        $pdf->SetTextColor($r, $g, $b);
        $pdf->Cell(0, 10, $texto, 0, 0, $align);
    }

    function agregarImagen($pdf, $imagen, $x, $y){
        $pdf->Image($imagen, $x, $y, 0);
    }

    $id_curso=isset($_GET['id_curso'])?$_GET['id_curso']:'';
    $id_alumno=isset($_GET['id_alumno'])?$_GET['id_alumno']:'';
    $sql="SELECT alumnos.nombre_alumno, alumnos.apellidos_alumno, cursos.nombre_curso FROM alumnos, cursos WHERE alumnos.id_alumno=:id_alumno AND cursos.id_curso=:id_curso";
    $consulta=$conexionBD->prepare($sql);
    $consulta->bindParam(':id_alumno', $id_alumno);
    $consulta->bindParam(':id_curso', $id_curso);
    $consulta->execute();
    $alumno=$consulta->fetch(PDO::FETCH_ASSOC);
    //print_r($alumno);

    $pdf=new FPDF('L', 'mm', array(254,194));
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    agregarImagen($pdf, "../src/certificado_.jpg", 0, 0);
    agregarTexto($pdf, ucwords(utf8_decode($alumno['nombre_alumno']. " " . $alumno['apellidos_alumno'])), 60, 70, 'Arial', 'L', 30, 0, 84, 115);
    agregarTexto($pdf, $alumno['nombre_curso'], -150, 100, 'Arial', 'L', 15, 0, 84, 115);
    agregarTexto($pdf, date("d/m/Y"), -225, 145, 'Arial', 'L', 15, 0, 84, 115);
    $pdf->Output();

?>