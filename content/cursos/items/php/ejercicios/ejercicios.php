<?php include_once "./templates/head.php";?>
  <title>Ejercicios PHP</title>
</head>

<body>
  <div class="container-fluid mt-2">
    <!-- navbar -->
    <div class="row border w-100 m-auto rounded-3">
      <nav class="navbar navbar-expand-lg rounded-3" style="background-color:#c42e6a;">
        <div class="container">
          <a class="navbar-brand text-white" href="/index.php">APPS-WEB</a>
          <button class="navbar-toggler" style="background-color: #f9629e;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="text-white"><i class="bi bi-list"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item d-sm-inline-block">
                <a href="https://tc39.es/ecma262/" class="nav-link text-white" target="_blank">PHP Oficial</a>
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                <a href="/content/cursos/items/javascript/referencias/referencias.php" class="nav-link text-white">Referencias</a>
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                <a href="/content/cursos/items/javascript/guias/guias.php" class="nav-link text-white">Guias</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pag. de ayuda
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" tabindex="-1" href="https://sweetalert2.github.io/" target="_blank">Sweetalert 2</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://tailwindcss.com/" target="_blank">TailwindCSS</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://getbootstrap.com/docs/5.0/getting-started/introduction/" target="_blank">Bootstrap</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="hhttps://fontawesome.com/" target="_blank">Fontawesome</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://cdnjs.com/libraries/font-awesome" target="_blank">Fontawesome Libraries</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://animate.style/" target="_blank">Animate CSS</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="http://www.imagehover.io/" target="_blank">Imagehover.io</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://www.cssmatic.com/es/" target="_blank">CSS Matic</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://bennettfeely.com/" target="_blank">Bennett Feely</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://uigradients.com/#SeaWeed" target="_blank">Gradientes</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://www.color-hex.com/color-palettes/" target="_blank">Paletas de Colores</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://htmlcolorcodes.com/es/" target="_blank">Códigos de colores</a></li>
                </ul>
              </li>
              <li class="nav-item d-sm-inline-block">
                <a href="http://codigos/items/javascript/index.php" class="nav-link text-white" target="_blank">Mi manual</a>
              </li>
              <li class="nav-item d-sm-inline-block">
                <a href="/content/cursos/items/php/apps/apps.php" class="nav-link text-white" target="_blank">Apps</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-info" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
    <!-- ejercicios -->
    <div class="row p-5">
      <div class="col-md-12">
        <h1>Ejercicios PHP</h1>
        <ul class="ejercicios">
          <li class="my-2 fs-5"><i class="bi bi-check2-square px-2" style="color:#a70747;"></i><a class="btn-link" href="./generar_passwords/index.php" target="_blank">Función para Generar Psswords</a></li>
          <li class="my-2 fs-5"><i class="bi bi-check2-square px-2" style="color:#a70747;"></i><a class="btn-link" href="" target="_blank"></a></li>
          <li class="my-2 fs-5"><i class="bi bi-check2-square px-2" style="color:#a70747;"></i><a class="btn-link" href="" target="_blank"></a></li>
          <li class="my-2 fs-5"><i class="bi bi-check2-square px-2" style="color:#a70747;"></i><a class="btn-link" href="" target="_blank"></a></li>
          <li class="my-2 fs-5"><i class="bi bi-check2-square px-2" style="color:#a70747;"></i><a class="btn-link" href="" target="_blank"></a></li>
          <li class="my-2 fs-5"><i class="bi bi-check2-square px-2" style="color:#a70747;"></i><a class="btn-link" href="" target="_blank"></a></li>
          <li class="my-2 fs-5"><i class="bi bi-check2-square px-2" style="color:#a70747;"></i><a class="btn-link" href="" target="_blank"></a></li>
          <li class="my-2 fs-5"><i class="bi bi-check2-square px-2" style="color:#a70747;"></i><a class="btn-link" href="" target="_blank"></a></li>
          <li class="my-2 fs-5"><i class="bi bi-check2-square px-2" style="color:#a70747;"></i><a class="btn-link" href="" target="_blank"></a></li>
        </ul>
      </div>
    </div>
  </div>

<?php include_once "./templates/footer.php";?>