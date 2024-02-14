<!-- clase 41 - Grid - Fundamentos -->
<section class="section">
    <!-- Grid layout -->
    <h1>CSS GRID</h1>
    <div class="container-fluid">
        <h2>Fundamentos de grid</h2>
        <article id="grid-layout" class="article">
            <p class="destacado">
                CSS Grid Layout es el sistema de diseño más potente disponible en CSS. Es un sistema bidimensional, lo que significa que
                puede manejar tanto columnas como filas, a diferencia de flexbox, que es en gran medida un sistema unidimensional.
                <br />Trabaja con el Diseño de cuadrícula aplicando reglas CSS tanto a un elemento primario &#40que se convierte en el <span>grid-container</span>&#41 como a los elementos secundarios de ese elemento &#40que se convierten en <span>gid-item</span> &#41.
            </p>
            <p>Permite dividir una página en áreas o regiones principales en términos de tamaño, posición y capas entre partes de un control construido a partir de primitivas HTML.
            </p>
            <p>Permite alinear elementos en columnas y filas. Sin embargo, son posibles muchos más diseños y de forma más sencilla que con las tablas. Por ejemplo, los elementos secundarios de un contenedor de cuadrícula podrían posicionarse para que se solapen y se superpongan, de forma similar a los elementos posicionados en CSS.
            </p>
            <figure>
                <img src="img/grid_layout.PNG" class="img-center" alt="grid-layout">
            </figure>
            <div class="content">
                <p>Sintaxis</p>
                <pre class="pre-list">
                    .grid-container&#123
                    &nbsp;&nbsp;&nbsp;display: grid;
                    &#125

                    .grid-container&#123
                    &nbsp;&nbsp;&nbsp;display: inline-grid;
                    &#125
                </pre>            
            </div>
            <h5>Propiedades CSS</h5>
              <ul class="listado">
                <li><i class="bi bi-check-all"></i>grid-template-columns</li>
                <li><i class="bi bi-check-all"></i>grid-template-rows</li>
                <li><i class="bi bi-check-all"></i>grid-template-areas</li>
                <li><i class="bi bi-check-all"></i>grid-template</li>
                <li><i class="bi bi-check-all"></i>grid-auto-columns</li>
                <li><i class="bi bi-check-all"></i>grid-auto-rows</li>
                <li><i class="bi bi-check-all"></i>grid-auto-flow</li>
                <li><i class="bi bi-check-all"></i>grid</li>
                <li><i class="bi bi-check-all"></i>grid-row-start</li>
                <li><i class="bi bi-check-all"></i>grid-column-start</li>
                <li><i class="bi bi-check-all"></i>grid-row-end</li>
                <li><i class="bi bi-check-all"></i>grid-column-end</li>
                <li><i class="bi bi-check-all"></i>grid-row</li>
                <li><i class="bi bi-check-all"></i>grid-column</li>
                <li><i class="bi bi-check-all"></i>grid-area</li>
                <li><i class="bi bi-check-all"></i>row-gap</li>
                <li><i class="bi bi-check-all"></i>column-gap</li>
                <li><i class="bi bi-check-all"></i>gap</li>
              </ul>
        </article>
    </div>
    <!-- Grid config -->
    <div class="container-fluid">
        <article id="grid-config" class="article">
            <h2>Configuración de layout</h2>
            <pre class="pre-list">
                .grid-container&#123

                &nbsp;&nbsp;&nbsp;<span class="text-primary">display</span>: grid;

                //Define el numero de columnas con su medida
                &nbsp;&nbsp;&nbsp;<span class="text-primary">grid-template-columns</span>: und_med_1, und_med_2, und_med_3,...

                //Define el numero de filas con su medida
                &nbsp;&nbsp;&nbsp;<span class="text-primary">grid-template-rows</span>: und_med_1, und_med_2, und_med_3,...

                //unidades de medida: px, %, rem, em, <span>fr</span> y <span>auto</span>

                //define la separación entre filas y columnas
                &nbsp;&nbsp;&nbsp;<span class="text-primary">row-gap</span>: 50px;
                &nbsp;&nbsp;&nbsp;<span class="text-primary">column-gap</span>: 10px;

                //shorthand: separac_fila separac_column
                &nbsp;&nbsp;&nbsp;<span class="text-primary">gap</span>: 50px 10px;

                //shorthand: una sola medida
                &nbsp;&nbsp;&nbsp;<span class="text-primary">gap</span>: 20px;

                &#125
            </pre>
            <div class="grid-layout-content">
                <div class="grid-content-box grid-layout">
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
    </div>
    <!--clase 42 - grid-column y grid-row-->
    <div class="container-fluid">
        <article id="grid-position" class="article grid-position">
            <h2>Posicionando los <span>grid-item</span></h2>
            <figure>
                <img src="img/grid-layout-row-col.PNG" alt="gl-row-col" class="img-center">
                <figcaption>
                    Layout con 5 lineas de columna &#40grid-column&#41 y 4 lineas de fila &#40grid-row&#41
                </figcaption>
            </figure>

            <div class="div-column">
                <pre class="pre-list">
                    .grid-container&#123

                    &nbsp;&nbsp;&nbsp;<span class="text-primary">display</span>: grid;
                    &nbsp;&nbsp;&nbsp;<span class="text-primary">grid-template-columns</span>: 1fr 1fr 1fr 1fr;
                    &nbsp;&nbsp;&nbsp;<span class="text-primary">grid-template-rows</span>: 100px 100px 100px;

                    //separación
                    &nbsp;&nbsp;&nbsp;<span class="text-primary">gap</span>: 50px 10px;
                    
                    &#125
                </pre>

                <pre class="pre-list">

                    .grid-item:first-child{
                    
                    &nbsp;&nbsp;&nbsp;background: yellowgreen;
                    &nbsp;&nbsp;&nbsp;<span class="text-primary">grid-column-start</span>:1;
                    &nbsp;&nbsp;&nbsp;<span class="text-primary">grid-column-end</span>: 3;
                                                    
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
                .grid-item {
                  &nbsp;&nbsp;&nbsp;width: 100%;
                  &nbsp;&nbsp;&nbsp;height: 100px;
                  &nbsp;&nbsp;&nbsp;border: 2px solid green;
                  &nbsp;&nbsp;&nbsp;display: flex;
                  &nbsp;&nbsp;&nbsp;align-items: center;
                  &nbsp;&nbsp;&nbsp;justify-content: center;
                  &nbsp;&nbsp;&nbsp;background: palevioletred;
                  &nbsp;&nbsp;&nbsp;color: white;
                  &nbsp;&nbsp;&nbsp;font-size: 1.5rem;
                }

                .grid-item:nth-child(5){            
                &nbsp;&nbsp;&nbsp;background: yellowgreen;
                &nbsp;&nbsp;&nbsp;<span class="text-primary">grid-column-start</span>:-1;
                &nbsp;&nbsp;&nbsp;<span class="text-primary">grid-column-end</span>: 2;
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
    </div>

    <div class="container-fluid">
        <article id="row-height" class="article row-height">
            <h2>Alto de las filas:</h2>
            <pre class="pre-list">

                .grid-item:first-child{
                
                &nbsp;&nbsp;&nbsp;background: yellowgreen;
                &nbsp;&nbsp;&nbsp;<span class="text-primary">grid-row-start</span>:1;
                &nbsp;&nbsp;&nbsp;<span class="text-primary">grid-row-end</span>: 3;
                                                
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
                    
                        background: yellowgreen;
                        <span class="text-primary">grid-row</span>: 1 / 3;
                        <span class="text-primary">grid-column</span>: 1 / 3 ;
                                                    
                    &#125
                </pre>

                <pre class="pre-list">
                    // utilizando <span>span</span>

                    .grid-item:nth-child &#40 3 &#41{
                    
                    &nbsp;&nbsp;&nbsp;background: yellowgreen;
                    &nbsp;&nbsp;&nbsp;<span class="text-primary">grid-row</span>: 1 / span 2;
                    &nbsp;&nbsp;&nbsp;<span class="text-primary">grid-column</span>: 1 / span 2 ;
                                                    
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
        
    </div>

    <!--clase 43 - Grid - medidas & repeat ()-->
    <div class="container-fluid">
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
    </div>
    <!-- Repeat -->
    <div class="container-fluid">
        <article id="grid-layout-repeat" class="article grid-layout-repeat">
            <h2>Función <span>repeat&#40 &#41</span></h2>
            <p class="destacado">Sirve para establecer repeticiones de medidas o patrones.</p>

            <div class="content">
                <h3>Sintaxis:</h3>
                <pre class="pre-list">
                    <span class="text-primary">repeat</span> &#40 columns o rows, medida &#41

                    .grid-content-repeat{
                      &nbsp;&nbsp;&nbsp;border: 1px solid gray;
                      &nbsp;&nbsp;&nbsp;width: 90%;
                      &nbsp;&nbsp;&nbsp;height: 400px;
                      &nbsp;&nbsp;&nbsp;margin: 20px auto;
                      &nbsp;&nbsp;&nbsp;display: grid;
                    }

                    .grid-layout__repeat {
                      &nbsp;&nbsp;&nbsp;grid-template-columns: repeat(4, 1fr);
                      &nbsp;&nbsp;&nbsp;grid-template-rows: repeat(2, 2fr);
                      &nbsp;&nbsp;&nbsp;gap: 20px 20px;
                    }
                </pre>

                <div class="grid-layout-content">
                    <p class="name_file">class="grid-content-repeat grid-layout__repeat"</p>
                    <div class="grid-content-repeat grid-layout__repeat">
                        <div class="grid-item-repeat">A</div>
                        <div class="grid-item-repeat">B</div>
                        <div class="grid-item-repeat">C</div>
                        <div class="grid-item-repeat">D</div>
                        <div class="grid-item-repeat">E</div>
                        <div class="grid-item-repeat">F</div>
                        <div class="grid-item-repeat">G</div>
                        <div class="grid-item-repeat">H</div>
                        <div class="grid-item-repeat">I</div>
                        <div class="grid-item-repeat">J</div>
                    </div>
                </div>
                <p>Se puede combinar</p>
                <pre class="pre-list">
                    &nbsp;&nbsp;&nbsp;grid-template-columns:200px <span class="text-primary">repeat</span>(3, 1fr) 200px;
                    &nbsp;&nbsp;&nbsp;grid-template-rows: 50px <span class="text-primary">repeat</span> (2, 2fr) 50px;
                    &nbsp;&nbsp;&nbsp;gap: 20px 20px;
                </pre>
                <div class="grid-layout-content">
                    <div class="grid-content-repeat grid-container__repeat__comb">
                        <div class="grid-item-repeat">A</div>
                        <div class="grid-item-repeat">B</div>
                        <div class="grid-item-repeat">C</div>
                        <div class="grid-item-repeat">D</div>
                        <div class="grid-item-repeat">E</div>
                        <div class="grid-item-repeat">F</div>
                        <div class="grid-item-repeat">G</div>
                        <div class="grid-item-repeat">H</div>
                        <div class="grid-item-repeat">I</div>
                        <div class="grid-item-repeat">J</div>
                        <div class="grid-item-repeat">K</div>
                        <div class="grid-item-repeat">L</div>
                        <div class="grid-item-repeat">M</div>
                        <div class="grid-item-repeat">N</div>
                        <div class="grid-item-repeat">O</div>
                        <div class="grid-item-repeat">P</div>
                        <div class="grid-item-repeat">Q</div>
                        <div class="grid-item-repeat">R</div>
                        <div class="grid-item-repeat">S</div>
                    </div>
                </div>
            </div>

            <div class="content">
                <h3>Patrones con <span class="text-primary">repeat&#40 &#41</span></h3>
                <pre class="pre-list">
                    grid-template-columns: <span class="text-primary">repeat</span>&#40 3, <span class="text-danger">1fr 25%</span> &#41 ;
                    gap: 10px;
                </pre>
                <div class="grid-layout-content">
                    <div class="grid-content-repeat grid-container__repeat__patrones">
                        <div class="grid-item-repeat">A</div>
                        <div class="grid-item-repeat">B</div>
                        <div class="grid-item-repeat">C</div>
                        <div class="grid-item-repeat">D</div>
                        <div class="grid-item-repeat">E</div>
                        <div class="grid-item-repeat">F</div>
                        <div class="grid-item-repeat">G</div>
                        <div class="grid-item-repeat">H</div>
                        <div class="grid-item-repeat">I</div>
                    </div>
                    <p>Existe la posibilidad de desbordamiento; depende de la medida de cada elemento hijo.</p>
                </div>
            </div>
        </article>        
    </div>
</section>
            
<!--clase 44 - Grid - Implicit & explicit grid-->
<section class="section">
    <div class="container-fluid">
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
                </dl>
                <ul class="dl-list">
                    <li class="dd-list-item"><span>row</span>: &#40default&#41: Se crearán filas adicionales.</li>
                    <li class="dd-list-item"><span>column</span>: Se crearán columnas adicionales.</li>
                    <li class="dd-list-item"><span>dense</span>: Rellena los espacios vacíos que queden. Su comportamiento es en base al flujo del HTML</li>
                </ul>
                <pre class="pre-list">
                    grid-template-columns: repeat(4, 1fr);
                    grid-template-rows: repeat(2, 100px);
                    gap: 20px 20px;
                    grid-auto-flow: column;
                    grid-auto-columns: 40px;
                </pre>
                <div class="grid-layout-content">
                    <div class="grid-content-repeat grid-container__implicit__grid">
                        <div class="grid-item-repeat gir-color">A</div>
                        <div class="grid-item-repeat gir-color">B</div>
                        <div class="grid-item-repeat gir-color">C</div>
                        <div class="grid-item-repeat gir-color">D</div>
                        <div class="grid-item-repeat gir-color">E</div>
                        <div class="grid-item-repeat gir-color">F</div>
                        <div class="grid-item-repeat gir-color">G</div>
                        <div class="grid-item-repeat gir-color">H</div>
                        <div class="grid-item-repeat">I</div>
                        <div class="grid-item-repeat">J</div>
                        <div class="grid-item-repeat">K</div>
                        <div class="grid-item-repeat">L</div>
                        <div class="grid-item-repeat">M</div>
                        <div class="grid-item-repeat">N</div>
                        <div class="grid-item-repeat">O</div>
                    </div>
                </div>
                <h3>dense</h3>
                <pre class="pre-list">
                    grid-template-columns: repeat(4, 1fr);
                    grid-template-rows: repeat(2, 100px);
                    grid-auto-flow: <span class="text-primary">dense</span>;
                </pre>
                <div class="grid-layout-content">
                    <div class="grid-content-repeat-dense grid-container__dense">
                        <div class="grid-item-repeat">A</div>
                        <div class="grid-item-repeat">B</div>
                        <div class="grid-item-repeat">C</div>
                        <div class="grid-item-repeat">D</div>
                        <div class="grid-item-repeat">E</div>
                        <div class="grid-item-repeat">F</div>
                        <div class="grid-item-repeat">G</div>
                        <div class="grid-item-repeat">H</div>
                        <div class="grid-item-repeat">I</div>
                        <div class="grid-item-repeat">J</div>
                        <div class="grid-item-repeat">K</div>
                        <div class="grid-item-repeat">L</div>
                        <div class="grid-item-repeat">M</div>
                        <div class="grid-item-repeat">N</div>
                    </div>
                </div>

                <pre class="pre-list">
                    .grid-container__dense__1 {
                      &nbsp;&nbsp;&nbsp;grid-template-columns: repeat(5, 1fr);
                      &nbsp;&nbsp;&nbsp;grid-template-rows: repeat(2, 100px);
                      &nbsp;&nbsp;&nbsp;<span class="text-danger">grid-auto-flow: dense;</span>
                    }

                    .grid-container__dense__1 .grid-item-repeat:nth-child(2) {
                      &nbsp;&nbsp;&nbsp;grid-column: span 3;
                      &nbsp;&nbsp;&nbsp;grid-row: 2/4;
                      &nbsp;&nbsp;&nbsp;background: purple;
                    }

                    .grid-container__dense__1 .grid-item-repeat:nth-child(3) {
                      &nbsp;&nbsp;&nbsp;grid-column: 3/6;
                      &nbsp;&nbsp;&nbsp;background: orange;
                    }

                    .grid-container__dense__1 .grid-item-repeat:nth-child(5) {
                      &nbsp;&nbsp;&nbsp;grid-column: span 5;
                      &nbsp;&nbsp;&nbsp;grid-row: span 2;
                      &nbsp;&nbsp;&nbsp;background: peru;
                    }

                    .grid-container__dense__1 .grid-item-repeat:last-child {
                      &nbsp;grid-column: span 3;
                      &nbsp;grid-row: span 3;
                      &nbsp;background: royalblue;
                    }                
                </pre>
                <div class="grid-layout-content">
                    <div class="grid-content-repeat-dense grid-container__dense__1">
                        <div class="grid-item-repeat">A</div>
                        <div class="grid-item-repeat">B</div>
                        <div class="grid-item-repeat">C</div>
                        <div class="grid-item-repeat">D</div>
                        <div class="grid-item-repeat">E</div>
                        <div class="grid-item-repeat">F</div>
                        <div class="grid-item-repeat">G</div>
                        <div class="grid-item-repeat">H</div>
                        <div class="grid-item-repeat">I</div>
                        <div class="grid-item-repeat">J</div>
                        <div class="grid-item-repeat">K</div>
                        <div class="grid-item-repeat">L</div>
                        <div class="grid-item-repeat">M</div>
                        <div class="grid-item-repeat">N</div>
                    </div>
                </div>
            </div>
        </article>        
    </div>
</section>

<!--clase 45 - Grid - min-max(), auto-fill & auto-fit-->
<section class="section">
    <div class="container-fluid">
        <article id="grid-limit" class="article grid-limit">
            <h2>Fijando límites a los <span>grid-item</span></h2>
            <p class="destacado">
                Se utiliza para diseñar layouts dinámicos.
            </p>
            
            <div class="content">
                <dl class="dl-list">
                    <dt><span>minmax &#40 valor_min, valor_max &#41</span></dt>
                    <dd class="dd-list-item">Recibe dos parámetros &#40valores&#41 para establecer el mínimo y el máximo que pueden tener los items.</dd>
                </dl>
                <pre class="pre-list">
                    grid-template-columns: repeat(4, <span class="text-primary">minmax</span>(50px, 100px));
                    grid-template-rows: repeat(2, 100px);
                    gap:5px;
                </pre>

                <a href="./minmax.php" target="_blank" class="btn btn-outline-primary m-4" >Ver clase completa</a>
            </div>
        </article>        
    </div>
</section>

<!--clase 46 - Grid - Alineamiento & order-->
<section id="aling-order" class="section">
    <div class="container-fluid">
        <article class="article alineamientos">
            <h2>Alineamiento & order</h2>
            <p class="destacado">
                Es la posición que los <span class="text-primary">grid-item</span> pueden tomar respecto de la celda que ocupan.
            </p>
            <div class="content">
                <ul class="dl-list">
                    <li class="dd-list-item">Un <span>flex-container</span> puede tambien ser un <span>flex-item.</span> </li>
                    <li class="dd-list-item">Un <span>flex-item</span> puede tambien ser un <span>flex-container.</li>
                    <li class="dd-list-item">En ambos casos se pueden alinear tanto horizontal como verticalmente.</li>
                </ul>
                <a href="./alineamiento-grid.php" target="_blank" class="btn btn-outline-primary m-4" >Ver clase completa</a>
            </div>
        </article>        
    </div>
</section>

<!--clase 47 - Grid - grid template areas-->
<section id="grid-template-areas" class="section">
    <div class="container-fluid">
        <article class="article grid-template-areas">
            <h2>Grid template areas</h2>
            <p class="destacado">Define zonas del layout de una manera sencilla y rápida.</p>
            <div class="content">
                <ul class="dl-list">
                    <li class="dd-list-item">Se complementan perfectamente con grid-template-columns y grid-template-rows para el establecimiento de las medidas de cada zona.</li>
                    <li class="dd-list-item">Así mismo, se complementa con todas las propiedades de css grid. </li>
                </ul>
                <a href="./grid-areas.php" target="_blank" class="btn btn-outline-primary m-4" >Ver clase completa</a>
            </div>
        </article>        
    </div>
</section>

<!--clase 48 - Grid - Nombrando grid lines-->
<section id="grid-lines" class="section">
    <div class="container-fluid">
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
                <figure><img src="./img/template-areas.png" alt="template areas"></figure>
            </div>
        </article>        
    </div>    
</section>

<!--clase 49 - Grid - Grids anidados-->
<!--clase 50 - Grid - Práctica - Galería con grid-->
<!--clase 51 - Grid - Shorthands y grid track