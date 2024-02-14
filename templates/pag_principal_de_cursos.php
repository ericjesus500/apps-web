<?php include "../../../../../../templates/header.php"?>
<div class="container">
  <nav class="navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </nav>
  <div class="" style="min-height: 1542.06px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Temas del curso</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-8">
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Java Básico</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-unstyled">
                  <li><i class="bi bi-book-half me-2 text-primary"></i>Item 1</li>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer bg-primary disabled">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-danger">
                <h3 class="card-title">Java Intermedio</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-unstyled">
                  <li><i class="bi bi-book-half me-2 text-danger"></i>Item 1</li>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer bg-danger disabled">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-info">
                <h3 class="card-title">Java Avanzado</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-unstyled">
                  <li><i class="bi bi-book-half me-2 text-info"></i>Item 1</li>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer bg-info disabled">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-4">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-bullhorn"></i>
                  Temas de ayuda
                </h3>
              </div>
              <div class="card-body">
                <div class="callout callout-danger">
                  <h5><strong>Articulos</strong></h5>
                  <p>Selección de artículos actualizados al 2023.</p>
                </div>
                <div class="callout callout-info">
                  <h5><strong>Videos</strong></h5>
                  <p>Videos relacionados.</p>
                </div>
                <div class="callout callout-warning">
                  <h5><strong>I am a warning callout!</strong></h5>
                  <p>This is a yellow callout.</p>
                </div>
                <div class="callout callout-success">
                  <h5><strong>I am a success callout!</strong></h5>
                  <p>This is a green callout.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
</div>
<?php include "../../../../../../templates/footer.php"?>