<div class="row">
  <div class="col-5 col-sm-3">
    <nav>
      <ul class="bg-dark py-3 ps-2">
        <!-- Introduccion -->
        <li class="mb-4">
          <a class="btn btn-outline-warning"><i class="bi bi-arrow-down-square iconos"></i>Web Server</a>
          <ul class="mt-3 ps-3">
            <li class="my-2"><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="#composer_concepto">Qué es composer</a></li>
            <li class="my-2"><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="">Item 2</a></li>
            <li class="my-2"><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="">Item 3</a></li>
            <li class="my-2"><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="">Item 4</a></li>
            <li class="my-2"><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="">Item 5</a></li>
            <li class="my-2"><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="">Item 6</a></li>
            <li class="my-2"><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="">Item 7</a></li>
            <li class="my-2"><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="">Item 8</a></li>
            <!-- <li class=""><i class="bi bi-check iconos text-warning"></i><a href="#"></a></li>
              <li class=""><i class="bi bi-check iconos text-warning"></i><a href="#"></a></li> -->
          </ul>
        </li>
        <!--  -->
        <li class="mb-4">
          <a href="#" class="btn btn-outline-warning"><i class="bi bi-arrow-down-square iconos"></i>CAPITULO 2</a>
          <ul class="mt-3 ps-3">
            <li class=""><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="#">Item 1</a></li>
            <li class=""><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="#">Item 2</a></li>
            <li class=""><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="#">Item 3</a></li>
            <li class=""><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="#">Item 4</a></li>
            <li class=""><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="#">Item 5</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
  <div class="col-7 col-sm-9">
    <div class="tab-content" id="vert-tabs-tabContent">
      <!-- Item 1 -->
      <div class="tab-pane text-left fade active show" id="vert-tabs-item-composer-1" role="tabpanel" aria-labelledby="vert-tabs-item-composer-1-tab">
        <!-- capitulos del tema -->
        <div class="card card-success collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action">Item 1</a>
              <a href="#" class="list-group-item list-group-item-action">Item 2</a>
              <a href="#" class="list-group-item list-group-item-action">Item 3</a>
              <a href="#" class="list-group-item list-group-item-action">Item 4</a>
              <a href="#" class="list-group-item list-group-item-action">Item 5</a>
              <a href="#" class="list-group-item list-group-item-action">Item 6</a>
              <a href="#" class="list-group-item list-group-item-action">Item 7</a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba">
          <a href="#"><i class="text-info bi bi-caret-up-fill"></i></a>
        </div>

        <section class="section">
          <h1 class="my-5"><span class="bg-info disabled px-3 rounded">COMPOSER</span></h1>

          <p class="destacado my-5">Composer es un administrador de dependencias para PHP que facilita la gestión de bibliotecas y paquetes de terceros en proyectos PHP. </p>

          <!--  -->
          <article class="px-4 my-5 article">

            <h2 id="composer_concepto" class="text-lila mt-5"><em>Qué es Composer</em></h2>
            
            <p class="pathway-extreme-p text-justify mt-4">Composer es una herramienta que ayuda a los desarrolladores a gestionar las dependencias de sus proyectos PHP. En lugar de descargar manualmente cada librería o paquete que necesita un proyecto, Composer se encarga de administrar todo ese proceso, asegurando que las versiones correctas de las dependencias estén instaladas y sean compatibles entre sí.</p>
            <p class="pathway-extreme-p text-justify mt-4">Composer permite declarar las dependencias de un proyecto en un archivo composer.json y luego, Composer se encarga de descargarlas, instalarlas, actualizarlas y gestionarlas automáticamente. Existen principalmente dos formas de instalar Composer: globalmente en el sistema, o dentro de un proyecto específico.</p>
            
            <h3 id="" class="my-5">¿Cómo funciona?</h3>
            <h4 class="resaltado my-5">1. Declaración de dependencias:</h4>
            <p class="pathway-extreme-p text-justify mt-4">Se crea un archivo llamado <span class="text-verde">composer.json</span> en la raíz del proyecto. Este archivo contiene una lista de las dependencias (bibliotecas, paquetes) que necesita el proyecto, especificando la versión o versiones aceptables.</p>
            
            <h4 class="resaltado my-5">2. Instalación y gestión:</h4>
            <p class="pathway-extreme-p text-justify mt-4">Al ejecutar el comando <span class="text-lila"><em>composer install</em></span> o <span class="text-lila"><em>composer update</em></span>. Composer analiza el archivo <span class="text-verde">composer.json</span>, descarga las dependencias especificadas y las instala en una carpeta llamada <span class="text-orange">vendor</span> dentro del proyecto.</p>
            
            <h4 class="resaltado my-5">3. Autoloading:</h4>
            <p class="pathway-extreme-p text-justify mt-4">Composer también genera un archivo <span class="text-orange">vendor/autoload.php</span> que permite cargar automáticamente las clases de las dependencias instaladas, eliminando la necesidad de incluir manualmente cada archivo.</p>
            
            <h3 id="" class="my-5">Formas de instalación</h3>
            
            <h4 class="resaltado my-5">Instalación global:</h4>            
            <p class="pathway-extreme-p text-justify mt-4">Se instala Composer una vez en el sistema operativo, permitiendo su uso en cualquier proyecto desde la línea de comandos.</p>
            
            <h4 class="resaltado my-5">Instalación local (por proyecto):</h4>
            <p class="pathway-extreme-p text-justify mt-4">Composer se instala dentro de la estructura de carpetas de un proyecto específico.</p>
            
            <h3 id="" class="my-5">Ejemplos de instalación</h3>
            
            <h4 class="resaltado my-5">1. Instalación global (ejemplo para Windows):</h4>
            <ul class="my-5">
              <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i>Descargar el instalador de Composer desde el sitio web oficial.</li>
              <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i>Ejecutar el instalador y seguir las instrucciones. Es recomendable seleccionar la opción de agregar Composer al PATH del sistema.</li>
              <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i>Verificar la instalación abriendo una nueva terminal y ejecutando el comando <span class="text-verde">composer --version</span>.</li>
            </ul>
            
            <h4 class="resaltado my-5">2. Instalación local (ejemplo para cualquier sistema):</h4>
            <ul class="my-5">
              <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i>Dentro de la carpeta del proyecto, ejecutar el comando <span class="text-verde">composer init</span>.</li>
              <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i>Seguir las instrucciones del asistente para configurar el <span class="text-verde">composer.json </span> con la información básica del proyecto y las dependencias.</li>
              <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i>Luego, ejecutar <span class="text-lila">composer install</span> para instalar las dependencias declaradas en <span class="text-verde">composer.json</span>.</li>
            </ul>
            
            <h3 id="" class="my-5">Ejemplos de comandos</h3>
            <ul class="my-5">
              <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i><span class="text-tomato">composer init</span>: Inicializa un nuevo proyecto con Composer y crea el archivo <span class="text-verde">composer.json</span>.</li>
              <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i><span class="text-lila">composer install</span>: Instala las dependencias definidas en <span class="text-verde">composer.json</span>.</li>
              <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i><span class="text-lila">composer update</span>: Actualiza las dependencias del proyecto a las últimas versiones compatibles.</li>
              <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i><span class="text-tomato">composer require</span> <span class="text-skyblue_2"><em>nombre/paquete</em></span>: Agrega una nueva dependencia al proyecto y la instala.</li>
              <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i><span class="text-tomato">composer remove</span> <span class="text-skyblue_2"><em>nombre/paquete</em></span>: Elimina una dependencia del proyecto. </li>
            </ul>
            
            <p class="pathway-extreme-p text-justify mt-4">.</p>
            <p class="pathway-extreme-p text-justify mt-4">.</p>
            <p class="destacado my-5"></p>
            <h3 id="" class="my-5"></h3>
            <h4 class="resaltado my-5"></h4>
            <p class="pathway-extreme-p text-justify mt-4">.</p>
            <p class="pathway-extreme-p h4 my-4">Resultado:</p>
            <pre class="pre-content-list bg-blue_2 my-5">
              <code>
              </code>
            </pre>
            <ul class="my-5">
              <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i>.</li>
              <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i>.</li>
            </ul>
          </article>
          
          <!-- -->
          <article class="px-4 my-5 article">
            <h2 id="" class="text-lila mt-5"><em>SUBTITULO</em></h2>
            <p class="pathway-extreme-p text-justify mt-4"></p> 
            
          </article>
        </section>
      </div>
      <!-- Item 2 -->
      <div class="tab-pane fade" id="vert-tabs-item-composer-2" role="tabpanel" aria-labelledby="vert-tabs-item-composer-2-tab">
        <!-- capitulos del tema -->
        <div class="card card-success collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action">Item 1</a>
              <a href="#" class="list-group-item list-group-item-action">Item 2</a>
              <a href="#" class="list-group-item list-group-item-action">Item 3</a>
              <a href="#" class="list-group-item list-group-item-action">Item 4</a>
              <a href="#" class="list-group-item list-group-item-action">Item 5</a>
              <a href="#" class="list-group-item list-group-item-action">Item 6</a>
              <a href="#" class="list-group-item list-group-item-action">Item 7</a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba ">
          <a href="#"><i class="text-info bi bi-caret-up-fill"></i></a>
        </div>
        <section class="section">
          <h1 class="my-5"><span class="bg-info disabled px-3 rounded">TITULO</span></h1>
          <p class="destacado my-5"></p>
          
          <!-- -->
          <article class="px-4 my-5 article">
            <h2 id="" class="text-lila mt-5"><em>SUBTITULO</em></h2>
            <p class="pathway-extreme-p text-justify mt-4"></p> 
            
          </article>
          <!-- -->
          <article class="px-4 my-5 article">

            <h2 id="" class="text-lila mt-5"><em>sub titulo</em></h2>            
            
            <h3 id="" class="my-5"></h3>
            <h4 class="resaltado my-5"></h4>
            <p class="pathway-extreme-p text-justify mt-4">.</p>
            <p class="pathway-extreme-p h4 my-4">Resultado:</p>
            <pre class="pre-content-list bg-blue_2 my-5">
              <code>
              </code>
            </pre>
            <ul class="my-5">
              <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i>.</li>
              <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i>.</li>
            </ul>
          </article>
        </section>
      </div>
      <!-- Item 3 -->
      <div class="tab-pane fade" id="vert-tabs-item-composer-3" role="tabpanel" aria-labelledby="vert-tabs-item-composer-3-tab">
        <!-- capitulos del tema -->
        <div class="card card-info collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action">Item 1</a>
              <a href="#" class="list-group-item list-group-item-action">Item 2</a>
              <a href="#" class="list-group-item list-group-item-action">Item 3</a>
              <a href="#" class="list-group-item list-group-item-action">Item 4</a>
              <a href="#" class="list-group-item list-group-item-action">Item 5</a>
              <a href="#" class="list-group-item list-group-item-action">Item 6</a>
              <a href="#" class="list-group-item list-group-item-action">Item 7</a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba ">
          <a href="#"><i class="text-info bi bi-caret-up-fill"></i></a>
        </div>
        
      </div>
      <!-- Item 4 -->
      <div class="tab-pane fade" id="vert-tabs-item-composer-4" role="tabpanel" aria-labelledby="vert-tabs-item-composer-4-tab">
        <!-- capitulos del tema -->
        <div class="card card-info collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action">Item 1</a>
              <a href="#" class="list-group-item list-group-item-action">Item 2</a>
              <a href="#" class="list-group-item list-group-item-action">Item 3</a>
              <a href="#" class="list-group-item list-group-item-action">Item 4</a>
              <a href="#" class="list-group-item list-group-item-action">Item 5</a>
              <a href="#" class="list-group-item list-group-item-action">Item 6</a>
              <a href="#" class="list-group-item list-group-item-action">Item 7</a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba ">
          <a href="#"><i class="text-info bi bi-caret-up-fill"></i></a>
        </div>
        <article class="px-4 my-5 article">
          <h2><span class="bg-success px-3 rounded">Item 4</span></h2>
        </article>
      </div>
      <!-- Item 5 -->
      <div class="tab-pane fade" id="vert-tabs-item-composer-5" role="tabpanel" aria-labelledby="vert-tabs-item-composer-5-tab">
        <!-- capitulos del tema -->
        <div class="card card-info collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action">Item 1</a>
              <a href="#" class="list-group-item list-group-item-action">Item 2</a>
              <a href="#" class="list-group-item list-group-item-action">Item 3</a>
              <a href="#" class="list-group-item list-group-item-action">Item 4</a>
              <a href="#" class="list-group-item list-group-item-action">Item 5</a>
              <a href="#" class="list-group-item list-group-item-action">Item 6</a>
              <a href="#" class="list-group-item list-group-item-action">Item 7</a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba ">
          <a href="#"><i class="text-info bi bi-caret-up-fill"></i></a>
        </div>
        <article class="px-4 my-5 article">
          <h2><span class="bg-success px-3 rounded">Item 5</span></h2>
        </article>
      </div>
      <!-- Item 6 -->
      <div class="tab-pane fade" id="vert-tabs-item-composer-6" role="tabpanel" aria-labelledby="vert-tabs-item-composer-6-tab">
        <!-- capitulos del tema -->
        <div class="card card-info collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action">Item 1</a>
              <a href="#" class="list-group-item list-group-item-action">Item 2</a>
              <a href="#" class="list-group-item list-group-item-action">Item 3</a>
              <a href="#" class="list-group-item list-group-item-action">Item 4</a>
              <a href="#" class="list-group-item list-group-item-action">Item 5</a>
              <a href="#" class="list-group-item list-group-item-action">Item 6</a>
              <a href="#" class="list-group-item list-group-item-action">Item 7</a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba ">
          <a href="#"><i class="text-info bi bi-caret-up-fill"></i></a>
        </div>
        <article class="px-4 my-5 article">
          <h2><span class="bg-success px-3 rounded">Item 6</span></h2>
          <div class="nota mt-5 mb-5">
            <p class="alert-title">
              <span class="ms-3"><i class="bi bi-exclamation-circle-fill"></i>Nota</span>
            </p>
            <p class="text-justify px-4 p-nota">.</p>
          </div>
        </article>
      </div>
      <!-- Item 7 -->
      <div class="tab-pane fade" id="vert-tabs-item-composer-7" role="tabpanel" aria-labelledby="vert-tabs-item-composer-7-tab">
        <!-- capitulos del tema -->
        <div class="card card-info collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action">Item 1</a>
              <a href="#" class="list-group-item list-group-item-action">Item 2</a>
              <a href="#" class="list-group-item list-group-item-action">Item 3</a>
              <a href="#" class="list-group-item list-group-item-action">Item 4</a>
              <a href="#" class="list-group-item list-group-item-action">Item 5</a>
              <a href="#" class="list-group-item list-group-item-action">Item 6</a>
              <a href="#" class="list-group-item list-group-item-action">Item 7</a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba ">
          <a href="#"><i class="text-info bi bi-caret-up-fill"></i></a>
        </div>
        <article class="px-4 my-5 article">
          <h2><span class="bg-success px-3 rounded">Item 7</span></h2>
        </article>
      </div>
      <!-- Item 8 -->
      <div class="tab-pane fade" id="vert-tabs-item-composer-8" role="tabpanel" aria-labelledby="vert-tabs-item-composer-8-tab">
        <!-- capitulos del tema -->
        <div class="card card-info collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action">Item 1</a>
              <a href="#" class="list-group-item list-group-item-action">Item 2</a>
              <a href="#" class="list-group-item list-group-item-action">Item 3</a>
              <a href="#" class="list-group-item list-group-item-action">Item 4</a>
              <a href="#" class="list-group-item list-group-item-action">Item 5</a>
              <a href="#" class="list-group-item list-group-item-action">Item 6</a>
              <a href="#" class="list-group-item list-group-item-action">Item 7</a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba ">
          <a href="#"><i class="text-info bi bi-caret-up-fill"></i></a>
        </div>
        <article class="px-4 my-5 article">
          <h2><span class="bg-success px-3 rounded">Item 8</span></h2>
          <p class="text-justify mt-4">.</p>
          <div class="nota mt-5">
            <p class="alert-title">
              <span class="ms-3"><i class="bi bi-exclamation-circle-fill"></i>Nota</span>
            </p>
            <p class="text-justify px-4 p-nota">.</p>
          </div>
        </article>
      </div>
      <!-- Item 9 -->
      <div class="tab-pane fade" id="vert-tabs-item-composer-9" role="tabpanel" aria-labelledby="vert-tabs-item-composer-9-tab">
        <!-- capitulos del tema -->
        <div class="card card-info collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action">Item 1</a>
              <a href="#" class="list-group-item list-group-item-action">Item 2</a>
              <a href="#" class="list-group-item list-group-item-action">Item 3</a>
              <a href="#" class="list-group-item list-group-item-action">Item 4</a>
              <a href="#" class="list-group-item list-group-item-action">Item 5</a>
              <a href="#" class="list-group-item list-group-item-action">Item 6</a>
              <a href="#" class="list-group-item list-group-item-action">Item 7</a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba ">
          <a href="#"><i class="text-info bi bi-caret-up-fill"></i></a>
        </div>
        <article class="px-4 my-5 article">
          <h2><span class="bg-success px-3 rounded">Item 9</span></h2>
          <p class="text-justify mt-4">.</p>
          <div class="nota mt-5">
            <p class="alert-title">
              <span class="ms-3"><i class="bi bi-exclamation-circle-fill"></i>Nota</span>
            </p>
            <p class="text-justify px-4 p-nota">.</p>
          </div>
        </article>
      </div>
      <!-- Item 10 -->
      <div class="tab-pane fade" id="vert-tabs-item-composer-10" role="tabpanel" aria-labelledby="vert-tabs-item-composer-10-tab">
        <!-- capitulos del tema -->
        <div class="card card-info collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action">Item 1</a>
              <a href="#" class="list-group-item list-group-item-action">Item 2</a>
              <a href="#" class="list-group-item list-group-item-action">Item 3</a>
              <a href="#" class="list-group-item list-group-item-action">Item 4</a>
              <a href="#" class="list-group-item list-group-item-action">Item 5</a>
              <a href="#" class="list-group-item list-group-item-action">Item 6</a>
              <a href="#" class="list-group-item list-group-item-action">Item 7</a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba ">
          <a href="#"><i class="text-info bi bi-caret-up-fill"></i></a>
        </div>
        <article class="px-4 my-5 article">
          <h2><span class="bg-success px-3 rounded">Item 10</span></h2>
          <p class="text-justify mt-4">.</p>
          <div class="nota mt-5">
            <p class="alert-title">
              <span class="ms-3"><i class="bi bi-exclamation-circle-fill"></i>Nota</span>
            </p>
            <p class="text-justify px-4 p-nota">.</p>
          </div>
        </article>
      </div>
    </div>
  </div>
</div>