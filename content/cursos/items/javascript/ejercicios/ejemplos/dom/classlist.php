<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ej classList</title>
  <style>
    #btn {
      margin-top: 20px;
    }

    .caja {
      width: 400px;
      height: 20px;
      background-color: yellow;
    }

    .borde {
      border: 2px solid orange;
    }

    .contenedor {
      background-color: tomato;
    }

    .principal {
      border: 1px dashed yellow;
    }
  </style>
</head>

<body>
  <div id="miElemento" class="caja borde">Este es un div</div>
  <button id="btn">Cambiar estilos</button>

  <script>
    const miElemento = document.getElementById('miElemento');
    const btn = document.getElementById('btn');
    console.log(miElemento.classList);
    console.log("El elemento tiene las clases caja y borde?: " + miElemento.classList.contains('caja')); // true

    btn.addEventListener('click', () => {
      miElemento.className = 'contenedor principal';
      console.log(miElemento.classList);
      console.log("El elemento tiene la clase 'contenedor'?: " + miElemento.classList.contains('contenedor')); // true
    });
    
  </script>
</body>

</html>