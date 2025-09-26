<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practica</title>
  <link rel="stylesheet" href="./estilos1.css">
  <link rel="stylesheet" href="./estilos2.css">
</head>

<body>
  <h1 id="titulo">Título Original</h1>
  <p id="parrafo">Presionar un botón para ver resultado en la consola del navegador.</p>
  <p id="parrafo">Los estilos estan en los archivos <a href="#" id="link1">estilos1.css</a> y <a href="#" id="link2">estilos2.css</a></p>
  <div class="select">
    <select name="element" id="opcion">
      <option>Elije una opción</option>
      <option value="head">head</option>
      <option value="body">body</option>
      <option value="html">html</option>
      <option value="doctype">Doctype</option>
      <option value="charset">charset</option>
      <option value="title">title</option>
      <option value="links">links</option>
      <option value="styleSheets">styleSheets</option>
      <option value="scripts">scripts</option>

    </select>
  </div>

  <button id="boton">Ejecutar</button>

  <script>
    document.getElementById("boton").addEventListener("click", function() {
      const element = document.getElementById("opcion").value;
      switch (element) {
        case "Elije una opción":
          alert("Por favor, elige una opción válida.");
          break;
        case "head":
          console.log(document.head);
          break;
        case "body":
          console.log(document.body);
          break;
        case "html":
          console.log(document.documentElement);
          break;
        case "doctype":
          console.log(document.doctype);
          break;
        case "charset":
          console.log(document.characterSet);
          break;
        case "title":
          console.log(document.title);
          break;
        case "links":
          console.log(document.links);
          break;
        case "styleSheets":
          console.log(document.styleSheets);
          break;
        case "scripts":
          console.log(document.scripts);
          break;
        default:
          console.log("Opción no válida.");
      }
    });
  </script>
</body>

</html>