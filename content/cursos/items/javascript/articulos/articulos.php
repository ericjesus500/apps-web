<?php include "../../../../../templates/header.php";?>

<title>Javascript | Artículos</title>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php include "../templates/navbar-js.php"?>
    <!-- Content Wrapper. Contains page content -->
    <section class="content">
      <!-- Main content -->
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-edit"></i>
              <span class="h1">ARTICULOS DIVERSOS</span>
            </h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-5 col-sm-3">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="vert-tabs-articulo-1-tab" data-toggle="pill" href="#vert-tabs-articulo-1" role="tab" aria-controls="vert-tabs-articulo-1" aria-selected="true">La Inmutabilidad  by freeCodeCamp</a>
                  <a class="nav-link" id="vert-tabs-articulo-2-tab" data-toggle="pill" href="#vert-tabs-articulo-2" role="tab" aria-controls="vert-tabs-articulo-2" aria-selected="false">Consultas de medios de JavaScript</a>
                  <a class="nav-link" id="vert-tabs-transpilador-tab" data-toggle="pill" href="#vert-tabs-transpilador" role="tab" aria-controls="vert-tabs-transpilador" aria-selected="false">Titulo 3 </a>
                  <a class="nav-link" id="vert-tabs-articulo-3-tab" data-toggle="pill" href="#vert-tabs-articulo-3" role="tab" aria-controls="vert-tabs-articulo-3" aria-selected="false">Titulo 4</a>
                </div>
              </div>
              <div class="col-7 col-sm-9">
                <div class="tab-content text-white" id="vert-tabs-tabContent">
                  <div class="tab-pane text-left fade show active" id="vert-tabs-articulo-1" role="tabpanel" aria-labelledby="vert-tabs-articulo-1-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded">La Inmutabilidad by freeCodeCamp</span></h2>
                      <?php require_once "./freecodecamp/inmutabilidad/news/que-es-inmutabilidad-en-javascript/index.html"; ?>
                    </article>
                  </div>
                  <div class="tab-pane fade" style="background-color: #1a1a2e;" id="vert-tabs-articulo-2" role="tabpanel" aria-labelledby="vert-tabs-articulo-2-tab">
                    <article class="px-4 py-4">
                      <h2><span class="bg-warning px-3 rounded">Trabajar con consultas de medios de JavaScript</span></h2>
                      <p class="pathway-extreme-p text-justify mt-4">¿Qué es lo primero que te viene a la mente cuando piensas en consultas de medios? Quizás algo en un archivo CSS como este:</p>
                      <pre class="pre-content-list bg-blue_2 my-5">
                        <code>
                          body {
                            &nbsp;&nbsp;&nbsp;background-color: plum;
                          }
                           
                          @media (min-width: 768px) {
                            &nbsp;&nbsp;&nbsp;body {
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: tomato;
                            &nbsp;&nbsp;&nbsp;}
                          }
                        </code>
                      </pre>
                      <p class="pathway-extreme-p text-justify mt-4">Las consultas de medios CSS son un componente fundamental de cualquier diseño adaptable. Son una excelente manera de aplicar diferentes estilos a distintos contextos, ya sea según el tamaño de la ventana gráfica, la preferencia de movimiento, el esquema de color preferido, interacciones específicas e incluso dispositivos como impresoras, televisores y proyectores, entre muchos otros.</p>
                      
                      <p class="pathway-extreme-p text-justify mt-4">¿Pero sabías que también existen consultas de medios en JavaScript? ¡Es cierto! Puede que no las veamos tan a menudo en JavaScript, pero sin duda existen casos de uso que me han resultado útiles a lo largo de los años para crear plugins adaptables, como los controles deslizantes. Por ejemplo, a cierta resolución, podrías necesitar redibujar y recalcular los elementos del control deslizante.</p>
                      <p class="pathway-extreme-p text-justify mt-4">Trabajar con consultas de medios en JavaScript es muy diferente a trabajar con ellas en CSS, aunque los conceptos son similares: coincidir con algunas condiciones y aplicar algunas cosas.</p>                      
                    </article>
                    <article class="px-4 py-4">
                      <h2><span class="bg-warning px-3 rounded">Usando matchMedia()</span></h2>
                      <p class="pathway-extreme-p text-justify mt-4"><span class="text-skyblue_2">matchMedia()</span> es un método que permite comprobar si una consulta de medios CSS coincide con el documento actual. Devuelve un objeto <span class="text-orange">MediaQueryList</span>, que contiene información sobre la consulta y si esta se cumple actualmente. Para usarlo, se pasa una cadena de consulta de medios a matchMedia() y se verifica la propiedad matches del objeto resultante.</p>
                      <p class="pathway-extreme-p text-justify mt-4">El uso es prácticamente idéntico al de las consultas de medios CSS. Pasamos la cadena de consulta de medios a matchMedia() y luego comprobamos la propiedad <span class="text-lila_2">.matches</span>.</p>
                      <pre class="pre-content-list bg-blue_2 my-5">
                        <code>
                          <span class="comentario">// Define la consulta</span>
                          const <span class="text-primary_2">mediaQuery</span> = window.<span class="text-skyblue_2">matchMedia</span>('(min-width: 768px)')
                          
                          <span class="comentario">// Verifica si la consulta de medios coincide actualmente</span>
                          if (<span class="text-primary_2">mediaQuery</span>.<span class="text-info">.matches</span>) {
                            &nbsp;&nbsp;&nbsp;<span class="comentario">// Si coincide, realiza alguna acción</span>
                            &nbsp;&nbsp;&nbsp;<span class="text-danger">console.log</span>("La pantalla tiene al menos 768px de ancho.");
                          } else {
                            &nbsp;&nbsp;&nbsp;<span class="comentario">// Si no coincide, realiza otra acción</span>
                            &nbsp;&nbsp;&nbsp;<span class="text-danger">console.log</span>("La pantalla es más estrecha que 768px.");
                          }
                        </code>
                      </pre>
                      <p class="pathway-extreme-p text-justify mt-4">La consulta de medios definida devolverá un objeto <span class="text-orange">MediaQueryList</span>. Este objeto almacena información sobre la consulta de medios, y la propiedad clave que necesitamos es <span class="text-info">.matches</span>. Esta es una propiedad booleana de solo lectura que devuelve <mark><em>true</em></mark> si el documento coincide con la consulta de medios.</p>
                      
                      <p class="pathway-extreme-p text-justify mt-4">Ese es el uso básico para comparar condiciones de medios en JavaScript. Creamos una condición de coincidencia ( matchMedia() ) que devuelve un objeto ( MediaQueryList ), la verificamos ( .matches ) y, si la condición se evalúa como verdadera, hacemos algo. ¡Similar a CSS!</p>
                      
                      <h4 class="resaltado my-5">Explicación detallada</h4>
                      
                      <dl class="my-5">
                        <dt><b><em>1. window.matchMedia(mediaQueryString):</em></b></dt>
                        <dd>
                          <ul class="my-5">
                            <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i>window es el objeto global en el navegador.</li>
                            <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i>matchMedia() es un método de window que toma una cadena de consulta de medios (como en CSS) como argumento.</li>
                            <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i>Devuelve un objeto MediaQueryList.</li>
                          </ul>
                        </dd>
                      </dl>
                      <dl class="my-5">
                        <dt><b><em>2. MediaQueryList:</em></b></dt>
                        <dd>
                          <ul class="my-5">
                            <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i>matches: Una propiedad booleana que indica si la consulta de medios coincide con el estado actual del documento. true si coincide, false si no.</li>
                            <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i>media: Una cadena que representa la consulta de medios especificada.</li>
                            <li class="my-2"><i class="bi bi-check-all px-2 text-orange"></i>addEventListener("change", (event) => { ... }): Permite registrar un manejador de eventos que se ejecutará cada vez que la consulta de medios comience o deje de coincidir con el documento, según MDN Web Docs. El evento <span class="text-tomato">e</span> contiene la propiedad matches que indica el nuevo estado de la coincidencia.</li>
                          </ul>
                        </dd>
                      </dl>
                      
                      <p class="pathway-extreme-p text-justify mt-4">Pero hay más. Por ejemplo, si cambiamos el tamaño de la ventana por debajo del tamaño objetivo, nada se actualiza como lo haría con CSS de fábrica. Esto se debe a que .matches es perfecto para comprobaciones instantáneas puntuales, pero no puede comprobar cambios continuamente. Esto significa que necesitamos…</p>
                      
                      <h3 id="" class="my-5">Escuche los cambios</h3>
                      <p class="pathway-extreme-p text-justify mt-4"><span class="text-orange">MediaQueryList</span> tiene un  método <span class="text-skyblue_2">addListener()</span> (y el subsiguiente removeListener()) que acepta una función de devolución de llamada (representada por el evento <span class="text-amarillo">.onchange</span>) que se invoca cuando cambia el estado de la consulta de medios. En otras palabras, podemos ejecutar funciones adicionales cuando cambian las condiciones, lo que nos permite responder a las condiciones actualizadas.</p>
                      
                      
                      
                      <pre class="pre-content-list bg-blue_2 my-5">
                        <code>
                          <span class="comentario">// Crea una condición que tenga como objetivo ventanas gráficas de al menos 768 px de ancho</span>
                          const <span class="text-primary_2">mediaQuery</span> = window.<span class="text-skyblue_2">matchMedia</span>('(min-width: 768px)')
                          
                          <span class="text-danger">function</span> <span class="text-lila">handleTabletChange</span>(e) {
                            &nbsp;&nbsp;&nbsp;<span class="comentario">// Comprueba si la consulta de medios es verdadera</span>
                            &nbsp;&nbsp;&nbsp;<span class="text-danger">if</span> (e.<span class="text-info">matches</span>)) {
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">// Luego registre el siguiente mensaje en la consola</span>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger">console.log</span>('Consulta de medios coincidente!')
                            &nbsp;&nbsp;&nbsp;}
                          }
                          
                          <span class="comentario">// Registrar detector de eventos</span>
                          <span class="text-primary_2">mediaQuery</span>.<span class="text-skyblue_2">addListener</span>(<span class="text-lila">handleTabletChange</span>)

                          <span class="comentario">// Comprobación inicial</span>
                          <span class="text-lila">handleTabletChange</span>(<span class="text-primary_2">mediaQuery</span>)
                        </code>
                      </pre>
                      
                      <p class="pathway-extreme-p text-justify mt-4">La combinación de ambos matchMedia() y MediaQueryList nos brinda el mismo poder no solo para adaptarnos a las condiciones de los medios que proporciona CSS, sino también para responder activamente a las condiciones actualizadas.</p>
                      
                      <div class="nota my-5">
                        <div>
                          <span class="text-tomato"><i class="bi bi-exclamation-circle-fill"></i>Nota:</span>
                        </div>
                        <div>
                          <p>Al registrar un detector de eventos addListener(), éste no se activará inicialmente. Necesitamos llamar manualmente a la función del controlador de eventos y pasar la consulta de medios como argumento.</p>
                        </div>
                      </div>
                      
                      <div class="nota my-5">
                        <div>
                          <span class="text-tomato"><i class="bi bi-exclamation-circle-fill"></i>Nota:</span>
                        </div>
                        <div>
                          <p>También es válido usar el manejador de escucha <span class="text-skyblue_2">addEventListener</span> con el evento "change"</p>
                        </div>
                      </div>
                      
                      <pre class="pre-content-list bg-blue_2 my-5">
                        <code>
                          <span class="text-danger">const</span> <span class="text-primary_2">mediaQuery</span> = window.<span class="text-skyblue_2">matchMedia</span>("(min-width: 768px)");

                          <span class="text-danger">function</span> <span class="text-lila">handleMediaQueryChange</span>(event) {
                            &nbsp;&nbsp;&nbsp;<span class="text-danger">if</span> (event.<span class="text-info">matches</span>) {
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">// La condición (min-width: 768px) se cumple</span>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger">console.log</span>("La ventana es mayor o igual a 768px");
                            &nbsp;&nbsp;&nbsp;} <span class="text-danger">else</span> {
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">// La condición (min-width: 768px) no se cumple</span>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger">console.log</span>("La ventana es menor a 768px");
                            &nbsp;&nbsp;&nbsp;}
                          }

                          <span class="comentario">// Inicialmente, ejecuta la función para obtener el estado actual</span>
                          <span class="text-lila">handleMediaQueryChange</span>(<span class="text-primary_2">mediaQuery</span>);

                          <span class="comentario">// Agrega el listener para cambios</span>
                          <span class="text-primary_2">mediaQuery</span>.<span class="text-skyblue_1">addEventListener</span>("change", <span class="text-lila">handleMediaQueryChange</span>);

                          <span class="comentario">// Para quitar el listener (si es necesario)</span>
                          <span class="comentario">// mediaQuery.removeEventListener("change", <span class="text-lila">handleMediaQueryChange</span>);
                        </code>
                      </pre>
                      
                      <h3 id="" class="my-5">Detectar cambios sucesivos del tamaño de la ventana del navegador</h3>
                      <p class="pathway-extreme-p text-justify mt-4">Para detectar cambios sucesivos en el tamaño de la ventana del navegador usando <span class="text-lila_2">.matches</span> (Media Queries), se debe utilizar el evento resize junto con la función <span class="text-skyblue_2">matchMedia</span>() con la consulta de medios deseada (por ejemplo: (max-width: 768px)). Luego se agrega un listener al evento <span class="text-orange">resize</span> de la ventana, que ejecutará una función cada vez que cambie el tamaño de la ventana. Dentro de esta función se usa <span class="text-lila_2">.matches</span> para verificar si la consulta de medios actual coincide con el tamaño de la ventana y se realiza la lógica deseada.</p>
                      <p class="pathway-extreme-p text-justify mt-4"><em>Ejemplo 1</em></p>
                      <pre class="pre-content-list bg-blue_2 my-5">
                        <code>
                          <span class="text-danger">const</span> <span class="text-primary_2">mediaQuery</span> = window.<span class="text-skyblue_2">matchMedia</span>("(max-width: 768px)")
                          <span class="text-danger">function</span> <span class="text-lila">handleResize</span>() {
                            &nbsp;&nbsp;&nbsp;if (<span class="text-primary_2">mediaQuery</span>.<span class="text-info">matches</span>) {
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">// Lógica para ventanas pequeñas</span>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger">console.log</span>("Ventana es pequeña (&lt;= 768px)");
                            &nbsp;&nbsp;&nbsp; } else {
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">// Lógica para ventanas grandes</span>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger">console.log</span>("Ventana es grande (&gt; 768px)");
                            &nbsp;&nbsp;&nbsp;}
                          }

                          <span class="comentario">// Ejecutar la función al cargar la página inicialmente</span>
                          <span class="text-lila">handleResize</span>();

                          <span class="comentario">// Agregar un listener para el evento resize</span>
                          window.addEventListener("<span class="text-amarillo">resize</span>", <span class="text-lila">handleResize</span>());
                        </code>
                      </pre>
                      
                      <h4 class="resaltado my-5 w-25">Explicación detallada</h4>
                      <dl class="my-5">
                        <dt><b><em>1. window.matchMedia():</em></b></dt>
                        <dd>Esta función toma una cadena de texto que representa una consulta de medios (como las definidas en CSS) y devuelve un objeto MediaQueryList.
                        </dd>
                      </dl>
                      <dl class="my-5">
                        <dt><b><em>2. MediaQueryList.matches:</em></b></dt>
                        <dd>Esta propiedad, disponible en el objeto MediaQueryList, devuelve true si la consulta de medios coincide con el estado actual del navegador (por ejemplo, si el ancho de la ventana es menor o igual a 768px) y false en caso contrario.
                        </dd>
                      </dl>
                      <dl class="my-5">
                        <dt><b><em>3. window.addEventListener("resize", handleResize):</em></b></dt>
                        <dd>El evento resize se dispara cada vez que se cambia el tamaño de la ventana del navegador. Se agrega un listener a este evento, que ejecutará la función handleResize cada vez que ocurra.
                        </dd>
                      </dl>
                      <dl class="my-5">
                        <dt><b><em>4. handleResize():</em></b></dt>
                        <dd>Esta función verifica el valor de mediaQuery.matches y ejecuta la lógica correspondiente. Se llama inicialmente al cargar la página para establecer el estado inicial. 
                        </dd>
                      </dl>
                      <h4 class="resaltado my-5 w-25">Ejemplo de uso</h4>
                      <p class="pathway-extreme-p text-justify mt-4">En el ejemplo anterior, se detecta si la ventana tiene un ancho igual o inferior a 768px. Si lo es, se imprime un mensaje en la consola indicando que la ventana es pequeña, y se ejecuta cualquier otra lógica necesaria para el diseño responsivo (por ejemplo, cambiar la disposición de los elementos, mostrar u ocultar ciertas secciones, etc.). Si la ventana es más grande, se ejecuta la lógica para ventanas grandes. </p>
                      
                      <h4 class="resaltado my-5 w-25">Consideraciones</h4>
                      
                      <p class="pathway-extreme-p h4 my-4 text-verde"><em>Consultas de medios complejas:</em></p>
                      <p class="pathway-extreme-p text-justify mt-4">Puedes usar consultas de medios más complejas que incluyan múltiples condiciones (ancho, alto, orientación, etc.).</p>
                      
                      <p class="pathway-extreme-p h4 my-4 text-verde"><em>Rendimiento:</em></p>
                      <p class="pathway-extreme-p text-justify mt-4">Evita realizar operaciones costosas dentro de la función handleResize para no afectar el rendimiento del navegador, especialmente si se redimensiona la ventana frecuentemente.</p>
                      
                      <p class="pathway-extreme-p h4 my-4 text-verde"><em>Mejoras:</em></p>
                      <p class="pathway-extreme-p text-justify mt-4">Considera usar técnicas como el debounce o el throttle para limitar la frecuencia con la que se ejecuta la función handleResize y optimizar el rendimiento. </p>
                      
                      <p class="pathway-extreme-p text-justify mt-4"><em>Ejemplo 2</em></p>
                      <p class="pathway-extreme-p text-justify mt-4">En este ejemplo se anidan consultas de medios para detectar diferentes rangos de tamaños de ventana. Por ejemplo, se verifica si el ancho está entre 769px y 1024px..</p>
                      <pre class="pre-content-list bg-blue_2 my-5">
                        <code>
                          window.<span class="text-skyblue_1">addEventListener</span>('<span class="text-amarillo">resize</span>', <span class="text-danger">function</span>() {
                            &nbsp;&nbsp;&nbsp;<span class="text-danger">if</span> (window.<span class="text-skyblue_2">matchMedia</span>('(max-width: 768px)').<span class="text-info">matches</span>) {
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">// Código a ejecutar si el ancho de la ventana es menor o igual a 768px</span>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger">console.log</span>('La ventana es más pequeña o igual a 768px de ancho');
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">// Agrega aquí la lógica que necesites para ventanas pequeñas</span>
                            &nbsp;&nbsp;&nbsp;} <span class="text-danger">else if</span> (window.<span class="text-skyblue_2">matchMedia</span>('(min-width: 769px) and (max-width: 1024px)').<span class="text-info">matches</span>) {
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">// Código a ejecutar si el ancho de la ventana está entre 769px y 1024px</span>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger">console.log</span>('La ventana tiene un ancho entre 769px y 1024px');
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">// Agrega aquí la lógica que necesites para ventanas medianas</span>
                            &nbsp;&nbsp;&nbsp;} <span class="text-danger">else</span> {
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">// Código a ejecutar para ventanas mayores a 1024px</span>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger">console.log</span>('La ventana es más grande que 1024px de ancho');
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">// Agrega aquí la lógica que necesites para ventanas grandes</span>
                            }
                          });
                        </code>
                      </pre>
                      <p class="pathway-extreme-p h4 my-4 text-verde"><em>Lógica dentro de los bloques if:</em></p>
                      <p class="pathway-extreme-p text-justify mt-4">Dentro de cada bloque if, se coloca el código que se ejecutará cuando se cumpla la condición de la consulta de medios correspondiente. Aquí puedes modificar el tamaño de elementos, mostrar u ocultar contenido, o realizar cualquier otra acción necesaria para adaptar tu página al nuevo tamaño de ventana.</p>
                      
                      <p class="pathway-extreme-p h4 my-4 text-verde"><em>Diseño responsivo:</em></p>
                      <p class="pathway-extreme-p text-justify mt-4">Este enfoque es fundamental para crear sitios web con diseño responsivo, que se adaptan a diferentes tamaños de pantalla y dispositivos..</p>
                      <p class="pathway-extreme-p h4 my-4 text-verde"><em>Otras opciones:</em></p>
                      <p class="pathway-extreme-p text-justify mt-4">Además de las consultas de medios, puedes usar otras propiedades como window.innerWidth y window.innerHeight para obtener el ancho y alto de la ventana, o también document.documentElement.clientWidth y document.documentElement.clientHeight para el área visible del documento, según <a lass="btn-link" href="https://es.javascript.info/size-and-scroll-window" target="_blanck">El Tutorial de JavaScript Moderno</a>.</p>
                    </article>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-transpilador" role="tabpanel" aria-labelledby="vert-tabs-transpilador-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded">Titulo 3</span></h2>
                      <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nesciunt officiis perspiciatis aliquam natus ad. Sequi enim voluptatum odit fugiat pariatur architecto optio, nam ab quibusdam. Atque hic dolorem eos blanditiis esse quis dignissimos iure aspernatur commodi suscipit ut quod quidem reiciendis delectus harum, a eligendi omnis mollitia corporis consectetur.</p>
                    </article>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-articulo-3" role="tabpanel" aria-labelledby="vert-tabs-articulo-3-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded">Titulo 4</span></h2>
                      <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum porro, magnam quidem sint facere nostrum doloremque eveniet, sequi temporibus unde nulla provident, esse perferendis similique velit rem possimus distinctio doloribus harum illum optio aliquid deleniti? Placeat libero incidunt dolorem tenetur quia aliquam mollitia ducimus repellat eveniet temporibus, asperiores rerum? Consequuntur!</p>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.Main content -->
    </section>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->

  <?php include "../../../../../templates/footer.php";

?>