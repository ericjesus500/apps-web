<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Panel Dinámico - Gestión</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    .menu { max-width: 600px; margin: 2rem auto; padding: 0; list-style: none; }
    .toggle {
      display: flex; align-items: center; justify-content: space-between;
      width: 100%; background: #2c3e50; color: #fff; padding: 1rem 1.2rem;
      border: none; font-size: 1rem; cursor: pointer;
    }
    .toggle .icono { margin-right: 0.75rem; }
    .toggle .arrow {
      transition: transform 0.3s ease;
    }
    .toggle.active .arrow {
      transform: rotate(90deg);
      animation: bounceArrow 0.3s ease;
    }
    @keyframes bounceArrow {
      0% { transform: rotate(90deg) scale(1); }
      50% { transform: rotate(90deg) scale(1.15); }
      100% { transform: rotate(90deg) scale(1); }
    }
    .submenu {
      background: #ecf0f1; overflow: hidden; display: none; opacity: 0;
      padding-left: 0;
    }
    .submenu li a {
      display: block; padding: 0.8rem 1.5rem; text-decoration: none;
      color: #2c3e50; border-bottom: 1px solid #ccc;
    }
    .submenu li a.selected {
      background: #3498db; color: #fff;
    }
    .panel {
      max-width: 600px; margin: 1.5rem auto;
      background: #fff; padding: 1.5rem; border-radius: 6px;
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.08);
    }
    .panel-result { margin-top: 1rem; }
    @media (max-width: 600px) {
      .toggle { font-size: 0.95rem; padding: 0.9rem 1rem; }
    }
  </style>
