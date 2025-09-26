<!DOCTYPE html>
<html>
   <head>
      <title>Menu con traversing</title>
	  <style type="text/css">
		.submenu { display: none; }
		.submenu.visible { display: block; }
	  </style>
   </head>
   <body>
		<ul class="menu">
		   <li>
			  <button class="toggle">Menú 1</button>
			  <ul class="submenu">
				 <li>Opción A</li>
				 <li>Opción B</li>
			  </ul>
		   </li>
		</ul>
   <script>
		document.querySelectorAll('.toggle').forEach(btn => {
		   btn.addEventListener('click', () => {
			  const submenu = btn.nextElementSibling; // Aquí usamos traversing
			  submenu.classList.toggle('visible');
		   });
		});
   </script>
   </body>
</html>