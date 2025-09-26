<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles.css">
  <title>border-radius</title>
  <style>
    .lienzo {
      box-sizing: border-box;
      width: 900px;
      height: 900px;
      border: 1px solid tomato;
    }

    .box {
      box-sizing: border-box;
      width: 50%;
      height: 50%;
      float: left;
      /* border: 1px solid tomato; */
    }

    .box_1,
    .box_2,
    .box_3,
    .box_4 {
      margin: 40px auto;
      width: 200px;
      height: 100px;
      border: 2px solid grey;
      background-color: tomato;
    }

    .box_1 {
      border-radius: 10px;
    }

    .box_2 {
      border-radius: 25px 10px;
    }

    .box_3 {
      border-radius: 15px 50px 15px;
    }

    .box_4 {
      border-radius: 10px 20px 40px 60px;
    }

    @media (min-width: 360px) and (max-width:600px) {
      .lienzo {
        width: 360px;
        height: auto;
        display: flex;
        flex-direction: column;
        border: 1px solid tomato;
      }

      .box {
        width: 360px;
        box-sizing: border-box;
      }
    }
  </style>
</head>

<body>
  <h1>BORDER-RADIUS</h1>
  <div class="lienzo">
    <div class="box">
      <h2>1 Valor: </h2>
      <h3>border-radius: 10px;</h3>
      <p>Aplica a las 4 esquinas</p>
      <div class="box_1"></div>
    </div>
    <div class="box">
      <h2>2 Valores</h2>
      <h3>border-radius: 25px 10px;</h3>
      <p>top-left + bottom-right |</p>
      <p>top-right + bottom-left</p>
      <div class="box_2"></div>
    </div>
    <div class="box">
      <h2>3 Valores</h2>
      <h3>border-radius: 15px 50px 15px;</h3>
      <p>top-left | </p>
      <p>top-right-and-bottom-left | </p>
      <p>bottom-right</p>
      <div class="box_3"></div>
    </div>
    <div class="box">
      <h2>4 Valores</h2>
      <h3>border-radius: 10px 20px 40px 60px;</h3>
      <p>top-left | top-right | bottom-right | bottom-left</p>
      <div class="box_4"></div>
    </div>
  </div>
</body>

</html>