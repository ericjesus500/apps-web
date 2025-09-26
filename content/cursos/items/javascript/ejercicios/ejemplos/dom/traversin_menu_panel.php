<html>
	<head>
      <title>traversing Menu tipo Panel</title>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
	  <style>
		ul{ list-style: none; }
		.menu {
		  max-width: 480px;
		  margin: 20px auto;
		  list-style: none;
		  padding: 0;
		  font-family: 'Segoe UI', sans-serif;
		}

		.toggle {
		  display: flex;
		  justify-content: space-between;
		  align-items: center;
		  background: #2c3e50;
		  color: white;
		  width: 100%;
		  padding: 14px 20px;
		  border: none;
		  cursor: pointer;
		  font-size: 16px;
		}

		.toggle .arrow {
		  transition: transform 0.3s ease;
		}

		.toggle.active .arrow {
		  transform: rotate(90deg);
		  animation: bounceArrow 0.4s ease;
		}

		@keyframes bounceArrow {
		  0% { transform: rotate(90deg) scale(1); }
		  50% { transform: rotate(90deg) scale(1.15); }
		  100% { transform: rotate(90deg) scale(1); }
		}

		.submenu {
		  overflow: hidden;
		  display: none;
		  opacity: 0;
		  background: #ecf0f1;		  
		}
		
		.submenu li{
			margin-left: -35px;
		}

		.submenu li a {
		  display: block;
		  padding: 12px 20px;
		  text-decoration: none;
		  color: #2c3e50;
		  border-bottom: 1px solid #ccc;
		  transition: background 0.3s;
		}

		.submenu li a:hover {
		  background: #d6f0ff;
		}

		.submenu li a.selected {
		  background-color: #3498db;
		  color: white;
		  margin-left: -5px;
		}

		.detalle {
		  margin-top: 24px;
		  padding: 16px;
		  background: #fdfdfd;
		  border-left: 4px solid #3498db;
		  font-size: 16px;
		  color: #333;
		  transition: all 0.3s ease;
		}
		
		@media (max-width: 600px) {
		  .menu {
			font-size: 14px;
		  }

		  .toggle {
			padding: 12px;
		  }

		  .panel {
			padding: 16px;
		  }

		  .panel-title {
			font-size: 18px;
		  }

		  .arrow {
			font-size: 16px;
		  }
		}
		
		.panel {
		  background: #ffffff;
		  margin-top: 24px;
		  padding: 24px;
		  border-radius: 6px;
		  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
		  transition: all 0.3s ease;
		}

		.panel-title {
		  font-size: 22px;
		  margin-bottom: 12px;
		  color: #2c3e50;
		}

		.panel-description {
		  font-size: 16px;
		  margin-bottom: 16px;
		  color: #555;
		}

		.panel-content {
		  font-size: 14px;
		  color: #333;
		}
	  </style>
	</head>  
  <body>
	<ul class="menu">
		<!-- Empleados -->
	  <li>
		<button class="toggle">
			<span class="icono"><i class="fas fa-user-tie"></i></span>
			<span class="label">Empleados</span>
			<i class="fas fa-chevron-right arrow"></i>
		</button>
		<ul class="submenu">
		  <li><a href="#" data-panel="empleados-admin" data-detalle="Administra empleados.">1. Administrar Empleados</a></li>
		  <li><a href="#" data-panel="empleados-buscar" data-detalle="Busca por código.">2. Buscar Perfil por Código</a></li>
		</ul>
	  </li>
	  <!-- Clientes -->
	  <li>
		<button class="toggle">
			<span class="icono"><i class="fas fa-user-friends"></i></span>
			<span class="label">Clientes</span>
			<i class="fas fa-chevron-right arrow"></i>
		</button>
		<ul class="submenu">
		  <li><a href="#" data-panel="clientes-admin" data-detalle="Administra clientes.">1. Administrar Clientes</a></li>
		  <li><a href="#" data-panel="clientes-buscar" data-detalle="Busca por código.">2. Buscar Perfil por Código</a></li>
		</ul>
	  </li>
	  <!-- Proveedores -->
	  <li>
		<button class="toggle">
			<span class="icono"><i class="fas fa-truck"></i></span>
			<span class="label">Proveedores</span>
			<i class="fas fa-chevron-right arrow"></i>
		</button>
		<ul class="submenu">
		  <li><a href="#" data-panel="proveedores-admin" data-detalle="Administra proveedores.">1. Administrar Proveedores</a></li>
		  <li><a href="#" data-panel="proveedores-buscar" data-detalle="Busca por código.">2. Buscar Perfil por Código</a></li>
		</ul>
	  </li>
	</ul>

	<!-- Panel Dinámico -->
	<div id="panel" class="panel">
	  <h2 class="panel-title">Bienvenido</h2>
	  <p class="panel-description">Selecciona una opción del menú para comenzar.</p>
	  <div class="panel-content"></div>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
	<script>		
		
		const panel = document.getElementById('panel');
		const panelTitle = panel.querySelector('.panel-title');
		const panelDescription = panel.querySelector('.panel-description');
		const panelContent = panel.querySelector('.panel-content');

		document.querySelector('.menu').addEventListener('click', e => {
		  const button = e.target.closest('.toggle');
		  if (button) {
			const submenu = button.nextElementSibling;
			const isActive = button.classList.contains('active');

			// Cierra otros menús
			document.querySelectorAll('.toggle.active').forEach(btn => {
			  btn.classList.remove('active');
			  const sub = btn.nextElementSibling;
			  gsap.to(sub, { height: 0, opacity: 0, duration: 0.4, onComplete: () => sub.style.display = 'none' });
			});

			if (!isActive) {
			  button.classList.add('active');
			  submenu.style.display = 'block';
			  const height = submenu.scrollHeight;
			  gsap.fromTo(submenu, { height: 0, opacity: 0 }, { height, opacity: 1, duration: 0.5 });
			}
		  }

		  const link = e.target.closest('.submenu a');
		  if (link) {
			// Selección visual
			document.querySelectorAll('.submenu a.selected').forEach(el => el.classList.remove('selected'));
			link.classList.add('selected');

			// Actualiza panel dinámico
			const titulo = link.textContent.trim();
			const descripcion = link.getAttribute('data-detalle');

			panelTitle.textContent = titulo;
			panelDescription.textContent = descripcion;

			const panelType = link.dataset.panel;
			const contenidoHTML = panelMap[panelType] || '<p>Opciones disponibles: crear, editar, eliminar, listar.</p>';
			panelTitle.textContent = link.textContent.trim();
			panelDescription.textContent = link.dataset.detalle;
			panelContent.innerHTML = contenidoHTML;
		  }
		});

		
		const panelMap = {
		  'empleados-buscar': `
			<form onsubmit="event.preventDefault(); buscar('empleado');">
			  <label for="codigo">Código de Empleado:</label>
			  <input type="text" id="codigo" name="codigo" required placeholder="EJ: EMP123" />
			  <button type="submit">Buscar</button>
			</form>
			<div id="resultado-busqueda" class="panel-result"></div>
		  `,
		  'clientes-buscar': `
			<form onsubmit="event.preventDefault(); buscar('empleado');">
			  <label for="codigo">Código del Cliente:</label>
			  <input type="text" id="codigo" name="codigo" required placeholder="EJ: CLI123" />
			  <button type="submit">Buscar</button>
			</form>
			<div id="resultado-busqueda" class="panel-result"></div>
		  `,
		  'proveedores-buscar': `
			<form onsubmit="event.preventDefault(); buscar('proveedor');">
			  <label for="codigo">Código de Proveedor:</label>
			  <input type="text" id="codigo" name="codigo" required placeholder="EJ: PRV001" />
			  <button type="submit">Buscar</button>
			</form>
			<div id="resultado-busqueda" class="panel-result"></div>
		  `
		};

		function buscar(tipo) {
		  const codigo = document.getElementById('codigo').value.trim();
		  const resultado = document.getElementById('resultado-busqueda');
		  if (codigo === '') {
			resultado.innerHTML = `<p style="color:red;">Ingresa un código válido de ${tipo}.</p>`;
			return;
		  }

		  resultado.innerHTML = `<p>🔍 Buscando perfil de <strong>${tipo}</strong> con código <strong>${codigo}</strong>...</p>`;
		  setTimeout(() => {
			resultado.innerHTML = `<p>✅ Perfil de ${tipo} <strong>${codigo}</strong> encontrado. Muestra de datos simulados aquí.</p>`;
		  }, 1000);
		}
	</script>
  </body>
</html>