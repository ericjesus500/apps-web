<div class="row">
  <!-- SIDEBAR -->
  <div class="col-md-3">
    <nav>
      <ul class="bg-dark py-3 ps-2">
        <!-- Introduccion -->
        <li class="mb-4">
          <a class="btn btn-outline-warning"><i class="bi bi-arrow-down-square iconos"></i>Web Server</a>
          <ul class="mt-3 ps-3">
            <li class="my-2"><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="#webserver">¿Qué es un web server?</a></li>
            <li class="my-2"><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="#apache">Qué es Apache</a></li>
            <li class="my-2"><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="#instalarapache">Instalar Apache</a></li>
            <li class="my-2"><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="#apachephp">Configurar Apache con PHP</a></li>
            <li class="my-2"><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="#virtualhost">Configurar virtual hosts</a></li>
            <li class="my-2"><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="#php">Instalar PHP</a></li>
            <li class="my-2"><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="#mysql">Instalar Mysql</a></li>
            <li class="my-2"><i class="bi bi-check iconos text-warning"></i><a class="text-white" href="#phpmyadmin">Instalar phpmyadmin</a></li>
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
  <!-- FIN SIDEBAR -->
  <!-- CONTENIDO -->
  <div class="col-md-9 px-md-3">
    <!-- FUNDAMENTOS -->
    <div class="arrow-arriba">
      <a href="#"><i class="text-info bi bi-caret-up-fill"></i></a>
    </div>
    <section>
      <div class="w-100 mt-5">
        <h1 class="text-orange">SERVIDOR PHP</h1>
        <!-- Qué es un web server -->
        <article class="text-white">
          <div class="w-100">
            <h2 id="webserver" class="text-lila pathway-extreme-h1 my-5">¿Qué es un web server?</h2>
            <p class="pathway-extreme-p">Un servidor web (server) es un ordenador de gran potencia que se encarga de “prestar el servicio” de transmitir la información pedida por sus clientes (otros ordenadores, dispositivos móviles, impresoras, personas, etc.)
              <br><br>
              Los servidores web (web server) son un componente de los servidores que tienen como principal función almacenar, en web hosting, todos los archivos propios de una página web (imágenes, textos, videos, etc.) y transmitirlos a los usuarios a través de los navegadores mediante el protocolo HTTP (Hipertext Transfer Protocol).
            </p>
            <h3 class="my-5"><strong>¿Para qué sirve un servidor web en Internet?</strong></h3>
            <p class="pathway-extreme-p">El rol principal de un servidor web es almacenar y transmitir el contenido solicitado de un sitio web al navegador del usuario.
              <br><br>
              Este proceso, para los internautas no dura más que un segundo, sin embargo, a nivel del web server es una secuencia más complicada de lo que parece.
              <br><br>
              Para cumplir con sus funciones el servidor deberá tener la capacidad de estar siempre encendido para evitar interrumpir el servicio que le ofrece a sus clientes. Si dicho servidor falla o se apaga, los internautas tendrán problemas al ingresar al sitio web.
            </p>
          </div>
        </article>

        <hr class="my-5" style="height: 2px; background-color:black;" />

        <!-- Qué es Apache -->
        <article class="text-white">
          <div class="w-100">
            <h2 id="apache" class="text-lila pathway-extreme-h1 my-5">¿Qué es Apache?</h2>
            <p class="pathway-extreme-p">Apache es un servidor web de código abierto, el más popular de los que encontramos en el mundo de la web. Como todo servidor web, maneja solicitudes HTTP. Es decir, está al tanto de las demandas de los usuarios que desean consultar una URL y les envía el contenido solicitado como respuesta.</p>
            <p class="pathway-extreme-p">El servidor web Apache es el principal producto de software mantenido por la fundación Apache. Es un software de servidor web de código abierto, multiplataforma y gratuito. Como todo servidor web es responsable de atender las solicitudes de los clientes cuando quieren consultar una URL. Apache está atento a las solicitudes, que llegan mediante el protocolo HTTP y se encarga de enviar las respuestas a los clientes.
              <br><br>
              En el trasiego de la información generalmente se transfieren páginas web, pero Apache está preparado para enviar todo tipo de archivos como imágenes, PDF o cualquier otro archivo descargable mediante el navegador. Además, es capaz de ejecutar código en ciertos lenguajes de programación, siempre que tenga instalado el complemento adecuado, para permitir a los desarrolladores la creación de páginas con programación del lado del servidor.
              <br><br>
              Desde su lanzamiento en 1995, Apache es una de las herramientas más populares de Internet, y es con diferencia el servidor web más usado.
            </p>

            <h3 class="my-5"><strong>Principales características de Apache</strong></h3>

            <h4 class="resaltado my-5"><em>Manejo de solicitudes HTTP</em></h4>
            <p class="pathway-extreme-p">El primer objetivo de Apache y los servidores web es el manejo de solicitudes HTTP. Por supuesto, es capaz de manejar este protocolo y todos los relacionados, como HTTPS, o HTTP2.</p>

            <h4 class="resaltado my-5"><em>Soporte para diferentes sistemas operativos</em></h4>
            <p class="pathway-extreme-p">Aunque inicialmente se desarrolló para sistemas basados en Unix, Apache ofrece soporte para todos los sistemas operativos populares, incluyendo Windows, MacOS, y por supuesto Linux. En ambientes de producción lo normal es que se ejecute sobre Linux, pero el hecho de soportar Windows o MacOS permite que los profesionales puedan usar el servidor web en local, para probar y desarrollar páginas web con sus ordenadores personales.</p>

            <h4 class="resaltado my-5"><em>Configuración y personalización</em></h4>
            <p class="pathway-extreme-p">Uno de los puntos fuertes de Apache es su flexibilidad y sus amplias capacidades de personalización. Para ello se utilizan archivos de configuración de los que hablaremos más adelante, en los que los administradores de sistemas pueden indicar cómo se debe de comportar el servidor web, permitiendo que esta configuración cambie según las necesidades de cada sitio web alojado.</p>

            <h3 class="my-5"><strong>Casos de uso comunes de Apache</strong></h3>
            <p class="pathway-extreme-p">Podemos usar Apache principalmente para alojar páginas web, pero existen otros casos de uso frecuentes.</p>

            <h4 class="resaltado my-5"><em>Hosting y alojamiento de sitios web</em></h4>
            <p class="pathway-extreme-p">Como decimos, el uso más común de Apache es servir sitios web, estando atento a solicitudes HTTP y enviando al cliente web, generalmente un navegador, todos aquellos archivos que forman parte de la página, desde el archivo HTML, el CSS, JavaScript, etc.</p>

            <h4 class="resaltado my-5"><em>Desarrollo y pruebas locales</em></h4>
            <p class="pathway-extreme-p">También es frecuente la instalación de Apache por parte de los desarrolladores para poder crear sitios y aplicaciones web y poder probarlos en sus máquinas locales.</p>

            <h4 class="resaltado my-5"><em>Implementación de aplicaciones web</em></h4>
            <p class="pathway-extreme-p">Apache permite también la ejecución de lenguajes, siendo el más popular PHP. Gracias a ello, además de páginas estáticas, puede servir de plataforma para blogs, sitios de comercio electrónico y todo tipo de aplicaciones web. Apache es uno de los componentes principales del stack LAMP (Linux, Apache, MySQL y PHP), que es la base más popular para la implementación de aplicaciones web.</p>

            <h3 class="my-5"><strong>Directivas y archivos de configuración básica de Apache</strong></h3>
            <p class="pathway-extreme-p">Ahora vamos a resumir algunas de las posibilidades de configuración del servidor web Apache. Todo se hace mediante la edición de archivos de texto que tienen las directivas de configuración necesarias para personalizar el sistema.</p>

            <h4 class="resaltado my-5"><em>Archivo <strong>httpd.conf</strong> y sus parámetros principales</em></h4>
            <p class="pathway-extreme-p">El archivo <strong><em>httpd.conf</em></strong> es el lugar principal de configuración de Apache. Este archivo tiene las configuraciones globales del servidor web, que afectan al funcionamiento de manera general.
              <br><br>
              Dentro de este archivo, puedes definir parámetros como el puerto de escucha, el directorio raíz del documento y muchas más cosas. Sin embargo, la mayoría de las personalizaciones se pueden realizar también, o sobreescribir, a nivel de dominio.
            </p>

            <h4 class="resaltado my-5"><em>VirtualHosts y configuración de múltiples sitios</em></h4>
            <p class="pathway-extreme-p">También fundamentales son las configuraciones a nivel de dominio, que se realizan por medio de los denominados VirtualHosts. Estas configuraciones de Apache permiten sobreescribir las configuraciones globales, ya sea para distintas IP o para distintos nombres de dominio asociados a los sitios alojados en el servidor.
              <br><br>
              En Apache podemos tener configuraciones de VirtualHost diferentes para cada proyecto alojado, lo que aumenta la flexibilidad del servidor web. Además, los virtualhost son fundamentales para las empresas de alojamiento, y los administradores de servidores en general, ya que permiten que varios dominios puedan estar alojados en un mismo servidor.
            </p>

            <h3 class="my-5"><strong>Seguridad de Apache</strong></h3>
            <p class="pathway-extreme-p">La seguridad es uno de los aspectos más importantes en los servidores web y Apache es muy consciente de ello. Para ello permite diversas configuraciones.</p>

            <h4 class="resaltado my-5"><em>Gestión de permisos y accesos</em></h4>
            <p class="pathway-extreme-p">Apache permite una gestión detallada de permisos a múltiples niveles. Mediante directivas como Directory es posible definir quién puede acceder a qué partes de un sitio web y qué permisos puede obtener, si puede ver el listado de los archivos, si se permite sobreescribir los permisos mediante el archivo .htaccess, etc.</p>

            <h4 class="resaltado my-5"><em>Uso de certificados SSL/TLS</em></h4>
            <p class="pathway-extreme-p">Es posible usar certificados SSL/TLS para garantizar que las transmisiones entre el cliente y el servidor son seguras. Estas configuraciones son necesarias para que se pueda acceder a los sitios web por HTTPS.</p>

            <h3 class="my-5"><strong></strong>Cómo mejorar el rendimiento de Apache</h3>
            <p class="pathway-extreme-p">También queremos dar algunas pinceladas sobre la capacidad de Apache para la mejora del rendimiento del servidor.</p>

            <h4 class="resaltado my-5"><em>Caché de contenido estático</em></h4>
            <p class="pathway-extreme-p">El cacheo de contenido estático puede mejorar de manera significativa la velocidad de un sitio. El contenido estático es aquel que no necesita generarse dinámicamente y su almacenamiento en la caché permite que se pueda servir de una manera más rápida, a la vez que aumenta el rendimiento del servidor web. Además, si se habilita la caché en el navegador se consigue una mayor velocidad de navegación ya que no es necesario que el cliente necesite descargar de nuevo contenido que del que ya dispone.
              <br><br>
              Existen diversos módulos para habilitar la caché de Apache, como mod_cache, mod_expires o mod_headers.
            </p>

            <h4 class="resaltado my-5"><em>Ajustes de rendimiento del servidor</em></h4>
            <p class="pathway-extreme-p">Además de la caché del contenido existen otras configuraciones que se pueden realizar, por medio de directivas y parámetros de configuración, con el objetivo de aumentar el rendimiento de Apache y conseguir que aumente la capacidad de carga del servidor.
              <br><br>
              Ejemplos de configuraciones que se pueden realizar son la configuración de MPM (Multi-Processing Module), habilitar la compresión del contenido con mod_deflate, eliminar el soporte para .htaccess, eliminar módulos no utilizados, etc.
            </p>

            <h3 class="my-5"><strong>Otras opciones de servidores web</strong></h3>
            <p class="pathway-extreme-p">Apache es el servidor web más utilizado en el mundo, sin embargo en los últimos años otros servidores se han postulado como alternativas, principalmente Nginx.</p>

            <h4 class="resaltado my-5"><em>NGINX y su comparación con Apache</em></h4>
            <p class="pathway-extreme-p">NGINX es otro servidor web muy popular. Como Apache sirve para las comunicaciones por HTTP y puede presentar algunas ventajas. Apache en principio es una alternativa bastante más madura y con mayores capacidades para la configuración, pero donde NGINX puede obtener ventaja es en el rendimiento y en la habilidad de manejar muchas conexiones simultáneas con pocos recursos.
              <br><br>
              La diferencia fundamental entre ambos servidores es que Apache crea un nuevo proceso o hilo para cada conexión recibida, mientras que NGINX utiliza un modelo basado en eventos, siendo por tanto un servidor asíncrono. Por ello es muy usado en entornos de servidor donde se tiene menos cantidad de recursos o en conjunto con tecnologías asíncronas como NodeJS.
            </p>
          </div>
        </article>

        <hr class="my-5" style="height: 2px; background-color:black;" />

        <!-- Instalar Apache -->
        <article class="text-white">
          <div class="w-100">
            <h2 id="instalarapache" class="text-lila pathway-extreme-h1 my-5">Instalar Apache</h2>

            <h3 class="my-5"><strong>Consideraciones Generales</strong></h3>

            <ul class="list-group">
              <li class="list-group-item">Apache Por regla general, escucha las peticiones HTTP en el puerto 80 y responde entregando documentos en HTML.</li>
              <li class="list-group-item">Gracias a su construcción modular permite integrar diversas funciones.</li>
              <li class="list-group-item">Lo más habitual es combinarlo con bases de datos como MySQL y lenguajes de programación del lado del servidor como PHP, Perl o Python, que permiten servir páginas web dinámicas.</li>
              <li class="list-group-item">La instalación y configuración del servidor web se hará como componente aislado.</li>
            </ul>

            <h3 class="my-5"><strong>Instalar Apache en Windows</strong></h3>
            <p class="pathway-extreme-p">Para poder ejecutar Apache en tu ordenador Windows lo único que necesitas es el paquete de software adecuado para tu sistema operativo. En su página web, sin embargo, la fundación Apache Software solo pone a disposición el código fuente. Los archivos binarios ejecutables para Windows se encuentran en páginas como Apache Lounge o Apache Haus.</p>
            <p class="pathway-extreme-p"><a class="btn-link" href="https://www.apachelounge.com/download/" target="_blank">Apache Lounge</a> es la versión recomendada para descargar ya que siempre es la más actual. Para utilizar Apache con Windows no es necesario instalarlo como programa. En lugar de ello, proceder como se indica a continuación:</p>

            <ol class="list-group list-group-numbered">
              <li class="list-group-item">Guarda el archivo .zip con el paquete de software en una carpeta de tu ordenador local.</li>
              <li class="list-group-item">Descomprime el archivo haciendo doble clic sobre el icono de la carpeta.</li>
              <li class="list-group-item">Copia la carpeta Apache24 en C:\.</li>
            </ol>
            
            <p class="pathway-extreme-p">Ahora, todos los archivos que necesitas para la puesta en funcionamiento de tu servidor web Apache local se encuentran en C:\Apache24.</p>

            <h4 class="resaltado my-5"><em>Comprobar la instalación</em></h4>
            <p class="pathway-extreme-p">Tras la instalación es recomendable realizar una prueba. Para ello, dirígete a <strong>C:/Apache24</strong> y abre la carpeta <strong>bin</strong>. Aquí se encuentra la aplicación <strong>httpd</strong>. Haciendo doble clic se inicia Apache.</p>

            <p class="pathway-extreme-p">Por regla general, el sistema mostrará dos mensajes de error que indican, por un lado, que aún se han de instalar algunos componentes de software y, por el otro, que el firewall del sistema operativo bloquea al servidor.</p>

            <h4 class="resaltado my-5"><em>Error del sistema httpd.exe</em></h4>
            <p class="pathway-extreme-p">Si instalas Apache en tu ordenador por primera vez, probablemente el sistema te hará saber que no se puede iniciar el servidor web porque no se ha encontrado el archivo VCRUNTIME140.dll.</p>

            <p class="pathway-extreme-p">Este problema tiene solución y es precisamente la instalación de los componentes que faltan. Al estar escrito en C++, Apache necesita un entorno de ejecución adecuado, en este caso Visual C++. También conocido como Microsoft Visual C++, se trata de un entorno de desarrollo integrado para aplicaciones en C, C++ y C++/CLI en el entorno Windows. Con los denominados <strong><a class="btn-link" href="https://www.microsoft.com/es-es/download/details.aspx?id=48145" target="_blank">Visual C++ Redistributable Packages</a></strong>, se pueden instalar aquellos componentes del entorno de ejecución que falten, disponibles de forma gratuita en la página principal de Microsoft. Se instalan localmente haciendo doble clic en el archivo .exe.</p>

            <h4 class="resaltado my-5"><em>Aviso de seguridad del cortafuegos de Windows</em></h4>
            <p class="pathway-extreme-p">Habitualmente, todos los ordenadores están asegurados por un firewall que impide que programas externos accedan sin permiso al sistema desde una red. Si quieres que tu servidor Apache HTTP local esté disponible en una red doméstica o de oficina, has de autorizar la comunicación de Apache en esta red de forma explícita. Esto se realiza en la misma notificación de seguridad que te informa de que el cortafuegos ha bloqueado algunas funciones del servidor.</p>

            <div class="text-center my-5">
              <img class="img-fluid" src="../src/img/apache-fire.webp" alt="apache fire">
            </div>

            <p class="pathway-extreme-p">Para autorizar el acceso a tu servidor en una de las redes disponibles, solo tienes que marcar la opción correspondiente y hacer clic en el botón de confirmación (“Allow Access”). Es muy probable que necesites derechos de administrador para llevar a cabo esta acción.</p>

            <p class="pathway-extreme-p">Tan pronto como se hayan instalado los componentes que faltaban y se hayan realizado los ajustes en el cortafuegos de acuerdo al modelo de uso que se tiene planificado, nada impedirá el funcionamiento del servidor Apache HTTP en su configuración predeterminada.</p>

            <p class="pathway-extreme-p">Inicia el servidor de nuevo con un doble clic en el archivo httpd. Acto seguido, se abre de forma automática una ventana de comandos en negro. Cuando quieras interrumpir el servidor, solo tienes que cerrar la ventana haciendo clic en la “x” de la esquina superior derecha.</p>

            <div class="text-center my-5">
              <img class="img-fluid" src="../src/img/apache-ok.webp" alt="apache ok">
            </div>

            <p class="pathway-extreme-p">Para acceder a tu servidor desde un navegador web, teclea “localhost” o la dirección IP estándar “127.0.0.1” en la barra de navegación.</p>

            <p class="pathway-extreme-p">Si los ajustes se realizaron correctamente, el navegador debería mostrar una página index.html predeterminada con el siguiente contenido “It works!” (¡Funciona!).</p>

            <div class="text-center my-5">
              <img class="img-fluid" src="../src/img/apache-func.webp" alt="apache func">
            </div>

            <h3 class="my-5"><strong>Configuración de Apache HTTP server</strong></h3>
            <p class="pathway-extreme-p">En principio, el servidor Apache HTTP, como paquete de software, está configurado por defecto de tal manera que podría funcionar sin ajustes adicionales. Los contenidos que quieras abrir con el servidor web se guardan en la configuración estándar en la carpeta htdocs en C:\Apache24 (C:/Apache24/htdocs) identificada como “DocumentRoot”, dentro del archivo de configuración httpd.conf.</p>

            <div class="text-center my-5">
              <img class="img-fluid" src="../src/img/apache-htdocs.webp" alt="apache htdocs">
            </div>

            <p class="pathway-extreme-p">Si quieres guardar los documentos y los archivos de tu página web en otra carpeta diferente, la has de registrar en httpd.conf como “DocumentRoot” y “Directory”.</p>

            <p class="pathway-extreme-p">Como demostración hemos creado una nueva carpeta llamada “MyWeb” en C:\, que ha de servir de archivo para una página web ficticia. En esta carpeta depositamos los dos documentos HTML test-1 y test-2.</p>

            <p class="pathway-extreme-p">En el archivo httpd.conf cambiamos la información en “DocumentRoot” y “Directory” en función de nuestras nuevas carpetas, sustituyendo “C:/Apache24/htdocs” por “C:/MyWeb” en ambos puestos.</p>

            <div class="text-center my-5">
              <img class="img-fluid" src="../src/img/apache-myweb.webp" alt="apache myweb">
            </div>

            <p class="pathway-extreme-p">Tras reiniciar Apache, accede al servidor con la dirección localhost y el navegador web mostrará el Index de nuestro directorio con las páginas HTML test-1.html y test-2.html.</p>

            <div class="text-center my-5">
              <img class="img-fluid" src="../src/img/apache-indexok.webp" alt="apache indexok">
            </div>
          </div>
        </article>

        <hr class="my-5" style="height: 2px; background-color:black;" />

        <!-- Configurar Apache con PHP -->
        <article class="text-white">
          <div class="w-100">
            <h2 id="apachephp" class="text-lila pathway-extreme-h1 my-5">Configurar Apache con PHP</h2>
            <p class="pathway-extreme-p">Para configurar PHP con Apache se requiere agregar unas líneas de código al archivo <strong>httpd.conf</strong> ubicado generalmente en <strong><em>C:/Apache24/conf/httpd.conf</em></strong></p>

            <p class="pathway-extreme-p">Por ejemplo:</p>

            <pre class="sintaxis">
              <code>
                LoadModule php_module "c:/php8310/php8apache2_4.dll"
                AddHandler application/x-httpd-php .php

                <span class="comentario"># configure la ruta donde se encuentran los archivos de PHP en php.ini</span>
                PHPIniDir "C:/php8310"
              </code>
            </pre>

            <p class="pathway-extreme-p">Estas líneas de código deben ser agregadas al final de la configuración de módulos. A continuación se muestra una óptima configuración de los mismos</p>

            <pre class="sintaxis">
              <code>
                LoadModule access_compat_module modules/mod_access_compat.so
                LoadModule actions_module modules/mod_actions.so
                LoadModule alias_module modules/mod_alias.so
                LoadModule allowmethods_module modules/mod_allowmethods.so
                LoadModule asis_module modules/mod_asis.so
                LoadModule auth_basic_module modules/mod_auth_basic.so
                <span class="comentario">#LoadModule auth_digest_module modules/mod_auth_digest.so</span>
                <span class="comentario">#LoadModule auth_form_module modules/mod_auth_form.so</span>
                <span class="comentario">#LoadModule authn_anon_module modules/mod_authn_anon.so</span>
                LoadModule authn_core_module modules/mod_authn_core.so
                <span class="comentario">#LoadModule authn_dbd_module modules/mod_authn_dbd.so</span>
                <span class="comentario">#LoadModule authn_dbm_module modules/mod_authn_dbm.so</span>
                LoadModule authn_file_module modules/mod_authn_file.so
                <span class="comentario">#LoadModule authn_socache_module modules/mod_authn_socache.so</span>
                <span class="comentario">#LoadModule authnz_fcgi_module modules/mod_authnz_fcgi.so</span>
                <span class="comentario">#LoadModule authnz_ldap_module modules/mod_authnz_ldap.so</span>
                LoadModule authz_core_module modules/mod_authz_core.so
                <span class="comentario">#LoadModule authz_dbd_module modules/mod_authz_dbd.so</span>
                <span class="comentario">#LoadModule authz_dbm_module modules/mod_authz_dbm.so</span>
                LoadModule authz_groupfile_module modules/mod_authz_groupfile.so
                LoadModule authz_host_module modules/mod_authz_host.so
                <span class="comentario">#LoadModule authz_owner_module modules/mod_authz_owner.so</span>
                LoadModule authz_user_module modules/mod_authz_user.so
                LoadModule autoindex_module modules/mod_autoindex.so
                <span class="comentario">#LoadModule brotli_module modules/mod_brotli.so</span>
                <span class="comentario">#LoadModule buffer_module modules/mod_buffer.so</span>
                <span class="comentario">#LoadModule cache_module modules/mod_cache.so</span>
                <span class="comentario">#LoadModule cache_disk_module modules/mod_cache_disk.so</span>
                <span class="comentario">#LoadModule cache_socache_module modules/mod_cache_socache.so</span>
                <span class="comentario">#LoadModule cern_meta_module modules/mod_cern_meta.so</span>
                LoadModule cgi_module modules/mod_cgi.so
                <span class="comentario">#LoadModule charset_lite_module modules/mod_charset_lite.so</span>
                <span class="comentario">#LoadModule data_module modules/mod_data.so</span>
                <span class="comentario">#LoadModule dav_module modules/mod_dav.so</span>
                <span class="comentario">#LoadModule dav_fs_module modules/mod_dav_fs.so</span>
                <span class="comentario">#LoadModule dav_lock_module modules/mod_dav_lock.so</span>
                <span class="comentario">#LoadModule dbd_module modules/mod_dbd.so</span>
                <span class="comentario">#LoadModule deflate_module modules/mod_deflate.so</span>
                LoadModule dir_module modules/mod_dir.so
                <span class="comentario">#LoadModule dumpio_module modules/mod_dumpio.so</span>
                LoadModule env_module modules/mod_env.so
                <span class="comentario">#LoadModule expires_module modules/mod_expires.so</span>
                <span class="comentario">#LoadModule ext_filter_module modules/mod_ext_filter.so</span>
                <span class="comentario">#LoadModule file_cache_module modules/mod_file_cache.so</span>
                <span class="comentario">#LoadModule filter_module modules/mod_filter.so</span>
                <span class="comentario">#LoadModule http2_module modules/mod_http2.so</span>
                LoadModule headers_module modules/mod_headers.so
                <span class="comentario">#LoadModule heartbeat_module modules/mod_heartbeat.so</span>
                <span class="comentario">#LoadModule heartmonitor_module modules/mod_heartmonitor.so</span>
                <span class="comentario">#LoadModule ident_module modules/mod_ident.so</span>
                <span class="comentario">#LoadModule imagemap_module modules/mod_imagemap.so</span>
                LoadModule include_module modules/mod_include.so
                <span class="comentario">#LoadModule info_module modules/mod_info.so</span>
                LoadModule isapi_module modules/mod_isapi.so
                <span class="comentario">#LoadModule lbmethod_bybusyness_module modules/mod_lbmethod_bybusyness.so</span>
                <span class="comentario">#LoadModule lbmethod_byrequests_module modules/mod_lbmethod_byrequests.so</span>
                <span class="comentario">#LoadModule lbmethod_bytraffic_module modules/mod_lbmethod_bytraffic.so</span>
                <span class="comentario">#LoadModule lbmethod_heartbeat_module modules/mod_lbmethod_heartbeat.so</span>
                <span class="comentario">#LoadModule ldap_module modules/mod_ldap.so</span>
                <span class="comentario">#LoadModule logio_module modules/mod_logio.so</span>
                LoadModule log_config_module modules/mod_log_config.so
                <span class="comentario">#LoadModule log_debug_module modules/mod_log_debug.so</span>
                <span class="comentario">#LoadModule log_forensic_module modules/mod_log_forensic.so</span>
                <span class="comentario">#LoadModule lua_module modules/mod_lua.so</span>
                <span class="comentario">#LoadModule macro_module modules/mod_macro.so</span>
                <span class="comentario">#LoadModule md_module modules/mod_md.so</span>
                LoadModule mime_module modules/mod_mime.so
                <span class="comentario">#LoadModule mime_magic_module modules/mod_mime_magic.so</span>
                LoadModule negotiation_module modules/mod_negotiation.so
                <span class="comentario">#LoadModule proxy_module modules/mod_proxy.so</span>
                <span class="comentario">#LoadModule proxy_ajp_module modules/mod_proxy_ajp.so</span>
                <span class="comentario">#LoadModule proxy_balancer_module modules/mod_proxy_balancer.so</span>
                <span class="comentario">#LoadModule proxy_connect_module modules/mod_proxy_connect.so</span>
                <span class="comentario">#LoadModule proxy_express_module modules/mod_proxy_express.so</span>
                <span class="comentario">#LoadModule proxy_fcgi_module modules/mod_proxy_fcgi.so</span>
                <span class="comentario">#LoadModule proxy_ftp_module modules/mod_proxy_ftp.so</span>
                <span class="comentario">#LoadModule proxy_hcheck_module modules/mod_proxy_hcheck.so</span>
                <span class="comentario">#LoadModule proxy_html_module modules/mod_proxy_html.so</span>
                <span class="comentario">#LoadModule proxy_http_module modules/mod_proxy_http.so</span>
                <span class="comentario">#LoadModule proxy_http2_module modules/mod_proxy_http2.so</span>
                <span class="comentario">#LoadModule proxy_scgi_module modules/mod_proxy_scgi.so</span>
                <span class="comentario">#LoadModule proxy_uwsgi_module modules/mod_proxy_uwsgi.so</span>
                <span class="comentario">#LoadModule proxy_wstunnel_module modules/mod_proxy_wstunnel.so</span>
                <span class="comentario">#LoadModule ratelimit_module modules/mod_ratelimit.so</span>
                <span class="comentario">#LoadModule reflector_module modules/mod_reflector.so</span>
                <span class="comentario">#LoadModule remoteip_module modules/mod_remoteip.so</span>
                <span class="comentario">#LoadModule request_module modules/mod_request.so</span>
                <span class="comentario">#LoadModule reqtimeout_module modules/mod_reqtimeout.so</span>
                LoadModule rewrite_module modules/mod_rewrite.so
                <span class="comentario">#LoadModule sed_module modules/mod_sed.so</span>
                <span class="comentario">#LoadModule session_module modules/mod_session.so</span>
                <span class="comentario">#LoadModule session_cookie_module modules/mod_session_cookie.so</span>
                <span class="comentario">#LoadModule session_crypto_module modules/mod_session_crypto.so</span>
                <span class="comentario">#LoadModule session_dbd_module modules/mod_session_dbd.so</span>
                LoadModule setenvif_module modules/mod_setenvif.so
                <span class="comentario">#LoadModule slotmem_plain_module modules/mod_slotmem_plain.so</span>
                <span class="comentario">#LoadModule slotmem_shm_module modules/mod_slotmem_shm.so</span>
                <span class="comentario">#LoadModule socache_dbm_module modules/mod_socache_dbm.so</span>
                <span class="comentario">#LoadModule socache_memcache_module modules/mod_socache_memcache.so</span>
                <span class="comentario">#LoadModule socache_redis_module modules/mod_socache_redis.so</span>
                LoadModule socache_shmcb_module modules/mod_socache_shmcb.so
                <span class="comentario">#LoadModule speling_module modules/mod_speling.so</span>
                LoadModule ssl_module modules/mod_ssl.so
                <span class="comentario">#LoadModule status_module modules/mod_status.so</span>
                <span class="comentario">#LoadModule substitute_module modules/mod_substitute.so</span>
                <span class="comentario">#LoadModule unique_id_module modules/mod_unique_id.so</span>
                <span class="comentario">#LoadModule userdir_module modules/mod_userdir.so</span>
                <span class="comentario">#LoadModule usertrack_module modules/mod_usertrack.so</span>
                LoadModule version_module modules/mod_version.so
                <span class="comentario">#LoadModule vhost_alias_module modules/mod_vhost_alias.so</span>
                <span class="comentario">#LoadModule watchdog_module modules/mod_watchdog.so</span>
                <span class="comentario">#LoadModule xml2enc_module modules/mod_xml2enc.so</span>
              </code>
            </pre>

          </div>
        </article>

        <hr class="my-5" style="height: 2px; background-color:black;" />

        <!-- Configurar virtual hosts -->
        <article class="text-white">
          <div class="w-100">
            <h2 id="virtualhost" class="text-lila pathway-extreme-h1 my-5">Configurar virtual hosts</h2>
            <div class="callout callout-danger my-5 text-dark">
              <p class="pathway-extreme-p">Realizar virtual host nos permite tener múltiples sitios web en una misma máquina física.</p>
            </div>

            <p class="pathway-extreme-p">Lo primero es activar la siguiente línea de código en <strong><em>C:/Apache24/conf/httpd.conf</em></strong></p>
            <pre class="sintaxis">
              <code>
                <span class="comentario"># Virtual hosts</span>
                Include conf/extra/httpd-vhosts.conf
              </code>
            </pre>

            <h3 class="my-5"><strong>El archivo hosts de Windows</strong></h3>
            <p class="pathway-extreme-p">El archivo hosts es un archivo de texto sin extensión que se encuentra en el sistema operativo Windows y se utiliza para mapear nombres de dominio a direcciones IP. Es una forma simple y manual de establecer una asociación entre un nombre de dominio y una dirección IP específica en un nivel local.</p>

            <div class="alert alert-danger alert-dismissible w-75 m-auto">
              <h5><i class="icon fas fa-ban"></i> IMPORTANTE!</h5>
              El archivo hosts necesita permisos de administrador para ser modificado.
            </div>

            <p class="my-5 pathway-extreme-p">El archivo <strong>hosts</strong> se encuentra ubicado normalmente en <strong><em>C:/Windows/System32/drivers/etc/hosts</em></strong>. Puede abrirse con el bloc de notas o un editor de código como vscode o Notepad++. Podrá parecer a la siguiente imagen:</p>

            <div class="text-center my-5">
              <img class="img-fluid" src="../src/img/windows-hosts.PNG" alt="windows hosts">
            </div>

            <p class="pathway-extreme-p">El archivo host normalmente es un archivo en el cual todas sus líneas están comentadas y en algunas de sus líneas nos dice como usarlo, además de ello tiene 2 líneas que generalmente son las más usadas.</p>

            <pre class="sintaxis">
                <code>
                  # 127.0.0.1 localhost
      
                  #::1 localhost
                </code>
            </pre>
            <p class="pathway-extreme-p">Estas 2 líneas deben ser descomentadas.</p>

            <p class="pathway-extreme-p">127.0.0.1 es la ipv4 de localhost y ::1 es la ipv6 de localhost , La dirección IP local 127.0.0.1, también conocida como dirección IP de loopback o «localhost», es una dirección especial que se utiliza para acceder al propio equipo desde sí mismo. En otras palabras, es una forma de referirse a la propia máquina sin depender de una conexión de red externa.</p>

            <p class="pathway-extreme-p">Por ejemplo se pueden escribir los siguientes hosts:</p>

            <pre class="sintaxis">
              <code>
                127.0.0.1 localhost

                127.0.0.1 project1.local

                127.0.0.1 project2.local
              </code>
            </pre>

            <p class="pathway-extreme-p">Los 3 dominios estarán vinculados a 127.0.0.1, tenga en claro que esto es para nuestra máquina. </p>

            <h3 class="my-5"><strong>El archivo httpd-vhosts.conf</strong></h3>

            <div class="callout callout-danger my-5 text-white">
              <p class="pathway-extreme-p">Generalmente se encuentra ubicado en: C:/Apache24/conf/extra/httpd-vhosts.conf.</p>
            </div>

            <p class="pathway-extreme-p">Dentro de este archivo se pueden definir los virtual host que sean necesarios. Por ejemplo:</p>

            <pre class="sintaxis">
              <code>
                &lt;VirtualHost *:80&gt;
                  &nbsp;&nbsp;&nbsp;ServerName apps-web
                  &nbsp;&nbsp;&nbsp;DocumentRoot "d:/proyectos/apps-web"
                  &nbsp;&nbsp;&nbsp;&lt;Directory  "d:/proyectos/apps-web/"&gt;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Options +Indexes +Includes +FollowSymLinks +MultiViews
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AllowOverride All
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Require local
                  &nbsp;&nbsp;&nbsp;&lt;/Directory&gt;
                &lt;/VirtualHost&gt;
              </code>
            </pre>

            <pre class="sintaxis">
              <code>
                &lt;VirtualHost *:80&gt;
                  &nbsp;&nbsp;&nbsp;ServerName www.ca-crud.com
                  &nbsp;&nbsp;&nbsp;DocumentRoot "d:/proyectos/practicas/php/mvc/www.ca-crud.com"
                  &nbsp;&nbsp;&nbsp;&lt;Directory  "d:/proyectos/practicas/php/mvc/www.ca-crud.com/"&gt;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AllowOverride All
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Require all granted
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Require local
                  &nbsp;&nbsp;&nbsp;&lt;/Directory&gt;
                &lt;/VirtualHost&gt;
              </code>
            </pre>

            <pre class="sintaxis">
              <code>
                &lt;VirtualHost *:80&gt;
                  &nbsp;&nbsp;&nbsp;ServerName phpmyadmin.local
                  &nbsp;&nbsp;&nbsp;DocumentRoot "/sites/phpmyadmin.local"
                  &nbsp;&nbsp;&nbsp;&lt;Directory  "C:/sites/phpmyadmin.local"&gt;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DirectoryIndex index.html index.php
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AllowOverride All
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Require local
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Options +Indexes +Includes +FollowSymLinks +MultiViews
                  &nbsp;&nbsp;&nbsp;&lt;/Directory&gt;
                  &nbsp;&nbsp;&nbsp;&lt;ErrorLog "logs/phpmyadmin.local-error.log"
                  &nbsp;&nbsp;&nbsp;&lt;CustomLog "logs/phpmyadmin.local-access.log" common
                &lt;/VirtualHost&gt;
              </code>
            </pre>
          </div>
        </article>

        <hr class="my-5" style="height: 2px; background-color:black;" />

        <!-- Instalar PHP -->
        <article class="text-white">
          <div class="w-100">
            <h2 id="php" class="text-lila pathway-extreme-h1 my-5">Instalar PHP</h2>
          </div>
        </article>

        <hr class="my-5" style="height: 2px; background-color:black;" />

        <!-- Instalar Mysql -->
        <article class="text-white">
          <div class="w-100">
            <h2 id="mysql" class="text-lila pathway-extreme-h1 my-5"><strong>Instalar Mysql</strong></h2>
          </div>
        </article>

        <hr class="my-5" style="height: 2px; background-color:black;" />

        <!-- Instalar phpmyadmin -->
        <article class="text-white">
          <div class="w-100">
            <h2 id="phpmyadmin" class="text-lila pathway-extreme-h1 my-5"><strong>Instalar phpmyadmin</strong></h2>
          </div>
        </article>

        <hr class="my-5" style="height: 2px; background-color:black;" />

        <article class="text-white">
          <div class="w-100">
            <h2 id="" class="text-lila pathway-extreme-h1 my-5"><strong></strong></h2>
          </div>
        </article>
        
        

        <p class="pathway-extreme-p"></p>
        <p class="pathway-extreme-p"></p>
        <p class="pathway-extreme-p"></p>
        <p class="pathway-extreme-p"></p>

        <h2 class="text-lila pathway-extreme-h1 my-5"><strong></strong></h2>
        <h2 class="text-lila pathway-extreme-h1 my-5"><strong></strong></h2>
        <h2 class="text-lila pathway-extreme-h1 my-5"><strong></strong></h2>

        <h3 class="my-5"><em></em></h3>
        <h3 class="my-5"><em></em></h3>
        <h3 class="my-5"><em></em></h3>

        <hr class="my-5" style="height: 2px; background-color:black;" />

        <pre class="sintaxis">
          <code>
          </code>
        </pre>

      </div>
    </section>
  </div>
  <!-- FIN CONTENIDO -->
</div>