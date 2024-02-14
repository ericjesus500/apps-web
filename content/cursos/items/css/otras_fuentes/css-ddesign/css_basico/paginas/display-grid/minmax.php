<?php include "../../../../templates/head.php";?>    
    <link rel="stylesheet" href="./grid-css.css">
    <link rel="stylesheet" href="./minmax.css">
    <title>min-max | Help</title>

<?php include "../../../../templates/nav-ini.php"; ?>
<?php include "../../nav-css.php";?>

<div class="container-fluid content-gen">
    <!--clase 45 - Grid - min-max(), auto-fill & auto-fit-->
    <section class="section">
        <h2>Fijando límites a los <span>grid-item</span></h2>
        <article id="grid-limit" class="article grid-limit">
            <h3>minmax</h3>
            <pre class="pre-list">
                grid-template-columns: repeat(4, <span class="text-primary">minmax</span>(100px, 300px));
                grid-template-rows: repeat(2, 100px);
                gap:5px;
            </pre>
            <div class="grid-layout-content">
                <div class="grid-container-repeat width-600 height-400 grid-container__minmax">
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

            <h4>Valores pre-definidos para minmax&#40 &#41</h4>
            <dl class="dl-list">
                <dt><span>min-content</span></dt>
                <dd class="dd-list-item">Establece automáticamente el valor <span class="c-danger">mínimo</span> necesario de encojimiento del <span>grid-item</span> en función de su contenido.</dd>
            </dl>
            <pre class="pre-list">
                grid-template-columns: repeat(4, <span class="text-primary">min-content</span>);
                grid-template-rows: repeat(2, 100px);
                gap:5px;
            </pre>
            <div class="grid-layout-content">
                <div class="grid-container-repeat width-1000 height-auto grid-container__min-content">
                    <div class="grid-item-repeat">A</div>
                    <div class="grid-item-repeat">Lorem ipsum dolor.</div>
                    <div class="grid-item-repeat">Lorem ipsum dolor sit amet.</div>
                    <div class="grid-item-repeat">Lorem ipsum dolor sit amet consectetur.</div>
                    <div class="grid-item-repeat">Lorem ipsum dolor sit.</div>
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
            <dl class="dl-list">
                <dt><span>max-content</span></dt>
                <dd class="dd-list-item">Establece automáticamente el valor <span class="c-danger">máximo</span> necesario de encojimiento del <span>grid-item</span> en función de su contenido. Existe desbordamiento.</dd>
            </dl>
            <pre class="pre-list">
                grid-template-columns: repeat(4, <span class="text-primary">max-content</span>);
                grid-template-rows: repeat(2, 100px);
                gap:5px;
            </pre>
            <div class="grid-layout-content">
                <div class="grid-container-repeat height-auto grid-container__max-content">
                    <div class="grid-item-repeat">A</div>
                    <div class="grid-item-repeat">Lorem ipsum dolor.</div>
                    <div class="grid-item-repeat">Lorem ipsum dolor sit amet.</div>
                    <div class="grid-item-repeat">Lorem ipsum dolor sit amet.</div>
                    <div class="grid-item-repeat">Lorem ipsum dolor sit amet.</div>
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
            <p class="destacado">Se puede combinar</p>
            <pre class="pre-list">
                grid-template-columns: repeat&#40 3, minmax&#40 min-content, max-content &#41 &#41 ;

                grid-template-columns: repeat&#40 3, minmax&#40 max-content, 1fr&#41 &#41 ;
            </pre>

            <dl class="dl-list">
                <dt><span>auto-fill</span></dt>
                <dd class="dd-list-item">Crea tantos grid-items vacios como quepan en el viewport respetando las medidas.</dd>
            </dl>
            <pre class="pre-list">
                grid-template-columns: repeat&#40 <span class="text-primary">auto-fill</span>, minmax&#40 60px, 1fr&#41&#41 ;
                gap: 5px;
            </pre>
            <div class="grid-layout-content">
                <div class="grid-content-repeat height-auto grid-container__minmax__auto-fill">
                    <div class="grid-item">A</div>
                    <div class="grid-item">B</div>
                    <div class="grid-item">C</div>
                    <div class="grid-item">D</div>
                </div>
            </div>

            <p>Automáticamente se crean más <span class="text-primary">grid-item</span> para autocompletar el layout.</p>
            <figure>
                <img src="img/auto-fill.PNG" alt="auto-fill" class="img-center">
            </figure>

            <dl class="dl-list">
                <dt><span>auto-fit</span></dt>
                <dd class="dd-list-item">Elimina los grid-items vacios que no se estén ocupando.</dd>
            </dl>
            <pre class="pre-list">
                grid-template-columns: repeat&#40 <span class="text-primary">auto-fit</span>, minmax&#40 60px, 1fr &#41 &#41 ;
                gap: 5px;
            </pre>
            <div class="grid-layout-content">
                <div class="grid-content-repeat height-auto grid-container__minmax__auto-fit">
                    <div class="grid-item">A</div>
                    <div class="grid-item">B</div>
                    <div class="grid-item">C</div>
                    <div class="grid-item">D</div>
                </div>
            </div>

            <p>Automáticamente los <span class="text-primary">grid-item</span> ocuparán todo el ancho disponible del <span class="text-primary">grid-container</span></p>
            <figure>
                <img src="img/auto-fit.PNG" alt="auto-fit" class="img-center">
            </figure>        
        </article>
    </section>
</div>

<?php include "../../../../templates/footer.php"?>