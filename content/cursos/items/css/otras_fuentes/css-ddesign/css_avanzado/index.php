<?php include "../../../../templates_nivel_0/head.php"?>    
    <link rel="stylesheet" href="../../css/estilos-css.css">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/menu-animado.css">
    <link rel="stylesheet" href="css/botones-animados.css">
    <link rel="stylesheet" href="css/imagenes-animadas.css">
    <link rel="stylesheet" href="css/animaciones.css">
    <title>CSS Avanzado</title>
    
</head>
<body>
   <?php require "../../../../templates_nivel_0/nav-ini.php";?>
    <?php include "../../nav-css.php";?>
    <section class="section">
        <article class="article">
            <div class="div-sub-title">
                <div class="flex-item-1">
                    <h2>Animación / Transición</h2>
                </div>
                <div class="flex-item-2">
                    <a href="https://csstriggers.com" target="_blank">csstriggers - Consumo de recursos.</a>
                </div>
            </div>
            <h3>Animaciones</h3>
            <p>Proporcionan una forma de interpolar valores en las propiedades CSS de un elemento en un período de tiempo, es decir, desde un estado inicial a un estado final.</p>
            <div class="container">
                <h3>Fases del Rederizado</h3>
                <ul class="list">
                    <li class="list-item">Cuando una propiedad cambia el navegador tiene que recalcular cómo dibujar los elementos.</li>
                    <li class="list-item">Esto se realiza en 3 fases: class="list-item"
                        <ul class="list">
                            <li class="list-list-item">layout: Cómo se colocan los elementos en pantalla &#40Consumo de muchos recursos&#41</li >
                            <li class="list-list-item">paint: Dibujar  los pixeles de los elementos</li> 
                            <li class="list-list-item">Composite: Componer y dibujar los elementos en pantalla</li>
                        </ul>
                    </li>
                </ul>
                <h3>Propiedades animables</h3>
                <ul class="list">
                    <li class="list-item">No todas las propiedades son animables.</li>
                    <li class="list-item">Para animar una propiedad el navegador tiene  que poder calcular los estados intermedios.</li>
                    <li class="list-item">Todas las propiedades numéricas con estados intermedios son animables:
                        <ul class="list">
                            <li class="list-list-item">margin</li>
                            <li class="list-list-item">padding</li>
                            <li class="list-list-item">font-size</li>
                            <li class="list-list-item">color</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </article>
    </section>
    <section class="section">
        <article class="article">
            <div class="div-sub-title">
                <div class="flex-item-1">
                    <h3>Transiciones</h3>
                </div>
                <div class="flex-item-2">
                    <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Transitions/Using_CSS_transitions"
                        target="_blank">Transiciones en MDN</a>
                </div>
            </div>
            <p>Las transiciones necesitan un evento que las dispare. Generalmente se usan con la pseudo clase <span class="font-weight">hover</span></p>
            <p>Existen 4 propiedades de las transiciones:</p>
            <div class="container">
                <dl>
                    <dt><span>transition-property:</span></dt>
                    <dd>Especifica el nombre o los nombres de las propiedades CSS a las que se deben aplicar las transiciones. Más de una propiedad se separan por comas.</dd>
                    <p>Valores: all | none | propiedad [, propiedad]</p>
                    
                </dl>
                <dl>
                    <dt><span>transition-duration:</span></dt>
                    <dd>Especifica la duración durante la cual deben ocurrir las transiciones. Puede especificar una duración única que se aplique a todas las propiedades durante la transición, o varios valores para permitir que cada propiedad haga la transición durante un período de tiempo diferente. Se separan por comas.
                    </dd>
                    <p>Valores: segundos s | milisegundos ms </p>
                </dl>
                <dl>
                    <dt><span>transition-delay:</span></dt>
                    <dd>Define cuánto tiempo esperar entre el momento en que se cambia una propiedad y la transición realmente comienza.
                    </dd>
                    <p>Valores: segundos s | milisegundos ms </p>
                </dl>
                <dl>
                    <dt><span>transition-timing-function:</span></dt>
                    <dd>Especifica una función para definir cómo se calculan los valores intermedios de las propiedades.
                    </dd>
                    <p>Valores: ease | linear | ease-in | ease-out | ease-in-out | step-start | step-end | steps&#40 &#41 | cubic-bezier&#40 &#41 </p>
                </dl>
                <dl>
                    <dt><span>shorthand</span></dt>
                    <dd>Forma abreviada para las 4 propiedades.
                    </dd>
                    <p class="shorthand">transition: &lt;transition-property&gt;
                    &lt;transition-duration&gt;
                    &lt;transition-timing-function&gt;
                    &lt;transition-delay&gt;
                    </p>
                </dl>
                <pre><span>
                    transition: background 2s;
                    -webkit-transition: background 2s;
                    -moz-transition: background 2s;
                    -ms-transition: background 2s;
                    -o-transition: background 2s;
                </span></pre>            
                <div class="content-example content-example-transition">
                    <div class="item"></div>
                </div>
                
                <pre><span>
                    transition: background 2s, width 2s, height 2s;
                    -webkit-transition: background 2s, width 2s, height 2s;
                    -moz-transition: background 2s, width 2s, height 2s;
                    -ms-transition: background 2s, width 2s, height 2s;
                    -o-transition: background 2s, width 2s, height 2s;
                </span></pre>
                <div class="content-example content-example-transition content-example-transition-1">
                    <div class="item"></div>
                </div>

                <h3>transition-timing-function</h3>
                <p>Valores:</p>
                <dl>
                    <dt><span>ease:</span></dt>
                    <dd>el valor predeterminado, aumenta la velocidad hacia la mitad de la transición, disminuyendo la velocidad al final.
                    </dd>
                </dl>
                <dl>
                    <dt><span>ease-in:</span></dt>
                    <dd>
                    </dd>
                </dl>
                <dl>
                    <dt><span>ease-out:</span></dt>
                    <dd>
                    </dd>
                </dl>
                <dl>
                    <dt><span>ease-in-out:</span></dt>
                    <dd>
                    </dd>
                </dl>
                <dl>
                    <dt><span>linear:</span></dt>
                    <dd>
                    </dd>
                </dl>
                <dl>
                    <dt><span>cubic-bezier&#40 &#41:</span></dt>
                    <dd>
                    </dd>
                </dl>
                <dl>
                    <dt><span>steps&#40 &#41:</span></dt>
                    <dd>
                    </dd>
                </dl>                
            </div>
        </article>
    </section>
    <section class="section">
        <article class="article">
            <h2>Transformaciones</h2>
            <p>Pueden ser de 2 tipos: 2D y 3D</p>
            <div class="container">
                <p>Valores:</p> 
                <dl>
                    <dt><span>translate:</span></dt>
                    <dd>Establece movimiento en los ejes x e y.
                    </dd>
                    <p>Valores: &#40x | x, y&#41 | translateX&#40 &#41 | translateY&#40 &#41
                        <br />Valores positivos -> derecha y abajo
                        <br />Valores negativos -> izquierda y arriba
                    </p>
                </dl>
                <dl>
                    <dt><span>scale:</span></dt>
                    <dd>Establece el incremento de un elemento tanto vertical como horizontal. Su valor es un valor numérico.</dd>
                    <p>Valores: &#40x = y | x,y&#41 | scaleX&#40 &#41 | scaleY&#40 &#41</p>
                    <pre>
                        transform: scale(0);
                        transform: scale(2);
                        transform: scale(3);
                        transform: scaleX(2);
                        transform: scaleY(3);
                        transform: scale(2, 3);
                    </pre>
                </dl>

                <dl>
                    <dt><span>skew</span></dt>
                    <dd>El elemento sufre una ligera inclinación según el ángulo que se le indique.</dd>
                    <p>Valores: &#40x | x,y&#41 | skewX&#40angle&#41 | skewY&#40angle&#41</p>
                </dl>

                <dl>
                    <dt><span>rotate&#40angle&#41</span></dt>
                    <dd>Rota el elemento según el ángulo que se le aplique.</dd>
                    <p>Valores: 4 valores de ángulos:
                        <br />deg (360deg) -> Grados sexagesimales.
                        <br />grad (400grad)-> Es una unidad de medida de ángulos planos.
                        <br />rad (6.2832rad)-> Es una unidad de ángulo en el plano en el SI.
                        <br />turn (1turn) -> turn es el número de vueltas. (-1turn) -> Es una vuelta hacia atrás.
                        <br />valores positivos-> El giro es en sentido horario.
                        <br /> valores negativos-> El giro es eb sentido antihorario.
                    </p>
                </dl>                
            </div>
            <div class="container">
                <h3>Ejemplo Translate</h3>
                <pre><span>
                    transition: transform 3s;
                    transform: translateX(500%);
                    -webkit-transform: translateX(500%);
                    -moz-transform: translateX(500%);
                    -ms-transform: translateX(500%);
                    -o-transform: translateX(500%);
                    -webkit-transition: transform 3s;
                    -moz-transition: transform 3s;
                    -ms-transition: transform 3s;
                    -o-transition: transform 3s;
                </span></pre>
                <p>O también usando la función cal&#40&#41</p>
                <pre><span>
                    transition: transform 3s;
                    -webkit-transition: transform 3s;
                    -moz-transition: transform 3s;
                    -ms-transition: transform 3s;
                    -o-transition: transform 3s;
                    transform: translateX&#40calc&#40 40vw - 100%&#41&#41 ;
                    -webkit-transform: translateX&#40calc&#40 40vw - 100%&#41&#41 ;
                    -moz-transform: translateX&#40calc&#40 40vw - 100%&#41&#41 ;
                    -ms-transform: translateX&#40calc&#40 40vw - 100%&#41&#41 ;
                    -o-transform: translateX&#40calc&#40 40vw - 100%&#41&#41 ;
                </span></pre>

                <h3>Ejemplo transform</h3>
                <div class="content-example-transform">
                    <div class="item item-translate"></div>
                </div>
                <!--Ejercicio: menu con animaciones-->
                <div class="menu-animado">
                    <h2>Práctica: menu animado</h2>
                    <nav class="main-nav">
                        <ul class="main-menu">
                            <li class="main-menu__item">Item 1</li>
                            <li class="main-menu__item">Item 2</li>
                            <li class="main-menu__item">Item 3</li>
                            <li class="main-menu__item">Item 4</li>
                            <li class="main-menu__item">Item 5</li>
                        </ul>
                    </nav>
                    <p><a href="css/menu-animado.css" target="_blank" class="btn">Ver código CSS</a></p>
                </div>

                <!--Ejercicio: botones animados-->
                <div class="botones-animados">
                    <h2>Práctica Buttons</h2>
                    <div>
                        <p>Algunas consideraciones:</p>
                        <ul class="list">
                            <li class="list-item">Se usan pseudo elementos <span>after</span> y <span>before</span> para las animaciones</li>
                            <li class="list-item"><span>after</span> y <span>before</span> son hijos del <span>button</span></li>
                            <li class="list-item">Los hijos siempre se posicionan sobre el padre.</li>
                            <li class="list-item">En algunos casos para arreglar este problema se utiliza la propiedad <span>z-index</span></li>
                        </ul>
                    </div>
                    <div class="buttons">
                        <button class="button button--fill">Hover Me</button>
                        <button class="button button--cross">Hover Me</button>
                        <button class="button button--grow">Hover Me</button>
                        <button data-content="Hover Me" class="button button--scale-text">Hover Me</button>
                        <button class="button button--shiney">Hover Me</button>
                    </div>
                    <p><a href="css/botones-animados.css" target="_blank" class="btn">Ver código CSS</a></p>
                </div>

                <!--Ejercicio: imagenes animadas-->
                <div class="imagenes-animadas">
                    <h2>Práctica Imagenes animadas</h2>
                    <div class="images">
                        <div class="image image--close">
                            <img src="https://images.pexels.com/photos/3052360/pexels-photo-3052360.jpeg" alt="">
                            <h2 class="image__title--close">Text</h2>
                        </div>
                        <div class="image image--lines">
                            <img src="https://images.pexels.com/photos/617278/pexels-photo-617278.jpeg" alt="">
                            <h2 class="image__title--lines">Anubis</h2>
                        </div>
                        <div class="image image--scale">
                            <img src="https://images.pexels.com/photos/286588/pexels-photo-286588.jpeg" alt="">
                            <div class="image__text">
                                <h2>Title</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                            </div>
                        </div>
                    </div>
                    <p><a href="css/imagenes-animadas.css" target="_blank" class="btn">Ver código CSS</a></p>
                </div>
            </div>
        </article>
    </section>
    
    <div class="container">
        <!--animate-->
        <div class="animate-content">
            <h2>animate</h2>
            <div class="animate-1">
                <div class="item"></div>
            </div>
            <p><a href="css/animate.css" target="_blank" class="btn">Ver código CSS</a></p>
        </div>
        <div class="animate-content">
            <div class="animate-2">
                <div class="item"></div>
            </div>
            <p><a href="css/animate.css" target="_blank" class="btn">Ver código CSS</a></p>
        </div>
    </div>

<?php include "../../../../templates_nivel_0/footer.php"?>