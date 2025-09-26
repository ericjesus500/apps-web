<?php include_once "../../../../../templates/header.php";?>

  <title>Novedades CSS</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <header>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <!-- <a class="navbar-brand" href="#">Navbar</a> -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">CSS Oficial</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Referencias</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Guías</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Ejercicios</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Páginas de ayuda</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
          <h1 Class="text-primary font-monospace mt-5">Novedades de CSS</h1>
          <p class="pathway-extreme-p text-justify">CSS (Cascading Style Sheets) es un lenguaje de estilo utilizado para describir la presentación de un documento escrito en HTML o XML. A lo largo de los años, CSS ha evolucionado y se han introducido numerosas novedades y mejoras. Aquí te presentamos algunas de las más destacadas:</p>
        </div>
      </header>
    </div>
    <div class="row">
      <main>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
          <h2 class="text-primary_2">Novedades Recientes</h2>
          <ul class="mt-3 mb-5">
            <li class="my-2"><i class="bi bi-check-all px-2 text-tomato"></i><strong>CSS Grid Layout:</strong> Un sistema de diseño bidimensional que permite crear diseños complejos y responsivos de manera sencilla.</li>
            <li class="my-2"><i class="bi bi-check-all px-2 text-tomato"></i><strong>Flexbox:</strong> Un modelo de diseño unidimensional que facilita la alineación y distribución de elementos en una página.</li>
            <li class="my-2"><i class="bi bi-check-all px-2 text-tomato"></i><strong>Custom Properties (CSS Variables):</strong> Permiten definir variables en CSS, lo que facilita la reutilización de valores y la creación de temas.</li>
            <li class="my-2"><i class="bi bi-check-all px-2 text-tomato"></i><strong>Media Queries:</strong> Permiten aplicar estilos diferentes según el tamaño de la pantalla o el dispositivo.</li>
            <li class="my-2"><i class="bi bi-check-all px-2 text-tomato"></i><strong>Aspect Ratio:</strong> Nueva propiedad que permite definir la relación de aspecto de un elemento, facilitando el diseño responsivo.</li>
            <li class="my-2"><i class="bi bi-check-all px-2 text-tomato"></i><strong>Scroll Snap:</strong> Permite crear desplazamientos suaves y controlados en listas o galerías.</li>
          </ul>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
          <h2 class="text-primary_2">Recursos Adicionales</h2>
          <p class="pathway-extreme-p text-justify">Para aprender más sobre las novedades de CSS, puedes consultar los siguientes recursos:</p>
          <ul class="mt-3 mb-5">
            <li class="my-3"><a href="https://www.w3schools.com/css/" target="_blank">W3Schools CSS Tutorial</a></li>
            <li class="my-3"><a href="https://developer.mozilla.org/es/docs/Web/CSS" target="_blank">MDN Web Docs - CSS</a></li>
            <li class="my-3"><a href="https://css-tricks.com/" target="_blank">CSS-Tricks</a></li>
            <li class="my-3"><a href="https://www.smashingmagazine.com/category/css" target="_blank">Smashing Magazine - CSS</a></li>
          </ul>
        </div>
      </main>
      <section>
        <article>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Autor</th>
                <th scope="col">Titulo</th>
                <th scope="col">Año de introducción</th>
                <th scope="col">Referencia</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>VidaMRR</td>
                <td><a class="link-primary" href="./novedades-demos/vidamrr/custom-select.php" target="_blank">El elemento &lt;select&gt; ahora se puede personalizar con CSS</a></td>
                <td>Marzo 2025</td>
                <td><a class="btn-link" href="https://developer.chrome.com/blog/a-customizable-select?hl=es-419#:~:text=a%20la%20fuente.-,Totalmente%20personalizable,al%20final%20de%20esta%20publicaci%C3%B3n" target="_blank">Ver</a>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Sitio 2</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>Sitio 3</td>
              </tr>
            </tbody>
          </table>
        </article>
      </section>
    </div>
  </div>

  <script src="/assets/bootstrap533/js/bootstrap.bundle.min.js"></script>
</body>

</html>