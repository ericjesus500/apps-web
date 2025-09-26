<!DOCTYPE html>
<html>
   <head>
      <title>Menu con traversing Ej 2</title>
	  <style type="text/css">
		.menu{ padding: 20px; border: 1px solid green;}
		.menu > li{margin: 30px 0}
		
		.submenu li { 
			margin-top:10px;
			margin-botton: 5px;
			padding: 8px 12px;
			border-bottom: 1px solid #eee;
			background: #f9f9f9;
			transition: background 0.2s;
		}
		
		.submenu li:hover {
		  background: #e0f0ff;
		}
				
		.submenu {
		  max-height: 0;
		  opacity: 0;
		  overflow: hidden;
		  transition: max-height 0.5s ease, opacity 0.3s ease;
		}

		.submenu.visible {
		  max-height: 500px; /* Ajusta al contenido esperado */
		  opacity: 1;
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
		   <li>
			  <button class="toggle">Menú 1 <span class="arrow">▸</span></button>
			  <ul class="submenu">
				 <li>Opción A</li>
				 <li>Opción B</li>
			  </ul>
		   </li>
		   <li>
			  <button class="toggle">Menú 2 <span class="arrow">▸</span></button>
			  <ul class="submenu">
				 <li>Opción C</li>
				 <li>Opción D</li>
			  </ul>
		   </li>
		</ul>
   <script>
		
		
		document.querySelector('.menu').addEventListener('click', e => {
		  const button = e.target.closest('.toggle');
		  if (!button) return;

		  const submenu = button.nextElementSibling;
		  const isVisible = submenu.classList.contains('visible');

		  document.querySelectorAll('.submenu.visible').forEach(ul => ul.classList.remove('visible'));
		  document.querySelectorAll('.toggle.active').forEach(btn => btn.classList.remove('active'));

		  if (!isVisible) {
			submenu.classList.add('visible');
			button.classList.add('active');
		  }
		});

		
		

   </script>
   </body>
</html>