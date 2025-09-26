<?php include_once "../templates/head.php";?>
<title>Generar Passwords</title>
</head>
<body>
	<div class="container-fluid mt-2">
		<div class="row">
			<div class="col-md-4 bg-dark">
				<h1 class="text-center text-skyblue_2 fs-3">FUNCION PARA GENERAR PASSWORD</h1>
				<h2 class="my-5 text-skyblue_1">Descripcion</h2>
				<p class="destacado">Función que permite crear un password, el cual debe contener letras mayúsculas, minúsculas; evita caracteres tipo #, !, ?, ¿, etc; <br>Se utiliza Programación Orientación a Objetos; <br>Se protege la contraseña con Hasheo; y <br>debe tomar como datos:</p>
				<ul class="my-5 text-white">
				  <li class="my-3 fs-5"><i class="bi bi-check-all px-2 text-lila_2"></i>$nombre_completo</li>
				  <li class="my-3 fs-5"><i class="bi bi-check-all px-2 text-lila_2"></i>$documento</li>
				  <li class="my-3 fs-5"><i class="bi bi-check-all px-2 text-lila_2"></i>$fec_nacimiento</li>
				  <li class="my-3 fs-5"><i class="bi bi-check-all px-2 text-lila_2"></i>$sucursal_tienda</li>
				  <li class="my-3 fs-5"><i class="bi bi-check-all px-2 text-lila_2"></i>$numero_aleatorio</li>
				</ul>
				<h2 class="my-5 text-skyblue_1">Explicación</h2>
				<ul class="my-5 text-white">
				  <li class="my-3 fs-5"><i class="bi bi-caret-right-fill px-2 text-lila_2"></i><span class="text-primary_2">Iniciales del nombre</span>: Se obtienen en mayúsculas.</li>
				  <li class="my-3 fs-5"><i class="bi bi-caret-right-fill px-2 text-lila_2"></i><span class="text-primary_2">Documento</span>: Se usan los últimos 4 dígitos.</li>
				  <li class="my-3 fs-5"><i class="bi bi-caret-right-fill px-2 text-lila_2"></i><span class="text-primary_2">Fecha de nacimiento</span>: Se convierte a formato DDMMAA</li>
				  <li class="my-3 fs-5"><i class="bi bi-caret-right-fill px-2 text-lila_2"></i><span class="text-primary_2">Sucursal</span>: Toma 3 letras aleatorias de la palabra sucursal.</li>
				  <li class="my-3 fs-5"><i class="bi bi-caret-right-fill px-2 text-lila_2"></i><span class="text-primary_2">Alternancia</span>: El string combinado se alterna entre mayúsculas y minúsculas.</li>
				  <li class="my-3 fs-5"><i class="bi bi-caret-right-fill px-2 text-lila_2"></i><span class="text-primary_2">Aleatorio</span>: Se agrega al final un número de 3 cifras.</li>
				</ul>
				<h2 class="my-5 text-skyblue_1">Seguridad</h2>
				<ul class="my-5 text-white">
				  <li class="my-3 fs-5"><i class="bi bi-caret-right-fill px-2 text-lila_2"></i><span class="text-primary_2">password_hash()</span>: utiliza por defecto el algoritmo bcrypt, ideal para almacenar contraseñas de forma segura.</li>
				  <li class="my-3 fs-5"><i class="bi bi-caret-right-fill px-2 text-lila_2"></i><span class="text-primary_2">password_verify</span>($<span class="text-tomato">inputPassword</span>, $<span class="text-tomato">resultado</span>['<span class="text-primary_2">password_hash</span>']): Sirve para verificar el hash generado.</li>
				</ul>
			</div>
			<div class="col-md-8">
				<pre class="pre-content-list bg-blue_2 mb-3 fs-6 pathway-extreme-p">
				  <code>
					<span class="text-lila_2">class</span> <span class="text-orange">GeneradorPassword</span> {
						&nbsp;&nbsp;&nbsp;<span class="text-lila">private</span> <span class="text-tomato">string</span> $<span class="text-info text-opacity-75">nombreCompleto</span>;
						&nbsp;&nbsp;&nbsp;<span class="text-lila">private</span> <span class="text-tomato">string</span> $<span class="text-info text-opacity-75">documento</span>;
						&nbsp;&nbsp;&nbsp;<span class="text-lila">private</span> <span class="text-tomato">string</span> $<span class="text-info text-opacity-75">fechaNacimiento</span>;
						&nbsp;&nbsp;&nbsp;<span class="text-lila">private</span> <span class="text-tomato">string</span> $<span class="text-info text-opacity-75">sucursalTienda</span>;
						&nbsp;&nbsp;&nbsp;<span class="text-lila">private</span> <span class="text-tomato">int</span> $<span class="text-info text-opacity-75">numeroAleatorio</span>;

						&nbsp;&nbsp;&nbsp;<span class="text-danger">public function</span> <span class="text-skyblue_2">__construct</span>(<span class="text-tomato">string</span> $<span class="text-amarillo">nombre</span>, <span class="text-tomato">string</span> $<span class="text-amarillo">docum</span>, <span class="text-tomato">string</span> $<span class="text-amarillo">fechaNac</span>, <span class="text-tomato">string</span> $<span class="text-amarillo">sucursal</span>, <span class="text-tomato">int</span> $<span class="text-amarillo">numAleatorio</span>) {
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this-><span class="text-info text-opacity-75">nombreCompleto</span> = $<span class="text-amarillo">nombre</span>;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this-><span class="text-info text-opacity-75">documento</span> = $<span class="text-amarillo">docum</span>;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this-><span class="text-info text-opacity-75">fechaNacimiento</span> = $<span class="text-amarillo">fechaNac</span>;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this-><span class="text-info text-opacity-75">sucursalTienda</span> = $<span class="text-amarillo">sucursal</span>;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this-><span class="text-info text-opacity-75">numeroAleatorio</span> = $<span class="text-amarillo">numAleatorio</span>;
						&nbsp;&nbsp;&nbsp;}

						&nbsp;&nbsp;&nbsp;<span class="text-danger">public function</span> <span class="text-skyblue_2">generarPassword</span>(): <span class="text-tomato">array</span> {
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">// Tomar iniciales del nombre en mayúsculas</span>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$<span class="text-warning">iniciales</span> = $this-><span class="text-skyblue_2">obtenerIniciales</span>($this-><span class="text-info text-opacity-75">nombreCompleto</span>);

							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">// Extraer últimos 4 dígitos del documento</span>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$<span class="text-warning">doc</span> = <span class="text-primary_2">substr</span>($this-><span class="text-info text-opacity-75">documento</span>, -4);

							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">// Fecha de nacimiento en formato DDMMAA</span>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$<span class="text-warning">fecha</span> = <span class="text-primary_2">date</span>('dmy', <span class="text-lila">strtotime</span>($this-><span class="text-info text-opacity-75">fechaNacimiento</span>));

							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">// 3 letras de la sucursal, mezcladas</span>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$<span class="text-warning">sucursal</span> = <span class="text-primary_2">substr</span>(<span class="text-lila">str_shuffle</span>($this-><span class="text-info text-opacity-75">sucursalTienda</span>), 0, 3);

							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">// Convertir en alternancia de mayúsculas y minúsculas</span>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$<span class="text-indigo_2">mezcla</span> = $this-><span class="text-skyblue_2">mezclarMayusMinus</span>("{$<span class="text-warning">iniciales</span>}{$<span class="text-warning">doc</span>}{$<span class="text-warning">fecha</span>}{$<span class="text-warning">sucursal</span>}");

							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">// Agregar el número aleatorio</span>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$<span class="text-orange">plainPassword</span> = $<span class="text-indigo_2">mezcla</span> . $this-><span class="text-info text-opacity-75">numeroAleatorio</span>;
							
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">// Hashear la contraseña</span>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$<span class="text-skyblue_1">hashedPassword</span> = <span class="text-lila_2">password_hash</span>($<span class="text-orange">plainPassword</span>, PASSWORD_DEFAULT);

							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger">return</span> [
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'password_plana' => $<span class="text-orange">plainPassword</span>,
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'password_hash' => $<span class="text-skyblue_1">$hashedPassword</span>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;];

						&nbsp;&nbsp;&nbsp;}

						&nbsp;&nbsp;&nbsp;<span class="text-danger">private function</span> <span class="text-skyblue_2">obtenerIniciales</span>(<span class="text-tomato">string</span> $<span class="text-verde">nombre</span>): <span class="text-tomato">string</span>{
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$<span class="text-skyblue_1">partes</span> = <span class="text-lila_2">explode</span>(" ", <span class="text-primary_2">trim</span>($<span class="text-verde">nombre</span>));
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$<span class="text-warning">iniciales</span> = "";
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-indigo">foreach</span> ($<span class="text-skyblue_1">partes</span> as $<span class="text-info">palabra</span>) {
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	$<span class="text-warning">iniciales</span> .= <span class="text-primary_2">strtoupper</span>(<span class="text-lila">substr</span>($<span class="text-info">palabra</span>, 0, 1));
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger">return</span>	 $<span class="text-warning">iniciales</span>;
						&nbsp;&nbsp;&nbsp;}

						&nbsp;&nbsp;&nbsp;<span class="text-danger">private function</span> <span class="text-skyblue_2">mezclarMayusMinus</span>(<span class="text-tomato">string</span> $cadena): <span class="text-tomato">string</span> {
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$<span class="text-skyblue_1">resultado</span> = "";
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-indigo">for</span> ($i = 0; $i &lt; <span class="text-primary_2">strlen</span>($<span class="text-amarillo">cadena</span>); $i++) {
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$<span class="text-skyblue_1">resultado</span> .= $i % 2 == 0 ? <span class="text-primary_2">strtoupper</span>($<span class="text-amarillo">cadena</span>[$i]) : <span class="text-primary_2">strtolower</span>($<span class="text-amarillo">cadena</span>[$i]);
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger">return</span> $<span class="text-skyblue_1">resultado</span>;
						&nbsp;&nbsp;&nbsp;}
					}
				  </code>
				</pre>
				
				<pre class="sintaxis my-3 fs-5">
				  <code>
					// Ejemplo de uso:
					$generador = new GeneradorPassword("Eric Jesus Chuye Vilchez", "12345678", "1990-08-15", "LimaCentro", rand(100, 999));
					$resultado = $generador->generarPassword();

					echo "Contraseña generada: " . $resultado['password_plana'] . "&lt;br&gt;";
					echo "Hash (para guardar en base de datos): " . $resultado['password_hash'];

				  </code>
				</pre>
			</div>
		</div>
	</div>
