<!DOCTYPE html>
<html>
  <head>
    <title>Dataset</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
      <div data-id="123">Este div contiene un atributo data-id</div>
      <script>
        const element = document.querySelector('div');
        const id = element.dataset.id;
        console.log("data-id: " + id);
      </script>
  </body>
</html>