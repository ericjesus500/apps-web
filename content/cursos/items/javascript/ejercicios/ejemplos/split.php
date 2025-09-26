<?php include_once "../../../../../../templates/header.php" ?>

<style>
	.salida-none {
		display: none;
	}

	.salida-show {
		display: block;
	}
</style>
<title>split</title>
</head>

<body>
	<h1 class="text-center text-primary mt-3 mb-5">.split()</h1>

	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<pre class="pre-content-list bg-blue_2">
						<code>
							<span class="comentario">//CSS</span>
							.salida-none{
								&nbsp;&nbsp;&nbsp;display: none;
							}
		
							.salida-show{
								&nbsp;&nbsp;&nbsp;display: block;
							}
		
							<span class="comentario">//HTML</span>
							&lt;button type="button" id="btn-seleccionar"&gt;Convertir a array&lt;/button&gt;
							&lt;output id="salida" class="salida-none"&gt;
								&nbsp;&nbsp;&nbsp;&lt;img src="../../src/img/arrays-split.png"/&gt;
							&lt;/output&gt;
		
							<span class="comentario">//JS</span>
							const boton = document.getElementById('btn-seleccionar')
							const salida = document.getElementById('salida')
		
							const semana = "lunes, martes, miercoles, jueves, viernes";
		
							boton.addEventListener('click', ()=>{
								&nbsp;&nbsp;&nbsp;const semanaArray = semana.split(",")
								&nbsp;&nbsp;&nbsp;salida.classList.remove('salida-none')
								&nbsp;&nbsp;&nbsp;salida.classList.add('salida-show')
								&nbsp;&nbsp;&nbsp;console.log(semanaArray)
							})
						</code>
				</pre>
			</div>
			<div class="col-md-7">

				<pre class="pre-content-list bg-blue_2">
					<code>
						const semana = "lunes, martes, miercoles, jueves, viernes";
					</code>
				</pre>

				<button class="btn btn-primary my-4" type="button" id="btn-seleccionar">Convertir a array</button>

				<output id="salida" class="salida-none text-center">
					<img src="../../src/img/arrays-split.png" />
				</output>

			</div>
		</div>
	</div>

	<script>
		const boton = document.getElementById('btn-seleccionar')
		const salida = document.getElementById('salida')

		const semana = "lunes, martes, miercoles, jueves, viernes";

		boton.addEventListener('click', () => {
			const semanaArray = semana.split(",")
			salida.classList.remove('salida-none')
			salida.classList.add('salida-show')
			console.log(semanaArray)
		})
	</script>
</body>

</html>