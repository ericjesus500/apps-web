<?php include_once "../../../../../../../templates/header.php" ?>

  <title>Select Custom</title>
</head>

<body class="bg-dark text-light">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
        <h1 class="text-center">El elemento &lt;select&gt; ahora se puede personalizar con CSS</h1>
        <main class="w-100 my-5">
          <section class="w-100">
            <!-- Introducción -->
            <article class="w-100 mb-5 article">
              <h2 class="text-lila my-5">Introducción</h2>
              <p class="pathway-extreme-p text-justify">El elemento <span class="text-amarillo">&lt;select&gt;</span> ahora se puede personalizar con CSS. Esto significa que puedes cambiar el color de fondo, el color del texto, el borde y otros estilos del elemento <span class="text-amarillo">&lt;select&gt;</span> utilizando CSS.</p>
              <div class="text-center my-5">
                <img src="../../../src/img/customizable-select.png" alt="customizable-select" class="img-fluid">
              </div>
              <p class="pathway-extreme-p text-justify">Esto es útil para crear formularios más atractivos y personalizados. Por ejemplo, puedes hacer que el elemento <span class="text-amarillo">&lt;select&gt;</span> coincida con el diseño de tu sitio web o aplicación.</p>

              <p class="pathway-extreme-p text-justify">Se han añadido nuevas funciones que permiten a los desarrolladores personalizar tanto el componente principal como el picker (la lista desplegable) con estilos CSS.</p>

              <h3 class="my-5">Detalles de la personalización</h3>

              <h4 class="resaltado w-50 my-4">Acceso a los estilos predefinidos:</h4>
              <p class="pathway-extreme-p text-justify my-5">El elemento <span class="text-amarillo">&lt;select&gt;</span> ahora permite acceder a los estilos predefinidos de los sistemas operativos, lo que facilita la personalización. </p>

              <h4 class="resaltado w-50 my-4">Personalización del componente principal:</h4>
              <p class="pathway-extreme-p text-justify my-5">Se pueden aplicar estilos a la parte visible del &lt;select&gt;, como el color de fondo, el color de texto y el borde.</p>

              <h4 class="resaltado w-50 my-4">Personalización del picker:</h4>
              <p class="pathway-extreme-p text-justify my-5">El "picker", que es la lista desplegable con las opciones, también se puede personalizar con estilos CSS. </p>

              <h4 class="resaltado w-50 my-4">Efectos de hover y focus:</h4>
              <p class="pathway-extreme-p text-justify my-5">Se pueden aplicar efectos de hover (cambio de estilo al pasar el ratón) y focus (cambio de estilo al seleccionar el elemento) para mejorar la experiencia del usuario.</p>

              <h4 class="resaltado w-50 my-4">Estilos avanzados:</h4>
              <p class="pathway-extreme-p text-justify my-5">Con las nuevas funciones, se pueden crear selectores personalizados y efectos de transición para lograr diseños más complejos y atractivos.</p>

              <h4 class="resaltado w-50 my-4">Compatibilidad:</h4>
              <p class="pathway-extreme-p text-justify my-5">Estas nuevas funciones son compatibles con navegadores modernos como Chrome, <a class="btn-link" href="https://developer.chrome.com/blog/a-customizable-select?hl=es_419" target="_blank">según una publicación de Chrome for Developers.</a> </p>

              <p class="pathway-extreme-p text-justify my-5">También hay una nueva <a class="btn-link" href="https://developer.mozilla.org/en-US/docs/Learn_web_development/Extensions/Forms/Customizable_select" target="_blank">documentación en MDN para seleccionar elementos personalizables</a>, repleta de detalles.</p>
            </article>

            <!-- Propiedad appearance -->
            <article class="w-100 my-5 article">
              <h2 class="my-5 text-lila">Propiedad appearance</h2>
              <p class="pathway-extreme-p text-justify">Para personalizar el elemento <span class="text-amarillo">&lt;select&gt;</span> con CSS, puedes utilizar la propiedad <span class="text-skyblue_2">appearance</span>: <span class="text-tomato">none</span> para eliminar los estilos predeterminados y luego aplicar tus propios estilos. También puedes usar pseudoelementos como <span class="text-lila_2">:before</span> y <span class="text-lila_2">:after</span> para crear elementos adicionales, como flechas o iconos.</p>

              <h4 class="resaltado my-5 w-75">Paso 1: Eliminar estilos predeterminados</h4>
              <pre class="pre-content-list bg-blue_2 my-5">
                <code>
                  <span class="text-skyblue_2">select</span> {
                    &nbsp;&nbsp;&nbsp;<span class="text-info">appearance</span>: none;
                    &nbsp;&nbsp;&nbsp;<span class="text-info">-webkit-appearance</span>: none; <span class="comentario">/* Para navegadores WebKit/Blink */</span>
                    &nbsp;&nbsp;&nbsp;<span class="text-info">-moz-appearance</span>: none; <span class="comentario">/* Para Firefox */</span>
                    &nbsp;&nbsp;&nbsp;<span class="text-info">-ms-appearance</span>: none; <span class="comentario">/* Para Internet Explorer */</span>
                    &nbsp;&nbsp;&nbsp;<span class="text-info">background-color</span>: transparent; <span class="comentario">/* Opcional, para que no haya un color de fondo */</span>
                    &nbsp;&nbsp;&nbsp;<span class="text-info">border</span>: none; <span class="comentario">/* Opcional, para eliminar el borde predeterminado */</span>
                  }
                </code>
              </pre>

              <h4 class="resaltado my-5 w-75">Paso 2: Crear un contenedor para el select (opcional)</h4>
              <p class="pathway-extreme-p text-justify">Si quieres personalizar la apariencia de la flecha o el botón desplegable, puedes envolver el <span class="text-amarillo">&lt;select&gt;</span> en un &lt;div&gt; y aplicar estilos a este contenedor:</p>
              <pre class="pre-content-list bg-blue_2 my-5">
                <code>
                  &lt;<span class="text-danger">div</span> class="custom-select"&gt;
                    &nbsp;&nbsp;&nbsp;&lt;<span class="text-danger">select</span> id="mySelect"&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;<span class="text-info">option</span>&gt;Opción 1&lt;/<span class="text-info">option</span>&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;<span class="text-info">option</span>&gt;Opción 2&lt;/<span class="text-info">option</span>&gt;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;<span class="text-info">option</span>&gt;Opción 3&lt;/<span class="text-info">option</span>&gt;
                    &nbsp;&nbsp;&nbsp;&lt;/<span class="text-danger">select</span>&gt;
                  &lt;/<span class="text-danger">div</span>&gt;
                </code>
              </pre>
              <pre class="pre-content-list bg-blue_2 my-5">
                <code>
                  <span class="text-skyblue_2">.custom-select</span> {
                    &nbsp;&nbsp;&nbsp;<span class="text-info">position</span>: relative; <span class="comentario">/* Para poder posicionar la flecha */</span>
                    &nbsp;&nbsp;&nbsp;<span class="text-info">display</span>: inline-block; <span class="comentario">Para que el select pueda tener un ancho y alto específicos.</span>
                    &nbsp;&nbsp;&nbsp;<span class="text-info">width</span>: 200px; <span class="comentario">/* Ajusta el ancho según tus necesidades */</span>
                  }

                  <span class="text-skyblue_2">.custom-select</span>::<span class="text-tomato">after</span> { <span class="comentario">/* Para crear la flecha */</span>
                    &nbsp;&nbsp;&nbsp;<span class="text-info">content</span>: '\25BE'; <span class="comentario">/* Unicode para la flecha hacia abajo */</span>
                    &nbsp;&nbsp;&nbsp;<span class="text-info">position</span>: absolute;
                    &nbsp;&nbsp;&nbsp;<span class="text-info">right</span>: 10px;
                    &nbsp;&nbsp;&nbsp;<span class="text-info">top</span>: 50%;
                    &nbsp;&nbsp;&nbsp;<span class="text-info">transform</span>: translateY(-50%);
                    &nbsp;&nbsp;&nbsp;<span class="text-info">font-size</span>: 12px; <span class="comentario">/* Ajusta el tamaño de la flecha */</span>
                    &nbsp;&nbsp;&nbsp;<span class="text-info">color</span>: #888; <span class="comentario">/* Ajusta el color de la flecha */</span>
                    &nbsp;&nbsp;&nbsp;<span class="text-info">pointer-events</span>: none; <span class="comentario">/* Para que no interfiera con el clic en el select */</span>
                    &nbsp;&nbsp;&nbsp;<span class="text-info">border-left</span>: 5px solid transparent;
                    &nbsp;&nbsp;&nbsp;<span class="text-info">border-right</span>: 5px solid transparent;
                    &nbsp;&nbsp;&nbsp;<span class="text-info">border-top</span>: 5px solid #000; <span class="comentario">/* Cambia el color de la flecha */</span>
                  }
                </code>
              </pre>

              <h4 class="resaltado my-5 w-75">Paso 3: Aplicar estilos al select (opcional)</h4>
              <p class="pathway-extreme-p text-justify">Puedes aplicar estilos directamente al <span class="text-amarillo">&lt;select&gt;</span> para cambiar su aspecto:</p>

              <pre class="pre-content-list bg-blue_2 my-5">
                <code>
                  <span class="text-skyblue_2">select</span> {
                    &nbsp;&nbsp;&nbsp;<span class="text-info">border</span>: 1px solid #ccc;
                    &nbsp;&nbsp;&nbsp;<span class="text-info">padding</span>: 8px;
                    &nbsp;&nbsp;&nbsp;<span class="text-info">border-radius</span>: 4px;
                    &nbsp;&nbsp;&nbsp;<span class="text-info">background-color</span>: #fff;
                    &nbsp;&nbsp;&nbsp;<span class="text-info">color</span>: #333;
                    &nbsp;&nbsp;&nbsp;<span class="text-info">font-family</span>: Arial, sans-serif;
                    &nbsp;&nbsp;&nbsp;<span class="text-info">cursor</span>: pointer; <span class="comentario">/* Para indicar que es interactivo */</span>
                  }

                  <span class="text-skyblue_2">select</span>:<span class="text-tomato">focus</span> {
                    &nbsp;&nbsp;&nbsp;<span class="text-info">outline</span>: none; <span class="comentario">/* Para quitar el borde de foco */</span>
                    &nbsp;&nbsp;&nbsp;<span class="text-info">box-shadow</span>: 0 0 5px rgba(0, 123, 255, 0.5); <span class="comentario">/* Para agregar un efecto de foco */</span>
                  }
                </code>
              </pre>

              <div class="text-center my-4">
                <a href="../../../ejercicios/vida_mrr/select/select1/select.php" class="btn btn-outline-success" target="_blank">Ver
                  Funcionamiento</a>
              </div>

              <p class="pathway-extreme-p h4 my-5">Ejemplos de estilos adicionales:</p>
              <ul>
                <li class="my-3 fs-5"><i class="bi bi-check2-square px-2 text-skyblue_2"></i><span class="text-primary_2">display: inline-block; </span>Para que el select pueda tener un ancho y alto específicos.</li>
                <li class="my-3 fs-5"><i class="bi bi-check2-square px-2 text-skyblue_2"></i><span class="text-primary_2">width: 100%; </span>Para que el select ocupe todo el ancho de su contenedor.</li>
                <li class="my-3 fs-5"><i class="bi bi-check2-square px-2 text-skyblue_2"></i><span class="text-primary_2">padding: 7px 10px; </span>Para agregar espacio alrededor del texto del select.</li>
                <li class="my-3 fs-5"><i class="bi bi-check2-square px-2 text-skyblue_2"></i><span class="text-primary_2">height: 42px; </span>Para establecer la altura del select.</li>
                <li class="my-3 fs-5"><i class="bi bi-check2-square px-2 text-skyblue_2"></i><span class="text-primary_2">border-radius: 12px; </span>Para redondear las esquinas del select.</li>
                <li class="my-3 fs-5"><i class="bi bi-check2-square px-2 text-skyblue_2"></i><span class="text-primary_2">transition: all 0.25s ease; </span>Para agregar una transición suave a los cambios de estilo.</li>
              </ul>

            </article>

            <!-- appearance: base-select -->
            <article class="w-100 my-5 article">
              <h2 class="my-5 text-lila">appearance: base-select</h2>
              <p class="pathway-extreme-p text-justify"><span class="text-skyblue_2">appearance</span>: <span class="text-tomato">base-select</span> coloca el elemento <span class="text-amarillo">&lt;select&gt;</span> en un estado nuevo, configurable y con diseño que se conoce comúnmente como estilos "base":</p>

              <pre class="pre-content-list bg-blue_2 my-5">
                <code>
                  <span class="text-primary_2">select</span>, ::<span class="text-lila_2">picker</span>(<span class="text-primary_2">select</span>) {
                      &nbsp;&nbsp;&nbsp;<span class="text-amarillo">appearance</span>: <span class="text-skyblue_2">base-select</span>;
                  }
                </code>
              </pre>

              <div class="nota my-5">
                <div>
                  <span class="text-tomato"><i class="bi bi-exclamation-circle-fill"></i>Nota:</span>
                </div>
                <div>
                  <p></p>
                </div>
              </div>

              <div class="text-center my-4">
                <a href="../../../ejercicios/vida_mrr/select/select2/select.php" class="btn btn-outline-success" target="_blank">Ver
                  Funcionamiento</a>
              </div>

              <p class="pathway-extreme-p text-justify mt-5">El uso de base-select desbloquea varias funciones y comportamientos nuevos:</p>

              <ul>
                <li class="my-3 fs-5"><i class="bi bi-check2-square px-2 text-skyblue_2"></i><a class="btn-link" href="https://open-ui.org/components/customizableselect/#html-parser-changes" target="_blank">Cambia el analizador de HTML del navegador</a> para el contenido dentro de <span class="text-amarillo">&lt;select&gt;</span>.</li>
                <li class="my-3 fs-5"><i class="bi bi-check2-square px-2 text-skyblue_2"></i>Cambia los <a class="btn-link" href="https://open-ui.org/components/customizableselect/#anatomy-of-the-customizable-select-element" target="_blank">elementos internos renderizados</a> de <span class="text-amarillo">&lt;select&gt;</span>.</li>
                <li class="my-3 fs-5"><i class="bi bi-check2-square px-2 text-skyblue_2"></i>Expone nuevas partes y estados internos para <span class="text-amarillo">&lt;select&gt;</span>.</li>
                <li class="my-3 fs-5"><i class="bi bi-check2-square px-2 text-skyblue_2"></i>Un nuevo aspecto minimalista optimizado para la personalización.</li>
                <li class="my-3 fs-5"><i class="bi bi-check2-square px-2 text-skyblue_2"></i>Las <a class="btn-link" href="https://developer.mozilla.org/es/docs/Web/HTML/Reference/Elements/option" traget="_blank">opciones</a> que se muestran están en la capa superior, como un cuadro emergente.</li>
                <li class=" my-3 fs-5"><i class="bi bi-check2-square px-2 text-skyblue_2"></i>Las opciones que se muestran se posicionan con anchor().</li>
              </ul>

              <p class="pathway-extreme-p text-justify mt-5">Cuando usas base-select, se pierden varias funciones y comportamientos:</p>
              <ul>
                <li class="my-3 fs-5"><i class="bi bi-check2-square px-2 text-skyblue_2"></i>El <span class="text-amarillo">&lt;select&gt;</span> no se renderiza fuera del panel del navegador.</li>
                <li class="my-3 fs-5"><i class="bi bi-check2-square px-2 text-skyblue_2"></i>No activa los componentes integrados del sistema operativo para dispositivos móviles.</li>
                <li class="my-3 fs-5"><i class="bi bi-check2-square px-2 text-skyblue_2"></i><span class="text-amarillo">&lt;select&gt;</span> deja de tomar el ancho del <span class="text-lila_2">&lt;option&gt;</span> más largo.</li>
              </ul>


              <p class="pathway-extreme-p h4 my-5">Consideraciones</p>

              <h4 class="resaltado w-50 my-4">Compatibilidad con navegadores:</h4>
              <p class="pathway-extreme-p text-justify mt-5">Asegúrate de que las propiedades de estilo que utilizas sean compatibles con los navegadores que necesitas soportar.</p>

              <h4 class="resaltado w-50 my-4">Deshabilitar estilos predeterminados:</h4>
              <p class="pathway-extreme-p text-justify mt-5">Es importante eliminar los estilos predeterminados para poder personalizar el select completamente.</p>

              <h4 class="resaltado w-50 my-4">Pseudo-elementos:</h4>
              <p class="pathway-extreme-p text-justify mt-5">Utiliza pseudo-elementos como :before y :after para crear elementos adicionales, como flechas o iconos, que no están disponibles en el propio select.</p>

              <h4 class="resaltado w-50 my-4">Javascript:</h4>
              <p class="pathway-extreme-p text-justify mt-5">Si necesitas un mayor control sobre el comportamiento del select, puedes utilizar Javascript para manipular sus opciones y estados.</p>
            </article>
          </section>
        </main>
        <p class="pathway-extreme-p h4 my-5"></p>
        <p class="pathway-extreme-p text-justify mt-5"></p>
        <h4 class="resaltado w-50 my-4"></h4>
      </div>
    </div>
  </div>

<?php include_once "../../../../../../../templates/footer.php" ?>