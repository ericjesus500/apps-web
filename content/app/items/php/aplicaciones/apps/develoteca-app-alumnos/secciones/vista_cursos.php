<?php
    include "../templates/head.php";    
?>

    <div class="row mt-2">
        <h5>Estado del Usuario:</h5>
        <?php include "./cursos.php"; ?>
    </div>


    <!-- Formulario -->
    <div class="row">
        <div class="col-12">

            <div class="row">
                
                <!-- Ingreso de datos -->
                <div class="col-md-4">

                    <form action="" method="post">

                        <div class="card mt-4">
                            <div class="card-header">
                                Cursos
                            </div>
                            <div class="card-body">
                                
                                <div class="mb-3">
                                <label for="id_curso" class="form-label">ID</label>
                                <input type="text"
                                    class="form-control" name="id_curso" id="id_curso" aria-describedby="helpId" value="<?=$id_curso?>">      
                                </div>
                                <div class="mb-3">
                                <label for="nombre_curso" class="form-label">Curso</label>
                                <input type="text"
                                    class="form-control" name="nombre_curso" id="nombre_curso" aria-describedby="helpId" placeholder="Nombre del curso" value="<?=$nombre_curso?>">      
                                </div>

                                <div class="btn-group" role="group" aria-label="">
                                    <button type="submit" value="agregar"  name="accion" class="btn btn-success">Agregar</button>
                                    <button type="submit" value="editar"   name="accion" class="btn btn-warning">Editar</button>
                                    <button type="submit" value="eliminar" name="accion" class="btn btn-danger">Eliminar</button>
                                </div>
                    
                            </div>        
                        </div>

                    </form>

                </div>

                <!-- Tabla para la visualizacion de datos -->
                <div class="col-md-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Curso</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($listaCursos as $curso) { ?>
                                <tr>
                                    <td><?= $curso['id_curso']?></td>
                                    <td><?= $curso['nombre_curso']?></td>
                                    <td>
                                        <form action="" method="post">
                                            <input type="hidden" name="id_curso" id="id_curso" value="<?= $curso['id_curso']?>" />
                                            <input type="submit" value="Seleccionar" name="accion" class="btn btn-info">
                                        </form>
                                    </td>
                                </tr>            
                            <?php } ?>
                        </tbody>
                    </table>                    
                </div>

            </div>

        </div>
    </div>
    
<?php
include "../templates/footer.php";
?>