<!--28-->

# object-fit

Se usa para especificar cómo se debe cambiar el tamaño de &lt;img&gt; o &lt;video&gt; para que se ajuste a su contenedor.

## Valores

- **fill** : Es el valor por defecto. No afecta en nada.

- **contain** : La imagen se ajustará hasta caber y rellenar de forma horizontal o vertical el contenedor pero sin deformarse.

- **cover** : La imagen rellenará utilizando su tamaño original de forma horizontal y vertical el contenedor sin deformarse. Es la propiedad mas utilizada en galerías.

- **none** : La imagen no se redimensiona y mantiene su tamaño original mostrando solo el trozo de las dimensiones especificadas.

- **scale-down** : Selecciona el menor de la comparación entre none y contain.

# objet-position

Posiciona la imagen cuando esta no se muestra completa en el contenedor.

Acepta 2 valores: uno para el eje X y otro para el eje Y

- En el eje X: left, center y right
- En el eje Y: top, center y bottom

```css
object-position: left top;
object-position: left bottom;
object-position: left center;
object-position: right top;
object-position: right bottom;
object-position: right center;
object-position: center center;
```

Acepta valores de posicion en porcentaje

```css
object-position: 50%;
object-position: 50% 30%;
```

## filter

- **none**
  
- **blur(px)** : desenfoca la imagen.
  
- **brightness(%)** : Ajusta el brillo de la imagen siendo 1 el original. De 0 a 1 dan oscuridad y de 1 a n dan sobreexposición.
  
- **contrast(%)** : Ajusta el contraste de la imagen siendo 1 el original. De 0 es negro y de 1 a n dan más contraste.
  
- **drop-shadow(h-shadow v-shadow blur (spread) color)** : Aplica una sombra paralela a la imagen.
  
  - **h-shadown** : sombra horizontal
  - **v-shadown** : sombra vertical
  - **blur** : desenfoque
  - **spread** : extension de la sombra. Funciona en chrome. No en mozilla
  - **color** : color de la sombra
  
- **grayscale(%)** : Convierte la imagen a escala de grises, 0 es el original y 1 sería blanco y negro completamente.
  
- **hue-rotate(deg)** : Añade matiz de color a la imagen. Se da un valor en grados según la rueda cromática. El valor máximo es 360deg.
  
- **invert(%)** : Invierte el color de la imagen. Saca un negativo. 0 es el valor por defecto y 1 es totalmente invertida.
  
- **opacity(%)** : Controla la opacidad de la imagen. 1 es el valor por defecto y 0 es transparente.
  
- **saturate(%)** : Controla la saturación de color de la imagen. 1 es el valor por defecto, 0 es totalmente desaturada y por encima de 1 se sobresatura.
  
- **sepia(%)** : Aplica un tono sepia a la imagen. 0 es el valor por defecto y 1 es totalmente sepia.
  
- **url()** - Buscar información.

<!--29-->
## clip-path

Es una máscara que oculta partes de una caja.

- **circle()** : dibuja un círculo, puede tener una medida fija, circle(100px) o especificar un centro con at, circle(100px at medidaX medidaY | palabrasClaveX palabrasClaveY)

- **ellipse()**: dibuja una elipse, funciona igual que el círculo, pero en este caso tenemos que especificar 2 centros, el horizontal y el vertical

- **inset()**: dibuja un borde transparente por dentro de la caja

```txt  
inset(all| Y X | top X bottom | top left bottom right)
```

Existe la opción de redondear las esquinas, para ello después de los valores de inset pondremos:

```txt
inset(round all |
    top-left & bottom-right top-right & bottom-left |
    top-left top-right & bottom-left bottom-right
    top-left top-right bottom-right bottom-left
    )
```

- **polygon()** : Especifica una serie de puntos (mínimo 3) para definir la zona visible siendo el punto 0 0 la esquina superior izquierda. Los puntos se especifican por parejas de ejeX y ejeY separados por comas

```txt
polygon(0 0, 100% 0, 0 100%)
```

