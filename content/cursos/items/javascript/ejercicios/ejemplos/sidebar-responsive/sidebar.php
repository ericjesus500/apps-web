<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Google Font: Source Sans Pro -->  
  <!-- Theme style -->
  <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
  <!-- Mis estilos -->
  <link rel="stylesheet" href="./styles.css">
  <title>Plantilla sidebar</title>
</head>
<body>	
	<div class="contenedor">
		<!-- SIDEBAR -->
		<div class="sidebar">
			<!-- SIDEBAR HEADER -->
			<div class="sidebar-header">
			  <div class="sh-admin">
				<div class="sh-admin-avatar">
					<img src="" alt="Avatar" width="50" height="50"
						class="rounded-circle border border-white me-3" />
				</div>
				<div class="sh-admin-data text-center">
					<h6 class="mb-0 text-white">Jesus Chuye Y.</h6>
					<small class="text-white-50">Administrador Fundador del Sistema</small>
					<small class="text-white-50">jchuye@gmail.com</small>
				</div>
				<div class="sh-menu">
					<span id="iconMenu"><i class="bi bi-menu-up"></i></span>
				</div>
			  </div>			  
			</div>
			<!-- SIDEBAR OPCIONES -->
			<div class="sidebar-opciones">
				<ul class="menu">
					<!-- Home -->	
					<li class="menu-item">
						<div class="toggle">
							<span>
								<span class="icon"><i class="bi bi-house-door me-2"></i></span>
								<span class="label">Home</span>
							</span>
							<i class="bi bi-chevron-right arrow open"></i>
						</div>
						<ul class="submenu active">
							<li class="submenu-item"><a href="#"><i class="bi bi-map me-2"></i>Inicio</a></li>
							<li class="submenu-item"><a href="#"><i class="bi bi-speedometer me-2"></i>Dashboard</a></li>
						</ul>
					</li>
					<!-- Configuración -->
					<li class="menu-item">
						<div class="toggle">			
							<span>
								<span class="icon"><i class="bi bi-gear me-2"></i></span>
								<span class="label">Configuración</span>
							</span>
							<i class="bi bi-chevron-right arrow"></i>
						</div>
						<ul class="submenu">
							<li class="submenu-item"><a href="#"><i class="bi bi-person-badge-fill me-2"></i>Usuarios</a></li>
							<li class="submenu-item"><a href="#"><i class="bi bi-person-workspace me-2"></i>Empleados</a></li>
							<li class="submenu-item"><a href="#"><i class="bi bi-person-bounding-box me-2"></i>Clientes</a></li>
							<li class="submenu-item"><a href="#"><i class="bi bi-people-fill me-2"></i>Proveedores</a></li>
						</ul>
					</li>
					<!-- Productos -->
					<li class="menu-item">
						<div class="toggle">
							<span>
								<span class="icon"><i class="bi bi-safe2 me-2"></i></span>
								<span class="label">Productos</span>
							</span>
							<i class="bi bi-chevron-right arrow"></i>
						</div>
						<ul class="submenu">
							<li class="submenu-item"><a href="#">1. Administrar Productos</a></li>
						</ul>
					</li>
					<!-- Compras -->
					<li class="menu-item">
						<div class="toggle">
							<span>
								<span class="icon"><i class="bi bi-cart3 me-2"></i></span>
								<span class="label">Compras</span>
							</span>
							<i class="bi bi-chevron-right arrow"></i>
						</div>
						<ul class="submenu">
							<li class="submenu-item"><a href="#">1. Administrar Compras</a></li>			
						</ul>
					</li>
					<!-- Ventas -->
					<li class="menu-item">
						<div class="toggle">
							<span>
								<span class="icon"><i class="bi bi-credit-card-2-back me-2"></i></span>
								<span class="label">Ventas</span>
							</span>
							<i class="bi bi-chevron-right arrow"></i>
						</div>
						<ul class="submenu">
							<li class="submenu-item"><a href="#">1. Administrar Ventas</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<!-- FIN MENU SIDEBAR -->
		<!-- CONTENIDO -->
		<div class="content-layout">
			<div class="nav-header">
				<span class="icon-nav-header"><i class="bi bi-box-arrow-left"></i></span>
				<div class="logout-switch">
					<input type="checkbox" id="logoutToggle">
					<label for="logoutToggle" class="switch"></label>
				</div>
			</div>
			<div class="contenido">
			</div>
		</div>
	</div>
	<script src="./main.js"></script>
</body>
</html>