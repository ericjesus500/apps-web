<?php include "../../../../../templates/header.php"?>
<link rel="stylesheet" href="../../../src/estilos_cursos.css">
<title>Articulos Node JS 2023</title>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/content/app/index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-fluid">
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-edit"></i>
                <span class="h1">Articulos NodeJs</span>
              </h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-5 col-sm-3">
                  <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link active" id="vert-tabs-explorer-tab" data-toggle="pill" href="#vert-tabs-explorer"
                      role="tab" aria-controls="vert-tabs-explorer" aria-selected="false">Explorando Node.js</a>
                    <a class="nav-link" id="vert-tabs-compilador-tab" data-toggle="pill" href="#vert-tabs-compilador"
                      role="tab" aria-controls="vert-tabs-compilador" aria-selected="false"></a>
                    <a class="nav-link" id="vert-tabs-transpilador-tab" data-toggle="pill"
                      href="#vert-tabs-transpilador" role="tab" aria-controls="vert-tabs-transpilador"
                      aria-selected="false"></a>
                    <a class="nav-link" id="vert-tabs-linter-tab" data-toggle="pill" href="#vert-tabs-linter" role="tab"
                      aria-controls="vert-tabs-linter" aria-selected="true"></a>
                    <a class="nav-link" id="vert-tabs-testing-tab" data-toggle="pill" href="#vert-tabs-testing"
                      role="tab" aria-controls="vert-tabs-testing" aria-selected="true"></a>
                    <a class="nav-link" id="vert-tabs-build-tab" data-toggle="pill" href="#vert-tabs-build" role="tab"
                      aria-controls="vert-tabs-build" aria-selected="true"></a>
                    <a class="nav-link" id="vert-tabs-libreria-tab" data-toggle="pill" href="#vert-tabs-libreria"
                      role="tab" aria-controls="vert-tabs-libreria" aria-selected="true"></a>
                    <a class="nav-link" id="vert-tabs-rendering-tab" data-toggle="pill" href="#vert-tabs-rendering"
                      role="tab" aria-controls="vert-tabs-rendering" aria-selected="true"></a>
                    <a class="nav-link" id="vert-tabs-frameworks-tab" data-toggle="pill" href="#vert-tabs-frameworks"
                      role="tab" aria-controls="vert-tabs-frameworks" aria-selected="true"></a>
                  </div>
                </div>
                <div class="col-7 col-sm-9">
                  <div class="tab-content" id="vert-tabs-tabContent">
                    <div class="tab-pane text-left fade active show" id="vert-tabs-explorer" role="tabpanel"
                      aria-labelledby="vert-tabs-explorer-tab">
                      <article class="px-4">
                        <h2><span class="bg-warning px-3 rounded">Explorando Node.js: el concepto central detrás de su
                            magia asincrónica</span></h2>
                        <img src="../src/img/node_arquitectura.webp" alt="arquitectura" class="img_100">
                        <p class="text-justify mt-5 p_articulo">En los últimos tiempos, Node.js se ha convertido en el
                          lenguaje más
                          popular entre los desarrolladores. Su reputación se debe en gran medida a su naturaleza
                          asincrónica y sus capacidades de E/S sin bloqueo. Habiendo utilizado personalmente Node.js
                          durante los últimos cuatro años, puedo dar fe de su velocidad y escalabilidad excepcionales.
                          Sin embargo, lo que mucha gente no comprende es cómo funciona Node.js internamente para
                          manejar estas operaciones de E/S y tareas que requieren un uso intensivo de la CPU.</p>
                        <p class="text-justify mt-4 p_articulo">En esta publicación de blog, profundizaremos en los
                          patrones
                          empleados por Node.js para manejar las solicitudes entrantes y exploraremos por qué supera a
                          otros lenguajes. Cubriremos los siguientes temas en este viaje:</p>
                        <ul>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Bloqueo de E/S</li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>E/S sin bloqueo</li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Demultiplexación de
                            eventos</li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Patrón central de Node.js
                          </li>
                        </ul>
                        <h3 class="mt-5 text-indigo">Bloqueo de E/S:</h3>
                        <p class="text-justify mt-4 p_articulo">Tradicionalmente, en los lenguajes de programación,
                          cuando se
                          realiza una llamada correspondiente a una operación IO (input - output), se bloquea la
                          ejecución del hilo hasta que los datos estén disponibles. En consecuencia, el hilo permanece
                          inactivo, esperando los datos y sin ningún otro propósito durante este tiempo. Este escenario
                          se puede visualizar en el siguiente diagrama (Imagen 1).</p>
                        <img src="../src/img/bloqueo_es.png" alt="bloqueo_es" class="img_100">
                        <p class="text-justify mt-4 p_articulo">El problema se vuelve evidente cuando consideramos que
                          varias
                          operaciones de IO, como interactuar con bases de datos o el sistema de archivos, pueden
                          potencialmente bloquear una solicitud. Como resultado, los subprocesos pueden bloquearse con
                          frecuencia para esperar los resultados de las operaciones de IO, lo que genera un mayor
                          consumo de memoria, una mayor sobrecarga de cambio de contexto y un uso excesivo de la CPU.
                          Estos tiempos de inactividad son perjudiciales para la eficiencia de un subproceso.</p>
                        <h3 class="mt-5 text-indigo">IO sin bloqueo:</h3>
                        <p class="text-justify mt-4 p_articulo">El concepto de IO sin bloqueo implica no esperar ningún
                          dato o
                          respuesta mientras se ejecutan operaciones de IO. Si no hay una respuesta disponible de
                          inmediato, la llamada al sistema debe regresar inmediatamente al motor. De esta manera, el
                          hilo no se bloquea para recibir una respuesta, lo que lo deja disponible para manejar otras
                          solicitudes. En consecuencia, el tiempo de inactividad del subproceso se reduce
                          significativamente en comparación con el bloqueo de IO, como se ilustra en la Imagen 2.</p>
                        <img src="../src/img/io_sin_bloqueo.png" alt="io_sin_bloqueo" class="img_100">
                        <h3 class="mt-5 text-indigo">Demultiplexación de eventos:</h3>
                        <p class="text-justify mt-4 p_articulo">La demultiplexación de eventos es una técnica avanzada
                          utilizada en
                          Node.js. En telecomunicaciones, la multiplexación es el proceso de combinar múltiples señales
                          en una para facilitar la transmisión a través de un medio de capacidad limitada. La
                          demultiplexación, por otro lado, divide la señal combinada en sus componentes originales. Se
                          aplican conceptos similares en varios campos, incluido el procesamiento de vídeo.</p>
                        <p class="text-justify mt-4 p_articulo">En Node.js, un demultiplexor de eventos sincrónico
                          observa
                          múltiples recursos simultáneamente. Cuando se completa cualquier operación en cualquier
                          recurso, devuelve un nuevo evento. Tenga en cuenta que devuelve un nuevo evento. El
                          demultiplexor de eventos síncronos se bloquea hasta que haya nuevos eventos disponibles para
                          procesar. A continuación se muestra una representación en pseudocódigo de un demultiplexor de
                          eventos síncronos.</p>
                        <pre class="sintaxis mt-5">
                            <code>
                              watchedList.add(socketA, FOR_READ) // (1)
                              watchedList.add(fileB, FOR_READ)
                              while (events = demultiplexer.watch(watchedList)) { // (2)
                              &nbsp;&nbsp;&nbsp;// event loop
                              &nbsp;&nbsp;&nbsp;for (event of events) { // (3)
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// This read will never block and will always return data
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data = event.resource.read()
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (data === RESOURCE_CLOSED) {
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// the resource was closed, remove it from the watched list
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;demultiplexer.unwatch(event.resource)
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// some actual data was received, process it
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;consumeData(data)
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
                              &nbsp;&nbsp;&nbsp;}
                              }
                            </code>
                          </pre>
                        <p class="text-justify mt-4 p_articulo">El proceso funciona de la siguiente manera:</p>
                        <p class="text-justify mt-4 p_articulo">Los recursos (eventos IO) se agregan a la estructura de
                          datos
                          asociada con una operación.
                          <br />El demultiplexor está configurado para observar estos eventos y cada llamada es
                          sincrónica y se bloquea hasta que los recursos estén listos para la operación especificada
                          (por ejemplo, lectura).
                          <br />Cuando se completa la operación, el demultiplexor crea un nuevo evento, que se procesa o
                          ejecuta adicionalmente.
                          <br />Se procesa cada evento devuelto por el demultiplexor de eventos. En este punto, se
                          garantiza que el recurso asociado estará listo para leer y no bloquearse durante la operación.
                          Una vez que se procesan todos los eventos, el flujo se bloquea nuevamente en el demultiplexor
                          de eventos hasta que haya nuevos eventos disponibles para procesar. Este ciclo se conoce como
                          bucle de eventos.
                        </p>
                        <h3 class="mt-5 text-indigo">Patrón central de Node.js:</h3>
                        <p class="text-justify mt-4 p_articulo">El patrón central empleado por Node.js se denomina
                          patrón reactor.
                          Gira en torno a asociar un controlador con cada operación IO, representada por una devolución
                          de llamada en Node.js. A continuación se muestra una representación del patrón del reactor:
                        </p>
                        <img src="../src/img/patron_central.png" alt="patron_central" class="img_100">
                        <p class="text-justify mt-4 p_articulo">Los siguientes pasos aclaran el comportamiento de la
                          aplicación
                          utilizando el patrón de reactor:</p>
                        <p class="text-justify mt-4 p_articulo">La aplicación genera una nueva operación IO enviando una
                          solicitud
                          al demultiplexor de eventos. Al mismo tiempo, la aplicación especifica un controlador, que se
                          invocará cuando se complete la operación. Este envío es una llamada sin bloqueo y el control
                          regresa inmediatamente a la aplicación.
                          <br />Cuando se completa un conjunto de operaciones de E/S, el demultiplexor de eventos envía
                          los eventos correspondientes a la cola de eventos.
                          <br />El bucle de eventos itera sobre los elementos de la cola de eventos.
                          <br />Para cada evento, se invoca el controlador asociado.
                          <br />El controlador, al ser parte del código de la aplicación, cede el control al bucle de
                          eventos una vez que se completa su ejecución (5a). Durante la ejecución, el controlador puede
                          solicitar nuevas operaciones asincrónicas (5b), lo que lleva a que se agreguen nuevos
                          elementos al demultiplexor de eventos (1).
                          <br />Una vez que se procesan todos los elementos de la cola de eventos, el bucle de eventos
                          se bloquea en el demultiplexor de eventos y activa otro ciclo cuando hay un nuevo evento
                          disponible.
                          <br />El comportamiento asincrónico emerge claramente. La aplicación expresa su interés en
                          acceder a un recurso sin bloquearlo y proporciona un controlador, que será invocado cuando se
                          complete la operación.
                        </p>
                        <p class="text-justify mt-4 p_articulo">Node.js aprovecha este patrón asincrónico, contribuyendo
                          a su
                          notable velocidad y eficiencia.</p>
                      </article>
                    </div>
                    <!-- <div class="tab-pane fade" id="vert-tabs-compilador" role="tabpanel"
                      aria-labelledby="vert-tabs-compilador-tab">
                      <article class="px-4">
                        <h2><span class="bg-warning px-3 rounded"></span></h2>
                        <p class="text-justify mt-4 p_articulo"></p>
                        <h3 class="mt-5 text-indigo"></h3>
                        <ul>
                          <ul>
                            <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                            <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                            <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                            <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          </ul>
                      </article>
                    </div>
                    <div class="tab-pane fade" id="vert-tabs-transpilador" role="tabpanel"
                      aria-labelledby="vert-tabs-transpilador-tab">
                      <article class="px-4">
                        <h2><span class="bg-warning px-3 rounded"></span></h2>
                        <p class="text-justify mt-4 p_articulo"><strong></p>
                        <h4 class="text-orange"></h4>
                        <p class="text-justify mt-4 p_articulo"></p>
                        <p class="text-justify mt-4 p_articulo"></p>
                        <ul>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                        </ul>
                      </article>
                    </div>
                    <div class="tab-pane fade" id="vert-tabs-linter" role="tabpanel"
                      aria-labelledby="vert-tabs-linter-tab">
                      <article class="px-4">
                        <h2><span class="bg-warning px-3 rounded"></span></h2>
                        <p class="text-justify mt-4 p_articulo"></p>
                        <p class="text-justify mt-4 p_articulo"></p>
                        <ul>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                        </ul>
                      </article>
                    </div>
                    <div class="tab-pane fade" id="vert-tabs-testing" role="tabpanel"
                      aria-labelledby="vert-tabs-testing-tab">
                      <article class="px-4">
                        <h2><span class="bg-warning px-3 rounded"></span></h2>
                        <p class="text-justify mt-4 p_articulo"></p>
                        <p class="text-justify mt-4 p_articulo"></p>
                        <p class="text-justify mt-4 p_articulo"></p>
                        <ul>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                        </ul>
                      </article>
                    </div>
                    <div class="tab-pane fade" id="vert-tabs-build" role="tabpanel"
                      aria-labelledby="vert-tabs-build-tab">
                      <article class="px-4">
                        <h2><span class="bg-warning px-3 rounded"></span></h2>
                        <p class="text-justify mt-4 p_articulo"></p>
                        <p class="text-justify mt-4 p_articulo"></p>
                        <h4 class="text-orange"></h4>
                        <ul>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                        </ul>
                      </article>
                    </div>
                    <div class="tab-pane fade" id="vert-tabs-libreria" role="tabpanel"
                      aria-labelledby="vert-tabs-libreria-tab">
                      <article class="px-4">
                        <h2><span class="bg-warning px-3 rounded"></span></h2>
                        <p class="text-justify mt-4 p_articulo"></p>
                        <p class="text-justify mt-4 p_articulo"></p>
                        <ul>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                        </ul>
                        <h4 class="text-orange"></h4>
                      </article>
                    </div>
                    <div class="tab-pane fade" id="vert-tabs-rendering" role="tabpanel"
                      aria-labelledby="vert-tabs-rendering-tab">
                      <article class="px-4">
                        <h2><span class="bg-warning px-3 rounded"></span></h2>
                        <p class="text-justify mt-4 p_articulo"></p>
                        <p class="text-justify mt-4 p_articulo"></p>
                        <ul>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                        </ul>
                      </article>
                    </div>
                    <div class="tab-pane fade" id="vert-tabs-frameworks" role="tabpanel"
                      aria-labelledby="vert-tabs-frameworks-tab">
                      <article class="px-4">
                        <h2><span class="bg-warning px-3 rounded"></span></h2>
                        <p class="text-justify mt-4 p_articulo"></p>
                        <p class="text-justify mt-4 p_articulo"></p>
                        <ul>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                          <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                        </ul>
                      </article>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->

  <!-- MIS SCRIPTS -->

  <!-- REQUIRED SCRIPTS -->

  <?php include "../../../../../templates/footer.php"?>