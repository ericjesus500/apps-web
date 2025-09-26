<?php include_once "../../../../../../templates/header.php" ?>
<title>join</title>
<style>
	.salida-none {
		display: none;
	}

	.salida-show {
		display: block;
	}
</style>
</head>

<body>
	<h1 class="text-center text-primary mt-3 mb-5">.join()</h1>

	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<pre class="pre-content-list bg-blue_2">
						<code>
							<span class="comentario">//HTML</span>
							&lt;button type="button" id="btn-seleccionar"&gt;Convertir cadena&lt;/button&gt;
							&lt;div class="mt-3" id="salida"&gt;&lt;/div&gt;
	
							<span class="comentario">//JS</span>
							const boton = document.getElementById('btn-seleccionar')
							const salida = document.getElementById('salida')
	
							const semana = ["lunes", "martes", "miercoles", "jueves", "viernes"];
	
							boton.addEventListener('click', ()=>{
								&nbsp;&nbsp;&nbsp;const semanaArray = semana.join("-")
								&nbsp;&nbsp;&nbsp;salida.innerHTML = semanaArray
							})
						</code>
				</pre>
			</div>
			<div class="col-md-7">
				<pre class="pre-content-list bg-blue_2 w-90">
					<code>
						const semana = ["lunes", "martes", "miercoles", "jueves", "viernes"];
					</code>
				</pre>
				<button class="btn btn-primary" type="button" id="btn-seleccionar">Convertir cadena</button>
				<div class="mt-3" id="salida"></div>
			</div>
		</div>
	</div>


	<script>
		const boton = document.getElementById('btn-seleccionar')
		const salida = document.getElementById('salida')

		const semana = ["lunes", "martes", "miercoles", "jueves", "viernes"];

		boton.addEventListener('click', () => {
			const semanaArray = semana.join("-")
			salida.innerHTML = semanaArray
		})
	</script>
</body>

</html>