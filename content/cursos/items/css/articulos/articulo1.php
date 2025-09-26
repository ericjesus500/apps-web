<article class="px-4">
  <h2><span class="bg-warning px-3 rounded">La función matchMedia</span></h2>
  <p class="text-justify">Para detectar cambios sucesivos en el tamaño de la ventana del navegador utilizando JavaScript y la función matchMedia, se debe crear un objeto MediaQueryList con una media query CSS que especifique el rango de tamaños de ventana a detectar. Luego, se agrega un listener al objeto MediaQueryList que se ejecutará cada vez que el tamaño de la ventana coincida o deje de coincidir con la media query.
  <pre class="pre-content-list bg-blue_2 my-5">
    <code>
      const mediaQuery = window.matchMedia("(min-width: 768px)");

      function handleOrientationChange(e) {
        &nbsp;&nbsp;&nbsp;if (e.matches) {
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// El ancho de la ventana es mayor o igual a 768px
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;console.log("La ventana es grande (o más)");
        &nbsp;&nbsp;&nbsp;} else {
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// El ancho de la ventana es menor a 768px
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;console.log("La ventana es pequeña (o menos)");
        &nbsp;&nbsp;&nbsp;}
      }

      // Registrar el listener
      mediaQuery.addListener(handleOrientationChange);

      // Ejecutar la función una vez para la configuración inicial
      handleOrientationChange(mediaQuery);
    </code>
  </pre>
  </p>
</article>