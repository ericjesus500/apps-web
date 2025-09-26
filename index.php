  <?php include "./templates/header.php" ?>
  <title>APPS WEB</title>
  </head>

  <body class="hold-transition sidebar-mini data-prismjs-copy-timeout="500"">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="/content/cursos/articulos/html_css/codigos_ascii.html" target="_blank" class="nav-link">Cod. ASCII</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="/content/cursos/articulos/html_css/codigos_html.html" target="_blank" class="nav-link">Cod. HTML</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Templates
            </a>
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-5px, 40px, 0px);">
              <a class="dropdown-item" tabindex="-1" href="/assets/AdminLTE-3.2.0/index.html" target="_blank">Admin LTE 3</a>
              <a class="dropdown-item" tabindex="-1" href="#">Valid Admin</a>
              <a class="dropdown-item" tabindex="-1" href="#"></a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <?php include "./templates/sidebar_inicial.php" ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper p-3">
        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div id="resultado" class="w-100">
                <div class="row">
                  <div class="col-lg-6">
                    <!-- COLECCION DE VIDEOS PARA ESTUDIO  -->
                    <div class="card">
                      <div class="card-header bg-purple">
                        Videos
                      </div>
                      <div class="card-body">
                        <h5 class="card-title text-info">COLECCION DE VIDEOS PARA ESTUDIO</h5>
                        <p class="card-text">App que permite ingresar, eliminar o marcar como vistos las distintas
                          colecciones
                          de videos de programación.</p>
                      </div>
                      <div class="card-footer">
                        <a href="./videos/index.php" class="btn btn-info">Ir a la colección</a>
                      </div>
                    </div>
                    <!-- COLECCION DE APLICACIONES -->
                    <div class="card">
                      <div class="card-header bg-purple">
                        Apps
                      </div>
                      <div class="card-body">
                        <h5 class="card-title text-info">COLECCION DE APLICACIONES</h5>
                        <p class="card-text">App que permite crear aplicaciones de distintos autores con explicación
                          detallada
                          para una mejor comprensión de las distintas tecnologías.</p>
                      </div>
                      <div class="card-footer">
                        <a href="./apps/index.php" class="btn btn-info">Ir a la colección</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <!-- COLECCION DE EJERCICIOS -->
                    <div class="card">
                      <div class="card-header bg-purple">
                        Ejercicios
                      </div>
                      <div class="card-body">
                        <h5 class="card-title text-info">COLECCION DE EJERCICIOS</h5>
                        <p class="card-text">App que permite crear distintos ejercicios con explicación detallada para
                          una
                          mejor comprensión.</p>
                      </div>
                      <div class="card-footer">
                        <a href="./ejercicios/index.php" class="btn btn-info">Ir a la colección</a>
                      </div>
                    </div>
                    <!-- TEMAS DE PROGRAMACION -->
                    <div class="card">
                      <div class="card-header bg-purple">
                        Temas
                      </div>
                      <div class="card-body">
                        <h5 class="card-title text-info">TEMAS DE PROGRAMACION</h5>
                        <p class="card-text">App que permite ingresar, eliminar, modificar y visualizar todos los temas
                          tratados en este site de cursos de programación.</p>
                      </div>
                      <div class="card-footer">
                        <a href="./temas/index.php" class="btn btn-info">Ir a la colección</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include "./templates/footer.php" ?>