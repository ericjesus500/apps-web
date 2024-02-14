<?php include "../../../../templates/head.php";?>    
    <link rel="stylesheet" href="./grid-css.css">
    <!-- <link rel="stylesheet" href="./minmax.css"> -->
    <link rel="stylesheet" href="./alineamiento-grid.css">
    <title>alineamiento grid | Help</title>

<?php include "../../../../templates/nav-ini.php"; ?>
<?php include "../../nav-css.php";?>

<div class="container-fluid content-gen">
    <!--clase 46 - Grid - Alineamiento & order-->
    <section id="aling-order" class="section">
        <article class="article alineamientos">
            <h2>Alineamiento & order</h2>
            <p class="destacado">
                Es la posición que los <span class="text-primary">grid-item</span> pueden tomar respecto de la celda que ocupan.
            </p>
            <div class="content">
                <ul class="listado">
                    <li>Un <span>flex-container</span> puede tambien ser un <span>flex-item.</span> </li>
                    <li>Un <span>flex-item</span> puede tambien ser un <span>flex-container.</li>
                    <li>En ambos casos se pueden alinear tanto horizontal como verticalmente.</li>
                </ul>
            </div>
        </article>

        <article id="grid-justify-items" class="article grid-justify-items">
            <h2>Alineamientos de los <span class="text-primary">grid-items</span></h2>
            <div class="content">
                <h3>Alineamientos respecto a su celda</h3>
                <dl>
                    <dt><span>justify-items:</span></dt>
                    <dd>Alínea los elementos horizontalmente respecto a la celda.</dd>
                    <ul class="listado">
                        <li><i class="bi bi-check-all"></i>stretch &#40default&#41: Ocupan todo el ancho que pueden.</li>
                        <li><i class="bi bi-check-all"></i>start o flex-start</li>
                        <li><i class="bi bi-check-all"></i>center</li>
                        <li><i class="bi bi-check-all"></i>end o flex-end</li>
                    </ul>
                </dl>
                
                <pre class="pre-list">
                    grid-template-columns: repeat(4, 1fr);
                    gap: 10px;
                    <span class="text-primary">justify-items</span>: center;
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
                <dl>
                    <dt><span>align-items:</span></dt>
                    <dd>Alinea los elementos verticalmente respecto a la celda</dd>
                    <ul class="listado">
                        <li><i class="bi bi-check-all"></i>stretch &#40default&#41: Ocupan todo el alto que pueden.</li>
                        <li><i class="bi bi-check-all"></i>start o flex-start</li>
                        <li><i class="bi bi-check-all"></i>center</li>
                        <li><i class="bi bi-check-all"></i>end o flex-end</li>
                    </ul>
                </dl>
                <pre class="pre-list">
                    grid-template-columns: repeat(4, 1fr);
                    gap: 10px;
                    <span class="text-primary">align-items</span>: center;
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
                
                <dl>
                    <dt><span>place-items</span></dt>
                    <dd>Engloba las propiedades justify-items y align-items</dd>
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
                <dl>
                    <dt><span>justify-content:</span></dt>
                    <dd>Alínea los elementos horizontalmente respecto de su contenendor.</dd>
                    <ul class="listado">
                        <li><i class="bi bi-check-all"></i>stretch &#40default&#41: Ocupan todo el ancho que pueden.</li>
                        <li><i class="bi bi-check-all"></i>start o flex-start</li>
                        <li><i class="bi bi-check-all"></i>center</li>
                        <li><i class="bi bi-check-all"></i>end o flex-end</li>
                        <li><i class="bi bi-check-all"></i>space-around</li>
                        <li><i class="bi bi-check-all"></i>space-between</li>
                        <li><i class="bi bi-check-all"></i>space-evenly</li>
                    </ul>
                </dl>
                <dl>
                    <dt><span>align-content:</span></dt>
                    <dd>Alínea los elementos verticalmente respecto de su contenedor.</dd>
                    <ul class="listado">
                        <li><i class="bi bi-check-all"></i>stretch &#40default&#41: Ocupan todo el alto que pueden.</li>
                        <li><i class="bi bi-check-all"></i>start o flex-start</li>
                        <li><i class="bi bi-check-all"></i>center</li>
                        <li><i class="bi bi-check-all"></i>end o flex-end</li>
                        <li><i class="bi bi-check-all"></i>space-around</li>
                        <li><i class="bi bi-check-all"></i>space-between</li>
                        <li><i class="bi bi-check-all"></i>space-evenly</li>
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
                <dl>
                    <dt><span>place-content</span></dt>
                    <dd>Engloba las propiedades justify-content y align-content</dd>
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
            <h3>Alineación de un <span class="text-primary">grid-item</span> específico</h3>
            <div class="content">
                <dl>
                    <dt><span>justify-self</span></dt>
                    <dd>Posiciona horizontalmente respecto de su celda.</dd>
                </dl>
                <dl>
                    <dt><span>align-self</span></dt>
                    <dd>Posiciona verticalmente respecto de su celda.</dd>
                </dl>
                <dl>
                    <dt><span>place-self</span></dt>
                    <dd></dd>
                </dl>
                <ul class="listado">Valores
                    <li><i class="bi bi-check-all"></i>stretch &#40default&#41: Ocupan todo el alto o ancho que pueden.</li>
                    <li><i class="bi bi-check-all"></i>start o flex-start</li>
                    <li><i class="bi bi-check-all"></i>center</li>
                    <li><i class="bi bi-check-all"></i>end o flex-end</li>
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
            <p class="destacado">Funciona igual que en flexbox, es decir, como <span class="text-primary">z-index</span>. Por defecto todos los items tienen order:0</p>
            <div class="content">
                <pre class="pre-list">
                    .grid-item:nth-child&#40 2 &#41 &#123
                    &nbsp;&nbsp;&nbsp;<span class="text-primary">order</span>: 1;
                    &#125

                    .grid-item:nth-child&#40 4 &#41 &#123
                    &nbsp;&nbsp;&nbsp;<span class="text-primary">order</span>: -1;
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
    
</div>

<?php include "../../../../templates/footer.php"?>