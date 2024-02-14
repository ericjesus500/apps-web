  <?php include "./templates/header.php"?>
  <title>APPS WEB</title>
  </head>

  <body class="hold-transition sidebar-mini">
    <div class="wrapper">

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <?php include "./templates/sidebar_inicial.php"?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper p-3">
        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div id="resultado" class="w-100">
                <div class="row">
                  <div class="col-lg-6">
                    <!-- COLECCION DE VIDEOS PARA ESTUDIO  -->
                    <div class="card">
                      <div class="card-header bg-purple">
                        Videos
                      </div>
                      <div class="card-body">
                        <h5 class="card-title text-info">COLECCION DE VIDEOS PARA ESTUDIO</h5>
                        <p class="card-text">App que permite ingresar, eliminar o marcar como vistos las distintas
                          colecciones
                          de videos de programación.</p>
                      </div>
                      <div class="card-footer">
                        <a href="./videos/index.php" class="btn btn-info">Ir a la colección</a>
                      </div>
                    </div>
                    <!-- COLECCION DE APLICACIONES -->
                    <div class="card">
                      <div class="card-header bg-purple">
                        Apps
                      </div>
                      <div class="card-body">
                        <h5 class="card-title text-info">COLECCION DE APLICACIONES</h5>
                        <p class="card-text">App que permite crear aplicaciones de distintos autores con explicación
                          detallada
                          para una mejor comprensión de las distintas tecnologías.</p>
                      </div>
                      <div class="card-footer">
                        <a href="./apps/index.php" class="btn btn-info">Ir a la colección</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <!-- COLECCION DE EJERCICIOS -->
                    <div class="card">
                      <div class="card-header bg-purple">
                        Ejercicios
                      </div>
                      <div class="card-body">
                        <h5 class="card-title text-info">COLECCION DE EJERCICIOS</h5>
                        <p class="card-text">App que permite crear distintos ejercicios con explicación detallada para
                          una
                          mejor comprensión.</p>
                      </div>
                      <div class="card-footer">
                        <a href="./ejercicios/index.php" class="btn btn-info">Ir a la colección</a>
                      </div>
                    </div>
                    <!-- TEMAS DE PROGRAMACION -->
                    <div class="card">
                      <div class="card-header bg-purple">
                        Temas
                      </div>
                      <div class="card-body">
                        <h5 class="card-title text-info">TEMAS DE PROGRAMACION</h5>
                        <p class="card-text">App que permite ingresar, eliminar, modificar y visualizar todos los temas
                          tratados en este site de cursos de programación.</p>
                      </div>
                      <div class="card-footer">
                        <a href="./temas/index.php" class="btn btn-info">Ir a la colección</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
      </div>
    </div>

    <!-- MIS SCRIPTS -->
    <script>
    const ITEM = document.querySelectorAll(".item");

    for (let i = 0; i <= ITEM.length - 1; i++) {
      const li = ITEM[i];
      li.addEventListener("click", (e) => {
        e.preventDefault();
        //console.log(li.children[0].className);
        mostrarIndice(i);
        for (let j = 0; j <= ITEM.length - 1; j++) {
          const element = ITEM[j];
          //console.log(element.children[0]);
          element.children[0].classList.remove("active");
        }
        li.children[0].classList.add("active");
      });
    }

    function mostrarIndice(i) {
      //console.log("El indice es: " + i);

      let XHR;
      if (window.XMLHttpRequest) {
        XHR = new XMLHttpRequest();
      } else if (window.ActiveXObject) {
        XHR = new ActiveXObject("Microsoft.XMLHTTP");
      }

      // admin
      if (i === 0) {
        let resultado = document.getElementById("resultado");
        XHR.open("GET", "/admin/admin.php", true);
        XHR.send();

        XHR.onreadystatechange = function() {
          if (XHR.readyState == 4 && XHR.status == 200) {
            let data = XHR.responseText;
            //console.log(data);
            resultado.innerHTML = data;
          }
        };
      }

      //apps
      if (i === 1) {
        let resultado = document.getElementById("resultado");
        XHR.open("GET", "/content/app/app.php", true);
        XHR.send();

        XHR.onreadystatechange = function() {
          if (XHR.readyState == 4 && XHR.status == 200) {
            let data = XHR.responseText;
            resultado.innerHTML = data;
            const apps = document.querySelectorAll(".apps");
            //console.log(apps);

            for (const key in apps) {
              if (Object.hasOwnProperty.call(apps, key)) {
                const element = apps[key];
                element.addEventListener("change", () => {
                  console.log(element.value);
                  const item = element.value;
                  mostrarItem(item);
                });
              }
            }

            function mostrarItem(item) {
              //console.log("El indice es: " + i);

              let XHR;
              if (window.XMLHttpRequest) {
                XHR = new XMLHttpRequest();
              } else if (window.ActiveXObject) {
                XHR = new ActiveXObject("Microsoft.XMLHTTP");
              }

              // HTML
              if (item === "html") {
                let resultado = document.getElementById("resultado_apps");
                XHR.open("GET", "/content/app/items/html/index.php", true);
                XHR.send();

                XHR.onreadystatechange = function() {
                  if (XHR.readyState == 4 && XHR.status == 200) {
                    let data = XHR.responseText;
                    //console.log(data);
                    resultado.innerHTML = "";
                    resultado.innerHTML = data;
                  }
                };
              }

              // CSS
              if (item === "css") {
                let resultado = document.getElementById("resultado_apps");
                XHR.open("GET", "/content/app/items/css/index.php", true);
                XHR.send();

                XHR.onreadystatechange = function() {
                  if (XHR.readyState == 4 && XHR.status == 200) {
                    let data = XHR.responseText;
                    //console.log(data);
                    resultado.innerHTML = "";
                    resultado.innerHTML = data;
                  }
                };
              }

              // javascript
              if (item === "js") {
                let resultado = document.getElementById("resultado_apps");
                XHR.open("GET", "/content/app/items/javascript/index.php", true);
                XHR.send();

                XHR.onreadystatechange = function() {
                  if (XHR.readyState == 4 && XHR.status == 200) {
                    let data = XHR.responseText;
                    //console.log(data);
                    resultado.innerHTML = "";
                    resultado.innerHTML = data;
                  }
                };
              }

              // PHP
              if (item === "php") {
                let resultado = document.getElementById("resultado_apps");
                XHR.open("GET", "/content/app/items/php/index.php", true);
                XHR.send();

                XHR.onreadystatechange = function() {
                  if (XHR.readyState == 4 && XHR.status == 200) {
                    let data = XHR.responseText;
                    //console.log(data);
                    resultado.innerHTML = "";
                    resultado.innerHTML = data;
                  }
                };
              }

              // LARAVEL
              if (item === "laravel") {
                let resultado = document.getElementById("resultado_apps");
                XHR.open("GET", "/content/app/items/laravel/index.php", true);
                XHR.send();

                XHR.onreadystatechange = function() {
                  if (XHR.readyState == 4 && XHR.status == 200) {
                    let data = XHR.responseText;
                    //console.log(data);
                    resultado.innerHTML = "";
                    resultado.innerHTML = data;
                  }
                };
              }

              // REACT
              if (item === "react") {
                let resultado = document.getElementById("resultado_apps");
                XHR.open("GET", "/content/app/items/react/index.php", true);
                XHR.send();

                XHR.onreadystatechange = function() {
                  if (XHR.readyState == 4 && XHR.status == 200) {
                    let data = XHR.responseText;
                    //console.log(data);
                    resultado.innerHTML = "";
                    resultado.innerHTML = data;
                  }
                };
              }

              // NEXT
              if (item === "next") {
                let resultado = document.getElementById("resultado_apps");
                XHR.open("GET", "/content/app/items/next/index.php", true);
                XHR.send();

                XHR.onreadystatechange = function() {
                  if (XHR.readyState == 4 && XHR.status == 200) {
                    let data = XHR.responseText;
                    //console.log(data);
                    resultado.innerHTML = "";
                    resultado.innerHTML = data;
                  }
                };
              }

              // ASTRO
              if (item === "astro") {
                let resultado = document.getElementById("resultado_apps");
                XHR.open("GET", "/content/app/items/astro/index.php", true);
                XHR.send();

                XHR.onreadystatechange = function() {
                  if (XHR.readyState == 4 && XHR.status == 200) {
                    let data = XHR.responseText;
                    //console.log(data);
                    resultado.innerHTML = "";
                    resultado.innerHTML = data;
                  }
                };
              }

              // PYTHON
              if (item === "python") {
                let resultado = document.getElementById("resultado_apps");
                XHR.open("GET", "/content/app/items/python/index.php", true);
                XHR.send();

                XHR.onreadystatechange = function() {
                  if (XHR.readyState == 4 && XHR.status == 200) {
                    let data = XHR.responseText;
                    //console.log(data);
                    resultado.innerHTML = "";
                    resultado.innerHTML = data;
                  }
                };
              }

              // CCHARP
              if (item === "ccharp") {
                let resultado = document.getElementById("resultado_apps");
                XHR.open("GET", "/content/app/items/ccharp/index.php", true);
                XHR.send();

                XHR.onreadystatechange = function() {
                  if (XHR.readyState == 4 && XHR.status == 200) {
                    let data = XHR.responseText;
                    //console.log(data);
                    resultado.innerHTML = "";
                    resultado.innerHTML = data;
                  }
                };
              }

              // Node
              if (item === "node") {
                let resultado = document.getElementById("resultado_apps");
                XHR.open("GET", "/content/app/items/node/index.php", true);
                XHR.send();

                XHR.onreadystatechange = function() {
                  if (XHR.readyState == 4 && XHR.status == 200) {
                    let data = XHR.responseText;
                    //console.log(data);
                    resultado.innerHTML = "";
                    resultado.innerHTML = data;
                  }
                };
              }

              // Express
              if (item === "express") {
                let resultado = document.getElementById("resultado_apps");
                XHR.open("GET", "/content/app/items/express/index.php", true);
                XHR.send();

                XHR.onreadystatechange = function() {
                  if (XHR.readyState == 4 && XHR.status == 200) {
                    let data = XHR.responseText;
                    //console.log(data);
                    resultado.innerHTML = "";
                    resultado.innerHTML = data;
                  }
                };
              }

              // JAVA
              if (item === "java") {
                let resultado = document.getElementById("resultado_apps");
                XHR.open("GET", "/content/app/items/java/index.php", true);
                XHR.send();

                XHR.onreadystatechange = function() {
                  if (XHR.readyState == 4 && XHR.status == 200) {
                    let data = XHR.responseText;
                    //console.log(data);
                    resultado.innerHTML = "";
                    resultado.innerHTML = data;
                  }
                };
              }

              // Mysql
              if (item === "mysql") {
                let resultado = document.getElementById("resultado_apps");
                XHR.open("GET", "/content/app/items/mysql/index.php", true);
                XHR.send();

                XHR.onreadystatechange = function() {
                  if (XHR.readyState == 4 && XHR.status == 200) {
                    let data = XHR.responseText;
                    //console.log(data);
                    resultado.innerHTML = "";
                    resultado.innerHTML = data;
                  }
                };
              }

              // Tailwind
              if (item === "tailwind") {
                let resultado = document.getElementById("resultado_apps");
                XHR.open("GET", "/content/app/items/tailwind/index.php", true);
                XHR.send();

                XHR.onreadystatechange = function() {
                  if (XHR.readyState == 4 && XHR.status == 200) {
                    let data = XHR.responseText;
                    //console.log(data);
                    resultado.innerHTML = "";
                    resultado.innerHTML = data;
                  }
                };
              }

              // Ajax
              if (item === "ajax") {
                let resultado = document.getElementById("resultado_apps");
                XHR.open("GET", "/content/app/items/ajax/index.php", true);
                XHR.send();

                XHR.onreadystatechange = function() {
                  if (XHR.readyState == 4 && XHR.status == 200) {
                    let data = XHR.responseText;
                    //console.log(data);
                    resultado.innerHTML = "";
                    resultado.innerHTML = data;
                  }
                };
              }
            }
          }
        };
      }

      //VIDEOS
      // if (i === 3) {
      //   let resultado = document.getElementById("resultado");
      //   XHR.open("GET", "/content/app/items/php/index.php", true);
      //   XHR.send();

      //   XHR.onreadystatechange = function() {
      //     if (XHR.readyState == 4 && XHR.status == 200) {
      //       let data = XHR.responseText;
      //       console.log(data);
      //       resultado.innerHTML = data;
      //     }
      //   };
      // }
    }
    </script>

    <!-- REQUIRED SCRIPTS -->

    <?php include "./templates/footer.php"?>