<?php include_once "../templates/footer.php";?>
 
<!-- Plantillas -->
<div>
	<p class="pathway-extreme-p text-justify mt-4"></p>
	<p class="destacado"></p>
	<p class="pathway-extreme-p h4 my-4 text-decoration-underline text-tomato"><em>Resultado:</em></p>
	<p class="pathway-extreme-p h4 my-4">Parámetros:</p>
	<p class="pathway-extreme-p h4 my-4">Descripción:</p>
	<h2 class="my-5 text-primary_2"></h2>
	<h3 class="my-5"></h3>
	<h4 class="resaltado my-5 w-50"></h4>

	<div class="callout callout-warning my-5">
	  <p class="pathway-extreme-p text-dark">.</p>
	</div>

	<div class="text-center my-4">
	  <a href="../ejercicios/ejemplos_basicos/.php" class="btn btn-outline-success" target="_blank">Ver
		Funcionamiento</a>
	</div>

	<div class="w-100 text-center">
	  <p class="font-monospace text-justify my-4 d-inline text-decoration-underline">
		<a class="link-primary" href="" target="_blank">Link Reference</a>
	  </p>
	</div>

	<div class="text-center my-5">
	  <img src="../src/img/php_basico/.PNG" alt="" class="img-fluid">
	</div>

	<dl class="my-5">
	  <dt><b><em></em></b></dt>
	  <dd>
	  </dd>
	</dl>

	<div class="callout callout-warning my-5">
	  <p></p>
	</div>

	<ul class="my-5">
	  <li class="my-3 fs-5"><i class="bi bi-caret-right-fill px-2 text-lila_2"></i><span class="text-primary_2"></span>: </li>
	  <li class="my-3 fs-5"><i class="bi bi-caret-right-fill px-2 text-lila_2"></i><span class="text-primary_2"></span>: </li>
	  <li class="my-3 fs-5"><i class="bi bi-caret-right-fill px-2 text-lila_2"></i><span class="text-primary_2"></span>: </li>
	</ul>

	<ul class="my-5">
	  <li class="my-3 fs-5"><i class="bi bi-check2-square px-2 text-lila_2"></i>.</li>
	  <li class="my-3 fs-5"><i class="bi bi-check2-square px-2 text-lila_2"></i>.</li>
	  <li class="my-3 fs-5"><i class="bi bi-check2-square px-2 text-lila_2"></i>.</li>
	</ul>
	<ul class="my-5">
	  <li class="my-3 fs-5"><i class="bi bi-check-all px-2 text-lila_2"></i>.</li>
	  <li class="my-3 fs-5"><i class="bi bi-check-all px-2 text-lila_2"></i>.</li>
	  <li class="my-3 fs-5"><i class="bi bi-check-all px-2 text-lila_2"></i>.</li>
	</ul>
	<ul class="my-5">
	  <li class="my-3 fs-5"><i class="bi bi bi-back px-2 text-lila_2"></i>.</li>
	  <li class="my-3 fs-5"><i class="bi bi bi-back px-2 text-lila_2"></i>.</li>
	  <li class="my-3 fs-5"><i class="bi bi bi-back px-2 text-lila_2"></i>.</li>
	</ul>
	<ul class="my-5">
	  <li class="my-3 fs-5"><i class="bi bi-caret-right-fill px-2 text-lila_2"></i>.</li>
	  <li class="my-3 fs-5"><i class="bi bi-caret-right-fill px-2 text-lila_2"></i>.</li>
	  <li class="my-3 fs-5"><i class="bi bi-caret-right-fill px-2 text-lila_2"></i>.</li>
	</ul>
	<ul class="my-5">
	  <li class="my-3 fs-5"><i class="bi bi-shield-fill px-2 text-lila_2"></i>.</li>
	  <li class="my-3 fs-5"><i class="bi bi-shield-fill px-2 text-lila_2"></i>.</li>
	  <li class="my-3 fs-5"><i class="bi bi-shield-fill px-2 text-lila_2"></i>.</li>
	</ul>
	<ul class="my-5">
	  <li class="my-3 fs-5"><i class="bi bi-book-half px-2 text-lila_2"></i>.</li>
	  <li class="my-3 fs-5"><i class="bi bi-book-half px-2 text-lila_2"></i>.</li>
	  <li class="my-3 fs-5"><i class="bi bi-book-half px-2 text-lila_2"></i>.</li>
	</ul>
	<ul class="list-group">
	  <li class="list-group-item"><i class="bi bi-check2-square px-2 text-indigo"></i></li>
	  <li class="list-group-item"><i class="bi bi-check2-square px-2 text-indigo"></i></li>
	  <li class="list-group-item"><i class="bi bi-check2-square px-2 text-indigo"></i></li>
	</ul>

	<div class="nota mb-5">
	  <div>
		<span class="text-tomato"><i class="bi bi-exclamation-circle-fill"></i>Nota:</span>
	  </div>
	  <div>
		<p>.</p>
	  </div>
	</div>

	<pre class="pre-content-list bg-blue_2 my-5">
	  <code>
	  </code>
	</pre>

	<pre class="sintaxis">
	  <code></code>
	</pre>
</div>
