<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles.css">
  <title>box-shadow</title>
  <style>
    .lienzo {
      box-sizing: border-box;
      width: 900px;
      height: 1200px;
      border: 1px solid tomato;
    }

    .box {
      box-sizing: border-box;
      width: 50%;
      height: 25%;
      padding: 50px;
      float: left;
      border: 1px solid tomato;
    }

    .box_1,
    .box_2,
    .box_3,
    .box_4,
    .box_5,
    .box_6,
    .box_7,
    .box_8 {
      margin: 40px auto;
      width: 200px;
      height: 100px;
      border: 2px solid grey;
      background-color: tomato;
    }

    .box_1 {
      border-radius: 10px;
      box-shadow: red 30px -8px;
    }

    .box_2 {
      border-radius: 25px 10px;
      box-shadow: red 60px -16px;
    }

    .box_3 {
      border-radius: 15px 50px 15px;
      box-shadow: 10px 5px 5px black;
    }

    .box_4 {
      border-radius: 10px 20px 40px 60px;
      box-shadow: 10px 10px 8px 2px rgb(0 0 0 / 30%);
    }

    .box_5 {
      border-radius: 10px;
      box-shadow: inset 2em 2em gold;
    }

    .box_6 {
      border-radius: 10px;
      box-shadow:
        10px 10px red inset,
        -1em 10px 0.4em olive;
    }

    .box_7 {
      border-radius: 10px;
      box-shadow: rgb(150, 150, 150) 5px 5px 10px;
    }

    .box_8 {
      border-radius: 10px;
      box-shadow: rgb(150, 150, 150) 5px 5px 10px inset;
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
  <h1>BOX-SHADOW</h1>
  <div class="lienzo">
    <div class="box">
      <p>box-shadow: red 30px -8px;</p>
      <div class="box_1"></div>
    </div>
    <div class="box">
      <p>box-shadow: red 60px -16px;</p>
      <div class="box_2"></div>
    </div>
    <div class="box">
      <p>box-shadow: 10px 5px 5px black;</p>
      <div class="box_3"></div>
    </div>
    <div class="box">
      <p>box-shadow: 10px 10px 8px 2px rgb(0 0 0 / 30%);</p>
      <div class="box_4"></div>
    </div>
    <div class="box">
      <p>box-shadow: inset 2em 2em gold;</p>
      <div class="box_5"></div>
    </div>
    <div class="box">
      <p>box-shadow:<br>
        10px 10px red inset,<br>
        -1em 10px 0.4em olive;</p>
      <div class="box_6"></div>
    </div>
    <div class="box">
      <p>box-shadow: rgb(150, 150, 150) 5px 5px 10px;</p>
      <div class="box_7"></div>
    </div>
    <div class="box">
      <p>box-shadow: rgb(150, 150, 150) 5px 5px 10px inset;</p>
      <div class="box_8"></div>
    </div>
  </div>
</body>

</html>