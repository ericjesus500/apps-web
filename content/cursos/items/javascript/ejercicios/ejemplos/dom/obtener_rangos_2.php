<!DOCTYPE html>
<html>

<head>
  <title>Ejemplo getSelection</title>
</head>

<body>
  <p id="texto">Selecciona este texto para ver el resultado.</p>
  <button id="btn">Obtener selección</button>
  <div id="resultado" style="margin-top: 20px; background-color: yellow; width:400px; padding:15px;"></div>

  <script>
    const btn = document.getElementById("btn")
    btn.addEventListener('click', obtenerSeleccion)

    function obtenerSeleccion() {
      let seleccion = document.getSelection();
      let textoSeleccionado = seleccion.toString();
      let resultadoDiv = document.getElementById("resultado");
      resultadoDiv.innerText = "";
      if (seleccion.rangeCount > 0) {
        resultadoDiv.textContent = "Texto seleccionado: " + textoSeleccionado;
      } else if (seleccion.rangeCount <= 0) {
        resultadoDiv.innerText = "";
        resultadoDiv.textContent = "No hay texto seleccionado.";
      }
    }
  </script>
</body>

</html>