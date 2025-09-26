<?php include_once "../../../../../../templates/header.php" ?>

<title>reverse</title>
</head>

<body>
	<h1 class="text-center text-primary mt-3 mb-5">.reverse()</h1>

	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<pre class="pre-content-list bg-blue_2">
						<code>
							<span class="comentario">//HTML</span>
							&lt;button type="button" id="btn-seleccionar"&gt;Aplicar .reverse()&lt;/button&gt;
							&lt;output id="salida"&gt;&lt;/output&gt;
	
							<span class="comentario">//JS</span>
							const boton = document.getElementById('btn-seleccionar')
							const salida = document.getElementById('salida')
	
							const semana = ["lunes", "martes", "miercoles", "jueves", "viernes"];
	
							boton.addEventListener('click', ()=>{
								&nbsp;&nbsp;&nbsp;const semanaArray = semana.reverse()
								&nbsp;&nbsp;&nbsp;salida.value = semanaArray
								&nbsp;&nbsp;&nbsp;console.log(semana)
								&nbsp;&nbsp;&nbsp;console.log(semanaArray)
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
				<button class="btn btn-info" type="button" id="btn-seleccionar">Aplicar .reverse()</button>
				<div class="mt-5 text-center" id="salida"></div>
			</div>
		</div>
	</div>


	<script>
		const boton = document.getElementById('btn-seleccionar')
		const salida = document.getElementById('salida')

		const semana = ["lunes", "martes", "miercoles", "jueves", "viernes"];

		boton.addEventListener('click', () => {
			const semanaArray = semana.reverse()
			salida.innerHTML = semanaArray
			console.log(semana)
			console.log(semanaArray)
		})
	</script>
</body>

</html>