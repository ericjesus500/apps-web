<?php include_once "../../../../../../templates/header.php" ?>
<title>slice</title>
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
  <h1 class="text-center text-primary mt-3 mb-5">.slice()</h1>

  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <pre class="pre-content-list bg-blue_2">
            <code>
              <span class="comentario">//HTML</span>
              &lt;button class="my-2" type="button" id="btn1"&gt;<span class="text-warning">Extrae el 2do elemento</span>&lt;/button&gt;
              &lt;button class="my-2" type="button" id="btn2"&gt;<span class="text-warning">Extrae el 2do y tercer elemento</span>&lt;/button&gt;
              &lt;button class="my-2" type="button" id="btn3"&gt;<span class="text-warning">Extrae todos los elementos sin incluir el primero</span>&lt;/button&gt;
              &lt;button class="my-2" type="button" id="btn4"&gt;<span class="text-warning">Extrae desde la posicion 2</span>&lt;/button&gt;
              
              &lt;output id="salida"&gt;&lt;/output&gt;
  
              <span class="comentario">//JS</span>
              const semana = ["lunes", "martes", "miercoles", "jueves", "viernes"];
  
              const boton1 = document.getElementById('btn1')
              const boton2 = document.getElementById('btn2')
              const boton3 = document.getElementById('btn3')
              const boton4 = document.getElementById('btn4')
              const salida = document.getElementById('salida')
  
              <span class="comentario text-green">//Extrae el 2do elemento</span>
              boton1.addEventListener('click', ()=>{
                &nbsp;&nbsp;&nbsp;const semanaArray = semana.<span class="text-yellow">slice(1, 2)</span>
                &nbsp;&nbsp;&nbsp;salida.innerHTML = `Elementos extraidos: ${semanaArray}`
                console.log("Elementos extraidos: " + semanaArray);
                console.log("Elementos que quedan: " + semana);
              })
  
              <span class="comentario text-green">//Extrae el 2do y tercer elemento.</span>
              boton2.addEventListener('click', ()=>{
                &nbsp;&nbsp;&nbsp;const semanaArray = semana.<span class="text-yellow">slice(1, 3)</span>             
                &nbsp;&nbsp;&nbsp;salida.innerHTML = `Elementos extraidos: ${semanaArray}`
                console.log("Elementos extraidos: " + semanaArray);
                console.log("Elementos que quedan: " + semana);
              })
  
              <span class="comentario text-green">//Extrae todos los elementos sin incluir el primero.</span>
              boton3.addEventListener('click', ()=>{
                &nbsp;&nbsp;&nbsp;const semanaArray = semana.<span class="text-yellow">slice(1)</span>             
                &nbsp;&nbsp;&nbsp;salida.innerHTML = `Elementos extraidos: ${semanaArray}`
                console.log("Elementos extraidos: " + semanaArray);
                console.log("Elementos que quedan: " + semana);
              })
  
              <span class="comentario text-green">//Extrae desde la posicion 2.</span>
              boton3.addEventListener('click', ()=>{
                &nbsp;&nbsp;&nbsp;const semanaArray = semana.<span class="text-yellow">slice(2)</span>             
                &nbsp;&nbsp;&nbsp;salida.innerHTML = `Elementos extraidos: ${semanaArray}`
                console.log("Elementos extraidos: " + semanaArray);
                console.log("Elementos que quedan: " + semana);
              })
            </code>
          </pre>
      </div>
      <div class="col-md-7">
        <pre class="pre-content-list bg-blue_2 w-90">
          <code>
            const semana = ["lunes", "martes", "miercoles", "jueves", "viernes"];
          </code>
        </pre>
        <!-- seccion botones -->
        <div class="w-90 d-flex">
          <button class="btn btn-primary" type="button" id="btn1">
            Extrae el 2do elemento
          </button>
          <button class="btn btn-primary" type="button" id="btn2">
            Extrae el 2do y tercer elemento
          </button>
          <button class="btn btn-primary" type="button" id="btn3">
            Extrae todos los elementos sin incluir el primero
          </button>
          <button class="btn btn-primary" type="button" id="btn4">
            Extrae desde la posicion 2
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
      let semanaArray = semana.slice(1, 2);
      salida.innerHTML = `Elementos extraidos: ${semanaArray}`;
      console.log("Elementos extraidos: " + semanaArray);
      console.log("Elementos que quedan: " + semana);
    }

    function addBoton2() {
      const semanaArray = semana.slice(1, 3);
      salida.innerHTML = `Elementos extraidos: ${semanaArray}`;
      console.log("Elementos extraidos: " + semanaArray);
      console.log("Elementos que quedan: " + semana);
    }

    function addBoton3() {
      const semanaArray = semana.slice(1);
      salida.innerHTML = `Elementos extraidos: ${semanaArray}`;
      console.log("Elementos estraidos: " + semanaArray);
      console.log("Elementos que quedan: " + semana);
    }

    function addBoton4() {
      const semanaArray = semana.slice(2);
      salida.innerHTML = `Elementos extraidos: ${semanaArray}`;
      console.log("Elementos extraidos: " + semanaArray);
      console.log("Elementos que quedan: " + semana);
    }
  </script>
</body>

</html>