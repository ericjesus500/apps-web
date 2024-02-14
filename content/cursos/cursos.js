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

  // HTML
  if (i === 0) {
    let resultado = document.getElementById("resultado");
    XHR.open("GET", "/content/cursos/items/html/index.php", true);
    XHR.send();

    XHR.onreadystatechange = function () {
      if (XHR.readyState == 4 && XHR.status == 200) {
        let data = XHR.responseText;
        console.log(data);
        resultado.innerHTML = data;
      }
    };
  }

  // CSS
  if (i === 1) {
    let resultado = document.getElementById("resultado");
    XHR.open("GET", "/content/cursos/items/css/index.php", true);
    XHR.send();

    XHR.onreadystatechange = function () {
      if (XHR.readyState == 4 && XHR.status == 200) {
        let data = XHR.responseText;
        console.log(data);
        resultado.innerHTML = data;
      }
    };
  }

  // javascript
  if (i === 2) {
    let resultado = document.getElementById("resultado");
    XHR.open("GET", "/content/cursos/items/javascript/index.php", true);
    XHR.send();

    XHR.onreadystatechange = function () {
      if (XHR.readyState == 4 && XHR.status == 200) {
        let data = XHR.responseText;
        //console.log(data);
        resultado.innerHTML = data;
      }
    };
  }

  // PHP
  if (i === 3) {
    let resultado = document.getElementById("resultado");
    XHR.open("GET", "/content/cursos/items/php/index.php", true);
    XHR.send();

    XHR.onreadystatechange = function () {
      if (XHR.readyState == 4 && XHR.status == 200) {
        let data = XHR.responseText;
        console.log(data);
        resultado.innerHTML = data;
      }
    };
  }

  // LARAVEL
  if (i === 4) {
    let resultado = document.getElementById("resultado");
    XHR.open("GET", "/content/cursos/items/laravel/index.php", true);
    XHR.send();

    XHR.onreadystatechange = function () {
      if (XHR.readyState == 4 && XHR.status == 200) {
        let data = XHR.responseText;
        console.log(data);
        resultado.innerHTML = data;
      }
    };
  }

  // REACT
  if (i === 5) {
    let resultado = document.getElementById("resultado");
    XHR.open("GET", "/content/cursos/items/react/index.php", true);
    XHR.send();

    XHR.onreadystatechange = function () {
      if (XHR.readyState == 4 && XHR.status == 200) {
        let data = XHR.responseText;
        console.log(data);
        resultado.innerHTML = data;
      }
    };
  }

  // NEXT
  if (i === 6) {
    let resultado = document.getElementById("resultado");
    XHR.open("GET", "/content/cursos/items/next/index.php", true);
    XHR.send();

    XHR.onreadystatechange = function () {
      if (XHR.readyState == 4 && XHR.status == 200) {
        let data = XHR.responseText;
        console.log(data);
        resultado.innerHTML = data;
      }
    };
  }

  // PYTHON
  if (i === 7) {
    let resultado = document.getElementById("resultado");
    XHR.open("GET", "/content/cursos/items/python/index.php", true);
    XHR.send();

    XHR.onreadystatechange = function () {
      if (XHR.readyState == 4 && XHR.status == 200) {
        let data = XHR.responseText;
        console.log(data);
        resultado.innerHTML = data;
      }
    };
  }

  // CCHARP
  if (i === 8) {
    let resultado = document.getElementById("resultado");
    XHR.open("GET", "/content/cursos/items/ccharp/index.php", true);
    XHR.send();

    XHR.onreadystatechange = function () {
      if (XHR.readyState == 4 && XHR.status == 200) {
        let data = XHR.responseText;
        console.log(data);
        resultado.innerHTML = data;
      }
    };
  }

  // NODE
  if (i === 9) {
    let resultado = document.getElementById("resultado");
    XHR.open("GET", "/content/cursos/items/node/index.php", true);
    XHR.send();

    XHR.onreadystatechange = function () {
      if (XHR.readyState == 4 && XHR.status == 200) {
        let data = XHR.responseText;
        console.log(data);
        resultado.innerHTML = data;
      }
    };
  }

  // Express
  if (i === 10) {
    let resultado = document.getElementById("resultado");
    XHR.open("GET", "/content/cursos/items/express/index.php", true);
    XHR.send();

    XHR.onreadystatechange = function () {
      if (XHR.readyState == 4 && XHR.status == 200) {
        let data = XHR.responseText;
        console.log(data);
        resultado.innerHTML = data;
      }
    };
  }
  
  // JAVA
  if (i === 11) {
    let resultado = document.getElementById("resultado");
    XHR.open("GET", "/content/cursos/items/java/index.php", true);
    XHR.send();

    XHR.onreadystatechange = function () {
      if (XHR.readyState == 4 && XHR.status == 200) {
        let data = XHR.responseText;
        console.log(data);
        resultado.innerHTML = data;
      }
    };
  }
}
