<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pathway+Extreme:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/2025/bootstrap533/css/bootstrap.min.css">
  <!-- DataTables -->
  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="/assets/2025/bootstrap-icons-1113/font/bootstrap-icons.min.css">
  <!-- Mis estilos -->
  <link rel="stylesheet" href="/src/css/estilos_generales.css">

  <title>Ejercicios CSS</title>
</head>

<body>
  <div class="container-fluid mt-2">
    <!-- navbar -->
    <div class="row border w-100 m-auto rounded-3">
      <nav class="navbar navbar-expand-lg bg-tomato rounded-3">
        <div class="container">
          <a class="navbar-brand text-white" href="/index.php">APPS-WEB</a>
          <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="text-white"><i class="bi bi-list"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a href="https://www.w3.org/TR/CSS/" class="nav-link text-white" aria-current="page" target="_blank">CSS Oficial</a>
              </li>
              <li class="nav-item">
                <a href="/content/cursos/items/css/referencias/referencias.php" class="nav-link text-white">Referencias</a>
              </li>
              <li class="nav-item">
                <a href="/content/cursos/items/css/guias/guias.php" class="nav-link text-white">Guias</a>
              </li>
              <li class="nav-item d-sm-inline-block">
                <a href="/content/cursos/items/css/ejercicios/ejercicios.php" class="nav-link text-white" target="_blank">Ejercicios</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pag. de ayuda
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" tabindex="-1" href="https://tailwindcss.com/" target="_blank">TailwindCSS</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://getbootstrap.com/docs/5.0/getting-started/introduction/" target="_blank">Bootstrap</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="hhttps://fontawesome.com/" target="_blank">Fontawesome</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://cdnjs.com/libraries/font-awesome" target="_blank">Fontawesome Libraries</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://css-tricks.com/" target="_blank">CSS Tricks</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://materializecss.com/" target="_blank">Materialize</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://material.io/" target="_blank">Material Design</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://animate.style/" target="_blank">Animate CSS</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://css-tricks.com/guides/" target="_blank">Guia de CSS-Tricks</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://jonmircha.com/grid" target="_blank">Grid J. Mirch</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="http://www.imagehover.io/" target="_blank">Imagehover.io</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://www.cssmatic.com/es/" target="_blank">CSS Matic</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://bennettfeely.com/" target="_blank">Bennett Feely</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://uigradients.com/#SeaWeed" target="_blank">Gradientes</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://css-tricks.com/tag/gradients/" target="_blank">CSS Tricks Gradientes</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://www.color-hex.com/color-palettes/" target="_blank">Paletas de Colores</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://www.w3schools.com/colors/colors_hex.asp" target="_blank">Colores w3schools</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="https://freephotos.cc/es" target="_blank">Free Photos</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="/content/cursos/items/css/novedades/novedades.php" class="nav-link text-white">Novedades</a>
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
        <h1>Ejercicios CSS</h1>
        <ul class="ejercicios">
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./freecodecamp/index.php" target="_blank">Pagina web básica - by freeCodeCamp</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./plantillas/aside_derecha/index.php" target="_blank">Plantilla aside derecha</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./menu_animado/menu_animado.php" target="_blank">Menu animado con CSS Responsive SIN Javascript - by AlexCG Design</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./input_animado/input_animado.php" target="_blank">Inputs animados.</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./vida_mrr/menu_horizontal/menu_horizontal.php" target="_blank">Menu Horizontal responsivo - by Vida MRR</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./vida_mrr/animacion_tarjetas/anime_cards.php" target="_blank">Animación en tarjetas - by Vida MRR</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./vida_mrr/tabla_estilos_basicos/tabla_estilos_basicos.php" target="_blank">Tabla con estilos basicos - by Vida MRR</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./vida_mrr/notificaciones/notificaciones.php" target="_blank">Notificaciones con efecto - by Vida MRR</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./vida_mrr/login_responsivo/login_responsivo.php" target="_blank">Login Reponsivo - by Vida MRR</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./freecodecamp/encuesta.php" target="_blank">Desafio de Encuesta - by freeCodeCamp</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./freecodecamp/homenaje.php" target="_blank">Desafio Homenaje - by freeCodeCamp</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./freecodecamp/tabla_1.php" target="_blank">Desafio Creación de una tabla - by freeCodeCamp</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./freecodecamp/cat.php" target="_blank">Desafio Creación de un gato - by freeCodeCamp</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./freecodecamp/piano.php" target="_blank">Desafio Creación de un piano - by freeCodeCamp</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./freecodecamp/app_doc.php" target="_blank">Desafio App documentación - by freeCodeCamp</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./card-rotating-3d/index.php" target="_blank">3D rotating cards using CSS - by Sumod Panicker</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./cssnippets/radius_cards/index.php" target="_blank">CSS Hack Create Inverted Border Radius Cards - by CSSnippets</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./onlinetutorials/inverted-border/index.php" target="_blank">How To Create Inverted border-radius Card With CSS - by Online Tutorials</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./onlinetutorials/menu_navigation/index.php" target="_blank">Magic Navigation Menu Indicator using Html CSS & Javascript | Curve Outside Effects - by Online Tutorials</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./alexcgdesign/side_navigation/index.php" target="_blank">Menú Side Navigation Animado Avanzado - by AlexCG Design</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./alexcgdesign/dropdown/index.html" target="_blank">Dropdown - by AlexCG Design</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="" target="_blank"></a></li>
        </ul>
      </div>
    </div>
  </div>

  <script src="/assets/2025/bootstrap533/js/bootstrap.bundle.min.js"></script>
</body>

</html>