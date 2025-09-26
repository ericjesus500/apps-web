<?php include_once "../../../../../../templates/header.php" ?>
<title>filter</title>
</head>

<body>

  <div class="container">
    <h1 class="text-center text-primary mt-3 mb-5">.filter()</h1>
    <div class="row">
      <pre class="pre-content-list bg-blue_2 my-5">
        <code>
            <span class="text-danger">let</span> <span class="text-skyblue_2">estudiantes</span> = [{
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'id'</span>: '001',
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'f_nombre'</span>: 'Alex',
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'l_nombre'</span>: 'B',
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'genero'</span>: 'M',
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'casado'</span>: false,
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'edad'</span>: 22,
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'pago'</span>: 250,
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'cursos'</span>: ['JavaScript', 'React']
            &nbsp;&nbsp;&nbsp;},
            &nbsp;&nbsp;&nbsp;{
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'id'</span>: '002',
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'f_nombre'</span>: 'Ibrahim',
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'l_nombre'</span>: 'M',
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'genero'</span>: 'M',
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'casado'</span>: true,
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'edad'</span>: 32,
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'pago'</span>: 150,
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'cursos'</span>: ['JavaScript', 'PWA']
            &nbsp;&nbsp;&nbsp;},
            &nbsp;&nbsp;&nbsp;{
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'id'</span>: '003',
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'f_nombre'</span>: 'Rubi',
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'l_nombre'</span>: 'S',
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'genero'</span>: 'F',
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'casado'</span>: false,
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'edad'</span>: 27,
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'pago'</span>: 350,
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'cursos'</span>: ['Blogging', 'React', 'UX']
            &nbsp;&nbsp;&nbsp;},
            &nbsp;&nbsp;&nbsp;{
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'id'</span>: '004',
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'f_nombre'</span>: 'Zack',
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'l_nombre'</span>: 'F',
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'genero'</span>: 'M',
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'casado'</span>: true,
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'edad'</span>: 36,
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'pago'</span>: 250,
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-lila">'cursos'</span>: ['Git', 'React', 'Branding']
            &nbsp;&nbsp;&nbsp;}
          ];
    
          <span class="text-danger">const</span> <span class="text-tomato">femaleStudents</span> = <span class="text-skyblue_2">estudiantes</span>.<span class="text-lila_2">filter</span>((element, index) => {
            &nbsp;&nbsp;&nbsp;<span class="text-danger">return</span> element.<span class="text-lila">genero</span> === 'F';
          })
    
          <span class="text-danger">console.log</span>(<span class="text-tomato">femaleStudents</span>);
        </code>
      </pre>
    </div>

    <p class="pathway-extreme-p text-justify mt-4">Resultado:</p>
    <div class="text-center my-5">
      <img src="../../src/img/arr_filter.png" alt="arr filter" class="img-fluid">
    </div>

  </div>

  <script>
    let estudiantes = [{
        'id': '001',
        'f_nombre': 'Alex',
        'l_nombre': 'B',
        'genero': 'M',
        'casado': false,
        'edad': 22,
        'paga': 250,
        'cursos': ['JavaScript', 'React']
      },
      {
        'id': '002',
        'f_nombre': 'Ibrahim',
        'l_nombre': 'M',
        'genero': 'M',
        'casado': true,
        'edad': 32,
        'paga': 150,
        'cursos': ['JavaScript', 'PWA']
      },
      {
        'id': '003',
        'f_nombre': 'Rubi',
        'l_nombre': 'S',
        'genero': 'F',
        'casado': false,
        'edad': 27,
        'pago': 350,
        'cursos': ['Blogging', 'React', 'UX']
      },
      {
        'id': '004',
        'f_nombre': 'Zack',
        'l_nombre': 'F',
        'genero': 'M',
        'casado': true,
        'edad': 36,
        'pago': 250,
        'cursos': ['Git', 'React', 'Branding']
      }
    ];

    const femaleStudents = estudiantes.filter((element, index) => {
      return element.genero === 'F';
    })

    console.log(femaleStudents);
  </script>
</body>

</html>