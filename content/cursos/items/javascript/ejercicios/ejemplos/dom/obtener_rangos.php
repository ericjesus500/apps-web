<!DOCTYPE html>
<html>

<head>
  <title>Ejemplo de Selección</title>
</head>

<body>
  <p id="texto">Selecciona parte de este texto para ver el rango seleccionado.</p>
  <p id="texto">Utiliza la consola del navegador para ver los resultados.</p>
  <button id="btn">Obtener Rango</button>

  <script>
    document.getElementById("btn").addEventListener("click", function() {
      const seleccion = document.getSelection();
      if (seleccion.rangeCount > 0) {
        const rango = seleccion.getRangeAt(0);
        console.log("Texto seleccionado:", rango.toString());
        console.log("Inicio del rango:", rango.startOffset);
        console.log("Fin del rango:", rango.endOffset);
      } else {
        console.log("No hay texto seleccionado.");
      }
    });
  </script>
</body>

</html>