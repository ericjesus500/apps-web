
  <!-- Content Wrapper. Contains page content -->
  <div class="wrapper">
    <!-- Content-fluid -->
    <div class="content-fluid">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <?php include_once "templates/navbar-node.php"; ?>
          </div>
        </div>
      </div>

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <img src="/src/img/node.jpeg" class="card-img-top" alt="node">
                <div class="card-body">
                  <h5 class="card-title"><strong>Qué es Node</strong></h5>
                  <p class="card-text">
                    Node.js, es un entorno en tiempo de ejecución multiplataforma para la capa del servidor (en el lado del servidor) basado en JavaScript.
                    <br />
                    Node.js es un entorno controlado por eventos diseñado para crear aplicaciones escalables, permitiéndote establecer y gestionar múltiples conexiones al mismo tiempo. Gracias a esta característica, no tienes que preocuparte con el bloqueo de procesos, pues no hay bloqueos.
                  </p>
                  <h5 class="card-title"><strong>¿Cómo funciona Node JS?</strong></h5>
                  <p class="card-text">
                    El diseño de Node.js está inspirado en sistemas como el Event Machine de Ruby o el Twisted de Python. Sin embargo, Node.js presenta un bucle de eventos como una construcción en tiempo de ejecución en lugar de una biblioteca. Este bucle de eventos es invisible para el usuario.
                    <br />
                    Otra característica especial de Node.js es que está diseñado para simplificar la comunicación. No tiene subprocesos, pero te permite aprovechar múltiples núcleos en su entorno y compartir sockets entre procesos.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <!-- caracteristicas -->
              <div class="card card-warning card-outline">
                <div class="card-header">
                  <h5 class="m-0">Características principales de Node.js</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">Resumiendo, Node.js se ha hecho popular en los últimos años gracias a las siguientes características:</p>
                  <ul>
                    <li class="mt-3"><i class="bi bi-check2-square"></i><strong>Velocidad: </strong>Node.js está construido sobre el motor de JavaScript V8 de Google Chrome, por eso su biblioteca es muy rápida en la ejecución de código.</li>
                    <li class="mt-3"><i class="bi bi-check2-square"></i><strong>Sin búfer: </strong>Las aplicaciones de Node.js generan los datos en trozos (chunks), nunca los almacenan en búfer.</li>
                    <li class="mt-3"><i class="bi bi-check2-square"></i><strong>Asíncrono y controlado por eventos: </strong>Como hemos dicho anteriormente, las APIs de la biblioteca de Node.js son asíncronas, sin bloqueo. Un servidor basado en Node.js no espera que una API devuelva datos. El servidor pasa a la siguiente API después de llamarla, y un mecanismo de notificación de eventos ayuda al servidor a obtener una respuesta de la llamada a la API anterior.</li>
                    <li class="mt-3"><i class="bi bi-check2-square"></i><strong>Un subproceso escalable: </strong>Node.js utiliza un modelo de un solo subproceso con bucle de eventos. Gracias al mecanismo de eventos, el servidor responde sin bloqueos, como hemos dicho. Esto hace que el servidor sea altamente escalable comparando con los servidores tradicionales como el Servidor HTTP de Apache.</li>
                  </ul>
                </div>
              </div>
              <!-- articulos -->
              <div class="col-md-12">
                <!-- más sobre node -->
                <div class="card card-warning collapsed-card" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
                  <!-- ¿Para qué sirve Node.js? -->
                  <div class="card-header">
                    <h3 class="card-title">¿Para qué sirve Node.js?</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="card-text">Puedes utilizar Node.js para diferentes tipos de aplicaciones. Los siguientes son algunos de los ejemplos:</p>
                    <ul>
                      <li class="mt-3"><i class="bi bi-check2-square"></i>Aplicaciones de transmisión de datos (streaming)</li>
                      <li class="mt-3"><i class="bi bi-check2-square"></i>Aplicaciones intensivas de datos en tiempo real</li>
                      <li class="mt-3"><i class="bi bi-check2-square"></i>Aplicaciones vinculadas a E/S</li>
                      <li class="mt-3"><i class="bi bi-check2-square"></i>Aplicaciones basadas en JSON:API</li>
                      <li class="mt-3"><i class="bi bi-check2-square"></i>Aplicaciones de página única</li>
                    </ul>
                  </div>
                </div>
                <!-- Instalación de Node con NVM -->
                <div class="card card-warning collapsed-card" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
                  <div class="card-header">
                    <h3 class="card-title">Instalación de Node con NVM</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <pre class="sintaxis">
                      <code>
                        <span class="comentario">//Instala una nueva versión de Node.js</span>
                        nvm install lts

                        <span class="comentario">//Cambia de version</span>
                        nvm use version-de-node

                        <span class="comentario">//Verifica que versiones de node tienes instalada o disponible</span>
                        nvm ls
                      </code>
                    </pre>
                  </div>
                </div>

              </div>
              <!-- El Ecosistema de Node en 2023 -->
              <div class="card card-warning card-outline">
                <div class="card-header">
                  <h5 class="m-0"><strong>Explorando Node.js: el concepto central detrás de su magia asincrónica</strong></h5>
                </div>
                <div class="card-body">
                  <p class="card-text">En los últimos tiempos, Node.js se ha convertido en el lenguaje más popular entre los desarrolladores. Su reputación se debe en gran medida a su naturaleza asincrónica y sus capacidades de E/S sin bloqueo.</p>
                  <a href="/content/cursos/items/node/articulos/arquitectura_node.php" class="btn btn-warning" target="_blank">Ver el artículo completo</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
    <!-- /.content-fluid -->
  </div>
  <!-- /.content-wrapper -->  