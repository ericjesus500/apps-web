<div class="row">
  <div class="col-5 col-sm-3 h-100">
    <div class="nav flex-column nav-tabs" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="vert-tabs-item-basico-1-tab" data-toggle="pill" href="#vert-tabs-item-basico-1" role="tab" aria-controls="vert-tabs-item-basico-1" aria-selected="false">Creando un proyecto Laravel</a>
      <a class="nav-link" id="vert-tabs-item-basico-2-tab" data-toggle="pill" href="#vert-tabs-item-basico-2" role="tab" aria-controls="vert-tabs-item-basico-2" aria-selected="true">Conceptos de Arquitectura</a>
      <a class="nav-link" id="vert-tabs-item-basico-3-tab" data-toggle="pill" href="#vert-tabs-item-basico-3" role="tab" aria-controls="vert-tabs-item-basico-3" aria-selected="false">Bases de Datos y Migraciones</a>
      <a class="nav-link" id="vert-tabs-item-basico-4-tab" data-toggle="pill" href="#vert-tabs-item-basico-4" role="tab" aria-controls="vert-tabs-item-basico-4" aria-selected="false">Iniciar Proyecto Básico</a>
      <a class="nav-link" id="vert-tabs-item-basico-5-tab" data-toggle="pill" href="#vert-tabs-item-basico-5" role="tab" aria-controls="vert-tabs-item-basico-5" aria-selected="true">Motor de plantillas Blade - Layouts</a>
      <a class="nav-link" id="vert-tabs-item-basico-6-tab" data-toggle="pill" href="#vert-tabs-item-basico-6" role="tab" aria-controls="vert-tabs-item-basico-6" aria-selected="true">Componentes (Básico)</a>
      <a class="nav-link" id="vert-tabs-item-basico-7-tab" data-toggle="pill" href="#vert-tabs-item-basico-7" role="tab" aria-controls="vert-tabs-item-basico-7" aria-selected="true">Recursos Estáticos</a>
      <a class="nav-link" id="vert-tabs-item-basico-8-tab" data-toggle="pill" href="#vert-tabs-item-basico-8" role="tab" aria-controls="vert-tabs-item-basico-8" aria-selected="true">Controladores Básicos</a>
      <a class="nav-link" id="vert-tabs-item-basico-9-tab" data-toggle="pill" href="#vert-tabs-item-basico-9" role="tab" aria-controls="vert-tabs-item-basico-9" aria-selected="true">Item 9</a>
      <a class="nav-link" id="vert-tabs-item-basico-10-tab" data-toggle="pill" href="#vert-tabs-item-basico-10" role="tab" aria-controls="vert-tabs-item-basico-10" aria-selected="true">Item 9</a>
      <a class="nav-link" id="vert-tabs-item-basico-11-tab" data-toggle="pill" href="#vert-tabs-item-basico-11" role="tab" aria-controls="vert-tabs-item-basico-11" aria-selected="true">Item 9</a>
      <a class="nav-link" id="vert-tabs-item-basico-12-tab" data-toggle="pill" href="#vert-tabs-item-basico-12" role="tab" aria-controls="vert-tabs-item-basico-12" aria-selected="true">Item 9</a>
      <a class="nav-link" id="vert-tabs-item-basico-13-tab" data-toggle="pill" href="#vert-tabs-item-basico-13" role="tab" aria-controls="vert-tabs-item-basico-13" aria-selected="true">Item 9</a>
    </div>
  </div>
  <div class="col-7 col-sm-9">
    <div class="tab-content" id="vert-tabs-tabContent">

      <!-- Crear un proyecto de Laravel -->
      <div class="tab-pane text-left fade active show" id="vert-tabs-item-basico-1" role="tabpanel" aria-labelledby="vert-tabs-item-basico-1-tab">
        <!-- capitulos del tema -->
        <div class="card card-warning collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <h4>CREAR UN PROYECTO LARAVEL</h4>
            <ul class="list-group">
              <a href="#req_previos" class="list-group-item list-group-item-action">Instalar PHP, Composer y el instalador de laravel</a>
              <a href="#componentes_ya_instalados" class="list-group-item list-group-item-action">Con PHP, Composer y el instalador de laravel ya instalados</a>
              <a href="#app_key" class="list-group-item list-group-item-action">Crear APP_KEY</a>
              <a href="#error_installer" class="list-group-item list-group-item-action">Corregir errores en la actualización del laravel installer</a>
              <a href="#versions_installer" class="list-group-item list-group-item-action">Cómo Instalar Versiones Anteriores de Laravel</a>
              <a href="#consideraciones" class="list-group-item list-group-item-action">Consideraciones Importantes</a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba">
          <a href="#"><i class="text-warning bi bi-caret-up-fill"></i></a>
        </div>

        <section class="section">

          <h1 class="my-5"><span class="bg-orange_1 px-3 rounded">CREAR UN PROYECTO LARAVEL</span></h1>

          <!-- Requisitos previos -->
          <article class="w-100 px-4 my-5 article">

            <h2 class="text-lila mt-5"><em>Requisitos previos</em></h2>

            <h3 id="req_previos" class="my-5">Instalar PHP, Composer y el instalador de laravel</h3>

            <p class="destacado text-justify mt-4 pathway-extreme-p text-dark">Asegurarse de tener instalados PHP, Composer, y el instalador de laravel. Además debe estar instalado Node y NPM o Bun que son necesarios para poder compilar los recursos de interfaz de una aplicación.</p>

            <p class="pathway-extreme-p">Si no tiene PHP y Composer instalados en su máquina local, los siguientes comandos instalarán PHP, Composer y el instalador de Laravel en macOS, Windows o Linux:</p>

            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="comentario"># Run as administrator...</span>
                Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
              </code>
            </pre>

            <p class="pathway-extreme-p text-justify mt-4">Seguidamente se debe reiniciar la sesión de la terminal</p>

            <p class="pathway-extreme-p text-justify mt-4">Este mismo comando se puede utilizar para actualizar PHP, Composer y el instalador de laravel.</p>

            <h3 id="componentes_ya_instalados" class="my-5">Con PHP, Composer y el instalador de laravel ya instalados</h3>

            <p class="pathway-extreme-p">Si ya se tinen instalados PHP, Composer y el instalador de laravel, puede crearse un proyecto en Laravel con el comando:</p>

            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="text-danger">composer</span> <span class="text-lila_2">create-project</span> <span class="text-skyblue_2">laravel/laravel</span> <span class="text-amarillo">example-app</span>
              </code>
            </pre>

            <p class="pathway-extreme-p text-justify mt-4">O puede crear nuevos proyectos de Laravel instalando globalmente el instalador de Laravel a través de Composer:</p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="text-danger">composer</span> <span class="text-lila_2">global require</span> <span class="text-skyblue_2">laravel/installer</span>

                <span class="text-danger">laravel</span> <span class="text-info">new</span> <span class="text-amarillo">example-app</span>
              </code>
            </pre>
            <p class="pathway-extreme-p text-justify mt-4">Si al ejecutar el comando <strong><em>laravel new example-app</em></strong> se presenta el error <strong><em>laravel not found</em></strong>, se debe agregar la ruta de instalación de laravel a la variable de entorno PATH. Para ello, se debe editar el archivo <strong><em>.bash_profile</em></strong> y agregar la siguiente línea:</p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                export PATH="$PATH:$HOME/.composer/vendor/bin"
              </code>
            </pre>

            <h4 class="resaltado my-5 w-75">Actualizar el instalador de laravel</h4>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="text-danger">composer</span> <span class="text-lila_2">global update</span> <span class="text-skyblue_2">laravel/installer</span>
              </code>
            </pre>

            <p class="pathway-extreme-p text-justify mt-4">Algunas veces es necesario desintalar el <span class="text-skyblue_2">laravel instaler</span></p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="text-danger">composer</span> <span class="text-lila_2">global remove</span> <span class="text-skyblue_2">laravel/installer</span>
              </code>
            </pre>

            <p class="pathway-extreme-p text-justify mt-4">Una vez creado el proyecto, inicie el servidor de desarrollo local de Laravel usando el comando de Laravel Artisan serve:</p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                cd <span class="text-amarillo">example-app</span>

                <span class="text-danger">php</span> <span class="text-lila">artisan</span> <span class="text-warning">serve</span>
              </code>
            </pre>

            <h3 id="app_key" class="my-5"><em>Crear APP_KEY</em></h3>
            <p class="pathway-extreme-p text-justify mt-4">Algunas veces NO se creará el archivo <strong><em>.env</em> por lo que hay que crearlo y llenarlo con el contenido del archivo <strong><em>.env.example</em></strong>. En este archivo el <strong><em>APP_KEY</em></strong> se mostrará vacío por lo que dicha clave se deberá generar con los siguientes comando</strong></p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="text-danger">php</span> <span class="text-lila">artisan</span> <span class="text-warning">key:generate</span>

                <span class="text-danger">php</span> <span class="text-lila">artisan</span> <span class="text-warning">config:cache</span>
              </code>
            </pre>

            <p class="pathway-extreme-p text-justify mt-4">Luego se debe reiniciar el servidor.</p>

            <h3 id="error_installer" class="my-5"><em>Corregir errores en la actualización del laravel installer</em></h3>

            <p class="pathway-extreme-p text-justify mt-4">Algunas veces se mostrarán errores como el siguiente:</p>
            <div class="text-center my-5">
              <img src="../src/img/correccion1.PNG" alt="correccion 1" class="img-fluid">
            </div>

            <p class="pathway-extreme-p text-justify mt-4">Lo primero es actualizar composer</p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="text-danger">composer</span> <span class="text-lila_2">self-update</span>
              </code>
            </pre>

            <div class="text-center my-5">
              <img src="../src/img/actualizar_composer.PNG" alt="actualizar composer" class="img-fluid">
            </div>

            <p class="pathway-extreme-p text-justify mt-4">Si al intentar actualizar el laravel installer el error persiste, ejecutar composer audit</p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="text-danger">composer</span> <span class="text-lila_2">audit</span>
              </code>
            </pre>
            <div class="text-center my-5">
              <img src="../src/img/composer_audit.PNG" alt="composer audit" class="img-fluid">
            </div>

            <p class="pathway-extreme-p text-justify mt-4">Corregir el paquete en cuestión</p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="comentario">En nuestro caso:</span>
                <span class="text-danger">composer</span> <span class="text-lila_2">require</span> <span class="text-skyblue_2">laravel/framework</span>
              </code>
            </pre>
            <div class="text-center my-5">
              <img src="../src/img/correccion_audit.PNG" alt="correccion audit" class="img-fluid">
            </div>

            <p class="pathway-extreme-p text-justify mt-4">Si al intentar actualizar o requerir el laravel installer el error persiste, moverse al directorio C:\Users\nombre_usuario\AppData\Roaming\Composer y desde alli ejecutar todo el procedimiento anteriormente explicado.</p>

            <h3 id="versions_installer" class="my-5">Cómo Instalar Versiones Anteriores de Laravel</h3>
            <h4 class="resaltado w-50">Requisitos previos</h4>
            <p class="pathway-extreme-p text-justify mt-4">Antes de comenzar, asegúrate de tener instalado:</p>
            <ul class="my-5">
              <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i>PHP (compatible con la versión de Laravel que deseas instalar)</li>
              <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i>Composer (si necesitas información sobre cómo instalar y usar Composer, puedes consultar mi artículo completo sobre el gestor de dependencias de PHP)</li>
              <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i>Servidor web (Apache, Nginx, etc.)</li>
            </ul>

            <h4 class="resaltado my-5 w-100">Método Principal: Usando Composer Create-Project</h4>
            <p class="pathway-extreme-p text-justify mt-4">La manera más directa y recomendada para instalar una versión específica de Laravel es utilizando el comando <span class="text-amarillo">composer create-project</span>. Este comando nos permite clonar el repositorio de Laravel en la versión deseada y configurar automáticamente las dependencias necesarias.</p>

            <p class="pathway-extreme-p text-justify mt-4">Para instalar una versión específica de Laravel, simplemente ejecuta el siguiente comando en tu terminal:</p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="text-danger">composer</span> <span class="text-lila_2">create-project</span> <span class="text-skyblue_2">laravel/laravel</span> <span class="text-amarillo">nombre-del-proyecto</span> <span class="text-amarillo">"version"</span><span class="text-lila_2">--prefer-dist</span> 

                <span class="comentario">Por ejemplo para Versiones Específicas:</span>
                <span class="text-danger">composer</span> <span class="text-lila_2">create-project</span> <span class="text-skyblue_2">laravel/laravel</span> <span class="text-amarillo">mi-proyecto</span> <span class="text-amarillo">"11.*"</span><span class="text-lila_2">--prefer-dist</span>
                <span class="text-danger">composer</span> <span class="text-lila_2">create-project</span> <span class="text-skyblue_2">laravel/laravel</span> <span class="text-amarillo">mi-proyecto</span> <span class="text-amarillo">"10.*"</span><span class="text-lila_2">--prefer-dist</span>

                <span class="comentario">Ejemplo de Versiones Específicas con Número Exacto</span>
                <span class="text-danger">composer</span> <span class="text-lila_2">create-project</span> <span class="text-skyblue_2">laravel/laravel</span> <span class="text-amarillo">mi-proyecto</span> <span class="text-amarillo">"8.6.10"</span><span class="text-lila_2">--prefer-dist</span>
              </code>
            </pre>

            <h3 id="consideraciones" class="my-5">Consideraciones Importantes</h3>

            <h4 class="resaltado">Compatibilidad con PHP</h4>
            <p class="pathway-extreme-p text-justify mt-4">Cada versión de Laravel tiene requisitos específicos de PHP:</p>
            <div class="text-center my-5">
              <img src="../src/img/laravel_versions.PNG" alt="laravel versions" class="img-fluid">
            </div>
          </article>

        </section>
      </div>

      <!-- Conceptos de Arquitectura -->
      <div class="tab-pane fade" id="vert-tabs-item-basico-2" role="tabpanel" aria-labelledby="vert-tabs-item-basico-2-tab">
        <!-- capitulos del tema -->
        <div class="card card-warning collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <h4 class="my-3">CONCEPTOS DE ARQUITECTURA</h4>
            <ul class="list-group">
              <a href="#cycle_request" class="list-group-item list-group-item-action">Ciclo de vida de una solicitud</a>
              <a href="#cycle_description" class="list-group-item list-group-item-action">Descripción general del ciclo de vida</a>
              <a href="#services_proveedors" class="list-group-item list-group-item-action">Centrarse en los proveedores de servicios</a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba">
          <a href="#"><i class="text-warning bi bi-caret-up-fill"></i></a>
        </div>
        <section class="section">

          <h1 class="my-5"><span class="bg-orange_1 px-3 rounded">CONCEPTOS DE ARQUITECTURA</span></h1>

          <article class="w-100 px-4 my-5 article">

            <h2 id="cycle_request" class="text-lila mt-5"><em>Ciclo de vida de una solicitud</em></h2>

            <h4 class="resaltado">Introducción</h4>

            <p class="pathway-extreme-p text-justify mt-4">El objetivo de este documento es brindarle una buena descripción general de cómo funciona el marco de trabajo de Laravel. Al conocer mejor el marco de trabajo en general, todo se sentirá menos "mágico" y tendrá más confianza al crear sus aplicaciones.</p>

            <h3 id="cycle_description" class="my-5">Descripción general del ciclo de vida</h3>

            <h4 class="resaltado">Primeros pasos</h4>
            <p class="pathway-extreme-p text-justify mt-4">El punto de entrada de todas las solicitudes a una aplicación Laravel es el archivo <span class="text-danger fs-6 text">public/index.php</span>. Todas las solicitudes se dirigen a este archivo mediante la configuración del servidor web (Apache/Nginx). El archivo <span class="text-lila_2 fs-6 text">index.php</span> no contiene mucho código. En cambio, es un punto de partida para cargar el resto del marco.</p>
            <p class="pathway-extreme-p text-justify mt-4">El archivo <span class="text-lila_2 fs-6 text">index.php</span> carga la definición del cargador automático generado por Composer y luego recupera una instancia de la aplicación Laravel desde <span class="text-skyblue_2">bootstrap/app.php</span>. La primera acción que realiza Laravel es crear una instancia del contenedor de la aplicación o servicio.</p>

            <h4 class="resaltado my-5">Núcleos HTTP/consola</h4>
            <p class="pathway-extreme-p text-justify mt-4">A continuación, la solicitud entrante se envía al núcleo HTTP o al núcleo de la consola, utilizando los métodos <span class="text-danger fs-6 text">handleRequest</span> o <span class="text-danger fs-6 text">handleCommandde</span> la instancia de la aplicación, según el tipo de solicitud que ingrese a la aplicación. Estos dos núcleos funcionan como la ubicación central a través de la cual fluyen todas las solicitudes. Por ahora, centrémonos únicamente en el núcleo HTTP, que es una instancia de <span class="text-danger fs-6 text">Illuminate\Foundation\Http\Kernel</span>.</p>
            <p class="pathway-extreme-p text-justify mt-4">El núcleo HTTP define una matriz de clases <span class="text-danger fs-6 text">bootstrappers</span> que se ejecutarán antes de que se ejecute la solicitud. Estos programas de arranque configuran el manejo de errores, configuran el registro, detectan el entorno de la aplicación y realizan otras tareas que deben realizarse antes de que se procese realmente la solicitud. Por lo general, estas clases manejan la configuración interna de Laravel de la que no debe preocuparse.</p>
            <p class="pathway-extreme-p text-justify mt-4">El núcleo HTTP también es responsable de pasar la solicitud a través de la pila de middleware de la aplicación. Estos middleware se encargan de leer y escribir la sesión HTTP , determinar si la aplicación está en modo de mantenimiento, verificar el token CSRF y más.</p>
            <p class="pathway-extreme-p text-justify mt-4">La firma del método <span class="text-danger fs-6 text">handle</span> del núcleo HTTP es bastante simple: recibe un <span class="text-danger fs-6 text">Request</span> y devuelve un <span class="text-danger fs-6 text">Response</span>. Piense en el núcleo como si fuera una gran caja negra que representa toda su aplicación. Envíele solicitudes HTTP y devolverá respuestas HTTP.</p>

            <h4 class="resaltado my-5">Proveedores de servicio</h4>
            <p class="pathway-extreme-p text-justify mt-4">Una de las acciones de arranque del núcleo más importantes es cargar los proveedores de servicios para la aplicación. Los proveedores de servicios son responsables de arrancar todos los diversos componentes del marco, como la base de datos, la cola, la validación y los componentes de enrutamiento.</p>
            <p class="pathway-extreme-p text-justify mt-4">Laravel iterará a través de esta lista de proveedores y creará una instancia de cada uno de ellos. Después de crear una instancia de los proveedores, se llamará al método <span class="text-danger fs-6 text">register</span> en todos ellos. Luego, una vez que se hayan registrado todos los proveedores, se llamará al método <span class="text-danger fs-6 text">boot</span> en cada uno de ellos. Esto es para que los proveedores de servicios puedan depender de cada enlace de contenedor que esté registrado y disponible en el momento en que se ejecute su método <span class="text-danger fs-6 text">boot</span>.</p>
            <p class="pathway-extreme-p text-justify mt-4">Básicamente, cada característica importante que ofrece Laravel es configurada por un proveedor de servicios. Dado que ellos configuran y configuran muchas de las características que ofrece el framework, los proveedores de servicios son el aspecto más importante de todo el proceso de arranque de Laravel.</p>
            <p class="pathway-extreme-p text-justify mt-4">Si bien el marco utiliza internamente docenas de proveedores de servicios, también tiene la opción de crear los suyos propios. Puede encontrar una lista de los proveedores de servicios definidos por el usuario o de terceros que utiliza su aplicación en el archivo <span class="text-danger fs-6 text">bootstrap/providers.php</span>.</p>

            <h4 class="resaltado my-5">Enrutamiento</h4>
            <p class="pathway-extreme-p text-justify mt-4">Una vez que se ha iniciado la aplicación y se han registrado todos los proveedores de servicios, se entregará la <span class="text-danger fs-6 text">Request</span> al enrutador para que la envíe. El enrutador enviará la solicitud a una ruta o controlador, y también ejecutará cualquier middleware específico de la ruta.</p>
            <p class="pathway-extreme-p text-justify mt-4">El middleware proporciona un mecanismo conveniente para filtrar o examinar las solicitudes HTTP que ingresan a su aplicación. Por ejemplo, Laravel incluye un middleware que verifica si el usuario de su aplicación está autenticado. Si el usuario no está autenticado, el middleware lo redireccionará a la pantalla de inicio de sesión. Sin embargo, si el usuario está autenticado, el middleware permitirá que la solicitud continúe en la aplicación. Algunos middleware se asignan a todas las rutas dentro de la aplicación, como <span class="text-danger fs-6 text">PreventRequestsDuringMaintenance</span>, mientras que otros solo se asignan a rutas específicas o grupos de rutas.</p>
            <p class="pathway-extreme-p text-justify mt-4">Si la solicitud pasa a través de todo el middleware asignado de la ruta coincidente, se ejecutará el método de ruta o controlador y la respuesta devuelta por el método de ruta o controlador se enviará de regreso a través de la cadena de middleware de la ruta.</p>

            <h4 class="resaltado my-5">Terminando</h4>
            <p class="pathway-extreme-p text-justify mt-4">Una vez que el método de ruta o controlador devuelve una respuesta, la respuesta viajará hacia afuera a través del middleware de la ruta, lo que le da a la aplicación la oportunidad de modificar o examinar la respuesta saliente.</p>
            <p class="pathway-extreme-p text-justify mt-4">Finalmente, una vez que la respuesta viaja de regreso a través del middleware, el método <span class="text-danger fs-6 text">handle</span> del núcleo HTTP devuelve el objeto <span class="text-danger fs-6 text">handleRequest</span> de respuesta a la instancia de la aplicación y este método llama al método <span class="text-danger fs-6 text">send</span> en la respuesta devuelta. El método <span class="text-danger fs-6 text">send</span> envía el contenido de la respuesta al navegador web del usuario. ¡Ahora hemos completado nuestro viaje a través de todo el ciclo de vida de la solicitud de Laravel!</p>

            <h3 id="services_proveedors" class="mY-5">Centrarse en los proveedores de servicios</h3>
            <p class="pathway-extreme-p text-justify mt-4">Los proveedores de servicios son realmente la clave para iniciar una aplicación Laravel. Se crea la instancia de la aplicación, se registran los proveedores de servicios y se envía la solicitud a la aplicación iniciada. ¡Es así de simple!.</p>
            <p class="pathway-extreme-p text-justify mt-4">Es muy valioso tener una comprensión clara de cómo se crea una aplicación Laravel y cómo se inicia mediante proveedores de servicios. Los proveedores de servicios definidos por el usuario de su aplicación se almacenan en el directorio <span class="text-danger fs-6 text">app/Providers</span>.</p>
            <p class="pathway-extreme-p text-justify mt-4">De forma predeterminada, <span class="text-danger fs-6 text">AppServiceProvider</span> está bastante vacío. Este proveedor es un excelente lugar para agregar el arranque de su aplicación y los enlaces de contenedores de servicios. Para aplicaciones grandes, es posible que desee crear varios proveedores de servicios, cada uno con un arranque más granular para los servicios específicos que utiliza su aplicación.</p>

          </article>

        </section>
      </div>

      <!-- Base de Datos y Migraciones  -->
      <div class="tab-pane fade" id="vert-tabs-item-basico-3" role="tabpanel" aria-labelledby="vert-tabs-item-basico-3-tab">
        <!-- capitulos del tema -->
        <div class="card card-warning collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <h4>BASES DE DATOS Y MIGRACIONES</h4>
            <ul class="list-group">
              <a href="#migraciones" class="list-group-item list-group-item-action">Migraciones</a>
              <a href="#conex_bd_inicial" class="list-group-item list-group-item-action">Conexión a una Base de Datos Inicial</a>
              <a href="#config_directory" class="list-group-item list-group-item-action">Configuración del directorio</a>
              <a href="#crear_tablas" class="list-group-item list-group-item-action">Crear Tablas para una BD</a>
              <a href="#crear_campos" class="list-group-item list-group-item-action">Crear Campos de una Tabla</a>
              <a href="#encad_metodos" class="list-group-item list-group-item-action">Encadenación de métodos</a>
              <a href="#revert_migracion" class="list-group-item list-group-item-action">Modificar una tabla o Revertir una Migración</a>
              <a href="#revert_all_migrations" class="list-group-item list-group-item-action">Revertir Todas las Migraciones</a>
              <a href="#revert_one_migration" class="list-group-item list-group-item-action">Revertir y Migrar usando sólo un comando</a>
              <a href="#delete_table_migration" class="list-group-item list-group-item-action">Eliminar todas las tablas y migrar</a>
              <a href="#migration_precaution" class="list-group-item list-group-item-action">Precaución</a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba">
          <a href="#"><i class="text-warning bi bi-caret-up-fill"></i></a>
        </div>

        <section class="section">

          <h1 class="my-5"><span class="bg-orange_1 px-3 rounded">BASES DE DATOS Y MIGRACIONES</span></h1>

          <!-- Migraciones-->
          <article class="w-100 px-4 my-5 article">

            <h2 id="migraciones" class="text-lila mt-5"><em>Migraciones</em></h2>

            <h3 class="my-5">Qué son las migraciones</h3>
            <p class="pathway-extreme-p destacado">Las migraciones son como control de versiones de su base de datos, lo que le permite a su equipo definir y compartir la definición del esquema de la base de datos de la aplicación.</p>

            <p class="pathway-extreme-p text-justify mt-4">
              Si alguna vez tuvo que decirle a un compañero de equipo que agregue manualmente una columna a su esquema de base de datos local después de realizar los cambios desde el control de fuente, se ha enfrentado al problema que resuelven las migraciones de bases de datos.
              <br />
              La <span class="text-danger">Schema facade</span> de Laravel proporciona soporte independiente de la base de datos para crear y manipular tablas en todos los sistemas de bases de datos compatibles con Laravel. Normalmente, las migraciones utilizarán <span class="text-danger">facade</span> para crear y modificar tablas y columnas de bases de datos.
            </p>

            <h3 id="conex_bd_inicial" class="my-5">Conexión a una Base de Datos Inicial</h3>
            <p class="pathway-extreme-p text-justify mt-4">
              De manera predeterminada, el archivo de configuración de su aplicación <strong>.env</strong> especifica que Laravel interactuará con una base de datos SQLite.
              <br />
              Durante la creación del proyecto, Laravel creó un archivo database/database.sqlite para usted y ejecutó las migraciones necesarias para crear las tablas de la base de datos de la aplicación.
              <br />
              Si prefiere utilizar otro controlador de base de datos, como MySQL o PostgreSQL, puede actualizar su archivo de configuración <strong>.env</strong> para utilizar la base de datos adecuada. Por ejemplo, si desea utilizar MySQL, actualice las variables de su archivo de configuración <strong>.env</strong> DB_* de la siguiente manera:
            </p>
            <pre class="w-75 sintaxis">
              <code>
                DB_CONNECTION=mysql
                DB_HOST=127.0.0.1
                DB_PORT=3306
                DB_DATABASE=laravel
                DB_USERNAME=root
                DB_PASSWORD=
              </code>
            </pre>
            <p class="pathway-extreme-p text-justify mt-4">
              Si elige utilizar una base de datos distinta a SQLite, deberá crear la base de datos y ejecutar las migraciones de bases de datos de su aplicación con el comando:
            </p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="text-danger">php</span> <span class="text-lila">artisan</span> <span class="text-warning">migrate</span>
              </code>
            </pre>
            <p class="pathway-extreme-p text-justify mt-4">La nueva migración se colocará en su directorio <span class="text-danger fs-6 text">database/migrations</span>. Cada nombre de archivo de migración contiene una marca de tiempo que permite a Laravel determinar el orden de las migraciones:</p>

            <h3 id="config_directory" class="my-5">Configuración del directorio</h3>
            <p class="pathway-extreme-p text-justify mt-4">Laravel siempre debe servirse desde la raíz del "directorio web" configurado para su servidor web. No debe intentar servir una aplicación Laravel desde un subdirectorio del "directorio web". Intentar hacerlo podría exponer archivos confidenciales presentes en su aplicación.</p>

            <h3 id="crear_tablas" class="my-5">Crear Tablas para una BD</h3>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="comentario">Por convención el nombre de la tabla debe ir en plural.</span>
                <span class="text-danger">php</span> <span class="text-lila">artisan</span> <span class="text-warning">make:migration</span> create_<span class="text-lila">notes</span>_table
              </code>
            </pre>
            <p class="pathway-extreme-p text-justify mt-4">
              Laravel usará el nombre de la migración para intentar adivinar el nombre de la tabla y si la migración creará o no una nueva tabla. Si Laravel puede determinar el nombre de la tabla a partir del nombre de la migración, Laravel completará previamente el archivo de migración generado con la tabla especificada y lo colocará en el directorio <span class="text-danger fs-6 text">database/migrations</span>. De lo contrario, puede simplemente especificar la tabla en el archivo de migración manualmente.
            </p>

            <h3 id="crear_campos" class="mt-5">Crear Campos de una Tabla</h3>
            <p class="pathway-extreme-p text-justify mt-4">
              Una vez creada la tabla <span class="text-danger">notes</span>, su configuración se puede realizar en el archivo que laravel crea en el directorio <span class="text-danger fs-6 text">database/migrations/nombre_de_la_tabla</span>
            </p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                  <span class="text-amarillo">2024_07_10_220559</span>_create_<span class="text-lila">notes</span>_table.php
              </code>
            </pre>
            <p class="pathway-extreme-p text-justify mt-4">En cuyo contenido se procede a la creación de los campos necesarios.</p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                  <span class="comentario text-amarillo fs-5">Contenido por defecto</span>        

                    use Illuminate\Database\Migrations\Migration;
                    use Illuminate\Database\Schema\Blueprint;
                    use Illuminate\Support\Facades\Schema;

                    return new class extends Migration
                    {
                        &nbsp;&nbsp;&nbsp;/**
                        &nbsp;&nbsp;&nbsp; * Run the migrations.
                        &nbsp;&nbsp;&nbsp; */
                        &nbsp;&nbsp;&nbsp;public function up(): void
                        &nbsp;&nbsp;&nbsp;{
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Schema::create('notes', function (Blueprint $table) {
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$table->id();
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$table->timestamps();
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});
                        &nbsp;&nbsp;&nbsp;}

                        &nbsp;&nbsp;&nbsp;/**
                        &nbsp;&nbsp;&nbsp; * Reverse the migrations.
                        &nbsp;&nbsp;&nbsp; */
                        &nbsp;&nbsp;&nbsp;public function down(): void
                        &nbsp;&nbsp;&nbsp;{
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Schema::dropIfExists('notes');
                        &nbsp;&nbsp;&nbsp;}
                    };

              </code>
            </pre>

            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                  <span class="comentario text-amarillo fs-5">Adición de campos</span>        

                    use Illuminate\Database\Migrations\Migration;
                    use Illuminate\Database\Schema\Blueprint;
                    use Illuminate\Support\Facades\Schema;

                    return new class extends Migration
                    {
                        &nbsp;&nbsp;&nbsp;/**
                        &nbsp;&nbsp;&nbsp; * Run the migrations.
                        &nbsp;&nbsp;&nbsp; */
                        &nbsp;&nbsp;&nbsp;public function up(): void
                        &nbsp;&nbsp;&nbsp;{
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Schema::create('notes', function (Blueprint $table) {
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$table->id();
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$table->string('title', 255);
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$table->string('description', 255);
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$table->boolean('done');
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$table->integer('example');
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$table->unsignedInteger('example');
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$table->bigInteger('example');
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$table->unsignedBigInteger('example');
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$table->text('example');
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$table->float('example');
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$table->double('example');
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$table->enum('state', ['DRAFT', 'PUBLISHED', 'DELETED']);
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$table->timestamps();
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});
                        &nbsp;&nbsp;&nbsp;}

                        &nbsp;&nbsp;&nbsp;/**
                        &nbsp;&nbsp;&nbsp; * Reverse the migrations.
                        &nbsp;&nbsp;&nbsp; */
                        &nbsp;&nbsp;&nbsp;public function down(): void
                        &nbsp;&nbsp;&nbsp;{
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Schema::dropIfExists('notes');
                        &nbsp;&nbsp;&nbsp;}
                    };

              </code>
            </pre>

            <h3 id="encad_metodos" class="my-5">Encadenación de métodos</h3>

            <pre class="w-100 pre-content-list bg-blue_2 my-5">
              <code>
                  <span class="comentario text-amarillo fs-5">Encadenación de métodos</span>        

                    use Illuminate\Database\Migrations\Migration;
                    use Illuminate\Database\Schema\Blueprint;
                    use Illuminate\Support\Facades\Schema;

                    return new class extends Migration
                    {
                        &nbsp;&nbsp;&nbsp;/**
                        &nbsp;&nbsp;&nbsp; * Run the migrations.
                        &nbsp;&nbsp;&nbsp; */
                        &nbsp;&nbsp;&nbsp;public function up(): void
                        &nbsp;&nbsp;&nbsp;{
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Schema::create('notes', function (Blueprint $table) {
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$table->id();
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$table->string('title', 255);
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$table->string('description', 255)-><span class="text-lila">nullable</span>()->otro_metodo()->otrometodo();
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$table->boolean('done')-><span class="text-lila">default</span>(<span class="text-warning">false</span>);
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$table->timestamps();
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});
                        &nbsp;&nbsp;&nbsp;}

                        &nbsp;&nbsp;&nbsp;/**
                        &nbsp;&nbsp;&nbsp; * Reverse the migrations.
                        &nbsp;&nbsp;&nbsp; */
                        &nbsp;&nbsp;&nbsp;public function down(): void
                        &nbsp;&nbsp;&nbsp;{
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Schema::dropIfExists('notes');
                        &nbsp;&nbsp;&nbsp;}
                    };

              </code>
            </pre>

            <p class="pathway-extreme-p text-justify mt-4">Luego de esto debemos ejecutar el comando:</p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="text-danger">php</span> <span class="text-lila">artisan</span> <span class="text-warning">migrate</span>
              </code>
            </pre>

            <h3 id="revert_migracion" class="my-5">Modificar una tabla o Revertir una Migración</h3>
            <p class="pathway-extreme-p text-justify mt-4">Para revertir una migración se ejecuta el siguiente comando</p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="text-danger">php</span> <span class="text-lila">artisan</span> <span class="text-warning">migrate</span>:<span class="text-skyblue_2">rollback</span>
              </code>
            </pre>

            <p class="pathway-extreme-p text-justify mt-4">El comando <span class="text-skyblue_2">rollback</span> revierte el último "lote" de migraciones, que puede incluir varios archivos de migración.</p>

            <p class="pathway-extreme-p text-justify mt-4">Posteriormente se realizan todas las modificaciones necesarias en las tablas, por ejemplo aumentar un campo <span class="text-danger">date</span> y finalmente volver a ejecutar el comando:</p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="text-danger">php</span> <span class="text-lila">artisan</span> <span class="text-warning">migrate</span>
              </code>
            </pre>
            <p class="pathway-extreme-p text-justify mt-4">Puede revertir un número limitado de migraciones proporcionando la opción <span class="text-warning">step</span> al comando <span class="text-skyblue_2">rollback</span>. Por ejemplo, el siguiente comando revertirá las últimas cinco migraciones:</p>

            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="text-danger">php</span> <span class="text-lila">artisan</span> <span class="text-warning">migrate</span>:<span class="text-skyblue_2">rollback</span> <span class="text-warning">--step=5</span>
              </code>
            </pre>

            <p class="pathway-extreme-p text-justify mt-4">Puede revertir un "lote" específico de migraciones proporcionando la opción <span class="text-warning">batch</span> al comando <span class="text-skyblue_2">rollback</span>, donde la opción <span class="text-warning">batch</span> corresponde a un valor de lote dentro de la tabla de base de datos <span class="text-danger">migrations</span> de su aplicación. Por ejemplo, el siguiente comando revertirá todas las migraciones en el lote tres:</p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="text-danger">php</span> <span class="text-lila">artisan</span> <span class="text-warning">migrate</span>:<span class="text-skyblue_2">rollback</span> <span class="text-warning">--batch=3</span>
              </code>
            </pre>
            <p class="pathway-extreme-p text-justify mt-4">Si desea ver las sentencias SQL que ejecutarán las migraciones sin ejecutarlas realmente, puede proporcionar la bandera <span class="text-warning">--pretend</span> al comando <span class="text-warning">migrate</span>:<span class="text-skyblue_2">rollback</span>:</p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="text-danger">php</span> <span class="text-lila">artisan</span> <span class="text-warning">migrate</span>:<span class="text-skyblue_2">rollback</span> <span class="text-warning">--pretend</span>
              </code>
            </pre>

            <h3 id="revert_all_migrations" class="mt-5">Revertir Todas las Migraciones</h3>
            <p class="pathway-extreme-p text-justify mt-4">El comando <span class="text-warning">migrate</span>:<span class="text-skyblue_2">reset</span> revertirá todas las migraciones de su aplicación:</p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="text-danger">php</span> <span class="text-lila">artisan</span> <span class="text-warning">migrate</span>:<span class="text-skyblue_2">reset</span>
              </code>
            </pre>

            <h3 id="revert_one_migration" class="my-5">Revertir y Migrar usando sólo un comando</h3>
            <p class="pathway-extreme-p text-justify mt-4">El comando <span class="text-warning">migrate</span>:<span class="text-skyblue_2">refresh</span> revertirá todas sus migraciones y luego ejecutará el comando <span class="text-warning">migrate</span>. Este comando recrea efectivamente toda su base de datos:</p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="text-danger">php</span> <span class="text-lila">artisan</span> <span class="text-warning">migrate</span>:<span class="text-skyblue_2">refresh</span>
              </code>
            </pre>

            <p class="pathway-extreme-p text-justify mt-4">Puede revertir y volver a migrar un número limitado de migraciones proporcionando la opción <span class="text-warning">step</span> al comando <span class="text-skyblue_2">refresh</span>. Por ejemplo, el siguiente comando revertirá y volverá a migrar las últimas cinco migraciones:</p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="text-danger">php</span> <span class="text-lila">artisan</span> <span class="text-warning">migrate</span>:<span class="text-skyblue_2">refresh</span> <span class="text-warning">--step=5</span>
              </code>
            </pre>

            <h3 id="delete_table_migration" class="mt-5">Eliminar todas las tablas y migrar</h3>
            <p class="pathway-extreme-p text-justify mt-4">El comando <span class="text-warning">migrate</span>: <span class="text-skyblue_2">fresh</span> eliminará todas las tablas de la base de datos y luego ejecutará el comando <span class="text-warning">migrate</span>:</p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>
                <span class="text-danger">php</span> <span class="text-lila">artisan</span> <span class="text-warning">migrate</span>:<span class="text-skyblue_2">fresh</span>
                
                <span class="text-danger">php</span> <span class="text-lila">artisan</span> <span class="text-warning">migrate</span>:<span class="text-skyblue_2">fresh</span> <span class="text-warning">--seed</span>
              </code>
            </pre>

            <p class="pathway-extreme-p text-justify mt-4">De forma predeterminada, el comando <span class="text-warning">migrate</span>:<span class="text-skyblue_2">fresh</span> solo elimina tablas de la conexión de base de datos predeterminada. Sin embargo, puede utilizar la opción <span class="text-warning">--database</span> para especificar la conexión de base de datos que se debe migrar. El nombre de la conexión de la base de datos debe corresponder a una conexión definida en el archivo de configuración <span class="text-danger">database</span> de su aplicación :</p>
            <pre class="w-75 pre-content-list bg-blue_2 my-5">
              <code>      
                <span class="text-danger">php</span> <span class="text-lila">artisan</span> <span class="text-warning">migrate</span>:<span class="text-skyblue_2">fresh</span> <span class="text-warning">--database=admin</span>
              </code>
            </pre>

            <h3 id="migration_precaution" class="my-5">Precaución</h3>
            <p class="pathway-extreme-p text-justify mt-4">El comando <span class="text-warning">migrate</span>:<span class="text-skyblue_2">fresh</span> eliminará todas las tablas de la base de datos independientemente de su prefijo. Este comando debe usarse con precaución al desarrollar en una base de datos compartida con otras aplicaciones.</p>

          </article>

        </section>
      </div>

      <!-- Iniciar Proyecto Básico-->
      <div class="tab-pane fade" id="vert-tabs-item-basico-4" role="tabpanel" aria-labelledby="vert-tabs-item-basico-4-tab">
        <!-- capitulos del tema -->
        <div class="card card-warning collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <h4 class="my-3"></h4>
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action"></a>
              <a href="#" class="list-group-item list-group-item-action"></a>
              <a href="#" class="list-group-item list-group-item-action"></a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba">
          <a href="#"><i class="text-warning bi bi-caret-up-fill"></i></a>
        </div>
        <section class="section">

          <h1 class="my-5"><span class="bg-orange_1 px-3 rounded">Iniciar Proyecto Básico</span></h1>

          <!-- Iniciar Proyecto Básico -->
          <article class="w-100 px-4 my-5 article">

            <h2 class="text-lila mt-5"><em>Iniciar Proyecto Básico</em></h2>

            <p class="pathway-extreme-p text-justify mt-4">El siguiente ejemplo muestra la creacion de un proyecto llamado <strong>helloworld</strong> </p>
            <h3 class="my-5">Creación del proyecto</h3>
            <pre class="w-75 sintaxis">
              <code>
                laravel new helloworld

                cd helloworld

                php artisan serve
              </code>
            </pre>
            <h3 class="my-5">Scafolding del proyecto</h3>
            <figure class="w-50 m-auto">
              <img src="../../src/img/scafolding.PNG" alt="" class="img-fluid">
            </figure>

            <h3 class=my-5">Ruteo Básico</h3>
            <p class="pathway-extreme-p text-justify mt-4">El siguiente ejemplo muestra un ruteo básico SIN CONTROLADORES.
              <br />Se configura en el archivo <span class="font-monospace text-primary">helloroworld/routes/web.php</span>
            </p>
            <pre class="w-75 sintaxis">
              <code>
                use Illuminate\Support\Facades\Route;
              
                <span class="text-primary">Route</span>::<span class="text-lila">view</span>('/', 'index')->name('index');  
                <span class="text-primary">Route</span>::<span class="text-lila">view</span>('/home', 'pages.home.home')->name('home');
                <span class="text-primary">Route</span>::<span class="text-lila">view</span>('/about', 'pages.about.about')->name('about');
              </code>
            </pre>
            <p class="pathway-extreme-p text-justify mt-4">Luego de se deben crear las vistas <strong>home</strong> y <strong>about</strong> las cuales se encuentran dentro del directorio <strong>pages</strong>.</p>
            <p class="pathway-extreme-p text-justify mt-4">Las vistas se encuentran en: </p>
            <pre class="sintaxis">
              <code>
                <span class="font-monospace">helloroworld/resources/views/pages/home/home.blade.php</span>
                <span class="font-monospace">helloroworld/resources/views/pages/about/about.blade.php</span>
              </code>
            </pre>

          </article>

        </section>
      </div>

      <!-- Motor de plantillas Blade - Layouts -->
      <div class="tab-pane fade" id="vert-tabs-item-basico-5" role="tabpanel" aria-labelledby="vert-tabs-item-basico-5-tab">
        <!-- capitulos del tema -->
        <div class="card card-warning collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action"></a>
              <a href="#" class="list-group-item list-group-item-action"></a>
              <a href="#" class="list-group-item list-group-item-action"></a>
              <a href="#" class="list-group-item list-group-item-action"></a>
              <a href="#" class="list-group-item list-group-item-action"></a>
              <a href="#" class="list-group-item list-group-item-action"></a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba">
          <a href="#"><i class="text-warning bi bi-caret-up-fill"></i></a>
        </div>

        <section class="section">

          <h1 class="my-5"><span class="bg-orange_1 px-3 rounded">Motor de plantillas Blade - Layouts</span></h1>

          <article class="w-100 px-4 my-5 article">

            <h2 id="" class=" text-lila mt-5"><em>Motor de plantillas Blade - Layouts</em></h2>

            <p class="pathway-extreme-p text-justify mt-4 destacado">Blade es el motor de plantillas simple pero potente que se incluye con Laravel. </p>
            <p class="pathway-extreme-p text-justify mt-4">A diferencia de algunos motores de plantillas PHP, Blade no le impide usar código PHP simple en sus plantillas. De hecho, todas las plantillas de Blade se compilan en código PHP simple y se almacenan en caché hasta que se modifican, lo que significa que Blade agrega esencialmente cero sobrecarga a su aplicación. Los archivos de plantilla de Blade usan la extensión de archivo <span class="text-danger fs-6 text">.blade.php</span> y generalmente se almacenan en el directorio <span class="text-danger fs-6 text">resources/views</span>.</p>
            <p class="text-justify mt-4">Las vistas de Blade se pueden devolver desde rutas o controladores mediante el asistente global <span class="text-danger fs-6 text">view</span>. Por supuesto, como se menciona en la documentación sobre vistas, los datos se pueden pasar a la vista Blade mediante el segundo argumento del asistente:</p>
            <pre class="sintaxis my-4">
              <code>
                Route::get('/', function () {
                  &nbsp;&nbsp;&nbsp; return view('greeting', ['name' => 'Finn']);
                });
              </code>
            </pre>

            <h3 class="my-5">El directorio layouts</h3>
            <p class="pathway-extreme-p text-justify mt-4">Es donde se almacenarán todas las partes comunes del sitio web y que serán inyectadas a las vistas donde sean requeridas. Por convencion se denominará directorio <span class="text-danger fs-6 text">layouts</span> y será ubicado en <span class="text-danger fs-6 text">resources/views/layouts</span></p>
            <p class="pathway-extreme-p text-justify mt-4">En este directorio se crearán todos los archivos que compartan partes en común de las distintas páginas de una aplicación. Por lo general suelen denominarse <span class="text-danger fs-6 text">base.blade.php</span> o <span class="text-danger fs-6 text">app.blade.php</span>; pero puede llevar el nombre que se considere necesario, en nuestro ejemplo se llamará <span class="text-danger fs-6 text">landing.blade.php</span> y contendrá el título de la página y un contenido mínimo por ejemplo una referencia al nombre de la página web activa.</p>

            <h4 class="resaltado">La directiva @yield()</h4>
            <p class="pathway-extreme-p text-justify mt-4">Con esta directiva se podrá "inyectar" el nombre del titulo de la página web(con la variable 'title') y el contenido(con la variable 'content')</p>
            <pre class="sintaxis">
              <code>
                <span class="comentario">landing.blade.php</span>
                
                &lt;!DOCTYPE html&gt;
                  &lt;html lang="en"&gt;
                  &nbsp;&nbsp;&nbsp;&lt;head&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta charset="UTF-8"&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta http-equiv="X-UA-Compatible" content="ie=edge"&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;<span class="text-lila">@yield</span>('title')&lt;/title&gt;
                  &nbsp;&nbsp;&nbsp;&lt;/head&gt;
                  &nbsp;&nbsp;&nbsp;&lt;body&gt;                                
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">@yield</span>('content')
                  &nbsp;&nbsp;&nbsp;&lt;/body&gt;
                  &lt;/html&gt;
              </code>
            </pre>

            <h4 class="resaltado">La directiva @extends()</h4>
            <p class="pathway-extreme-p text-justify mt-4">Permitirá hacer referencia a la página "template". En nuestro caso <span class="text-danger fs-6 text">landing.blade.php</span> y debe ser declarada en cada una de las páginas que contienen la parte en común a todas. P.ej home, about, contact, services; cada una de ellas tiene un título</p>

            <h4 class="resaltado">La directiva @section()</h4>
            <p class="pathway-extreme-p text-justify mt-4">Permite configurar los datos de cada variable que utilizará el archivo "template" (o sea landing.blade.php)</p>
            <pre class="sintaxis">
              <code>
                <span class="comentario">about.blade.php</span>

                <span class="text-primary">@extends</span>('layouts.<span class="text-danger">landing</span>')

                <span class="text-primary">@section</span>('<span class="text-lila">title</span>', 'Acerca de')
                                        
                <span class="text-primary">@section</span>('<span class="text-lila">content</span>')
                &nbsp;&nbsp;&nbsp;&lt;h1&gt;ACERCA DE DEL LANDING PAGE&lt;/h1&gt;
                <span class="text-primary">@endsection</span>

              </code>
            </pre>
            <pre class="sintaxis mt-4">
              <code>
                <span class="comentario">contact.blade.php</span>

                <span class="text-primary">@extends</span>('layouts.<span class="text-danger">landing</span>')

                <span class="text-primary">@section</span>('<span class="text-lila">title</span>', 'Contactanos')
                                        
                <span class="text-primary">@section</span>('<span class="text-lila">content</span>')
                &nbsp;&nbsp;&nbsp;&lt;h1&gt;PAGINA CONTACTANOS DEL LANDING PAGE&lt;/h1&gt;
                <span class="text-primary">@endsection</span>

              </code>
            </pre>

            <h3 class="my-5">El directorio _partials</h3>
            <p class="pathway-extreme-p text-justify mt-4">Un archivo "template", en nuestro caso el archivo landing.blade.php, NO debe ser muy extenso, por lo que, siempre será necesario subdividirlo en varios otros archivos. Por ejemplo un sub archivo que contenga el menú principal, otro para el footer y quizá otro para un menu secundario o aside, etc.</p>
            <p class="pathway-extreme-p text-justify mt-4">Todos estos sub archivos serán almacenados en un sub directorio que por convención es llamado <span class="text-danger fs-6 text">_partials.</span></p>

            <h4 class="resaltado">La directiva @include()</h4>
            <p class="pathway-extreme-p text-justify mt-4">Permitirá incluir esos sub archivos en el archivo "template" principal. Por ejmplo: sub archivo resources/views/layouts/_partials/<span class="text-danger fs-6 text">menu.blade.php</span></p>

            <pre class="sintaxis mt-4">
              <code>
                <span class="comentario">landing.blade.php</span>

                &lt;!DOCTYPE html&gt;
                &lt;html lang="es"&gt;
                  &nbsp;&nbsp;&nbsp;&lt;head&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;@yield('title')&lt;/title&gt;
                  &nbsp;&nbsp;&nbsp;&lt;/head&gt;
                  &nbsp;&nbsp;&nbsp;&lt;body&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@<span class="text-lila">include</span>('layouts._partials.<span class="text-primary">menu</span>')
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@yield('content')
                  &nbsp;&nbsp;&nbsp;&lt;/body&gt;
                &lt;/html&gt;

              </code>
            </pre>

            <pre class="sintaxis">
              <code>
                <span class="comentario">menu.blade.php</span>

                &lt;header&gt;
                  &nbsp;&nbsp;&nbsp;&lt;nav class="navbar navbar-expand-sm navbar-dark bg-primary"&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="collapse navbar-collapse" id="collapsibleNavId"&gt;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul class="navbar-nav me-auto mt-2 mt-lg-0"&gt;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class="nav-item"&gt;
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class="nav-link active" href="#"&gt;Home&lt;/a&gt;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class="nav-item"&gt;
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class="nav-link" href="#"&gt;Acerca de&lt;/a&gt;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class="nav-item"&gt;
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class="nav-link" href="#"&gt;Servicios&lt;/a&gt;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class="nav-item"&gt;
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class="nav-link" href="#"&gt;Contáctame&lt;/a&gt;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
                  &nbsp;&nbsp;&nbsp;&lt;/nav&gt;
                &lt;/header&gt;
              </code>
            </pre>

            <h4 class="resaltado">Definiendo las URLs del menu de menu.blade.php con {{ route() }}</h4>
            <p class="pathway-extreme-p text-justify mt-4">El método route() permite definir las URLs de un enú de navegación previamente definido en <span class="text-danger fs-6 text">routes/web.php</span> apoyándose en los nombres ( <span class="text-primary">name</span> con que se nombraron cada una de las rutas correspondientes a caa pagina web del sitio).</p>

            <pre class="sintaxis bg-dark">
              <code>

                  use Illuminate\Support\Facades\Route;

                  Route::view('/', 'index')-><span class="text-skyblue_2">name</span>('<span class="text-lila">index</span>');

                  Route::view('/about', 'about')-><span class="text-skyblue_2">name</span>('<span class="text-lila">about</span>');
                  Route::view('/contact', 'contact')-><span class="text-skyblue_2">name</span>('<span class="text-lila">contact</span>');
                  Route::view('/services', 'services')-><span class="text-skyblue_2">name</span>('<span class="text-lila">services</span>');
                
              </code>
            </pre>

            <pre class="sintaxis bg-dark">
              <code>
                <span class="comentario">menu.blade.php</span>

                &lt;header&gt;
                  &nbsp;&nbsp;&nbsp;&lt;nav class="navbar navbar-expand-sm navbar-dark bg-primary"&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="collapse navbar-collapse" id="collapsibleNavId"&gt;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul class="navbar-nav me-auto mt-2 mt-lg-0"&gt;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class="nav-item"&gt;
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class="nav-link active" href="{{ <span class="text-tomato">route</span>('<span class="text-lila">index</span>') }}"&gt;Home&lt;/a&gt;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class="nav-item"&gt;
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class="nav-link" href="{{ <span class="text-tomato">route</span>('<span class="text-lila">about</span>') }}"&gt;Acerca de&lt;/a&gt;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class="nav-item"&gt;
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class="nav-link" href="{{ <span class="text-tomato">route</span>('<span class="text-lila">services</span>') }}"&gt;Servicios&lt;/a&gt;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class="nav-item"&gt;
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class="nav-link" href="{{ <span class="text-tomato">route</span>('<span class="text-lila">contact</span>') }}"&gt;Contáctame&lt;/a&gt;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
                  &nbsp;&nbsp;&nbsp;&lt;/nav&gt;
                &lt;/header&gt;
              </code>
            </pre>

          </article>

        </section>

      </div>

      <!--Componentes (básico) -->
      <div class="tab-pane fade" id="vert-tabs-item-basico-6" role="tabpanel" aria-labelledby="vert-tabs-item-basico-6-tab">
        <!-- capitulos del tema -->
        <div class="card card-warning collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <ul class="list-group">
              <h4 class="my-3"><strong></strong></h4>
              <a href="#" class="list-group-item list-group-item-action"></a>
              <a href="#" class="list-group-item list-group-item-action"></a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba">
          <a href="#"><i class="text-warning bi bi-caret-up-fill"></i></a>
        </div>

        <section class="section">

          <h1 class="my-5"><span class="bg-orange_1 px-3 rounded">Componentes (básico)</span></h1>

          <article class="w-100 px-4 my-5 article">

            <h2 id="" class="text-lila mt-5"><em>Componentes (básico)</em></h2>
            <p class="destacado text-justify mt-4 pathway-extreme-p">Los componentes y los slots ofrecen beneficios similares a las secciones, los diseños y los elementos incluidos; sin embargo, es posible que a algunas personas les resulte más fácil comprender el modelo mental de los componentes y los slots.</p>
            <h3 class="my-5">Las directivas @component - @slot</h3>
            <h4 class="resaltado">@component()</h4>
            <p class="destacado text-justify mt-4 pathway-extreme-p">Contiene a la directiva @slot().</p>
            <h4 class="resaltado">@slot()</h4>
            <p class="pathway-extreme-p text-justify mt-4">Es utilizado en un archivo componente y representa un espacio donde será inyectado un bloque de código en una plantilla. Por ejemplo en el archivo <span class="text-danger fs-6 text">resources/views/_components/card.blade.php</span></p>
            <pre class="sintaxis bg-dark mt-5">
              <code>
                <span class="comentario">card.blade.php</span>
                
                &lt;div style="border:1px solid blue; border-radius: 10px; padding: 10px; margin: 5px auto;"&gt;
                  &nbsp;&nbsp;&nbsp;&lt;section&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;article&gt;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h3&gt;{{ <span class="text-danger">$title_service</span> }}&lt;/h3&gt;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;{{ <span class="text-danger">$description_service</span> }}&lt;/p&gt;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&gt;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ <span class="text-danger">$example_service</span> }}
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/article&gt;
                  &nbsp;&nbsp;&nbsp;&lt;/section&gt;
                &lt;/div&gt;
              </code>
            </pre>

            <pre class="sintaxis bg-dark mt-5">
              <code>
                <span class="comentario">services.blade.php</span>

                @extends('layouts.landing')

                @section('title', 'Landing Page | Services')

                @section('content')
                    &nbsp;&nbsp;&nbsp;&lt;h1&gt;SERVICIOS DEL LANDING PAGE&lt;/h1&gt;
                    &nbsp;&nbsp;&nbsp;<span class="text-warning">@component</span>('_components.card')
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">@slot</span>('<span class="text-danger">title_service</span>', 'Service 1')
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">@slot</span>('<span class="text-danger">description_service</span>', 'Descripción del servicio N° 1')
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">@slot</span>('<span class="text-danger">example_service</span>')
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h3&gt;Ejemplo&lt;/h3&gt;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;Ejemplo del servicio N° 1&lt;/p&gt;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">@endslot</span>
                    &nbsp;&nbsp;&nbsp;<span class="text-warning">@endcomponent</span>

                    &nbsp;&nbsp;&nbsp;<span class="text-warning">@component</span>('_components.card')
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">@slot</span>('<span class="text-danger">title_service</span>', 'Service 2')
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">@slot</span>('<span class="text-danger">description_service</span>', 'Descripcion del servicio N° 2')
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">@slot</span>('<span class="text-danger">example_service</span>')
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h3&gt;Ejemplo&lt;/h3&gt;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;Ejemplo del servicio N° 2&lt;/p&gt;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">@endslot</span>
                    &nbsp;&nbsp;&nbsp;<span class="text-warning">@endcomponent</span>

                    &nbsp;&nbsp;&nbsp;<span class="text-warning">@component</span>('_components.card')
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">@slot</span>('<span class="text-danger">title_service</span>', 'Service 3')
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">@slot</span>('<span class="text-danger">description_service</span>', 'Descripcion del servicio N° 3')
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">@slot</span>('<span class="text-danger">example_service</span>')
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h3&gt;Ejemplo&lt;/h3&gt;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;Ejemplo del servicio N° 3&lt;/p&gt;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">@endslot</span>
                    &nbsp;&nbsp;&nbsp;<span class="text-warning">@endcomponent</span>
                @endsection
              </code>
            </pre>

          </article>

        </section>

      </div>

      <!-- Recursos Estáticos -->
      <div class="tab-pane fade" id="vert-tabs-item-basico-7" role="tabpanel" aria-labelledby="vert-tabs-item-basico-7-tab">
        <!-- capitulos del tema -->
        <div class="card card-warning collapsed-card">
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
          <a><i class="text-warning bi bi-caret-up-fill"></i></a>
        </div>

        <section class="section">

          <h1 class="my-5"><span class="bg-orange_1 px-3 rounded">Recursos Estáticos</span></h1>

          <article class="w-100 px-4 my-5 article">

            <h2 class="text-lila mt-5"><em>Recursos Estáticos</em></h2>

            <p class="pathway-extreme-p text-justify mt-4 destacado">Se encuentran ubicados siempre en la carpeta <strong>public</strong>. Por ejemplo una carpeta con imágenes: <span class="text-danger fs-6 text">public/assets/img</span>, tal vez un archivo css en <span class="text-danger fs-6 text">public/assets/css</span></p>

            <h3 class="my-5">El método {{ asset() }} </h3>
            <pre class="sintaxis bg-dark my-4">
              <code>
                <span class="comentario">landing.blade.php</span>
                
                &lt;!DOCTYPE html&gt;
                &lt;html lang="es"&gt;
                  &nbsp;&nbsp;&nbsp;&lt;head&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta charset="UTF-8"&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta http-equiv="X-UA-Compatible" content="ie=edge"&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;link rel="stylesheet" href="<span class="text-yellow">{{</span> <span class="text-danger">asset</span>('<span class="text-lila">assets/css/estilos.css</span>') <span class="text-yellow">}}</span>"&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;@yield('title')&lt;/title&gt;
                  &nbsp;&nbsp;&nbsp;&lt;/head&gt;
                  &nbsp;&nbsp;&nbsp;&lt;body&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@include('layouts._partials.menu')
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@yield('content')
                  &nbsp;&nbsp;&nbsp;&lt;/body&gt;
                &lt;/html&gt;
              </code>
            </pre>

          </article>

        </section>
      </div>

      <!-- Item 8 -->
      <div class="tab-pane fade" id="vert-tabs-item-basico-8" role="tabpanel" aria-labelledby="vert-tabs-item-basico-8-tab">
        <!-- capitulos del tema -->
        <div class="card card-warning collapsed-card">
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
          <a><i class="text-warning bi bi-caret-up-fill"></i></a>
        </div>

        <section class="section">

          <h1 class="my-5"><span class="bg-orange_1 px-3 rounded">Item 8</span></h1>

          <article class="w-100 px-4 my-5 article">

            <h2 class="text-lila mt-5"><em></em></h2>

            <div class="callout callout-warning my-5">
              <p class="pathway-extreme-p">.</p>
            </div>

          </article>

          <article class="w-100 px-4 my-5 article">

            <h2 class="text-lila mt-5"><em>Sub T 1</em></h2>

            <p class="pathway-extreme-p text-justify mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, perferendis?</p>

            <h3 id="" class="mt-5 text-indigo">Sub TT 1</h3>
            <p class="pathway-extreme-p text-justify mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, accusantium.</p>

          </article>

          <article class="w-100 px-4 my-5 article">

            <h2 class="text-lila mt-5"><em>Sub T 1</em></h2>

            <p class="pathway-extreme-p text-justify mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, perferendis?</p>

            <h3 id="" class="mt-5 text-indigo">Sub TT 1</h3>
            <p class="pathway-extreme-p text-justify mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, accusantium.</p>

          </article>

        </section>
      </div>

      <!-- Item 9 -->
      <div class="tab-pane fade" id="vert-tabs-item-basico-9" role="tabpanel" aria-labelledby="vert-tabs-item-basico-9-tab">
        <!-- capitulos del tema -->
        <div class="card card-warning collapsed-card">
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
          <a><i class="text-warning bi bi-caret-up-fill"></i></a>
        </div>

        <section class="section">

          <h1 class="my-5"><span class="bg-orange_1 px-3 rounded">Item 9</span></h1>

          <article class="w-100 px-4 my-5 article">

            <h2 class="text-lila mt-5"><em></em></h2>

            <div class="callout callout-warning my-5">
              <p class="pathway-extreme-p">.</p>
            </div>

          </article>

        </section>
      </div>

      <!-- Item 10 -->
      <div class="tab-pane fade" id="vert-tabs-item-basico-10" role="tabpanel" aria-labelledby="vert-tabs-item-basico-10-tab">
        <!-- capitulos del tema -->
        <div class="card card-warning collapsed-card">
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
          <a><i class="text-warning bi bi-caret-up-fill"></i></a>
        </div>

        <section class="section">

          <h1 class="my-5"><span class="bg-orange_1 px-3 rounded">Item 10</span></h1>

          <article class="w-100 px-4 my-5 article">

            <h2 class="text-lila mt-5"><em></em></h2>

            <div class="callout callout-warning my-5">
              <p class="pathway-extreme-p">.</p>
            </div>

          </article>

          <article class="w-100 px-4 my-5 article">

            <h2 class="text-lila mt-5"><em></em></h2>
            <ul class="w-100 p-0">
              <li id="" class="mt-3 fs-5 px-4">
                <div class="callout callout-warning my-5">
                  <i class="bi bi-check-all text-indigo"></i><a class="text-primary" href="" target="_blank"> </a>
                </div>
                <p class="mt-4 font-monospace text-decoration-underline">Descripción</p>
              </li>
            </ul>
          </article>

          <!--  -->
          <article class="w-100 px-4 my-5 article">
            <h2 id="" class="text-lila mt-5"><em></em></h2>
          </article>

          <!--  -->
          <article class="w-100 px-4 my-5 article">
            <h2 id="" class="text-lila mt-5"><em></em></h2>
          </article>

          <!--  -->
          <article class="w-100 px-4 my-5 article">
            <h2 id="" class="text-lila mt-5"><em></em></h2>
          </article>

          <!--  -->
          <article class="w-100 px-4 my-5 article">
            <h2 id="" class="text-lila mt-5"><em></em></h2>
          </article>

        </section>
      </div>
    </div>
  </div>
