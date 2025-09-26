<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>getSelection()</title>
</head>

<body>
  <p>Este es un párrafo de ejemplo. Selecciona parte de este texto.</p>
  <button id="btn">Obtener Selección</button>
</body>

<script>
  const btn = document.getElementById('btn');

  btn.addEventListener('click', () => {
    const seleccion = document.getSelection();
    console.log(seleccion.toString()); // Muestra el texto seleccionado en la consola.
  });
</script>

</html>