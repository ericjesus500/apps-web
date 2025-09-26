<?php include_once "../../../../../../templates/header.php" ?>

<title>sort</title>
</head>

<body>
	<h1 class="text-center text-primary mt-3 mb-5">.sort()</h1>

	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<pre class="pre-content-list bg-blue_2">
						<code>
							<span class="comentario">//HTML</span>
							&lt;button type="button" id="btn-seleccionar"&gt;Aplicar .sort()&lt;/button&gt;
							&lt;output id="salida"&gt;&lt;/output&gt;
	
							<span class="comentario">//JS</span>
							const boton = document.getElementById('btn-seleccionar')
							const salida = document.getElementById('salida')
	
							const frutas = ["platano", "manzana", "fresa", "naranja", "sandia"];
	
							boton.addEventListener('click', ()=>{
								&nbsp;&nbsp;&nbsp;const frutasArray = frutas.sort()
								&nbsp;&nbsp;&nbsp;salida.value = frutasArray
								&nbsp;&nbsp;&nbsp;console.log(frutas)
								&nbsp;&nbsp;&nbsp;console.log(frutasArray)
							})
						</code>
				</pre>
			</div>
			<div class="col-md-7">
				<pre class="pre-content-list bg-blue_2 w-90">
					<code>
						const frutas = ["platano", "manzana", "fresa", "naranja", "sandia"];
					</code>
				</pre>
				<button class="btn btn-info" type="button" id="btn-seleccionar">Aplicar .sort()</button>
				<div class="mt-5 text-center" id="salida"></div>
			</div>
		</div>
	</div>


	<script>
		const boton = document.getElementById('btn-seleccionar')
		const salida = document.getElementById('salida')

		const frutas = ["platano", "manzana", "fresa", "naranja", "sandia"];

		boton.addEventListener('click', () => {
			const frutasArray = frutas.sort()
			salida.innerHTML = frutasArray
			console.log(frutas)
			console.log(frutasArray)
		})
	</script>
</body>

</html>