<?php include_once "../../../../../../templates/header.php" ?>
<title>splice</title>
<style>
  .salida-none {
    display: none;
  }

  .salida-show {
    display: block;
  }

  .text-yellow {
    color: yellow;
  }

  .text-green {
    color: greenyellow;
  }
</style>
</head>

<body>
  <h1 class="text-center text-primary mt-3 mb-5">.splice()</h1>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5">
        <pre class="pre-content-list bg-blue_2">
            <code>
              <span class="comentario">//HTML</span>
              &lt;button type="button" id="btn-seleccionar"&gt;Elimina el 3er elemento&lt;/button&gt;
              &lt;button class="my-2" type="button" id="btn-seleccionar-2"&gt;Elimina 2 elementos a partir del inicio&lt;/button&gt;
              
              &lt;output id="salida"&gt;&lt;/output&gt;
  
              <span class="comentario">//JS</span>
              const semana = ["lunes", "martes", "miercoles", "jueves", "viernes"];
  
              const boton1 = document.getElementById('btn1')
              const boton2 = document.getElementById('btn2')
              const salida = document.getElementById('salida')
  
              <span class="comentario text-lila">//Elimina el 3er elemento</span>
              boton1.addEventListener('click', ()=>{
                &nbsp;&nbsp;&nbsp;const semanaArray = semana.<span class="text-yellow">splice(2, 1)</span>             
                &nbsp;&nbsp;&nbsp;salida.innerHTML = semanaArray
                &nbsp;&nbsp;&nbsp;console.log(semana)
                &nbsp;&nbsp;&nbsp;console.log(semanaArray)
              })
  
              <span class="comentario text-lila">//Elimina 2 elementos a partir del indice 0.</span>
              boton2.addEventListener('click', ()=>{
                &nbsp;&nbsp;&nbsp;const semanaArray = semana.<span class="text-yellow">splice(0, 2)</span>             
                &nbsp;&nbsp;&nbsp;salida.innerHTML = semana
                &nbsp;&nbsp;&nbsp;console.log(semana)
                &nbsp;&nbsp;&nbsp;console.log(semanaArray)
              })
  
              <span class="comentario text-lila">//Elimina todos los elementos.</span>
              boton3.addEventListener('click', ()=>{
                &nbsp;&nbsp;&nbsp;const semanaArray = semana.<span class="text-yellow">splice(0)</span>             
                &nbsp;&nbsp;&nbsp;salida.innerHTML = semana
                &nbsp;&nbsp;&nbsp;console.log(semana)
                &nbsp;&nbsp;&nbsp;console.log(semanaArray)
              })
  
              <span class="comentario text-lila">//Elimina A partir de la posicion 2.</span>
              boton3.addEventListener('click', ()=>{
                &nbsp;&nbsp;&nbsp;const semanaArray = semana.<span class="text-yellow">splice(2)</span>             
                &nbsp;&nbsp;&nbsp;salida.innerHTML = semana
                &nbsp;&nbsp;&nbsp;console.log(semana)
                &nbsp;&nbsp;&nbsp;console.log(semanaArray)
              })
            </code>
        </pre>
      </div>
      <div class="col-md-7">
        <pre class="pre-content-list bg-blue w-90">
          <code>
            const semana = ["lunes", "martes", "miercoles", "jueves", "viernes"];
          </code>
        </pre>
        <div class="w-90 d-flex">
          <button class="btn btn-info me-2" type="button" id="btn1">
            Elimina el 3er elemento
          </button>
          <button class="btn btn-info me-2" type="button" id="btn2">
            Elimina 2 elementos a partir del inicio
          </button>
          <button class="btn btn-info me-2" type="button" id="btn3">
            Elimina todos los elementos
          </button>
          <button class="btn btn-info" type="button" id="btn4">
            Elimina desde la posición 2
          </button>
        </div>
        <output id="salida"></output>
      </div>
    </div>
  </div>

  <script>
    const boton1 = document.getElementById("btn1");
    const boton2 = document.getElementById("btn2");
    const boton3 = document.getElementById("btn3");
    const boton4 = document.getElementById("btn4");
    const salida = document.getElementById("salida");

    const semana = ["lunes", "martes", "miercoles", "jueves", "viernes"];

    boton1.addEventListener("click", addBoton1);
    boton2.addEventListener("click", addBoton2);
    boton3.addEventListener("click", addBoton3);
    boton4.addEventListener("click", addBoton4);

    function addBoton1() {
      //console.log(semana.length);
      let semanaArray = semana.splice(2, 1);
      salida.innerHTML = `Elementos que quedan: ${semana}`;
      console.log("Elementos eliminados: " + semanaArray);
      console.log("Elementos que quedan: " + semana);
      if (semana.length === 2) {
        alert("No hay suficientes elementos para eliminar");
      }
    }

    function addBoton2() {
      const semanaArray = semana.splice(0, 2);
      console.log("Elementos eliminados: " + semanaArray);
      console.log("Elementos que quedan: " + semana);
      salida.innerHTML = `Elementos que quedan: ${semana}`;
      if (semana.length < 2) {
        alert("No hay suficientes elementos para eliminar");
      }
    }

    function addBoton3() {
      const semanaArray = semana.splice(0);
      console.log("Elementos eliminados: " + semanaArray);
      console.log("Elementos que quedan: " + semana);
      salida.innerHTML = `Elementos que quedan: ${semana}`;
      if (semana.length < 2) {
        alert("No hay suficientes elementos para eliminar");
      }
    }

    function addBoton4() {
      const semanaArray = semana.splice(2);
      console.log("Elementos eliminados: " + semanaArray);
      console.log("Elementos que quedan: " + semana);
      salida.innerHTML = `Elementos que quedan: ${semana}`;
      if (semana.length < 2) {
        alert("No hay suficientes elementos para eliminar");
      }
    }
  </script>
</body>

</html>