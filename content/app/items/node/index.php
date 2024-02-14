    <!-- Content Wrapper. Contains page content -->
    <div>
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-primary">NODE JS</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <img src="/src/img/node.jpeg" class="card-img-top" alt="node">
                <div class="card-body">
                  <h5 class="card-title"><strong>Qué es Node</strong></h5>
                  <p class="card-text">Node (o más correctamente: Node.js) es un entorno que trabaja en tiempo de
                    ejecución, de código abierto, multi-plataforma, que permite a los desarrolladores crear toda clase
                    de herramientas de lado servidor y aplicaciones en JavaScript. La ejecución en tiempo real está
                    pensada para usarse fuera del contexto de un explorador web (es decir, ejecutarse directamente en
                    una computadora o sistema operativo de servidor). Como tal, el entorno omite las APIs de JavaScript
                    específicas del explorador web y añade soporte para APIs de sistema operativo más tradicionales que
                    incluyen HTTP y bibliotecas de sistemas de ficheros.
                  </p>
                  <a href="https://nodejs.org/en/docs" class="card-link" target="_blank">Node Oficial</a>
                  <a href="/content/app/items/node/apps/index.php" class="card-link" target="_blank">Ir a Apps</a>
                </div>
              </div>

              <div class="card card-primary card-outline">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's
                    content.
                  </p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div><!-- /.card -->
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="m-0">Principales características de Node</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">Desde una perspectiva de desarrollo de servidor web, Node tiene un gran número de
                    ventajas:</p>

                  <p>¡Gran rendimiento! Node ha sido diseñado para optimizar el rendimiento y
                    la escalabilidad en aplicaciones web y es un muy buen complemento para muchos problemas comunes de
                    desarrollo web (ej, aplicaciones web en tiempo real).</p>
                  <p>El código está escrito en "simple JavaScript", lo que significa que se
                    pierde menos tiempo ocupándose de las "conmutaciones de contexto" entre lenguajes cuando estás
                    escribiendo tanto el código del explorador web como del servidor.</p>
                  <p>El gestor de paquetes de Node (NPM del inglés: Node Packet Manager)
                    proporciona acceso a cientos o miles de paquetes reutilizables. Tiene además la mejor en su clase
                    resolución de dependencias y puede usarse para automatizar la mayor parte de la cadena de
                    herramientas de compilación.</p>

                  <a href="http://codigos/items/node/index.php" class="btn btn-primary mt-4" target="_blank">Mi
                    Tutorial</a>
                </div>
              </div>

              <div class="col-md-12">
                <div class="card card-danger collapsed-card"
                  style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
                  <div class="card-header">
                    <h3 class="card-title">Más sobre Node</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <p>Node es portable, con versiones que funcionan en Microsoft Windows, OS X, Linux, Solaris,
                      FreeBSD, OpenBSD, WebOS, y NonStop OS. Además, está bien soportado por muchos de los proveedores
                      de hospedaje web, que proporcionan infraestructura específica y documentación para hospedaje de
                      sitios Node.</p>
                    <p>Tiene un ecosistema y comunidad de desarrolladores de terceros muy activa, con cantidad de gente
                      deseosa de ayudar.</p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <div class="col-md-12">
                <div class="card card-warning collapsed-card"
                  style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
                  <div class="card-header">
                    <h3 class="card-title">Frameworks más usados de Node.js</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <h4 class="text-info">Express.js</h4>
                    <p>Este es el framework más conocido y utilizado por los desarrolladores de Node.js. Minimalista y
                      con una curva de aprendizaje bastante sencilla, cuenta con un ecosistema muy completo para
                      ejecutar lo que necesites, con las funcionalidades separadas en diferentes módulos.
                      <br />Se emplea, entre otros usos, para:
                    </p>
                    <ul>
                      <li>Desarrollar REST APIs que sirven para comunicarse con las aplicaciones clientes.</li>
                      <li>Crear aplicaciones tradicionales MVC.</li>
                    </ul>
                    <h4 class="text-info">Hapi.js</h4>
                    <p>Similar a Express.js, nace en Walmart para manejar el tráfico en eventos como el famoso Black
                      Friday y tiene como objetivo principal soportar numerosas peticiones. Su fama se debe al alto
                      rendimiento que tiene. La comunidad de desarrolladores cree que Hapi es robusto y confiable,
                      porque pudo administrar con éxito millones de transacciones de compras en Walmart durante el Black
                      Friday.
                      <br />Sólido y completo, con muchas librerías a disposición, se usa para:
                    </p>
                    <ul>
                      <li>Los mismos proyectos que Express.js, pero está más enfocado en que los desarrolladores se
                        concentren en escribir la lógica de la aplicación. </li>
                      <li>Aplicaciones de alto rendimiento.</li>
                    </ul>
                    <h4 class="text-info">Nest.js</h4>
                    <p>Se trata de uno más moderno que emplea Typescript y está influenciado por Angular. Pensado para
                      el desarrollo actual y optimizado para trabajar con arquitecturas y código limpio, se constituye
                      de forma desacoplada, por módulos. Asimismo, cuenta con una importante comunidad que crece a
                      grandes pasos.
                      <br />Resulta útil para:
                    </p>
                    <ul>
                      <li>Realizar servicios REST APIs.</li>
                      <li>Crear servicios MVC.</li>
                      <li>Trabajar con arquitectura hexagonal u otra arquitectura compleja.</li>
                    </ul>
                    <h4 class="text-info">AdonisJS</h4>
                    <p>Ideal para los desarrolladores vinculados con Django, Rails, Laravel, etc., provee una variedad
                      importante de funciones para que te concentres solo en desarrollar el proyecto y te ahorres tiempo
                      al evitar la instalación de librerías específicas.
                      <br />Pensado para:
                    <ul>
                      <li>Desarrollar proyectos más complejos que necesitan numerosas características, ya que viene con
                        “baterías incluidas”.</li>
                    </ul>
                    </p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <!-- /.col-lg-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->