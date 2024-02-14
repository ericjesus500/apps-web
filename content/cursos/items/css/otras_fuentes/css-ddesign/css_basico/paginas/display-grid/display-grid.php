<?php include "../../../../templates/head.php";?>    
    <link rel="stylesheet" href="./grid-css.css">
    <title>GRID CSS | Help</title>
    
<?php include "../../nav-css.php";?>
<div class="container-fluid content-gen">
    <div class="row mt-3 contenido">
        <!-- indice -->
        <div class="col-md-3">            
            <nav class="nav-indice">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-check2-square"></i>Grid Layout</a>
                        <ul class="dropdown-menu">
                            <li><i class="bi bi-back"></i><a class="nav-item" href="#grid-config">Configuración de layout</a></li>
                            <li><i class="bi bi-back"></i><a class="nav-item" href="#grid-position">Posicionando los grid-item</a></li>
                            <li><i class="bi bi-back"></i><a class="nav-item" href="#row-height">Alto de las filas:</a></li>
                            <li><i class="bi bi-back"></i><a class="nav-item" href="#grid-layout-um">Unidad de medidas fr y auto</a></li>
                            <li><i class="bi bi-back"></i><a class="nav-item" href="#grid-layout-repeat">Función repeat( )</a></li>
                            <li><i class="bi bi-back"></i><a class="nav-item" href="#grid-types">Implicit & explicit grid</a></li>
                            <li><i class="bi bi-back"></i><a class="nav-item" href="#grid-limit">Fijando límites a los grid-item</a></li>
                            <li><i class="bi bi-back"></i><a class="nav-item" href="#aling-order">Alineamiento & order</a></li>
                            <li><i class="bi bi-back"></i><a class="nav-item" href="#grid-template-areas">Grid template areas</a></li>
                            <li><i class="bi bi-back"></i><a class="nav-item" href="#grid-lines">Nombrando grid lines</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- contenido -->
        <div class="col-md-9">
            <?php include "./introduccion.php";?>
        </div>
    </div>
</div>

<?php include "../../../../templates/footer.php"?>