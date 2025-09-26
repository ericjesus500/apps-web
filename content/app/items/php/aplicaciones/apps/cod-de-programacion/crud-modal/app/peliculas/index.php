<?php
	
	session_start();

	require "../config/database.php";

	$sqlPeliculas = "SELECT p.id_pelicula, p.nombre_pelicula, p.descripcion, g.nombre_genero AS genero FROM pelicula AS p
	INNER JOIN genero AS g ON p.id_gen = g.id_genero";

	$peliculas=$conn->query($sqlPeliculas);

	/*echo("<pre>");
	print_r($peliculas);
	echo("</pre>");*/

	$dir = "posters/";
 ?>

<?php include "../templates/head.php"; ?>

<div class="container py-3">
  <h2 class="text-center">PELICULAS</h2>
  <hr>
  <?php if(isset($_SESSION['msg']) && isset($_SESSION['color'])) { ?>

  <div class="alert alert-<?= $_SESSION['color']?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['msg']?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  <?php 
			unset($_SESSION['color']);
			unset($_SESSION['msg']);
	} ?>

  <div class="row justify-content-end">
    <div class="col-auto">
      <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoModal"><i class="bi bi-plus-circle-fill me-2"></i>Registro Nuevo</a>
    </div>
  </div>

  <table class="table table-sm table-striped table-hover my-3">
    <thead class="table-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
        <th scope="col">Género</th>
        <th scope="col"></th>
        <th scope="col">Póster</th>
        <th scope="col" colspan="2">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row_pelicula = $peliculas->fetch_assoc()) { ?>
      <tr>
        <td scope="row"><?= $row_pelicula['id_pelicula']?></td>
        <td><?= $row_pelicula['nombre_pelicula']?></td>
        <td><?= $row_pelicula['descripcion']?></td>
        <td colspan="2"><?= $row_pelicula['genero']?></td>
        <td><img src="<?= $dir.$row_pelicula['id_pelicula'].'.jpg?n='.time()?>" width="100" class="img-fluid"></td>
        <td>
          <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editaModal" data-bs-id="<?= $row_pelicula['id_pelicula'] ?>"><i class="bi bi-pencil-square me-1"></i></a>
        </td>
        <td>
          <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-id="<?= $row_pelicula['id_pelicula'] ?>"><i class="bi bi-trash me-1"></i></a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<?php
		$sqlGenero= "SELECT * FROM genero";
		$generos = $conn->query($sqlGenero);
	 ?>

<?php include "nuevoModal.php" ?>
<?php $generos->data_seek(0); ?>
<?php include "editarModal.php" ?>
<?php include "eliminaModal.php" ?>

<script>
let nuevoModal = document.getElementById('nuevoModal')
let editaModal = document.getElementById('editaModal')
let eliminaModal = document.getElementById('eliminaModal')

nuevoModal.addEventListener('shown.bs.modal', event => {
  nuevoModal.querySelector('.modal-body #nombre').focus()
})

nuevoModal.addEventListener('hide.bs.modal', event => {
  nuevoModal.querySelector('.modal-body #nombre').value = ""
  nuevoModal.querySelector('.modal-body #descripcion').value = ""
  nuevoModal.querySelector('.modal-body #genero').value = ""
  nuevoModal.querySelector('.modal-body #poster').value = ""
})

editaModal.addEventListener('hide.bs.modal', event => {
  editaModal.querySelector('.modal-body #nombre').value = ""
  editaModal.querySelector('.modal-body #descripcion').value = ""
  editaModal.querySelector('.modal-body #genero').value = ""
  editaModal.querySelector('.modal-body #img_poster').value = ""
  editaModal.querySelector('.modal-body #poster').value = ""
})

editaModal.addEventListener('shown.bs.modal', event => {
  let button = event.relatedTarget
  let id = button.getAttribute('data-bs-id')

  let inputId = editaModal.querySelector('.modal-body #id')
  let inputNombre = editaModal.querySelector('.modal-body #nombre')
  let inputDescripcion = editaModal.querySelector('.modal-body #descripcion')
  let inputGenero = editaModal.querySelector('.modal-body #genero')
  let poster = editaModal.querySelector('.modal-body #img_poster')

  let url = "getPelicula.php"
  let formData = new FormData()
  formData.append('id', id)

  fetch(url, {
      method: "POST",
      body: formData
    }).then(response => response.json())
    .then(data => {

      inputId.value = data.id_pelicula
      inputNombre.value = data.nombre_pelicula
      inputDescripcion.value = data.descripcion
      inputGenero.value = data.id_gen
      poster.src = '<?= $dir ?>' + data.id_pelicula + '.jpg'

    }).catch(err => console.log(err))
})

eliminaModal.addEventListener('shown.bs.modal', event => {
  let button = event.relatedTarget
  let id = button.getAttribute('data-bs-id')
  eliminaModal.querySelector('.modal-footer #id').value = id

})
</script>

<?php include "../templates/footer.php";?>