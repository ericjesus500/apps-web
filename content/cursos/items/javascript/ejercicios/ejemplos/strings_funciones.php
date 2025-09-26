<?php require_once "../../../../../../templates_nivel_0/head.php"; ?>
	<link rel="stylesheet" href="../../../../css/js-css.css">
	<title>Javascript FUNCIONES STRINGS</title>
</head>
<body>

	<div class="container text-white mt-5">
		
		<h1>Ejercicios de Funciones de strings</h1>

		<pre class="pre-content-list bg-blue my-5">
      <code>
      	&lt;script&gt;
					&nbsp;&nbsp;&nbsp;let <span class="text-skyblue_2">bienvenida</span>='Bienvenido al curso de';
			    &nbsp;&nbsp;&nbsp;let <span class="text-skyblue_2">tecnologia</span>='Javascript ';

			    &nbsp;&nbsp;&nbsp;console.log("<span class="text-skyblue_2">tecnologia</span>.<span class="text-warning">length</span>: " + <span class="text-skyblue_2">tecnologia</span>.<span class="text-warning">length</span>);<span class="comentario">//mostrará 10 que es la cantidad de caracteres de la palabra Javascript</span>

			    &nbsp;&nbsp;&nbsp;console.log("<span class="text-skyblue_2">tecnologia</span>.<span class="text-warning">concat</span>(' ', 'es genial')): " + <span class="text-skyblue_2">tecnologia</span>.<span class="text-warning">concat</span>(' ', 'es genial'));<span class="comentario">//Javascript es genial</span>

			    &nbsp;&nbsp;&nbsp;console.log("<span class="text-skyblue_2">bienvenida</span>.<span class="text-warning">concat</span>(' ', `${<span class="text-skyblue_2">tecnologia</span>}`)): " + <span class="text-skyblue_2">bienvenida</span>.<span class="text-warning">concat</span>(' ', `${<span class="text-skyblue_2">tecnologia</span>}`));<span class="comentario">//Javascript es genial</span>

			    &nbsp;&nbsp;&nbsp;console.log("<span class="text-skyblue_2">tecnologia</span>.<span class="text-warning">toUpperCase()</span>): " + <span class="text-skyblue_2">tecnologia</span>.<span class="text-warning">toUpperCase()</span>);<span class="comentario">//JAVASCRIPT</span>

			    &nbsp;&nbsp;&nbsp;console.log("<span class="text-skyblue_2">tecnologia</span>.<span class="text-warning">toLowerCase()</span>): " + <span class="text-skyblue_2">tecnologia</span>.<span class="text-warning">toLowerCase()</span>);<span class="comentario">//javascript</span>

			    &nbsp;&nbsp;&nbsp;let <span class="text-skyblue_2">mensaje</span> = 'Aprendiendo Javascript, CSS, HTML para ser frontend';
			    &nbsp;&nbsp;&nbsp;console.log("<span class="text-skyblue_2">mensaje</span>.<span class="text-warning">indexOf</span>('Javascript'): " + <span class="text-skyblue_2">mensaje</span>.<span class="text-warning">indexOf</span>("Javascript"));<span class="comentario">//12</span>
				&lt;/script&gt;
      </code>
    </pre>

		<p class="contenido">Ver resultado en la consola</p>
		
	</div>
	
	<script>
		let bienvenida='Bienvenido al curso de';
    let tecnologia='Javascript ';

    console.log("tecnologia.length: " + tecnologia.length);//mostrará 10 que es la cantidad de caracteres de la palabra Javascript

    console.log("tecnologia.concat(' ', 'es genial')): " + tecnologia.concat(' ', 'es genial'));//Javascript es genial

    console.log("bienvenida.concat(' ', `${tecnologia}`)): " + bienvenida.concat(' ', `${tecnologia}`));//Javascript es genial

    console.log("tecnologia.toUpperCase()): " + tecnologia.toUpperCase());//JAVASCRIPT

    console.log("tecnologia.toLowerCase()): " + tecnologia.toLowerCase());//javascript

    let mensaje='Aprendiendo Javascript, CSS, HTML para ser frontend';
    console.log("mensaje.indexOf('Javascript'): " + mensaje.indexOf("Javascript"));//12
	</script>
</body>
</html>
