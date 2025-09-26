  <!-- Content Wrapper. Contains page content -->
  <div class="wrapper">
    <!-- Content-fluid -->
    <div class="content-fluid">
      <!-- Content Header  -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row">
            <?php include_once "templates/navbar-mysql.php"; ?>
          </div>
        </div>
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <img src="src/img/mysql.jpg" class="card-img-top" alt="javascript">
                <div class="card-body">
                  <h3 class="mt-3"><strong>Qué es Mysql</strong></h3>
                  <p class="card-text mt-3">
                    MySQL es un sistema de gestión de bases de datos (DBMS, por sus siglas en inglés) de código abierto desarrollado por Oracle. Se ha ganado su lugar en el mundo digital como una base de datos relacional que permite almacenar, organizar y recuperar datos de manera eficiente. MySQL es utilizado por una amplia variedad de organizaciones y aplicaciones en todo el mundo.
                    <br>
                    Además, utiliza el lenguaje SQL (Structured Query Language) para acceder y manipular los datos.
                  </p>
                </div>
                <div class="card card-primary collapsed-card" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
                  <div class="card-header">
                    <h3 class="card-title">¿Para qué sirve MySQL?</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <p>MySQL se utiliza en una gran variedad de ámbitos, desde sitios web y aplicaciones móviles hasta sistemas empresariales. Su versatilidad lo hace ideal para:</p>
                    <ul class="list-group mt-3">
                      <li class="list-group-item"><i class="bi bi-check2-square px-2 text-indigo"></i><strong>Almacenamiento de Datos :</strong> MySQL almacena datos de manera eficiente, desde información de usuarios y productos hasta registros de transacciones.</li>
                      <li class="list-group-item"><i class="bi bi-check2-square px-2 text-indigo"></i><strong>Aplicaciones Web:</strong> Es ampliamente utilizado para la creación de sitios web y aplicaciones online, ya que puede manejar grandes volúmenes de datos y solicitudes simultáneas.</li>
                      <li class="list-group-item"><i class="bi bi-check2-square px-2 text-indigo"></i><strong>Sistemas Empresariales :</strong> Se utiliza en sistemas de gestión de recursos empresariales (ERP) y sistemas de gestión de relaciones con el cliente (CRM).</li>
                      <li class="list-group-item"><i class="bi bi-check2-square px-2 text-indigo"></i><strong>Análisis de Datos :</strong> Puede ser parte de soluciones de análisis de datos, permitiendo consultas complejas y análisis en tiempo real.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <!-- caracteristicas -->
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="m-0">Características y ventajas de MySQL</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">MySQL tiene una serie de características que lo hacen un DBMS popular, entre las que se incluyen:</p>
                  <ul class="list-group mt-5">
                    <li class="list-group-item"><i class="bi bi-check2-square px-2 text-primary"></i><strong>Es gratuito y de código abierto :</strong> MySQL es un software de código abierto, lo que significa que su código fuente está disponible para que cualquiera lo vea y lo modifique. Esto hace que MySQL sea más accesible y flexible que los sistemas de bases de datos comerciales.</li>
                    <li class="list-group-item"><i class="bi bi-check2-square px-2 text-primary"></i><strong>Escalabilidad :</strong> MySQL se puede escalar para adaptarse a las necesidades de diferentes aplicaciones. MySQL puede manejar desde pequeñas aplicaciones hasta grandes sistemas empresariales.</li>
                    <li class="list-group-item"><i class="bi bi-check2-square px-2 text-primary"></i><strong>Soporte multiplataforma :</strong> Funciona en diversas plataformas, incluidos sistemas Windows, Linux y macOS.</li>
                    <li class="list-group-item"><i class="bi bi-check2-square px-2 text-primary"></i><strong>Seguridad :</strong> Proporciona opciones de autenticación y cifrado de datos para garantizar la seguridad.</li>
                    <li class="list-group-item"><i class="bi bi-check2-square px-2 text-primary"></i><strong>Compatibilidad :</strong> MySQL es compatible con numerosos lenguajes de programación y herramientas de desarrollo.</li>
                    <li class="list-group-item"><i class="bi bi-check2-square px-2 text-primary"></i><strong>Rendimiento :</strong> Ofrece una recuperación de datos rápida y eficiente, ideal para aplicaciones de alto rendimiento.</li>
                    <li class="list-group-item"><i class="bi bi-check2-square px-2 text-primary"></i><strong>Flexibilidad :</strong> Puede ser personalizado y configurado para adaptarse a las necesidades específicas de una aplicación.</li>
                  </ul>
                </div>
              </div>
              <!-- articulos -->
              <div class="col-md-12">
                <!-- más sobre mysql -->
                <div class="card card-primary collapsed-card" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
                  <div class="card-header">
                    <h3 class="card-title">¿Cómo funciona MySQL?</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <p>MySQL utiliza un modelo de base de datos relacional, donde los datos se organizan en tablas con relaciones definidas. Utiliza el lenguaje SQL para realizar consultas y manipular datos. Sus componentes principales incluyen un servidor de base de datos, motores de almacenamiento y clientes que permiten la interacción con la base de datos.</p>
                    <p>El funcionamiento de MySQL se basa en almacenar los datos en el sistema de archivos del servidor. Cuando un programa del ordenador necesita acceder a los datos, envía una consulta SQL al servidor MySQL. El servidor MySQL procesa esta consulta y devuelve los resultados al programa.</p>
                    <p>Al igual que PostgreSQL, MySQL funciona sobre servidores Linux. Sin embargo, al tratarse de servidores de datos accesibles mediante TCP/IP que residen en máquinas dedicadas, pueden utilizarse indistintamente desde clientes Linux o Windows, por lo que podrá hacer uso de dichas bases de datos desde productos de alojamiento bajo cualquiera de los dos sistemas operativos.</p>
                    <ul class="list-group mt-3">
                      <li class="list-group-item"><i class="bi bi-check2-square px-2 text-indigo"></i>Desde aplicaciones en Perl o PHP se puede acceder a las bases de datos utilizando los controladores adecuados que están incluidos en nuestras instalaciones de dichos sistemas de scripting.</li>
                      <li class="list-group-item"><i class="bi bi-check2-square px-2 text-indigo"></i>Desde aplicaciones ASP puede crearse un DSN que apunte a la base de datos.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.main content -->
  </div>
  <!-- /.content-fluid -->
  </div>
  <!-- /.content-wrapper -->