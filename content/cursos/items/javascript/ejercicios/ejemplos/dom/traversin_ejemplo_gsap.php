<html>
	<head>
      <title>Menu con traversing GSAP</title>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
	  <style>	
		.menu{ padding: 20px; border: 1px solid green; list-style:none;}
		.menu li.listItem {margin: 30px 0}
		
		.submenu {
		  overflow: hidden;
		  display: none;
		  opacity: 0;
		}

		.toggle .arrow {
		  display: inline-block;
		  transition: transform 0.3s ease;
		}

		.toggle.active .arrow {
		  transform: rotate(90deg);
		}
	</style>
	</head>	
	<body>
		<ul class="menu">
		  <li class="listItem">
			<button class="toggle">Menú 1 <span class="arrow">▸</span></button>
			<ul class="submenu">
			  <li class="subListItem">Opción A</li>
			  <li class="subListItem">Opción B</li>
			</ul>
		  </li>
		  <li class="listItem">
			<button class="toggle">Menú 2 <span class="arrow">▸</span></button>
			<ul class="submenu">
			  <li class="subListItem">Opción C</li>
			  <li class="subListItem">Opción D</li>
			</ul>
		  </li>
		</ul>
		<script>
			document.querySelector('.menu').addEventListener('click', e => {
			  const button = e.target.closest('.toggle');
			  if (!button) return;

			  const submenu = button.nextElementSibling;
			  const isActive = button.classList.contains('active');

			  // Cierra todos los submenús con animación
			  document.querySelectorAll('.toggle.active').forEach(btn => {
				btn.classList.remove('active');
				const sub = btn.nextElementSibling;
				gsap.to(sub, { height: 0, opacity: 0, duration: 0.4, onComplete: () => sub.style.display = 'none' });
			  });

			  // Si no estaba activo, lo abrimos
			  if (!isActive) {
				button.classList.add('active');
				submenu.style.display = 'block'; // Necesario antes de medir altura
				submenu.style.marginTop = '10px';
				const height = submenu.scrollHeight;

				gsap.fromTo(submenu,
				  { height: 0, opacity: 0 },
				  { height: height, opacity: 1, duration: 0.4 }
				);
			  }
			});
		</script>
	</body>
</html>