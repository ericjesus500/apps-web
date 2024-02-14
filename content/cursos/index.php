<?php include "./templates/head_cursos.php"?>
<title>CURSOS</title>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/content/cursos/index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <?php include "./templates/sidebar_cursos.php"?>
    <!-- /.Main Sidebar Container-->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <div class="content p-2">
        <div class="container-fluid">
          <div id="resultado">
            <div class="row">
              <div class="col-lg-8">
                <div class="card">
                  <div class="card-header bg-danger">
                    <h5 class="m-0">Guías seleccionadas para desarrolladores</h5>
                  </div>
                  <div class="card-body">
                    <!-- <h6 class="card-title">Special title treatment</h6> -->
                    <p class="card-text">Esta es una lista de guías de alta calidad sobre temas específicos recopilados
                      para que disfrute aprendiendo. Esta lista de tutoriales de la comunidad es un directorio
                      experimental que comienza solo con CSS, Git y un poco de JavaScript , pero se ampliará para cubrir
                      temas más generales. ¡Disfruta buceando!
                    </p>
                    <a href="https://dev.to/guides" class="btn btn-outline-danger" target="_blank">Ir a la lista</a>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h5 class="m-0">Tecnologías</h5>
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">Special title treatment</h6>

                    <p class="card-text">With supporting text below as a natural lead-in to additional content.
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div><!-- /.card -->
              <div class="col-lg-4">
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.Main content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->

  <!-- MIS SCRIPTS -->
  <!-- <script src="./cursos.js"></script> -->
  <!-- REQUIRED SCRIPTS -->

  <?php include "./templates/footer_cursos.php"?>