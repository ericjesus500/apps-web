<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/content/cursos/items/css/ejercicios/input_animado/assets/css/input_animado.css">
  <link rel="stylesheet" href="/content/cursos/items/css/ejercicios/input_animado/assets/fontawesome-free/css/all.css">
  <title>Input animado</title>
</head>

<body>
  <video src="./assets/videos/25572-351374206_medium.mp4" autoplay loop muted></video>
  <section class="login_section">
    <article class="login_container">
      <div class="login_form__container">
        <h1 class="title">Iniciar sesión</h1>
        <form action="datos.php" method="post" autocomplete="off">
          <div class="input">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" required>
            <label for="email">Correo electrónico</label>
          </div>
          <div class="input">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" required>
            <label for="password">Password</label>
          </div>
          <div>
            <button type="submit">Ingresar</button>
          </div>
          <div class="register">
            <a href="">Aun no poseo una cuenta</a>
          </div>
        </form>
      </div>
    </article>
  </section>
  
</body>

</html>