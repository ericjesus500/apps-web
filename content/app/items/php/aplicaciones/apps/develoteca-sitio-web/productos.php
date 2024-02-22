<?php include "./template/head.php"; ?>

<?php
    include "admin/config/bd.php";
    $sentenciaSQL=$conexion->prepare("SELECT * FROM libros");
    $sentenciaSQL->execute();
    $listaLibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<br /><br /><br />

<div class="container">
    <div class="card-group">
        <div class="row">
            <?php foreach($listaLibros as $libro){?>

            <div class="col col-sm-12 col-md-6 col-lg-4 col-xl-3 card" style="max-width: 20rem;">
                <img class="card-img-top" src="./img/<?= $libro['imagen_libro']?>" alt="imagen_libro">
                <div class="card-body">
                    <h4 class="card-title"><?= $libro['nombre_libro']?></h4>
                    <a name="" id="" class="btn btn-primary" href="#" role="button">Ver más</a>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
</div>

<?php include "template/footer.php";?>