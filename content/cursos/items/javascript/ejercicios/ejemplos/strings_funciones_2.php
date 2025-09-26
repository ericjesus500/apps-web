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
					&nbsp;&nbsp;&nbsp;let <span class="text-skyblue_2">mensaje</span>= 'Aprendiendo Javascript, CSS, HTML para ser frontend';

			    &nbsp;&nbsp;&nbsp;console.log("<span class="text-skyblue_2">mensaje</span>.<span class="text-warning">substr</span>(0, 11): " + <span class="text-skyblue_2">mensaje</span>.<span class="text-warning">substr</span>(0, 11)); <span class="comentario">//devolverá 'Aprendiendo'</span>
			    &nbsp;&nbsp;&nbsp;console.log("<span class="text-skyblue_2">mensaje</span>.<span class="text-warning">substr</span>(3, 11): " + <span class="text-skyblue_2">mensaje</span>.<span class="text-warning">substr</span>(3, 11));<span class="comentario">//devolverá 'endiendo Ja'</span>

			    &nbsp;&nbsp;&nbsp;console.log("<span class="text-skyblue_2">mensaje</span>.<span class="text-warning">slice</span>(-3): " + <span class="text-skyblue_2">mensaje</span>.<span class="text-warning">slice</span>(-3)); <span class="comentario">//'end'</span>
			    &nbsp;&nbsp;&nbsp;console.log("<span class="text-skyblue_2">mensaje</span>.<span class="text-warning">slice</span>(-30): " + <span class="text-skyblue_2">mensaje</span>.<span class="text-warning">slice</span>(-30)); <span class="comentario">//'t, CSS, HTML para ser frontend'</span>
			    &nbsp;&nbsp;&nbsp;console.log("<span class="text-skyblue_2">mensaje</span>.<span class="text-warning">slice</span>(3, 11): " + <span class="text-skyblue_2">mensaje</span>.<span class="text-warning">slice</span>(3, 11));<span class="comentario">//'endiendo'</span>

			    &nbsp;&nbsp;&nbsp;console.log("<span class="text-skyblue_2">mensaje</span>.<span class="text-warning">split</span>(' '): " + <span class="text-skyblue_2">mensaje</span>.<span class="text-warning">split</span>(' '));
			    &nbsp;&nbsp;&nbsp;<span class="comentario">//Array(7) ["Aprendiendo", "Javascript,", "CSS,", "HTML", "para", "ser", "frontend"]</span>

			    &nbsp;&nbsp;&nbsp;console.log("<span class="text-skyblue_2">mensaje</span>.<span class="text-warning">split</span>(' , '): " + <span class="text-skyblue_2">mensaje</span>.<span class="text-warning">split</span>(' , ')); 
			    &nbsp;&nbsp;&nbsp;<span class="comentario">//split buscará comas y las tomará como divisor. Ya que el string tiene 3 comas, split devolverá un array de 3 bloques de palabras: </span>
			    &nbsp;&nbsp;&nbsp;<span class="comentario">Array(3) ["Aprendiendo Javascript", "CSS", "HTML para ser frontend"]</span>

			    &nbsp;&nbsp;&nbsp;console.log("<span class="text-skyblue_2">mensaje</span>.<span class="text-warning">replace</span>('CSS','PHP'): " + <span class="text-skyblue_2">mensaje</span>.<span class="text-warning">replace</span>('CSS','PHP'));<span class="comentario">//"Aprendiendo Javascript, PHP, HTML para ser frontend"</span>
				&lt;/script&gt;
      </code>
    </pre>

		<p class="contenido">Ver resultado en la consola</p>
		
	</div>
	
	<script>
      
    let mensaje='Aprendiendo Javascript, CSS, HTML para ser frontend';

    console.log("mensaje.substr(0, 11): " + mensaje.substr(0, 11)); //devolverá 'Aprendiendo'
    console.log("mensaje.substr(3, 11): " + mensaje.substr(3, 11));//devolverá 'endiendo Ja'

    console.log("mensaje.slice(-3): " + mensaje.slice(-3)); //'end'
    console.log("mensaje.slice(-30): " + mensaje.slice(-30)); //'t, CSS, HTML para ser frontend'
    console.log("mensaje.slice(3, 11): " + mensaje.slice(3, 11));//'endiendo'

    console.log("mensaje.split(' '): " + mensaje.split(' '));//Array(7) ["Aprendiendo", "Javascript,", "CSS,", "HTML", "para", "ser", "frontend"]

    console.log("mensaje.split(' , '): " + mensaje.split(' , ')); 
    //split buscará comas y las tomará como divisor. Ya que el string tiene 3 comas, split devolverá un array de 3 bloques de palabras: (3) ["Aprendiendo Javascript", "CSS", "HTML para ser frontend"]

    console.log("mensaje.replace('CSS','PHP'): " + mensaje.replace('CSS','PHP'));//"Aprendiendo Javascript, PHP, HTML para ser frontend"
  
            
	</script>
</body>
</html>
