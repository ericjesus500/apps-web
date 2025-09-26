<!-- CONTENIDO -->
<div class="row">
  <div class="col-md-3">
    <div class="indice">
      <nav>
        <ul class="">
          <li class="indice-item"><a href="#ini_css" rel="noopener noreferrer">Iniciando CSS</a>
            <ul class="sub-indice">
              <li class="sub-indice-item"><a href="#ins_css" rel="noopener noreferrer">Insertar CSS en HTML</a>
              </li>
              <li class="sub-indice-item"><a href="#sin_sel_css" rel="noopener noreferrer">Selectores CSS</a></li>
              <li class="sub-indice-item"><a href="#at_rules" rel="noopener noreferrer">at-rules</a></li>
              <li class="sub-indice-item"><a href="#selectores" rel="noopener noreferrer">Tipos de selectores</a>
              </li>
              <li class="sub-indice-item"><a href="#herencia" rel="noopener noreferrer">Herencia</a></li>
              <li class="sub-indice-item"><a href="#cascada" rel="noopener noreferrer">Cascada</a></li>
              <li class="sub-indice-item"><a href="#especificidad" rel="noopener noreferrer">Especificidad</a></li>
            </ul>
          </li>
          </li>
          <li class="indice-item"><a href="#reset" rel="noopener noreferrer">Resetear estilos</a></li>
          <li class="indice-item"><a href="#bem" rel="noopener noreferrer">Metodologia BEM</a></li>
          <li class="indice-item"><a href="#box_model" rel="noopener noreferrer">Box model</a></li>
          <li class="indice-item"><a href="#margin_padding" rel="noopener noreferrer">Margin y Padding</a></li>
          <li class="indice-item"><a href="#border" rel="noopener noreferrer">Border</a></li>
          <li class="indice-item"><a href="#outline" rel="noopener noreferrer">Outline</a></li>
          <li class="indice-item"><a href="#position" rel="noopener noreferrer">Position</a>
            <ul class="sub-indice">
              <li class="sub-indice-item"><a href="#pos_relative" rel="noopener noreferrer">Position Relative</a>
              </li>
              <li class="sub-indice-item"><a href="#z-index" rel="noopener noreferrer">z-index</a>
              </li>
              <li class="sub-indice-item"><a href="#pos_absolute" rel="noopener noreferrer">Position Absolute</a>
              </li>
              <li class="sub-indice-item"><a href="#pos_fixed" rel="noopener noreferrer">Position Fixed</a></li>
              <li class="sub-indice-item"><a href="#pos_sticky" rel="noopener noreferrer">Position sticky</a></li>
            </ul>
          </li>
          <li class="indice-item"><a href="#display" rel="noopener noreferrer">Propiedad Display</a>
            <ul class="sub-indice">
              <li class="sub-indice-item"><a href="#d_inline" rel="noopener noreferrer">Display: inline</a></li>
              <li class="sub-indice-item"><a href="#d_inline-block" rel="noopener noreferrer">Display:
                  inline-block</a></li>
            </ul>
          </li>
          <li class="indice-item"><a href="#pseudoelementos" rel="noopener noreferrer">Pseudo elementos</a></li>
          <li class="indice-item"><a href="#pseudoclases" rel="noopener noreferrer">Pseudo clases</a>
            <ul class="sub-indice">
              <li class="sub-indice-item"><a href="#dinamicas" rel="noopener noreferrer">Dinámicas</a>
              </li>
              <li class="sub-indice-item"><a href="#enlaces" rel="noopener noreferrer">De enlaces</a>
              </li>
              <li class="sub-indice-item"><a href="#lenguaje" rel="noopener noreferrer">De lenguaje</a>
              </li>
              <li class="sub-indice-item"><a href="#estado" rel="noopener noreferrer">De estado</a></li>
              <li class="sub-indice-item"><a href="#iteraccion" rel="noopener noreferrer">De iteracción</a></li>
              <li class="sub-indice-item"><a href="#validacion" rel="noopener noreferrer">De validación</a></li>
              <li class="sub-indice-item"><a href="#ejemplos" rel="noopener noreferrer">Ejemplos</a></li>
            </ul>
          </li>
          <li class="indice-item"><a href="#pseudo_clases_estructurales" rel="noopener noreferrer">Pseudo clases estructurales</a></li>
          <li class="indice-item"><a href="#variables" rel="noopener noreferrer">Variables CSS</a></li>
          <li class="indice-item"><a href="#background" rel="noopener noreferrer">Propiedad Background</a></li>
          <li class="indice-item"><a href="#imagenes" rel="noopener noreferrer">Imágenes enCSS</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <div class="col-md-9">
    <div class="contenido p-0">
      <!--Clase 1: Iniciando en CSS-->
      <section class="mt-5 mx-auto">

        <h1 id="ini_css">INICIANDO CSS</h1>

        <!-- Insertar CSS -->
        <article id="ins_css" class="mt-5 mx-auto">

          <h2><span>Insertar CSS en HTML</span></h2>
          <p class="destacado my-5 mx-auto">Existen 4 formas de incluir CSS en un documento HTML</p>
          <ul>
            <li><span class="text-tomato me-2"><i class="bi bi-journal-check"></i></span>En la cabecera &lt; head &gt;: a través de la etiqueta &lt; style &gt; pero no es recomendable.</li>
            <pre class="pre-content-list bg-blue_2 my-5 mx-auto">
              <code>
                &lt;head&gt;
                &nbsp;&nbsp;&nbsp;&lt;style&gt;código css&lt;/style&gt;
                &lt;/head&gt;
              </code>
            </pre>
            <li><span class="text-tomato me-2"><i class="bi bi-journal-check"></i></span>En línea, es decir dentro de la etiqueta. No recomendado para estilos
              estáticos. Generalmente se utiliza con
              JavaScript para cambiar estilos de forma dinámica, es decir, en tiempo de ejecución.</li>
            <pre class="pre-content-list bg-blue_2 my-5 mx-auto">
              <code>
                &lt;p style ="codigo css&gt;"
              </code>
            </pre>
            <li><span class="text-tomato me-2"><i class="bi bi-journal-check"></i></span>Asociando una hoja de estilos externa al documento HTML. Es la forma
              recomendada porque permite reutilizar el código.</li>
            <pre class="pre-content-list bg-blue_2 my-5 w-100">
                <code>
                  &lt;link rel="stylesheet" type="text/css" href="styles.css"&gt;
                </code>
              </pre>
            <li><span class="text-tomato me-2"><i class="bi bi-journal-check"></i></span>A través de @import dentro de las etiquetas &lt;style&gt;&lt;/style&gt;.
              Esta forma no se recomienda para evitar posibles fallos.</li>
            <pre class="pre-content-list bg-blue_2 my-5 w-100">
                <code>
                  &lt;style&gt;
                    &nbsp;&nbsp;&nbsp;@import url&#40"styles.css"&#41
                  &lt;/style&gt;
                </code>
              </pre>
          </ul>

        </article>

        <!-- Sintaxis y selectore -->
        <article id="sin_sel_css" class="mt-5 mx-auto">
          <h2><span>Sintaxis y selectores de CSS</span></h2>
          <pre class="pre-content-list bg-blue_2 my-5">
            <code>
              selector&#123
                &nbsp;&nbsp;&nbsp;propiedad: valor;
                &nbsp;&nbsp;&nbsp;...............
              &#125

              Ejemplo:

              body&#123
                &nbsp;&nbsp;&nbsp;background:red;
              &#125
            </code>
          </pre>
        </article>

        <!-- Reglas preprogramadas en CSS: at-rules -->
        <article id="at_rules" class="mt-5 mx-auto">
          <h2><span>Reglas preprogramadas en CSS: at-rules</span></h2>
          <ul class="my-5">
            <li><span class="text-tomato me-2"><i class="bi bi-journal-check"></i></span>@media&#123&#125</li>
            <li><span class="text-tomato me-2"><i class="bi bi-journal-check"></i></span>@font-face&#123&#125</li>
            <li><span class="text-tomato me-2"><i class="bi bi-journal-check"></i></span>@keyframes&#123&#125</li>
            <li><span class="text-tomato me-2"><i class="bi bi-journal-check"></i></span>@import&#123&#125</li>
          </ul>
        </article>

        <!-- Tipos de selectores -->
        <article id="selectores" class="mt-5 mx-auto">
          <h2><span>Tipos de selectores</span></h2>
          <p class="destacado my-5">Un selector hace referencia al elemento al que se le aplicará estilos.</p>
          <h3>Selectores Básicos</h3>
          <h4 class="my-5"><i class="bi bi-chevron-double-right me-2"></i>Selectores a través de atributos</h4>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              EjemploS:

              <span class="comentario">//Selecciona los elementos que tengan el atributo href:</span>
              [href]&#123
                &nbsp;&nbsp;&nbsp;color: green;
              &#125

              <span class="comentario">//Selecciona los elementos que tengan el atributo href con un valor</span>
              [href="valor"]&#123
                &nbsp;&nbsp;&nbsp;color:red;
              &#125

              <span class="comentario">//Selecciona los elementos que tengan el atributo con su valor al menos una vez</span>
              [class ~= "valor"]&#123
                &nbsp;&nbsp;&nbsp;color:red;
              &#125

              <span class="comentario">//Selecciona los elementos que tengan el atributo exactamente con su valor o empiece por el valor seguido de un guión</span>
              [class |= "valor"]&#123
                &nbsp;&nbsp;&nbsp;color:red;
              &#125

              /* Seleccionar los elementos que tienen ese atributo y empiezan por ese valor*/
              [class^="rojo"]&#123
                &nbsp;&nbsp;&nbsp;color:purple;
              &#125

              <span class="comentario">/* Seleccionar los elementos que tienen ese atributo y terminan por ese valor*/</span>
              [class$="rojo"]</span>&#123
                &nbsp;&nbsp;&nbsp;color:steelblue;
              &#125

              <span class="comentario">/* Seleccionar los elementos que tienen ese atributo y contengan ese valor*/</span>
              [class*="rojo"]&#123
                &nbsp;&nbsp;&nbsp;color:brown;
              &#125
            </code>
          </pre>

          <h4 class="my-5"><i class="bi bi-chevron-double-right me-2"></i>Selectores Combinadores</h4>
          <ul>
            <li><span class="text-tomato me-2"><i class="bi bi-journal-check"></i></span>Selectores de hermanos adyacentes
              <p class="mt-4">Selecciona al hermano que esté justo por debajo de el. El estilo se aplica al hermano inferior.</p>
            </li>
            <pre class="pre-content-list bg-blue_2 my-5 w-100">
              <code>
                h1 + h2&#123
                  &nbsp;&nbsp;&nbsp;color:red;
                &#125
              </code>
            </pre>
            <li><span class="text-tomato me-2"><i class="bi bi-journal-check"></i></span>Selector de hermano general
              <p class="mt-4">Selecciona todos los hermanos que estén por debajo de él. El estilo se aplica a todos los hermanos.
              </p>
            </li>
            <pre class="pre-content-list bg-blue_2 my-5 w-100">
              <code>
                h1 ~ h3&#123
                  &nbsp;&nbsp;&nbsp;color: green;
                &#125
              </code>
            </pre>
            <li><span class="text-tomato me-2"><i class="bi bi-journal-check"></i></span>Selectores descendientes
              <p class="mt-4">Selecciona todos los hijos. El estilo se aplica a todos los hijos.</p>
            </li>
            <pre class="pre-content-list bg-blue_2 my-5 w-100">
              <code>
                div span&#123
                  &nbsp;&nbsp;&nbsp;color: red;
                &#125
              </code>
            </pre>
            <li><span class="text-tomato me-2"><i class="bi bi-journal-check"></i></span>Selector de hijo directo
              <p class="mt-4">Selecciona todos los hijos que sean directos, es decir que no estén dentro de otras etiquetas. El estilo se aplica a todos los hijos.</p>
            </li>
            <pre class="pre-content-list bg-blue_2 my-5 w-100">
              <code>
                p > span&#123
                  &nbsp;&nbsp;&nbsp;color: blue;
                &#125
              </code>
            </pre>
          </ul>
        </article>

        <!-- Herencia -->
        <article id="herencia" class="mt-5 mx-auto">
          <h2><span>Herencia</span></h2>
          <p class="my-5">Se aplica con el valor <b>inherit</b>, esto obliga al elemento a heredar la propiedad de su elemento más cercano.</p>
        </article>

        <!-- Cascada -->
        <article id="cascada" class="mt-5 mx-auto">
          <h2><span>Cascada</span></h2>
          <p class="destacado my-5">Es el orden en el que se le aplicarán los estilos al ir leyendo el CSS. Los estilos que vienen después sobreescriben a los anteriores.</p>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              p &#123color:red;&#125

              ....mas codigo css

              p &#123color:green;&#125
            </code>
          </pre>
          <p>Debido a que los estilos se aplican a una misma etiqueta (p) la especificidad queda inaplicable para dar paso a la cascada
            Los párrafos finalmente se pintarán de color verde porque es lo último que se declara.</p>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              .parrafo &#123color:red;&#125

              ....mas codigo css

              p &#123color:green;&#125
            </code>
          </pre>
          <p>En este caso no se aplica la cascada sino la ESPECIFICIDAD ya que la clase tiene más peso que la etiqueta.</p>
        </article>

        <!-- Especificidad -->
        <article id="especificidad" class="mt-5 mx-auto">
          <h2><span>Especificidad</span></h2>
          <p class="destacado my-5">Es el peso que tienen un selector que se ejecuta cuando existen conflicto de estilos.
            GANA A LA CASCADA</p>
          <table class="tabla-outline">
            <thead>
              <tr>
                <th>
                  Selector
                </th>
                <th>
                  Peso
                </th>
                <th>
                  Ejemplo
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  Etiqueta
                </td>
                <td>
                  0, 0, 0, 1
                </td>
                <td>
                  a{color:inherit;}
                  <span class="comentario">//etiqueta a coje el color de su padre</span>
                </td>
              </tr>
              <tr>
                <td>
                  Clases y pseudoclases
                </td>
                <td>
                  0, 0, 1, 0
                </td>
                <td>
                  .parrafo{color:green;}
                </td>
              </tr>
              <tr>
                <td>
                  ID
                </td>
                <td>
                  0, 1, 0, 0
                </td>
                <td>
                  #parrafo{color:red;}
                </td>
              </tr>
              <tr>
                <td>
                  Estilos en línea
                </td>
                <td>
                  1, 0, 0, 0
                </td>
                <td>
                  &lt;p style="color: red;"&gt;
                </td>
              </tr>
              <tr>
                <td>
                  !import
                </td>
                <td>
                  Gana a todos
                </td>
                <td>
                  p{color:blue !import;}
                </td>
              </tr>
            </tbody>
          </table>
        </article>
      </section>

      <!--Clase 3: Resetear stylos de los navegadores-->
      <section class="mt-5 mx-auto">

        <h1 id="reset">Resetear estilos por defecto de los navegadores</h1>

        <!-- Normalize -->
        <article id="normalize" class="mt-5 mx-auto">
          <p class="destacado my-5">Se utiliza la hoja CSS pre fabricada de Normalize.</p>
          <p>Se puede descargar <span>normalize</span> de <a href="https://" target="_blank" rel="noopener noreferrer">aqui</a></p>
          <p>Sólo se debe agregar la siguiente linea CSS</p>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              img&#123
                &nbsp;&nbsp;&nbsp;max-width: 100%;
              &#125

              *&#123
                &nbsp;&nbsp;&nbsp;box-sizing: border-box;
              &#125
            </code>
          </pre>
        </article>
      </section>

      <!--Clase 4: Metodologia BEM-->
      <section class="mt-5 mx-auto">

        <h1 id="bem">Metodología BEM</h1>

        <article class="mt-5 mx-auto">
          <h2><span>Metodologías en CSS</span></h2>
          <p class="destacado my-5">Una metodología en CSS son una serie de normas para estructurar las clases de una forma sencilla, escalable y reutilizable.</p>
          <ul>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>BEM</span> = Block Element Modifier.</li>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>Block</span>.- Es cualquier elemento autónomo y aislado de nuestro
              documento. Un menú, una galería, un formulario, etc.</li>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>Element</span>.- Es cada uno de los elementos del bloque. Un link,
              una foto, un campo de texto, etc.</li>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>Modifier</span>.- Cuando un bloque se repite en otro lugar de
              nuestra web pero con alguna modificación: el color del texto, el tamaño de la fuente, etc.</li>
          </ul>
        </article>

        <article class="mt-5 mx-auto">
          <h2><span>Forma de escibir con BEM</span></h2>
          <p class="destacado my-5">Los bloques se pueden denominar con una sola palabra o con 2 palabras separadas con un guión </p>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              Ejemplo
              .menu -> .main-menu
              .gallery -> .main-gallery
            </code>
          </pre>
          <p>Los elementos se nombran con el nombre del bloque al que pertenecen y su nombre con 2 guiones bajos __</p>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              Ejemplo:

              .menu__item / .main-menu__link
              .gallery__img / .main-gallery__item
            </code>
          </pre>
          <p>Los modificadores se nombran con el nombre del bloue al que pertenecen y su modificador con 2 guiones.</p>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              .menu__item--active
              .gallery__item--special
            </code>
          </pre>
        </article>
      </section>

      <!--Clase 5: Box Model-->
      <section class="mt-5 mx-auto">

        <h1 id="box_model">Box model</h1>

        <article class="mt-5 mx-auto">

          <h2><span>Modelo de caja</span></h2>
          <p class="destacado my-5">En la web todo son cajas, al conjunto de esas cajas y a la forma en que el navegador los dibjua se le denomina LAYOUT</p>
          <ul>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>
              Las propiedades principales de cada una de estas cajas son el ancho &#40width&#41 y el alto
              &#40height&#41.
            </li>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>Existen 2 tipos de elementos en HTML, los elementos en línea &#40inline&#41 y los
              elementos de
              bloque &#40block&#41. Estas propiedades se pueden modificar con el atributo display.</li>
          </ul>

          <div class="text-center my-5">
            <img src="./css_basico/img/box_model.png" alt="box_model" class="my-5 img-fluid">
          </div>

          <h4 class="my-5">Elementos en línea &#40inline&#41</h4>
          <ul>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>Son elementos que sólo ocupan su contenido.</li>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>No se puede modificar ni su alto ni su ancho.</li>
          </ul>
          <h4 class="my-5">Elementos de bloque &#40block&#41</h4>
          <ul>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>Ocupan todo el ancho disponible del viewport.</li>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>Se les puede asignar ancho y alto. Por defecto el ancho es todo el espacio
              disponible y el alto va a ser lo que ocupe su contenido. A excepción del <strong>h1</strong> y
              el <strong>p</strong> a los que se les debe resetear los estilos por defecto de los
              navegadores.</li>
          </ul>

        </article>
      </section>

      <!--Clase 6: Margin y Padding-->
      <section class="mt-5 mx-auto">

        <h1 id="margin_padding">Margin, padding</h1>

        <!-- Margin -->
        <article id="margin" class="mt-5 mx-auto">
          <h2><span>Margin</span></h2>
          <p class="destacado my-5">Es la separación entre una caja y las cajas adyacentes.</p>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              margin: 1em;
            </code>
          </pre>
          <p>La propiedad <strong>margin</strong> es un shorthand de:</p>
          <ul>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>marging-top: Establece el margen superior</li>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>margin-right: Establece el margen derecho</li>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>margin-bottom: Establece el margen inferior</li>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>margin-left: Establece el margen inferior</li>
          </ul>
          <table class="ms-5 mt-5 tabla-outline">
            <thead>
              <tr>
                <th>Valores</th>
                <th>Se aplica a:</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>margin:1em;</td>
                <td>top right bottom left</td>
              </tr>
              <tr>
                <td>margin: 1em 2em;</td>
                <td>[top-bottom], [left-right]</td>
              </tr>
              <tr>
                <td>margin:1em 2em 3em</td>
                <td>top, [left-right], bottom</td>
              </tr>
              <tr>
                <td>margin: 1em 2em 3em 4em</td>
                <td>top right bottom left</td>
              </tr>
            </tbody>
          </table>
        </article>

        <!-- Padding -->
        <article id="padding" class="mt-5 mx-auto">
          <h2><span>Padding</span></h2>
          <p class="destacado my-5">Es la separación entre el contenido y su borde.</p>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
              <code>
                padding: 2em;
              </code>
            </pre>
          <p>La propiedad <strong>padding</strong> es un shorthand</p>
          <ul>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>padding-top</li>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>padding-right</li>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>padding-bottom</li>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>padding-left</li>
          </ul>
          <table class="ms-5 mt-5 tabla-outline">
            <thead>
              <tr>
                <th>Valores</th>
                <th>Se aplica a:</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>padding:1em;</td>
                <td>top right bottom left</td>
              </tr>
              <tr>
                <td>padding: 1em 2em;</td>
                <td>[top-bottom], [left-right]</td>
              </tr>
              <tr>
                <td>padding:1em 2em 3em</td>
                <td>top, [left-right], bottom</td>
              </tr>
              <tr>
                <td>padding: 1em 2em 3em 4em</td>
                <td>top right bottom left</td>
              </tr>
            </tbody>
          </table>
        </article>

      </section>

      <!--Border-->
      <section class="mt-5 mx-auto">
        <h1>Border</h1>
        <article id="border" class="mt-5 mx-auto">
          <h2><span>Border</span></h2>
          <p class="destacado my-5">Es la propiedad que le da un estilo al borde de una caja. Es la línea que rodea la caja</p>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              border:1px solid blue;
            </code>
          </pre>
          <p>La propiedad <strong>border</strong> es un shorthand</p>
          <p>Las propiedades de los bordes son:</p>
          <dl class="text-tomato ms-5">width
            <dt class="ms-5">Establece el ancho del borde.</dt>
          </dl>
          <dl class="text-tomato ms-5">style
            <dt class="ms-5">Establece la forma o modelo del borde.</dt>
          </dl>
          <dl class="text-tomato ms-5">color
            <dt class="ms-5">Establece el color del borde.</dt>
          </dl>
          <p class="mt-5">Existen muchas combinaciones</p>
          <table class="ms-5 mt-5 tabla-outline">
            <thead>
              <tr>
                <th>Valores</th>
                <th>Se aplica a:</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>border-width:2px;</td>
                <td>top right bottom left</td>
              </tr>
              <tr>
                <td>border-style:solid dashed;</td>
                <td>[top-bottom], [left-right]</td>
              </tr>
              <tr>
                <td>border-color:red bluegreen</td>
                <td>top, [left-right], bottom</td>
              </tr>
              <tr>
                <td>border-width:2px 3px 4px 5px</td>
                <td>top right bottom left</td>
              </tr>
            </tbody>
          </table>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              Border

              border-width
              px|em|rem|%|....
              <div class="div-pre">
                border-style
                none|hidden|dotted|dashed|solid|double|groove|ridge|inset|outset|initial|inherit;
              </div>

              *Estas medidas dependen del navegador*
              thick (ancho)
              medium (medio)
              thin (fino)
              <div class="div-pre">
                border-color
                css native|rgb|rgba|hsl|hsla|hexadecimal|transparent

                border-top-(width | style | color)
                border-right-(width | style | color)
                border-bottom-(width | style | color)
                border-left-(width | style | color)
              </div>
            </code>
          </pre>
        </article>
      </section>

      <!--Outline -->
      <section class="mt-5 mx-auto">
        <h1>Outline</h1>
        <article id="outline" class="mt-5 mx-auto">
          <h2><span>Outline</span></h2>
          <p class="destacado my-5">Es la línea que rodea la caja entre el <b>borde</b> y el <b>margin</b></p>
          <div class="text-center my-5">
            <img src="./css_basico/img/outline.png" alt="outline" class="img-fluid">
          </div>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              outline: 1px solid orange;
            </code>
          </pre>
          <p>Outline es un shorthand.</p>
          <p>Sus propiedades son:</p>
          <dl class="text-tomato ms-5">width
            <dt class="ms-5">Establece el ancho del outline de la caja.</dt>
          </dl>
          <dl class="text-tomato ms-5">style
            <dt class="ms-5">Establece el modelo del outline de la caja.</dt>
          </dl>
          <dl class="text-tomato ms-5">color
            <dt class="ms-5">Establece el color del outline de la caja.</dt>
          </dl>
          <dl class="text-tomato ms-5">offset
            <dt class="ms-5">Establece la separación del outline con el borde de la caja.</dt>
          </dl>
          <p class="mt-5">Existen varias combinaciones</p>
          <table class="tabla-outline my-5">
            <thead>
              <tr>
                <th>Valores</th>
                <th>Se aplica a:</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>outline-width:2px;</td>
                <td>top right bottom left</td>
              </tr>
              <tr>
                <td>outline-style:solid dashed;</td>
                <td>[top-bottom], [left-right]</td>
              </tr>
              <tr>
                <td>outline-color:red bluegreen</td>
                <td>top, [left-right], bottom</td>
              </tr>
              <tr>
                <td>outline-width:2px 3px 4px 5px</td>
                <td>top right bottom left</td>
              </tr>
              <tr>
                <td>outline-offset:+-px | em | rem ... </td>
                <td>top right bottom left</td>
              </tr>
            </tbody>
          </table>
          <p>outline-offset produce una linea que se separa de la caja la cantidad de medida que
            se le asigne. No empuja a los elementos adyacentes sino que se monta.</p>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              .img&#123
                &nbsp;&nbsp;&nbsp;border: 5px solid lightcoral;
                &nbsp;&nbsp;&nbsp;outline: 5px dotted blue;
                &nbsp;&nbsp;&nbsp;outline-offset: 25px; //se separa 25px de la caja
              &#125
            </code>
          </pre>
          <div class="text-center my-5">
            <img src="./css_basico/img/outline_offset.png" alt="outline_offset" class="img-fluid">
          </div>
          <p class="list-item">Tambien acepta valores negativos</p>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              outline-offset: -25px;
            </code>
          </pre>
          <div class="text-center my-5">
            <img src="./css_basico/img/outline_offset_in.png" alt="outline_offset_in" class="img-fluid">
          </div>
          <p class="list-item">Efecto utilizado en fotos:</p>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              [class*=box]{
                &nbsp;&nbsp;&nbsp;width: 400px;
                &nbsp;&nbsp;&nbsp;margin: 2em auto;
                &nbsp;&nbsp;&nbsp;position: relative;
                &nbsp;&nbsp;&nbsp;display: flex;
                &nbsp;&nbsp;&nbsp;justify-content: center;
                &nbsp;&nbsp;&nbsp;align-items: center;
              }

              .text{
                &nbsp;&nbsp;&nbsp;position: absolute;
                &nbsp;&nbsp;&nbsp;color: lightcoral;
                &nbsp;&nbsp;&nbsp;font-size: 3em;
              }
            </code>
          </pre>
          <div class="text-center my-5">
            <img src="./css_basico/img/outline_efecto_foto.png" alt="outline_efecto_foto" class="img-fluid">
          </div>
        </article>
      </section>

      <!--Clase 9: Flujo en HTML-->
      <section class="mt-5 mx-auto">

        <h1>Position</h1>

        <!-- Position -->
        <article id="position" class="mt-5 mx-auto">
          <h2><span>El flujo en HTML</span></h2>
          <p class="destacado my-5">El <strong>flujo</strong> en HTML es el orden en el que aparecen los elementos en el navegador.</p>
          <ul>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>Position es la propiedad que nos permite modificar el flujo en HTML.</li>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>Los valores de position son:
              <ul class="my-5">
                <li class="ms-5"><i class="bi bi-chevron-right text-skyblue_2"></i>static: Valor por defecto</li>
                <li class="ms-5"><i class="bi bi-chevron-right text-skyblue_2"></i>Relative</li>
                <li class="ms-5"><i class="bi bi-chevron-right text-skyblue_2"></i>Absolute</li>
                <li class="ms-5"><i class="bi bi-chevron-right text-skyblue_2"></i>Fixed</li>
                <li class="ms-5"><i class="bi bi-chevron-right text-skyblue_2"></i>Sticky</li>
              </ul>
            </li>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>Al tener posicionado un elemento se puede mover en los 3 ejes.
              <ul class="my-5">
                <li><strong>top:</strong> Se mueve el elemento en relación a la parte
                  superior</li>
                <li><strong>right:</strong> Se mueve el elemento en relación a la parte
                  derecha</li>
                <li><strong>bottom:</strong> Se mueve el elemento en relación a la parte
                  inferior</li>
                <li><strong>left:</strong> Se mueve el elemento en relación a la parte
                  izquierda</li>
                <li><strong>z-index:</strong> Se mueve el elemento en el eje Z.</li>
              </ul>
            </li>
            <li><i class="bi bi-check-all me-2 text-tomato"></i>Position a menudo se utiliza con 2 propiedades: visibility y display
              <ul class="my-5">
                <li>Propiedad <span>visibility: hidden</span>
                  <p>Con la propiedad visibility y su valor hidden el elemento HTML se oculta pero el espacio que
                    ocupa en el flujo del documento HTML se reserva.</p>
                </li>
                <figure class="m-auto my-5">
                  <img class="img_75" src="img/visibility.PNG" alt="visibility">
                </figure>
                <li>Propiedad <span>display: none</span>
                  <p>Con la propiedad display y su valor none el elemento HTML se oculta y NO se reserva su espacio.
                  </p>
                </li>
              </ul>
            </li>
          </ul>
        </article>

        <!--Position Relative-->
        <article id="pos_relative" class="mt-5 mx-auto">
          <h2><span>Position: relative</span></h2>
          <p class="destacado my-5">El valor relative hace que el elemento se coloque respecto a su posición en el flujo.</p>
          <ul class="mt-5">
            <li><i class="bi bi-check-all text-tomato me-2"></i>Se puede mover el elemento con top, right, bottom, left y z-index.</li>
            <li><i class="bi bi-check-all text-tomato me-2"></i>Al mover el elemento su espacio queda reservado.</li>
            <li><i class="bi bi-check-all text-tomato me-2"></i>Su punto de referencia no se modificará aunque el elemento sea movido.
              <figure class="m-auto">
                <img class="img_75 my-5" src="img/relative.PNG" alt="position relative">
              </figure>
            </li>
            <li><i class="bi bi-check-all text-tomato me-2"></i>Un posicionamiento definido por <strong>top</strong> y <strong>left</strong> tiene mayor peso que un posicionamiento con <strong>bottom</strong> y <strong>right</strong>.</li>
          </ul>
          <p class="my-5"><i class="bi bi-chevron-right text-skyblue_2"></i>Posición original</p>
          <div class="my-5 borde m-auto div-position">
            <div class="borde box">Box 1</div>
            <div class="borde box">Box 2</div>
          </div>
          <p class="my-5"><i class="bi bi-chevron-right text-skyblue_2"></i>Nueva posición del Box 1</p>
          <ul class="list">
            <li>position:relative;</li>
            <li>top: 20px;</li>
            <li>right: 200px;</li>
          </ul>
          <div class="my-5 borde m-auto div-position">
            <div class="borde box pos-box-1">Box 1
            </div>
            <div class="borde box">Box 2</div>
          </div>
          <p class="my-5">Nueva posición del Box 2</p>
          <ul class="list">
            <li>Box 1 vuelve a su posición original</li>
            <li>position:relative;</li>
            <li>top: -50px;</li>
            <li>right: -50px;</li>
          </ul>
          <div class="my-5 borde m-auto div-position">
            <div class="borde box">Box 1</div>
            <div class="borde box pos-box-2">Box 2</div>
          </div>
        </article>

        <!-- z-index -->
        <article id="z-index" class="mt-5 mx-auto">
          <h2><span>z-index</span></h2>
          <p class="destacado my-5">Esta propiedad nos permite modificar el orden de las capas en el eje z
            &#40profundidad&#41.</p>
          <ul class="my-5">
            <li><i class="bi bi-check-all text-tomato me-2"></i>Admite valores positivos y negativos.Es recomendable usar valores NO consecutivos. Es recomendable valores como: 100, 200, 300</li>
            <li><i class="bi bi-check-all text-tomato me-2"></i>Si el padre tiene z-index declarado NO se puede poner a un hijo por encima.</li>
            <li><i class="bi bi-check-all text-tomato me-2"></i>No se admiten valores decimales.</li>
            <li><i class="bi bi-check-all text-tomato me-2"></i>Al posicionar un elemento automáticamente adquiere la propiedad <strong>z-index.</strong>
            </li>
            <li><i class="bi bi-check-all text-tomato me-2"></i>De haber más de un elemento posicionado se tomará en cuenta el flujo en el que se han creado los elementos para definir su respectivo <strong>z-index</strong>. El último en el flujo se renderizará por encima de los demás.</li>
          </ul>
          <div class="text-center my-5">
            <img src="./css_basico/img/z-index.png" alt="z-index" class="img-fluid">
          </div>
          <div class="my-5 borde m-auto div-position-zindex">
            <div class="borde box box-1">Box 1</div>
            <div class="borde box box-2">Box 2</div>
            <div class="borde box box-3">Box 3</div>
            <div class="borde box box-4">Box 4</div>
          </div>
          <ul class="my-5">
            <li><i class="bi bi-check-all text-tomato me-2"></i>z-index permite super-posicionar cualquier elemento, para ello se debe asignar un valor numérico</li>
            <li><i class="bi bi-check-all text-tomato me-2"></i>El elemento que tenga el mayor valor numérico se posicionará por encima de todos los demás</li>
          </ul>
          <div class="my-5 borde m-auto div-super-position-zindex">
            <div class="borde box box-1">Box 1</div>
            <div class="borde box box-2">Box 2</div>
            <div class="borde box box-3">Box 3</div>
            <div class="borde box box-4">Box 4</div>
          </div>
          <div class="div-video mx-auto my-5">
            <video controls class="img_100">
              <source src="./css_basico/videos/10-position-relative.mp4" type="video/mp4">
            </video>
          </div>
        </article>

        <!--Position Absolute-->
        <article id="pos_absolute" class="mt-5 mx-auto">
          <h2><span>Position: absolute</span></h2>
          <p class="destacado my-5">Position absolute hace que el elemento se posicione respecto a su contenedor más cercano,
            sino encuentra uno tomará como referencia el <strong>viewport.</strong>
          </p>
          <ul class="my-5">
            <li><i class="bi bi-check-all text-tomato me-2"></i>El elemento no conserva su espacio en el flujo, es decir, desaparece del flujo.</li>
            <li><i class="bi bi-check-all text-tomato me-2"></i>Si no tienen dimensiones declaradas, sus dimensiones se ajustarán al contenido.</li>
            <li><i class="bi bi-check-all text-tomato me-2"></i>El punto de referencia no se modificará aunque el elemento sea movido.</li>
            <li>
              <p class="mt-5">Posición original</p>
              <div class="div-pos-absolute m-auto borde">
                <div class="borde box">box 1</div>
                <div class="borde box">box 2</div>
                <div class="borde box">box 3</div>
                <div class="borde box">box 4</div>
                <div class="borde box">box 5</div>
              </div>
            </li>
            <li>
              <p class="mt-5"><strong>box-4</strong></p>
              <ul class="my-5">
                <li><i class="bi bi-chevron-right text-skyblue_2"></i>position: absolute;</li>
                <li><i class="bi bi-chevron-right text-skyblue_2"></i>left: 200px;</li>
                <li><i class="bi bi-chevron-right text-skyblue_2"></i>El contenedor padre debe estar posicionado de manera relativa</li>
              </ul>
              <div class="div-pos-absolute m-auto borde">
                <div class="borde box box-1">box 1</div>
                <div class="borde box box-2">box 2</div>
                <div class="borde box box-3">box 3</div>
                <div class="borde box box-4">box 4</div>
                <div class="borde box box-5">box 5</div>
              </div>
            </li>
          </ul>
          <h4>Ejercicio</h4>
          <ul class="my-5">
            <li><i class="bi bi-chevron-right text-skyblue_2"></i>BOX 1: position: absolute; top:0; left:0;</li>
            <li><i class="bi bi-chevron-right text-skyblue_2"></i>BOX 2: position: absolute; top:0; right:0;</li>
            <li><i class="bi bi-chevron-right text-skyblue_2"></i>BOX 3: position: absolute; bottom:0; left:0;</li>
            <li><i class="bi bi-chevron-right text-skyblue_2"></i>BOX 4: position: absolute; bottom:0; right:0;</li>
            <li><i class="bi bi-chevron-right text-skyblue_2"></i>BOX 5: position: absolute; top:0; right:0; bottom:0; left:0x; margin:auto;</li>
            <li class="mt-5">
              <div class="div-pos-abs-ejerc m-auto borde">
                <div class="borde box box-1">BOX 1</div>
                <div class="borde box box-2">BOX 2</div>
                <div class="borde box box-3">BOX 3</div>
                <div class="borde box box-4">BOX 4</div>
                <div class="borde box box-5">BOX 5</div>
              </div>
            </li>
          </ul>
        </article>

        <!--Position fixed-->
        <article id="pos_fixed" class="mt-5 mx-auto">
          <h2><span>position: fixed;</span></h2>
          <p class="destacado my-5">El valor fixed hace que el elemento se coloque respecto al viewport. Funciona muy parecido a position absolute.</p>
          <ul class="my-5">
            <li><i class="bi bi-check-all text-tomato me-2"></i>El elemento pierde sus medidas y no conserva su espacio en el flujo.</li>
            <li><i class="bi bi-check-all text-tomato me-2"></i>Si no tienen dimensiones declaradas, sus dimensiones se ajustan al contenido.</li>
            <li><i class="bi bi-check-all text-tomato me-2"></i>Si se mueve usará el elemento <b>html</b> como referencia.</li>
            <li><i class="bi bi-check-all text-tomato me-2"></i>Su punto de referencia no se modifica aunque el elemento sea movido.</li>
            <li><i class="bi bi-check-all text-tomato me-2"></i>Cuando se hace scroll el elemento no se moverá, se queda fijo.</li>
          </ul>
          <p class="my-5 ms-5"><a href="./paginas/fixed.html" target="_blank">Ver ejemplo</a></p>
        </article>

        <!--Position sticky-->
        <article id="pos_sticky" class="mt-5 mx-auto">
          <h2><span>Position sticky</span></h2>
          <p class="destacado my-5">El valor sticky es una mezcla entre <strong>relative</strong> y <strong>fixed</strong></p>
          <ul class="my-5">
            <li><i class="bi bi-check-all text-tomato me-2"></i>El elemento conserva su espacio en el flujo.</li>
            <li><i class="bi bi-check-all text-tomato me-2"></i>Si no tiene dimensiones declaradas, sus dimensiones se ajustan a su contenido.</li>
            <li><i class="bi bi-check-all text-tomato me-2"></i>Su punto de referencia no se moverá aunque se mueva el elemento.</li>
            <li><i class="bi bi-check-all text-tomato me-2"></i>Cuando se hace scroll el elemento se moverá hasta alcanzar el tope establecido.</li>
          </ul>
          <div class="div-position-sticky borde m-auto">
            <div class="borde bg-skyblue_2 slide">Slide</div>
            <div class="borde bg-black text-white menu">Menu</div>
            <h1 class="title">Titulo</h1>
            <p class="text">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio nisi vero magni dolor quaerat quasi
              doloremque saepe possimus cumque nesciunt hic id laborum sint magnam veniam nobis natus doloribus,
              sunt ab nostrum eligendi cupiditate quisquam asperiores earum. Sunt dolores doloribus rem ratione
              libero repellat, voluptate modi! Adipisci ab illum ratione aspernatur odit, ullam suscipit enim rem
              nihil reiciendis hic architecto delectus laborum ipsam similique incidunt perspiciatis ex quas ea
              eum molestias sint? Provident dolores amet illo aliquid, autem quis inventore ut itaque molestias
              placeat numquam, eos illum ea cum rerum exercitationem, laboriosam nesciunt voluptate maxime ipsum
              animi debitis? Cupiditate et temporibus error maiores nulla, quasi fugiat quo possimus neque
              laboriosam nemo qui excepturi, distinctio odio. Fuga illum harum amet quisquam beatae nihil aperiam
              voluptas nemo ex officiis. Sequi earum nam iste eius sapiente! Corrupti accusantium recusandae ad
              eveniet quos assumenda corporis esse officia dolore iusto, alias impedit, incidunt eligendi ipsam
              error mollitia quisquam. Nihil quasi magni, libero quas aliquid pariatur illum dolor ducimus
              exercitationem cum dolorum, nisi rem! Iste saepe nisi veritatis, officia, accusantium quisquam,
              excepturi nesciunt modi ex natus animi. Cumque deleniti ipsa non odio, perspiciatis culpa distinctio
              neque numquam, consequuntur ipsum illum officiis veniam maiores! Blanditiis laboriosam dolorem ea
              consectetur totam quo? Reiciendis dignissimos distinctio pariatur. Dolor temporibus commodi error
              quas est neque saepe provident, perferendis modi laborum necessitatibus nisi. Impedit earum ullam
              dicta aliquid commodi alias dolorum quae architecto libero id! Labore, exercitationem quos. Cumque
              sapiente exercitationem quasi, delectus id accusantium cupiditate unde ratione laudantium, totam
              natus. Sint, neque officia. Quo maiores facilis dolorum eius deleniti quam excepturi exercitationem
              aliquam? Impedit voluptatem non corporis. Tempora, ipsam reiciendis molestias placeat iusto
              cupiditate. Maiores, explicabo magnam officiis eos velit earum ullam dolore officia adipisci alias
              ratione accusamus praesentium rerum, laborum, perferendis excepturi iste repudiandae fuga
              consequatur impedit vitae fugit? Earum pariatur, libero eos minus commodi atque quod aspernatur
              quasi accusantium necessitatibus quis non delectus harum eum aut? Delectus sapiente minus soluta
              praesentium perferendis repellat neque explicabo odit quam labore error expedita earum aliquam iusto
              unde, in nulla odio rerum voluptate dolore reiciendis. At explicabo quisquam odit aliquam, hic
              eveniet. Eius nobis inventore consequatur hic ut deleniti nulla quasi dolore, consectetur voluptate
            </p>
          </div>
        </article>
      </section>

      <!--Clase 15: display-->
      <section class="mt-5 mx-auto">

        <h1 id="display">Propiedad display</h1>

        <!-- Display -->
        <article class="mt-5 mx-auto">
          <p class="destacado my-5">Permite definir el comportamiento de una caja respecto a las cajas adyacentes.</p>
          <ul class="my-5">
            <li>De forma natural existen elementos en línea y elementos en bloque.</li>
            <div class="text-center my-5">
              <img src="./css_basico/img/display.png" alt="display" class="img-fluid">
            </div>
            <li>Los valores de la propiedad <span class="text-primary">display</span> son:
              <div class="my-5">
                <dl class="text-tomato">inline:
                  <dt class="ms-5">Establece que un elemento de bloque se comporte como si fuera un elemento en
                    línea.</dt>
                </dl>
                <dl class="text-tomato">block:
                  <dt class="mt-5">Establece que un elemento de linea se comporte como si fuera un elemento de
                    bloque.</dt>
                </dl>
                <dl class="text-tomato">inline-block:
                  <dt class="mt-5">El elemento se comporta como si fuera de linea pero acepta las propiedades de
                    ancho (width) y alto (height)</dt>
                </dl>
                <dl class="text-tomato">none:
                  <dt class="mt-5">El elemento se oculta pero se sigue renderizando. Se recomienda su utilización
                    para elementos que tengan que ocultarse o mostrarse dinámicamente.</dt>
                </dl>
                <dl class="text-tomato">table:
                  <dt class="mt-5">El elemento imita el comportamiento de una tabla. Está casi en desuso.</dt>
                </dl>
                <dl class="text-tomato">list-item:
                  <dt class="mt-5">El elemento imita el comportamiento de una lista. Está casi en desuso</dt>
                </dl>
                <dl class="text-tomato">flex:
                  <dt class="mt-5">Se utiliza para maquetar componentes. Por ejemplo un menú.</dt>
                </dl>
                <dl class="text-tomato">grid:
                  <dt class="mt-5">Se utiliza para maquetar layouts.</dt>
                </dl>
              </div>
            </li>
          </ul>
        </article>

        <!-- Display:Inline -->
        <article id="d_inline" class="mt-5 mx-auto">
          <h2><span>display: inline</span></h2>
          <p class="destacado my-5">Son elementos que se pueden colocar uno a continuación del otro.</p>
          <ul class="my-5">
            <li><i class="bi bi-chevron-right text-skyblue_2"></i>No admiten dimensiones de ancho y alto.</li>
            <li><i class="bi bi-chevron-right text-skyblue_2"></i>Admiten margin y pading solo en el fluho horizontal NO en el vertical.</li>
            <li><i class="bi bi-chevron-right text-skyblue_2"></i>Si al elemento inline se le aplica padding en el flujo vertical este
              comportamiento afectará a los elementos en bloque que hubiesen alrededor</li>
          </ul>
          <div class="borde my-5 div-d-inline p-3">
            <span class="borde">Soy span, un elemento inline</span>
            <span class="borde">Soy otro span</span>
            <p class="borde">Soy un párrafo, un elemento en bloque</p>
          </div>
        </article>

        <!-- Display: Inline-block -->
        <article id="d_inline-block" class="mt-5 mx-auto">
          <h2><span>Display inline-block</span></h2>
          <p class="destacado my-5">
            Ofrece las mismas caracteristicas de los elementos inline pero además las complementa con las de los elementos de bloque.</p>
          <div class="borde div-inline-block p-3">
            <span class="borde">span c/ inline-block</span>
            <span class="borde">span c/ inline-block</span>
            <p class="borde">párrafo, c/ inline-block</p>
          </div>
          <ul class="my-5">
            <li><i class="bi bi-chevron-right text-skyblue_2"></i>Al aplicarsele propiedades de ancho y alto afectará a los elementos que esten
              alrededor.</li>
          </ul>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              .inline-block&#123
              &nbsp;&nbsp;&nbsp;margin-bottom:2em;
              &#125
            </code>
          </pre>
        </article>
      </section>

      <!--Clase 16: Pseudo elementos-->
      <section class="mt-5 mx-auto">
        <h1 id="pseudoelementos">PSEUDO ELEMENTOS</h1>

        <article class="mt-5 mx-auto">
          <p class="destacado my-5">Se utilizan para dar cierto estilo a partes específicas de un elemento.</p>
          <ul class="my-5">
            <li>Sintaxis:
              <pre class="pre-content-list bg-blue_2 my-5 w-100">
                  <code>
                    selector::pseudo-elemento {estilos}
                  </code>
                </pre>
            </li>
            <li>Existe 5 pseudo elementos:
              <dl class="text-tomato">::first-line
                <dt class="ms-5">Sólo para elementos de bloque.</dt>
              </dl>
              <dl class="text-tomato">::first-letter
                <dt class="ms-5">Se aplica a la primera letra. Sólo para elementos de bloque.</dt>
              </dl>
              <dl class="text-tomato">::before
                <dt class="ms-5">Por defecto es un elemento de línea que no pertenece al HTML y por consecuencia
                  no existen en el DOM. Es hijo directo del elemento al que pertenece y se coloca antes de él.</dt>
              </dl>
              <dl class="text-tomato">::after
                <dt class="ms-5">Por defecto es un elemento de línea que no pertenece al HTML y por consecuencia
                  no existen en el DOM. Es hijo directo del elemento al que pertenece y se coloca despues de él.</dt>
              </dl>
              <dl class="text-tomato">::selection
                <dt class="ms-5">Retirado de la especificación.</dt>
              </dl>
            </li>
            <li>
              Es obligatorio el uso de la propiedad <strong>content</strong> en <strong>::before</strong> y <strong>::after</strong>. Si se deja vacío (content:' '), se
              debe usar su propiedad <strong>display: block</strong>
            </li>
          </ul>
        </article>
      </section>

      <!--Clases 17 - 18 - 19: Pseudo clases-->
      <section class="mt-5 mx-auto">
        <h1 id="pseudoclases">PSEUDO CLASES</h1>

        <article class="mt-5 mx-auto">
          <p class="destacado">Son selectores que reaccionan en tiempo real detectando la iteracción del usuario con los elementos.</p>

          <ul class="my-5">
            <li><i class="bi bi-chevron-right text-skyblue_2"></i>Funciona con todos los selectores CSS</li>
            <li><i class="bi bi-chevron-right text-skyblue_2"></i>No están atados a un elemento </li>
            <li><i class="bi bi-chevron-right text-skyblue_2"></i>Sintaxis:</li>
          </ul>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              selector:pseudoclase&#123estilos css&#125

              Si no hay selector:

              :pseudoclase &#123estilos css&#125
            </code>
          </pre>
          <h2><span>Tipos de pseudo clases</span></h2>

          <h3 id="dinamicas">Dinámicas</h3>
          <dl class="text-tomato">:link
            <dt class="ms-5">Aplicable sólo a links. Es para enlaces aún no visitados.</dt>
          </dl>
          <dl class="text-tomato">:visited
            <dt class="ms-5">Aplicable sólo a links. Es para enlaces que ya han sido vistados. Casi ya no se
              usa por cuestiones estéticas. Mayormente utilizado en buscadores.</dt>
          </dl>
          <dl class="text-tomato">:hover
            <dt class="ms-5">Se activa al poner el mouse sobre el elemento.</dt>
          </dl>
          <dl class="text-tomato">:active
            <dt class="ms-5">Aplicable sólo a links. Se activa sólo al momento de hacer click sobre el
              elemento, luego se desactiva.</dt>
          </dl>
          <dl class="text-tomato">:focus
            <dt class="ms-5">Se activa cuando se hace click en el elemento y se desactiva al hacer click fuera
              del elemento.</dt>
          </dl>
          <h3 class="my-5" id="enlaces">De enlaces</h3>
          <dl class="text-tomato">:target
            <dt class="ms-5">Se aplica a un elemento es objetivo de un marcador o ancla.</dt>
          </dl>

          <h3 class="my-5" id="lenguaje">De lenguaje:</h3>
          <dl class="text-tomato">:lang&#40 &#41
            <dt class="ms-5">Elemento que contiene el atributo lang que se especifique.</dt>
          </dl>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
              <code>
                Ejemplo:

                &lt;span lang="en" class="span" &gt;Hello world&lt;/span&gt;

                &lt;span lang="es" class="span" &gt;Hola mundo&lt;/span&gt;

                En CSS:

                .span:lang&#40en&#41&#123
                  &nbsp;&nbsp;&nbsp;color:red;
                &#125

                .span:lang&#40es&#41&#123
                  &nbsp;&nbsp;&nbsp;color:blue;
                &#125
              </code>
            </pre>

          <h3 class="my-5" id="estado">De estado:</h3>
          <dl class="text-tomato">:enabled
            <dt class="ms-5">El estado del elemento es activado o está activo.</dt>
          </dl>
          <dl class="text-tomato">:disabled
            <dt class="ms-5">El estado del elemento es desactivado o está inactivo.</dt>
          </dl>
          <dl class="text-tomato">:read-only
            <dt class="ms-5">Selecciona cuando el campo es de sólo lectura.</dt>
          </dl>
          <dl class="text-tomato">:read-write
            <dt class="ms-5">Selecciona cuando el campo es editable por el usuario.</dt>
          </dl>
          <dl class="text-tomato">:placeholder-shown
            <dt class="ms-5">Selecciona cuando el campo está mostrando un placeholder.</dt>
          </dl>
          <dl class="text-tomato">:default
            <dt class="ms-5">Selecciona cuando el elemento tiene el valor por defecto.</dt>
          </dl>

          <h3 class="my-5" id="iteraccion">De iteracción</h3>
          <p>Las siguientes pseudoclases están orientadas a un estado específico de ciertos campos de un formulario que el usuario puede modificar. Estos campos pueden ser los siguientes elementos:</p>
          <dl class="text-tomato">:checked
            <dt class="ms-5">Selecciona el elemento cuando el campo está seleccionado.</dt>
          </dl>
          <dl class="text-tomato">:indeterminate
            <dt class="ms-5">Selecciona el elemento cuando la casilla está en un estado indeterminado.</dt>
          </dl>

          <h3 class="my-5" id="validacion">De validación (formularios)</h3>
          <p>En HTML5 es posible dotar de capacidades de validación a los campos de un formulario, pudiendo interactuar con ellos desde Javascript o incluso desde CSS. Con estas validaciones podemos asegurarnos de que el usuario escribe en un campo de un formulario el valor esperado.</p>
          <dl class="text-tomato">:in-range
            <dt class="ms-5">Cuando los campos numéricos están dentro del rango.</dt>
          </dl>
          <dl class="text-tomato">:out-of-range
            <dt class="ms-5">Cuando los campos numéricos están fuera del rango.</dt>
          </dl>
          <dl class="text-tomato">:required
            <dt class="ms-5">Cuando el campo es obligatorio, o sea, tiene el atributo required.</dt>
          </dl>
          <dl class="text-tomato">:optional
            <dt class="ms-5">Cuando el campo es opcional (por defecto, todos los campos).</dt>
          </dl>
          <dl class="text-tomato">:valid
            <dt class="ms-5">Cuando los campos cumplen la validación HTML5.</dt>
          </dl>
          <dl class="text-tomato">:invalid
            <dt class="ms-5">Cuando los campos no cumplen la validación HTML5.</dt>
          </dl>
          <dl class="text-tomato">:user-valid
            <dt class="ms-5">Idem a :valid, pero cuando el usuario ha interactuado.</dt>
          </dl>

          <dl class="text-tomato">:fullscreen
            <dt class="ms-5">Se aplica cuando el elemento está en pantalla completa.</dt>
          </dl>

          <p id="ejemplos">Ejemplos:</p>
          <div>
            <div class="div-graphic-item-form">
              <form action="#">
                <div class="borde my-5 p-2">
                  <div>
                    <label class="label">:enabled</label>
                  </div>
                  <div class="my-2">
                    <input class="input inputEnable" type="text">
                  </div>
                </div>
                <div class="borde my-5 p-2">
                  <div>
                    <label class="label">:disabled</label>
                  </div>
                  <div class="my-2">
                    <input class="input inputDisable" type="text" disabled>
                  </div>
                </div>
                <div class="borde my-5 p-2">
                  <div>
                    <label for="checkbox" class="label">:checked</label>
                  </div>
                  <div>
                    <input id="checkbox" class="inputCheck" type="checkbox" checked>
                  </div>
                </div>
                <div class="borde my-5 p-2">
                  <div>
                    <label class="label">:in-range</label>
                  </div>
                  <div class="my-2">
                    <input class="inputRange" type="number" min="50" max="60" in-range>
                  </div>
                </div>
                <div class="borde my-5 p-2">
                  <div>
                    <label class="label">:out-of-range</label>
                  </div>
                  <div class="my-2">
                    <input class="inputOfrange" type="number" min="50" max="100">
                  </div>
                </div>
                <div class="borde my-5 p-2">
                  <div>
                    <label class="label">:optional</label>
                  </div>
                  <div class="my-2">
                    <input class="input inputOptional" type="text" optional>
                  </div>
                </div>
                <div class="borde my-5 p-2">
                  <div>
                    <label class="label">:required</label>
                  </div>
                  <div class="my-2">
                    <input class="input inputRequired" type="text" required>
                  </div>
                </div>
                <div class="borde my-5 p-2">
                  <div>
                    <label class="label">:valid</label>
                  </div>
                  <div class="my-2">
                    <input class="input inputValid" type="number">
                  </div>
                </div>
                <div class="borde my-5 p-2">
                  <div>
                    <label class="label">:invalid</label>
                  </div>
                  <div class="my-2">
                    <input class="input inputInvalid" type="number">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="div-video m-auto">
            <video controls class="img_100">
              <source src="videos/17-pseudoclases-I -dinamicas-marcadores-e-idioma.mp4" type="video/mp4">
            </video>
          </div>
        </article>

      </section>

      <!-- PSEUDO CLASES ESTRUCTURALES -->
      <section class="mt-5 mx-auto">
        <h1>PSEUDO CLASES ESTRUCTURALES</h1>

        <article id="pseudo_clases_estructurales" class="mt-5 mx-auto">
          <p class="destacado my-5">El uso de una pseudo clase ofrece una especificidad muy alta, mucho mayor que las del propio css.</p>
          <dl class="text-tomato ms-5">:root
            <dt class="ms-5">Representa la raiz del documento html. Es como si fuese la etiqueta &lt;html&gt;
              pero con mayor peso. Utilizada con variables CSS.</dt>
          </dl>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              :root &#123
              &nbsp;&nbsp;&nbsp;estilos css
              &#125
            </code>
          </pre>
          <dl class="text-tomato ms-5">:empty
            <dt class="ms-5">Aplicable a elementos vacíos, es decir, etiquetas que no tienen contenido.
              Etiquetas vacías se suelen dejar para agregar contenido dinámco con <strong>Javascript.</strong></dt>
          </dl>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              selector:empty &#123
              &nbsp;&nbsp;&nbsp;estilos css
              &#125
            </code>
          </pre>
          <p class="destacado my-5">Para resetear estilos de un elemento específico se utiliza el selector <strong>all</strong> con su propiedad <strong>unset;</strong></p>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              selector:empty &#123
              &nbsp;&nbsp;&nbsp;all: unset;
              &#125
            </code>
          </pre>
          <dl class="text-tomato ms-5">:first-child
            <dt class="ms-5">Selecciona al primer hijo &#40independiente del tipo de elemento&#41 que tenga la
              clase especificada como selector.</dt>
          </dl>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              <span class="text-skyblue_2">.hijo</span>:<span class="text-yellow">first-child</span> &#123
              &nbsp;&nbsp;&nbsp;background: blue;
              &nbsp;&nbsp;&nbsp;color: white;
              &#125
            </code>
          </pre>
          <div class="borde p-3 first-child">
            <p class="hijo">Soy first-child con class="hijo"</p>
            <p class="hijo">Soy second-child con class="hijo"</p>
            <p class="hijo">Soy third-child con class="hijo"</p>
          </div>
          <dl class="text-tomato ms-5">:last-child
            <dt class="ms-5">Selecciona al último hijo &#40independiente del tipo de elemento&#41 que tenga la
              clase especificada como selector.</dt>
          </dl>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              <span class="text-skyblue_2">.hijo</span>:<span class="text-yellow">last-child</span> &#123
              &nbsp;&nbsp;&nbsp;background: tomato;
              &nbsp;&nbsp;&nbsp;color: white;
              &#125
            </code>
          </pre>
          <div class="borde p-3 last-child">
            <p class="hijo">Soy first-child con class="hijo"</p>
            <p class="hijo">Soy second-child con class="hijo"</p>
            <p class="hijo">Soy third-child con class="hijo"</p>
          </div>
          <dl class="text-tomato ms-5">:nth-child&#40 n &#41
            <dt class="ms-5">Selecciona al hijo <strong>n</strong> &#40independientemente de la
              etiqueta&#41</dt>
          </dl>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              <span class="text-skyblue_2">.hijo</span>:<span class="text-yellow">nth-child</span>&#40 <span class="text-orange">2</span> &#41 &#123
              &nbsp;&nbsp;&nbsp;background: red;
              &nbsp;&nbsp;&nbsp;color: white;
              &#125
            </code>
          </pre>
          <div class="borde p-3 nth-child">
            <p class="hijo">Soy first-child con class="hijo"</p>
            <p class="hijo">Soy second-child con class="hijo"</p>
            <p class="hijo">Soy third-child con class="hijo"</p>
          </div>
          <dl class="text-tomato ms-5">:nth-child&#40 odd &#41
            <dt class="ms-5">Selecciona a los hijos de valor <strong>n = posición impar</strong> &#40independientemente de la
              etiqueta&#41</dt>
          </dl>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              <span class="text-skyblue_2">.hijo</span>:<span class="text-yellow">nth-child</span>&#40 <span class="text-orange">odd</span> &#41 &#123
              &nbsp;&nbsp;&nbsp;background: yellow;
              &nbsp;&nbsp;&nbsp;color: tomato;
              &#125
            </code>
          </pre>
          <div class="borde p-3 odd-nth-child">
            <p class="hijo">Soy first-child con class="hijo"</p>
            <p class="hijo">Soy second-child con class="hijo"</p>
            <p class="hijo">Soy third-child con class="hijo"</p>
            <p class="hijo">Soy four-child con class="hijo"</p>
            <p class="hijo">Soy five-child con class="hijo"</p>
          </div>
          <dl class="text-tomato ms-5">:nth-child&#40 even &#41
            <dt class="ms-5">Selecciona a los hijos de valor <strong>n = posición par</strong> &#40independientemente de la
              etiqueta&#41</dt>
          </dl>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>                  
              <span class="text-skyblue_2">.hijo</span>:<span class="text-yellow">nth-child</span>&#40 <span class="text-orange">even</span> &#41 &#123
              &nbsp;&nbsp;&nbsp;background: black;
              &nbsp;&nbsp;&nbsp;color: white;
              &#125
            </code>
          </pre>
          <div class="borde p-3 even-nth-child">
            <p class="hijo">Soy first-child con class="hijo"</p>
            <p class="hijo">Soy second-child con class="hijo"</p>
            <p class="hijo">Soy third-child con class="hijo"</p>
            <p class="hijo">Soy four-child con class="hijo"</p>
            <p class="hijo">Soy five-child con class="hijo"</p>
          </div>
          <dl class="text-tomato ms-5">:nth-child&#40 ecuacion &#41
            <dt class="ms-5">Selecciona a los hijos de valor <strong>ecuacion = 1n,3n,4n+1,n+4,...</strong> donde <strong>n</strong> es un multiplicador y va desde
              0 hasta n.</dt>
          </dl>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              <span class="text-skyblue_2">.hijo</span>:<span class="text-yellow">nth-child</span>&#40 <span class="text-orange">3n</span> &#41 &#123
              &nbsp;&nbsp;&nbsp;background: lightsalmon;
              &nbsp;&nbsp;&nbsp;color: white;
              &#125
            </code>
          </pre>
          <div class="borde p-3 ecuacion-nth-child">
            <p class="hijo">Soy first-child con class="hijo"</p>
            <p class="hijo">Soy second-child con class="hijo"</p>
            <p class="hijo">Soy third-child con class="hijo"</p>
            <p class="hijo">Soy four-child con class="hijo"</p>
            <p class="hijo">Soy five-child con class="hijo"</p>
            <p class="hijo">Soy six-child con class="hijo"</p>
          </div>
          <dl class="text-tomato ms-5">:nth-last-child&#40 n &#41
            <dt class="ms-5">Selecciona al hijo <strong>n</strong> empezando a contar desde el último.
              &#40independientemente de la etiqueta&#41</dt>
          </dl>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              <span class="comentario">//Valor n = cualquier valor entero o ecuación</span>

              <span class="text-skyblue_2">.hijo</span>:<span class="text-yellow">nth-last-child</span>&#40 <span class="text-orange">4</span> &#41 &#123
              &nbsp;&nbsp;&nbsp;background: skyblue;
              &nbsp;&nbsp;&nbsp;color: white;
              &#125
            </code>
          </pre>
          <div class="borde p-3 nth-last-child">
            <p class="hijo">Soy first-child con class="hijo"</p>
            <p class="hijo">Soy second-child con class="hijo"</p>
            <p class="hijo">Soy third-child con class="hijo"</p>
            <p class="hijo">Soy four-child con class="hijo"</p>
            <p class="hijo">Soy five-child con class="hijo"</p>
            <p class="hijo">Soy six-child con class="hijo"</p>
          </div>
          <dl class="text-tomato ms-5">:only-child
            <dt class="ms-5">Sólo es aplicable cuando existe <strong>hijo único</strong>. Si existen
              hermanos la pseudo clase no funciona &#40independientemente de la etiqueta&#41</dt>
          </dl>
          <dl class="text-tomato ms-5">:first-of-type
            <dt class="ms-5">Funciona igual que <strong>first-child</strong> con la diferencia que la
              etiqueta o elemento si es importante.</dt>
          </dl>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              <span class="text-skyblue_2">.hijo</span>:<span class="text-yellow">first-of-type</span> &#40
              &nbsp;&nbsp;&nbsp;background: lightpink;
              &nbsp;&nbsp;&nbsp;color: white;
              &#125
            </code>
          </pre>
          <div class="borde p-3 first-of-type">
            <p class="hijo">Soy first-child con class="hijo"</p>
            <p class="hijo">Soy second-child con class="hijo"</p>
            <p class="hijo">Soy third-child con class="hijo"</p>
            <p class="hijo">Soy four-child con class="hijo"</p>
            <p class="hijo">Soy five-child con class="hijo"</p>
            <p class="hijo">Soy six-child con class="hijo"</p>
          </div>
          <dl class="text-tomato ms-5">:last-of-type
            <dt class="ms-5">Funciona igual que <strong>last-child</strong> con la diferencia que la
              etiqueta o elemento si es importante.</dt>
          </dl>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              <span class="text-skyblue_2">.hijo</span>:<span class="text-yellow">last-of-type</span> &#40
              &nbsp;&nbsp;&nbsp;background: lightpink;
              &nbsp;&nbsp;&nbsp;color: white;
              &#125
            </code>
          </pre>
          <div class="borde p-3 last-of-type">
            <p class="hijo">Soy first-child con class="hijo"</p>
            <p class="hijo">Soy second-child con class="hijo"</p>
            <p class="hijo">Soy third-child con class="hijo"</p>
            <p class="hijo">Soy four-child con class="hijo"</p>
            <p class="hijo">Soy five-child con class="hijo"</p>
            <p class="hijo">Soy six-child con class="hijo"</p>
          </div>
          <dl class="text-tomato ms-5">:nth-of-type&#40 &#41
            <dt class="ms-5">Funciona igual que <strong>nth-child</strong> con la diferencia que la
              etiqueta o elemento si es importante.</dt>
          </dl>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              <span class="text-skyblue_2">.hijo</span>:<span class="text-yellow">nth-of-type</span>&#40 <span class="text-orange">5</span> &#41
              &nbsp;&nbsp;&nbsp;background: lightpink;
              &nbsp;&nbsp;&nbsp;color: white;
              &#125
            </code>
          </pre>
          <div class="borde p-3 nth-of-type">
            <p class="hijo">Soy first-child con class="hijo"</p>
            <p class="hijo">Soy second-child con class="hijo"</p>
            <p class="hijo">Soy third-child con class="hijo"</p>
            <p class="hijo">Soy four-child con class="hijo"</p>
            <p class="hijo">Soy five-child con class="hijo"</p>
            <p class="hijo">Soy six-child con class="hijo"</p>
          </div>
          <dl class="text-tomato ms-5">:nth-last-of-type&#40 &#41
            <dt class="ms-5">Funciona igual que <strong>nth-last-child(n)</strong> pero teniendo en cuenta el tipo de elemento.</dt>
          </dl>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              <span class="text-skyblue_2">.hijo</span>: <span class="text-yellow">nth-last-of-type</span>&#40 <span class="text-orange">2</span> &#41
              &nbsp;&nbsp;&nbsp;background: lightpink;
              &nbsp;&nbsp;&nbsp;color: white;
              &#125
            </code>
          </pre>
          <div class="borde p-3 nth-last-of-type">
            <p class="hijo">Soy first-child con class="hijo"</p>
            <p class="hijo">Soy second-child con class="hijo"</p>
            <p class="hijo">Soy third-child con class="hijo"</p>
            <p class="hijo">Soy four-child con class="hijo"</p>
            <p class="hijo">Soy five-child con class="hijo"</p>
            <p class="hijo">Soy six-child con class="hijo"</p>
          </div>
          <dl class="text-tomato ms-5">:not&#40etiqueta&#41
            <dt class="ms-5">Los estilos no se aplicarán a los elementos con la etiqueta especificad</dt>
          </dl>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              <span class="text-skyblue_2">.hijo</span>:<span class="text-yellow">not</span>&#40 <span class="text-orange">div</span> &#41 <span class="comentario">// Se excluyen los divs</span>
              &nbsp;&nbsp;&nbsp;background: greenyellow;
              &nbsp;&nbsp;&nbsp;color: tomato;
              &#125
            </code>
          </pre>
          <div class="borde p-3 not">
            <div class="clase_comun">div1 con class="clase_comun"</div>
            <div class="clase_comun">div2 con class="clase_comun"</div>
            <div class="clase_comun">div3 con class="clase_comun"</div>
            <p class="clase_comun">Párrafo con class = "clase_comun"</p>
            <p class="clase_comun">Párrafo con class = "clase_comun"</p>
            <p class="clase_comun">Párrafo con class = "clase_comun"</p>
          </div>

        </article>
      </section>

      <!--Clase 20: Variables-->
      <section class="mt-5 mx-auto">

        <h1 id="variables">VARIABLES CSS</h1>

        <article class="mt-5 mx-auto">
          <p class="destacado my-5">Variable es un espacio en memoria en el que se guarda un valor para poder reutilizarlo o modificarlo después.</p>
          <ul class="my-5">
            <li><i class="bi bi-check-all text-tomato me-2"></i>Necesitan estar dentro de un selector.</li>
            <li><i class="bi bi-check-all text-tomato me-2"></i>Tienen herencia y cascada.</li>
            <li><i class="bi bi-check-all text-tomato me-2"></i>Existen variables locales y globales &#40declaradas en el root.&#41</li>
            <li><i class="bi bi-check-all text-tomato me-2"></i>No son lo mismo que las variables Sass.</li>
          </ul>
          <p class="my-3">Sintaxis</p>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              selector &#123
              &nbsp;&nbsp;&nbsp;--nombre-variable: valor;
              &#125

              <span class="span">Uso:</span>

              propiedad:var&#40--nombre-variable&#41
            </code>
          </pre>
          <p class="my-3">Ejemplo:</p>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              &lt;h1 class="title"&gt;Variables CSS&lt;/h1&gt;
              &lt;article class="article-uno"&gt;
                &nbsp;&nbsp;&nbsp;&lt;p class="parrafo"&gt;Párrafo del article-uno&lt;/p&gt;
              &lt;/article&gt;
              &lt;article class="article-dos"&gt;
                &nbsp;&nbsp;&nbsp;&lt;p class="parrafo"&gt;Párrafo del article-dos&lt;/p&gt;
              &lt;/article&gt;
              &lt;input type="checkbox" class="check"&gt;
              &lt;div class="box"&gt;&lt;/div&gt;

              &lt;style&gt;
              &nbsp;&nbsp;&nbsp;:root&#123
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--color:red;//Declaración de la variable
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--border: 3px solid yellow;
              &nbsp;&nbsp;&nbsp;&#125

              &nbsp;&nbsp;&nbsp.parrafo&#123
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color: var&#40--color&#41; //Uso de la variable
              &nbsp;&nbsp;&nbsp&#125

              Usando cascada:
              &nbsp;&nbsp;&nbsp.article-dos&#123
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--color: green; //Cambio del valor de la variable.
              &nbsp;&nbsp;&nbsp;&#125

              &nbsp;&nbsp;&nbsp;.check:checked + .box&#123
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--color: purple;
              &nbsp;&nbsp;&nbsp;&#125

              &nbsp;&nbsp;&nbsp;.box&#123
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 100px;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 100px;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background: var&#40--color&#41
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: var&#40--border&#41
              &nbsp;&nbsp;&nbsp;&#125
              &lt;/style&gt;
            </code>
          </pre>
          <div class="borde p-3">
            <p>Solución ejercicio:</p>
            <article class="article-uno">
              <p class="parrafo">Párrafo del article-uno</p>
            </article>
            <article class="article-dos">
              <p class="parrafo">Párrafo del article-dos</p>
            </article>
            <input type="checkbox" class="check">
            <div class="box"></div>
          </div>
        </article>
      </section>

      <!--Clase 21: Propiedad background-->
      <section class="mt-5 mx-auto">

        <h1 id="background">Propiedad Background</h1>

        <article class="mt-5 mx-auto">
          <p class="destacado my-5">Propiedad que permite darle estilo al fondo de una caja.</p>
          <ul class="my-5">
            <li>Es un shorthand.</li>
            <li>Propiedades:</li>
            <li>
              <div class="div-graphic-item-background">
                <dl class="text-tomato ms-5">background-color
                  <dt class="ms-5">Establece el color de fondo de la caja.</dt>
                  <div class="bg-color"></div>
                </dl>
                <dl class="text-tomato ms-5">background-image:url&#40ruta&#41
                  <dt class="ms-5">Establece la imagen de fondo de la caja.</dt>
                  <div class="bg-image"></div>
                </dl>
                <dl class="text-tomato ms-5">background-size
                  <dt class="ms-5">Establece el tamaño de la imagen de fondo. Acepta ancho &#40x&#41 y alto
                    &#40y&#41. Si no se establece el alto se hace automático.</dt>
                  <pre class="pre-content-list bg-blue_2 my-5 w-100">
                      <code>
                        background-size: size_eje_X size_eje_Y
                        Valores:
                        |auto|-> automatico
                        |cover| -> cubre la caja por completo aunque la imagen se desborde.
                        |contain| -> la imagen se ajusta a su contenedor aunque no lo rellene.
                      </code>
                    </pre>
                  <div class="bg-size"></div>
                </dl>
                <dl class="text-tomato ms-5">background-repeat
                  <dt class="ms-5">Establece si la imagen se repite o no.</dt>
                  <pre class="pre-content-list bg-blue_2 my-5 w-100">
                      <code>
                        Valores:
  
                        |repeat-x|-> se repite en el eje X.
                        |repeat-y|-> se repite en el eje Y.
                        |no-repeat| -> no se repite.
                      </code>
                    </pre>
                  <div class="bg-repeat"></div>
                </dl>
                <dl class="text-tomato ms-5">background-position
                  <dt class="ms-5">Establece la posicion de la imagen, si no se especifica un segundo valor se
                    establecerá como <strong>center</strong>.</dt>
                  <pre class="pre-content-list bg-blue_2 my-5 w-100">
                      <code>
                        Valores:
  
                        left top
                        left center
                        left bottom
                        right top
                        right center
                        right bottom
                        center top
                        center center
                        center bottom
                        x% y%
                        xpos ypos -> valores en px, em, rem, etc
                        initial -> Utilizado en animaciones.
                        inherit -> Utilizado en animaciones.
                      </code>
                    </pre>
                  <div class="bg-position"></div>
                </dl>
                <dl class="text-tomato ms-5">background-clip
                  <dt class="ms-5">Establece que parte de la caja rellenará el fondo.
                    Muestra la imagen desde donde le decimos. Sólo oculta, NO redimensiona.</dt>
                  <pre class="pre-content-list bg-blue_2 my-5 w-100">
                      <code>
                        valores:
  
                        |border-box| ->
                        |padding-box| ->
                        |content-box| ->
                      </code>
                    </pre>
                  <div class="bg-clip">
                    <p>border-box</p>
                    <div class="border-box"></div>
                    <p>padding-box</p>
                    <div class="padding-box"></div>
                    <p>content-box</p>
                    <div class="content-box"></div>
                  </div>
                </dl>
                <dl class="text-tomato ms-5">background-origin
                  <dt class="ms-5">Establece donde comienza el fondo. Redimensiona la imagen para que ocupe la
                    zona que le decimos.</dt>
                  <pre class="pre-content-list bg-blue_2 my-5 w-100">
                      <code>
                        valores:
  
                        |border-box| ->
                        |padding-box| ->
                        |content-box| ->
                      </code>
                    </pre>
                  <div class="bg-origin">
                    <p>border-box</p>
                    <div class="border-box"></div>
                    <p>padding-box</p>
                    <div class="padding-box"></div>
                    <p>content-box</p>
                    <div class="content-box"></div>
                  </div>
                </dl>
                <dl class="text-tomato ms-5">background-attachment
                  <dt class="ms-5">Permite establecer si el fondo se coloca respecto a la caja o al viewport.
                  </dt>
                  <pre class="pre-content-list bg-blue_2 my-5 w-100">
                      <code>
                        background-image: url(../img/cafe.jpeg);
                        background-size: contain;
                        background-attachment: fixed;
                      </code>
                    </pre>
                  <div class="div-attachment">
                    <div class="bg-attachment"></div>
                  </div>
                </dl>
                <dl class="text-tomato ms-5">background múltiples
                  <dt class="ms-5">
                    Se puede usar varios background al mismo tiempo
                  </dt>
                  <pre class="pre-content-list bg-blue_2 my-5 w-100">
                      <code>
                        background-image: url(../img/logo.png), url(../img/cafe.jpeg);
                        background-size: 10%, cover;
                        background-repeat: no-repeat;
                        background-position: bottom right, center;
                      </code>
                    </pre>
                  <div class="bg-multiple"></div>
                </dl>
              </div>
            </li>
          </ul>
        </article>
      </section>

      <!--Clase 27: Imágenes-->
      <section class="mt-5 mx-auto">

        <h1 id="imagenes">Imágenes en CSS</h1>

        <article class="mt-5 mx-auto">
          <p class="destacado my-5">No existen propiedades para imágenes en CSS. Para imágenes responsive se recomienda:
            <strong>max-width: 100%;</strong> aplicarlo al archivo base de css que se tenga.
          </p>
          <ul class="my-5">
            <li>Las imágenes por defecto son elementos inline, esto causa un espacio por debajo debido a su line-height, se puede solucionar de dos formas.
              Dando un <strong>line-height:0</strong> al contenedor o un <strong>display:block</strong> a la imagen
            </li>
            <li>Para centrado horizontal: <strong>display:block</strong> y márgenes laterales
              automáticos <strong>margin: auto auto;</strong>
            </li>
            <li>Si la imagen no es de bloque utilizar <strong>text-align: center.</strong></li>
            <li>Para centrado vertical usar Flexbox. Aplicar <strong>vertical-align: middle</strong> a la imagen y al texto
            </li>
          </ul>

        </article>
        <article class="mt-5 mx-auto">
          <h2><span>Centrar imágenes verticalmente</span></h2>
          <pre class="pre-content-list bg-blue_2 my-5 w-100">
            <code>
              .img-container img,
              .img-container span&#123
              &nbsp;&nbsp;&nbsp;vertical-align: middle;
              &#125

              .img-container&#123
              &nbsp;&nbsp;&nbsp;display: table;
              &#125

              .img-container span,
              .img-container p&#123
              &nbsp;&nbsp;&nbsp;display: table-cell;
              &#125
            </code>
          </pre>
        </article>
      </section>
    </div>
  </div>
</div>