</head>
<body>

  <ul class="menu">
    <li>
      <button class="toggle">
        <span class="d-flex align-items-center">
          <span class="icono"><i class="fas fa-user-tie me-2"></i></span>
          <span class="label">Empleados</span>
        </span>
        <i class="fas fa-chevron-right arrow"></i>
      </button>
      <ul class="submenu">
        <li><a href="#" data-panel="empleados-admin" data-detalle="Administra empleados.">1. Administrar Empleados</a></li>
        <li><a href="#" data-panel="empleados-buscar" data-detalle="Busca por código.">2. Buscar Perfil por Código</a></li>
      </ul>
    </li>
    <li>
      <button class="toggle">
        <span class="d-flex align-items-center">
          <span class="icono"><i class="fas fa-user-friends me-2"></i></span>
          <span class="label">Clientes</span>
        </span>
        <i class="fas fa-chevron-right arrow"></i>
      </button>
      <ul class="submenu">
        <li><a href="#" data-panel="clientes-admin" data-detalle="Administra clientes.">1. Administrar Clientes</a></li>
        <li><a href="#" data-panel="clientes-buscar" data-detalle="Busca por código.">2. Buscar Perfil por Código</a></li>
      </ul>
    </li>
    <li>
      <button class="toggle">
        <span class="d-flex align-items-center">
          <span class="icono"><i class="fas fa-truck me-2"></i></span>
          <span class="label">Proveedores</span>
        </span>
        <i class="fas fa-chevron-right arrow"></i>
      </button>
      <ul class="submenu">
        <li><a href="#" data-panel="proveedores-admin" data-detalle="Administra proveedores.">1. Administrar Proveedores</a></li>
        <li><a href="#" data-panel="proveedores-buscar" data-detalle="Busca por código.">2. Buscar Perfil por Código</a></li>
      </ul>
    </li>
  </ul>

  <div id="panel" class="panel">
    <h2 class="panel-title">Bienvenido</h2>
    <p class="panel-description">Selecciona una opción del menú para comenzar.</p>
    <div class="panel-content"></div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script>
    const panel = document.getElementById('panel');
    const panelTitle = panel.querySelector('.panel-title');
    const panelDescription = panel.querySelector('.panel-description');
    const panelContent = panel.querySelector('.panel-content');
	
	document.querySelector('.menu').addEventListener('click', e => {
	  const button = e.target.closest('.toggle');
	  const link = e.target.closest('.submenu a');

	  // 1. Manejar clic en botón principal
	  if (button) {
		const submenu = button.nextElementSibling;
		const isActive = button.classList.contains('active');

		// Cerrar todos los submenús
		document.querySelectorAll('.toggle.active').forEach(btn => {
		  btn.classList.remove('active');
		  const sub = btn.nextElementSibling;
		  gsap.to(sub, {
			height: 0,
			opacity: 0,
			duration: 0.4,
			onComplete: () => sub.style.display = 'none'
		  });
		});

		// Si no estaba activo, abrir este
		if (!isActive) {
		  button.classList.add('active');
		  submenu.style.display = 'block';
		  const altura = submenu.scrollHeight;
		  gsap.fromTo(submenu,
			{ height: 0, opacity: 0 },
			{ height: altura, opacity: 1, duration: 0.4 }
		  );
		}

		return; // Evita que también se dispare el clic de opción
	  }

	  // 2. Manejar clic en un enlace del submenú
	  if (link) {
		// Eliminar selección previa
		document.querySelectorAll('.submenu a.selected').forEach(el => el.classList.remove('selected'));
		link.classList.add('selected');

		const panelType = link.dataset.panel;
		const descripcion = link.dataset.detalle || '';
		const contenidoHTML = panelMap[panelType] || `<p class="text-muted">Vista no disponible aún.</p>`;

		panelTitle.textContent = link.textContent.trim();
		panelDescription.textContent = descripcion;
		panelContent.innerHTML = contenidoHTML;
	  }
	});

    const panelMap = {
      'empleados-buscar': getFormHTML('Empleado'),
	  'clientes-buscar': getFormHTML('Cliente'),
      'proveedores-buscar': getFormHTML('Proveedor'),
      'empleados-admin': '<ul><li>🆕 Crear</li><li>🛠 Modificar</li><li>🗑 Eliminar</li><li>📋 Listar</li></ul>',
      'proveedores-admin': '<ul><li>🆕 Crear</li><li>🛠 Modificar</li><li>🗑 Eliminar</li><li>📋 Listar</li></ul>',
      'clientes-admin': '<ul><li>🆕 Crear</li><li>🛠 Modificar</li><li>🗑 Eliminar</li><li>📋 Listar</li></ul>'      
    };

    function getFormHTML(tipo) {
      return `
        <form onsubmit="event.preventDefault(); buscar('${tipo.toLowerCase()}');">
          <div class="mb-3">
            <label for="codigo" class="form-label">Código de ${tipo}:</label>
            <input type="text" class="form-control" id="codigo" required placeholder="Ej: ${tipo.toUpperCase().slice(0,3)}001">
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
        <div id="resultado-busqueda" class="panel-result"></div>
      `;
    }

    function buscar(tipo) {
	  const codigo = document.getElementById('codigo').value.trim();
	  const resultado = document.getElementById('resultado-busqueda');
	  if (!codigo) {
		resultado.innerHTML = `<p class="text-danger">⚠️ Ingresa un código válido de ${tipo}.</p>`;
		return;
	  }

	  resultado.innerHTML = `<p>🔍 Buscando perfil de <strong>${tipo}</strong> con código <strong>${codigo}</strong>...</p>`;

	  // Simulación de búsqueda con retardo
	  setTimeout(() => {
		resultado.innerHTML = `
		  <div class="card mt-3">
			<div class="card-header d-flex justify-content-between align-items-center">
			  <h5 class="mb-0">Perfil de ${tipo}</h5>
			  <button class="btn btn-sm btn-outline-primary" onclick="toggleEdicion(this)">Editar</button>
			</div>
			<div class="card-body">
			  <form id="perfil-form">
				<div class="row g-3">
				  <div class="col-md-6">
					<label class="form-label">Nombre</label>
					<input type="text" class="form-control" value="Nombre de muestra" disabled>
				  </div>
				  <div class="col-md-6">
					<label class="form-label">Correo</label>
					<input type="email" class="form-control" value="${tipo.toLowerCase()}@ejemplo.com" disabled>
				  </div>
				  <div class="col-md-6">
					<label class="form-label">Dirección</label>
					<input type="text" class="form-control" value="Calle Principal 123" disabled>
				  </div>
				  <div class="col-md-6">
					<label class="form-label">Teléfono</label>
					<input type="text" class="form-control" value="987654321" disabled>
				  </div>
				</div>
				<div class="text-end mt-3">
				  <button type="submit" class="btn btn-success d-none" id="btn-guardar">Guardar Cambios</button>
				</div>
			  </form>
			</div>
		  </div>
		`;
	  }, 800);
	}
	
	function toggleEdicion(btn) {
	  const form = document.getElementById('perfil-form');
	  const inputs = form.querySelectorAll('input');
	  const guardar = document.getElementById('btn-guardar');

	  const esEditable = !inputs[0].disabled;

	  inputs.forEach(input => input.disabled = esEditable);
	  guardar.classList.toggle('d-none');

	  btn.textContent = esEditable ? 'Editar' : 'Cancelar';
	}

  </script>
</body>
</html>