<?php include_once "../../../../../../templates/header.php"; ?>
<link rel="stylesheet" href="../../src/css/css-css.css">
<title>CSS DESIGN | Básico</title>
</head>

<body class="w-100 m-auto">
  <div class="wrapper w-100 m-auto">

    <div class="container-fluid">
      <!-- Navbar -->
      <div class="row m-auto w-100 ">
        <?php include_once "../../templates/navbar-css-full.php"; ?>
      </div>

      <!-- Niveles -->
      <div class="row pb-3 m-auto w-100">
        <div class="col-md-12 col-sm-12 w-100 d-flex ps-3">
          <div class="form-check form-check-inline">
            <label class="form-check-label">Seleccione un nivel :</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input check-nivel" type="radio" name="flexRadioDefault" id="inlineRadio1" value="basico" checked>
            <label class="form-check-label" for="inlineRadio1">Básico</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input check-nivel" type="radio" name="flexRadioDefault" id="inlineRadio2" value="intermedio">
            <label class="form-check-label" for="inlineRadio2">Intermedio</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input check-nivel" type="radio" name="flexRadioDefault" id="inlineRadio3" value="avanzado">
            <label class="form-check-label" for="inlineRadio3">Avanzado</label>
          </div>
        </div>
      </div>

      <!-- Content Wrapper. Contains page content -->
      <div class="m-auto" style="min-height: 361px;">
        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <!-- css basico -->
            <div id="basico" class="row m-auto p-0">
              <div class="col-sm-12 col-md-12">
                <section>
                  <div class="card">
                    <div class="card-header bg-tomato disable">
                      <div class="row">
                        <div class="col-sm-8">
                          <div class="row">
                            <div class="col-sm-2 col-md-2 d-flex align-items-center">
                              <h3 class="card-title">Básico :</h3>
                            </div>
                            <div class="col-sm-4 col-md-4">
                              <div class="btn-group">
                                <button type="button" class="btn btn-default">Seleccione un Tema</button>
                                <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                  <span class="sr-only">Seleccione un Tema</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                  <a class="dropdown-item" href="#vert-tabs-item-basico-1-tab">Item 1</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-basico-2-tab">Item 2</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-basico-3-tab">Item 3</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-basico-4-tab">Item 4</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-basico-5-tab">Item 5</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-basico-6-tab">Item 6</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-basico-7-tab">Item 7</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-basico-8-tab">Item 8</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-basico-9-tab">Item 9</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-basico-10-tab">Item 10</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-6 d-flex flex-row-reverse">
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 d-flex flex-row-reverse">
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="margin">
                        <div class="row m-auto p-1">
                          <div class="col-md-12">
                            <?php include_once "./css_basico/index.php" 
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer bg-tomato">
                      Vea el tema en la página oficial de CSS
                    </div>
                  </div>
                </section>
              </div>
            </div>
            <!-- css intermedio -->
            <div id="intermedio" class="row m-auto p-0 d-none">
              <div class="col-sm-12 col-md-12">
                <section>
                  <div class="card">
                    <div class="card-header bg-warning disable">
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="row">
                            <div class="col-sm-4 d-flex align-items-center">
                              <h3 class="card-title">Intermedio :</h3>
                            </div>
                            <div class="col-sm-8">
                              <div class="btn-group">
                                <button type="button" class="btn btn-default">Seleccione un Tema</button>
                                <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                  <span class="sr-only">Seleccione un Tema</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                  <a class="dropdown-item" href="#vert-tabs-item-intermedio-1-tab">Item 1</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-intermedio-2-tab">Item 2</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-intermedio-3-tab">Item 3</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-intermedio-4-tab">Item 4</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-intermedio-5-tab">Item 5</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-intermedio-6-tab">Item 6</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-intermedio-7-tab">Item 7</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-intermedio-8-tab">Item 8</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-intermedio-9-tab">Item 9</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-intermedio-10-tab">Item 10</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-8 d-flex flex-row-reverse">
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="margin">
                        <div class="row m-auto p-1">
                          <div class="col-md-12">
                            <?php include_once "./css_intermedio/index.php" ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer bg-warning">
                      Vea el tema en la página oficial de CSS
                    </div>
                  </div>
                </section>
              </div>
            </div>
            <!-- css avanzado -->
            <div id="avanzado" class="row m-auto p-0 d-none">
              <div class="col-sm-12 col-md-12">
                <section>
                  <div class="card">
                    <div class="card-header bg-info">
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="row">
                            <div class="col-sm-4 d-flex align-items-center">
                              <h3 class="card-title">Avanzado :</h3>
                            </div>
                            <div class="col-sm-8">
                              <div class="btn-group">
                                <button type="button" class="btn btn-default">Seleccione un Tema</button>
                                <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                  <span class="sr-only">Seleccione un Tema</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                  <a class="dropdown-item" href="#vert-tabs-item-avanzado-1-tab">Item 1</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-avanzado-2-tab">Item 2</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-avanzado-3-tab">Item 3</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-avanzado-4-tab">Item 4</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-avanzado-5-tab">Item 5</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-avanzado-6-tab">Item 6</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-avanzado-7-tab">Item 7</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-avanzado-8-tab">Item 8</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-avanzado-9-tab">Item 9</a>
                                  <a class="dropdown-item" href="#vert-tabs-item-avanzado-10-tab">Item 10</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-8 d-flex flex-row-reverse">
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="margin">
                        <div class="row m-auto p-1">
                          <div class="col-md-12">
                            <?php include_once "./css_avanzado/index.php" ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer bg-info">
                      Vea el tema en la página oficial de CSS
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-primary bg-light" style="display: none; height: 70vh;">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
          <h5>Tutoriales Online</h5>
          <li class="nav-item d-flex flex-column">
            <a href="https://programadorwebvalencia.com/cursos/php/formularios/" target="_blank">
              <i class="fa-solid fa-check-to-slot ms-3"></i> Web Valencia
            </a>
            <a href="https://www.geeksforgeeks.org/php-tutorial/?ref=footer" target="_blank">
              <i class="fa-solid fa-check-to-slot ms-3"></i> DSA geeksforgeeks
            </a>
            <a href="https://desarrolloweb.com/manuales/manual-php.html" target="_blank">
              <i class="fa-solid fa-check-to-slot ms-3"></i> Desarrollo Web
            </a>
          </li>
          <div class="dropdown-divider"></div>

          <h5>Dashboard</h5>
          <li class="nav-item d-flex flex-column">
            <a href="http://codigos/assets/vali-admin-master-2023/docs/dashboard.html" class="" target="_blank">
              <i class="fa-regular fa-compass ms-3"></i> Vali Admin
            </a>
            <a href="http://codigos/assets/adminlte320/index.html" class="" target="_blank">
              <img src="../src/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 ms-3  me-1" style="width: 1rem; opacity: .8"> AdminLTE 3.2.0
            </a>
            <a href="https://html5up.net/" class="" target="_blank">
              <i class="fa-brands fa-html5 ms-3"></i> HTML 5 UP
            </a>
          </li>
          <div class="dropdown-divider"></div>

          <h5>Utiles</h5>
          <li class="nav-item d-flex flex-column">
            <a href="https://datatables.net/" target="_blank">
              <i class="fa-solid fa-table-list ms-3"></i> DataTables
            </a>
            <a href="http://www.fpdf.org/" target="_blank">
              <img class="ms-3 me-1" src="../src/img/fpdf.jpg" alt="Fpdf" style="width:1.3rem;"> FPDF
            </a>
            <a href="https://getcomposer.org/doc/" target="_blank">
              <img class="ms-3 me-1" src="../src/img/composer.png" alt="Composer" style="width:1.3rem;"> Composer
            </a>
            <a href="https://packagist.org/" target="_blank">
              <img class="ms-3 me-1" src="../src/img/packagist.png" alt="Packagist" style="width:1.3rem;">Packagist
            </a>
            <!-- <a href="" target="_blank">
              <i class="fa-solid fa-code ms-3"></i> Cheat sheet
            </a> -->
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-item d-flex flex-column">
            <a href="/content/cursos/articulos/codigos_ascii.html" target="_blank">
              <i class="fa-solid fa-table-list ms-3"></i>Cod. ASCII
            </a>
          </li>
          <li class="nav-item d-flex flex-column">
            <a href="/content/cursos/articulos/codigos_html.html" target="_blank">
              <i class="fa-solid fa-table-list ms-3"></i>Cod. HTML
            </a>
          </li>
          <div class="dropdown-divider"></div>
        </div>
      </aside>
      <!-- /.control-sidebar -->
    </div>

  </div>


  <?php include_once "../../../../../../templates/footer.php"; ?>