<div class="row">
  <div class="col-5 col-sm-3 h-100">
    <div class="nav flex-column nav-tabs" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="vert-tabs-item-basico-1-tab" data-toggle="pill" href="#vert-tabs-item-basico-1" role="tab" aria-controls="vert-tabs-item-basico-1" aria-selected="false"><i class="bi bi-journals"></i>Item 1</a>
      <a class="nav-link" id="vert-tabs-item-basico-2-tab" data-toggle="pill" href="#vert-tabs-item-basico-2" role="tab" aria-controls="vert-tabs-item-basico-2" aria-selected="false"><i class="bi bi-journals"></i>Item 2</a>
      <a class="nav-link" id="vert-tabs-item-basico-3-tab" data-toggle="pill" href="#vert-tabs-item-basico-3" role="tab" aria-controls="vert-tabs-item-basico-3" aria-selected="false"><i class="bi bi-journals"></i>Item 3</a>
      <a class="nav-link" id="vert-tabs-item-basico-4-tab" data-toggle="pill" href="#vert-tabs-item-basico-4" role="tab" aria-controls="vert-tabs-item-basico-4" aria-selected="true"><i class="bi bi-journals"></i>Item 4</a>
      <a class="nav-link" id="vert-tabs-item-basico-5-tab" data-toggle="pill" href="#vert-tabs-item-basico-5" role="tab" aria-controls="vert-tabs-item-basico-5" aria-selected="true"><i class="bi bi-journals"></i>Item 5</a>
      <a class="nav-link" id="vert-tabs-item-basico-6-tab" data-toggle="pill" href="#vert-tabs-item-basico-6" role="tab" aria-controls="vert-tabs-item-basico-6" aria-selected="true"><i class="bi bi-journals"></i>Item 6</a>
      <a class="nav-link" id="vert-tabs-item-basico-7-tab" data-toggle="pill" href="#vert-tabs-item-basico-7" role="tab" aria-controls="vert-tabs-item-basico-7" aria-selected="true"><i class="bi bi-journals"></i>Item 7</a>
      <a class="nav-link" id="vert-tabs-item-basico-8-tab" data-toggle="pill" href="#vert-tabs-item-basico-8" role="tab" aria-controls="vert-tabs-item-basico-8" aria-selected="true"><i class="bi bi-journals"></i>Item 8</a>
      <a class="nav-link" id="vert-tabs-item-basico-9-tab" data-toggle="pill" href="#vert-tabs-item-basico-9" role="tab" aria-controls="vert-tabs-item-basico-9" aria-selected="true"><i class="bi bi-journals"></i>Item 9</a>
      <a class="nav-link" id="vert-tabs-item-basico-10-tab" data-toggle="pill" href="#vert-tabs-item-basico-10" role="tab" aria-controls="vert-tabs-item-basico-10" aria-selected="true"><i class="bi bi-journals"></i>Item 10</a>
      <!-- <a class="nav-link" id="vert-tabs-item-basico-11-tab" data-toggle="pill" href="#vert-tabs-item-basico-11" role="tab" aria-controls="vert-tabs-item-basico-11" aria-selected="true"><i class="bi bi-journals"></i>Item 11</a>
      <a class="nav-link" id="vert-tabs-item-basico-12-tab" data-toggle="pill" href="#vert-tabs-item-basico-12" role="tab" aria-controls="vert-tabs-item-basico-12" aria-selected="true"><i class="bi bi-journals"></i>Item 12</a>
      <a class="nav-link" id="vert-tabs-item-basico-13-tab" data-toggle="pill" href="#vert-tabs-item-basico-13" role="tab" aria-controls="vert-tabs-item-basico-13" aria-selected="true"><i class="bi bi-journals"></i>Item 13</a> -->
    </div>
  </div>
  <div class="col-7 col-sm-9">
    <div class="tab-content" id="vert-tabs-tabContent">

      <!--  -->
      <div class="tab-pane text-left fade active show" id="vert-tabs-item-basico-1" role="tabpanel" aria-labelledby="vert-tabs-item-basico-1-tab">
        <!-- capitulos del tema -->
        <div class="card card-warning collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <h4>Item 1</h4>
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action">Sub T 1</a>
              <a href="#" class="list-group-item list-group-item-action">Sub T 2</a>
              <a href="#" class="list-group-item list-group-item-action">Sub T 3</a>
              <a href="#" class="list-group-item list-group-item-action">Sub T 4</a>
              <a href="#" class="list-group-item list-group-item-action">Sub T 5</a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba">
          <a href="#"><i class="text-warning bi bi-caret-up-fill"></i></a>
        </div>

        <section class="section">

          <h1 class="my-5"><span class="bg-orange_1 px-3 rounded">Instalar Astro</span></h1>

          <!-- Usando el CLI de Astro -->
          <article class="w-100 px-4 my-5 article">
            <h2 class="text-lila mt-5"><em>Usando el CLI de Astro</em></h2>
            <div class="callout callout-warning my-5">
              <p class="pathway-extreme-p text-dark">El comando CLI <span class="text-lila"><em>create astro</em></span> es la forma más rápida de iniciar un nuevo proyecto Astro desde cero. Nos guiará a través de cada paso de la configuración de un nuevo proyecto Astro y permitirá elegir entre algunas plantillas de inicio oficiales diferentes.</p>
            </div>

            <p class="pathway-extreme-p text-justify mt-4">También puede ejecutar el comando CLI con la bandera <span class="text-lila"><em>template</em></span> para comenzar su proyecto utilizando cualquier tema o plantilla de inicio existente.</p>

            <h3 id="" class="mt-5">Pre requisitos</h3>
            <ul class="list-group">
              <li class="list-group-item"><span class="text-primary">Node JS: </span>v18.17.1o v20.3.0, v22.0.0o superior. ( v19y v21no son compatibles)</li>
              <li class="list-group-item"><span class="text-primary">Editor de texto: </span>recomendamos VS Code con nuestra <a class="btn-link" href="https://marketplace.visualstudio.com/items?itemName=astro-build.astro-vscode" target="_blank">extensión oficial Astro</a></li>
              <li class="list-group-item"><span class="text-primary">Terminal: </span>Se accede a Astro a través de su interfaz de línea de comandos (CLI)</li>
            </ul>

            <h3 id="" class="mt-5">Instalar desde el asistente CLI</h3>

            <p class="pathway-extreme-p text-justify mt-4">Puede ejecutar <span class="text-lila"><em>create astro</em></span> en cualquier parte de su equipo, por lo que no es necesario crear un nuevo directorio vacío para su proyecto antes de comenzar. Si aún no tiene un directorio vacío para su nuevo proyecto, el asistente lo ayudará a crear uno automáticamente.</p>

            <p class="pathway-extreme-p text-justify mt-4">Ejecute el siguiente comando en su terminal para iniciar el asistente de instalación:</p>

            <pre class="pre-content-list bg-blue_2 my-5">
              <code>
                <span class="comentario">#crear un nuevo proyecto con npm</span>
                <span class="text-tomato">npm</span> <span class="text-skyblue_2">create</span> astro@latest
                
                <span class="comentario">#crear un nuevo proyecto con pnpm</span>
                <span class="text-tomato">pnpm</span> <span class="text-skyblue_2">create</span> astro@latest
                
                <span class="comentario">#crear un nuevo proyecto con yarn</span>
                <span class="text-tomato">yarn</span> <span class="text-skyblue_2">create</span> astro
              </code>
            </pre>

            <p class="pathway-extreme-p text-justify mt-4">Si todo va bien, verás un mensaje de éxito seguido de algunos pasos siguientes recomendados.</p>

            <p class="pathway-extreme-p text-justify mt-4">Luego que el proyecto ha sido creado, se debe ingresar al nuevo directorio de proyecto para comenzar a utilizar Astro.</p>

            <p class="pathway-extreme-p text-justify mt-4">Si omitió el paso “¿Instalar dependencias?” durante el asistente de CLI, asegúrese de instalar sus dependencias antes de continuar.</p>
            <pre class="pre-content-list bg-blue_2 my-5">
              <code>
                <span class="comentario">Con npm</span>
                <span class="text-tomato">npm</span> <span class="text-skyblue_2">install</span>
                
                <span class="comentario">Con pnpm</span>
                <span class="text-tomato">pnpm</span> <span class="text-skyblue_2">install</span>
                
                <span class="comentario">Con yarn</span>
                <span class="text-tomato">yarn</span> <span class="text-skyblue_2">install</span>
              </code>
            </pre>

            <p class="pathway-extreme-p text-justify mt-4">Seguidamente iniciar el servidor de desarrollo Astro</p>
            <pre class="pre-content-list bg-blue_2 my-5">
              <code>
                <span class="comentario">Con npm</span>
                <span class="text-tomato">npm</span> <span class="text-skyblue_2">run</span> dev
                
                <span class="comentario">Con pnpm</span>
                <span class="text-tomato">pnpm</span> <span class="text-skyblue_2">run</span> dev
                
                <span class="comentario">Con yarn</span>
                <span class="text-tomato">yarn</span> <span class="text-skyblue_2">run</span> dev
              </code>
            </pre>

            <p class="pathway-extreme-p text-justify mt-4">Si todo va bien, Astro ahora servirá el proyecto en <span class="text-primary"><em>http://localhost:4321/</em></span></p>

            <p class="pathway-extreme-p text-justify mt-4">Cuando visualices tu sitio en el navegador, se tendrá acceso a la barra de herramientas de desarrollo de Astro. A medida que vayas creando, te ayudará a inspeccionar tus islas, detectar problemas de accesibilidad y más.</p>

            <h3 id="" class="mt-5">Crear y obtener una vista previa de un sitio.</h3>
            <p class="pathway-extreme-p text-justify mt-4">Para comprobar la versión de su sitio que se creará en el momento de la compilación, salga del servidor de desarrollo ( Ctrl+ C) y ejecute el comando de compilación apropiado para su administrador de paquetes en su terminal:</p>
            <pre class="pre-content-list bg-blue_2 my-5">
              <code>
                <span class="comentario">Con npm</span>
                <span class="text-tomato">npm</span> <span class="text-skyblue_2">run</span> build
                
                <span class="comentario">Con pnpm</span>
                <span class="text-tomato">pnpm</span> <span class="text-skyblue_2">buil</span>
                
                <span class="comentario">Con yarn</span>
                <span class="text-tomato">yarn</span> <span class="text-skyblue_2">run</span> buil
              </code>
            </pre>

            <p class="pathway-extreme-p text-justify mt-4">Astro creará una versión del sitio lista para implementar en una carpeta separada ( por defecto dist/) y podrás ver su progreso en la terminal. Esto te avisará de cualquier error de compilación en el proyecto antes de implementarlo en producción. Si TypeScript está configurado como stricto strictest, el script build también comprobará el proyecto en busca de errores de tipo.</p>

            <p class="pathway-extreme-p text-justify mt-4">Cuando finalice la compilación, ejecute el comando <span class="text-lila"><em>preview</em></span> apropiado (por ejemplo npm run preview) en su terminal y podrá ver la versión compilada de su sitio localmente en la misma ventana de vista previa del navegador.</p>

            <p class="pathway-extreme-p text-justify mt-4">Tenga en cuenta que esta opción muestra una vista previa del código tal como existía cuando se ejecutó por última vez el comando de compilación. Esto tiene como objetivo brindarle una vista previa de cómo se verá su sitio cuando se implemente en la Web. Cualquier cambio posterior que realice en su código después de la compilación no se reflejará mientras obtiene una vista previa de su sitio hasta que vuelva a ejecutar el comando de compilación.</p>

            <p class="pathway-extreme-p text-justify mt-4">Utilice ( Ctrl+ C) para salir de la vista previa y ejecutar otro comando de terminal, como reiniciar el servidor de desarrollo para volver a trabajar en el modo de desarrollo que se actualiza a medida que edita para mostrar una vista previa en vivo de los cambios en su código.</p>

            <p class="pathway-extreme-p text-justify mt-4"></p>
            <h3 id="" class="mt-5">Sub TT 1</h3>
            <h4 class="mt-5 resaltado"></h4>
            <h4 class="mt-5 resaltado"></h4>
            <div class="alert alert-warning w-75 m-auto text-justify">
              <h5><i class="icon fas fa-exclamation-triangle"></i></h5>
            </div>
            <pre class="pre-content-list bg-blue_2 my-5">
              <code>
              </code>
            </pre>

          </article>

          <!--  -->
          <article class="w-100 px-4 my-5 article">
            <h2 class="text-lila mt-5"><em></em></h2>
            <div class="callout callout-warning my-5">
              <p class="pathway-extreme-p text-dark"></p>
            </div>

            <p class="pathway-extreme-p text-justify mt-4"></p>
            <p class="pathway-extreme-p text-justify mt-4"></p>

            <h3 id="" class="mt-5">Pre requisitos</h3>
            <h3 id="" class="mt-5">Sub TT 1</h3>
          </article>

          <!--  -->
          <article class="w-100 px-4 my-5 article">
            <h2 class="text-lila mt-5"><em></em></h2>
            <div class="callout callout-warning my-5">
              <p class="pathway-extreme-p text-dark"></p>
            </div>

            <p class="pathway-extreme-p text-justify mt-4"></p>
            <p class="pathway-extreme-p text-justify mt-4"></p>

            <h2 class="text-lila mt-5"><em>Sub T 1</em></h2>
            <h2 class="text-lila mt-5"><em>Sub T 1</em></h2>
            <h2 class="text-lila mt-5"><em>Sub T 1</em></h2>
            <h3 id="" class="mt-5">Sub TT 1</h3>
            <h3 id="" class="mt-5">Pre requisitos</h3>

          </article>

        </section>
      </div>

      <!--  -->
      <div class="tab-pane fade" id="vert-tabs-item-basico-2" role="tabpanel" aria-labelledby="vert-tabs-item-basico-2-tab">
        <!-- capitulos del tema -->
        <div class="card card-warning collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <h4>Item 1</h4>
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action">Sub T 1</a>
              <a href="#" class="list-group-item list-group-item-action">Sub T 2</a>
              <a href="#" class="list-group-item list-group-item-action">Sub T 3</a>
              <a href="#" class="list-group-item list-group-item-action">Sub T 4</a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba">
          <a href="#"><i class="text-warning bi bi-caret-up-fill"></i></a>
        </div>

        <!--  -->
        <section class="section">

          <h1 class="my-5"><span class="bg-orange_1 px-3 rounded">Titulo 2</span></h1>

          <!-- -->
          <article class="w-100 px-4 my-5 article">

            <h2 class="text-lila mt-5"><em>Sub T 1</em></h2>

            <div class="callout callout-warning my-5">
              <p class="pathway-extreme-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, dolor..</p>
            </div>
            <p class="pathway-extreme-p text-justify mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, numquam..</p>

            <pre class="sintaxis my-5">
                <code>
                </code>
              </pre>

            <h3 id="" class=" mt-5 text-indigo"><em>Sub TT 1</em></h3>
            <p class="pathway-extreme-p text-justify mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, blanditiis? </p>
            <pre class="sintaxis my-5">
                <code>
                </code>
              </pre>
            <p class="pathway-extreme-p text-justify mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, dignissimos?.</p>
            <p class="pathway-extreme-p text-justify mt-4">Ejemplo:</p>

            <pre class="sintaxis my-5">
                <code>
                </code>
              </pre>

          </article>

          <!-- -->
          <article class="w-100 px-4 my-5 article">

            <h2 class="text-lila mt-5"><em></em></h2>

            <p class="pathway-extreme-p text-justify mt-4"></p>

            <h3 id="instancia" class=" mt-5 text-indigo"><em></em></h3>
            <p class="pathway-extreme-p text-justify mt-4"></p>
            <pre class="sintaxis my-5">
                <code>
                </code>
              </pre>
            <div class="alert alert-warning w-75 m-auto text-justify">
              <h5><i class="icon fas fa-exclamation-triangle"></i></h5>
            </div>
          </article>

        </section>
      </div>

      <!--  -->
      <div class="tab-pane fade" id="vert-tabs-item-basico-3" role="tabpanel" aria-labelledby="vert-tabs-item-basico-3-tab">
        <!-- capitulos del tema -->
        <div class="card card-warning collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <h4 class="my-3"></h4>
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action"></a>
              <a href="#" class="list-group-item list-group-item-action"></a>
              <a href="#" class="list-group-item list-group-item-action"></a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba">
          <a href="#"><i class="text-warning bi bi-caret-up-fill"></i></a>
        </div>
        <section class="section">

          <h1 class="my-5"><span class="bg-orange_1 px-3 rounded"></span></h1>

          <!-- -->
          <article class="w-100 px-4 my-5 article">

            <h2 id="def_metodo" class=" text-lila mt-5"><em></em></h2>

            <div class="callout callout-warning my-5">
              <p class="pathway-extreme-p"></p>
            </div>

            <p class=" pathway-extreme-ptext-justify mt-4"></p>

            <div class="alert alert-warning w-75 m-auto text-justify my-5">
              <h5><i class="icon fas fa-exclamation-triangle"></i></h5>

            </div>

            <div class="text-center my-5">
              <a class="btn btn-outline-success" href="#" target="_blank">Ver ejemplo</a>
            </div>

          </article>

          <!--  -->
          <article class="w-100 px-4 my-5 article">
            <h2 class="text-lila mt-5"><em></em></h2>
            <p class="pathway-extreme-ptext-justify mt-4"></p>

            <p class="pathway-extreme-ptext-justify mt-4"></p>

            <h3 id="" class="mt-5 text-indigo"><em></em></h3>
            <pre class="pre-content-list bg-blue_2 my-5">
                <code>
                </code>
              </pre>
            <div class="text-center my-5">
              <a class="btn btn-outline-success" href="#" target="_blank">Ver ejemplo</a>
            </div>
          </article>

          <!-- -->
          <article class="w-100 px-4 my-5 article">
            <h2 id="" class="text-lila mt-5"><em></em></h2>

            <p class=" pathway-extreme-ptext-justify mt-4"></p>

            <div class="alert alert-danger w-75 m-auto text-justify">
              <h5><i class="icon fas fa-ban"></i></h5>
              "<em></em>"
            </div>
          </article>

          <!--  -->
          <article class="w-100 px-4 my-5 article">
            <h2 class="text-lila mt-5"><em></em></h2>
            <p class=" pathway-extreme-ptext-justify mt-4"></p>

            <h4 id="" class="resaltado"></h4>
            <p class=" pathway-extreme-ptext-justify mt-4"></p>

            <h4 id="" class="resaltado"></h4>
            <p class=" pathway-extreme-ptext-justify mt-4"></p>
            <ul class="list-group">
              <li class="my-2 list-group-item"><i class="bi bi-check2-square px-2 text-warning"></i><a href="#"></a></li>
              <li class="my-2 list-group-item"><i class="bi bi-check2-square px-2 text-warning"></i><a href="#"></a></li>
              <li class="my-2 list-group-item"><i class="bi bi-check2-square px-2 text-warning"></i><a href="#"></a></li>
              <li class="my-2 list-group-item"><i class="bi bi-check2-square px-2 text-warning"></i><a href="#"></a></li>
              <li class="my-2 list-group-item"><i class="bi bi-check2-square px-2 text-warning"></i><a href="#"></a></li>
            </ul>
          </article>

          <!-- -->
          <article class="w-100 px-4 my-5 article">

            <h2 class="text-lila mt-5"><em></em></h2>
            <p class=" pathway-extreme-ptext-justify mt-4"></p>

            <h4 id="file_1" class="resaltado"></h4>

          </article>

        </section>
      </div>

      <!-- -->
      <div class="tab-pane fade" id="vert-tabs-item-basico-4" role="tabpanel" aria-labelledby="vert-tabs-item-basico-4-tab">
        <!-- capitulos del tema -->
        <div class="card card-warning collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <h4 class="my-3"></h4>
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action"></a>
              <a href="#" class="list-group-item list-group-item-action"></a>
              <a href="#" class="list-group-item list-group-item-action"></a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba">
          <a href="#"><i class="text-warning bi bi-caret-up-fill"></i></a>
        </div>
        <section class="section">

          <h1 class="my-5"><span class="bg-orange_1 px-3 rounded"></span></h1>

          <!--  -->
          <article class="w-100 px-4 my-5 article">

            <h2 class="text-lila mt-5"><em></em></h2>

            <div class="callout callout-warning my-5">
              <p class="pathway-extreme-p"></p>
            </div>

            <h3 id="" class="mt-5 text-indigo"><em></em></h3>
            <ul class="list-group">
              <li class="my-2 list-group-item fs-5"><i class="bi bi-check2-square px-2 text-warning"></i></li>
              <li class="my-2 list-group-item fs-5"><i class="bi bi-check2-square px-2 text-warning"></i></li>
              <li class="my-2 list-group-item fs-5"><i class="bi bi-check2-square px-2 text-warning"></i></li>
              <li class="my-2 list-group-item fs-5"><i class="bi bi-check2-square px-2 text-warning"></i></li>
              <li class="my-2 list-group-item fs-5"><i class="bi bi-check2-square px-2 text-warning"></i></li>
            </ul>
            <h4 class="resaltado"></h4>

          </article>

          <!-- -->
          <article class="w-100 px-4 my-5 article">

            <h2 class="text-lila mt-5"><em></em></h2>

            <h3 id="" class="mt-5 text-indigo"><em></em></h3>

            <div class="callout callout-warning my-5">
              <p class="pathway-extreme-p"></p>
            </div>

            <p class="pathway-extreme-ptext-justify mt-4"></p>

            <p class="pathway-extreme-ptext-justify mt-4"></p>

            <ul class="list-group">
              <li class="my-2 list-group-item fs-5"><i class="bi bi-check2-square px-2 text-warning"></i><strong></strong></li>
              <li class="my-2 list-group-item fs-5"><i class="bi bi-check2-square px-2 text-warning"></i><strong></strong></li>
              <li class="my-2 list-group-item fs-5"><i class="bi bi-check2-square px-2 text-warning"></i><strong></strong></li>
            </ul>
            <div class="border text-center my-5 mx-auto w-100">
              <img src="" alt="" class="">
            </div>
          </article>

          <!--  -->
          <article class="w-100 px-4 my-5 article">
            <h2 id="" class="text-lila mt-5"><em></em></h2>
            <p class="pathway-extreme-ptext-justify mt-4"></p>

            <h3 id="" class="mt-5 text-indigo"><em></em></h3>

            <p class="pathway-extreme-ptext-justify mt-4"></p>
            <pre class="sintaxis my-5">
                <code>
                </code>
              </pre>

            <div class="text-center my-5">
              <a class="btn btn-outline-success" href="#" target="_blank"></a>
            </div>
          </article>

        </section>
      </div>

      <!--  -->
      <div class="tab-pane fade" id="vert-tabs-item-basico-5" role="tabpanel" aria-labelledby="vert-tabs-item-basico-5-tab">
        <!-- capitulos del tema -->
        <div class="card card-warning collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action"></a>
              <a href="#" class="list-group-item list-group-item-action"></a>
              <a href="#" class="list-group-item list-group-item-action"></a>
              <a href="#" class="list-group-item list-group-item-action"></a>
              <a href="#" class="list-group-item list-group-item-action"></a>
              <a href="#" class="list-group-item list-group-item-action"></a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba">
          <a href="#"><i class="text-warning bi bi-caret-up-fill"></i></a>
        </div>

        <section class="section">

          <h1 class="my-5"><span class="bg-orange_1 px-3 rounded"></span></h1>

          <article class="w-100 px-4 my-5 article">

            <h2 id="" class=" text-lila mt-5"><em></em></h2>

            <div class="callout callout-warning my-5">
              <p class="pathway-extreme-p"></p>
            </div>
            <p class="pathway-extreme-ptext-justify mt-4"></p>
            <p class="pathway-extreme-ptext-justify mt-4"></p>
            <div class="text-center my-5">
              <a class="btn btn-outline-success" href="#" target="_blank">Probar</a>
            </div>

          </article>

        </section>

      </div>

      <!-- -->
      <div class="tab-pane fade" id="vert-tabs-item-basico-6" role="tabpanel" aria-labelledby="vert-tabs-item-basico-6-tab">
        <!-- capitulos del tema -->
        <div class="card card-warning collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <ul class="list-group">
              <h4 class="my-3"><strong></strong></h4>
              <a href="#" class="list-group-item list-group-item-action"></a>
              <a href="#" class="list-group-item list-group-item-action"></a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba">
          <a href="#"><i class="text-warning bi bi-caret-up-fill"></i></a>
        </div>

        <section class="section">

          <h1 class="my-5"><span class="bg-orange_1 px-3 rounded"></span></h1>

          <article class="w-100 px-4 my-5 article">

            <h2 id="" class="text-lila mt-5"><em></em></h2>

            <div class="callout callout-warning my-5">
              <p class="pathway-extreme-p"></p>
            </div>

            <p class="pathway-extreme-ptext-justify mt-5"></p>

            <h4 class="resaltado my-5"></h4>
          </article>

          <article class="w-100 px-4 my-5 article">

            <h2 class="text-lila mt-5"><em></em></h2>
            <ul class="w-100 p-0">
              <li id="" class="mt-3 fs-5 px-4">
                <div class="callout callout-warning my-5">
                  <i class="bi bi-check-all text-indigo"></i><a class="text-primary" href="" target="_blank"> </a>
                </div>
                <p class="mt-4 font-monospace text-decoration-underline">Descripción</p>
              </li>
            </ul>
          </article>

          <!--  -->
          <article class="w-100 px-4 my-5 article">
            <h2 id="el_controlador" class="text-lila mt-5"><em></em></h2>
          </article>

          <!--  -->
          <article class="w-100 px-4 my-5 article">
            <h2 id="el_controlador" class="text-lila mt-5"><em></em></h2>
          </article>

          <!--  -->
          <article class="w-100 px-4 my-5 article">
            <h2 id="el_controlador" class="text-lila mt-5"><em></em></h2>
          </article>

          <!--  -->
          <article class="w-100 px-4 my-5 article">
            <h2 id="el_controlador" class="text-lila mt-5"><em></em></h2>
          </article>
        </section>

        <!-- PLANTILLAS -->
        <div class="w-100">

          <p class="pathway-extreme-ptext-justify mt-4">.</p>

          <p class="mt-4 font-monospace text-decoration-underline"></p>

          <div class="text-center my-5">
            <a class="btn btn-outline-success" href="/content/cursos/items/php/ejercicios/clases/file.php" target="_blank">Ver ejemplo</a>
          </div>

          <h2 class="text-lila mt-5"><em></em></h2>

          <h3 class="mt-5 text-indigo"><em></em></h3>

          <h4 class="resaltado"></h4>
          <h4 class="resaltado"></h4>

          <div class="w-75 my-5 mx-auto">
            <img src="" alt="" class="img-fluid">
          </div>

          <ol class="list-group list-group-numbered">
            <li class="list-group-item fs-5 my-2">A list item</li>
            <li class="list-group-item fs-5 my-2">A list item</li>
            <li class="list-group-item fs-5 my-2">A list item</li>
          </ol>

          <ul class="list-group">
            <li class="my-2 list-group-item fs-5"><i class="bi bi-check2-square px-2 text-warning"></i></li>
            <li class="my-2 list-group-item fs-5"><i class="bi bi-check2-square px-2 text-warning"></i></li>
            <li class="my-2 list-group-item fs-5"><i class="bi bi-check2-square px-2 text-warning"></i></li>
            <li class="my-2 list-group-item fs-5"><i class="bi bi-check2-square px-2 text-warning"></i></li>
          </ul>

          <div class="callout callout-warning my-5">
            <p class="pathway-extreme-p"></p>
          </div>

          <div class="alert alert-danger w-75 m-auto text-justify">
            <h5 class="mt-3"><i class="icon fas fa-ban"></i> Alert!</h5>
            <p class="fs-5">Texto aquí</p>
          </div>


          <div class="alert alert-warning w-75 m-auto text-justify">

            <h5><i class="icon fas fa-exclamation-triangle"></i> Sugerencia</h5>
            Texto aqui
          </div>

          <pre class="sintaxis my-5">
            <code></code>
          </pre>

          <pre class="pre-content-list bg-blue_2 mt-5 px-5">
            <code>
            </code>
          </pre>

        </div>
      </div>

      <!-- Item 7 -->
      <div class="tab-pane fade" id="vert-tabs-item-basico-7" role="tabpanel" aria-labelledby="vert-tabs-item-basico-7-tab">
        <!-- capitulos del tema -->
        <div class="card card-warning collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action">Item 1</a>
              <a href="#" class="list-group-item list-group-item-action">Item 2</a>
              <a href="#" class="list-group-item list-group-item-action">Item 3</a>
              <a href="#" class="list-group-item list-group-item-action">Item 4</a>
              <a href="#" class="list-group-item list-group-item-action">Item 5</a>
              <a href="#" class="list-group-item list-group-item-action">Item 6</a>
              <a href="#" class="list-group-item list-group-item-action">Item 7</a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba">
          <a><i class="text-warning bi bi-caret-up-fill"></i></a>
        </div>

        <section class="section">

          <h1 class="my-5"><span class="bg-orange_1 px-3 rounded">Item 7</span></h1>

          <article class="w-100 px-4 my-5 article">

            <h2 class="text-lila mt-5"><em></em></h2>

            <div class="callout callout-warning my-5">
              <p class="pathway-extreme-p">.</p>
            </div>

          </article>

        </section>
      </div>

      <!-- Item 8 -->
      <div class="tab-pane fade" id="vert-tabs-item-basico-8" role="tabpanel" aria-labelledby="vert-tabs-item-basico-8-tab">
        <!-- capitulos del tema -->
        <div class="card card-warning collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action">Item 1</a>
              <a href="#" class="list-group-item list-group-item-action">Item 2</a>
              <a href="#" class="list-group-item list-group-item-action">Item 3</a>
              <a href="#" class="list-group-item list-group-item-action">Item 4</a>
              <a href="#" class="list-group-item list-group-item-action">Item 5</a>
              <a href="#" class="list-group-item list-group-item-action">Item 6</a>
              <a href="#" class="list-group-item list-group-item-action">Item 7</a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba">
          <a><i class="text-warning bi bi-caret-up-fill"></i></a>
        </div>

        <section class="section">

          <h1 class="my-5"><span class="bg-orange_1 px-3 rounded">Item 8</span></h1>

          <article class="w-100 px-4 my-5 article">

            <h2 class="text-lila mt-5"><em></em></h2>

            <div class="callout callout-warning my-5">
              <p class="pathway-extreme-p">.</p>
            </div>

          </article>

        </section>
      </div>

      <!-- Item 9 -->
      <div class="tab-pane fade" id="vert-tabs-item-basico-9" role="tabpanel" aria-labelledby="vert-tabs-item-basico-9-tab">
        <!-- capitulos del tema -->
        <div class="card card-warning collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action">Item 1</a>
              <a href="#" class="list-group-item list-group-item-action">Item 2</a>
              <a href="#" class="list-group-item list-group-item-action">Item 3</a>
              <a href="#" class="list-group-item list-group-item-action">Item 4</a>
              <a href="#" class="list-group-item list-group-item-action">Item 5</a>
              <a href="#" class="list-group-item list-group-item-action">Item 6</a>
              <a href="#" class="list-group-item list-group-item-action">Item 7</a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba">
          <a><i class="text-warning bi bi-caret-up-fill"></i></a>
        </div>

        <section class="section">

          <h1 class="my-5"><span class="bg-orange_1 px-3 rounded">Item 9</span></h1>

          <article class="w-100 px-4 my-5 article">

            <h2 class="text-lila mt-5"><em></em></h2>

            <div class="callout callout-warning my-5">
              <p class="pathway-extreme-p">.</p>
            </div>

          </article>

        </section>
      </div>

      <!-- Item 10 -->
      <div class="tab-pane fade" id="vert-tabs-item-basico-10" role="tabpanel" aria-labelledby="vert-tabs-item-basico-10-tab">
        <!-- capitulos del tema -->
        <div class="card card-warning collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Seleccione un capítulo del tema</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <ul class="list-group">
              <a href="#" class="list-group-item list-group-item-action">Item 1</a>
              <a href="#" class="list-group-item list-group-item-action">Item 2</a>
              <a href="#" class="list-group-item list-group-item-action">Item 3</a>
              <a href="#" class="list-group-item list-group-item-action">Item 4</a>
              <a href="#" class="list-group-item list-group-item-action">Item 5</a>
              <a href="#" class="list-group-item list-group-item-action">Item 6</a>
              <a href="#" class="list-group-item list-group-item-action">Item 7</a>
            </ul>
          </div>
        </div>
        <div class="arrow-arriba">
          <a><i class="text-warning bi bi-caret-up-fill"></i></a>
        </div>

        <section class="section">

          <h1 class="my-5"><span class="bg-orange_1 px-3 rounded">Item 10</span></h1>

          <article class="w-100 px-4 my-5 article">

            <h2 class="text-lila mt-5"><em></em></h2>

            <div class="callout callout-warning my-5">
              <p class="pathway-extreme-p">.</p>
            </div>

          </article>

        </section>
      </div>
    </div>
  </div>
</div>