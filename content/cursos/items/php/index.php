<!-- Content Wrapper. Contains page content -->
<div class="wrapper">
  <!-- Content-fluid -->
  <div class="content-fluid">
    <!-- Content-header -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <?php include_once "templates/navbar-php.php"; ?>
        </div>
      </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <!-- container-fluid -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <img class="img_100" src="/src/img/php.jpg" alt="php">
              <div class="card-body">
                <h5 class="card-title"><strong>Qué es PHP</strong></h5>
                <p class="card-text">
                  PHP es un lenguaje de programación de código abierto que está especialmente indicado para la creación y desarrollo web y que se ha hecho muy popular, en gran medida, por su capacidad para poder ser incrustado en HTML. Su denominación es un acrónimo recursivo de “PHP: HypertectPreprocessor”.
                </p>
              </div>
            </div>
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h2 class="m-0 fw-bold">Iniciar un proyecto PHP con Tailwind V 4.0</h2>
                <p class="mt-3">El proyecto sigue la arquitectura MVC con PSR-4</p>
              </div>
              <div class="card-body">
                <h3 class="mt-3 mb-5 text-lila_2">Instalar Composer y PSR-4</h3>
                
                <h4 class="my-3 resaltado">1. Estructura de carpetas</h4>
                <div class="text-center my-5">
                  <img src="/content/cursos/items/php/src/img/estruct_phpmvc_tailwind.png" alt="estruct php mvc tailwind" class="img-fluid">
                </div>
                
                <h4 class="m-0 resaltado">2. Instalar composer</h4>
                <p class="card-text">Se asume que Composer ya está instalado</p>
                
                <h4 class="m-0 resaltado">3. Inicializar el proyecto con Composer</h4>
                <p class="card-text">En la terminal, navega a la carpeta raíz de tu proyecto MVC y ejecuta <span class="text-primary_2">composer init</span> para crear un nuevo archivo <span class="text-tomato">composer.json</span>.</p>

                <pre class="pre-content-list bg-blue_2 my-5">
                  <code>
                    composer init
                  </code>
                </pre>
                <p class="pathway-extreme-p h5 my-4 text-tomato font-monospace text-decoration-underline">Formas de usar composer init: </p>
                <ul class="mt-5 mb-3">
                  <li class="fs-5 my-2"><i class="bi bi-back px-2 text-primary_2"></i>Asistente interactivo: El asistente hará preguntas para completar el archivo composer.json, como:
                    <ul class="my-5">
                      <li class="fs-5 my-2"><i class="bi bi-caret-right-fill px-2 text-orange"></i><span class="text-primary_2">Nombre del paquete</span>: vendor/name.</li>
                      <li class="fs-5 my-2"><i class="bi bi-caret-right-fill px-2 text-orange"></i><span class="text-primary_2">Descripción</span>: Una breve explicación del proyecto.</li>
                      <li class="fs-5 my-2"><i class="bi bi-caret-right-fill px-2 text-orange"></i><span class="text-primary_2">Autor</span>: Tu nombre o el nombre de tu empresa.</li>
                      <li class="fs-5 my-2"><i class="bi bi-caret-right-fill px-2 text-orange"></i><span class="text-primary_2">Tipo</span>:  El tipo de paquete (por defecto es library).</li>
                      <li class="fs-5 my-2"><i class="bi bi-caret-right-fill px-2 text-orange"></i><span class="text-primary_2">Dependencias</span>: Puedes añadirlas interactivamente.</li>
                      <li class="fs-5 my-2"><i class="bi bi-caret-right-fill px-2 text-orange"></i><span class="text-primary_2">Mapeo de Autoload (PSR-4)</span>:  Configura cómo se cargan tus clases automáticamente.</li>
                    </ul>
                    <p class="fs-5">Esto creará el archivo composer.json y los directorios src/ y vendor/</p>
                  </li>
                  <li class="fs-5 my-5"><i class="bi bi-back px-2 text-primary_2"></i>Puedes saltarte el asistente y proporcionar información directamente al comando composer init usando varias opciones: 
                    <ul class="mt-3 mb-5">
                      <li class="fs-5 mb-2"><i class="bi bi-caret-right-fill px-2 text-orange"></i><span class="text-primary_2">--name &lt;nombre&gt;</span>: Especifica el nombre del paquete (vendor/name).</li>
                      <li class="fs-5 my-2"><i class="bi bi-caret-right-fill px-2 text-orange"></i><span class="text-primary_2">--description &lt;texto&gt;</span>: Establece la descripción del paquete.</li>
                      <li class="fs-5 my-2"><i class="bi bi-caret-right-fill px-2 text-orange"></i><span class="text-primary_2">--author &lt;nombre&gt;</span>: Define el autor del paquete..</li>
                      <li class="fs-5 my-2"><i class="bi bi-caret-right-fill px-2 text-orange"></i><span class="text-primary_2">--type &lt;tipo&gt;</span>: Indica el tipo de paquete, como library o project.</li>
                      <li class="fs-5 my-2"><i class="bi bi-caret-right-fill px-2 text-orange"></i><span class="text-primary_2">--license &lt;licencia&gt;</span>: Asigna una licencia al paquete, como MIT o GPL.</li>
                      <li class="fs-5 my-2"><i class="bi bi-caret-right-fill px-2 text-orange"></i><span class="text-primary_2">--require &lt;paquete&gt;</span>: Añade una dependencia con su restricción de versión (ej. monolog/monolog:^2.0).</li>
                      <li class="fs-5 my-2"><i class="bi bi-caret-right-fill px-2 text-orange"></i><span class="text-primary_2">--require-dev &lt;paquete&gt;</span>: Similar a --require, pero para dependencias de desarrollo.</li>
                      <li class="fs-5 my-2"><i class="bi bi-caret-right-fill px-2 text-orange"></i><span class="text-primary_2">--autoload &lt;ruta&gt;</span>: Configura un mapeo PSR-4, asignando un espacio de nombres a un directorio (ej. src/).</li>
                      <li class="fs-5 my-2"><i class="bi bi-caret-right-fill px-2 text-orange"></i><span class="text-primary_2">--repository &lt;URL&gt;</span>: Proporciona repositorios personalizados que Composer puede usar para encontrar paquetes..</li>
                      <li class="fs-5 my-2"><i class="bi bi-caret-right-fill px-2 text-orange"></i><span class="text-primary_2">--minimum-stability &lt;estabilidad&gt;</span>:  Establece la estabilidad mínima requerida para los paquetes (ej. stable, beta, dev).</li>
                    </ul>
                  </li>
                </ul>
                
                <p class="pathway-extreme-p h5 my-4 text-tomato font-monospace text-decoration-underline">Ejemplo de uso de opciones: </p>
                <pre class="pre-content-list bg-blue_2 my-5">
                  <code>
                    composer init --name="mi-vendor/mi-proyecto" --description="Un proyecto de ejemplo con Composer" --author="Mi Nombre" --autoload="src/"
                  </code>
                </pre>
                <h4 class="m-0 resaltado">4. Configura PSR-4 en composer.json</h4>
                <pre class="pre-content-list bg-blue_2 my-5">
                  <code>
                    &#123;
                      &nbsp;&nbsp;&nbsp;"autoload": &#123;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"psr-4": &#123;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"App\\": "src/"
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Core\\": "core/"
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#125;
                      &nbsp;&nbsp;&nbsp;&#125;
                    &#125;
                  </code>
                </pre>

                <h4 class="m-0 resaltado">5. Ejecutar en la terminal</h4>
                <pre class="pre-content-list bg-blue_2 my-5">
                  <code>
                    composer dump-autoload
                  </code>
                </pre>

                <h3 class="mt-3 mb-5 text-lila_2">Instalar Tailwind</h3>
                <h4 class="my-3 resaltado">5. Ejecutar en la terminal</h4>
                <p class="fs-5">El siguiente comando creará un archivo package.json si no existe</p>
                <pre class="pre-content-list bg-blue_2 my-5">
                  <code>
                    <span class="comentario">Asegúrate de tener instalado Node.js haciendo node -v en la terminal</span>
                    npm init -y
                  </code>
                </pre>

                <h4 class="my-3 resaltado">6. Instala Tailwind CSS con la Tailwind CLI</h4>
                <p class="fs-5">Con la versión 4, ya no se necesita el comando npx tailwindcss init para crear el tailwind.config.js porque el comando init ya no existe, y la CLI se trasladó a @tailwindcss/cli</p>
                <pre class="pre-content-list bg-blue_2 my-5">
                  <code>
                    <span class="comentario">Instala Tailwind CSS como dependencia de desarrollo</span>
                    npm install tailwindcss @tailwindcss/cli --save-dev
                  </code>
                </pre>
                <h4 class="my-3 resaltado">7. Crear el archivo src/css/tailwind.css</h4>
                <p class="fs-5">El archivo .css puede tener cualquier nombre. Luego agregar la siguiente línea:</p>
                <pre class="pre-content-list bg-blue_2 my-5">
                  <code>
                    <span class="comentario"></span>
                    @import "tailwindcss";
                  </code>
                </pre>

                <h4 class="my-3 resaltado">8. Ejecutar la compilación de Tailwind</h4>
                <p class="fs-5">En la terminal, ejecutar el siguiente comando para compilar el CSS:</p>
                <pre class="pre-content-list bg-blue_2 my-5">
                  <code>
                    npx tailwindcss -i ./src/css/tailwind.css -o ./public/css/style.css --watch
                  </code>
                </pre>
                <p class="fs-5">Si no existe el archivo package.json en el proyecto, npx puede tener problemas para localizar los ejecutables.</p>

                <h4 class="my-3 resaltado">9. Vincula el archivo CSS en tu plantilla PHP</h4>
                <pre class="pre-content-list bg-blue_2 my-5">
                  <code>
                    &lt;link rel="stylesheet" href="/css/style.css" /&gt;
                  </code>
                </pre>
              </div>
            </div>
            <!-- Más artículos -->
            <div class="card card-warning collapsed-card" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
              <div class="card-header">
                <h3 class="card-title">Novedades</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <p>Ver más <a class="btn-link" href="./articulos/articulos.php" target="_blank">Novedades</a> sobre PHP</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <!-- caracteristicas -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Características</h5>
              </div>
              <div class="card-body">
                <p class="card-text">Las principales características de PHP son:</p>
                <ul>
                  <li><span class="text-primary me-2"><i class="bi bi-check-square"></i></span>Es un código abierto y gratuito.</li>
                  <li><span class="text-primary me-2"><i class="bi bi-check-square"></i></span>Es un lenguaje orientado a objetos, lo que hace el procesamiento de datos mucho más rápido.</li>
                  <li><span class="text-primary me-2"><i class="bi bi-check-square"></i></span>Permite la separación de códigos, es decir, es posible manipular datos mientras que otros se encuentran estáticos.</li>
                  <li><span class="text-primary me-2"><i class="bi bi-check-square"></i></span>Es un código limpio y estable.</li>
                  <li><span class="text-primary me-2"><i class="bi bi-check-square"></i></span>Cuenta con una comunidad amplia y activa donde es posible compartir conocimientos y encontrar información.</li>
                  <li><span class="text-primary me-2"><i class="bi bi-check-square"></i></span>Permite el desarrollo de páginas web complejas y dinámicas.</li>
                  <li><span class="text-primary me-2"><i class="bi bi-check-square"></i></span>Existe una amplia oferta laboral, pues hoy en día son cada vez más las compañías que buscan el desarrollo de sitios web particulares.</li>
                  <li><span class="text-primary me-2"><i class="bi bi-check-square"></i></span>Es un lenguaje que puede ejecutarse en cualquier servidor o sistema operativo siempre y cuando el equipo tenga la capacidad de ejecutar el código sin dificultades.</li>
                  <li><span class="text-primary me-2"><i class="bi bi-check-square"></i></span>Es un lenguaje versátil.</li>
                  <li><span class="text-primary me-2"><i class="bi bi-check-square"></i></span>Permite un gran manejo de procesamiento de datos.</li>
                </ul>
                <p class="card-text">Además, es un lenguaje que maneja diferentes tipos de datos como integer (números enteros), double (números con decimales), string (cadena de caracteres), boolean (verdadero o falso), object (datos complejos o específicos), array (conjunto de valores), null (un dato no posee valor), y resource (recursos externos).</p>
              </div>
            </div>
            
            <!-- articulos -->
            <div class="col-md-12">
              <!-- Funciones del Lenguaje PHP -->
              <div class="card card-primary collapsed-card" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
                <div class="card-header">
                  <h3 class="card-title">Funciones del Lenguaje PHP</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <p class="card-text">Este lenguaje de programación cuenta con tres funciones principales:</p>
                  <ol>
                    <li>Programación del lado del servidor: ideal para páginas webs de prueba antes de la publicación en la web.</li>
                    <li>Programación a través de la línea de comandos: los scripts PHP pueden crearse sin necesidad de un navegador o servidor, sólo se requiere de un analizador PHP. Los scripts son ideales para las tareas regulares de una web.</li>
                    <li>Aplicaciones de escritorio: a pesar de ser una función que se utiliza con menor frecuencia, el lenguaje PHP también es adecuado para el desarrollo de aplicaciones de escritorio gracias a su nivel de complejidad.</li>
                  </ol>
                  <h2>¿Cuáles son las ventajas del lenguaje de programación PHP?</h2>
                  <p class="card-text">Las ventajas más destacables del lenguaje PHP son que puede ser usado con los sistemas operativos populares y que es compatible con la mayoría de los servidores web. Otras ventajas de este lenguaje son:</p>
                  <ul>
                    <li><span class="text-primary me-2"><i class="bi bi-check-square"></i></span>Puede utilizarse con cualquier sistema operativo virtual y cualquier tipo de servidor.</li>
                    <li><span class="text-primary me-2"><i class="bi bi-check-square"></i></span>Las aplicaciones pueden programarse con orientación al procedimiento o al proyecto del cliente.</li>
                    <li><span class="text-primary me-2"><i class="bi bi-check-square"></i></span>HTML, imágenes, PDFs, o archivos flash pueden generarse de forma dinámica con este lenguaje.</li>
                    <li><span class="text-primary me-2"><i class="bi bi-check-square"></i></span>Soporta una gran cantidad de bases de datos diferentes.</li>
                    <li><span class="text-primary me-2"><i class="bi bi-check-square"></i></span>Es un lenguaje ideal para la creación de sitios web basados en bases de datos.</li>
                    <li><span class="text-primary me-2"><i class="bi bi-check-square"></i></span>Cuenta con un soporte completo para la comunicación del servidor con otros protocolos.</li>
                    <li><span class="text-primary me-2"><i class="bi bi-check-square"></i></span>Es un lenguaje sencillo de aprender.</li>
                  </ul>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- ./Main content -->
  </div>
  <!-- ./Content-fluid -->
</div>
<!-- ./Content-wrapper -->