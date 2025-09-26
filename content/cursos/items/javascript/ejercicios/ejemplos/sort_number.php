<?php include_once "../../../../../../templates/header.php" ?>

<title>sortNumber</title>
</head>

<body>
	<h1 class="text-center text-primary mt-3 mb-5">.sor() CON NUMEROS</h1>

	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<pre class="pre-content-list bg-blue_2">
						<code>
							<span class="comentario">//HTML</span>
							&lt;button type="button" id="btn-seleccionar"&gt;Ordenar ascendente números&lt;/button&gt;
							&lt;button type="button" id="btn-seleccionar-2"&gt;Ordenar descendente números&lt;/button&gt;
	
							&lt;output id="salida"&gt;&lt;/output&gt;
	
							<span class="comentario">//JS</span>
							const boton = document.getElementById('btn-seleccionar')
							const boton2 = document.getElementById('btn-seleccionar-2')
							const salida = document.getElementById('salida')
	
							const numbers = [200, 45, 175, 300, 8];
	
							boton.addEventListener('click', ()=>{
								&nbsp;&nbsp;&nbsp;const num = numbers.sort((x, y) => {
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return x-y
								&nbsp;&nbsp;&nbsp;})
								&nbsp;&nbsp;&nbsp;salida.value = num
								&nbsp;&nbsp;&nbsp;console.log(num)							
							})
	
							boton2.addEventListener('click', ()=>{
								&nbsp;&nbsp;&nbsp;const num = numbers.sort((x, y) => {
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return y-x
								&nbsp;&nbsp;&nbsp;})
								&nbsp;&nbsp;&nbsp;salida.value = num
								&nbsp;&nbsp;&nbsp;console.log(num)
							})
						</code>
				</pre>
			</div>
			<div class="col-md-7">
				<pre class="pre-content-list bg-blue_2 w-90">
					<code>
						const numbers = [23, 5, 100, 56, 9, 13, 37, 10, 1];
					</code>
				</pre>
				<div class="d-flex">
					<button class="btn btn-primary my-2 mx-2" type="button" id="btn-seleccionar">Ordenar ascendente números</button>
					<button class="btn btn-primary my-2 mx-2" type="button" id="btn-seleccionar-2">Ordenar descendente números</button>
				</div>
				<div class="text-center mt-5" id="salida"></div>
			</div>
		</div>
	</div>


	<script>
		const boton = document.getElementById('btn-seleccionar')
		const boton2 = document.getElementById('btn-seleccionar-2')
		const salida = document.getElementById('salida')

		const numbers = [23, 5, 100, 56, 9, 13, 37, 10, 1];

		boton.addEventListener('click', () => {
			const num = numbers.sort((x, y) => {
				return x - y
			})
			salida.innerHTML = num
			console.log(num)
		})

		boton2.addEventListener('click', () => {
			const num = numbers.sort((x, y) => {
				return y - x
			})
			salida.innerHTML = num
			console.log(num)
		})
	</script>
</body>

</html>