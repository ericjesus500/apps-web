// REQUIRED SCRIPTS

// SELECCION DE MENU PRINCIPAL

  const ITEM = document.querySelectorAll(".admin-item");
  const ITEM_CURSOS = document.querySelectorAll('.item-cursos');

    // MODULOS
  for (let i = 0; i <= ITEM.length - 1; i++) {
    const li = ITEM[i];
    li.addEventListener("click", (e) => {
      e.preventDefault();
      //console.log(li.children[0].className);
      mostrarModulo(i);
      for (let j = 0; j <= ITEM.length - 1; j++) {
        const element = ITEM[j];
        //console.log(element.children[0]);
        element.children[0].classList.remove("active");
      }
      li.children[0].classList.add("active");
    });
  }

  function mostrarModulo(i) {
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

            // Vue
            if (item === "vue") {
              let resultado = document.getElementById("resultado_apps");
              XHR.open("GET", "/content/app/items/vue/index.php", true);
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

// CURSOS
for (let i = 0; i <= ITEM_CURSOS.length - 1; i++) {
  const curso = ITEM_CURSOS[i];
  curso.addEventListener("click", (e) => {
    e.preventDefault();    
    mostrarCurso(i);
    for (let j = 0; j <= ITEM_CURSOS.length - 1; j++) {
      const ele = ITEM_CURSOS[j];
      ele.children[0].classList.remove("active");
    }
    curso.children[0].classList.add("active");
  });
}

function mostrarCurso(i) {
  let cursos = ['html', 'css', 'javascript', 'php', 'laravel', 'react', 'next', 'astro', 'python', 'ccharp', 'node', 'express', 'mysql', 'tailwind', 'typescript', 'vue']
  let XHR;
  if (window.XMLHttpRequest) {
    XHR = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    XHR = new ActiveXObject("Microsoft.XMLHTTP");
  }

  switch (i) {
    case i:
      let resultado = document.getElementById("resultado");
      XHR.open("GET", `/content/cursos/items/${cursos[i]}/index.php`, true);
      XHR.send();

      XHR.onreadystatechange = function () {
        if (XHR.readyState == 4 && XHR.status == 200) {
          let data = XHR.responseText;
          //console.log(data);
          resultado.innerHTML = "";
          resultado.innerHTML = data;
        }
      };
      
      break;
  
    default:
      break;
  }
    
}


