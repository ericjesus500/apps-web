<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/content/cursos/items/css/ejercicios/vida_mrr/menu_horizontal/assets/css/menu_horizontal.css">
  <link rel="stylesheet" href="/content/cursos/items/css/ejercicios/vida_mrr/menu_horizontal/assets/bootstrap-icons/font/bootstrap-icons.min.css">
  <title>Menu horizontal</title>
</head>

<body>
  <nav>
    <div class="mobile">
      <div class="header">
        <div class="logo">logo</div>
        <div class="more"><button id="more_button"><i class="bi bi-list"></i></button></div>
      </div>
      <div id="links" class="links collapsed">
        <a href="#">Services</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        <a href="#">Search</a>
        <a href="#">Sign Up</a>
        <a href="#">Login</a>
      </div>
    </div>
    <div class="desktop">
      <div class="logo">Logo</div>
      <div class="primary">
        <a href="#">Services</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
      </div>
      <div class="secondary full">
        <a href="#">Search</a>
        <a href="#">Sign Up</a>
        <a href="#">Login</a>
      </div>
      <div class="secondary mini">
        <a href="#" class="more">More</a>
        <div class="submenu">
          <a href="#">Search</a>
          <a href="#">Sign Up</a>
          <a href="#">Login</a>
        </div>
      </div>
    </div>
  </nav>

  <script src="./assets/js/scripts.js"></script>
</body>

</html>