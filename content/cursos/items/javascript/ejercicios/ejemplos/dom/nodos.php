<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nodos</title>
  <style>
    .contenedor {
      margin: 0 auto;
      padding: 20px;
      width: 100%;
      max-width: 1200px;
      font-family: Arial, sans-serif;
      height: auto;
    }

    .main {
      width: 90%;
      margin: 0 auto;
      padding: 10px;
      border: 1px solid #ccc;
      background-color: #f0f0f0;
      text-align: center;

      .main-content {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: center;
        gap: 20px;
        padding: 10px;
      }
    }

    .layout {
      display: flex;
      flex-direction: row;
      justify-content: center;
      margin-top: 10px;
      padding: 10px;
    }

    .botones {
      border: 1px solid #ccc;
      margin: 20px auto;
      padding: 10px;
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      flex-wrap: wrap;
      gap: 10px;

      button {
        width: 120px;
        margin: 0 10px;
        padding: 10px 20px;
        font-size: 14px;
        cursor: pointer;
      }
    }

    .content {
      padding: 10px;
      margin-left: 20px;
    }

    .salidas {
      margin: 10px auto;
      padding: 10px;
      min-height: 100px;
      border: 1px solid #ccc;
      background-color: #f9f9f9;
    }

    #resultado p {
      margin: 5px 0;
      font-weight: bold;
    }

    #explicacion {
      width: 800px;
      height: 100px;
      min-height: 100px;
      margin: 15px auto;
      border: 1px solid #ccc;

      color: #555;
      background-color: #f0f0f0;
      padding: 10px;

      p.exp {
        max-width: 0;
        opacity: 0;
        visibility: hidden;
        position: absolute;
        top: 0;
      }
    }

    #explicacion .exp.show {
      max-width: 100%;
      font-size: 20px;
      text-align: justify;
      position: relative;
      top: 0;
      opacity: 1;
      visibility: visible;
      transition: all 0.5s ease-in-out;
      margin-bottom: 10px;
    }

    #explicacion p code {
      background-color: #e0e0e0;
      padding: 2px 4px;
      border-radius: 4px;
      font-size: 13px;
    }
  </style>
</head>

