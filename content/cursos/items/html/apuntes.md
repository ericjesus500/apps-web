<style>
  html{
    font-size: 16px;
  }
  p{
    font-size: 1.2rem;
  }
</style>

# APUNTES EN BORRADOR

## Accesibilidad de una página web

### Fuente: <span style="color: blue;">freecodecamp</span>:

- La unidad rem significa <strong>root em</strong>, y es relativa al tamaño de fuente del elemento HTML:
html{ fon-size: 16px; }

- El pseudo selector :not se puede utulizar para seleccionar todos los elementos que no coinciden con la regla CSS dada. Por ejemplo:

  div:not(#example){ color: red }

  Lo anterior selecciona todos los elementos div sin un id de valor example.

- SVG(gráfico vectorial escalable): tiene un atributo path, el cual permite escalar la imagen sin afectar la resolución de la imagen resultante.

- CSS: tiene una función max, que devuelve el elemento más grande de un conjunto de valores separados por comas. Por ejemplo: img{ width: max( 250px, 25vw ) }

  En el ejemplo anterior, el ancho de la imagen será 250px si el ancho de la vista es inferior a 1000 píxeles. Si el ancho de la vista es mayor que 1000 píxeles, el ancho de la imagen será 25vw. Esto ocurre porque 25vw es igual que 25% del ancho de la vista.

- aspect-ratio

- El atributo role puede ser usado para indicar el propósito detrás de un elemento en la página para las tecnologías de asistencia.
  
  El atributo role es una parte de la Iniciativa de Accesibilidad Web (WAI, por sus siglas en inglés), y acepta valores predefinidos.
  
  Cada role requiere una etiqueta que ayuda a los usuarios de lectores de pantalla a entender su propósito.

  role utiliza como referencia al atributo aria-labellebdy.

  El tipo de letra juega un rol importante en la accesibilidad de una página. Algunas fuentes son más fáciles de leer que otras, y esto es especialmente cierto en pantallas de resolución baja.

- clip: rect(0,0,0,0) -> averiguar

- address: no tiene por qué contener una ubicación geográfica física. Puede usarse para proporcionar un enlace hacia el tema.

- scroll-behavior:

- Ciertos tipos de animaciones basadas en movimiento pueden causar incomodidad a algunos usuarios. En particular, personas con trastornos vestibulares tienen sensibilidad a ciertos desencadenantes del movimiento. La regla-at @media tiene una característica de medios llamada prefers-reduced-motion para establecer CSS basado en las preferencias del usuario. Puede tomar uno de los siguientes valores:
  - reduce
  - no-preference

## Lectores de Pantalla(desafio 3 de freecodecamp)
Los lectores de pantalla anuncian los elementos HTML basándose en el flujo del documento. Eventualmente, queremos que el balance financiero tenga un título de "Balance Sheet" y un subtítulo de "AcmeWidgetCorp". Sin embargo, este orden no tiene sentido si es anunciado por un lector de pantalla.

en &lt;div id="years" aria-hidden="true">$lt;/div>
aria-hidden="true" hace que el elemento div esté oculto para los lectores de pantalla.

Varias tablas separadas pueden ser estilizadas con CSS en una sola tabla. De esta manera ayuda a los lectores de pantalla a entender el flujo del documento.

## Tablas
Las tablas HTML usan el elemento caption para describir de que trata la tabla.

### caption
El elemento caption siempre debe ser el primer hijo de un table, pero se puede posicionar con la propiedad CSS caption-side.

### thead
Indica la cabecera de la tabla

### tbody
Indica el cuerpo de la tabla

### tr
El elemento tr se utiliza para indicar una fila de la tabla

### td
El elemento td indica una celda de datos. Un td vacio solo existe para asegurar que tu tabla tiene un diseño de cuatro columnas y asociar las cabeceras con las columnas correctas

### th
El elemento th indica una celda de cabecera.

```html

<table>
  <thead>
    <tr>
      <td></td>
      <th>2019</th>
      <th>2020</th>
      <th>2021</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>

```

## función calc()

La función calc() es una función CSS que te permite calcular un valor basado en otros valores. Por ejemplo, lo puedes usar para calcular el ancho del viewport menos el margen de un elemento. Por ejemplo:

```css
.example {
  margin: 10px;
  width: calc(100% - 20px);
}
```

## propiedad border-collapse
La propiedad border-collapse en su valor collapse, permitirá que los bordes de las celdas se contraigan en un solo borde, en lugar de un borde alrededor de cada celda.

## transform
La propiedad transform te permite modificar la forma, posición, y tamaño de un elemento sin cambiar el diseño o afectar a los elementos en su alrededor. Posee funciones como translate(), rotate(), scale(), skew(), y matrix().