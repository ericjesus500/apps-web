<?php include "../../../../templates/head.php";?>    
    <link rel="stylesheet" href="./grid-css.css">
    <link rel="stylesheet" href="./grid-areas.css">
    <title>Grid Areas | Help</title>

<?php include "../../../../templates/nav-ini.php"; ?>
<?php include "../../nav-css.php";?>

<!--clase 47 - Grid - grid template areas-->
<div class="container-fluid content-gen">
    <section id="grid-template-areas" class="section">
        <article class="article">
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
            </div>
        </article>
        <div class="content-area">
            <iframe src="./ejemplo-clase47/clase47.html" frameborder="0"></iframe>
        </div>
    </section>    
</div>

<?php include "../../../../templates/footer.php"?>