</div>

<!-- PLANTILLAS -->
<div class="w-100">

  <p class="pathway-extreme-p text-justify mt-4">.</p>
  <p class="pathway-extreme-p text-justify mt-4">.</p>

  <p class="mt-4 font-monospace text-decoration-underline"></p>

  <div class="text-center my-5">
    <a class="btn btn-outline-success" href="/content/cursos/items/php/ejercicios/clases/file.php" target="_blank">Ver ejemplo</a>
  </div>

  <h2 class="text-lila mt-5"><em></em></h2>

  <h3 class="mt-5"><em></em></h3>

  <h4 class="resaltado"></h4>
  <h4 class="resaltado"></h4>

  <div class="w-75 my-5 mx-auto">
    <img src="" alt="" class="img-fluid">
  </div>

  <ol class="list-group list-group-numbered">
    <li class="list-group-item fs-5 my-2">A list item</li>
    <li class="list-group-item fs-5 my-2">A list item</li>
    <li class="list-group-item fs-5 my-2">A list item</li>
  </ol>

  <ul class="list-group">
    <li class="my-2 list-group-item fs-5"><i class="bi bi-check2-square px-2 text-warning"></i></li>
    <li class="my-2 list-group-item fs-5"><i class="bi bi-check2-square px-2 text-warning"></i></li>
    <li class="my-2 list-group-item fs-5"><i class="bi bi-check2-square px-2 text-warning"></i></li>
    <li class="my-2 list-group-item fs-5"><i class="bi bi-check2-square px-2 text-warning"></i></li>
  </ul>

  <div class="callout callout-warning my-5">
    <p class="pathway-extreme-p"></p>
  </div>

  <div class="alert alert-danger w-75 m-auto text-justify">
    <h5 class="mt-3"><i class="icon fas fa-ban"></i> Alert!</h5>
    <p class="fs-5">Texto aquí</p>
  </div>


  <div class="alert alert-warning w-75 m-auto text-justify">

    <h5><i class="icon fas fa-exclamation-triangle"></i> Sugerencia</h5>
    Texto aqui
  </div>

  <pre class="sintaxis my-5">
            <code></code>
          </pre>

  <pre class="pre-content-list bg-blue_2 mt-5 px-5">
            <code>
            </code>
          </pre>

</div>