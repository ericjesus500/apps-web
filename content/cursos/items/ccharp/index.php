<?php include "../../templates/head_cursos.php"?>

<title>Tutorial C# 2023</title>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php include "../../templates/navbar_articulos_items.php"?>
    <!-- Content Wrapper. Contains page content -->
    <section class="content">
      <!-- Main content -->
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-edit"></i><span class="h1 text-primary">Tutorial C#</span>
            </h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-5 col-sm-3">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="vert-tabs-datos-literales-tab" data-toggle="pill" href="#vert-tabs-datos-literales" role="tab" aria-controls="vert-tabs-datos-literales" aria-selected="false">Tipos de datos literales</a>
                  <a class="nav-link" id="vert-tabs-declaracion-variables-tab" data-toggle="pill" href="#vert-tabs-declaracion-variables" role="tab" aria-controls="vert-tabs-declaracion-variables" aria-selected="false">Declaración de variables</a>
                  <a class="nav-link" id="vert-tabs-formato-cadena-tab" data-toggle="pill" href="#vert-tabs-formato-cadena" role="tab" aria-controls="vert-tabs-formato-cadena" aria-selected="false">Aplicación de formato de cadena</a>
                  <a class="nav-link" id="vert-tabs-concatenacion-cadenas-tab" data-toggle="pill" href="#vert-tabs-concatenacion-cadenas" role="tab" aria-controls="vert-tabs-concatenacion-cadenas" aria-selected="true">Concatenación de cadenas</a>
                  <a class="nav-link" id="vert-tabs-interpolacion-cadenas-tab" data-toggle="pill" href="#vert-tabs-interpolacion-cadenas" role="tab" aria-controls="vert-tabs-interpolacion-cadenas" aria-selected="true">Combinación de cadenas mediante interpolación de cadenas</a>
                  <a class="nav-link" id="vert-tabs-op-bas-num-tab" data-toggle="pill" href="#vert-tabs-op-bas-num" role="tab" aria-controls="vert-tabs-op-bas-num" aria-selected="true">Realización de operaciones básicas con números</a>
                  <a class="nav-link" id="vert-tabs-op-mat-bas-tab" data-toggle="pill" href="#vert-tabs-op-mat-bas" role="tab" aria-controls="vert-tabs-op-mat-bas" aria-selected="true">Realización de operaciones matemáticas básicas</a>
                  <a class="nav-link" id="vert-tabs-inc-dec-tab" data-toggle="pill" href="#vert-tabs-inc-dec" role="tab" aria-controls="vert-tabs-inc-dec" aria-selected="true">Incremento y decremento de valores</a>
                  <a class="nav-link" id="vert-tabs-frameworks-tab" data-toggle="pill" href="#vert-tabs-frameworks" role="tab" aria-controls="vert-tabs-frameworks" aria-selected="true">Item 9</a>
                  <a class="nav-link" id="vert-tabs-frameworks-tab" data-toggle="pill" href="#vert-tabs-frameworks" role="tab" aria-controls="vert-tabs-frameworks" aria-selected="true">Item 9</a>
                  <a class="nav-link" id="vert-tabs-frameworks-tab" data-toggle="pill" href="#vert-tabs-frameworks" role="tab" aria-controls="vert-tabs-frameworks" aria-selected="true">Item 9</a>
                  <a class="nav-link" id="vert-tabs-frameworks-tab" data-toggle="pill" href="#vert-tabs-frameworks" role="tab" aria-controls="vert-tabs-frameworks" aria-selected="true">Item 9</a>
                  <a class="nav-link" id="vert-tabs-frameworks-tab" data-toggle="pill" href="#vert-tabs-frameworks" role="tab" aria-controls="vert-tabs-frameworks" aria-selected="true">Item 9</a>
                </div>
              </div>
              <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                  <!-- Tipos de datos literales -->
                  <div class="tab-pane text-left fade active show" id="vert-tabs-datos-literales" role="tabpanel" aria-labelledby="vert-tabs-datos-literales-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded">Uso de literales de caracteres</span></h2>
                      <!-- <img src="../img/" alt="" class="img_100"> -->
                      <p class="text-justify mt-4">Si únicamente queremos imprimir un carácter alfanumérico en la pantalla, podemos crear un literal char; para ello, escribiríamos un carácter alfanumérico entre comillas simples. char se usa como abreviatura de carácter. En C#, este tipo de datos se denomina oficialmente "char", pero con frecuencia se conoce como "carácter".</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text danger">Console.WriteLine</span>('b');
                        </code>
                      </pre>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Las comillas simples crean un literal de carácter.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>El uso de comillas dobles crea un tipo de datos string</li>
                      </ul>
                      <p class="text-justify mt-4">Si escribe el código siguiente:</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text danger">Console.WriteLine</span>('Hello World!');
                        </code>
                      </pre>
                      <p class="text-justify mt-4">Se obtiene el siguiente error:</p>
                      <pre class="sintaxis">
                        <code>
                          (1,19): error CS1012: Too many characters in character literal
                        </code>
                      </pre>
                      <h2 class="mt-5"><span class="bg-warning px-3 rounded">Uso de literales enteros</span></h2>
                      <p class="text-justify mt-4">Si queremos mostrar un número entero (sin fracciones) en la consola de salida, podemos usar literal <strong><em>int</em></strong>, pero se conoce con frecuencia como "entero". Un literal <strong><em>int</em></strong> no requiere otros operadores, como <strong><em>string</em></strong> o <strong><em>char</em></strong>.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text danger">Console.WriteLine</span>(123);
                        </code>
                      </pre>
                      <h2 class="mt-5"><span class="bg-warning px-3 rounded">Uso de literales de punto flotante</span></h2>
                      <p class="text-justify mt-4">Un número de punto flotante es uno que contiene decimales, por ejemplo, 3,14159. C# admite tres tipos de datos para representar números decimales: float, double y decimal. Cada tipo admite distintos grados de precisión.</p>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>float : ~6-9 digits.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>double : ~15-17 digits</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>decimal : 28-29 digits</li>
                      </ul>
                      <h3 class="mt-5 text-indigo">Dígitos decimales precisos</h3>
                      <p class="text-justify mt-4">Para crear un literal decimal float, anexe la letra F después del número. En este contexto, F se denomina sufijo literal. El sufijo literal le indica al compilador que queremos trabajar con un valor de tipo float. Puede usar f en minúsculas o F en mayúsculas como sufijo literal de float.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">Console.WriteLine</span>(0.25F);
                        </code>
                      </pre>
                      <p class="text-justify mt-4">Tener en cuenta que el tipo de datos float es el menos preciso, por lo que es mejor usar este tipo de datos para los valores fraccionarios fijos y así evitar errores de cálculo imprevistos.</p>
                      <h3 class="mt-5 text-indigo">Literal double</h3>
                      <p class="text-justify mt-4">El compilador tiene como valor predeterminado un literal double cuando se escribe un número decimal sin sufijo literal.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">Console.WriteLine</span>(2.625);
                        </code>
                      </pre>
                      <h3 class="mt-5 text-indigo">Literal decimal</h3>
                      <!-- <img src="../img/" alt="" class="img_100"> -->
                      <p class="text-justify mt-4">Para crear un literal decimal, anexe la letra m después del número. En este contexto, m se denomina sufijo literal. El sufijo literal le indica al compilador que queremos trabajar con un valor de tipo decimal. Puede usar m en minúsculas o M en mayúsculas como sufijo literal de decimal.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">Console.WriteLine</span>(12.39816m);
                        </code>
                      </pre>
                      <h2 class="mt-5"><span class="bg-warning px-3 rounded">Uso de literales booleanos</span></h2>
                      <p class="text-justify mt-4">Sirve para imprimir un valor que represente true o false.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">Console.WriteLine</span>(true);
                          <span class="text-danger">Console.WriteLine</span>(false);
                        </code>
                      </pre>
                      <p class="text-justify mt-4">Los literales bool representan el concepto de verdad y falsedad. Los valores bool se usan mucho cuando se comienza a agregar lógica de decisión a las aplicaciones. Evalua las expresiones para ver si son verdaderas o falsas.</p>
                    </article>
                  </div>
                  <!-- Declaración de variables -->
                  <div class="tab-pane fade" id="vert-tabs-declaracion-variables" role="tabpanel" aria-labelledby="vert-tabs-declaracion-variables-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded">Introducción</span></h2>
                      <p class="text-justify mt-4">Un literal es literalmente un valor codificado de forma rígida. Los valores codificados de forma rígida son valores que son constantes e inalterables durante la ejecución del programa. Sin embargo, la mayoría de las aplicaciones precisan que trabaje con valores de los que no se sabe mucho de antemano. Es decir, tiene que trabajar con datos que provienen de usuarios, de archivos o de la red. Cuando necesite trabajar con datos que no están codificados de forma rígida, declarará una variable.</p>
                      <h2><span class="bg-warning px-3 rounded">¿Qué es una variable?</span></h2>
                      <p class="text-justify mt-4">Una variable es un contenedor para almacenar un tipo de valor.</p>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Las variables son importantes porque sus valores pueden cambiar o variar durante la ejecución de un programa.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Las variables se pueden asignar, leer y cambiar.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Las variables se usan para almacenar valores que se pretende usar en el código.</li>
                      </ul>
                      <p class="text-justify mt-4">Un nombre de variable es una etiqueta fácil de usar que el compilador asigna a una dirección de memoria. Cuando quiera almacenar o cambiar un valor de esa dirección de memoria, o siempre que quiera recuperar el valor almacenado, simplemente use el nombre de variable que ha creado.</p>
                      <h3 class="mt-5 text-indigo">Declaración de una variable</h3>
                      <p class="text-justify mt-4">Para crear una nueva variable, primero debe declarar el tipo de datos de la variable y luego asignarle un nombre.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">string</span> <span class="text-primary">firstName</span>;
                        </code>
                      </pre>
                      <h3 class="mt-5 text-indigo">Reglas y convenciones de nombre de variable</h3>
                      <p class="text-justify mt-4">Estas son algunas consideraciones importantes sobre los nombres de variables:</p>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Los nombres de variables pueden contener caracteres alfanuméricos y el carácter de subrayado. No se permiten caracteres especiales, como el símbolo # (también conocido como símbolo de almohadilla) o el símbolo del dólar $.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Los nombres de variables deben comenzar por una letra alfabética o un carácter de subrayado, no por un número.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Los nombres de variable distinguen mayúsculas de minúsculas, lo que significa que string Value; y string value; son dos variables diferentes.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Los nombres de variable no deben ser una palabra clave de C#. Por ejemplo, no se pueden usar las siguientes declaraciones de variable: decimal decimal; ni string string;.</li>
                      </ul>
                      <h3 class="mt-5 text-indigo">Convenciones de creación de código</h3>
                      <p class="text-justify mt-4">Estas son algunas convenciones de creación de código de las variables:</p>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Los nombres de variable deben usar camel case, que es un estilo de escritura que usa una letra en minúscula al principio de la primera palabra y una letra en mayúscula al principio de cada palabra siguiente. Por ejemplo, string thisIsCamelCase;.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Los nombres de variable deben comenzar con una letra alfabética. Los desarrolladores usan el carácter de subrayado para un fin especial, así que intente no usarlo por ahora.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Los nombres de variables deben ser descriptivos y significativos en la aplicación. Elija un nombre para la variable que represente el tipo de datos que va a contener.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Los nombres de variable deben ser una o varias palabras completas anexadas. No use contracciones ni abreviaturas, ya que el nombre de la variable (y, por tanto, su fin) puede no quedar claro para otros usuarios que lean el código.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Los nombres de variables no deben incluir el tipo de datos de la variable. Puede que aparezcan algunas recomendaciones para usar un estilo como string strValue;. Esas recomendaciones ya no son pertinentes.</li>
                      </ul>
                      <p class="text-justify mt-4">En el ejemplo string firstName; se siguen todas estas reglas y convenciones y se da por hecho que se quiere usar esta variable para almacenar datos que representan el nombre de una persona.</p>
                      <h3 class="mt-5 text-indigo">Ejemplos de nombres de variables</h3>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">char</span> <span class="text-primary">userOption;</span>;
                          <span class="text-danger">int</span> <span class="text-primary">gameScore;</span>;
                          <span class="text-danger">decimal</span> <span class="text-primary">particlesPerMillion;</span>;
                          <span class="text-danger">bool</span> <span class="text-primary">processedCustomer;</span>;
                        </code>
                      </pre>
                      <h3 class="mt-5 text-indigo">Resumen</h3>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Las variables son valores temporales que se almacenan en la memoria del equipo.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Para poder usar una variable, hay que declararla.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Para ello, primero se selecciona un tipo de datos correspondiente al tipo de datos que se quiere almacenar y, luego, se asigna a la variable un nombre que siga las reglas.</li>
                      </ul>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">string</span> <span class="text-primary">firstName</span> = "Bob";
                          <span class="text-danger">int</span> <span class="text-primary">n1</span> = 3;
                          <span class="text-danger">decimal</span> <span class="text-primary">n2</span> = 34.4m;
                          
                          <span class="text-danger">Console.Write</span>("Hello, " + firstName + "! You have " + n1 + " messages in your inbox. The temperature is " + n2 + "celsius")
                        </code>
                      </pre>
                    </article>
                  </div>
                  <!-- Aplicación de formato de cadena -->
                  <div class="tab-pane fade" id="vert-tabs-formato-cadena" role="tabpanel" aria-labelledby="vert-tabs-formato-cadena-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded">Formato de cadenas literales </span></h2>
                      <p class="text-justify mt-4">Se aprenderá diferentes técnicas para mostrar caracteres especiales y agregar diferentes tipos de formato a la salida.</p>
                      <h3 class="mt-5 text-indigo">Secuencias de escape de caracteres</h3>
                      <p class="text-justify mt-4">Una secuencia de caracteres de escape es una instrucción para el entorno de tiempo de ejecución para que inserte un carácter especial que afectará a la salida de la cadena. En C#, la secuencia de caracteres de escape comienza por una barra diagonal inversa \ seguida del carácter que se va a utilizar como escape.</p>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>la secuencia <strong>\n</strong> agregará una nueva línea.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>La secuencia <strong>\t</strong> agregará una tabulación.</li>
                      </ul>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">Console.WriteLine</span>("Hello\nWorld!");
                          <span class="text-danger">Console.WriteLine</span>("Hello\tWorld!");
                        </code>
                      </pre>
                      <h3 class="text-indigo mt-5">Insertar una comilla doble en una cadena literal</h3>
                      <p class="text-justify mt-4">use la secuencia de escape <strong>\"</strong></p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">Console.WriteLine</span>("Hello \"World\"!");
                        </code>
                      </pre>
                      <h3 class="text-indigo mt-5">Usar la barra diagonal inversa para otros propósitos</h3>
                      <p class="text-justify mt-4">use la secuencia de escape <strong>\\</strong> para mostrar una sola barra diagonal inversa.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">Console.WriteLine</span>("c:\\source\\repos");
                        </code>
                      </pre>
                      <p class="text-justify mt-4">Ejemplo</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">Console.WriteLine</span>("Generating invoices for customer \"Contoso Corp\" ...\n");
                          <span class="text-danger">Console.WriteLine</span>("Invoice: 1021\t\tComplete!");
                          <span class="text-danger">Console.WriteLine</span>("Invoice: 1022\t\tComplete!");
                          <span class="text-danger">Console.WriteLine</span>("\nOutput Directory:\t");
                        </code>
                      </pre>
                      <h2 class="mt-5"><span class="bg-warning px-3 rounded">Literal de cadena textual</span></h2>
                      <p class="text-justify mt-4">Un literal de cadena textual conservará todos los espacios en blanco y los caracteres sin necesidad de usar una secuencia de escape para la barra diagonal inversa. Para crear una cadena textual, use la directiva @ antes de la cadena literal.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">Console.WriteLine</span>(@"     c:\source\repos     
                                                    (this is where your code goes)");
                        </code>
                      </pre>
                      <h2 class="mt-5"><span class="bg-warning px-3 rounded">Caracteres de escape Unicode</span></h2>
                      <p class="text-justify mt-4">También puede agregar caracteres codificados en cadenas literales mediante la secuencia de escape \u y, después, un código de cuatro caracteres que represente algún carácter en Unicode (UTF-16).</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="comentario">// Kon'nichiwa World</span>
                          <span class="text-danger">Console.WriteLine</span>("\u3053\u3093\u306B\u3061\u306F World!");
                        </code>
                      </pre>
                      <div class="nota mt-5">
                        <p class="alert-title">
                          <span class="ms-3"><i class="bi bi-exclamation-circle-fill"></i>Nota</span>
                        </p>
                        <p class="text-justify px-4 p-nota">En este caso, debe tener en cuenta algunas advertencias. En primer lugar, algunas consolas como el símbolo del sistema de Windows no mostrarán todos los caracteres Unicode. Lo que harán será reemplazar esos caracteres por signos de interrogación. Además, los ejemplos que se usan aquí son UTF-16. Algunos caracteres requieren UTF-32 y, por tanto, necesitan una secuencia de escape diferente. Se trata de un asunto complicado, y en este módulo solo pretendemos mostrarle lo que se puede hacer. En función de sus necesidades, es posible que necesite dedicar bastante tiempo a familiarizarse con los caracteres Unicode y aprender a trabajar con ellos en sus aplicaciones.</p>
                      </div>
                      <pre class="sintaxis">
                        <code>
                          <span class="comentario">// Para generar facturas japonesas:</span>
                          <span class="comentario">// Kon'nichiwa World</span>
                          <span class="text-danger">Console.WriteLine</span>("\n\n\u65e5\u672c\u306e\u8acb\u6c42\u66f8\u3092\u751f\u6210\u3059\u308b\u306b\u306f\uff1a\n\t");
                          <span class="comentario">// Comando de usuario para ejecutar una aplicación</span>
                          <span class="text-danger">Console.WriteLine</span>(@"c:\invoices\app.exe -j")
                        </code>
                      </pre>
                      <h2 class="mt-5"><span class="bg-warning px-3 rounded">Resumen</span></h2>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Use secuencias de escape de caracteres cuando necesite insertar un carácter especial en una cadena literal, como una tabulación <strong>\t</strong>, una nueva línea <strong>\n</strong> o una comilla doble <strong>\"</strong>.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Use un carácter de escape para la barra diagonal inversa \\ cuando necesite usar una barra diagonal inversa en todos los demás escenarios.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Use la directiva @ para crear un literal de cadena textual para conservar en una cadena todo el formato de espacios en blanco y todos los caracteres de barra diagonal inversa.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Use <strong>\u</strong> junto con un código de cuatro caracteres para representar caracteres Unicode (UTF-16) en una cadena.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Es posible que los caracteres Unicode no se impriman correctamente, en función de la aplicación.</li>
                      </ul>
                    </article>
                  </div>
                  <!-- Combinación de cadenas mediante concatenación de cadenas -->
                  <div class="tab-pane fade" id="vert-tabs-concatenacion-cadenas" role="tabpanel" aria-labelledby="vert-tabs-concatenacion-cadenas-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded">Combinación de cadenas mediante concatenación de cadenas</span></h2>
                      <p class="text-justify mt-4">A menudo, necesitará combinar datos de muchos orígenes diferentes, como variables y cadenas literales que contienen datos de texto y numéricos. En esta unidad, usará la concatenación de cadenas para combinar dos o más valores en una nueva cadena.</p>
                      <h3 class="mt-5 text-indigo">¿Qué es la concatenación de cadenas?</h3>
                      <p class="text-justify mt-4">En la jerga de los programadores, la concatenación de cadenas es la combinación de dos o más valores string en un nuevo valor string. En lugar de sumarse, el segundo valor se anexa al final del primer valor, y así sucesivamente.</p>
                      <h3 class="mt-5 text-indigo">Concatenación de una cadena de literales y una variable</h3>
                      <p class="text-justify mt-4">Para concatenar dos cadenas, debe usar el operador de concatenación de cadenas, que es el símbolo más <strong>+</strong>.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">string</span> <span class="text-primary">firstName</span> = "Bob";
                          <span class="text-danger">string</span> <span class="text-primary">message</span> = "Hello " + <span class="text-primary">firstName</span>;
                          <span class="text-danger">Console.WriteLine</span>(message)
                        </code>
                      </pre>
                      <h3 class="mt-5 text-indigo">Concatenación de varias variables y cadenas de literales</h3>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">string</span> <span class="text-primary">firstName</span> = "Bob";
                          <span class="text-danger">string</span> <span class="text-primary">greeting</span> = "Hello";
                          <span class="text-danger">string</span> <span class="text-primary">message</span> = <span class="text-primary">greeting</span> + " " + <span class="text-primary">firstName</span> + "!";
                          <span class="text-danger">Console.WriteLine</span>(message)
                        </code>
                      </pre>
                      <h3 class="mt-5 text-indigo">Evitación de variables intermedias</h3>
                      <p class="text-justify mt-4">En los pasos anteriores, usó una variable adicional para almacenar la nueva cadena resultante de la operación de concatenación. A menos que tenga una buena razón para hacerlo, puede (y debe) evitar el uso de variables intermedias y llevar a cabo la operación de concatenación según sea necesario.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">string</span> <span class="text-primary">firstName</span> = "Bob";
                          <span class="text-danger">string</span> <span class="text-primary">greeting</span> = "Hello";
                          <span class="text-danger">Console.WriteLine</span>( <span class="text-primary">greeting</span> + " " + <span class="text-primary">firstName</span> + "!")
                        </code>
                      </pre>
                      <h3 class="mt-5 text-indigo">Resumen</h3>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>La concatenación de cadenas le permite combinar cadenas literales y variables más pequeñas en una sola cadena.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Evite crear variables intermedias si el hecho de agregarlas no mejora la legibilidad.</li>
                      </ul>
                    </article>
                  </div>
                  <!-- Combinación de cadenas mediante interpolación de cadenas -->
                  <div class="tab-pane fade" id="vert-tabs-interpolacion-cadenas" role="tabpanel" aria-labelledby="vert-tabs-interpolacion-cadenas-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded">Combinación de cadenas mediante interpolación de cadenas</span></h2>
                      <p class="text-justify mt-4 destacado">Aunque la concatenación de cadenas es sencilla y cómoda, la interpolación de cadenas se está haciendo cada vez más popular en los casos en los que es necesario combinar muchas variables y cadenas literales en un solo mensaje con formato.</p>
                      <h3 class="mt-5 text-indigo">¿Qué es la interpolación de cadenas?</h3>
                      <p class="text-justify mt-4">La interpolación de cadenas combina varios valores en una sola cadena literal mediante el uso de una "plantilla" y una o varias expresiones de interpolación. Una expresión de interpolación se indica con un símbolo de llave de apertura y cierre { }. Puede colocar cualquier expresión de C# que devuelva un valor dentro de las llaves. La cadena literal se convierte en una plantilla cuando tiene como prefijo el carácter $.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">string</span> <span class="text-primary">message</span> = <span class="text-info">$</span> + {<span class="text-primary">greeting</span>} {<span class="text-primary">firstName</span>};
                          <span class="text-danger">Console.WriteLine</span>(<span class="text-primary">message</span>)
                        </code>
                      </pre>
                      <h3 class="mt-5 text-indigo">Interpolación de cadenas para combinar una cadena literal y un valor de variable.</h3>
                      <p class="text-justify mt-4">Para interpolar dos cadenas juntas, cree una cadena literal y prefije la cadena con el símbolo $. La cadena literal debe contener al menos un conjunto de llaves {} y dentro de esos caracteres se usa el nombre de una variable.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">string</span> <span class="text-primary">firstName</span> = "Bob";
                          <span class="text-danger">string</span> <span class="text-primary">message</span> = <span class="text-info">$</span>"Hello {<span class="text-primary">firstName</span>}!";
                          <span class="text-danger">Console.WriteLine</span>(<span class="text-primary">message</span>)
                        </code>
                      </pre>
                      <h3 class="mt-5 text-indigo">Interpolación de cadenas con varias variables y cadenas literales</h3>
                      <p class="text-justify mt-4">Puede realizar varias operaciones de concatenación en la misma línea de código.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">int</span> <span class="text-primary">version</span> = 11;
                          <span class="text-danger">string</span> <span class="text-primary">updateText</span> = "Update to Windows";
                          <span class="text-danger">string</span> <span class="text-primary">message</span> = $"{<span class="text-primary">updateText</span>} {<span class="text-primary">version</span>}";
                          <span class="text-danger">Console.WriteLine</span>(<span class="text-primary">message</span>);
                        </code>
                      </pre>
                      <h3 class="mt-5 text-indigo">Evitar las variables intermedias</h3>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">int</span> <span class="text-primary">version</span> = 11;
                          <span class="text-danger">string</span> <span class="text-primary">updateText</span> = "Update to Windows";
                          <span class="text-danger">Console.WriteLine</span>(<span class="text-info">$</span>"{<span class="text-primary">updateText</span>} {<span class="text-primary">version</span>}!"</span>);
                        </code>
                      </pre>
                      <h3 class="mt-5 text-indigo">Combinación de los literales textuales y la interpolación de cadenas</h3>
                      <p class="text-justify mt-4">Supongamos que necesita usar un literal textual en la plantilla. Puede usar juntos el símbolo @ de prefijo de literal textual y el símbolo $ de interpolación de cadenas.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">string</span> <span class="text-primary">projectName</span> = "First-Project";
                          <span class="text-danger">Console.WriteLine</span>(<span class="text-info">$</span>@"C:\Output\{<span class="text-primary">projectName</span>}\Data");
                        </code>
                      </pre>
                      <p class="text-justify mt-4">En este ejemplo, el símbolo $ le permite hacer referencia a la variable projectName entre corchetes, mientras que el símbolo @ permite usar el carácter <strong>\</strong> sin escape.</p>
                      <h3 class="mt-5 text-indigo">Resumen</h3>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>La interpolación de cadenas proporciona una mejora respecto a la concatenación de cadenas, ya que reduce el número de caracteres necesarios en algunas situaciones.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Puede combinar la interpolación de cadenas y los literales textuales si combina los símbolos de cada uno y usa el resultado como prefijo para la plantilla de cadena.</li>
                      </ul>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">string</span> <span class="text-primary">projectName</span> = "ACME";
                          <span class="text-danger">string</span> <span class="text-primary">russianMessage</span> = "\u041f\u043e\u0441\u043c\u043e\u0442\u0440\u0435\u0442\u044c \u0440\u0443\u0441\u0441\u043a\u0438\u0439 \u0432\u044b\u0432\u043e\u0434";
                          <span class="text-danger">Console.WriteLine</span>("View English output: \n\t" + <span class="text-info">$</span><span class="text-lila">@</span>"c:\Exercise\{<span class="text-primary">projectName</span>}\data.txt")
                          <span class="text-danger">Console.WriteLine</span>(<span class="text-primary">russianMessage</span> + ": \n\t" + <span class="text-info">$</span><span class="text-lila">@</span>"c:\Exercise\{<span class="text-primary">projectName</span>}\ru-RU\data.txt")
                        </code>
                      </pre>
                    </article>
                  </div>
                  <!-- Sumas con conversión implícita de datos -->
                  <div class="tab-pane fade" id="vert-tabs-op-bas-num" role="tabpanel" aria-labelledby="vert-tabs-op-bas-num-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded">Sumas con conversión implícita de datos</span></h2>
                      <h3 class="mt-5 text-indigo">Adición de dos valores numéricos</h3>
                      <p class="text-justify mt-4">Para sumar dos números, se usa el operador de suma, que es el símbolo <strong>+</strong>, el mismo símbolo más <strong>+</strong> que se utiliza para la concatenación de cadenas. La reutilización de un símbolo para varios propósitos se denomina a veces <strong>"sobrecarga del operador"</strong> y sucede con frecuencia en C#.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">int</span> <span class="text-primary">firstNumber</span> = 12;
                          <span class="text-danger">int</span> <span class="text-primary">secondNumber</span> = 7;
                          <span class="text-danger">Console.WriteLine</span>(<span class="text-primary">firstNumber</span> + <span class="text-primary">secondNumber</span>)
                        </code>
                      </pre>
                      <h3 class="mt-5 text-indigo">Combinación de tipos de datos para forzar las conversiones implícitas de tipos</h3>
                      <p class="text-justify mt-4">¿Qué ocurre si intenta usar el símbolo <strong>+</strong> con los valores string y int?</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">string</span> <span class="text-primary">firstName</span> = "Bob";
                          <span class="text-danger">int</span> <span class="text-primary">widgetsSold</span> = 7 ;
                          <span class="text-danger">Console.WriteLine</span>( <span class="text-primary">firstName</span> + " sold" + <span class="text-primary">widgetsSold</span> + " widgets." )
                        </code>
                      </pre>
                      <p class="text-justify mt-4">En este caso, el compilador de C# entiende que se quiere usar el símbolo + para concatenar los dos operandos. Lo deduce porque el símbolo + está rodeado por operandos de los tipos de datos string y int. Por lo tanto, intenta convertir implícitamente la variable intwidgetsSold en string temporalmente para poder concatenarla al resto de la cadena. El compilador de C# intenta ayudarle cuando puede, pero lo ideal es que sea explícito sobre sus intenciones.</p>
                      <h3 class="mt-5 text-indigo">Prueba realizada con un caso más avanzado de suma numérica y concatenación de cadenas</h3>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">string</span> <span class="text-primary">firstName</span> = "Bob";
                          <span class="text-danger">int</span> <span class="text-primary">widgetsSold</span> = 7 ;
                          <span class="text-danger">Console.WriteLine</span>( <span class="text-primary">firstName</span> + " sold" + <span class="text-primary">widgetsSold</span> + 7 + " widgets." )
                        </code>
                      </pre>
                      <p class="text-justify mt-4">En lugar de agregar la variable int widgetsSold al literal int 7, el compilador trata todo como una cadena y lo concatena todo junto.</p>
                      <h3 class="mt-5 text-indigo">Adición de paréntesis para aclarar la intención al compilador</h3>
                      <p class="text-justify mt-4">El símbolo de paréntesis () se convierte en otro operador sobrecargado.</p>
                      <p class="text-justify mt-4">En este caso, los paréntesis de apertura y cierre forman el operador de orden de las operaciones, tal como se usaría en una fórmula matemática. Indicará que quiere que el paréntesis interno se resuelva primero, lo que da como resultado la suma de los valores intwidgetsSold y el valor 7. Una vez que se resuelve, se convertirá implícitamente el resultado en una cadena para que se pueda concatenar con el resto del mensaje.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">string</span> <span class="text-primary">firstName</span> = "Bob";
                          <span class="text-danger">int</span> <span class="text-primary">widgetsSold</span> = 7 ;
                          <span class="text-danger">Console.WriteLine</span>( <span class="text-primary">firstName</span> + " sold" + ( <span class="text-primary">widgetsSold</span> + 7 ) + " widgets." )
                        </code>
                      </pre>
                      <div class="nota mt-5 mb-5">
                        <p class="alert-title">
                          <span class="ms-3"><i class="bi bi-exclamation-circle-fill"></i>Nota</span>
                        </p>
                        <p class="text-justify px-4 p-nota">Probablemente debería evitar la realización de cálculos y concatenaciones en una sola línea de código. Lo importante aquí es ayudarle a ver los operadores y los operandos de la misma forma en que lo hace el compilador.</p>
                      </div>
                      <h3 class="mt-5 text-indigo">Resumen</h3>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Puede realizar operaciones matemáticas como la suma de números.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>La concatenación de cadenas y la suma usan el símbolo más +. Esto se denomina sobrecarga de un operador. El compilador deduce el uso adecuado en función de los tipos de datos en los que opera.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Cuando sea posible, el compilador de C# convertirá implícitamente un int en un string si es obvio que el desarrollador intenta concatenar la representación de cadena de un número con fines de presentación.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Puede usar paréntesis para definir el orden de las operaciones y así indicar explícitamente al compilador que se quiere realizar ciertas operaciones antes que otras.</li>
                      </ul>
                    </article>
                  </div>
                  <!-- Operaciones de suma, resta, multiplicación y división con enteros -->
                  <div class="tab-pane fade" id="vert-tabs-op-mat-bas" role="tabpanel" aria-labelledby="vert-tabs-op-mat-bas-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded">Operaciones de suma, resta, multiplicación y división con enteros</span></h2>
                      <ul class="mt-5 mb-5">
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>+</strong> es el operador de suma</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>-</strong> es el operador de resta</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>*</strong> es el operador de multiplicación</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>/</strong> es el operador de division</li>
                      </ul>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">int</span> <span class="text-primary">sum</span> = 7 + 5;
                          <span class="text-danger">int</span> <span class="text-primary">difference</span> = 7 - 5;
                          <span class="text-danger">int</span> <span class="text-primary">product</span> = 7 * 5;
                          <span class="text-danger">int</span> <span class="text-primary">quotient</span> = 7 / 5;
                          <span class="text-danger">Console.WriteLine</span>(message)
                        </code>
                      </pre>
                      <h3 class="mt-5 text-indigo">División con datos decimales literales</h3>
                      <p class="text-justify mt-4">Para que la división funcione correctamente, es necesario usar un tipo de datos que admita dígitos fraccionarios después de la coma decimal, como <strong>decimal</strong>.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">decimal</span> <span class="text-primary">decimalQuotient</span> = 7.0m / 5;
                          <span class="text-danger">Console.WriteLine</span>( $"Decimal quotient: { <span class="text-primary">decimalQuotient</span> }" );
                        </code>
                      </pre>
                      <p class="text-justify mt-4">Para que esto funcione, el cociente (a la izquierda del operador de asignación) debe ser del tipo decimal y al menos uno de los números que se divide también debe ser del tipo decimal (ambos números también pueden ser del tipo decimal).</p>
                      <p class="text-justify mt-4">Aquí se muestran otros dos ejemplos que funcionan igualmente bien:</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">decimal</span> <span class="text-primary">decimalQuotient </span> = 7 / 5.0m;
                          <span class="text-danger">decimal</span> <span class="text-primary">decimalQuotient </span> = 7.0m / 5.0m;
                        </code>
                      </pre>
                      <p class="text-justify mt-4">Pero las siguientes líneas de código no funcionarán (o arrojarán resultados inexactos):</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">int</span> <span class="text-primary">decimalQuotient </span> = 7 / 5.0m;
                          <span class="text-danger">int</span> <span class="text-primary">decimalQuotient </span> = 7.0m / 5;
                          <span class="text-danger">int</span> <span class="text-primary">decimalQuotient </span> = 7.0m / 5.0m;
                          <span class="text-danger">decimal</span> <span class="text-primary">decimalQuotient </span> = 7 / 5;
                        </code>
                      </pre>
                      <h3 class="mt-5 text-indigo">División con datos decimales literales</h3>
                      <p class="text-justify mt-4">¿Qué ocurre si no está trabajando con valores literales? En otras palabras, ¿qué ocurre si ha de dividir dos variables de tipo <strong>int</strong>, pero no quiere que el resultado se trunque? En ese caso, debe realizar una conversión de tipo de datos de <strong>int</strong> a <strong>decimal</strong>. La conversión es un tipo de conversión de datos que indica al compilador que trate temporalmente un valor como si fuera otro tipo de datos.</p>
                      <p class="text-justify mt-4">Para convertir <strong>int</strong> a <strong>decimal</strong>, agregue el operador de conversión antes del valor. El nombre del tipo de datos se usará entre paréntesis delante del valor para obtenerlo. En este caso, agregaremos (decimal) antes de las variables first y second.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">int</span> <span class="text-primary">firts </span> = 7;
                          <span class="text-danger">int</span> <span class="text-primary">second </span> = 5;
                          <span class="text-danger">decimal</span> <span class="text-primary">quotient </span> = (decimal)<span class="text-primary">firts </span> / (decimal)<span class="text-primary">second </span>;
                          <span class="text-danger">decimal</span> <span class="text-primary">decimalQuotient </span> = 7 / 5;
                        </code>
                      </pre>
                      <h3 class="mt-5 text-indigo">Determinar el resto después de la división de enteros</h3>
                      <p class="text-justify mt-4">El operador de módulo <strong>%</strong> le indica el resto de la división <strong>int</strong>. Lo que realmente se aprende de esto es si un número es divisible por otro. Esto puede resultar útil durante operaciones de procesamiento prolongado cuando se recorren en bucle cientos o miles de registros de datos y se desea proporcionar comentarios al usuario final tras el procesamiento de cada 100 registros de datos.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">Console.WriteLine</span>( $"<span class="text-lila">Modulus</span> of 200 / 5 : {200 % 5}" );
                          <span class="text-danger">Console.WriteLine</span>( $"<span class="text-lila">Modulus</span> of 7 / 5 : {7 % 5}" );
                        </code>
                      </pre>
                      <h3 class="mt-5 text-indigo">Orden de las operaciones</h3>
                      <p class="text-justify mt-4">Puede usar los símbolos () como operadores de orden de las operaciones. Aunque esta no es la única manera en que se determina el orden de las operaciones.</p>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>P</strong>arentheses (paréntesis) (lo que se encuentra dentro del paréntesis se realiza primero)</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>E</strong>xponents (exponentes)</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>M</strong>ultiplication (multiplicación) y <strong>D</strong>ivision (división) (de izquierda a derecha)</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong>A</strong>ddition (suma) y <strong>S</strong>ubtraction (resta) (de izquierda a derecha)</li>
                      </ul>
                      <p class="text-justify mt-4">C# sigue el mismo orden que PEMDAS, excepto en el caso de los exponentes. Aunque no hay ningún operador exponencial en C#, puede usar el método <span class="text-primary">System.Math.Pow</span>. En el módulo "Llamada a métodos de la biblioteca de clases .NET mediante C#" se presenta este método y otros.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">int</span> <span class="text-primary">value1</span> = 3 + 4 * 5;
                          <span class="text-danger">int</span> <span class="text-primary">value2</span> = ( 3 + 4 ) * 5;
                          <span class="text-danger">Console.WriteLine</span>( value1 );
                          <span class="text-danger">Console.WriteLine</span>( value2 );
                        </code>
                      </pre>
                      <h3 class="mt-5 text-indigo">Resumen</h3>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Use operadores como +, -, * y / para realizar operaciones matemáticas básicas.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>La división de dos valores int producirá el truncamiento de los valores después del separador decimal. Para conservar los valores después del separador decimal, debe convertir primero el divisor o el dividendo (o ambos) de int en un número de punto flotante como decimal y, para evitar el truncamiento, el cociente debe ser también del mismo tipo de número de punto flotante.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Realice una operación de conversión para tratar temporalmente un valor como si fuera otro tipo de datos.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Use el operador <strong>%</strong> para capturar el resto después de la división.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>El orden de la operaciones seguirá las reglas del acrónimo PEMDAS.</li>
                      </ul>
                    </article>
                  </div>
                  <!-- Incremento y decremento -->
                  <div class="tab-pane fade" id="vert-tabs-inc-dec" role="tabpanel" aria-labelledby="vert-tabs-inc-dec-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded">Incremento y decremento</span></h2>
                      <p class="text-justify mt-4 destacado">Las operaciones básicas finales que conocerá en este módulo son cómo realizar incrementos y decrementos de valores con operadores especiales que son combinaciones de símbolos.</p>
                      <p class="text-justify mt-4">Con frecuencia, tendremos que incrementar o disminuir los valores, especialmente cuando escribamos lógica de bucle o código que interactúe con una estructura de datos.</p>
                      <p class="text-justify mt-4">El operador <strong>+=</strong> suma y asigna el valor situado a la derecha del operador al valor situado a la izquierda del operador. Por lo tanto, las líneas dos y tres del siguiente fragmento de código son las mismas:</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">int</span> <span class="text-primary">value</span> = 0; <span class="comentario">value es 0</span>
                          <span class="text-primary">value</span> = <span class="text-primary">value</span> + 5; <span class="comentario">value es ahora 5</span>
                          <span class="text-primary">value</span> += 5; <span class="comentario">value es ahora 10</span>
                        </code>
                      </pre>
                      <p class="text-justify mt-4">El operador <strong>++</strong> incrementa el valor de la variable en 1. Por lo tanto, las líneas dos y tres del siguiente fragmento de código son las mismas:</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">int</span> <span class="text-primary">value</span> = 0; <span class="comentario">value es 0</span>
                          <span class="text-primary">value</span> = <span class="text-primary">value</span> + 1; <span class="comentario">value es ahora 1</span>
                          <span class="text-primary">value</span>++; <span class="comentario">value es ahora 2</span>
                        </code>
                      </pre>
                      <p class="text-justify mt-4">Estas mismas técnicas se pueden usar en restas, multiplicaciones y otras muchas operaciones.</p>
                      <div class="nota mt-5">
                        <p class="alert-title">
                          <span class="ms-3"><i class="bi bi-exclamation-circle-fill"></i>Nota</span>
                        </p>
                        <p class="text-justify px-4 p-nota">Los operadores como +=, -=, *=, ++ y -- se conocen como operadores de asignación compuesta porque realizan alguna operación además de asignar el resultado a la variable. El operador += se denomina específicamente operador de asignación de suma.</p>
                      </div>
                      <pre class="sintaxis mt-5">
                        <code>
                          <span class="text-danger">int</span> <span class="text-primary">value</span> = 1;

                          <span class="text-primary">value</span> = <span class="text-primary">value</span> + 1;
                          <span class="text-danger">Console.WriteLine</span>("First increment: " + <span class="text-primary">value</span>);

                          <span class="text-primary">value</span> += 1;
                          <span class="text-danger">Console.WriteLine</span>("Second increment: " + <span class="text-primary">value</span>);

                          <span class="text-primary">value</span>++;
                          <span class="text-danger">Console.WriteLine</span>("Third increment: " + <span class="text-primary">value</span>);

                          <span class="text-primary">value</span> = <span class="text-primary">value</span> - 1;
                          <span class="text-danger">Console.WriteLine</span>("First decrement: " + <span class="text-primary">value</span>);

                          <span class="text-primary">value</span> -= 1;
                          <span class="text-danger">Console.WriteLine</span>("Second decrement: " + <span class="text-primary">value</span>);

                          <span class="text-primary">value</span>--;
                          <span class="text-danger">Console.WriteLine</span>("Third decrement: " + <span class="text-primary">value</span>);
                        </code>
                      </pre>
                      <div class="nota mt-5">
                        <p class="alert-title">
                          <span class="ms-3"><i class="bi bi-exclamation-circle-fill"></i>Nota</span>
                        </p>
                        <p class="text-justify px-4 p-nota">En el "segundo incremento", usamos value += 1;. Sin embargo, podríamos haber usado cualquier valor literal int (o una variable) para incrementar esa cantidad. Lo mismo se aplica al "segundo decremento": value -= 1;</p>
                      </div>
                      <h3 class="mt-5 text-indigo">Colocación de los operadores de incremento y decremento</h3>
                      <p class="text-justify mt-4">Los operadores de incremento y decremento tienen una cualidad interesante: según su posición, llevan a cabo la operación antes o después de recuperar el valor. En otras palabras, si usa el operador delante del valor como en ++value, el incremento se producirá antes de recuperar el valor. Del mismo modo, value++ incrementará el valor una vez recuperado.</p>
                      <h4 class="text-orange">Operador de incremento antes y después del valor</h4>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">int</span> <span class="text-primary">value</span> = 1;
                          <span class="text-primary">value</span>++;
                          <span class="text-danger">Console.WriteLine</span>("First: " + <span class="text-primary">value</span>); <span class="comentario">First: 2</span>
                          <span class="text-danger">Console.WriteLine</span>($"Second: { <span class="text-primary">value</span>++ }"); <span class="comentario">Second: 2</span>
                          <span class="text-danger">Console.WriteLine</span>("Third: " + <span class="text-primary">value</span>); <span class="comentario">Third: 3</span>
                          <span class="text-danger">Console.WriteLine</span>("Fourth: " + (++<span class="text-primary">value</span>)); <span class="comentario">Fourth: 4</span>
                        </code>
                      </pre>
                      <p class="text-justify mt-4">Observe esta línea de código:</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">Console.WriteLine</span>( <span class="text-info">$</span>"Second: { <span class="text-primary">value</span>++ }" );
                        </code>
                      </pre>
                      <p class="text-justify mt-4">Hay dos pasos en esta línea:</p>
                      <ol>
                        <li>Se recupera el valor actual de la variable value y se usa en la operación de interpolación de cadenas.</li>
                        <li>Se incrementa el valor.</li>
                      </ol>
                      <p class="text-justify mt-4">La siguiente línea de código confirma que el valor, de hecho, se incrementó.</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">Console.WriteLine</span>( "Third: " + <span class="text-primary">value</span> );
                        </code>
                      </pre>
                      <p class="text-justify mt-4">En cambio, considere la última línea de código:</p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">Console.WriteLine</span>( "Fourth: " + ( ++<span class="text-primary">value</span> ) );
                        </code>
                      </pre>
                      <p class="text-justify mt-4">Aquí, el orden de las operaciones cambia porque el operador ++ se coloca delante del operando value.</p>
                      <ol>
                        <li>Se incrementa el valor.</li>
                        <li>Se recupera el nuevo valor incrementado de la variable <span class="text-primary">value</span> y se usa en la operación de cadena.</li>
                      </ol>
                      <h3 class="resaltado my-5">Ejercicio</h3>
                      <h4 class="text-orange">Cálculo de los grados Celsius según la temperatura actual en grados Fahrenheit</h4>
                      <ol>
                        <li>Para convertir temperaturas de grados Fahrenheit a Celsius, primero reste 32 y luego multiplique por cinco novenos (5/9).</li>
                        <li>Dato inicial:</li>
                        <pre class="sintaxis">
                          <code>
                            <span class="text-danger">int</span> <span class="text-primary">fahrenheit </span> = 94;
                          </code>
                        </pre>
                        <li>Muestre el resultado de la conversión de temperatura en un mensaje con formato.
                          <br />Combine las variables con cadenas literales pasadas en una serie de comandos Console.WriteLine() para formar el mensaje completo.
                        </li>
                        <li>Cuando haya terminado, el mensaje debe ser similar a la salida siguiente:</li>
                        <pre class="sintaxis">
                          <code>
                            The temperature is 34.444444444444444444444444447 Celsius.
                          </code>
                        </pre>
                      </ol>
                      <h3 class="resaltado my-5">Solución</h3>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">int</span> <span class="text-primary">fahrenheit</span> = 94;
                          <span class="text-danger">decimal</span> <span class="text-primary">celsius</span> = ( <span class="text-primary">fahrenheit</span> - 32 ) * 5m / 9m;
                          <span class="text-danger">Console.WriteLine</span>( <span class="text-info">$</span>"{ <span class="text-primary">celsius</span> } celsius" );
                        </code>
                      </pre>
                      <h3 class="mt-5 text-indigo">Resumen</h3>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Use operadores de asignación compuesta como +=, -=, *=, ++ y -- para realizar una operación matemática como un incremento o un decremento y asigne luego el resultado a la variable original.</li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i>Los operadores de incremento y decremento funcionan de manera diferente si el operador es anterior o posterior al operando.</li>
                      </ul>
                    </article>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-frameworks" role="tabpanel" aria-labelledby="vert-tabs-frameworks-tab">
                    <article class="px-4">
                      <h2><span class="bg-warning px-3 rounded"></span></h2>
                      <h3 class="mt-5 text-indigo"></h3>
                      <h4 class="text-orange"></h4>
                      <p class="text-justify mt-4"></p>
                      <pre class="sintaxis">
                        <code>
                          <span class="text-danger">string</span> <span class="text-primary"></span> = "";
                          <span class="text-danger">string</span> <span class="text-primary"></span> = " " ;
                          <span class="text-danger">Console.WriteLine</span>(message)
                        </code>
                      </pre>
                      <ul>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                        <li class="my-2"><i class="bi bi-check2-square px-2 text-orange"></i><strong></strong></li>
                      </ul>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.Main content -->
    </section>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->

  <?php include "../../templates/footer_cursos.php"?>