<body>

  <div class="contenedor">
    <div class="main">
      <div class="titulo">
        <h1>PRACTICA DE NODOS (activar la consola)</h1>
      </div>
      <div class="main-content">
        <div id="padre">
          <p>Texto hijo 1</p>
          <p>Texto hijo 2</p>
          <span>Texto 3</span>
          <div id="nietos">
            <p>Texto nieto 1</p>
            <p>Texto nieto 2</p>
          </div>
        </div>
        <div class="nodo-img text-center my-5">
          <img src="../../../src/img/nodos_practica.png" alt="nodos practica" class="img-fluid">
        </div>
      </div>
    </div>

    <div class="layout">
      <div class="botones">
        <button id="btn1">nodo inicial</button>
        <button id="btn2">1er hijo &lt;p&gt;</button>
        <button id="btn3">hermano del primer &lt;p&gt;</button>
        <button id="btn4">abuelo</button>
        <button id="btn5">3er hijo</button>
        <button id="btn6">3er Hermano desde el 1er hijo</button>
        <button id="btn7">1er nieto &lt;p&gt; desde el 3er hijo</button>
        <button id="btn8">2do nieto &lt;p&gt; desde su hermano</button>
        <button id="btn9">Abuelo desde 1er nieto</button>
      </div>

      <div class="content">
        <div class="salidas" id="salidas">
          <h3>Salidas:</h3>
          <div id="resultado"></div>
        </div>
        <div id="explicacion">
          <p class="exp">Para acceder al Nodo inicial, usamos <code>document.getElementById('padre')</code> que selecciona la &lt;div&gt; con id="padre".</p>
          <p class="exp">Para navegar a su primer hijo elemento, usamos <code>nodoPadre.firstElementChild</code> que devuelve el primer &lt;p&gt;.</p>
          <p class="exp">Para acceder al siguiente hermano del primer &lt;p&gt;, usamos <code>primerElementoHijo.nextElementSibling</code> que devuelve el segundo &lt;p&gt;.</p>
          <p class="exp">Para regresar al padre del segundo &lt;p&gt;, usamos <code>segundoHermano.parentElement</code> que devuelve la &lt;div&gt; con id="padre".</p>
          <p class="exp">Para acceder al tercer hijo (span) desde el padre, usamos <code>document.getElementById('padre').children[2]</code> que devuelve el &lt;span&gt;.</p>
          <p class="exp"> Para acceder al tercer hermano (span) desde el primer hijo, usamos <code>primerElementoHijo.nextElementSibling.nextElementSibling</code> que devuelve el &lt;span&gt;.</p>
          <p class="exp">Para acceder al primer nieto (primer &lt;p&gt; dentro de #nietos), usamos <code>document.getElementById('nietos').firstElementChild</code> que devuelve el primer &lt;p&gt; dentro de la &lt;div&gt; con id="nietos".</p>
          <p class="exp">Para acceder al segundo nieto (segundo &lt;p&gt; dentro de #nietos desde su hermano), usamos <code>primerNieto.nextElementSibling</code> que devuelve el segundo &lt;p&gt; dentro de la &lt;div&gt; con id="nietos".</p>
          <p class="exp">para regresar al abuelo desde el primer nieto, usamos <code>primerNieto.parentElement.parentElement</code> que devuelve la &lt;div&gt; con id="padre".</p>
        </div>
      </div>
    </div>
  </div>

  <script>
    // 1. Seleccionar un nodo inicial
    const btn1 = document.getElementById('btn1');
    const btn2 = document.getElementById('btn2');
    const btn3 = document.getElementById('btn3');
    const btn4 = document.getElementById('btn4');
    const btn5 = document.getElementById('btn5');
    const btn6 = document.getElementById('btn6');
    const btn7 = document.getElementById('btn7');
    const btn8 = document.getElementById('btn8');
    const btn9 = document.getElementById('btn9');
    const resultado = document.getElementById('resultado');
    const explicacion = document.getElementById('explicacion');
    const explicaciones = explicacion.querySelectorAll('.exp');
    console.log('Explicaciones:', explicaciones);

    // 1. Seleccionar un nodo inicial
    btn1.addEventListener('click', () => {
      const nodoPadre = document.getElementById('padre');
      resultado.innerHTML = "";
      resultado.innerHTML = `<p>Nodo padre: ${nodoPadre}</p>`;
      explicaciones.forEach(exp => exp.classList.remove('show'));
      explicaciones[0].classList.add('show');
      console.log('Nodo padre:', nodoPadre);
    })

    // 2. Navegar a los hijos (solo elementos)
    btn2.addEventListener('click', () => {
      const nodoPadre = document.getElementById('padre');
      const primerElementoHijo = nodoPadre.firstElementChild; // Accede al primer <p>
      resultado.innerHTML = "";
      resultado.innerHTML = `<p>Primer hijo elemento: ${primerElementoHijo}</p>`;
      explicaciones.forEach(exp => exp.classList.remove('show'));
      explicaciones[1].classList.add('show');
      console.log('Primer hijo elemento:', primerElementoHijo);
    })

    // 3. Navegar al siguiente hermano
    btn3.addEventListener('click', () => {
      const nodoPadre = document.getElementById('padre');
      const primerElementoHijo = nodoPadre.firstElementChild; // Accede al primer <p>
      const segundoHermano = primerElementoHijo.nextElementSibling; // Accede al segundo <p>
      resultado.innerHTML = "";
      resultado.innerHTML = `<p>Siguiente hermano (segundo párrafo): ${segundoHermano}</p>`;
      explicaciones.forEach(exp => exp.classList.remove('show'));
      explicaciones[2].classList.add('show');
      console.log('Siguiente hermano (segundo párrafo):', segundoHermano);
    })

    // 4. Navegar al padre
    btn4.addEventListener('click', () => {
      const nodoPadre = document.getElementById('padre');
      const primerElementoHijo = nodoPadre.firstElementChild; // Accede al primer <p>
      const segundoHermano = primerElementoHijo.nextElementSibling; // Accede al segundo <p>
      const padre = segundoHermano.parentElement; // Regresa a la <div> con id="padre"
      resultado.innerHTML = "";
      resultado.innerHTML = `<p>Elemento padre del segundo párrafo: ${padre}</p>`;
      explicaciones.forEach(exp => exp.classList.remove('show'));
      explicaciones[3].classList.add('show');
      console.log('Elemento padre del segundo párrafo:', padre);
    })

    //5. Accede al tercer hijo (span) desde el padre
    btn5.addEventListener('click', () => {
      const tercerHijo = document.getElementById('padre').children[2];
      resultado.innerHTML = "";
      resultado.innerHTML = `<p>Tercer hijo (span): ${tercerHijo}</p>`;
      explicaciones.forEach(exp => exp.classList.remove('show'));
      explicaciones[4].classList.add('show');
      console.log('Tercer hijo (span):', tercerHijo);
    })

    //6. Accede al tercer hermano (span) desde el primer hijo
    btn6.addEventListener('click', () => {
      const nodoPadre = document.getElementById('padre');
      const primerElementoHijo = nodoPadre.firstElementChild; // Accede al primer <p>
      const tercerElementoHijo = primerElementoHijo.nextElementSibling.nextElementSibling; // Accede al tercer hijo (span)
      resultado.innerHTML = "";
      resultado.innerHTML = `<p>Tercer hermano (span): ${tercerElementoHijo}</p>`;
      explicaciones.forEach(exp => exp.classList.remove('show'));
      explicaciones[5].classList.add('show');
      console.log('Tercer hermano (span):', tercerElementoHijo);
    })

    //7. Acceder al primer nieto (primer <p> dentro de #nietos)
    btn7.addEventListener('click', () => {
      const primerNieto = document.getElementById('nietos').firstElementChild;
      resultado.innerHTML = "";
      resultado.innerHTML = `<p>Primer nieto (primer &lt;p&gt; dentro de #nietos): ${primerNieto}</p>`;
      explicaciones.forEach(exp => exp.classList.remove('show'));
      explicaciones[6].classList.add('show');
      console.log('Primer nieto (primer p dentro de #nietos):', primerNieto);
    })

    //8 Acceder al segundo nieto (segundo <p> dentro de #nietos desde su hermano)
    btn8.addEventListener('click', () => {
      const primerNieto = document.getElementById('nietos').firstElementChild;
      const segundoNieto = primerNieto.nextElementSibling;
      resultado.innerHTML = "";
      resultado.innerHTML = `<p>Segundo nieto (segundo &lt;p&gt; dentro de #nietos): ${segundoNieto}</p>`;
      explicaciones.forEach(exp => exp.classList.remove('show'));
      explicaciones[7].classList.add('show');
      console.log('Segundo nieto (segundo p dentro de #nietos):', segundoNieto);
    })

    //9 Regresar al abuelo desde el primer nieto
    btn9.addEventListener('click', () => {
      const primerNieto = document.getElementById('nietos').firstElementChild;
      const abuelo = primerNieto.parentElement.parentElement;
      resultado.innerHTML = "";
      resultado.innerHTML = `<p>Abuelo desde 1er nieto: ${abuelo}</p>`;
      explicaciones.forEach(exp => exp.classList.remove('show'));
      explicaciones[8].classList.add('show');
      console.log('Abuelo desde 1er nieto:', abuelo);
    })
  </script>
</body>

</html>