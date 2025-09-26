  <!-- Content Wrapper. Contains page content -->
  <div class="wrapper">
    <!-- Content-fluid -->
    <div class="content-fluid">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <?php include_once "templates/navbar-laravel.php"; ?>
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
                <img src="/src/img/laravel.jpg" class="card-img-top" alt="javascript">
                <div class="card-body">
                  <h2 class="card-title"><strong>Qué es Laravel</strong></h2>
                  <p class="card-text">
                    Laravel es un framework PHP gratis y de código abierto que brinda un conjunto de herramientas y recursos para crear aplicaciones modernas. Posee un ecosistema integral que combina funciones integradas y una variedad de paquetes y extensiones compatibles.
                    <br />
                    Este framework de PHP creció en popularidad rápidamente en los últimos años, y muchos desarrolladores lo adoptaron como su framework de trabajo favorito para lograr un proceso de desarrollo optimizado.
                  </p>
                  <h2 class="card-title"><strong>¿Para qué sirve Laravel?</strong></h2>
                  <p class="card-text">Laravel incluye herramientas que facilitan la construcción de aplicaciones web, haciendo de este proceso algo mucho más rápido y dando como resultado un código bien estructurado y fácil de mantener.</p>
                  <a href="https://laravel.com/docs/11.x/installation#creating-a-laravel-project" class="card-link" target="_blank">Laravel Oficial</a>
                  <a href="./cursos/teoria/teoria.php" class="card-link" target="_blank">Mi
                    Tutorial</a>
                  <a href="/content/app/items/laravel/apps/index.php" class="card-link" target="_blank">Ir a Apps</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <!-- caracteristicas -->
              <div class="card card-warning card-outline">
                <div class="card-header">
                  <h5 class="m-0">Aplicaciones más habituales</h5>
                </div>
                <div class="card-body">
                  <ul class="list-group">
                    <li class="list-group-item">Sitios de redes sociales.</li>
                    <li class="list-group-item">Aplicaciones de varias páginas y de una sola página (MPA y SPA).</li>
                    <li class="list-group-item">Sitios web estáticos y dinámicos.</li>
                    <li class="list-group-item">Aplicaciones de nivel empresarial.</li>
                    <li class="list-group-item">Sitios web de comercio electrónico.</li>
                    <li class="list-group-item">Sistemas de administración de contenido.</li>
                  </ul>
                </div>
              </div>
              <!-- articulos -->
              <div class="col-md-12">
                <!-- más sobre laravel -->
                <div class="card card-warning collapsed-card" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
                  <div class="card-header">
                    <h3 class="card-title">¿Cómo funciona Laravel?</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="card-text">Para entender mejor qué es Laravel, es clave explicar cómo funciona. Para ello, veamos cuáles son sus principales funcionalidades, tal como lo explican en el sitio web oficial de Laravel: </p>
                    <ul>
                      <li class="mb-3"><strong>Base de datos: </strong>el ORM “Eloquent” de Laravel proporciona la mejor abstracción de bases de datos de su clase sin dolores de cabeza. Consulta y actualiza tus datos sin esfuerzo. Eloquent se combina perfectamente con MySQL, Postgres, SQLite y SQL Server.</li>
                      <li class="mb-3"><strong>Queues: </strong>envía trabajos en segundo plano para realizar tareas lentas como enviar correos electrónicos y generar informes mientras mantienes tiempos de respuesta ultrarrápidos. El robusto sistema de colas de Laravel puede procesar trabajos usando Redis, Amazon SQS o incluso MySQL y Postgres.</li>
                      <li class="mb-3"><strong>WebSockets: </strong>Laravel Echo y la transmisión de eventos hacen que sea muy fácil crear experiencias de usuario modernas y en tiempo real. Crea increíbles aplicaciones en tiempo real mientras potencias sus WebSockets con PHP puro, Node.js o soluciones sin servidor como Pusher y Ably.</li>
                      <li class="mb-3"><strong>Autenticación: </strong>deja de preocuparte por esto. Laravel proporciona la bases para una autenticación segura basada en sesiones, mientras que Laravel Sanctum proporciona una autenticación sencilla para las API y las aplicaciones móviles.</li>
                    </ul>
                  </div>
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