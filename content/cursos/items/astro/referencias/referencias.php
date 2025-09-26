<?php include "../../../../../templates/header.php" ?>
<title>Astro | Referencias</title>
</head>

<body class="w-100 m-auto">

  <div class="wrapper w-100 m-auto">

    <div class="container-fluid">
      <!-- Navbar -->
      <div class="row m-auto w-100">
        <?php include_once "../templates/navbar-astro-full.php"; ?>
      </div>

      <!-- Niveles -->
      <div class="row pb-3 w-100 m-auto">
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
            <!-- Astro basico -->
            <div id="basico" class="row m-auto p-0">
              <div class="col-sm-12 col-md-12">
                <section>
                  <div class="card">
                    <div class="card-header bg-primary disable">
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
                    <div class="card-body b-refer">
                      <div class="margin">
                        <div class="row m-auto p-1">
                          <div class="col-12">
                            <?php include_once "ref-basico.php" ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer bg-primary">
                      Vea el tema en la página oficial de ASTRO
                    </div>
                  </div>
                </section>
              </div>
            </div>
            <!-- Astro intermedio -->
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
                    <div class="card-body b-refer">
                      <div class="margin">
                        <div class="row m-auto p-1">
                          <div class="col-12">
                            <?php include_once "ref-intermedio.php" ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer bg-warning">
                      Vea el tema en la página oficial de ASTRO
                    </div>
                  </div>
                </section>
              </div>
            </div>
            <!-- Astro avanzado -->
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
                    <div class="card-body b-refer">
                      <div class="margin">
                        <div class="row m-auto p-1">
                          <div class="col-12">
                            <?php include_once "ref-avanzado.php" ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer bg-info">
                      Vea el tema en la página oficial de ASTRO
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
            <div class="dropdown-divider"></div>
            <a href="https://www.aprendejavascript.dev/" target="_blank">
              <i class="fa-solid fa-check-to-slot ms-3"></i> Aprende Javascript
            </a>
            <a href="https://developer.mozilla.org/es/docs/Web/JavaScript" target="_blank">
              <i class="fa-solid fa-check-to-slot ms-3"></i> JS MDN
            </a>
            <a href="/content/cursos/items/javascript/otras_fuentes/lenguajejs.com/javascript/index.htm" target="_blank">
              <i class="fa-solid fa-check-to-slot ms-3"></i> LenguajeJS.com
            </a>
            <a href="http://codigos/items/javascript/otras-fuentes/curso-ddesign/ddesing-2019.html" target="_blank">
              <i class="fa-solid fa-check-to-slot ms-3"></i> JS Moderno 2019
            </a>
            <a href="http://codigos/items//javascript/otras-fuentes/curso-ddesign/manual_dd-2019.html" target="_blank">
              <i class="fa-solid fa-check-to-slot ms-3"></i> Dorian Design 2020
            </a>
          </li>
          <div class="dropdown-divider"></div>

          <h5>Dashboard</h5>
          <li class="nav-item d-flex flex-column">
            <div class="dropdown-divider"></div>
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
            <div class="dropdown-divider"></div>
            <a href="https://datatables.net/" target="_blank">
              <i class="fa-solid fa-table-list ms-3"></i> DataTables
            </a>
            <a href="/content/cursos/items/javascript/cheatsheets/js-ch-lenguajejs.com.pdf" target="_blank">
              <i class="fa-solid fa-table-list ms-3"></i> Cheatsheet Lenguajejs
            </a>
            <a href="/content/cursos/items/javascript/cheatsheets/js-ch.pdf" target="_blank">
              <i class="fa-solid fa-table-list ms-3"></i> Cheatsheet LoveCoding
            </a>
            <a href="http://codigos/items/javascript/src/eloquent.pdf" target="_blank">
              <i class="fa-solid fa-file-pdf ms-3"></i> Eloquent JS PDF
            </a>
          </li>
          <div class="dropdown-divider"></div>
        </div>
      </aside>
      <!-- /.control-sidebar -->
    </div>

  </div>


  <?php include "../../../../../templates/footer.php" ?>