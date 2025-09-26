<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/content/cursos/items/css/ejercicios/vida_mrr/login_responsivo/assets/css/login_responsivo.css">
  <title>Login Responsivo</title>
</head>
<body>
  <div class="form-container">
    <div class="login-container">
      <h2>Bienvenido</h2>
      <p>Selecciona el método de autenticación</p>
      <form action="">
        <div>
          <label for="username">Username</label>
          <input class="input-login" type="text" name="username" id="username">
        </div>
        <div>
          <label for="password">Contraseña</label>
          <input class="input-login" type="text" name="password" id="password">
        </div>
        <div class="options">
          <div>
            Remember me <input type="checkbox" name="rememberme" id="rememberme">
          </div>
          <div>
            <a href="">Olvidé mi contraseña</a>
          </div>
        </div>
        <div>
          <input type="submit" class="btn btn-login" value="Iniciar sesión">
        </div>
        <div class="providers">
          <span>Otros métodos de autenticación</span>
          <button class="btn btn-google">Google</button>
          <button class="btn btn-facebook">Facebook</button>
        </div>
      </form>
    </div>

    <div class="welcome-screen-container">

    </div>
  </div>
</body>
</html>