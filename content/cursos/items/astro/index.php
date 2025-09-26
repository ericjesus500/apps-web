<!-- Content Wrapper. Contains page content -->
<div class="wrapper">
  <!-- Content-fluid -->
  <div class="content-fluid">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <?php include_once "templates/navbar-astro.php"; ?>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <img src="/src/img/astro.jpg" class="card-img-top" alt="astro">
              <div class="card-body">
                <h5 class="card-title"><strong>Qué es Astro</strong></h5>
                <p class="card-text">
                  Astro es un framework web para crear sitios web basados ​​en contenido, como blogs, marketing y comercio electrónico. Astro es conocido por ser pionero en una nueva <a class="btn-link" href="https://docs.astro.build/en/concepts/islands/" target="_blank">arquitectura de interfaz</a> para reducir la complejidad y la sobrecarga de JavaScript en comparación con otros marcos. Astro hace que un sitio web se cargue rápido y tenga un excelente SEO.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <!-- caracteristicas -->
            <div class="card card-warning card-outline">
              <div class="card-header">
                <h5 class="m-0">Características</h5>
              </div>
              <div class="card-body">
                <p class="card-text">Astro es un marco web todo en uno. Incluye todo lo que se necesita para crear un sitio web, integrado. También hay cientos de <a class="btn-link" href="https://astro.build/integrations/" target="_blank">integraciones</a> y <a class="btn-link" href="https://docs.astro.build/en/reference/integrations-reference/" target="_blank">enlaces API</a> diferentes disponibles para personalizar un proyecto según el caso de uso y necesidades específicas.</p>
                <p class="card-text">Algunos aspectos destacados incluyen:</p>
                <ul class="list-group">
                  <li class="list-group-item"><span class="text-primary">Islas: </span>una arquitectura web basada en componentes optimizada para sitios web basados ​​en contenido.</li>
                  <li class="list-group-item"><span class="text-primary">Independiente d la interfaz de usuario: </span>compatible con React, Preact, Svelte, Vue, Solid, HTMX, componentes web y más.</li>
                  <li class="list-group-item"><span class="text-primary">Servidor primero: </span>traslada la renderización costosa fuera de los dispositivos de sus visitantes.</li>
                  <li class="list-group-item"><span class="text-primary">Cero Javascript por defecto: </span>menos JavaScript del lado del cliente para ralentizar su sitio.</li>
                  <li class="list-group-item"><span class="text-primary">Colecciones de contenido: </span>organice, valide y proporcione seguridad de tipos TypeScript para su contenido Markdown.</li>
                  <li class="list-group-item"><span class="text-primary">Personalizable: </span>Tailwind, MDX y cientos de integraciones para elegir.</li>
                </ul>
              </div>
            </div>
            <!-- articulos -->
            <div class="col-md-12">
              <!-- más sobre astro -->
              <div class="card card-warning collapsed-card" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
                <div class="card-header">
                  <h3 class="card-title">Más sobre Astro</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias optio labore animi impedit. Odit, necessitatibus nostrum dolor non cupiditate mollitia officia earum temporibus deserunt magni repellat illum perspiciatis reiciendis aliquid ea hic corporis qui debitis harum numquam voluptatem minus, fugit optio. Ea tenetur, maiores sed quia error explicabo itaque? Ipsa inventore deserunt ullam ea, blanditiis perspiciatis voluptates, magni repudiandae voluptate nulla odio et explicabo nostrum facilis suscipit obcaecati. Sit, possimus totam repellat delectus corporis mollitia odit voluptatum at fuga consequatur nesciunt nihil ipsam ducimus laborum, reiciendis deleniti natus ea quos facilis placeat quis cum vitae molestiae! Officia quisquam ipsa tempora?.</p>
                </div>
              </div>
              <!-- Más artículos -->
              <div class="card card-warning collapsed-card" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
                <div class="card-header">
                  <h3 class="card-title">Más artículos</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <p>Ver más <a class="btn-link" href="./articulos/articulos.php" target="_blank">artículos</a> sobre Mysql</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.main content -->
  </div>
  <!-- /.content-fluid -->
</div>
<!-- /.content-wrapper -->