<?php include_once "../../../helps/ruta.php"; ?>
<?php include "./modals/modalNuevoUsuario.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mejaalex | CRUD PHP SIN RECARGAR LA PAGINA</title>
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        <h1 class="my-4 text-center text-info">CRUD CON PHP SIN RECARGAR LA PAGINA</h1>


        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoUsuario">
                <i class="bi bi-person-plus-fill my-2"></i>
                Agregar Usuario
            </button>
        </div>

        <table id="table_adm" class="table table-sm table-striped table-hover my-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
					include_once "./config/conexion.php";
					$data = mysqli_query($conex, "SELECT * FROM usuarios");
				 	
				 	while ($consulta = mysqli_fetch_array($data)) {

				 	/*Código prueba para visualizar datos de la base de datos*/
				 	$data_bd = $consulta['id_cliente'].','.$consulta['usuario'].','.$consulta['correo'].','.$consulta['telefono'].','.$consulta['rol'];
				 	/*FIN Codigo prueba para visualizar datos de la base de datos*/

				?>
                <tr>
                    <!-- Visualizar la información que viene en el array -->
                    <td><?= $consulta['id_cliente']?></td>
                    <td><?= $consulta['usuario']?></td>
                    <td><?= $consulta['correo']?></td>
                    <td><?= $consulta['telefono']?></td>
                    <td><?= $consulta['rol']?></td>
                    <td>
                        <!-- Modal Editar Usuario -->
                        <?php include_once "./modals/modalEditarUsuario.php";?>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#editarUsuario" onclick="modificar('<?php echo $data_bd; ?>')"><i
                                class="bi bi-pencil-square"></i></button>

                        <!-- Modal Eliminar Usuario -->
                        <?php include_once "./modals/modalEliminarUsuario.php";?>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#eliminarUsuario" onclick="eliminar('<?php echo $data_bd; ?>')"><i
                                class="bi bi-trash"></i></button>
                    </td>
                </tr>

                <!-- Prueba de Visualización de los datos de la base de datos en alert -->
                <!-- <script type="text/javascript">
						alert("<?=$data_bd?>");
					</script> -->
                <!--FIN Prueba de Visualización de los datos de la base de datos en alert -->

                <?php } ?>
            </tbody>
        </table>

    </div>
    <script src="/assets/jquery371.min.js"></script>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_URL."php/aplicaciones/apps/mejaalex/crud_sin_recargar/app/js/funciones.js"?>"></script>
</body>

</html>