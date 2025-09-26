<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale = 1.0" />
  <title>Documentación técnica de GIT</title>
  <link rel="stylesheet" href="./app_doc.css">
</head>

<body>
  <nav id="navbar">
    <header>Laravel Framework</header>
    <ul>
      <li><a class="nav-link" href="#Que_es_laravel">Que es laravel</a></li>
      <li><a class="nav-link" href="#Instalar_laravel">Instalar laravel</a></li>
      <li><a class="nav-link" href="#Configuracion_inicial">Configuracion inicial</a></li>
      <li><a class="nav-link" href="#Base_de_datos_y_migraciones">Base de datos y migraciones</a></li>
      <li><a class="nav-link" href="#Creacion_y_manejo_de_tablas">Creacion y manejo de tablas</a></li>
    </ul>
  </nav>

  <main id="main-doc">
    <!-- Qué es laravel? -->
    <section id="Que_es_laravel" class="main-section">
      <header>Qué es laravel?</header>
      <p>Laravel es un framework de aplicaciones web con una sintaxis expresiva y elegante. Un framework web proporciona una estructura y un punto de partida para crear una aplicación.</p>
      <p>Laravel se esfuerza por brindar una increíble experiencia de desarrollador al tiempo que proporciona características poderosas como inyección de dependencia completa, una capa de abstracción de base de datos expresiva, colas y trabajos programados, pruebas unitarias y de integración, y más.</p>
      <h2><i>Carcaterísticas principales de Laravel</i></h2>
      <ul>
        <li>Es un marco progresista: Esto significa que Laravel crece segun la necesidad del desarrollador.</li>
        <li>Es un marco escalable: Gracias a la naturaleza escalable de PHP y al soporte integrado de Laravel para sistemas de caché distribuidos y rápidos como Redis, el escalamiento horizontal con Laravel es muy sencillo.</li>
        <li>Es un marco comunitario: Laravel combina los mejores paquetes del ecosistema PHP para ofrecer el marco de trabajo más sólido y fácil de usar para los desarrolladores.</li>
      </ul>

    </section>
    <!-- Instalar laravel -->
    <section id="Instalar_laravel" class="main-section">
      <header>Instalar laravel</header>
      <p>Antes de crear tu primera aplicación Laravel, se debe asegurar tener instalado correctamente PHP, Composer y el instalador de laravel.</p>
      <p>Además, se debe tener instalado Node y NPM o Bun para poder compilar los recursos de interfaz de una aplicación.</p>
      <p>Si ya se tiene instalados PHP y Composer, seguir los siguientes pasos: </p>

      <ul>
        <li>Puede instalar el instalador de Laravel a través de Composer:
          <pre class="sintaxis">
            <code>
              composer global require laravel/installer
            </code>
          </pre>
        </li>
        <li>Seguidamente crear el proyecto: Por ejemplo new-app
          <pre class="sintaxis">
            <code>
              laravel new new-app
            </code>
          </pre>
        </li>
        <li>Una vez creada la aplicación, puedes iniciar el servidor de desarrollo local de Laravel:
          <pre class="sintaxis">
            <code>
              cd example-app
              npm install && npm run build
              composer run dev
            </code>
          </pre>
        </li>
        <li>Una vez que haya iniciado el servidor de desarrollo, podrá acceder a su aplicación en su navegador web en http://localhost:8000 </li>
      </ul>
      <pre>
          <code></code>
        </pre>
    </section>
    <!-- Configuración inicial -->
    <section id="Configuracion_inicial" class="main-section">
      <header>Configuracion inicial</header>
      <p>Todos los archivos de configuración del framework Laravel se almacenan en el directorio <strong><em>config</em></strong>.</p>
      <p>Laravel no necesita prácticamente ninguna configuración adicional de fábrica. ¡Puedes empezar a desarrollar! Sin embargo, es posible y recomendable primero revisar el archivo config/app.php y su documentación.</p>

      <h2>Configuración basada en el entorno</h2>
      <p>Dado que muchos de los valores de las opciones de configuración de Laravel pueden variar dependiendo de si su aplicación se ejecuta en su máquina local o en un servidor web de producción, muchos valores de configuración importantes se definen utilizando el archivo <strong><em>.env</em></strong> que existe en la raíz de su aplicación.</p>
      <p>El archivo <strong><em>.env</em></strong> no debe enviarse al control de código fuente de su aplicación, ya que cada desarrollador o servidor que utilice su aplicación podría requerir una configuración de entorno diferente. Además, esto podría representar un riesgo de seguridad en caso de que un intruso obtenga acceso a su repositorio de control de código fuente, ya que cualquier credencial confidencial quedaría expuesta.</p>
    </section>
    <!-- Base de datos y migraciones -->
    <section id="Base_de_datos_y_migraciones" class="main-section">
      <header>Base de datos y migraciones</header>
      <p>Las migraciones son como control de versiones de su base de datos, lo que le permite a su equipo definir y compartir la definición del esquema de la base de datos de la aplicación.</p>
      <p>Si alguna vez tuvo que decirle a un compañero de equipo que agregue manualmente una columna a su esquema de base de datos local después de realizar los cambios desde el control de fuente, se ha enfrentado al problema que resuelven las migraciones de bases de datos.</p>
      <p>La Schema facade de Laravel proporciona soporte independiente de la base de datos para crear y manipular tablas en todos los sistemas de bases de datos compatibles con Laravel. Normalmente, las migraciones utilizarán facade para crear y modificar tablas y columnas de bases de datos.</p>

      <h2>Establecer conexión con una Base de Datos Inicial</h2>
      <ul>
        <li>De manera predeterminada, el archivo de configuración de su aplicación <strong><em>.env</em></strong> especifica que Laravel interactuará con una base de datos SQLite.</li>
        <li>Durante la creación del proyecto, Laravel creó un archivo database/database.sqlite para usted y ejecutó las migraciones necesarias para crear las tablas de la base de datos de la aplicación.</li>
        <li>Si prefiere utilizar otro controlador de base de datos, como MySQL o PostgreSQL, puede actualizar su archivo de configuración .env para utilizar la base de datos adecuada. Por ejemplo, si desea utilizar MySQL, actualice las variables de su archivo de configuración .env DB_* de la siguiente manera:
          <pre class="sintaxis">
            <code>
              DB_CONNECTION=mysql
              DB_HOST=127.0.0.1
              DB_PORT=3306
              DB_DATABASE=laravel
              DB_USERNAME=root
              DB_PASSWORD=
            </code>
          </pre>
        </li>
        <li>Si elige utilizar una base de datos distinta a SQLite, deberá crear la base de datos y ejecutar las migraciones de bases de datos de su aplicación con el comando:
          <pre class="sintaxis">
            <code>
              php artisan migrate
            </code>
          </pre>
        </li>
      </ul>
      <p>La nueva migración se colocará en su directorio database/migrations. Cada nombre de archivo de migración contiene una marca de tiempo que permite a Laravel determinar el orden de las migraciones:</p>
      <pre>
          <code></code>
        </pre>
    </section>
    <!-- Creación y manejo de tablas -->
    <section id="Creacion_y_manejo_de_tablas" class="main-section">
      <header>Creación y manejo de tablas</header>
      <h2>Crear Tablas para una BD</h2>

      <p>Para crear una tabla ejecutar el siguiente comando:</p>
      <pre class="sintaxis">
        <code>
          <span class="comentario">Por convención el nombre de la tabla debe ir en plural.</span>
          php artisan make:migration create_notes_table
        </code>
      </pre>
      <p>Laravel usará el nombre de la migración para intentar adivinar el nombre de la tabla y si la migración creará o no una nueva tabla. Si Laravel puede determinar el nombre de la tabla a partir del nombre de la migración, Laravel completará previamente el archivo de migración generado con la tabla especificada y lo colocará en el directorio database/migrations. De lo contrario, puede simplemente especificar la tabla en el archivo de migración manualmente.</p>

      <h2>Crear Campos de una Tabla</h2>
      <p>Una vez creada la tabla, su configuración se puede realizar en el archivo que laravel crea en el directorio database/migrations/nombre_de_la_tabla</p>
      <pre class="sintaxis">
        <code>
          2024_07_10_220559_create_nombre_de_la_tabla.php
        </code>
      </pre>
      <p>En cuyo contenido se procede a la creación de los campos necesarios.</p>
    </section>
  </main>

</body>

</html>