[Generador de clip-path](https://bennettfeely.com/clippy/)

<!--30-->
## Colores

Hay varias formas de dar color a los elementos.

- [Palabras clave](https://developer.mozilla.org/en-US/docs/Web/CSS/color_value)

- **RGB** : es una función de color que recibe 3 valores separados por comas, siendo 0 el mínimo y 255 el máximo.

    rgb(0,0,0) sería un negro y rgb(255,255,255) sería blanco.

- **RGBA**: Es una variación de RGB con un cuarto valor que sería el canal alpha, con este valor controlamos la opacidad. Sus valores van de 0 a 1, siendo 0 transparente y 1 opaco.

- **Hexadecimal**: La notación hexademal tiene 16 valores, 0-1-2-3-4-5-6-7-8-9-A-B-C-D-E-F. Se escriben con un # al inicio y se pueden usar 3 o 6 valores. Si se usan 6 valores deben ir en parejas #ffffff, pero cuando las parejas tienen el mismo valor se suele obviar y se ponen solo 3 valores #fff.
  
    El código hexadecimal se representa con los canales rgb de esta forma #rgb o #rrggbb. Utilizar el modo hexadecimal cuando se buscan colores especiales se queda corto si no utilizamos un preprocesador, ya que no podemos controlar la luminosidad, la saturación, etc.

    Cuando los 3/6 valores son iguales es un color neutro, #000 sería negro y #fff blanco, y todos los valores intermedios serían grises con mayor o menor luminosidad #666, #aaa

- **HSL(hue, saturation, lightness)** : Es una función de color que nos permite controlar el tono, la saturación y la luminosidad. Es el modo de color que se recomienda para tener un control total sobre los colores.
  
  - hue es el ángulo en la rueda cromática. Los valores van de 0 a 360 grados.

  - saturation es la intensidad del color. Los valores van de 0 (gris) a 100% (color puro)

  - lightness es la intensidad de la luz. Los valores van de 0 (negro) a 100% (blanco)

- **HSLA** : Exactamente igual que RGBA.

```css

.box--color{
    color: blueviolet;
    background-color: aquamarine;
}

.box--rgb{
    color: rgb(255, 125, 4);
}

.box--rgba{
    background-color: rgba(255, 125, 4, .4);
}

.box--hexa{
    background-color: #00ff80;
}

.box--hsl{
    background-color: hsl(120,26%,30%);
}

.box--hsla{
    background-color: hsla(120,26%,30%,.8);
}
```
<!--31-->
## Border radius

Establece un borde redondeado a las esquinas de una caja.
Es un shorthand que engloba:

```CSS
    border-top-left-radius
    border-top-right-radius
    border-bottom-right-radius
    border-bottom-left-radius

    border-radius: all;
    border-radius: (top-left/bottom-right) (top-right/bottom-left);
    border-radius: (top-left) (top-right/bottom-left) (bottom-right);
    border-radius: (top-left) (top-right) (bottom-left) (bottom-right   );
```

### Elipses

```CSS

    border-radius: 10px / 50px;

    Es equivalente a:
    border-top-left-radius: 10px 50px;
    border-top-right-radius: 10px 50px;
    border-bottom-right-radius: 10px 50px;
    border-bottom-left-radius: 10px 50px;

    border-radius: 10px 50px / 50px 100px;

    Es equivalente a:
    border-top-left-radius: 10px 50px;
    border-top-right-radius: 50px 100px;
    border-bottom-right-radius:10px 50px;
    border-bottom-left-radius: 50px 100px;


    border-radius: 10px 50px 60px / 50px 100px 200px;

    Es equivalente a:
    border-top-left-radius: 10px 50px;
    border-top-right-radius: 50px 100px;
    border-bottom-right-radius:60px 200px;
    border-bottom-left-radius: 50px 100px;

    border-radius: 10px 50px 60px 80px/ 50px 100px 200px 300px;

    Es equivalente a:
    border-top-left-radius: 10px 50px;
    border-top-right-radius: 50px 100px;
    border-bottom-right-radius:60px 200px;
    border-bottom-left-radius: 80px 300px;
```

<!--32-->

## box-shadow

Es una propiedad que crea una una sombra del tamaño de la caja

box-shdow: h-offset v-offset blur spread color inset|outset

- **h-offset** : Es el desplazamiento horizontal de la sombra.
  
- **v-offset** : Es el desplazamiento vertical de la sombra.
  
- **blur-radius** : Optional Es la cantidad de desenfoque de la sombra.
  
- **spread-radius** : Optional Es la extensión de la sombra.
  
- **color** : Optional color de la sombra, si no se especifica tomará el color del texto
  
- **inset | outset** : Optional Determina si la sombra se dibuja por dentro o por fuera de la caja.

    Con valor outset(default) los valores positivos añaden a derecha y abajo y los valores negativos añaden a iquierda y arriba.

    Con valor inset se invierten los valores, positivo sería izquierda y arriba y negativo sería derecha y abajo

```css
box-shadow: 10px 10px 2px 5px red;
```

### Sombras múltiples

Se añaden las sombras separadas por comas:

```css
box-shadow: 10px 10px 2px 5px red, -10px -10px 2px 5px blue;
```

## Text-shadow

Sintaxis:

```txt
text-shadow: h-offset v-offset blur color
```

### Sombras múltiples en text-shadow

Se añaden las sombras separadas por comas.

```txt
text-shadow: 10px 10px 2px red, -11px -11px 2px blue;
```

<!--33-->

## Degradados

[Degradados en MDN](https://developer.mozilla.org/es/docs/Web/CSS/radial-gradient)

Un degradado es una transición entre un color y otro. El navegador calculará todos los pasos intermedios entre los colores del degradado.

Es un valor de background-image.

Existen dos tipos de degradados: lineales y radiales

Degradados lineales

```css
    linear-gradient([direction], color-1, color-2....)
    background-image: linear-gradient(red, blue);
```

La dirección es opcional, se puede establecer con un ángulo(20deg, 190deg...) o estableciendo la dirección del degradado con "to top | right | bottom | left | top left | top right| bottom left | bottom right"

```css
    background-image: linear-gradient(to right, red, blue);
```

Si no establecemos paradas de color, el navegador dividirá el espacio disponible entre los colores que tenga que pintar.

```txt
- 2 colores 0% 100%
- 3 colores 0% 50% 100%
```

Para establecer las paradas se puede usar cualquier medida, px, em, %...

Si las paradas/inicios empiezan en el mismo sitio se genera un corte sólido.

```css
background-image: linear-gradient(red 50%, blue 50%);

linear-gradient(direction, color-1 stop, color-2 start [stop]...)
background-image: linear-gradient(red 50%, blue 50% 70%, green 75%);
```

### Degradados con angulo

```css
background-image: linear-gradient(25deg red 50%, blue 50%);
```

## Degradados radiales

Funcionan de una forma similar a los degradados lineales.

 ```css
background-image: radial-gradient([shape], red, blue);
background-image: radial-gradient(red, blue);
 ```

Por defecto, shape se ajustará al tamaño de la caja, pero podemos establecer si queremos un círculo o una elipse y definir el radio o los radios.

```css
background-image: radial-gradient(circle 100px, red, blue);
background-image: radial-gradient(ellipse 100px 50px, red, blue);
```

Si no establecemos un punto de origen, el punto 0 0 será el centro del elemento. Para establecer el punto de origen podemos hacerlo en medidas o con palabras clave.

Con la palabra "at" se establece el punto de origen. Los valores que acepta son:

top | right | bottom | left | center | closest-side | closest-corner | farthest-side | farthest-corner

```css
background-image: radial-gradient(circle 100px at top left, red 50%, blue 50%);
```

Si establecemos un solo valor, el segundo por defecto será center.

```css
background-image: radial-gradient(circle 100px at top, red 50%, blue 50%);
```

<!--35-->

## Overflow

Es una propiedad que controla como se va a comportar la caja con el contenido que se desborde de ella.

Es un shorthand que engloba overflow-x y overflow-y

Tiene 3 valores posibles:

- **hidden** : Oculta todo el contenido que se desborde
- **auto** : Muestra la barra de scroll solo si hace falta.
- **scroll** : Muestra ambas barras de scroll independientemente de si se necesitan.

## Float

[Float - MDN](https://developer.mozilla.org/es/docs/Web/CSS/float)
[Clear - MDN](https://developer.mozilla.org/es/docs/Web/CSS/clear)

La propiedad float especifica si un elemento debe salir del flujo normal y aparecer a la izquierda o a la derecha de su contenedor. los elementos de texto y los elementos en línea aparecerán a su alrededor.

Tiene 3 valores posibles:

- **left** : Flota el elemento a la izquierda del contenedor.

- **right** : Flota el elemento a la derecha del contenedor.

- **none** : Elimina el float.

NO EXISTE FLOAT:CENTER!!

Un elemento flotado hace que el padre deje de contenerlo, hay varias formas de solucionarlo, la más cómoda es overflow:hidden

<!--36-->
## Flexbox

- **display:flex**
Convierte el contenedor en un contexto para flexbox y hace que el contenedor sea un elemento de bloque para los elementos que lo rodean.

### display:inline-flex

Convierte el contenedor en un contexto para flexbox y hace que el contenedor sea un elemento en línea para los elementos que lo rodean

- **flex-direction:**

```css
flex-direction: row(default) | row-reverse | column | column-reverse
```

Modifica la dirección y cual es el eje principal.

Por defecto es row (horizontal de izquierda a derecha)

- **row-reverse** : (horizontal de derecha a izquierda)
- **column** : vertical de arriba abajo
- **column-reverse** : vertical de abajo arriba

### flex-wrap: no-wrap(default) | wrap | wrap-reverse

Controla si los elementos saltarán de línea o no

- **no-wrap** : Es el valor por defecto, un contenedor flex va a hacer que todos los elementos se queden en una línea si no le especificamos lo contrario

- **wrap** : Hace que los elementos que no quepan en una línea (manteniendo sus dimensiones, si las tuvieran) salten a la linea inferior.

- **wrap-reverse** : Hace lo mismo que wrap pero en lugar de hacer que salten a la línea inferior, hace que salten a la linea superior.

<!--37 - 38 - 39-->

### Alineamiento en flexbox

Son propiedades del flex-container y se le aplican para alinear a los flex-items

Existen propiedades para el main-axis y para el cross-axis.

#### main-axis

- **justify-content**

```txt
justify-content: flex-start(default) | center | space-between | space-around | space-evenly | flex-end
```

- **flex-start** : Alinea los elementos al principio del main axis.
- **center** : Centra los elementos en la mitad del main axis.
- **flex-end** : Alinea los elementos al final del main axis.
- **space-between** : Distribuye los items a la misma distancia y no deja espacio exterior ni en el primer ni en el último flex-end.
- **space-around** : Distribuye los items a la misma distancia y deja un espacio exterior en el primero y en el último flex-item.
- **space-evenly** : Distribuye los items y los espacios exteriores del primer y último flex-item dejando la misma distancia entre todos.

#### cross-axis

- **align-items** : Una sola línea.
  
```txt
Valores:
flex-start | center | flex-end | stretch(default) | baseline
```

- **align-content** : Varias líneas.

```txt
Valores:
flex-start | center | flex-end | stretch(default)
```

- **align-self** : Se aplica al flex-item. Sirve para alinear un elemento en concreto en el cross-axis.

TRUCO EXTRA: Al utilizar **auto** con la propiedad margin lo que sucede es que el elemento se va al lado contrario del margen que dimos, si ponemos margin:auto el elemento se centra completamente, tanto vertical como horizontalmente

<!--40-->
- **flex**: Es un shorthand de flex-grow | flex-shrink.

```txt
flex: flex-grow | flex-shrink | flex-basis
```

- Todas las medidas se establecen en función del espacio disponible en el contenedor.

- Todas las propiedades van en función del MAIN-AXIS.

- **flex-grow** : Establece qué hacer cuando hay espacio sobrante. Cuantas divisiones coge el elemento. El valor es un entero desde 0 hasta n o auto

- **flex-shrink** :Establece qué hacer cuando no hay espacio suficiente. Cuantas divisiones pierde el elemento. El valor es un entero desde 0 hasta n

- **flex-basis** : Establece cuanto tiene que ocupar el item antes de encojer o extenderse. Flex basis prevalece ante width si el main-axis es horizontal o ante height si el main-axis es vertical. El valor es un entero desde 0 hasta n

Los valores de flex son:

- Por defecto es 0 1 auto.
- flex:auto; equivale a 1 1 auto;
- flex:none; equivale a  0 0 auto;
- flex: flex-grow(obligatiorio) flex-shrink(opcional) flex-basis(opcional);

- **Order** : Establece qué orden ocupará el elemento en el contenedor flex. El valor es el "peso" respecto a los valores que tengan los otros elementos. Por defecto es 0

Extra:
Existe un shorthand para flex-direction y flex-wrap.

```txt
flex-flow: flex-direction | flex-wrap.
```

```css
flex-flow: column wrap;
```

<!--41-->
### Grid Fundamentos

body {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
    height: 100vh;
    color: #eee;
    font-family: sans-serif;
    background-image: radial-gradient(circle, #b94bf8, #3a1957);
    background-repeat: no-repeat;
}

.grid-container {
    display: grid;
    grid-template-columns: 100px 50px 150px 10px;
    grid-template-rows: 100px 120px 50px;
    grid-column-gap: 10px;
    grid-row-gap: 10px;
}

.grid-item {
    border: 1px solid;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem;
    font-size: 2rem;
}

<!--42-->
### grid-column y grid-row

Sirven para ordenar elementos flex-item

- **grid-column-start** : Establece desde qué column-line empezará el elemento.

- **grid-column-end** : Establece hasta qué column-line llega el elemento.

- **grid-row-start** : establece desde que row-line empezará el elemento.

- **grid-row-end** : Establece hasta que row-line llega el elemento.

Existe un shorthand que engloba las 2 propiedades

```txt
grid-column: start / end
grid-row: start / end
```

Tanto start como end admiten valores positivos, negativos y la palabra span

- **Valor positivo** : Empieza a contar las column-lines o las row-lines de izquierda a derecha.

- **Valor negativo**: Empieza a contar las column-lines o las row-lines de derecha a izquierda.

- **span** : Establecemos cuantas columnas o filas ha de ocupar, span 3 es como decirle que ocupe 3 columnas.

**tip** : Si ponemos en el valor end -1 llegará hasta el final

<!--43-->
### Medidas de la cuadrícula

Se pueden dar medidas con cualquiera de las unidades que ya conocemos y dos más que vienen con grid, fr y auto

- **fr** : Equivale a n fracciones del espacio disponible después de establecer las medidas fijas.

- **auto** : Equivale al espacio que quede después de repartir todos elementos, es el último que se reparte. El tamaño mínimo del item será el espacio del contenido + el padding si lo tuviera.

### función repeat()

Con la función repeat podemos establecer repeticiones de medidas o patrones.
En el caso "simple" recibiría 2 parámetros (valores):

```txt
repeat(nColumnas o nFilas, medida)

grid-template-columns: repeat(4,100px) es lo mismo que grid-template-columns: 100px 100px 100px 100px;
```

Si como segundo valor añadimos más de una medida, construiremos un patrón, no hay límite de valores.

```txt
grid-template-columns: repeat(2, 100px 50px...) es lo mismo que grid-template-columns: 100px 50px 50px 100px;
```

<!--44-->
- **Explicit grid** :
    Es el grid que declaramos, tanto con grid-template-columns como con grid-template-rows.

- **Implicit grid** :
    Es el grid que no declaramos, los items que quedan fuera del explicit grid.

  - **grid-auto-columns** :
    Establece qué hacer con las columnas no definidas.

  - **grid-auto-rows** :
    Establece qué hacer con las filas no definidas.

  - **grid-auto-flow** :
    Establece la dirección en la cual se va a pintar el implicit grid. Admite 3 valores:

    - **row(default)**: Se crearán filas adicionales.
    - **column** : Se crearán columnas adicionales.
    - **dense** : Establece qué hacer con los huecos que queden.

<!--45-->
- **minmax()** :
Recibe dos parámetros (valores) para establecer el mínimo y el máximo que pueden tener los items.

```css
grid-template-columns: repeat(2, minmax(100px, 1fr));
```

También se le puede asignar velores pre.definidos:

- **min-content** : Mímimo necesario en función del contenido.

- **max-content** : Máximo necesario en función del contenido.

```css
grid-template-columns: repeat( 3, minmax( min-content, max-content) ) ;

grid-template-columns: repeat( 3, minmax( max-content, 1fr) ) ;
```

- **auto-fill** : Crea tantos grid-items vacios como quepan en el viewport respetando las medidas.

```css
grid-template-columns: repeat( auto-fill, minmax( 60px, 1fr)) ;
```

- **auto-fit** : Elimina los grid-items vacios que no se estén ocupando.

```css
grid-template-columns: repeat( auto-fit, minmax( 60px, 1fr)) ;
```

<!--46-->
### Alineamiento Respecto del contenedor

- **justify-items** : Alinea los elementos horizontalmente respecto a la celda.

- **align-items** : Alinea los elementos verticalmente respecto a la celda.

Admiten los valores:

- start
- end
- center
- stretch (default)

Shorthand

- **place-items** : Engloba las propiedades justify-items y align-items.

```txt
place-items: align-items justify-items
```

- **justify-content**: Alinea los elementos horizontalmente respecto al contenedor.

- **align-content** : Alinea los elementos verticalmente respecto al contenedor.

Admiten los valores:

- start
- end
- center
- stretch (default)
- space-around
- space-between
- space-evenly

Shorthand:

```txt
place-content: align-content justify-content
```

### Alineamiento de los items respecto de su celda

- **self** para los items:
  - justify-self
  - align-self
  - place-self  
  
   Admiten los valores:

  - start
  - end
  - center
  - stretch

- **order** : Funciona igual que en flexbox, por defecto todos los items tienen order:0

<!--47-->
### Grid Template area

<!--48-->
#### Nombrando Grid lines

```css
body {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
    height: 100vh;
    color: #eee;
    font-family: sans-serif;
    background-image: radial-gradient(circle, #b94bf8, #3a1957);
    background-repeat: no-repeat;
}

.grid-container {
    padding: 1rem;
    background-color: #fff;
    display: grid;
    grid-gap: 10px;
    grid-template-columns:
        [first-column-line]
        100px
        [second-column-line]
        100px
        [third-column-line]
        100px
        [fourth-column-line]
        100px
        [last-column-line];
    grid-template-rows:
        [first-row-line]
        100px
        [second-row-line]
        100px
        [third-row-line]
        100px
        [fourth-row-line]
        100px
        [last-row-line];
}

.grid-item {
    border: 1px solid;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem 1.5rem;
    font-size: 2rem;
    color:#000;
}

.grid-item:first-child,
.grid-item:nth-child(2){
    background-color: violet;
}
.grid-item:nth-child(3),
.grid-item:nth-child(4){
    background-color: orange;
}

.grid-item:first-child{
    grid-column: second-column-line / third-column-line;
}

.grid-item:nth-child(4){
    grid-column: first-column-line / second-column-line;
    grid-row: first-row-line / second-row-line;
}

.grid-item:nth-child(3){
    grid-column: third-column-line / fourth-column-line;
    grid-row: first-row-line / third-row-line;
}

.grid-item:nth-child(2){
    grid-column: first-column-line / third-column-line;
    grid-row: second-row-line / fourth-row-line;
}
```

<!--49-->
#### Grid anidados

```css

body {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
    height: 100vh;
    color: #eee;
    font-family: sans-serif;
    background-image: radial-gradient(circle, #b94bf8, #3a1957);
    background-repeat: no-repeat;
}

.grid-container {
    padding: 1rem;
    background-color: #fff;
    display: grid;
    grid-gap: 10px;
    grid-template-columns: repeat(3,1fr);
}

.grid-item {
    border: 1px solid;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem 1.5rem;
    font-size: 2rem;
    color:#000;
}

.nested{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    grid-gap: 15px;
}
```

<!--50-->
#### Grid - Práctica - Galería con grid

```css
body {
    display: grid;
    grid-template-columns: 150px 1fr;
    grid-template-rows: 100px 1fr 100px;
    margin: 0;
    color: #eee;
    font-family: sans-serif;
    background-image: radial-gradient(circle, #b94bf8, #3a1957);
    background-repeat: no-repeat;
}

.grid-item{
    border: 1px solid black;
    display: flex;
    justify-content: center;
    color: #fff;
    align-items: center;
}

.header{
    grid-column: 1 / -1;
}

.aside{
    grid-column: span 1;
    grid-row: 2 / -1;
    background-color: limegreen;
}

.footer{
    background-color: peru;
}

.gallery{
    display: grid;
    grid-template-columns: repeat(auto-fill,minmax(250px, 1fr));
    grid-gap: 5px;
    padding: 1rem;
    align-items: center;
    justify-content: center;
    grid-auto-flow: dense;
}

.gallery img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.gallery img:nth-child(3){
    grid-row: 1 / span 2;
    grid-column: 2 / span 2;
}

.gallery img:nth-child(4){
    grid-column: 1 / 3;
}

.gallery img:nth-child(5){
    grid-row: 1;
    grid-column: 1 / 2;
}

.gallery img:nth-child(6){
    grid-column: span 2;
}

.gallery img:nth-child(8){
    grid-row: span 2;
}

.gallery img:last-child{
    grid-row: span 2;
}
```

<!--51-->

### 51 - Grid - Shorthands y grid track

Shorthands:

[grid](https://developer.mozilla.org/es/docs/Web/CSS/grid): Sin soporte total

**grid-template** :
    Engloba grid-template-columns, grid-template-rows y grid-template-areas
**grid-gap** :
    Engloba grid-column-gap y grid-row-gap
**grid-column** :
    Engloba grid-column-start y grid-column-end
**grid-row** :
    Engloba grid-row-start y grid-row-end

```css
body {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
    height: 100vh;
    color: #eee;
    font-family: sans-serif;
    background-image: radial-gradient(circle, #b94bf8, #3a1957);
    background-repeat: no-repeat;
}

.grid-container {
    display: grid;
    grid-template: 100px 200px 150px / 300px 250px 150px
    /*grid-template:
         "first first first" 100px
        "center center center" 200px
        "last . ." 150px /
        300px 250px
        ; */
        /* grid:
            "first first first" 100px
            "center center center" 200px
            "last . ." 150px /
            300px 250px; */
}

.grid-item {
    border: 1px solid;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem 1.5rem;
    font-size: 2rem;
    color:#000;
}

.grid-item:first-child,
.grid-item:nth-child(4),
.grid-item:nth-child(7){
    background-color: limegreen;
}
```

<!--54-->

### Vídeos responsive

La forma más común es hacer un padding-bottom de 56.25%, éste número es el resultado de la operación (9 / 16) es decir un formato 16:9, esto da como resultado 0.5625 si lo multiplicamos por 100 el resultado es 56.25.

<!--55-->
### 55 - Breakpoints

Existen dos tipos de breakpoints, los major breakpoints y los minor breakpoints.
Los major breakpoints son los que cambian la apariencia de la web de forma significativa.
Los minor breakpoints son los que cambian una cosa específica para un elemento en concreto

**Medidas más comunes**:

- Móviles portrait: 0 - 320px - 360px

- Móviles landscape - tablet: 480px - 640px - 768px:

- tablets grandes, portátiles no HD: 1024px - 1200px - 1400px - 1440px:

- hacia arriba: 1920, HD, 2k, 4k...

```css
@media screen and (min-width:1400px){
    body{
        background-color: green;
    }

    .menu{
        display: flex;
        justify-content: space-around;
    }
}
```
