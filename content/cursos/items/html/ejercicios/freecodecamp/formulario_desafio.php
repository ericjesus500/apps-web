<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./formulario_desafio.css">
  <title>Formulario Encuesta</title>
</head>

<body>
  <div class="content">
    <div class="head">
      <h1 id="title">Encuesta para la mejora de atención al cliente</h1>
      <p id="description">Por favor, ayúdenos a darle la atención que se merece.</p>
    </div>
    <hr>
    <div class="formulario">
      <form action="" id="survey-form">
        <div class="one">
          <!-- Datos principales -->
          <fieldset class="datos_principales">
            <legend>Datos principales</legend>
            <label id="name-label" for="name">Nombre:</label> <input type="text" required id="name" pattern="[a-zA-Z]" placeholder="El nombre es obligatorio" />
            <label id="email-label" for="email">Correo:</label> <input type="email" required id="email" pattern="[a-zA-Z@-_]" placeholder="El correo es obligatorio" />
            <label id="number-label" for="number">Edad:</label> <input type="number" name="number" id="number" pattern="[0-9]" min="18" max="65" placeholder="Su edad debe estar entre 18 y 65 años.">
          </fieldset>

          <div class="datos_complementarios">
            <!-- Datos complementarios -->
            <fieldset>
              <legend>Datos Complementarios</legend>

              <!-- Estado civl -->
              <div class="estado_civil">
                <label>Estado Civil</label>
                <select name="dropdown" id="dropdown">
                  <option value="">Soltero sin hijos</option>
                  <option value="">Soltero con hijos</option>
                  <option value="">Casado con hijos</option>
                  <option value="">Casado sin hijos</option>
                  <option value="">Separado</option>
                  <option value="">Divorsiado</option>
                  <option value="">Viudo</option>
                </select>
              </div>

              <!-- Sexo -->
              <fieldset class="sexo">
                <legend>Sexo</legend>
                <label for="hombre"> <input type="radio" name="sexo" id="hombre" value="hombre">Hombre</label>
                <label for="mujer"> <input type="radio" name="sexo" id="mujer" value="mujer">Mujer</label>
              </fieldset>
            </fieldset>

            <!-- Opinión sobre nuestro sistema de Caja -->
            <fieldset class="opinion">
              <legend>Nuestro sistema de Caja es:</legend>
              <div>
                <input type="checkbox" name="box" value="lenta" id="box_lenta"><label for="box_lenta">Lenta</label>
              </div>
              <div>
                <input type="checkbox" name="box" value="muylenta" id="box_muy_lenta"><label for="box_muy_lenta">Muy lenta</label>
              </div>
              <div>
                <input type="checkbox" name="box" value="eficiente" id="box_eficiente"><label for="box_eficiente">Eficiente</label>
              </div>
              <div>
                <input type="checkbox" name="box" value="muyeficiente" id="box_muy_eficiente"><label for="box_muy_eficiente">Muy eficiente</label>
              </div>
            </fieldset>
          </div>
        </div>

        <div class="two">
          <!-- Comentarios -->
          <fieldset class="comentarios">
            <legend>Comentarios</legend>
            <label for="comentario">En que aspecto considera relevante que debemos mejorar</label>
            <textarea name="comentario" id="comentario" rows="10"></textarea>
          </fieldset>
        </div>

        <button id="submit" type="submit">Enviar encuesta</button>

      </form>
    </div>
  </div>
</body>

</html>