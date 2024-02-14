<?php include "../../../../templates/head_cursos.php" ?>
<title>Ecosistema JS 2023</title>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php include "../../../../templates/navbar_articulos_items.php"?>
    <!-- Content Wrapper. Contains page content -->
    <section class="content">
      <!-- Main content -->
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-edit"></i>
              <span class="h1">El Ecosistema de Javascript en 2023</span>
            </h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-5 col-sm-3">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="vert-tabs-concepto-tab" data-toggle="pill" href="#vert-tabs-concepto" role="tab" aria-controls="vert-tabs-concepto" aria-selected="true">¿Qué es el ecosistema de Javascript?</a>
                  <a class="nav-link" id="vert-tabs-compilador-tab" data-toggle="pill" href="#vert-tabs-compilador" role="tab" aria-controls="vert-tabs-compilador" aria-selected="false">¿Qué es un compilador en Javascript?</a>
                  <a class="nav-link" id="vert-tabs-transpilador-tab" data-toggle="pill" href="#vert-tabs-transpilador" role="tab" aria-controls="vert-tabs-transpilador" aria-selected="false">¿Qué es un transpilador en Javascript? </a>
                  <a class="nav-link" id="vert-tabs-linter-tab" data-toggle="pill" href="#vert-tabs-linter" role="tab" aria-controls="vert-tabs-linter" aria-selected="false">¿Qué es un linter en
                    Javascript?</a>
                  <a class="nav-link" id="vert-tabs-testing-tab" data-toggle="pill" href="#vert-tabs-testing" role="tab" aria-controls="vert-tabs-testing" aria-selected="false">¿Qué es Testing en
                    Javascript?</a>
                  <a class="nav-link" id="vert-tabs-build-tab" data-toggle="pill" href="#vert-tabs-build" role="tab" aria-controls="vert-tabs-build" aria-selected="false">¿Qué son las Build Tools?</a>
                  <a class="nav-link" id="vert-tabs-libreria-tab" data-toggle="pill" href="#vert-tabs-libreria" role="tab" aria-controls="vert-tabs-libreria" aria-selected="false">¿Qué es una librería en
                    Javascript en Javascript?</a>
                  <a class="nav-link" id="vert-tabs-rendering-tab" data-toggle="pill" href="#vert-tabs-rendering" role="tab" aria-controls="vert-tabs-rendering" aria-selected="false">¿Qué son los rendering Frameworks en Javascript?</a>
                  <a class="nav-link" id="vert-tabs-frameworks-tab" data-toggle="pill" href="#vert-tabs-frameworks" role="tab" aria-controls="vert-tabs-frameworks" aria-selected="false">frameworks en Javascript para crear aplicaciones móvil y de ordenador</a>
                </div>
              </div>
              <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                  <div class="tab-pane text-left fade show active" id="vert-tabs-concepto" role="tabpanel" aria-labelledby="vert-tabs-concepto-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded">¿Qué es el ecosistema de Javascript?</span></h2>
                      <p class="text-justify">JavaScript es un lenguaje de programación popular que se utiliza en el desarrollo web pero existen varias herramientas disponibles en JavaScript que ayudan a los desarrolladores a crear aplicaciones web de manera más eficiente y organizada. Los frameworks, las librerías y las herramientas de construcción son algunos de los tipos de herramientas más comunes en JavaScript.
                      </p>
                    </article>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-compilador" role="tabpanel" aria-labelledby="vert-tabs-compilador-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded">¿Qué es un compilador en Javascript?</span></h2>
                      <p class="text-justify"><strong>Un compilador en JavaScript es una herramienta que convierte
                          código
                          escrito en un lenguaje de
                          programación a código JavaScript.</strong> Esto permite utilizar características y funciones
                        de
                        otros lenguajes de programación en una aplicación web. Los compiladores son diferentes a los
                        preprocesadores ya que estos últimos convierten el código a javascript antes de que el
                        navegador
                        lo
                        interprete, mientras que los compiladores lo hacen en tiempo de ejecución.
                        <br />Algunos ejemplos populares de compiladores en JavaScript son:
                      </p>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Babel: </strong>
                          Es
                          uno de los
                          compiladores más
                          populares y ampliamente utilizado. Babel
                          permite utilizar características de JavaScript más recientes, como las funciones de flecha y
                          las
                          clases, en navegadores que no las soportan nativamente.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>TypeScript:
                          </strong>
                          Es un lenguaje
                          de
                          programación
                          desarrollado por Microsoft que es
                          un superconjunto de JavaScript y proporciona características adicionales como tipos
                          estáticos,
                          interfaces y decoradores. TypeScript se compila a JavaScript para que pueda ser ejecutado en
                          el
                          navegador.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Dart: </strong>
                          Es
                          un
                          lenguaje de
                          programación
                          desarrollado por Google que también se
                          compila a JavaScript. Dart proporciona características como tipos estáticos, clases y
                          colecciones
                          que facilitan la escritura de código más seguro y fácil de mantener.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>CoffeeScript:</strong>
                          Es un lenguaje de programación similar a javascript, que se
                          enfoca en hacer el código más legible y conciso, también se compila a javascript.</li>
                      </ul>
                      <p class="text-justify"><strong><a href="https://vitejs.dev/guide/" target="_blank">Vite</a></strong> es
                        el compilador más utilizado en la actualidad.</p>
                      <p class="text-justify">Vite es una herramienta de compilación que tiene como objetivo
                        proporcionar una
                        experiencia de desarrollo más rápida y sencilla para proyectos web modernos. Consta de dos
                        partes
                        principales:</p>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Un servidor de desarrollo
                          que
                          proporciona
                          numerosas mejoras de funciones con respecto a los
                          módulos ES nativos , por ejemplo, reemplazo de módulo en caliente (HMR) extremadamente
                          rápido
                          .
                        </li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Un comando de compilación
                          que
                          agrupa su código con Rollup , preconfigurado para generar activos estáticos altamente
                          optimizados
                          para producción.</li>
                      </ul>
                    </article>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-transpilador" role="tabpanel" aria-labelledby="vert-tabs-transpilador-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded">¿Qué es un transpilador en Javascript?</span></h2>
                      <p class="text-justify"><strong>Un transpilador en JavaScript es una herramienta que convierte
                          código
                          escrito en un lenguaje de programación a otro lenguaje de programación.</strong></p>
                      <h4 class="text-orange">¿Qué diferencia hay entre transpilador y compilador en Javascript?</h4>
                      <p class="text-justify">La diferencia principal entre un transpilador y un compilador en
                        JavaScript es
                        el lenguaje de origen y destino del código.</p>
                      <p class="text-justify">Un compilador convierte código escrito en un lenguaje de programación a
                        código
                        JavaScript, permitiendo utilizar características y funciones de otros lenguajes de
                        programación
                        en una
                        aplicación web. El código se convierte en javascript antes de que el navegador lo interprete.
                      </p>
                      <p class="text-justify">Por otro lado, un transpilador convierte código escrito en un lenguaje
                        de
                        programación a otro lenguaje de programación, en lugar de convertirlo a JavaScript. Esto
                        permite
                        utilizar características de nuevas versiones de javascript o características de otros
                        lenguajes
                        en
                        javascript, compatible con el navegador. El código se convierte en otro lenguaje en tiempo de
                        ejecución.</p>
                      <p class="text-justify">En resumen, un compilador convierte código de un lenguaje a javascript y
                        se
                        ejecuta en el navegador, mientras que un transpilador convierte código de un lenguaje a otro
                        lenguaje,
                        que luego se ejecuta en el navegador.</p>
                    </article>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-linter" role="tabpanel" aria-labelledby="vert-tabs-linter-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded">¿Qué es un Linter en Javascript?</span></h2>
                      <p class="text-justify">Un Linter (analizador de líneas) en JavaScript es una herramienta que
                        analiza el
                        código fuente y busca problemas o errores potenciales en cuanto a estándares de codificación,
                        buenas
                        prácticas y estilos de programación. Los Linters son ampliamente utilizados para garantizar la
                        calidad
                        del código y ayudar a los desarrolladores a escribir código consistente y fácil de
                        mantener.<br />Los
                        Linters en javascript pueden detectar problemas como:</p>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Variables no declaradas o
                          no
                          utilizadas</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Funciones no utilizadas
                        </li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Errores de sintaxis</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Problemas de estilo de
                          codificación</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Falta de comentarios</li>
                      </ul>
                      <p class="text-justify">Algunos ejemplos populares de Linters en JavaScript son:</p>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>ESLint: </strong>
                          Es uno
                          de los Linters más populares y ampliamente utilizado en JavaScript. Es altamente
                          configurable
                          y
                          permite a los desarrolladores establecer reglas personalizadas para garantizar la calidad
                          del
                          código.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>JSHint: </strong>
                          Es otro
                          linter popular en javascript, similar a ESLint, permite establecer reglas personalizadas
                          para
                          garantizar la calidad del código.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>JSLint: </strong>
                          Es un
                          linter que ha sido utilizado durante mucho tiempo en javascript, se enfoca en detectar
                          problemas de
                          sintaxis y buenas prácticas, pero es menos configurable que ESLint o JSHint.</li>
                      </ul>
                      <p class="text-justify">Los Linters son herramientas muy útiles para mantener el código limpio y
                        consistente, y ayudan a los desarrolladores a detectar y corregir problemas potenciales en el
                        código
                        temprano en el proceso de desarrollo.</p>
                    </article>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-testing" role="tabpanel" aria-labelledby="vert-tabs-testing-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded">¿Qué es Testing en Javascript?</span></h2>
                      <p class="text-justify"><strong>Testing en JavaScript es el proceso de verificar que el código
                          funciona
                          correctamente mediante la ejecución de pruebas automatizadas.</strong> El objetivo de las
                        pruebas es
                        asegurar que el código cumpla con los requisitos especificados y detectar problemas temprano
                        en
                        el
                        proceso de desarrollo.<br />Existen varias librerías de testing en javascript, algunas de las
                        más
                        populares son:</p>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Jest: </strong>
                          Es
                          una
                          librería de testing desarrollada por Facebook, es fácil de usar y proporciona una amplia
                          variedad de
                          características, como pruebas unitarias, pruebas de integración, y pruebas de rendimiento.
                          Es
                          compatible con diferentes entornos, incluyendo Node.js y el navegador.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Mocha: </strong>
                          Es
                          una
                          librería de testing popular para JavaScript que permite crear pruebas unitarias y de
                          integración. Es
                          compatible con diferentes entornos, incluyendo Node.js y el navegador.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Jasmine:
                          </strong>
                          Es una
                          librería de testing para JavaScript que proporciona un marco para escribir pruebas unitarias
                          y
                          de
                          integración. Es compatible con diferentes entornos, incluyendo Node.js y el navegador.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Tape: </strong>
                          Es
                          una
                          librería de testing minimalista para javascript, enfocada en hacer las pruebas legibles y
                          fáciles de
                          escribir.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Ava: </strong> Es
                          una
                          librería de testing minimalista y rápida, permite escribir pruebas unitarias y de
                          integración,
                          además de soportar paralelismo y cacheo de pruebas.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Cypress:
                          </strong>
                          Es una
                          librería de testing automatizado para aplicaciones web, se enfoca en hacer las pruebas
                          fáciles
                          de
                          escribir y leer, además de proporcionar una interfaz para interactuar con la aplicación.
                        </li>
                      </ul>
                      <p class="text-justify">Estas son solo algunas de las librerías de testing más populares en
                        javascript,
                        hay muchas otras disponibles para elegir, dependiendo de las necesidades y preferencias de
                        cada
                        equipo
                        de desarrollo.</p>
                    </article>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-build" role="tabpanel" aria-labelledby="vert-tabs-build-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded">¿Qué son las Build Tools?</span></h2>
                      <p class="text-justify"><strong>Las Build Tools son herramientas de automatización de procesos
                          de
                          construcción</strong> para aplicaciones web y móviles. Estas herramientas automatizan tareas
                        repetitivas y complejas, como la compilación de código, minificación, empaquetado y
                        transpilado,
                        que
                        son necesarias para crear una aplicación lista para producción.
                        <br />Algunos ejemplos de Build Tools muy populares en Javascript son:
                      </p>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Webpack:
                          </strong>
                          Es una
                          herramienta de empaquetado de módulos para JavaScript, permite agrupar y optimizar los
                          archivos de
                          una aplicación web, se utiliza para procesar y empaquetar código JavaScript, CSS, imágenes,
                          entre
                          otros.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Grunt: </strong>
                          Es
                          una
                          herramienta de automatización de tareas para JavaScript. Se utiliza para automatizar tareas
                          como la
                          compilación de código, minificación, pruebas unitarias y despliegue.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Gulp: </strong>
                          Es
                          una
                          herramienta de automatización de tareas similar a Grunt, pero se basa en flujos de trabajo
                          en
                          lugar
                          de configuraciones. Se utiliza para automatizar tareas como la compilación de código,
                          minificación,
                          pruebas unitarias y despliegue.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Browserify:
                          </strong> Es
                          una herramienta de empaquetado de módulos similar a webpack, permite utilizar módulos
                          CommonJS,
                          utilizado principalmente en proyectos basados en Node</li>
                      </ul>
                      <p class="text-justify">Dentro de esta categoría podemos definir: Task Runner, Module Bundler y
                        Zero
                        Config Tool</p>
                      <h4 class="text-orange">¿Qué es un Task Runner?</h4>
                      <p class="text-justify"><strong>Un Task Runner es una herramienta que automatiza tareas
                          repetitivas y
                          complejas en el proceso de desarrollo de una aplicación.</strong> Estas tareas pueden
                        incluir
                        la
                        compilación de código, minificación, pruebas unitarias, optimización de imágenes, entre otras.
                        El
                        objetivo de un Task Runner es ahorrar tiempo y esfuerzo al automatizar estas tareas, lo que
                        permite a
                        los desarrolladores enfocarse en el desarrollo de la aplicación en sí.</p>
                      <p class="text-justify">Algunos ejemplos de Task Runner populares son Grunt and Gulp, ya
                        mencionadas
                        anteriormente, ambas son herramientas de automatización de tareas para JavaScript, pero tienen
                        enfoques y características diferentes.</p>
                      <h4 class="text-orange">¿Qué es un Module Bundler?</h4>
                      <p class="text-justify">Un Module Bundler es una herramienta que se utiliza para empaquetar
                        módulos de
                        código JavaScript en un solo archivo o conjunto de archivos, con el objetivo de mejorar la
                        velocidad
                        de carga y la eficiencia en la aplicación web. Los módulos son una forma de organizar el
                        código
                        JavaScript y permiten reutilizar y compartir código entre diferentes partes de una aplicación.
                      </p>
                      <p class="text-justify">Los module bundler toman los módulos individuales y los combinan en uno
                        o
                        varios
                        archivos, y luego aplican tareas adicionales como minificación, ofuscación y optimización. Al
                        hacerlo,
                        se reduce el número de peticiones HTTP y se mejora la velocidad de carga de la aplicación.</p>
                      <p class="text-justify">Algunos ejemplos de Module Bundler populares son:</p>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Webpack:
                          </strong>
                          Es una
                          de las herramientas de empaquetado de módulos más populares y ampliamente utilizadas. Es
                          altamente
                          configurable y permite a los desarrolladores personalizar el proceso de empaquetado.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Browserify:
                          </strong> Es
                          otra herramienta de empaquetado de módulos, similar a Webpack, permite utilizar módulos
                          CommonJS.
                        </li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Rollup: </strong>
                          Es una
                          herramienta de empaquetado de módulos especializada en trabajar con módulos ES6, es más
                          ligero
                          que
                          webpack y se especializa en reducir el tamaño del bundle final.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Parcel: </strong>
                          Es una
                          herramienta de empaquetado de módulos similar a webpack, pero se enfoca en ser fácil de usar
                          y
                          configurar, con una configuración predeterminada que funciona para la mayoría de los
                          proyectos.</li>
                      </ul>
                      <h4 class="text-orange">¿Qué es un Zero Config Tool en Javascript?</h4>
                      <p class="text-justify">Un Zero Config Tool en JavaScript es una herramienta que se configura
                        automáticamente, sin necesidad de crear archivos de configuración adicionales, lo que permite
                        comenzar
                        a trabajar rápidamente en un proyecto. Estas herramientas suelen tener una configuración
                        predeterminada que funciona para la mayoría de los proyectos, y proporcionan una interfaz
                        fácil
                        de
                        usar para personalizar la configuración si es necesario.</p>
                      <p class="text-justify">Algunos ejemplos de Zero Config Tool en JavaScript son:</p>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Parcel: </strong>
                          Es una
                          herramienta de empaquetado de módulos, mencionada anteriormente, que se enfoca en ser fácil
                          de
                          usar
                          y configurar, con una configuración predeterminada que funciona para la mayoría de los
                          proyectos.
                        </li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Create React App:
                          </strong> Es una herramienta desarrollada por Facebook para crear aplicaciones React con una
                          configuración predeterminada, lo que permite comenzar a desarrollar una aplicación React
                          rápidamente
                          sin tener que configurar Webpack, Babel, entre otros.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Next.js:
                          </strong>
                          Es una
                          herramienta desarrollada por Zeit para crear aplicaciones de servidor React con una
                          configuración
                          predeterminada, lo que permite comenzar a desarrollar una aplicación de servidor React
                          rápidamente
                          sin tener que configurar Webpack, Babel, entre otros.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Vue CLI:
                          </strong>
                          Es una
                          herramienta desarrollada por Vue.js para crear aplicaciones Vue con una configuración
                          predeterminada, lo que permite comenzar a desarrollar una aplicación Vue rápidamente sin
                          tener
                          que
                          configurar Webpack, Babel, entre otros.</li>
                      </ul>
                      <p class="text-justify">En resumen, un Zero Config Tool es una herramienta que se configura
                        automáticamente, lo que permite comenzar a trabajar rápidamente en un proyecto, con una
                        configuración
                        predeterminada que funciona para la mayoría de los proyectos.</p>
                    </article>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-libreria" role="tabpanel" aria-labelledby="vert-tabs-libreria-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded">¿Qué es una librería en Javascript en
                          Javascript?</span></h2>
                      <p class="text-justify">Una librería en JavaScript es un conjunto de código preescrito que se
                        puede
                        utilizar para agregar funcionalidades específicas a una aplicación web o móvil. Las librerías
                        proporcionan funciones y métodos que pueden ser reutilizados para realizar tareas comunes,
                        como
                        manipulación del DOM, peticiones HTTP, validación de formularios, entre otras.</p>
                      <p class="text-justify">Algunos ejemplos de librerías populares en javascript son:</p>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>jQuery: </strong>
                          Es una
                          librería muy popular que se utiliza para manipular el DOM y agregar funcionalidades de
                          JavaScript
                          avanzadas.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Lodash: </strong>
                          Es una
                          librería que proporciona funciones de utilidad para trabajar con arrays, objetos y
                          funciones.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>React: </strong>
                          Es una
                          librería de JavaScript desarrollada por Facebook para crear aplicaciones web con un enfoque
                          en la
                          interfaz de usuario.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Vue.js: </strong>
                          Es una
                          librería de JavaScript para crear aplicaciones web con un enfoque en la interfaz de usuario.
                        </li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Axios: </strong>
                          Es una
                          librería para realizar peticiones HTTP, compatible con diferentes entornos, incluyendo
                          Node.js y el
                          navegador.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Moment.js:
                          </strong> Es
                          una librería para trabajar con fechas y horas</li>
                      </ul>
                      <p class="text-justify">En resumen, una librería en javascript es un conjunto de código
                        preescrito que
                        se puede utilizar para agregar funcionalidades específicas a una aplicación web o móvil,
                        proporcionando funciones y métodos que pueden ser reutilizados para realizar tareas comunes.
                      </p>
                      <h4 class="text-orange">¿Qué son las Librerías Data Layer en Javascript?</h4>
                      <p class="text-justify">Las librerías Data Layer en JavaScript son librerías que proporcionan
                        una capa
                        de abstracción para el manejo de datos en una aplicación web o móvil. Estas librerías
                        proporcionan un
                        conjunto de funciones y métodos para trabajar con datos, como almacenamiento, manipulación,
                        validación, y acceso a servicios de back-end.</p>
                      <p class="text-justify">Algunos ejemplos de librerías Data Layer populares en javascript son:
                      </p>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Redux: </strong>
                          Es una
                          librería de manejo de estado para aplicaciones JavaScript, se utiliza para almacenar y
                          gestionar el
                          estado de una aplicación de manera centralizada.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Apollo: </strong>
                          Es una
                          librería para trabajar con GraphQL, proporciona un conjunto de herramientas para interactuar
                          con una
                          API GraphQL, desde la creación de consultas hasta la implementación de cache.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>MobX: </strong>
                          Es una
                          librería de manejo de estado similar a Redux, pero con un enfoque diferente, se basa en la
                          observación de cambios en el estado de la aplicación.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Lodash: </strong>
                          Es una
                          librería que proporciona funciones de utilidad para trabajar con arrays, objetos y
                          funciones.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Axios: </strong>
                          Es una
                          librería para realizar peticiones HTTP, compatible con diferentes entornos, incluyendo
                          Node.js y el
                          navegador.</li>
                      </ul>
                      <h4 class="text-orange">¿Qué son las Librerías HTTP en Javascript?</h4>
                      <p class="text-justify">Las librerías HTTP en JavaScript son librerías que proporcionan una
                        interfaz
                        para realizar solicitudes y recibir respuestas HTTP en una aplicación web o móvil. Estas
                        librerías
                        proporcionan funciones y métodos para realizar solicitudes GET, POST, PUT, DELETE, entre
                        otras, y
                        procesar las respuestas recibidas.</p>
                      <p class="text-justify">Algunos ejemplos de librerías HTTP populares en javascript son:</p>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Axios: </strong>
                          Es una
                          librería para realizar peticiones HTTP, compatible con diferentes entornos, incluyendo
                          Node.js y el
                          navegador. Proporciona una interfaz fácil de usar para realizar solicitudes y manejar
                          respuestas.
                        </li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Superagent:
                          </strong> Es
                          una librería para realizar peticiones HTTP, similar a Axios y Fetch, proporciona una
                          interfaz fácil
                          de usar para realizar solicitudes y manejar respuestas.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>jQuery.ajax():
                          </strong>
                          Es una función de la librería jQuery para realizar peticiones HTTP, proporciona una interfaz
                          similar
                          a XMLHttpRequest (XHR).</li>
                      </ul>
                    </article>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-rendering" role="tabpanel" aria-labelledby="vert-tabs-rendering-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded">¿Qué son los Rendering Frameworks en
                          Javascript?</span></h2>
                      <p class="text-justify">Los «Rendering Frameworks» en JavaScript son bibliotecas o marcos de
                        trabajo que
                        ayudan a los desarrolladores a construir aplicaciones web más eficientes y escalables. Estos
                        marcos
                        proporcionan un conjunto de herramientas y componentes que facilitan la creación de interfaces
                        de
                        usuario, la manipulación del DOM (Document Object Model), la gestión de estado y la
                        comunicación con
                        APIs de servidor. Algunos ejemplos populares de estos marcos están basados React o Vue.js.</p>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Nuxt.js:
                          </strong> es un
                          marco de desarrollo de JavaScript basado en Vue.js
                          que se utiliza para crear aplicaciones web universales (SSR, por sus siglas en inglés).
                          Nuxt.js
                          ofrece una estructura de carpetas predefinida y un conjunto de herramientas para facilitar
                          el
                          desarrollo de aplicaciones Vue.js con características como la generación automática de rutas
                          y la
                          configuración del servidor. También proporciona una variedad de módulos y plugins
                          preconstruidos
                          para agregar funcionalidades comunes como el manejo de la meta-información, la optimización
                          de
                          rendimiento y el enrutamiento dinámico.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>Next.js:
                          </strong> es un
                          marco de desarrollo de JavaScript para crear
                          aplicaciones web universales (SSR, por sus siglas en inglés) con React.js. Next.js
                          proporciona una
                          estructura de carpetas predefinida y un conjunto de herramientas para facilitar el
                          desarrollo de
                          aplicaciones React.js con características como la generación automática de rutas y la
                          configuración
                          del servidor. También proporciona una variedad de características avanzadas como el soporte
                          para
                          TypeScript, la posibilidad de crear páginas estáticas y una interfaz de programación de
                          aplicaciones
                          (API) para crear rutas y middleware personalizados.</li>
                      </ul>
                    </article>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-frameworks" role="tabpanel" aria-labelledby="vert-tabs-frameworks-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded">¿Qué son los frameworks en Javascript para crear
                          aplicaciones
                          móvil y de ordenador?</span></h2>
                      <p class="text-justify">Hay varios frameworks de JavaScript que se utilizan para desarrollar
                        aplicaciones tanto de escritorio como de móvil. Algunos de los más populares son:</p>
                      <ul>
                        <li class="my-2"><strong>Electron: es un framework de código abierto que permite crear
                            aplicaciones de
                            escritorio multiplataforma utilizando tecnologías web como JavaScript, HTML y
                            CSS.</strong> </li>
                        <li class="my-2"><strong>React Native: </strong> es un framework de Facebook que permite crear
                          aplicaciones móviles nativas utilizando React.js.</li>
                        <li class="my-2"><strong>Cordova/PhoneGap: </strong> es un framework que permite crear
                          aplicaciones
                          móviles multiplataforma utilizando tecnologías web como JavaScript, HTML y CSS.</li>
                        <li class="my-2"><strong>Ionic: </strong> es un framework de código abierto que permite crear
                          aplicaciones móviles multiplataforma utilizando tecnologías web como Angular, JavaScript,
                          HTML y
                          CSS.</li>
                      </ul>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.Main content -->
    </section>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->

  <?php include "../../../../templates/footer_articulos_items.php"?>