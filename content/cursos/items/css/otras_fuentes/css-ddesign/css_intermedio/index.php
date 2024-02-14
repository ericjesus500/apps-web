<?php include "../../../../templates_nivel_0/head.php"?>
    
    <link rel="stylesheet" href="../../css/estilos-css.css">

    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link
        href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans|Poppins|Roboto|Roboto+Condensed|Source+Code+Pro|Source+Sans+Pro|Titillium+Web|Ubuntu&display=swap"
        rel="stylesheet">
    <title>CSS Intermedio</title>
</head>

<body>
    <?php require "../../../../templates_nivel_0/nav-ini.php";?>
	<?php include "../../nav-css.php";?>
    
    <div class="container">
        <div class="content-indice">
            <h2>Contenido</h2>
            <div class="indice">
                <div class="indice-menu">
                    <div class="indice-container">
                        <nav class="nav-indice">
                            <ul class="nav-indice-ul">
                                <li class="nav-indice-item"><a href="#obj-fit" rel="noopener noreferrer">object-fit</a>
                                </li>
                                <li class="nav-indice-item"><a href="#obj-position" rel="noopener noreferrer">object-position</a>
                                </li>
                                <li class="nav-indice-item"><a href="#filter" rel="noopener noreferrer">filter&#40 &#41</a>
                                </li>
                                <li class="nav-indice-item"><a href="#clip-path" rel="noopener noreferrer">clip-path</a></li>
                                <li class="nav-indice-item"><a href="#colores" rel="noopener noreferrer">colores</a></li>
                                <li class="nav-indice-item"><a href="#border-radius" rel="noopener noreferrer">border-radius</a></li>
                                <li class="nav-indice-item"><a href="#box-shadow" rel="noopener noreferrer">box-shadow</a></li>
                                <li class="nav-indice-item"><a href="#multi-shadow" rel="noopener noreferrer">multi-shadow</a></li>
                                <li class="nav-indice-item"><a href="#text-shadow" rel="noopener noreferrer">text shadow</a></li>
                                <li class="nav-indice-item"><a href="#deg-lineal" rel="noopener noreferrer">degradados lineales</a></li>
                                <li class="nav-indice-item"><a href="#deg-radiales" rel="noopener noreferrer">degradados radiales</a></li>
                                <li class="nav-indice-item"><a href="#deg-patrones" rel="noopener noreferrer">degradados en patrones</a></li>
                                <li class="nav-indice-item"><a href="#overflow" rel="noopener noreferrer">overflow</a></li>
                                <li class="nav-indice-item"><a href="#float" rel="noopener noreferrer">float</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--flexbox-->
                    <div class="indice-container">
                        <nav class="nav-indice">
                            <ul class="nav-indice-ul">
                                <li class="nav-indice-item"><a href="#" rel="noopener noreferrer">Flexbox</a>
                                    <nav class="subnav-1">
                                        <ul class="subnav-indice-ul-1">
                                            <li class="subnav-indice-item"><a href="#flexbox" rel="noopener noreferrer">concepto</a>
                                            <li class="subnav-indice-item"><a href="#flex-direction" rel="noopener noreferrer">flex-direction</a></li>
                                            <li class="subnav-indice-item"><a href="#flex-wrap" rel="noopener noreferrer">flex-wrap</a></li>
                                            <li class="subnav-indice-item"><a href="#alineamiento-flex-item" rel="noopener noreferrer">alineamiento</a></li>
                                            <li class="subnav-indice-item"><a href="#margenes-flex" rel="noopener noreferrer">margenes en flexbox</a></li>
                                            <li class="subnav-indice-item"><a href="#flex-flow" rel="noopener noreferrer">flex-flow</a></li>
                                            <li class="subnav-indice-item subnav-indice-item-active-1"><a href="#propiedades-flex-item">propiedades flex-item</a>
                                                <nav class="subnav-2">
                                                    <ul class="subnav-indice-ul-2">
                                                        <li><a href="#flex-grow" rel="noopener noreferrer">flex-grow</a></li>
                                                        <li><a href="#flex-shrink" rel="noopener noreferrer">flex-shrink</a></li>
                                                        <li><a href="#flex-basis" rel="noopener noreferrer">flex-basis</a></li>
                                                        <li><a href="#flex-shorthand" rel="noopener noreferrer">flex</a></li>
                                                        <li><a href="#flex-order" rel="noopener noreferrer">order</a></li>
                                                    </ul>
                                                </nav>
                                            </li>
                                        </ul>
                                    </nav>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- CSS Grid -->
                    <div class="indice-container">
                        <nav class="nav-indice">
                            <ul class="nav-indice-ul">
                                <li class="nav-indice-item"><a href="#grid-layout" rel="noopener noreferrer">CSS Grid</a>
                                    <nav class="subnav-1">
                                        <ul class="subnav-indice-ul-1">
                                            <li class="subnav-indice-item"><a href="#grid-config" rel="noopener noreferrer">Configuración de layout</a></li>
                                            <li class="subnav-indice-item"><a href="#grid-position" rel="noopener noreferrer">Posicionando los grid-items</a></li>
                                            <li class="subnav-indice-item"><a href="#row-height" rel="noopener noreferrer">alto de filas</a></li>
                                            <li class="subnav-indice-item"><a href="#grid-layout-um" rel="noopener noreferrer">medidas</a></li>
                                            <li class="subnav-indice-item"><a href="#grid-layout-repeat" rel="noopener noreferrer">repeat&#40 &#41</a></li>
                                            <li class="subnav-indice-item"><a href="#grid-types" rel="noopener noreferrer">Implicit & explicit grid</a></li>
                                            <li class="subnav-indice-item"><a href="#grid-limit" rel="noopener noreferrer">min-max, auto-fill & auto-fit</a></li>
                                            <li class="subnav-indice-item subnav-indice-item-active-2"><a href="#aling-order">Alineamiento & order</a>
                                                <nav class="subnav-2">
                                                    <ul class="subnav-indice-ul-2">
                                                        <li><a href="#grid-justify-items" rel="noopener noreferrer">justify-items</a></li>
                                                        <li><a href="#grid-align-items" rel="noopener noreferrer">align-items</a></li>
                                                        <li><a href="#grid-align-center" rel="noopener noreferrer">centrado</a></li>
                                                        <li><a href="#align-grid-container" rel="noopener noreferrer">Alineamiento respecto al grid container</a></li>
                                                        <ul>
                                                            <li><a href="#grid-justify-content" rel="noopener noreferrer">justify-content</a></li>
                                                            <li><a href="#grid-align-content" rel="noopener noreferrer">align-content</a></li>
                                                            
                                                            <li><a href="#grid-place-content" rel="noopener noreferrer">place-content</a></li>
                                                        </ul>                                                        
                                                        <li><a href="#grid-align-items-especific" rel="noopener noreferrer">Alinear un item especifico</a></li>                    
                                                        <li><a href="#grid-order" rel="noopener noreferrer">order</a></li>
                                                    </ul>
                                                </nav>
                                            </li>                            
                                            <li class="subnav-indice-item"><a href="#grid-template-areas" rel="noopener noreferrer">grid template areas</a></li>
                                            <li class="subnav-indice-item"><a href="#grid-lines" rel="noopener noreferrer">Nombrando grid lines</a></li>
                                        </ul>
                                    </nav>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Responsive design -->
                    <div class="indice-container">
                        <nav class="nav-indice">
                            <ul class="nav-indice-ul">
                                <li class="nav-indice-item"><a href="#">Responsive Web Design</a>
                                    <nav class="subnav-1">
                                        <ul class="subnav-indice-ul-1">
                                            <li class="subnav-indice-item"><a href="#videos-responsive" rel="noopener noreferrer">Vídeos responsive</a></li>
                                            <li class="subnav-indice-item"><a href="#" rel="noopener noreferrer">Breakpoints</a>
                                            </li>
                                        </ul>        
                                    </nav>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-content">
            <!--Clase 28 - Object-fit, Object-position y filter-->
            <section id="obj-fit" class="section">
                <!--object-fit-->
                <article class="article obj-fit">
                    <h2>Object-fit, Object-position y Filter&#40 &#41 </h2>
                    <h3>object-fit</h3>
                    <p class="destacado">
                        Se usa para especificar cómo se debe cambiar el tamaño de &lt;img&gt; o &lt;video&gt; para que se ajuste a su contenedor.
                    </p>
                    
                    <div class="content">
                        <dl class="dl-list">
                            <dt><span>fill:</span></dt>
                            <dd class="dd-list-item">Valor por defecto</dd>
                            
                        </dl>

                        <dl class="dl-list">
                            <dt><span>contain</span></dt>
                            <dd class="dd-list-item">El contenido se ajustará hasta rellenar de forma horizontal o vertical el contenedor sin deformarse.</dd>
                        </dl>

                        <dl class="dl-list">
                            <dt><span>cover</span></dt>
                            <dd class="dd-list-item">El contenido se ajustará hasta rellenar de forma horizontal y vertical el contenedor sin deformarse.</dd>
                        </dl>

                        <dl class="dl-list">
                            <dt><span>none</span></dt>
                            <dd class="dd-list-item">El contenido no se redimensiona y mantiene su tamño original mostrando solo el trozo de las dimensiones especificadas.
                            </dd>
                        </dl>

                        <dl class="dl-list">
                            <dt><span>scale-down</span></dt>
                            <dd class="dd-list-item">Selecciona el menor de la comparación entre none y contain.
                            </dd>
                        </dl>
                    </div>
                    <div class="div-foot">
                        <p>Más info:</p>
                        <a href="https://developer.mozilla.org/es/docs/Web/CSS/object-fit" target="_blank" class="btn-link">MDN</a>
                        <a href="ejemplos_clases/clase28/clase28.html" target="_blank" class="btn-demo">Demo</a>
                    </div>
                </article>

                <!--object-position-->
                <article id="obj-position" class="article obj-position">
                    <h3>object-position</h3>
                    <p class="destacado">
                        Posiciona la imagen cuando esta no se muestra completa en el contenedor. Funciona sólo con <span class="c-primary">cover</span> &#40para el eje X&#41 y <span class="resaltar">scale-down</span> &#40para el eje Y&#41
                    </p>
                    <div class="content">
                        <p>object-position acepta 1 y/o 2 valores.</p>
                        <ul class="dd-list">
                            <li class="dd-list-item">Con 1 valor:</li>
                            <pre class="pre-list">
                                object-fit: cover;
                                object-position: left | center | right
    
                                object-fit: scale-down;
                                object-position: top | center |bottom
                            </pre>
                            <li class="dd-list-item">Con 2 valores:</li>
                            <pre class="pre-list">
                                object-position: left top | left bottom
                                object-position: right top | right bottom
                            </pre>
                        </ul>

                        <dl class="dl-list">
                            <dt><span>left</span></dt>
                            <dd class="dd-list-item">Posiciona la imagen al lado izquierdo de su contenedor.</dd>
                        </dl>

                        <dl class="dl-list">
                            <dt><span>center</span></dt>
                            <dd class="dd-list-item">Posiciona la imagen al centro horizontal de su contenedor.</dd>
                        </dl>

                        <dl class="dl-list">
                            <dt><span>right</span></dt>
                            <dd class="dd-list-item">Posiciona la imagen al lado derecho de su contenedor.</dd>
                        </dl>

                        <dl class="dl-list">
                            <dt><span>top</span></dt>
                            <dd class="dd-list-item">Posiciona la imagen en la parte superior de su contenedor.</dd>
                        </dl>

                        <dl class="dl-list">
                            <dt><span>center</span></dt>
                            <dd class="dd-list-item">Posiciona la imagen al centro vertical de su contenedor.</dd>
                        </dl>

                        <dl class="dl-list">
                            <dt><span>bottom</span></dt>
                            <dd class="dd-list-item">Posiciona la imagen en la parte inferior de su contenedor.</dd>
                        </dl>
                    </div>
                    <div class="div-foot">
                        <p>Más info</p>
                        <a href="https://developer.mozilla.org/es/docs/Web/CSS/object-position" target="_blank" class="btn-link">MDN</a>
                    </div>
                </article>
                
                <!--filter-->
                <article id="filter" class="article filter">
                    <h3>filter: Filtro de imágenes</h3>
                    <div class="content">
                        <dl class="dl-list">
                            <dt><span>blur&#40 &#41</span></dt>
                            <dd class="dd-list-item">Desenfoca la imagen.</dd>
                        </dl>
                        <pre class="pre-list">
                            filter: blur&#40 20px &#41 ;
                        </pre>

                        <dl class="dl-list">
                            <dt><span>brightness&#40 &#41</span></dt>
                            <dd class="dd-list-item">Ajusta el brillo de la imagen.
                            </dd>
                        </dl>
                        <pre class="pre-list">
                            filter: bightness &#40 0.5 &#41 ; //medio oscuro
                            filter: bightness&#40 1 &#41 ; //brillo natural
                            filter: bightness &#40 0 &#41 ; //totalmente negro
                        </pre>

                        <dl class="dl-list">
                            <dt><span>contrast&#40%&#41</span></dt>
                            <dd class="dd-list-item">Ajusta el contraste de la imagen.
                            </dd>
                        </dl>
                        <pre class="pre-list">
                            filter: contrast&#40 1 &#41 ; //Contraste original
                            filter: contrast&#40 0.5 &#41 ; //Semi oscuro
                            filter: contrast&#40 0 &#41 ; //Totalmente negro
                            filter: contrast&#40 20 &#41 ; //Contraste personalizado
                        </pre>

                        <dl class="dl-list">
                            <dt><span>drop-shadow&#40 &#41</span></dt>
                            <dd class="dd-list-item">Aplica una sombra paralela a la imagen. Acrepta valores negativos.
                            </dd>
                        </dl>
                        <pre class="pre-list">
                            drop-shadow&#40 h-shadow v-shadow blur spread color&#41
                        </pre>

                        <ul class="dl-list">
                            <li class="dd-list-item">h-shadown:sombra horizontal</li>
                            <li class="dd-list-item">v-shadown: sombra vertical</li>
                            <li class="dd-list-item">blur: desenfoque.</li>
                            <li class="dd-list-item">spread: extension de la sombra. Funciona en chrome. No en mozilla.</li>
                            <li class="dd-list-item">color: color de la sombra.</li>
                        </ul>
                        
                        <dl class="dl-list">
                            <dt><span>grayscale&#40 &#41</span></dt>
                            <dd class="dd-list-item">Convierte la imagen en escala de grises.
                            </dd>
                        </dl>

                        <ul class="dl-list">
                            <li class="dd-list-item">Recibe un valor como porcentaje</li>
                            <li class="dd-list-item">Cero es el valor original.</li>
                        </ul>
                        <pre class="pre-list">
                            filter: grayscale&#40 % &#41 ;
                            filter: grayscale&#40 0 &#41 ; //sin efecto: valor por defecto
                            filter: grayscale&#40 1 &#41 ; //color gris
                            filter: grayscale&#40 100% &#41 ;
                            filter: grayscale&#40 0.5 &#41 ;
                            filter: grayscale&#40 50% &#41 ;
                        </pre>

                        <dl class="dl-list">
                            <dt><span>hue-rotate&#40deg&#41</span></dt>
                            <dd class="dd-list-item">Añade matiz de color a la imagen. Se da un valor en grados según la rueda cromática. El valor máximo es 360deg.
                            </dd>
                        </dl>
                        <pre class="pre-list">
                            filter:hue-rotate&#40 45deg &#41 ;
                        </pre>

                        <dl class="dl-list">
                            <dt><span>invert&#40%&#41</span></dt>
                            <dd class="dd-list-item">Invierte el color de la imagen. Saca un negativo. 0 es el valor por defecto y 1 es totalmente invertida.
                            </dd>
                        </dl>
                        <pre class="pre-list">
                            filter: invert&#40 1 &#41
                            filter: invert&#40 0.5 &#41
                        </pre>

                        <dl class="dl-list">
                            <dt><span>opacity&#40%&#41</span></dt>
                            <dd class="dd-list-item">Controla la opacidad de la imagen. 1 es el valor por defecto y 0 es totalmente transparente.
                            </dd>
                        </dl>
                        <pre class="pre-list">
                            filter: opacity&#40 0.5 &#41
                        </pre>

                        <dl class="dl-list">
                            <dt><span>saturate&#40%&#41</span></dt>
                            <dd class="dd-list-item">Controla la saturación de color de la imagen. 1 es el valor por defecto, 0 es totalmente desaturada y por encima de 1 se sobresatura.
                            </dd>
                        </dl>
                        <pre class="pre-list">
                            filter: saturate&#40 0.5 &#41
                            filter: saturate&#40 2 &#41 //sobresaturacion
                        </pre>

                        <dl class="dl-list">
                            <dt><span>sepia&#40%&#41</span></dt>
                            <dd class="dd-list-item">Aplica un tono sepia a la imagen. 0 es el valor por defecto y 1 es totalmente sepia.
                            </dd>
                        </dl>
                        <pre class="pre-list">
                            filter: sepia&#40 0.5 &#41
                        </pre>
                    </div>
                    <div class="div-foot">
                        <p>Más info</p>
                        <a href="https://developer.mozilla.org/es/docs/Web/CSS/filter" target="_blank" class="btn-link">MDN</a>
                    </div>
                </article>
            </section>

            <!--Clase 29 - clip-path -->
            <section id="clip-path" class="section">
                <article class="article clip-path">
                    <h2>Clip-path</h2>
                    <p class="destacado">
                        Es una máscara que oculta partes de una caja.
                    </p>
                    
                    <div class="content">
                        <dl class="dl-list">
                            <dt><span>circle&#40 &#41</span></dt>
                            <dd class="dd-list-item">Dibuja un círculo, puede tener una medida fija o especificar un centro con at.
                            </dd>
                        </dl>
                        <pre class="pre-list">
                            clip-path: circle&#40 200px &#41 ;
                            clip-path: circle&#40 200px at 100px 300px&#41 ;
                        </pre>

                        <dl class="dl-list">
                            <dt><span>ellipse&#40 &#41</span></dt>
                            <dd class="dd-list-item">Dibuja una elipse, funciona igual que el círculo, pero en este caso se debe especificar 2 centros, el horizontal y el vertical.
                            </dd>
                        </dl>
                        <pre class="pre-list">
                            ellipse&#40all| Y X | top X bottom | top left bottom right&#41

                            clip-path: ellipse&#40 300px 100px &#41 ;
                            clip-path: ellipse&#40 300px 200px at top &#41 ;
                            clip-path: ellipse&#40 300px 200px at right bottom &#41 ;
                        </pre>
                        
                        <dl class="dl-list">
                            <dt><span>inset&#40 &#41</span></dt>
                            <dd class="dd-list-item">Hace transparente parte del borde de una caja por dentro.
                            </dd>
                        </dl>
                        <p>Existe la opción de redondear las esquinas:</p>
                        <pre class="pre-list">
                            inset&#40*** round all |
                            top-left & bottom-right top-right & bottom-left |
                            top-left top-right & bottom-left bottom-right
                            top-left top-right bottom-right bottom-left
                            &#41
                        </pre>

                        <pre class="pre-list">
                            clip-path: inset&#40 200px round 20px&#41 ;
                            clip-path: inset&#40 200px round 20px 100px&#41 ;
                            clip-path: inset&#40 200px round 20px 50px 100px&#41 ;
                            clip-path: inset&#40 200px round 20px 100px 80px&#41 ;
                        </pre>

                        <dl class="dl-list">
                            <dt><span>polygon&#40 &#41</span></dt>
                            <dd class="dd-list-item">
                                    Especifica una serie de puntos &#40mínimo 3&#41 para definir la zona visible siendo el punto 0 0 la esquina superior
                                    izquierda. Los puntos se especifican por parejas de ejeX y ejeY separados por comas
                                
                            </dd>
                        </dl>
                        <pre class="pre-list">
                            clip-path: polygon&#40 0 0, 100% 0, 0 100% &#41 ;
                            clip-path: polygon&#40 0 0, 100% 0, 0 100%, 100% 100% &#41 ;
                            clip-path: polygon&#40 0 0, 50% 25%, 100% 0, 75% 50%, 100% 100%, 50% 75%, 0 100%, 25% 50%&#41 ;
                        </pre>
                    </div>
                    <div class="div-foot">
                        <p>Más info:</p>
                        <a href="https://developer.mozilla.org/es/docs/Web/CSS/clip-path" target="_blank" class="btn-link">MDN</a>
                        <a href="ejemplos_clases/clase29/clase29.html" target="_blank" class="btn-demo">DEMO</a>
                    </div>
                </article>
            </section>

            <!--Clase 30 - Colores -->
            <section id="colores" class="section">
                <article class="article colores">
                    <h2>Colores</h2>
                    <p class="destacado">
                        Hay varias formas de dar color a los elementos.
                    </p>

                    <div class="content">
                        <h3>Sintaxis de los colores</h3>
                        <dl class="dl-list">
                            <dt><span>Con palabras clave</span></dt>
                            <dd class="dd-list-item">Nombre de colores en idioma humano.
                            </dd>
                        </dl>
                        <pre class="pre-list">
                            color: blueviolet;
                            background-color: aquamarine;
                        </pre>

                        <dl class="dl-list">
                            <dt><span>RGB</span>:</dt>
                            <dd class="dd-list-item"> Es una función de color que recibe 3 valores separados por comas, siendo 0 el mínimo y 255 el máximo.
                            </dd>
                        </dl>
                        <pre class="pre-list">
                            color: rgb&#40 0,0,0 &#41 => negro
                            color: rgb&#40 255,255,255 &#41 => blanco.
                        </pre>

                        <dl class="dl-list">
                            <dt><span>RGBA</span>:</dt>
                            <dd class="dd-list-item">Es una variación de RGB con un cuarto valor que sería el canal alpha, valor que controla la opacidad. Sus valores van de 0 a 1, siendo 0 transparente y 1 opaco.
                            </dd>
                        </dl>                            
                        <pre class="pre-list">
                            background-color: rgba&#40 255, 125, 4, .4 &#41 ;
                        </pre>

                        <dl class="dl-list">
                            <dt><span>Hexadecimal</span>:</dt>
                            <dd class="dd-list-item"> La notación hexademal tiene 16 valores, 0-1-2-3-4-5-6-7-8-9-A-B-C-D-E-F. Se escriben con un # al inicio y se pueden usar 3 o 6 valores. Si se usan 6 valores deben ir en parejas &num;ffffff, pero cuando las parejas tienen el mismo valor se suele obviar y se ponen solo 3  valores &num;fff.
                            </dd>

                            <dd class="dd-list-item">El código hexadecimal se representa con los canales rgb de esta forma #rgb o #rrggbb. Utilizar el modo hexadecimal cuando se buscan colores especiales se queda corto si no utilizamos un preprocesador, ya que no podemos controlar la luminosidad, la saturación, etc.
                            </dd>

                            <dd class="dd-list-item">Cuando los 3/6 valores son iguales es un color neutro, &num;000 sería negro y &num;fff blanco, y todos los valores intermedios serían grises con mayor o menor luminosidad &num;666, &num;aaa.
                            </dd>
                        </dl>
                        
                        <pre class="pre-list">
                            background-color: &num;00ff80;
                        </pre>
                        <dl class="dl-list">
                            <dt><span>HSL&#40hue, saturation, lightness&#41</span>:</dt>
                            <dd class="dd-list-item"> Es una función de color que nos permite controlar el tono, la saturación y la luminosidad. Es el modo de color que se recomienda para tener un control total sobre los colores.
                            </dd>
                        </dl>
                        <ul class="dl-list">
                            <li class="dd-list-item"><span>hue</span>
                                Es el ángulo en la rueda cromática. Los valores van de 0 a 360 grados.
                            </li>
                            <li class="dd-list-item"><span>saturation</span>
                                Es la intensidad del color. Los valores van de 0 &#40gris&#41 a 100% &#40color puro&#41
                            </li>
                            <li class="dd-list-item"><span>lightness</span>
                                Es la intensidad de la luz. Los valores van de 0 &#40negro&#41 a 100% &#40blanco&#41
                            </li>
                            <li class="dd-list-item"><span>HSLA</span>: Exactamente igual que RGBA</li>
                        </ul>

                        <pre class="pre-list">
                            background-color: hsl&#40 120,26%,30%&#41 ;

                            background-color: hsla&#40 120,26%,30%,.8&#41 ;
                        </pre>
                        
                        <div class="content">
                            <img src="img/hsl.jpg" alt="" class="img-center">
                        </div>
                    </div>
                    <div class="div-foot">
                        <p>Más info:</p>
                        <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/color_value" target="_blank" class="btn-link">MDN</a>
                    </div>
                </article>
            </section>

            <!--Clase 31 - Border radius-->
            <section id="border-radius" class="section">
                <article  class="article border-radius">
                    <h2>Border-radius</h2>
                    <p class="destacado">
                        Establece un borde redondeado a las esquinas de una caja.
                    </p>
                    <div class="content">
                        <p>Es un shorthand que engloba:</p>
                        <pre class="pre-list">
                            border-top-left-radius
                            border-top-right-radius
                            border-bottom-right-radius
                            border-bottom-left-radius
                        </pre>
                        <p>Sintaxis:</p>
                        <pre class="pre-list">
                            border-radius: all; //Afecta a todas las esquinas de la caja.
                        </pre>
                        <div class="br-all br-item">
                            <pre class="pre-fondo">
                            border-radius: all
                            border-radius: 20px;
                            -webkit-border-radius: 20px;
                            -moz-border-radius: 20px;
                            -ms-border-radius: 20px;
                            -o-border-radius: 20px;
                            </pre>
                        </div>

                        <pre class="pre-list">
                            border-radius: &#40top-left  bottom-right&#41 &#40top-right bottom-left&#41 ;
                        </pre>

                        <div class="border-dos__valores br-item">
                            <pre class="pre-fondo">
                                border-radius: 20px 100px;
                            </pre>
                        </div>

                        <pre class="pre-list">
                            border-radius: &#40top-left &#40top-right bottom-left&#41 &#40bottom-right&#41 ;
                        </pre>
                        
                        <div class="border-tres__valores br-item">
                            <pre class="pre-fondo">
                                border-radius: 20px 40px 10px;
                            </pre>
                        </div>

                        <pre class="pre-list">
                            border-radius: top-left top-right bottom-left bottom-right;
                        </pre>

                        <div class="border-cuatro__valores br-item">
                            <pre class="pre-fondo">
                                border-radius: 20px 40px 10px 30px;
                            </pre>
                        </div>

                        <h3>ellipse</h3>
                        <pre class="pre-list">
                            border-radius: 10px / 50px;

                            Es equivalente a:
                            border-top-left-radius: 10px 50px;
                            border-top-right-radius: 10px 50px;
                            border-bottom-right-radius: 10px 50px;
                            border-bottom-left-radius: 10px 50px;
                            
                            border-radius: 10px 50px / 50px 100px;

                            Es equivalente a:
                            border-top-left-radius: 10px 50px;
                            border-top-right-radius: 50px 100px;
                            border-bottom-right-radius:10px 50px;
                            border-bottom-left-radius: 50px 100px;
                            
                            border-radius: 10px 50px 60px / 50px 100px 200px;

                            Es equivalente a:
                            border-top-left-radius: 10px 50px;
                            border-top-right-radius: 50px 100px;
                            border-bottom-right-radius:60px 200px;
                            border-bottom-left-radius: 50px 100px;
                            
                            border-radius: 10px 50px 60px 80px/ 50px 100px 200px 300px;

                            Es equivalente a:
                            border-top-left-radius: 10px 50px;
                            border-top-right-radius: 50px 100px;
                            border-bottom-right-radius:60px 200px;
                            border-bottom-left-radius: 80px 300px;
                        </pre>
                        
                        <div class="br-item br-1">
                            <pre class="pre-fondo">
                                border-radius: 30px / 80px;  
                            </pre>
                        </div>
                        <p>Equivalente</p>
                        <div class="br-item br-1__equivalente">
                            <pre class="pre-view">
                                border-top-left-radius: 30px 80px;
                                border-top-right-radius: 30px 80px;
                                border-bottom-right-radius: 30px 80px;
                                border-bottom-left-radius: 30px 80px;
                            </pre>
                        </div>
                        <p>Con 2 valores:</p>
                        <div class="br-item br-2">
                            <pre class="pre-fondo">
                                border-radius: 10px 30px / 60px 90px;
                            </pre>
                        </div>
                        <p>Con 3 valores:</p>
                        <div class="br-item br-3">
                            <pre class="pre-fondo">
                                border-radius: 10px 50px 60px / 50px 100px 200px;
                            </pre>
                        </div>
                        <p>Con 4 valores:</p>
                        <div class="br-item br-4">
                            <pre class="pre-fondo">
                                border-radius: 10px 50px 60px 80px/ 50px 100px 200px 300px
                            </pre>
                        </div>
                    </div>
                    <div class="div-foot">
                        <p>Más info:</p>
                        <a href="https://developer.mozilla.org/es/docs/Web/CSS/border-radius" target="_blank" class="btn-link">MDN</a>
                    </div>
                </article>
            </section>

            <!--clase 32 - Box shadow & text shadow-->
            <section id="box-shadow" class="section">
                <article class="article box-shadow">
                    <h2>Box-shadow</h2>
                    <p class="destacado">
                        Es una propiedad que crea una una sombra del tamaño de la caja
                    </p>
                    <div class="content">
                        <pre class="pre-list">
                            box-shadow: h-offset v-offset blur-radius spread-radius color inset|outset
                        </pre>
                        <p>Sintaxis</p>
                        <dl class="dl-list">
                            <dt><span>h-offset</span></dt>
                            <dd class="dd-list-item">Es el desplazamiento horizontal de la sombra.
                            </dd>
                        </dl>

                        <dl class="dl-list">
                            <dt><span>v-offset</span></dt>
                            <dd class="dd-list-item">Es el desplazamiento vertical de la sombra.
                            </dd>
                        </dl>

                        <dl class="dl-list">
                            <dt><span>blur-radius</span></dt>
                            <dd class="dd-list-item">Opcional, es la cantidad de desenfoque de la sombra.
                            </dd>
                        </dl>

                        <dl class="dl-list">
                            <dt><span>spread-radius</span></dt>
                            <dd class="dd-list-item">Opcional, es la extensión de la sombra.
                            </dd>
                        </dl>

                        <dl class="dl-list">
                            <dt><span>color</span></dt>
                            <dd class="dd-list-item">Opcional, es el color de la sombra, si no se especifica tomará el color del texto.
                            </dd>
                        </dl>

                        <dl class="dl-list">
                            <dt><span>inset|outset</span></dt>
                            <dd class="dd-list-item">Opcional, determina si la sombra se dibuja por dentro o por fuera de la caja. 
                                <ul class="dl-list">
                                    <li class="dd-list-item">Con valor outset(default) los valores positivos añaden a derecha y abajo y los valores negativos añaden a iquierda y arriba.</li>
                                    <li class="dd-list-item">Con valor inset se invierten los valores, positivo sería izquierda y arriba y negativo sería derecha y abajo</li>
                                </ul>
                            </dd>
                        </dl>
                        <div class="bshadow bshadow__5valores">
                            <pre class="pre-fondo">box-shadow: 5px 5px 10px 10px gray;</pre>
                        </div>
                        <div class="bshadow bshadow-inset">
                            <pre class="pre-fondo">box-shadow: 5px 5px 10px 10px gray inset;</pre>
                        </div>
                    </div>
                    <div class="div-foot">
                        <p>Más info</p>
                        <a href="https://developer.mozilla.org/es/docs/Web/CSS/box-shadow" target="_blank" class="btn-link">MDN</a>
                    </div>
                </article>
                <article id="multi-shadow" class="article multi-shadow">
                    <h2>Sombras múltiples</h2>
                    <p class="destacado">
                        Se añaden las sombras separadas por comas. Tener presente que las sombras se superponen. La que se verá primero será la que ocupe el primer lugar en la hoja de estilos.
                    </p>
                    <div class="content">
                        <pre class="pre-list">
                            box-shadow: 10px 10px 2px 5px red, -10px -10px 2px 5px blue;
                        </pre>
                        <div class="bshadow mult-shadow">
                            
                        </div>
                        <div class="div-foot">
                            <p>Más info</p>
                            <a href="https://developer.mozilla.org/es/docs/Web/CSS/box-shadow" target="_blank" class="btn-link">MDN</a>
                        </div>
                    </div>
                </article>
                <article id="text-shadow" class="article text-shadow">
                    <h2>text-shadow</h2>
                    <p class="destacado">
                        La propiedad text-shadow agrega sombra al texto.
                    </p>
                    <div class="content">   
                        <ul class="dl-list">
                            <li class="dd-list-item">Acepta una lista de sombras separadas por coma, para aplicarlas al texto y a la propiedad text-decorations del elemento.</li>
                            <li class="dd-list-item">Cada sombra es especificada como un ófset del texto, junto con valores de color y radio de difuminación opcionales.</li>
                            <li class="dd-list-item">Múltiples sombras son aplicadas del frente al fondo, en el mismo orden que sean definidas.</li>
                            <li class="dd-list-item">Esta propiedad aplica para los pseudo-elementos ::first-line y ::first-letter.</li>
                        </ul>
                        <pre class="pre-list">
                            text-shadow: h-offset v-offset blur-radius spread-radius color
                        </pre>
                        <div class="bshadow">
                            <p class=" tshadow">text-shadow: 10px 10px 2px blue;</p>
                        </div>
                    </div>
                    <div class="foot">
                        <p>Más info:</p>
                        <a href="https://developer.mozilla.org/es/docs/Web/CSS/text-shadow" target="_blank" class="btn-link">MDN</a>
                    </div>
                </article>
            </section>

            <!--clase 33 - Degradados I-->
            <section  id="deg-lineal" class="section">
                <article class="article degradados">
                    <h2>Degradados</h2>
                    <p class="destacado">
                        Un degradado es una transición entre un color y otro. El navegador calculará todos los pasos intermedios entre los colores del degradado.
                        <br />Existen 2 tipos de degradados: Lineales y Radiales. En ambos se puede utilizar <span>transparent</span> como color.
                    </p>
                    <div class="content">
                        <!--Degradados lineales-->
                        <h3>Degradados Lineales</h3>
                        <pre class="pre-list">
                            linear-gradient&#40[direction], color-1, color-2....&#41 ;
                            
                            background: linear-gradient&#40red, blue&#41 ;
                        </pre>
                        <p>La dirección es opcional, se puede establecer con un valor de ángulo &#40 20deg, 190deg...&#41 o estableciendo la dirección del degradado con "to top | right | bottom | left | top left | top right| bottom left | bottom right".                            
                        </p>
                        <pre class="pre-list">
                            background: linear-gradient &#40 to &lt;direction&gt; , color_inicio, color_fin &#41 ;
                        </pre>
                        <div class="linear-grad d-flex">
                            <p>background: linear-gradient
                            <br />&#40 rgb &#40 194, 134, 22&#41, rgb &#40 79, 134, 34&#41 &#41 ;</p>
                        </div>
                        <div class="linear-grad__porcentaje d-flex">
                            <p>background: linear-gradient &#40 red 50%, blue 50% 75%, yellow &#41 ;</p>
                        </div>
                        <div class="grad-direction d-flex">
                            <p>background: linear-gradient &#40 to right, red, blue &#41 ; </p>
                        </div>
                        <div class="grad-image d-flex">
                            <p>background: linear-gradient &#40to left, orange 50%, green 50% &#41 ;</p>
                        </div>
                        <div class="grad-image-tres__valores d-flex">
                            <p>background: linear-gradient &#40 to right, orange 25%, green 50%, red 25% &#41 ;</p>
                        </div>
                        <div class="grad-image-to__bottom d-flex">
                            <p>background: linear-gradient &#40 to top, orange 25%, green 50%, red 25% &#41 ;</p>
                        </div>

                        <!--Degradados con ángulos-->
                        <h3>Degradados con ángulo</h3>
                        <div class="grad-image-angular d-flex">
                            <p>background: linear-gradient(45deg, red 50%, blue 50%);</p>
                        </div>

                        <!--Degradados múltiples-->
                        <h3>Múltiples degradados con ángulo</h3>
                        <div class="grad-image-multiple__angular d-flex">
                            <p>background: linear-gradient &#40 217deg, rgba &#40 255,0,0,.8 &#41, rgba &#40 255,0,0,0 &#41 70.71% &#41,
                            linear-gradient &#40 127deg, rgba &#40 0,255,0,.8 &#41, rgba &#40 0,255,0,0 &#41 70.71% &#41,
                            linear-gradient &#40 336deg, rgba &#40 0,0,255,.8 &#41, rgba &#40 0,0,255,0 &#41 70.71% &#41 ;</p>
                        </div>
                    </div>
                    <div class="div-foot">
                        <p>Más info:</p>    
                        <a href="https://css-tricks.com/snippets/css/css-linear-gradient/" target="_blank" class="btn-link">css-tricks</a> 
                        <a href="https://developer.mozilla.org/es/docs/Web/CSS/linear-gradient" target="_blank" class="btn-link">MDN</a>
                    </div>
                </article>
                <!--Degradados radiales-->
                <article id="deg-radiales" class="article deg-radiales">
                    <h3>Degradados Radiales</h3>
                    <p class="destacado">
                        Funcionan de una forma similar a los degradados lineales.
                        <br />Por defecto, shape se ajustará al tamaño de la caja, pero podemos establecer si queremos un círculo o una elipse y definir el radio o los radios.
                    </p>
                    <div class="content">
                        <h3></h3>
                        <ul class="dl-list">
                            <li class="dd-list-item">Si no establecemos un punto de origen, el punto 0 0 será el centro del elemento.</li>
                        </ul>
                        <pre class="pre-list">
                            background: radial-gradient &#40 blue, orange &#41 ;
                        </pre>
                        <div class="g-radial g-radial-1"></div>
                        <pre class="pre-list">
                            background: radial-gradient &#40 [shape], blue, orange &#41 ;
                        </pre>
                        <div class="g-radial g-radial-2"></div>
                        <pre class="pre-list">
                            background: radial-gradient &#40 ellipse 100px 50px, red, blue &#41 ;
                        </pre>
                        <div class="g-radial g-radial-3"></div>
                        <ul class="dl-list">
                            <li class="dd-list-item">Para establecer el punto de origen podemos hacerlo en medidas o con palabras clave.</li>
                            <li class="dd-list-item">Con la palabra "at" se establece el punto de origen. Los valores que acepta son:
                                top | right | bottom | left | center | closest-side | closest-corner | farthest-side | farthest-corner
                            </li>
                            <pre class="pre-list">
                                background: radial-gradient &#40 circle 200px at top left, red 50%, blue 50% &#41 ;
                            </pre>
                            <div class="g-radial g-radial-4"></div>
                            
                            <li class="dd-list-item">Si establecemos un solo valor, el segundo por defecto será center
                            </li>
                            <pre class="pre-list">
                                background: radial-gradient &#40 circle 100px at top, red 50%, blue 50% &#41 ;
                            </pre>
                            <div class="g-radial g-radial-5"></div>
                        </ul>
                    </div>
                </article>
                <!--Degradados con patrones-->
                <article id="deg-patrones" class="article deg-patrones">
                    <h3>Degradados con patrones</h3>
                    <div class="content">
                        <pre class="pre-list">
                            background-image: linear-gradient &#40 45deg, red 50%, blue 50% &#41 ;
                            background-size: 30px 30px;
                        </pre>
                        <div class="g-radial g-radial-6"></div>
                        <pre class="pre-list">
                            background-image: linear-gradient &#40 45deg,
                            red 25%,
                            blue 25%,
                            blue 50%,
                            red 50%,
                            red 75%,
                            blue 75%
                            &#41 ;

                            background: -webkit-repeating-linear-gradient(45deg,
                            red 25%,
                            blue 25%,
                            blue 50%,
                            red 50%,
                            red 75%,
                            blue 75%
                            );

                            background-size: 30px 30px;
                        </pre>
                        <div class="g-radial g-radial-7"></div>

                        <!--clase 34 - Degradados II-->
                        <h3>repeating-linear-gradient</h3>
                        <pre class="pre-list">
                            background: repeating-linear-gradient(70deg,
                            red 0,
                            red 10px,
                            blue 10px,
                            blue 20px);
                            
                            background: -webkit-repeating-linear-gradient(45deg,
                            red 0,
                            red 10px,
                            blue 10px,
                            blue 20px);
                        </pre>
                        <div class="g-radial repeat-linear-grad"></div>
                    </div>
                    <div class="div-foot">
                        <p>Más info:</p>
                        <a href="https://css-tricks.com/snippets/css/css-radial-gradient/" target="_blank" class="btn-link">css-tricks</a> 
                        <a href="https://developer.mozilla.org/es/docs/Web/CSS/radial-gradient" target="_blank" class="btn-link">MDN</a>
                    </div>
                </article>
            </section>
            
            <!--clase 35 - Overflow & float-->
            <section id="overflow"  class="section">
                <article class="article overflow">
                    <h2>Overflow</h2>
                    <p class="destacado">
                        Es una propiedad que controla como se va a comportar la caja con el contenido que se desborde de ella. Es un shorthand que engloba overflow-x y overflow-y
                    </p>
                    <div class="content">
                        <p>Muestra 3 valores posibles:</p>
                        <ul class="dl-list list">
                            <li class="dd-list-item"><span>hidden :</span>Oculta todo el contenido que se desborde.</li>
                            <li class="dd-list-item"><span>auto :</span>Muestra la barra de scroll solo si hace falta.</li>
                            <li class="dd-list-item"><span>scroll :</span>Muestra ambas barras de scroll independientemente de si se necesitan.</li>
                        </ul>
                    </div>
                </article>
                <article id="float" class="article flot">
                    <h2>Float</h2>
                    <p class="destacado">La propiedad float especifica si un elemento debe salir del flujo normal y aparecer a la izquierda o a la derecha de su contenedor. los elementos de texto y los elementos en línea aparecerán a su alrededor.</p>
                    <div class="content">
                        <p>Muestra 3 valores posibles:</p>
                        <ul class="dl-list list">
                            <li class="dd-list-item"><span>left :</span>Flota el elemento a la izquierda del contendor.</li>
                            <li class="dd-list-item"><span>right :</span>Flota el elemento a la derecha del contendor.</li>
                            <li class="dd-list-item"><span>none :</span>Elimina el float.</li>
                        </ul>
                        <p class="destacado">NO EXISTE FLOAT: CENTER!!</p>
                        <p>Un elemento flotado hace que el padre deje de contenerlo, hay varias formas de solucionarlo, la más cómoda es overflow:hidden</p>
                        <p><span>clear</span> lo que hace es evitar que los elementos se coloquen a la derecha o a la izquierda o a ambos lados de los elementos flotados.</p>
                        <br />float y clear casi siempre se complementan.</p>

                    </div>
                    <div class="div-foot">
                        <p>Más info:</p>
                        <a href="https://developer.mozilla.org/es/docs/Web/CSS/float" target="_blank" class="btn-link">MDN-float</a>
                        <a href="https://developer.mozilla.org/es/docs/Web/CSS/clear" target="_blank" class="btn-link">MDN-clear</a>
                    </div>
                </article>
            </section>

            <!--clase 36 - Flexbox - Fundamentos-->
            <section id="flexbox" class="section">
                <article class="article flexbox">
                    <h2>Flexbox</h2>
                    <p class="destacado">
                        Es un modelo de layout que permiten que las cajas sean flexibles.
                    </p>
                    <img src="../desarrollo/img/flexbox-ejes.PNG" alt="flex-ejes" class="img-center">
                    <img src="../desarrollo/img/flex_container.PNG" alt="flex-container" class="img-center">
                    <div class="content">
                        <p>Sintaxis:</p>
                        <pre class="pre-list">
                            .flex-container &#123
                            &nbsp;&nbsp;&nbsp;display-flex
                            &#125

                            .flex-container &#123
                            &nbsp;&nbsp;&nbsp;display-inline-flex
                            &#125
                        </pre>
                        <ul class="dl-list">
                            <li class="dd-list-item">Se necesita un contenedor padre &#40 flex-container &#41 y al menos un contenendor hijo &#40 flex-item &#41</li>                        
                            <li class="dd-list-item">Para hacer que un flex-container tenga un contenido flexible se establece en su propiedad <span>display</span> dos posibles valores que pueden ser : <span>flex</span> e <span>inline-flex</span></li>
                        </ul>
                        
                        <h3>display: flex;</h3>
                        <p>Convierte el contenedor en un contexto para flexbox y hace que el contenedor sea un elemento de bloque para los elementos que lo rodean.</p>
                        <div class="content-flex">
                            <p class="paragraph">Texto de párrafo</p>
                            <div class="content d-flex">
                                <div class="d-item">1</div>
                                <div class="d-item">2</div>
                                <div class="d-item">3</div>
                                <div class="d-item">4</div>
                                <div class="d-item">5</div>
                            </div>
                        </div>
                        
                        <ul class="dl-list">
                            <li class="dd-list-item">Las cajas flexibles son los items. El contenedor padre es el contexto al que pertenecen los items.</li>
                            <li class="dd-list-item">Un flex-item puede ser también un flex-container al mismo tiempo. </li>
                        </ul>
                        
                        <h3>display: inline-flex;</h3>
                        <p>Convierte el contenedor en un contexto para flexbox y hace que el contenedor sea un elemento en línea para los elementos que lo rodean.</p>
                        <div class="content-flex d-inline__flex">
                            <p class="paragraph">Texto de párrafo</p>
                            <div class="content d-flex">
                                <div class="d-item">1</div>
                                <div class="d-item">2</div>
                                <div class="d-item">3</div>
                                <div class="d-item">4</div>
                                <div class="d-item">5</div>
                            </div>
                        </div>
                    </div>
                </article>

                <!--Propiedades del flex-container-->
                <article id="flex-direction" class="article propiedades-flex-container">
                    <h2>Propiedades del flex-container</h3>                    
                    <p class="destacado">
                        Son propiedades que definen los distintos comportamientos de los flex-item. Para ello se debe primero definir el eje principal del layout. A partir de aqui se definirà el comportamiento de los <span>flex-item</span>.
                    </p>

                    <!--Definiendo los ejes principales-->
                    <div class="content flex-direction">
                        <h4 id="flex-direction">flex-direction</h4>
                        <p>Define la dirección &#40fila o columna&#41 y sentido del <span>main-axis</span> &#derecha a izquierda o viceversa&#41 que deben seguir los <span>flex-item</span>.</p>
                        <!-- row -->
                        <dl class="dl-list">
                            <dt><span>row</span></dt>
                            <dd class="dd-list-item">Es el valor por defecto. Define el main-axis como el eje principal en forma de fila y con direccion de izquierda a derecha.
                            </dd>
                        </dl>
                        <div class="content d-flex f-row">
                            <div class="d-item">1</div>
                            <div class="d-item">2</div>
                            <div class="d-item">3</div>
                            <div class="d-item">4</div>
                            <div class="d-item">5</div>
                        </div>
                        <!-- row-reverse -->
                        <dl class="dl-list">
                            <dt><span>row-reverse</span></dt>
                            <dd class="dd-list-item">Dirección de derecha a izquierda.
                            </dd>
                        </dl>
                        <div class="content d-flex f-row__reverse">
                            <div class="d-item">1</div>
                            <div class="d-item">2</div>
                            <div class="d-item">3</div>
                            <div class="d-item">4</div>
                            <div class="d-item">5</div>
                        </div>
                        <!-- column -->
                        <dl class="dl-list">
                            <dt><span>column</span></dt>
                            <dd class="dd-list-item">Establece el cross-axis como eje principal en forma de columna y en la dirección de arriba a abajo.
                            </dd>
                        </dl>
                        <div class="content d-flex f-column">
                            <div class="d-item">1</div>
                            <div class="d-item">2</div>
                            <div class="d-item">3</div>
                            <div class="d-item">4</div>
                            <div class="d-item">5</div>
                        </div>
                        <!-- column-reverse -->
                        <dl class="dl-list">
                            <dt><span>column-reverse</span></dt>
                            <dd class="dd-list-item">dirección de abajo a arriba.
                            </dd>
                        </dl>
                        <div class="content d-flex f-column__reverse">
                            <div class="d-item">1</div>
                            <div class="d-item">2</div>
                            <div class="d-item">3</div>
                            <div class="d-item">4</div>
                            <div class="d-item">5</div>
                        </div>
                    </div>
                </article>
                <article id="flex-wrap" class="article flex-wrap">
                    <!--clase 37 - Flexbox - flex-direction & flex-wrap-->
                    <h2>Comportamiento de los flex-item</h2>
                    <h3>flex-wrap</h3>
                    <p class="destacado">Según lo que se establezca en el <span>flex-direction</span> se pueden aplicar la propiedad <span>flex-wrap</span> con sus posibles valores:</p>
                    <div class="content flex-wrap">
                        <dl class="dl-list">
                            <dt><span>nowrap</span></dt>
                            <dd class="dd-list-item">Es el valor por defecto. Los flex-item se acomodarán en una sola fila o columna.
                            </dd>
                        </dl>
                        <div class="content d-flex">
                            <div class="d-item">1</div>
                            <div class="d-item">2</div>
                            <div class="d-item">3</div>
                            <div class="d-item">4</div>
                            <div class="d-item">5</div>
                            <div class="d-item">6</div>
                            <div class="d-item">7</div>
                            <div class="d-item">8</div>
                            <div class="d-item">9</div>
                            <div class="d-item">10</div>
                            <div class="d-item">11</div>
                            <div class="d-item">12</div>
                            <div class="d-item">13</div>
                            <div class="d-item">14</div>
                            <div class="d-item">15</div>
                        </div>

                        <dl class="dl-list">
                            <dt><span>wrap</span></dt>
                            <dd class="dd-list-item">Los flex-item se acomodarán ocupando nuevas filas o columnas según sea el caso.
                            </dd>
                        </dl>
                        <div class="content d-flex df-wrap">
                            <div class="d-item">1</div>
                            <div class="d-item">2</div>
                            <div class="d-item">3</div>
                            <div class="d-item">4</div>
                            <div class="d-item">5</div>
                            <div class="d-item">6</div>
                            <div class="d-item">7</div>
                            <div class="d-item">8</div>
                            <div class="d-item">9</div>
                            <div class="d-item">10</div>
                            <div class="d-item">11</div>
                            <div class="d-item">12</div>
                            <div class="d-item">13</div>
                            <div class="d-item">14</div>
                            <div class="d-item">15</div>
                        </div>

                        <dl class="dl-list">
                            <dt><span>wrap-reverse</span></dt>
                            <dd class="dd-list-item">Hace lo mismo que <span>wrap</span> pero en lugar de hacer que salten a la línea inferior, hace que salten a la linea superior.
                            </dd>
                        </dl>
                        <div class="content d-flex df-wrap__reverse">
                            <div class="d-item">1</div>
                            <div class="d-item">2</div>
                            <div class="d-item">3</div>
                            <div class="d-item">4</div>
                            <div class="d-item">5</div>
                            <div class="d-item">6</div>
                            <div class="d-item">7</div>
                            <div class="d-item">8</div>
                            <div class="d-item">9</div>
                            <div class="d-item">10</div>
                            <div class="d-item">11</div>
                            <div class="d-item">12</div>
                            <div class="d-item">13</div>
                            <div class="d-item">14</div>
                            <div class="d-item">15</div>
                        </div>
                    </div>
                </article>
            </section>
            
            <!--clase 38 - Flexbox - Alineamiento-->
            <section id="alineamiento-flex-item" class="section">
                <article class="article alineamiento-flex-item">
                    <h2>Alineamientos</h2>
                    <p class="destacado">
                        Son propiedades del <span>flex-container</span> y se aplican para alinear a los <span>flex-items</span>. Existen propiedades para el main-axis y para el cross-axis.
                    </p>

                    <!--main axiss-->
                    <div class="content main-axis">
                        <h3>main-axis</h3>
                        <p>Alineación en el eje principal.</p>
                        <h4>justify-content</h4>

                        <dl class="dl-list">
                            <dt><span>flex-start</span></dt>
                            <dd class="dd-list-item">Alinea los elementos al principio del main axis.
                            </dd>
                        </dl>
                        <div class="justify-content d-flex j-c-start">
                            <div class="d-item">1</div>
                            <div class="d-item">2</div>
                            <div class="d-item">3</div>
                            <div class="d-item">4</div>
                            <div class="d-item">5</div>
                        </div>

                        <dl class="dl-list">
                            <dt><span>center</span></dt>
                            <dd class="dd-list-item">Centra los elementos en la mitad del main axis.
                            </dd>
                        </dl>
                        <div class="justify-content d-flex j-c-center">
                            <div class="d-item">1</div>
                            <div class="d-item">2</div>
                            <div class="d-item">3</div>
                            <div class="d-item">4</div>
                            <div class="d-item">5</div>
                        </div>

                        <dl class="dl-list">
                            <dt><span>flex-end</span></dt>
                            <dd class="dd-list-item">Alinea los elementos al final del main axis.
                            </dd>
                        </dl>
                        <div class="justify-content d-flex j-c-end">
                            <div class="d-item">1</div>
                            <div class="d-item">2</div>
                            <div class="d-item">3</div>
                            <div class="d-item">4</div>
                            <div class="d-item">5</div>
                        </div>

                        <dl class="dl-list">
                            <dt><span>space-between</span></dt>
                            <dd class="dd-list-item">Distribuye los items a la misma distancia y no deja espacio exterior ni en el primer ni en el último flex-end.
                            </dd>
                        </dl>
                        <div class="justify-content d-flex j-c-space__between">
                            <div class="d-item">1</div>
                            <div class="d-item">2</div>
                            <div class="d-item">3</div>
                            <div class="d-item">4</div>
                            <div class="d-item">5</div>
                        </div>

                        <dl class="dl-list">
                            <dt><span>space-around</span></dt>
                            <dd class="dd-list-item">Distribuye los items a la misma distancia y deja un espacio exterior en el primer y en el último flex-item.
                            </dd>
                        </dl>
                        <div class="justify-content d-flex j-c-space__around">
                            <div class="d-item">1</div>
                            <div class="d-item">2</div>
                            <div class="d-item">3</div>
                            <div class="d-item">4</div>
                            <div class="d-item">5</div>
                        </div>

                        <dl class="dl-list">
                            <dt><span>space-evenly</span></dt>
                            <dd class="dd-list-item">Distribuye los items y los espacios exteriores del primer y último flex-item dejando la misma distancia entre todos.
                            </dd>
                        </dl>
                        <div class="justify-content d-flex j-c-space__evenly">
                            <div class="d-item">1</div>
                            <div class="d-item">2</div>
                            <div class="d-item">3</div>
                            <div class="d-item">4</div>
                            <div class="d-item">5</div>
                        </div>
                    </div>

                    <!--cross axis-->
                    <div class="content cross-axis">
                        <h3>cross-axis</h3>
                        <p>Alineación en el eje secundario.</p>
                        <h4>align-items</h4>
                        <dl class="dl-list">
                            <dt><span>stretch</span></dt>
                            <dd class="dd-list-item">Es el valor por defecto. Los flex-item ocuparán todo lo alto del flex-container.
                            </dd>
                        </dl>
                        <div class="justify-content d-flex content-height__200 f-stretch">
                            <div class="d-item-1">1</div>
                            <div class="d-item-1">2</div>
                            <div class="d-item-1">3</div>
                            <div class="d-item-1">4</div>
                            <div class="d-item-1">5</div>
                        </div>
                        
                        <dl class="dl-list">
                            <dt><span>flex-start</span></dt>
                            <dd class="dd-list-item">Alinea los flex-item arriba.
                            </dd>
                        </dl>
                        <div class="justify-content d-flex content-height__200 f-start">
                            <div class="d-item">1</div>
                            <div class="d-item">2</div>
                            <div class="d-item">3</div>
                            <div class="d-item">4</div>
                            <div class="d-item">5</div>
                        </div>
                        
                        <dl class="dl-list">
                            <dt><span>center</span></dt>
                            <dd class="dd-list-item">Alinea los flex-item al centro.
                            </dd>
                        </dl>
                        <div class="justify-content d-flex content-height__200 f-center">
                            <div class="d-item">1</div>
                            <div class="d-item">2</div>
                            <div class="d-item">3</div>
                            <div class="d-item">4</div>
                            <div class="d-item">5</div>
                        </div>
                        
                        <dl class="dl-list">
                            <dt><span>flex-end</span></dt>
                            <dd class="dd-list-item">Alinea los flex-item abajo.
                            </dd>
                        </dl>
                        <div class="justify-content d-flex content-height__200 f-end">
                            <div class="d-item">1</div>
                            <div class="d-item">2</div>
                            <div class="d-item">3</div>
                            <div class="d-item">4</div>
                            <div class="d-item">5</div>
                        </div>
                        
                        <dl class="dl-list">
                            <dt><span>baseline</span></dt>
                            <dd class="dd-list-item">Alínea todo a la linea base de un texto.
                            </dd>
                        </dl>
                        <div class="content-width__100 d-flex f-start content-height__600 f-baseline">
                            <div class="d-item-2 d-item-2-1">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            </div>
                            <div class="d-item-2 d-item-2-2">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio aperiam, distinctio quam</p>
                            </div>

                            <div class="d-item-2 d-item-2-3">
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="d-item-2 d-item-2-4">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quae sapiente Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                            </div>
                        </div>
    
                        <h4>align-content</h4>
                        
                        <dl class="dl-list">
                            <dt><span>stretch</span></dt>
                            <dd class="dd-list-item">Valor por defecto.
                            </dd>
                        </dl>
                        <div class="justify-content d-flex df-wrap content-height__400 ac-stretch">
                            <div class="d-item">1</div>
                            <div class="d-item">2</div>
                            <div class="d-item">3</div>
                            <div class="d-item">4</div>
                            <div class="d-item">5</div>
                            <div class="d-item">6</div>
                            <div class="d-item">7</div>
                            <div class="d-item">8</div>
                            <div class="d-item">9</div>
                            <div class="d-item">10</div>
                            <div class="d-item">11</div>
                            <div class="d-item">12</div>
                            <div class="d-item">13</div>
                            <div class="d-item">14</div>
                            <div class="d-item">15</div>
                        </div>
                        
                        <dl class="dl-list">
                            <dt><span>flex-start</span></dt>
                            <dd class="dd-list-item">Alinea los flex-items al inicio.
                            </dd>
                        </dl>
                        <div class="justify-content d-flex df-wrap content-height__400 ac-f__start">
                            <div class="d-item">1</div>
                            <div class="d-item">2</div>
                            <div class="d-item">3</div>
                            <div class="d-item">4</div>
                            <div class="d-item">5</div>
                            <div class="d-item">6</div>
                            <div class="d-item">7</div>
                            <div class="d-item">8</div>
                            <div class="d-item">9</div>
                            <div class="d-item">10</div>
                            <div class="d-item">11</div>
                            <div class="d-item">12</div>
                            <div class="d-item">13</div>
                            <div class="d-item">14</div>
                            <div class="d-item">15</div>
                        </div>
                        
                        <dl class="dl-list">
                            <dt><span>center</span></dt>
                            <dd class="dd-list-item">
                            </dd>
                        </dl>
                        <div class="justify-content d-flex df-wrap content-height__400 ac-center">
                            <div class="d-item">1</div>
                            <div class="d-item">2</div>
                            <div class="d-item">3</div>
                            <div class="d-item">4</div>
                            <div class="d-item">5</div>
                            <div class="d-item">6</div>
                            <div class="d-item">7</div>
                            <div class="d-item">8</div>
                            <div class="d-item">9</div>
                            <div class="d-item">10</div>
                            <div class="d-item">11</div>
                            <div class="d-item">12</div>
                            <div class="d-item">13</div>
                            <div class="d-item">14</div>
                            <div class="d-item">15</div>
                        </div>
                        
                        <dl class="dl-list">
                            <dt><span>flex-end</span></dt>
                            <dd class="dd-list-item">
                            </dd>
                        </dl>
                        <div class="justify-content d-flex df-wrap content-height__400 ac-f__end">
                            <div class="d-item">1</div>
                            <div class="d-item">2</div>
                            <div class="d-item">3</div>
                            <div class="d-item">4</div>
                            <div class="d-item">5</div>
                            <div class="d-item">6</div>
                            <div class="d-item">7</div>
                            <div class="d-item">8</div>
                            <div class="d-item">9</div>
                            <div class="d-item">10</div>
                            <div class="d-item">11</div>
                            <div class="d-item">12</div>
                            <div class="d-item">13</div>
                            <div class="d-item">14</div>
                            <div class="d-item">15</div>
                        </div>
                        <p>Ejercicio: Alinear un párrafo con una imagen</p>
                        <div class="paragraph-img__align">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <img src="img/flexbox-ejes.PNG" alt="">
                        </div>
    
                        <h4>align-self</h4>
                        <p>Se aplica en concreto al <span>flex-item</span>. Sirve para alinear en el cross-axis.</p>
                        <div class="content-width__100 d-flex f-start content-height__600 f-baseline">
                            <div class="d-item-2 d-item-2-1">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            </div>
                            <div class="d-item-2 d-item-2-2 d-item-2-2__background align-self__center">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio aperiam, distinctio quam</p>
                            </div>
                            <div class="d-item-2 d-item-2-3">
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="d-item-2 d-item-2-4">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quae sapiente Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!--margenes en flexbox-->
                <article id="margenes-flex" class="article margenes-flex">
                    <div class="content">
                        <h3>Márgenes en Flexbox</h3>
                        <p>Cuando se aplica flexbox los márgenes se comportan de manera distinta. </p>

                        <pre class="pre-list">
                            margin-left: auto;
                            margin-top: auto;

                            El flex-item se posicionará en el sentido contrario
                        </pre>

                        <div class="content d-flex content-height__200">
                            <div class="d-item d-item__margin"></div>
                        </div>

                        <p>Solución:</p>

                        <pre class="pre-list">
                            margin: auto;
                        </pre>

                        <div class="content d-flex content-height__400">
                            <div class="d-item d-item__margin-auto"></div>
                        </div>
                    </div>
                </article>

                <!--flex-flow-->
                <article id="flex-flow" class="article">
                    <h3>flex-flow</h3>
                    <p class="destacado">Es un shorthand para <span>flex-direction</span> y <span>flex-wrap</span></p>
                    <pre class="pre-list">
                        flex-flow: columnn wrap;
                    </pre>
                    <div class="content-flex d-flex content-height__400 content-flex-flow">
                        <div class="d-item">1</div>
                        <div class="d-item">2</div>
                        <div class="d-item">3</div>
                        <div class="d-item">4</div>
                        <div class="d-item">5</div>
                        <div class="d-item">6</div>
                        <div class="d-item">7</div>
                        <div class="d-item">8</div>
                        <div class="d-item">9</div>
                        <div class="d-item">10</div>
                        <div class="d-item">11</div>
                        <div class="d-item">12</div>
                        <div class="d-item">13</div>
                        <div class="d-item">14</div>
                        <div class="d-item">15</div>
                    </div>
                </article>
            </section>

            <!--clase 39 flex-grow, flex-shrink, flex-basis, flex-flow y order-->
            <section class="section">
                <article id="propiedades-flex-item" class="article propiedades-flex-item">
                    <h2>Propiedades de los Flex-item</h2>
                    <ul class="dl-list">
                        <li class="dd-list-item">Todas las medidas se establecen en función del espacio disponible en el contenedor.</li>
                        <li class="dd-list-item">Todas las propiedades van en función del MAIN-AXIS.</li>
                        <li class="dd-list-item">Las propiedades más utilizadas son: <a href="#flex.grow">flex-grow</a>, <a href="#flex-shrink">flex-shrink</a> y <a href="#flex-basis">flex-basis</a>.</li>
                    </ul>

                    <!--flex-grow | flex-shrink | flex-basis-->
                    <div class="content">
                        <!--flex-grow-->
                        <dd id="flex-grow" class="dl-list flex-grow">
                            <dl><span>flex-grow</span>
                                <dt class="dd-list-item">Es un valor entero desde 0 hasta n o auto. Establece qué hacer cuando hay espacio sobrante. Dicho espacio es dividido de manera proporcional según el valor que le de a cada flex-item y agregado al valor del ancho o alto &#40según sea el caso&#41 que tenga establecido el flex-item. </dt>
                            </dl>
                        </dd>
                        <div class="content content-height__400">
                            <div class="flex-grow-content d-flex">
                                <div class="d-item fg-d-item__1">flex-grow: 1;</div>
                                <div class="d-item">2</div>
                                <div class="d-item">3</div>
                                <div class="d-item">4</div>
                                <div class="d-item">5</div>
                            </div>
                            <div class="flex-grow-content d-flex">
                                <div class="d-item">1</div>
                                <div class="d-item fg-d-item__2">flex-grow: 3;</div>
                                <div class="d-item">3</div>
                                <div class="d-item">4</div>
                                <div class="d-item">5</div>
                            </div>
                            <div class="flex-grow-content d-flex">
                                <div class="d-item">1</div>
                                <div class="d-item fg-d-item__2">flex-grow: 3;</div>
                                <div class="d-item fg-d-item__3">flex-grow: 3;</div>
                                <div class="d-item">4</div>
                                <div class="d-item">5</div>
                            </div>
                            <div class="flex-grow-content d-flex">
                                <div class="d-item">1</div>
                                <div class="d-item fg-d-item__2">flex-grow: 3;</div>
                                <div class="d-item fg-d-item__3">flex-grow: 3;</div>
                                <div class="d-item fg-d-item__4">flex-grow: 2</div>
                                <div class="d-item">5</div>
                            </div>
                        </div>

                        <!--flex-shrink-->
                        <dd id="flex-shrink" class="dl-list flex-shrink">
                            <dl><span>flex-shrink</span>
                                <dt class="dd-list-item">Es lo contrario a <span>flex-grow</span>. Establece qué hacer cuando no hay espacio suficiente. Es decir,  según el valor &#40número de divisiones&#41 que se establezca, cuanto será lo que un elemento <span>flex-item</span> tendrá que ceder para que todos quepan en el <span><flex-container></flex-container></span>. El valor es un entero desde 0 hasta n.
                                El valor por defecto es 1.
                                </dt>
                            </dl>
                        </dd>
                        <div class="content">
                            <div class="flex-shrink-content d-flex">
                                <div class="d-item-fs fs-d-item__1">flex-shrink: 0</div>
                                <div class="d-item-fs fs-d-item__2">flex-shrink: 3;</div>
                                <div class="d-item-fs fs-d-item__3">flex-shrink: 2;</div>
                                <div class="d-item-fs fs-d-item__4">flex-shrink: 2</div>
                                <div class="d-item-fs fs-d-item__5">flex-shrink: 6</div>
                            </div>
                        </div>

                        <!--flex-basis-->
                        <dd id="flex-basis" class="dl-list flex-basis">
                            <dl><span>flex-basis</span>
                                <dt class="dd-list-item">Establece cuanto tiene que ocupar el item antes de encojer o extenderse. Flex basis prevalece &#40tiene más peso&#41 ante width si el main-axis es horizontal o ante height si el main-axis es vertical. El valor es un entero desde 0 hasta n. S valor por defeco es <span>auto</span></dt>
                            </dl>
                        </dd>
                        <div class="content">
                            <div class="flex-basis-content d-flex">
                                <div class="d-item-fbs fbs-d-item__1">flex-basis: 0</div>
                                <div class="d-item-fbs fbs-d-item__2">flex-basis: 3;</div>
                                <div class="d-item-fbs fbs-d-item__3">flex-basis: 2;</div>
                                <div class="d-item-fbs fbs-d-item__4">flex-basis: 2</div>
                                <div class="d-item-fbs fbs-d-item__5">flex-basis: 6</div>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- flex-shorthand -->
                <article id="flex-shorthand" class="article flex-shorthand">
                    <!--flex-->
                    <h2>flex</h2>
                    <p class="destacado">Es un shorthand que engloba <span>flex-grow</span></p>, <span>flex-shronk</span> y <span>flex-basis</span>. Se recomienda su uso por cuestiones de rendimiento.
                    <div class="content">
                        <pre class="pre-list">
                            flex: flex-grow &#40obligatiorio&#41 flex-shrink&#40opcional&#41 flex-basis&#40opcional&#41 ;
                        </pre>

                        <p>Valor por defecto:</p>

                        <pre class="pre-list">
                            flex: 0 1 auto;
                        </pre>

                        <p><span>flex:auto</span> equivale a </p>

                        <pre class="pre-list">
                            flex: 1 1 auto;
                        </pre>

                        <p><span>flex:none</span> equivale a </p>

                        <pre class="pre-list">
                            flex: 0 0 auto;
                        </pre>
                    </div>
                </article>

                <article id="flex-order" class="article flex-order">
                    <!--order-->
                    <h2>order</h2>
                    <p class="destacado">Su funcionamiento es similar al de <span>z-index</span>. su valor por defecto es CERO</p>
                    <div class="content">
                        <pre class="pre-list">
                            //Mover el segundo div al final
                            
                            .div:nth-child&#40 2 &#41 &#123
                                &nbsp;&nbsp;&nbsp;order: 1;
                            &#125
                        </pre>
                        <div class="order d-flex">
                            <div class="order-item">1</div>
                            <div class="order-item">2</div>
                            <div class="order-item">3</div>
                            <div class="order-item">4</div>
                            <div class="order-item">5</div>
                        </div>
                        <pre class="pre-list">
                            //Mover el tercer div después del div 5 pero antes del div 2
                            
                            .div:nth-child&#40 2 &#41 &#123
                                &nbsp;&nbsp;&nbsp;order: 3;
                            &#125

                            .div:nth-child&#40 3 &#41 &#123
                            &nbsp;&nbsp;&nbsp;order: 2;
                            &#125
                        </pre>
                        <div class="order d-flex order-z">
                            <div class="order-item">1</div>
                            <div class="order-item">2</div>
                            <div class="order-item">3</div>
                            <div class="order-item">4</div>
                            <div class="order-item">5</div>
                        </div>
                    </div>
                </article>
                <div class="div-foot">
                    <p>Más info: </p>
                    <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank" class="btn-link">MDN</a>
                </div>
            </section>

            <!--clase 40 - Flexbox - Práctica - Formulario-->


            <!--clase 41 - Grid - Fundamentos-->
            <section class="section">
                <!-- Grid layout -->
                <article id="grid-layout" class="article grid-layout">
                    <h2>CSS GRID</h2>
                    <p class="destacado">
                        CSS Grid Layout es el sistema de diseño más potente disponible en CSS. Es un sistema bidimensional, lo que significa que
                        puede manejar tanto columnas como filas, a diferencia de flexbox, que es en gran medida un sistema unidimensional.
                        <br />Trabaja con el Diseño de cuadrícula aplicando reglas CSS tanto a un elemento primario &#40que se convierte en el <span>grid-container</span>&#41 como a los elementos secundarios de ese elemento &#40que se convierten en <span>gid-item</span> &#41.
                    </p>
                    <figure>
                        <img src="img/grid-layout.PNG" class="img-center" alt="grid-layout">
                    </figure>
                    <div class="content">
                        <h3>Sintaxis</h3>
                        <pre class="pre-list">
                            .grid-container&#123
                            &nbsp;&nbsp;&nbsp;display: grid;
                            &#125

                            .grid-container&#123
                            &nbsp;&nbsp;&nbsp;display: inline-grid;
                            &#125
                        </pre>
                    </div>
                </article>
                <!-- Grid config -->
                <article id="grid-config" class="article grid-config">
                    <h2>Configuración de layout</h2>
                    <pre class="pre-list">
                        .grid-container&#123
    
                        &nbsp;&nbsp;&nbsp;<span class="c-primary">display</span>: grid;
    
                        //Define el numero de columnas con su medida
                        &nbsp;&nbsp;&nbsp;<span class="c-primary">grid-template-columns</span>: und_med_1, und_med_2, und_med_3,...
    
                        //Define el numero de filas con su medida
                        &nbsp;&nbsp;&nbsp;<span class="c-primary">grid-template-rows</span>: und_med_1, und_med_2, und_med_3,...
    
                        //unidades de medida: px, %, rem, em, <span>fr</span> y <span>auto</span>
    
                        //define la separación entre filas y columnas
                        &nbsp;&nbsp;&nbsp;<span class="c-primary">row-gap</span>: 50px;
                        &nbsp;&nbsp;&nbsp;<span class="c-primary">column-gap</span>: 10px;
    
                        //shorthand: separac_fila separac_column
                        &nbsp;&nbsp;&nbsp;<span class="c-primary">gap</span>: 50px 10px;
    
                        //shorthand: una sola medida
                        &nbsp;&nbsp;&nbsp;<span class="c-primary">gap</span>: 20px;
    
                        &#125
                    </pre>
                    <div class="grid-layout-content">
                        <div class="grid-content-box grid-container__1">
                            <div class="grid-item">A</div>
                            <div class="grid-item">B</div>
                            <div class="grid-item">C</div>
                            <div class="grid-item">D</div>
                            <div class="grid-item">E</div>
                            <div class="grid-item">F</div>
                            <div class="grid-item">G</div>
                            <div class="grid-item">H</div>
                            <div class="grid-item">I</div>
                            <div class="grid-item">J</div>
                        </div>
                    </div>
                </article>
                <!--clase 42 - grid-column y grid-row-->
                <article id="grid-position" class="article grid-position">
                    <h2>Posicionando los <span>grid-item</span></h2>
                    <figure>
                        <img src="img/grid-layout-row-col.PNG" alt="gl-row-col" class="img-center">
                        <figcaption>
                            Layout con 5 lineas de columna &#40 grid-column &#41 y 4 lineas de fila &#40 grid-row &#41
                        </figcaption>
                    </figure>
    
                    <div class="div-column">
                        <pre class="pre-list">
                            .grid-container&#123
    
                            &nbsp;&nbsp;&nbsp;<span class="c-primary">display</span>: grid;
    
                            &nbsp;&nbsp;&nbsp;<span class="c-primary">grid-template-columns</span>: 1fr 1fr 1fr 1fr;
                            &nbsp;&nbsp;&nbsp;<span class="c-primary">grid-template-rows</span>: 100px 100px 100px;
    
                            //separación
                            &nbsp;&nbsp;&nbsp;<span class="c-primary">gap</span>: 50px 10px;
                            
                            &#125
                        </pre>
    
                        <pre class="pre-list">
    
                            .grid-item:first-child{
                            
                            &nbsp;&nbsp;&nbsp;background: yellowgreen;
                            &nbsp;&nbsp;&nbsp;<span class="c-primary">grid-column-start</span>:1;
                            &nbsp;&nbsp;&nbsp;<span class="c-primary">grid-column-end</span>: 3;
                                                            
                            &#125
                        </pre>
                    </div>
    
                    <div class="grid-layout-content">
                        <div class="grid-content-box grid-container__2">
                            <div class="grid-item">A</div>
                            <div class="grid-item">B</div>
                            <div class="grid-item">C</div>
                            <div class="grid-item">D</div>
                            <div class="grid-item">E</div>
                            <div class="grid-item">F</div>
                            <div class="grid-item">G</div>
                            <div class="grid-item">H</div>
                            <div class="grid-item">I</div>
                            <div class="grid-item">J</div>
                        </div>
                    </div>

                    <p>Con valores negativos:</p>
                    <pre class="pre-list">
                        .grid-item:first-child{
                        
                        &nbsp;&nbsp;&nbsp;background: yellowgreen;
                        &nbsp;&nbsp;&nbsp;<span class="c-primary">grid-column-start</span>:-5;
                        &nbsp;&nbsp;&nbsp;<span class="c-primary">grid-column-end</span>: -4;
                                                        
                        &#125
                    </pre>
                    
                    <div class="grid-layout-content">
                        <div class="grid-content-box grid-container__3">
                            <div class="grid-item">A</div>
                            <div class="grid-item">B</div>
                            <div class="grid-item">C</div>
                            <div class="grid-item">D</div>
                            <div class="grid-item">E</div>
                            <div class="grid-item">F</div>
                            <div class="grid-item">G</div>
                            <div class="grid-item">H</div>
                            <div class="grid-item">I</div>
                            <div class="grid-item">J</div>
                        </div>
                        <p>Como sólo se han definido 3 filas, el último div salta a la 4ta fila y ocupará todo el alto disponible por el <span>grid-container.</span></p>
                    </div>
                </article>

                <article id="row-height" class="article row-height">
                    <h2>Alto de las filas:</h2>
                    <pre class="pre-list">
    
                        .grid-item:first-child{
                        
                        &nbsp;&nbsp;&nbsp;background: yellowgreen;
                        &nbsp;&nbsp;&nbsp;<span class="c-primary">grid-row-start</span>:1;
                        &nbsp;&nbsp;&nbsp;<span class="c-primary">grid-row-end</span>: 3;
                                                        
                        &#125
                    </pre>
                    <div class="grid-layout-content">
                        <div class="grid-content-box grid-container__4">
                            <div class="grid-item">A</div>
                            <div class="grid-item">B</div>
                            <div class="grid-item">C</div>
                            <div class="grid-item">D</div>
                            <div class="grid-item">E</div>
                            <div class="grid-item">F</div>
                            <div class="grid-item">G</div>
                            <div class="grid-item">H</div>
                            <div class="grid-item">I</div>
                            <div class="grid-item">J</div>
                        </div>
                    </div>

                    <p>shorthands: <span>grid-row</span> y <span>grid-column</span></p>
    
                    <div class="div-column">
                        <pre class="pre-list">
                            .grid-item:nth-child &#40 3 &#41{
                            
                            &nbsp;&nbsp;&nbsp;background: yellowgreen;
                            &nbsp;&nbsp;&nbsp;<span class="c-primary">grid-row</span>: 1 / 3;
                            &nbsp;&nbsp;&nbsp;<span class="c-primary">grid-column</span>: 1 / 3 ;
                                                            
                            &#125
                        </pre>
    
                        <pre class="pre-list">
                            // utilizando <span>span</span>
    
                            .grid-item:nth-child &#40 3 &#41{
                            
                            &nbsp;&nbsp;&nbsp;background: yellowgreen;
                            &nbsp;&nbsp;&nbsp;<span class="c-primary">grid-row</span>: 1 / span 2;
                            &nbsp;&nbsp;&nbsp;<span class="c-primary">grid-column</span>: 1 / span 2 ;
                                                            
                            &#125
                        </pre>
                    </div>
                    <div class="grid-layout-content">
                        <div class="grid-content-box grid-container__5">
                            <div class="grid-item">A</div>
                            <div class="grid-item">B</div>
                            <div class="grid-item">C</div>
                            <div class="grid-item">D</div>
                            <div class="grid-item">E</div>
                            <div class="grid-item">F</div>
                            <div class="grid-item">G</div>
                            <div class="grid-item">H</div>
                            <div class="grid-item">I</div>
                            <div class="grid-item">J</div>
                        </div>
                    </div>
                </article>

                <!--clase 43 - Grid - medidas & repeat ()-->
                <article id="grid-layout-um" class="article grid-layout-um">
                    <h2>Unidad de medidas <span>fr</span> y <span>auto</span></h2>
                    <p class="destacado">Son unidades de medida relativamente nuevas.</p>
                    <div class="content">
                        <dl class="dl-list">
                            <dt><span>fr</span></dt>
                            <dd class="dd-list-item">Equivale a n fracciones del espacio disponible después de establecer las medidas fijas.
                            </dd>
                        </dl>
                        <dl class="dl-list">
                            <dt ><span>auto</span></dt>
                            <dd class="dd-list-item">Equivale al espacio que quede después de repartir todos elementos, es el último que se reparte. El tamaño mínimo del item será el espacio del contenido + el padding si lo tuviera.
                            </dd>
                        </dl>
                    </div>
                </article>
                <article id="grid-layout-repeat" class="article grid-layout-repeat">
                    <h2>Función <span>repeat&#40 &#41</span></h2>
                    <p class="destacado">Sirve para establecer repeticiones de medidas o patrones.</p>

                    <div class="content">
                        <h3>Sintaxis:</h3>
                        <pre class="pre-list">
                            <span class="c-primary">repeat</span> &#40 columns o rows, medida &#41

                            &nbsp;&nbsp;&nbsp;grid-template-columns: <span class="c-primary">repeat</span>(4, 1fr);
                            &nbsp;&nbsp;&nbsp;grid-template-rows: <span class="c-primary">repeat</span>(3, 2fr);
                            &nbsp;&nbsp;&nbsp;gap: 20px 20px;
                        </pre>

                        <div class="grid-layout-content">
                            <div class="grid-content-repeat grid-container__repeat">
                                <div class="grid-item">A</div>
                                <div class="grid-item">B</div>
                                <div class="grid-item">C</div>
                                <div class="grid-item">D</div>
                                <div class="grid-item">E</div>
                                <div class="grid-item">F</div>
                                <div class="grid-item">G</div>
                                <div class="grid-item">H</div>
                                <div class="grid-item">I</div>
                                <div class="grid-item">J</div>
                            </div>
                        </div>
                        <p>Se puede combinar</p>
                        <pre class="pre-list">
                            &nbsp;&nbsp;&nbsp;grid-template-columns:200px <span class="c-primary">repeat</span>(3, 1fr) 200px;
                            &nbsp;&nbsp;&nbsp;grid-template-rows: 50px <span class="c-primary">repeat</span> (2, 2fr) 50px;
                            &nbsp;&nbsp;&nbsp;gap: 20px 20px;
                        </pre>
                        <div class="grid-layout-content">
                            <div class="grid-content-repeat grid-container__repeat__comb">
                                <div class="grid-item">A</div>
                                <div class="grid-item">B</div>
                                <div class="grid-item">C</div>
                                <div class="grid-item">D</div>
                                <div class="grid-item">E</div>
                                <div class="grid-item">F</div>
                                <div class="grid-item">G</div>
                                <div class="grid-item">H</div>
                                <div class="grid-item">I</div>
                                <div class="grid-item">J</div>
                                <div class="grid-item">K</div>
                                <div class="grid-item">L</div>
                                <div class="grid-item">M</div>
                                <div class="grid-item">N</div>
                                <div class="grid-item">O</div>
                                <div class="grid-item">P</div>
                                <div class="grid-item">Q</div>
                                <div class="grid-item">R</div>
                                <div class="grid-item">S</div>
                            </div>
                        </div>
                    </div>

                    <div class="content">
                        <h3>Patrones con <span class="c-primary">repeat&#40 &#41</span></h3>
                        <pre class="pre-list">
                            grid-template-columns: <span class="c-primary">repeat</span>&#40 3, 1fr 30% &#41 ;
                        </pre>
                        <div class="grid-layout-content">
                            <div class="grid-content-repeat grid-container__repeat__patrones">
                                <div class="grid-item">A</div>
                                <div class="grid-item">B</div>
                                <div class="grid-item">C</div>
                                <div class="grid-item">D</div>
                                <div class="grid-item">E</div>
                                <div class="grid-item">F</div>
                                <div class="grid-item">G</div>
                                <div class="grid-item">H</div>
                                <div class="grid-item">I</div>
                            </div>
                            <p>Existe la posibilidad de desbordamiento como se aprecia.</p>
                        </div>
                    </div>
                </article>
            </section>
                        
            <!--clase 44 - Grid - Implicit & explicit grid-->
            <section class="section">
                <article id="grid-types" class="article grid-types">
                    <h2>Implicit & explicit grid</h2>
                    <p class="destacado">
                        Según el layout tenga definida o no un diseño de cuadricula en base a columnas y filas, existen 2 formas de nombrar las que tienen una posición definida en el diseño y las que no la tienen.
                    </p>
                    <div class="content">
                        <dl class="dl-list">
                            <dt><span>explicit-grid</span></dt>
                            <dd class="dd-list-item">Es el grid que declaramos, tanto con grid-template-columns como con grid-template-rows.</dd>
                        </dl>
                        <dl class="dl-list">
                            <dt><span>implicit-grid</span></dt>
                            <dd class="dd-list-item">Es el grid que no declaramos, los items que quedan fuera del explicit grid. Se dispondrán automáticamente en filas.</dd>
                        </dl>
                    </div>
                    <div class="content">
                        <h3>Propiedades de las implicit grid</h3>
                        <dl class="dl-list">
                            <dt><span>grid-auto-columns</span></dt>
                            <dd class="dd-list-item">Establece qué hacer con las columnas no definidas.
                            </dd>
                        </dl>
                        <dl class="dl-list">
                            <dt><span>grid-auto-rows</span></dt>
                            <dd class="dd-list-item">Establece qué hacer con las filas no definidas.</dd>
                        </dl>
                        <dl class="dl-list">
                            <dt><span>grid-auto-flow</span></dt>
                            <dd class="dd-list-item">Establece la dirección en la cual se va a pintar el implicit grid. Admite 3 valores:</dd>
                            <ul class="dl-list">
                                <li class="dd-list-item"><span>row</span>: &#40default&#41: Se crearán filas adicionales.</li>
                                <li class="dd-list-item"><span>column</span>: Se crearán columnas adicionales.</li>
                                <li class="dd-list-item"><span>dense</span>: Rellena los espacios vacíos que queden. Su comportamiento es en base al flujo del HTML</li>
                            </ul>
                        </dl>
                        <pre class="pre-list">
                            grid-template-columns: repeat(4, 1fr);
                            grid-template-rows: repeat(2, 100px);
                            gap: 20px 20px;
                            grid-auto-flow: column;
                            grid-auto-columns: 80px;
                        </pre>
                        <div class="grid-layout-content">
                            <div class="grid-content-repeat grid-container__implicit__grid">
                                <div class="grid-item">A</div>
                                <div class="grid-item">B</div>
                                <div class="grid-item">C</div>
                                <div class="grid-item">D</div>
                                <div class="grid-item">E</div>
                                <div class="grid-item">F</div>
                                <div class="grid-item">G</div>
                                <div class="grid-item">H</div>
                                <div class="grid-item">I</div>
                                <div class="grid-item">J</div>
                                <div class="grid-item">K</div>
                                <div class="grid-item">L</div>
                                <div class="grid-item">M</div>
                                <div class="grid-item">N</div>
                                <div class="grid-item">O</div>
                            </div>
                        </div>
                        <h3>dense</h3>
                        <pre class="pre-list">
                            grid-template-columns: repeat(5, 1fr);
                            grid-template-rows: repeat(2, 100px);
                            grid-auto-flow: <span class="c-primary">dense</span>;
                        </pre>
                        <div class="grid-layout-content">
                            <div class="grid-content-repeat grid-container__dense">
                                <div class="grid-item">A</div>
                                <div class="grid-item">B</div>
                                <div class="grid-item">C</div>
                                <div class="grid-item">D</div>
                                <div class="grid-item">E</div>
                                <div class="grid-item">F</div>
                                <div class="grid-item">G</div>
                                <div class="grid-item">H</div>
                                <div class="grid-item">I</div>
                                <div class="grid-item">J</div>
                                <div class="grid-item">K</div>
                                <div class="grid-item">L</div>
                                <div class="grid-item">M</div>
                                <div class="grid-item">N</div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <!--clase 45 - Grid - min-max(), auto-fill & auto-fit-->
            <section class="section">
                <article id="grid-limit" class="article grid-limit">
                    <h2>Fijando límites a los <span>grid-item</span></h2>
                    <p class="destacado">
                        Se utiliza para diseñar layouts dinámicos.
                    </p>
                    
                    <div class="content">
                        <dl class="dl-list">
                            <dt><span>minmax &#40 valor_min, valor_max &#41</span></dt>
                            <dd class="dd-list-item">Recibe dos parámetros &#40valores&#40 para establecer el mínimo y el máximo que pueden tener los items.</dd>
                        </dl>
                        <pre class="pre-list">
                            grid-template-columns: repeat(4, <span class="c-primary">minmax</span>(50px, 100px));
                            grid-template-rows: repeat(2, 100px);
                            gap:5px;
                        </pre>
                        <div class="grid-layout-content">
                            <div class="grid-content-repeat grid-container__minmax">
                                <div class="grid-item">A</div>
                                <div class="grid-item">B</div>
                                <div class="grid-item">C</div>
                                <div class="grid-item">D</div>
                                <div class="grid-item">E</div>
                                <div class="grid-item">F</div>
                                <div class="grid-item">G</div>
                                <div class="grid-item">H</div>
                                <div class="grid-item">I</div>
                                <div class="grid-item">J</div>
                                <div class="grid-item">K</div>
                                <div class="grid-item">L</div>
                                <div class="grid-item">M</div>
                                <div class="grid-item">N</div>
                            </div>
                        </div>

                        <h3>Valores pre-definidos para minmax&#40 &#41</h3>
                        <dl class="dl-list">
                            <dt><span>min-content</span></dt>
                            <dd class="dd-list-item">Establece automáticamente el valor <span class="c-danger">mínimo</span> necesario de encojimiento del <span>grid-item</span> en función de su contenido.</dd>
                        </dl>
                        <dl class="dl-list">
                            <dt><span>max-content</span></dt>
                            <dd class="dd-list-item">Establece automáticamente el valor <span class="c-danger">máximo</span> necesario de encojimiento del <span>grid-item</span> en función de su contenido.</dd>
                        </dl>
                        <pre class="pre-list">
                            grid-template-columns: repeat&#40 3, minmax&#40 min-content, max-content&#41 &#41 ;

                            grid-template-columns: repeat&#40 3, minmax&#40 max-content, 1fr&#41 &#41 ;
                        </pre>

                        <dl class="dl-list">
                            <dt><span>auto-fill</span></dt>
                            <dd class="dd-list-item">Crea tantos grid-items vacios como quepan en el viewport respetando las medidas.</dd>
                        </dl>
                        <pre class="pre-list">
                            grid-template-columns: repeat&#40 <span class="c-primary">auto-fill</span>, minmax&#40 60px, 1fr&#41&#41 ;
                            gap: 5px;
                        </pre>
                        <div class="grid-layout-content">
                            <div class="grid-content-repeat grid-container__minmax__auto-fill">
                                <div class="grid-item">A</div>
                                <div class="grid-item">B</div>
                                <div class="grid-item">C</div>
                                <div class="grid-item">D</div>
                            </div>
                        </div>
                        <p>Automáticamente se crean más <span class="c-primary">grid-item</span> para autocompletar el layout.</p>
                        <figure>
                            <img src="img/auto-fill.PNG" alt="auto-fill" class="img-center">
                        </figure>

                        <dl class="dl-list">
                            <dt><span>auto-fit</span></dt>
                            <dd class="dd-list-item">Elimina los grid-items vacios que no se estén ocupando.</dd>
                        </dl>
                        <pre class="pre-list">
                            grid-template-columns: repeat&#40 <span class="c-primary">auto-fit</span>, minmax&#40 60px, 1fr&#41&#41 ;
                            gap: 5px;
                        </pre>
                        <div class="grid-layout-content">
                            <div class="grid-content-repeat grid-container__minmax__auto-fit">
                                <div class="grid-item">A</div>
                                <div class="grid-item">B</div>
                                <div class="grid-item">C</div>
                                <div class="grid-item">D</div>
                            </div>
                        </div>
                        <p>Automáticamente los <span class="c-primary">grid-item</span> ocuparán todo el ancho disponible del <span class="c-primary">grid-container</span></p>
                        <figure>
                            <img src="img/auto-fit.PNG" alt="auto-fit" class="img-center">
                        </figure>
                    </div>
                </article>
            </section>

            <!--clase 46 - Grid - Alineamiento & order-->
            <section id="aling-order" class="section">
                <article class="article alineamientos">
                    <h2>Alineamiento & order</h2>
                    <p class="destacado">
                        Es la posición que los <span class="c-primary">grid-item</span> pueden tomar respecto de la celda que ocupan.
                    </p>
                    <div class="content">
                        <ul class="dl-list">
                            <li class="dd-list-item">Un <span>flex-container</span> puede tambien ser un <span>flex-item.</span> </li>
                            <li class="dd-list-item">Un <span>flex-item</span> puede tambien ser un <span>flex-container.</li>
                            <li class="dd-list-item">En ambos casos se pueden alinear tanto horizontal como verticalmente.</li>
                        </ul>
                    </div>
                </article>

                <article id="grid-justify-items" class="article grid-justify-items">
                    <h2>Alineamientos de los <span class="c-primary">grid-items</span></h2>
                    <div class="content">
                        <h3>Alineamientos respecto a su celda</h3>
                        <dl class="dl-list">
                            <dt><span>justify-items:</span></dt>
                            <dd class="dd-list-item">Alínea los elementos horizontalmente respecto a la celda.</dd>
                            <ul class="dl-list">
                                <li class="dd-list-item">stretch &#40default&#41: Ocupan todo el ancho que pueden.</li>
                                <li class="dd-list-item">start o flex-start</li>
                                <li class="dd-list-item">center</li>
                                <li class="dd-list-item">end o flex-end</li>
                            </ul>
                        </dl>
                        
                        <pre class="pre-list">
                            grid-template-columns: repeat(4, 1fr);
                            gap: 10px;
                            <span class="c-primary">justify-items</span>: center;
                        </pre>
                        <div class="grid-layout-content">
                            <div class="grid-content-repeat grid-container__justify-items">
                                <div class="grid-item">A</div>
                                <div class="grid-item">B</div>
                                <div class="grid-item">C</div>
                                <div class="grid-item">D</div>
                                <div class="grid-item">E</div>
                                <div class="grid-item">F</div>
                                <div class="grid-item">G</div>
                                <div class="grid-item">H</div>
                                <div class="grid-item">I</div>
                                <div class="grid-item">J</div>
                                <div class="grid-item">K</div>
                                <div class="grid-item">L</div>
                            </div>
                        </div>
                        <figure>
                            <img src="img/justify-items-center.PNG" alt="" class="img-center">
                        </figure>
                    </div>
                </article>

                <article id="grid-align-items" class="article grid-align-items ">
                    <div class="content">
                        <dl class="dl-list">
                            <dt><span>align-items:</span></dt>
                            <dd class="dd-list-item">Alinea los elementos verticalmente respecto a la celda</dd>
                            <ul class="dl-list">
                                <li class="dd-list-item">stretch &#40default&#41: Ocupan todo el alto que pueden.</li>
                                <li class="dd-list-item">start o flex-start</li>
                                <li class="dd-list-item">center</li>
                                <li class="dd-list-item">end o flex-end</li>
                            </ul>
                        </dl>
                        <pre class="pre-list">
                            grid-template-columns: repeat(4, 1fr);
                            gap: 10px;
                            <span class="c-primary">align-items</span>: center;
                        </pre>
                        <div class="grid-layout-content">
                            <div class="grid-content-align grid-container__align-items">
                                <div class="grid-item">A</div>
                                <div class="grid-item">B</div>
                                <div class="grid-item">C</div>
                                <div class="grid-item">D</div>
                                <div class="grid-item">E</div>
                                <div class="grid-item">F</div>
                                <div class="grid-item">G</div>
                                <div class="grid-item">H</div>
                                <div class="grid-item">I</div>
                                <div class="grid-item">J</div>
                                <div class="grid-item">K</div>
                                <div class="grid-item">L</div>
                            </div>
                        </div>
    
                        <p>Se centra verticalmente</p>
                        <figure>
                            <img src="img/align-items-center.PNG" alt="" class="img-center">
                        </figure>
                    </div>
                </article>

                <article id="grid-align-center" class="article grid-align-center">
                    <div class="content">
                        <p>Centrado vertical y horizontalmente</p>
                        <pre class="pre-list">
                            align-items: center;
                            justify-items: center;
                        </pre>
                        <figure>
                            <img src="img/centrado-total.PNG" alt="" class="img-center">
                        </figure>
                        
                        <dl class="dl-list">
                            <dt><span>place-items</span></dt>
                            <dd class="dd-list-item">Engloba las propiedades justify-items y align-items</dd>
                        </dl>
    
                        <p>Sintaxis:</p>
                        <pre class="pre-list">
                            place-items: align-items justify-items
    
                            //o un solo valor
                            place-items: center //Mostrará un centrado absoluto.
                        </pre>
                    </div>
                </article>

                <article id="align-grid-container"class="grid-justify-content">
                    <h2>Alineamiento respecto al grid-container</h2>
                    <div class="content">
                        <dl id="grid-justify-content" class="dl-list">
                            <dt><span>justify-content:</span></dt>
                            <dd class="dd-list-item">Alínea los elementos horizontalmente respecto de su contenendor.</dd>
                            <ul class="dl-list">
                                <li class="dd-list-item">stretch &#40default&#41: Ocupan todo el ancho que pueden.</li>
                                <li class="dd-list-item">start o flex-start</li>
                                <li class="dd-list-item">center</li>
                                <li class="dd-list-item">end o flex-end</li>
                                <li class="dd-list-item">space-around</li>
                                <li class="dd-list-item">space-between</li>
                                <li class="dd-list-item">space-evenly</li>
                            </ul>
                        </dl>
                        <dl id="grid-align-content" class="dl-list">
                            <dt><span>align-content:</span></dt>
                            <dd class="dd-list-item">Alínea los elementos verticalmente respecto de su contenedor.</dd>
                            <ul class="dl-list">
                                <li class="dd-list-item">stretch &#40default&#41: Ocupan todo el alto que pueden.</li>
                                <li class="dd-list-item">start o flex-start</li>
                                <li class="dd-list-item">center</li>
                                <li class="dd-list-item">end o flex-end</li>
                                <li class="dd-list-item">space-around</li>
                                <li class="dd-list-item">space-between</li>
                                <li class="dd-list-item">space-evenly</li>
                            </ul>
                        </dl>
                        <pre class="pre-list">
                            grid-template-columns: repeat(4, 50px);
                            grid-template-rows: repeat(3, 80px);
                            gap: 10px;
                            justify-content: center;
                            align-content: center;
                        </pre>
                        <div class="grid-layout-content">
                            <div class="grid-content-align grid-container__justify-content">
                                <div class="grid-item">A</div>
                                <div class="grid-item">B</div>
                                <div class="grid-item">C</div>
                                <div class="grid-item">D</div>
                                <div class="grid-item">E</div>
                                <div class="grid-item">F</div>
                                <div class="grid-item">G</div>
                                <div class="grid-item">H</div>
                                <div class="grid-item">I</div>
                                <div class="grid-item">J</div>
                                <div class="grid-item">K</div>
                                <div class="grid-item">L</div>
                            </div>
                        </div>
                        <h3>Shorthand</h3>
                        <dl id="grid-place-content" class="dl-list">
                            <dt><span>place-content</span></dt>
                            <dd class="dd-list-item">Engloba las propiedades justify-content y align-content</dd>
                        </dl>
        
                        <p>Sintaxis:</p>
                        <pre class="pre-list">
                            place-content: align-content justify-content
        
                            //o un solo valor
                            place-content: center //Mostrará un centrado absoluto.
                        </pre>
                    </div>
                </article>

                <article id="grid-align-items-especific" class="article grid-align-items-especific">
                    <h3>Alineación de un <span class="c-primary">grid-item</span> específico</h3>
                    <div class="content">
                        <dl class="dl-list">
                            <dt><span>justify-self</span></dt>
                            <dd class="dd-list-item">Posiciona horizontalmente respecto de su celda.</dd>
                        </dl>
                        <dl class="dl-list">
                            <dt><span>align-self</span></dt>
                            <dd class="dd-list-item">Posiciona verticalmente respecto de su celda.</dd>
                        </dl>
                        <dl class="dl-list">
                            <dt><span>place-self</span></dt>
                            <dd class="dd-list-item"></dd>
                        </dl>
                        <ul class="dl-list">Valores
                            <li class="dd-list-item">stretch &#40default&#41: Ocupan todo el alto o ancho que pueden.</li>
                            <li class="dd-list-item">start o flex-start</li>
                            <li class="dd-list-item">center</li>
                            <li class="dd-list-item">end o flex-end</li>
                        </ul>
                        <pre class="pre-list">
                            .grid-item:nth-child&#40 2 &#41 &#123
                            &nbsp;&nbsp;&nbsp;justify-self: end;
                            &#125
                        </pre>
                        <figure>
                            <img src="img/justify-self.PNG" alt="" class="img-center">
                        </figure>
                        
                        <pre class="pre-list">
                            .grid-item:nth-child&#40 2 &#41 &#123
                            &nbsp;&nbsp;&nbsp;align-self: end;
                            &#125
                        </pre>
                        <figure>
                            <img src="img/align-self-end.PNG" alt="" class="img-center">
                        </figure>
        
                        <pre class="pre-list">
                            .grid-item:nth-child(2){
                            &nbsp;&nbsp;&nbsp;place-self: start end;
                            }
                        </pre>
        
                        <div class="grid-layout-content">
                            <div class="grid-content__self grid-item__justify-self">
                                <div class="grid-item">A</div>
                                <div class="grid-item">B</div>
                                <div class="grid-item">C</div>
                            </div>
                        </div>
                    </div>
                </article>
                        
                <article id="grid-order" class="article grid-order">
                    <h3>Order</h3>
                    <p class="destacado">Funciona igual que en flexbox, es decir, como <span class="c-primary">z-index</span>. Por defecto todos los items tienen order:0</p>
                    <div class="content">
                        <pre class="pre-list">
                            .grid-item:nth-child&#40 2 &#41 &#123
                            &nbsp;&nbsp;&nbsp;<span class="c-primary">order</span>: 1;
                            &#125
    
                            .grid-item:nth-child&#40 4 &#41 &#123
                            &nbsp;&nbsp;&nbsp;<span class="c-primary">order</span>: -1;
                            &#125
                        </pre>
                        <div class="grid-layout-content">
                            <div class="grid-content-box grid-container__order">
                                <div class="grid-item">A</div>
                                <div class="grid-item">B</div>
                                <div class="grid-item">C</div>
                                <div class="grid-item">D</div>
                                <div class="grid-item">E</div>
                                <div class="grid-item">F</div>
                                <div class="grid-item">G</div>
                                <div class="grid-item">H</div>
                                <div class="grid-item">I</div>
                                <div class="grid-item">J</div>                                
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <!--clase 47 - Grid - grid template areas-->
            <section id="grid-template-areas" class="section">
                <article class="article grid-template-areas">
                    <h2>Grid template areas</h2>
                    <p class="destacado">Define zonas del layout de una manera sencilla y rápida.</p>
                    <div class="content">
                        <ul class="dl-list">
                            <li class="dd-list-item">Se complementan perfectamente con grid-template-columns y grid-template-rows para el establecimiento de las medidas de cada zona.</li>
                            <li class="dd-list-item">Así mismo, se complementa con todas las propiedades de css grid. </li>
                        </ul>
                    
                        <pre class="pre-list">
                            HTML:

                            &lt;main class="main"&gt;
                                &nbsp;&nbsp;&nbsp;&lt;header class="header" &gt; HEADER &lt; /header &gt;
                                &nbsp;&nbsp;&nbsp;&lt;aside class="aside"&gt;ASIDE&lt;/aside&gt;
                                &nbsp;&nbsp;&nbsp;&lt;article class="article"&gt;
                                <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium voluptate ipsa impedit? Magni, optio nesciunt! Consectetur at tempora debitis hic sunt? Explicabo odit, neque provident magni accusamus aperiam alias consequatur.
                                <br />&nbsp;&nbsp;&nbsp;&lt;/article &gt;
                                &nbsp;&nbsp;&nbsp;&lt;footer class="footer"&gt;FOOTER&lt; /footer&gt;
                            </main>

                            CSS:

                            .header &#123
                            &nbsp;&nbsp;&nbsp;grid-area: header;
                            &#125
                            
                            .aside &#123
                            &nbsp;&nbsp;&nbsp;grid-area: aside;
                            &#125
                            
                            .article &#123
                            &nbsp;&nbsp;&nbsp;grid-area: article;
                            &#125
                            
                            .footer &#123
                            &nbsp;&nbsp;&nbsp;grid-area: footer;
                            &#125

                            .main &#123
                            &nbsp;&nbsp;&nbsp;display: grid;
                            &nbsp;&nbsp;&nbsp;grid-template-columns: 150px repeat(2, 1fr);
                            &nbsp;&nbsp;&nbsp;grid-template-areas:
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"header header header"
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"aside article article"
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"footer footer ."
                            &#125
                        </pre>
                        <div class="content content-height__400">
                            <iframe src="ejemplos_clases/clase47/clase47.html" frameborder="0"></iframe>
                        </div>
                    </div>
                </article>
            </section>

            <!--clase 48 - Grid - Nombrando grid lines-->
            <section id="grid-lines" class="section">
                <article class="article grid-lines">
                    <h2>Nombrando grid lines</h2>
                    <div class="content">
                        <pre class="pre-list">
                            grid-template-columns:
                            &nbsp;&nbsp;&nbsp;[first-column-line] 100px
                            &nbsp;&nbsp;&nbsp;[second-column-line] 100px
                            &nbsp;&nbsp;&nbsp;[third-column-line] 100px
                            &nbsp;&nbsp;&nbsp;[fourth-column-line] 100px
                            &nbsp;&nbsp;&nbsp;[last-column-line];
                            
                            grid-template-rows:
                            &nbsp;&nbsp;&nbsp;[first-row-line] 100px
                            &nbsp;&nbsp;&nbsp;[second-row-line] 100px
                            &nbsp;&nbsp;&nbsp;[third-row-line] 100px
                            &nbsp;&nbsp;&nbsp;[last-row-line];
                        </pre>
                        <pre class="pre-list">
                            .grid-item:nth-child&#40 2 &#41 &#123
                            &nbsp;&nbsp;&nbsp;background: pink;
                            
                            &nbsp;&nbsp;&nbsp;/* grid-column: 1 / span 2;
                            &nbsp;&nbsp;&nbsp;grid-row: 2 / span 2; */
                            
                            &nbsp;&nbsp;&nbsp;grid-column: first-column-line / third-column-line;
                            &nbsp;&nbsp;&nbsp;grid-row: second-row-line / last-row-line;
                            
                            &#125
                        </pre>
                        <div class="grid-layout-content">
                            <div class="grid-content-box content-height__auto grid-container__name-line">
                                <div class="grid-item">A</div>
                                <div class="grid-item">B</div>
                                <div class="grid-item">C</div>
                                <div class="grid-item">D</div>
                                <div class="grid-item">E</div>
                                <div class="grid-item">F</div>
                                <div class="grid-item">G</div>
                                <div class="grid-item">H</div>
                                <div class="grid-item">I</div>
                                <div class="grid-item">J</div>
                            </div>
                        </div>
                    </div>
                </article>
                <div class="div-foot">
                    <p>Más info en: </p>
                    <a href="https://medium.com/@ricardogonart/css-grid-layout-69b40a8e63ee" target="_blank" class="btn-link">Medium</a>
                </div>
            </section>

            <!--clase 49 - Grid - Grids anidados-->
            <!--clase 50 - Grid - Práctica - Galería con grid-->
            <!--clase 51 - Grid - Shorthands y grid track-->
            <!--clase 52 - Responsive Web Design-->
            <!--clase 53 - Responsive sin media querys-->

            <!--clase 54 - Vídeos responsive-->
            <section class="section">
                <article id="videos-responsive" class="article videos-responsive">
                    <h2>Videos Responsive</h2>
                    <pre class="pre-list">
                        HTML:
                        <code>
                        &lt;div class="video-content"&gt;
                            &nbsp;&nbsp;&nbsp;&lt;video controls&gt;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;source src="videos/videos_responsive.mp4" type="video/mp4"&gt;
                            &nbsp;&nbsp;&nbsp;&lt;/video&gt;
                        &lt;/div&gt;
                        </code>
                        CSS: 

                        .video-content &#123
                        &nbsp;&nbsp;&nbsp;height: 0;
                        &nbsp;&nbsp;&nbsp;padding-bottom: 56.25%;
                        &nbsp;&nbsp;&nbsp;position: relative;
                        &#125
                        
                        .video-content video &#123
                        &nbsp;&nbsp;&nbsp;position: absolute;
                        &nbsp;&nbsp;&nbsp;width: 100%;
                        &nbsp;&nbsp;&nbsp;height: 100%;
                        &#125
                    </pre>
                    <div class="content">
                        <div class="video-content">
                            <video controls>
                                <source src="videos/videos_responsive.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </article>
            </section>
            
            <!--clase 55 - Breakpoints-->
        </div>
    </div>
    
    <?php include "../../../../templates_nivel_0/footer.php"?>
<!--Plantilla-->
<!--
<section class="section">
    <article id="#" class="article">
        <h2></h2>
        <p class="destacado">
    
        </p>
        <div class="content">
            <h3></h3>
            <ul class="dl-list list">
                <li class="dd-list-item"> </li>
                <li class="dd-list-item"> </li>
                <li class="dd-list-item"> </li>
            </ul>
        </div>
        <div class="content">
            <h3></h3>
            <dl class="dl-list">
                <dd><span></span></dd>
                <dt class="dd-list-item"></dt>
            </dl>
            <dl class="dl-list">
                <dd><span></span></dd>
                <dt class="dd-list-item"></dt>
            </dl>
            <dl class="dl-list">
                <dd><span></span></dd>
                <dt class="dd-list-item"></dt>
            </dl>
        </div>
    </article>
    <article id="#" class="article">
        <h2></h2>
        <p class="destacado">
    
        </p>
        <div class="content">
            <h3></h3>
            <ul class="dl-list list">
                <li class="dd-list-item"> </li>
                <li class="dd-list-item"> </li>
                <li class="dd-list-item"> </li>
            </ul>
        </div>
        <div class="content">
            <h3></h3>
            <dl class="dl-list">
                <dd><span></span></dd>
                <dt class="dd-list-item"></dt>
            </dl>
            <dl class="dl-list">
                <dd><span></span></dd>
                <dt class="dd-list-item"></dt>
            </dl>
            <dl class="dl-list">
                <dd><span></span></dd>
                <dt class="dd-list-item"></dt>
            </dl>
        </div>
    </article>
</section>
-->
