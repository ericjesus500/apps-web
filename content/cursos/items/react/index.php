  <!-- Content Wrapper. Contains page content -->
  <div class="wrapper">
    <div class="wrapper">
      <!-- Content-fluid -->
      <div class="content-fluid">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <?php include_once "templates/navbar-react.php"; ?>
            </div>
          </div>
        </div>

        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="card">
                  <img src="/src/img/react.jpg" class="card-img-top" alt="react">
                  <div class="card-body">
                    <h5 class="card-title"><strong>Qué es React</strong></h5>
                    <p class="card-text">
                      React es una biblioteca de JavaScript de código abierto que se utiliza para crear interfaces de usuario. Fue desarrollada por Facebook y una comunidad de desarrolladores independientes.
                    </p>
                    <p class="card-text">
                      React intenta ayudar a los desarrolladores a construir aplicaciones que usan datos que cambian todo el tiempo. Su objetivo es ser sencillo, declarativo y fácil de combinar.
                    </p>

                    <h5 class="card-title py-3"><strong>React se utiliza para:</strong></h5>
                    <br>
                    <ul class="my-5">
                      <li class="my-3 fs-5"><i class="bi bi-book-half px-2 text-skyblue_2"></i>Facilitar el desarrollo de aplicaciones en una sola página.</li>
                      <li class="my-3 fs-5"><i class="bi bi-book-half px-2 text-skyblue_2"></i>Crear interfaces de usuario para aplicaciones de redes sociales.</li>
                      <li class="my-3 fs-5"><i class="bi bi-book-half px-2 text-skyblue_2"></i>Desarrollar herramientas de visualización de datos.</li>
                      <li class="my-3 fs-5"><i class="bi bi-book-half px-2 text-skyblue_2"></i>Desarrollar herramientas de productividad y colaboración.</li>
                      <li class="my-3 fs-5"><i class="bi bi-book-half px-2 text-skyblue_2"></i>Construir aplicaciones web y nativas.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <!-- caracteristicas -->
                <div class="card card-warning card-outline">
                  <div class="card-header">
                    <h5 class="m-0">Características principales de React</h5>
                  </div>
                  <div class="card-body">
                    <p class="card-text">Resumiendo, React se ha hecho popular en los últimos años gracias a las siguientes características:</p>
                    <ul>
                      <li class="mt-3"><i class="bi bi-check2-square text-danger"></i>React es una biblioteca y NO un framework, lo que lo hace muy liviano.</li>
                      <li class="mt-3"><i class="bi bi-check2-square text-danger"></i>Utilizar un DOM virtual, que es una representación en memoria del DOM.</li>
                      <li class="mt-3"><i class="bi bi-check2-square text-danger"></i>Mantener los componentes actualizados con la menor cantidad de manipulación DOM posible.</li>
                      <li class="mt-3"><i class="bi bi-check2-square text-danger"></i>Ayuda a los desarrolladores a construir aplicaciones que usan datos que cambian todo el tiempo.</li>
                    </ul>
                  </div>
                </div>
                <!-- articulos -->
                <div class="col-md-12">
                  <!-- más sobre React -->
                  <div class="card card-warning collapsed-card" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
                    <!-- ¿Para qué sirve React? -->
                    <div class="card-header">
                      <h3 class="card-title">¿Cual es el objetivo de React</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body bg-dark">
                      <p class="card-text">Alguno de los objetivos más representativos de React son:</p>
                      <ul>
                        <li class="mt-3"><i class="bi bi-check2-square text-skyblue_2"></i>Ser sencillo, declarativo y fácil de combinar.</li>
                        <li class="mt-3"><i class="bi bi-check2-square text-skyblue_2"></i>React sólo maneja la interfaz de usuario en una aplicación.</li>
                        <li class="mt-3"><i class="bi bi-check2-square text-skyblue_2"></i>React es la Vista en un contexto en el que se use el patrón <span class="text-lila"><em>MVC (Modelo-Vista-Controlador)</em></span> o <span class="text-lila"><em>MVVM (Modelo-vista-modelo de vista)</em></span>.</li>
                        <li class="mt-3"><i class="bi bi-check2-square text-skyblue_2"></i>Puede ser utilizado con las extensiones de React-based que se encargan de las partes no-UI (que no forman parte de la interfaz de usuario) de una aplicación web.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- El Ecosistema de React en 2023 -->
                <div class="card card-warning card-outline">
                  <div class="card-header">
                    <h5 class="m-0"><strong>Extensiones de React-based</strong></h5>
                  </div>
                  <div class="card-body">
                    <p class="card-text">Las extensiones de React-based son herramientas que permiten a los desarrolladores de React crear, depurar y mantener código.</p>
                    <p class="card-text">Algunas extensiones de React-based son:</p>
                    <ul>
                      <li class="mt-3"><i class="bi bi-check2-square text-skyblue_2"></i>Snippets: ES7 React/Redux/GraphQL/React Native; son extensiones de Visual Studio Code que permiten crear código rápidamente con abreviaciones.</li>
                      <li class="mt-3"><i class="bi bi-check2-square text-skyblue_2"></i>React Developer Tools: Es una extensión de Chrome DevTools que permite inspeccionar las jerarquías de componentes de React.</li>
                      <li class="mt-3"><i class="bi bi-check2-square text-skyblue_2"></i>JSX: Es una extensión de la sintaxis de JavaScript que se recomienda usar con React para describir la interfaz de usuario.</li>
                      <li class="mt-3"><i class="bi bi-check2-square text-skyblue_2"></i>Herramientas de Desarrollo de React: Una extensión de navegador que permite depurar sitios web construidos con React. Está disponible para Chrome, Firefox y Edge.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.content-fluid -->
    </div>
  </div>
  <!-- /.content-wrapper -->