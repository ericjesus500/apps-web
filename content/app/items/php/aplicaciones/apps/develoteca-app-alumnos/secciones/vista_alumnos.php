<?php 
    include "../templates/head.php"; 
    include "../secciones/alumnos.php";    
?>

<div class="row mt-4">
    <!-- Formulario de manipulacion de Datos -->
    <div class="col-md-4">
        <form action="" method="post">            
            <div class="card">
                <div class="card-header">Alumnos</div>
                <div class="card-body">
                    <div class="mb-3">
                      <label for="id_alumno" class="form-label">ID</label>
                      <input type="text"
                        class="form-control" name="id_alumno" id="id_alumno" value="<?= $id_alumno ?>" aria-describedby="helpId" placeholder="ID del alumno" />                      
                    </div>
                    <div class="mb-3">
                      <label for="nombre_alumno" class="form-label">Nombre</label>
                      <input type="text"
                        class="form-control" name="nombre_alumno" id="nombre_alumno" value="<?=$nombre_alumno?>" aria-describedby="helpId" placeholder="Nombre del alumno" />                      
                    </div>
                    <div class="mb-3">
                      <label for="apellidos_alumno" class="form-label">Apellidos</label>
                      <input type="text"
                        class="form-control" name="apellidos_alumno" id="apellidos_alumno" value="<?=$apellidos_alumno?>" aria-describedby="helpId" placeholder="Apellidos del alumno" />                      
                    </div>
                    <div class="mb-3">
                      <label for="listaCursos" class="form-label">Cursos del alumno</label>
                      <select multiple class="form-control" name="cursos[]" id="listaCursos">                        
                        <?php foreach ($cursos as $curso) { ?>
                            <option 
                            <?php
                                if(!empty($arregloCursos)):
                                    if(in_array($curso['id_curso'], $arregloCursos)):
                                        echo 'selected';
                                    endif;
                                endif;
                            ?>
                            value="<?=$curso['id_curso']?>" ><?=$curso['id_curso']?> - <?=$curso['nombre_curso']?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="btn-group" role="group" aria-label="">
                        <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
                        <button type="submit" name="accion" value="editar" class="btn btn-warning">Editar</button>
                        <button type="submit" name="accion" value="eliminar" class="btn btn-danger">Eliminar</button>
                    </div>
                </div>
                
            </div>

        </form>
    </div>

    <!-- Tabla de visualizacion de datos -->
    <div class="col-md-8">        
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Alumno</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($alumnos as $alumno) { ?>
                <tr>
                    <td><?=$alumno['id_alumno']?></td>
                    <td>
                        <?=$alumno['nombre_alumno'] . " ". $alumno['apellidos_alumno']?>
                        <br />
                        <?php foreach($alumno['cursos'] as $curso) { ?>
                            - <i class="bi bi-file-earmark-pdf"></i><a href="certificado.php?id_curso=<?= $curso['id_curso']?>&id_alumno=<?=$alumno['id_alumno']?>"><?= $curso['nombre_curso']?></a><br />
                        <?php } ?>
                    </td>
                    <td>
                        <form action="" method="post">                               
                            <input type="hidden" name="id_alumno" value="<?= $alumno['id_alumno']?>" />
                            <input type="submit" value="seleccionar" name="accion" class="btn btn-info" />
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
    </div>
</div>


<script src="/assets/tomselect210/tom-select.complete.min.js"></script>
<script>
    new TomSelect('#listaCursos');
</script>

<?php include "../templates/footer.php"; ?>