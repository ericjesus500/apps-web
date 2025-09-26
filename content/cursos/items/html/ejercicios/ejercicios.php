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
  <link rel="stylesheet" href="/assets/bootstrap533/css/bootstrap.min.css">
  <!-- DataTables -->
  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="/assets/2025/bootstrap-icons-1113/font/bootstrap-icons.min.css">
  <!-- Mis estilos -->
  <link rel="stylesheet" href="/src/css/estilos_generales.css">

  <title>Ejercicios HTML</title>
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
                <a href="https://html.spec.whatwg.org/multipage/" class="nav-link text-white" aria-current="page" target="_blank">HTML Oficial</a>
              </li>
              <li class="nav-item">
                <a href="/content/cursos/items/html/referencias/referencias.php" class="nav-link text-white">Referencias</a>
              </li>
              <li class="nav-item">
                <a href="/content/cursos/items/html/guias/guias.php" class="nav-link text-white">Guias</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pag. de ayuda
                </a>                
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-5px, 40px, 0px);">
                  <a class="dropdown-item" tabindex="-1" href="https://html5.org/" target="_blank">HTML5 Org</a>
                  <a class="dropdown-item" tabindex="-1" href="https://htmx.org/" target="_blank">HTMX Org</a>
                  <a class="dropdown-item" tabindex="-1" href="https://inisco-caract-esp.blogspot.com/2012/05/caracteres-especiales-en-html-de.html" target="_blank">Caracteres HTML especiales </a>
                  <a class="dropdown-item" tabindex="-1" href="https://elcodigoascii.com.ar/" target="_blank">Códigos ASCII</a>
                  <a class="dropdown-item" tabindex="-1" href="https://afarkas.github.io/webshim/demos/" target="_blank">Webshim</a>
                  <a class="dropdown-item" tabindex="-1" href="https://www.manualweb.net/html5/" target="_blank">Manual Web</a>
                  <a class="dropdown-item" tabindex="-1" href="https://developer.mozilla.org/es/docs/Web/HTML" target="_blank">MDN HTML</a>
                  <a class="dropdown-item" tabindex="-1" href="https://devdocs.io/html/" target="_blank">Devdocs.io</a>
                  <a class="dropdown-item" tabindex="-1" href="https://web.dev/html?hl=es-419" target="_blank">Webdev</a>
                  <a class="dropdown-item" tabindex="-1" href="" target="_blank"></a>
                </div>
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
        <h1>Ejercicios HTML</h1>
        <ul class="ejercicios">
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./freecodecamp/web_basica.php" target="_blank">Pagina web básica - by freeCodeCamp</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./freecodecamp/formulario.php" target="_blank">Formulario básico</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./freecodecamp/formulario_desafio.php" target="_blank">Formulario - desafio</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="./freecodecamp/etiqueta_nutricion.php" target="_blank">Etiqueta de nutrición - by freeCodeCamp</a></li>
          <li><i class="bi bi-check2-square px-2 text-lila"></i><a class="btn-link" href="#" target="_blank">Item</a></li>
        </ul>
      </div>
    </div>
  </div>

  <script src="/assets/bootstrap533/js/bootstrap.bundle.min.js"></script>
</body>

</html>