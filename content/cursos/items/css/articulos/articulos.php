<?php include "../../../../../templates/header.php";?>

<title>CSS | Artículos</title>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php include "../templates/navbar-css.php"?>
    <!-- Content Wrapper. Contains page content -->
    <section class="content mt-2">
      <!-- Main content -->
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-edit"></i>
              <span class="h1">ARTICULOS DIVERSOS</span>
            </h3>
          </div>
          <div class="card-body bg-dark">
            <div class="row">
              <div class="col-5 col-sm-3">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="vert-tabs-concepto-tab" data-toggle="pill" href="#vert-tabs-concepto" role="tab" aria-controls="vert-tabs-concepto" aria-selected="true">Detectar cambios sucesivos del tamaño de la ventana del navegador</a>
                  <a class="nav-link" id="vert-tabs-compilador-tab" data-toggle="pill" href="#vert-tabs-compilador" role="tab" aria-controls="vert-tabs-compilador" aria-selected="false">Titulo 2</a>
                  <a class="nav-link" id="vert-tabs-transpilador-tab" data-toggle="pill" href="#vert-tabs-transpilador" role="tab" aria-controls="vert-tabs-transpilador" aria-selected="false">Titulo 3 </a>
                  <a class="nav-link" id="vert-tabs-linter-tab" data-toggle="pill" href="#vert-tabs-linter" role="tab" aria-controls="vert-tabs-linter" aria-selected="false">Titulo 4</a>
                </div>
              </div>
              <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                  <div class="tab-pane text-left fade show active" id="vert-tabs-concepto" role="tabpanel" aria-labelledby="vert-tabs-concepto-tab">
                    <?php include_once("./articulo1.php")?>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-compilador" role="tabpanel" aria-labelledby="vert-tabs-compilador-tab">
                    <?php include_once("./articulo2.php")?>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-transpilador" role="tabpanel" aria-labelledby="vert-tabs-transpilador-tab">
                    <?php include_once("./articulo3.php")?>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-linter" role="tabpanel" aria-labelledby="vert-tabs-linter-tab">
                    <?php include_once("./articulo4.php")?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.Main content -->
    </section>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->

  <?php include "../../../../../templates/footer.php";

?>