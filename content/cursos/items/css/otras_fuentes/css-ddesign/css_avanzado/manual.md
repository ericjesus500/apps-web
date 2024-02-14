# CCS3 AVANZADO

## uso de recurso de las animaciones

[CSS triggers](https://csstriggers.com/)

## Transiciones

Las transiciones necesitan un evento que las dispare, no se pueden ejecutar por sí solas

Existen cuatro propiedas de las transiciones

- **transition-property:** Establece la propiedad que se va a animar.
    Acepta los valores: all | none | propiedad [, propiedad]

- **transition-duration:** Establece la duración de la transición, si hubiera más de una se ponen separadas por comas.
    Acepta valores en segundos "s" y en milisegundos "ms"

- **transition-delay:** Establece el retraso que tendrá la transición antes de empezar

- **transition-timing-function:** Establece la forma en la que se moverá la transición en cada una de las interpolaciones.
  
    Acepta los valores: ease | linear | ease-in | ease-out | ease-in-out | step-start | step-end | steps() | cubic-bezier()

Tenemos un shorthand que agrupa estas 4 propiedades:

```CSS
    transition: transition-property
                transition-duration
                transition-delay
                transition-time-function;
```

Las transformaciones pueden ser de dos tipos, 2D y 3D
  Para ambas tenemos una sola propiedad que recibe funciones como valor.

## Transformaciones 2D

- **transform:**
  - **translate**(x | x, y) | translateX() | translateY()
    - valores positivos -> derecha abajo
    - valores negativos -> izquierda arriba

  - **scale**(x = y | x,y) | scaleX() | scaleY()
  - **skew**(x | x,y) | skewX(angle) | skewY(angle)
  - **rotate**(angle) -> Tenemos 4 formas de dar ángulos en CSS:

    - deg (360deg) -> grados sexagesimales
    - grad (400grad)-> es una unidad de medida de ángulos planos
    - rad (6.2832rad)-> es una unidad de ángulo en el plano en el SI
    - turn (1turn) -> turn es el número de vueltas

    Cuando usamos angulos con:
    - valores positivos-> sentido horario
    - valores negativos-> sentido antihorario

```css
/* Keyword values */
transform: none;

/* Function values */
transform: matrix(1.0, 2.0, 3.0, 4.0, 5.0, 6.0);
transform: translate(12px, 50%);
transform: translateX(2em);
transform: translateY(3in);
transform: scale(2, 0.5);
transform: scaleX(2);
transform: scaleY(0.5);
transform: rotate(0.5turn);
transform: skew(30deg, 20deg);
transform: skewX(30deg);
transform: skewY(1.07rad);
transform: matrix3d(1.0, 2.0, 3.0, 4.0, 5.0, 6.0, 7.0, 8.0, 9.0, 10.0, 11.0, 12.0, 13.0, 14.0, 15.0, 16.0);
transform: translate3d(12px, 50%, 3em);
transform: translateZ(2px);
transform: scale3d(2.5, 1.2, 0.3);
transform: scaleZ(0.3);
transform: rotate3d(1, 2.0, 3.0, 10deg);
transform: rotateX(10deg);
transform: rotateY(10deg);
transform: rotateZ(10deg);
transform: perspective(17px);

/* Multiple function values */
transform: translateX(10px) rotate(10deg) translateY(5px);

/* Global values */
transform: inherit;
transform: initial;
transform: unset;
```

### transition-timing-function

**ease:** significa desacelerar/frenar

**ease:** La transición comienza lentamente, acelera bruscamente y luego disminuye lentamente hacia el final.

**ease-in:** La transición comienza lentamente, y luego se acelera progresivamente hasta el final.

**ease-out:** La animación comienza abruptamente y luego se ralentiza progresivamente hacia el final.

**ease-in-out:** La animación comienza lentamente, se acelera y luego se ralentiza hacia el final.

**linear:** La transición se mueve de principio a fin a una velocidad constante.

**función calc** : Nos sirve para hacer cálculos.

```css
calc (valor operacion valor...)

Ejemplo:

calc (100vw - 100%)
```

### Shorthand transition

```css
    transition: 2s transform ease-in
    transition: transform 2s ease-in
    transition: ease-in transform 2s
```

La norma es que **transition-delay** debe ir justo despues del **transition-duration**

```css
    transition: 2s 3s transform ease-in
    transition: transform 2s 3s ease-in
    transition: ease-in transform 2s 3s
```

## Animation

Las animaciones funcionan de una forma similar a las transiciones, pero con la principal diferencia de que estas no necesitan un evento para iniciarse, son automáticas.

Las animaciones tienen varias propiedades

- **animation-name** : nombre de la animación, es obligatoria.

- **animation-duration** : duración de la animación, es obligatoria.
- **animation-iteration-count** : establece el número de veces que queremos repetir la animación.

    [más info](https://developer.mozilla.org/es/docs/Web/CSS/animation)

Los keyframes sirven para determinar las diferentes fases de la animación. Son obligatorios.

```css
    @keyframes nombreAnimación{ }
```

Dentro tenemos que poner los selectores de tiempo, existen varias opciones.

más info sobre [keyframes](https://developer.mozilla.org/es/docs/Web/CSS/@keyframes)

más info sobre [animaciones](https://developer.mozilla.org/es/docs/Web/CSS/animation)
  
Las animaciones tienen más propiedades:

- **animation-play-state** : Establece si una animación está en ejecución o en pausa.
  Acepta los valores: running | paused

- **animation-delay** : Establece el tiempo de retardo que debe transcurrir antes de comenzar la animación.

- **animation-iteration-count** : Define el numero de veces que un ciclo de animación debe ser ejecutado antes de detenerse.
Acepta los valores: infinite | \<number>

  - **infinite** : La animación se repetirá siempre.
  - **\<number>** : El número de veces que la animación debe repetir: es 1 por defecto. Los valores negativos no son validos. Puede especificar valores no enteros para ejecutar parte de un ciclo de animación (por ejemplo 0.5 se ejecutara la mitad del ciclo de la animación).

- **animation-direction** : Establece el modo en el que se va a reproducir la animación.
    Acepta los valores:  normal | reverse | alternate

- **animation-timing-function** : Establece la forma en la que se moverá la animación en cada una de las interpolaciones.
Acepta los valores: ease | linear | ease-in | ease-out | ease-in-out | steps(n,[direction]) | cubic-bezier()

- **animation-fill-mode** : Establece el modo en que una animación CSS aplica sus estilos.
  Acepta los valores:

  - **none** : La animación no aplicará los estilos ni antes ni después de su ejecución.
  - **forwards** : El objeto sobre el que se aplica la animación quedará con los valores y estilos que le aplique el último keyframe de la ejecución de la animación.
  - **backwards** : La animación aplicará los valores definidos en el primer keyframe tan pronto como se aplique al objeto, y los retendrá durante el tiempo de animation-delay. El primer keyframe dependerá del valor de animation-direction
  - **both** : Durante el período definido por animation-delay, la animación aplicará los valores de propiedad definidos en el fotograma clave que comenzará la primera iteración de la animación.
  
### shorthand

```css
  animation : name duration timing-function delay iteration-count direction fill-mode;
```

wiki de [cubic-bezier](https://es.wikipedia.org/wiki/Curva_de_B%C3%A9zier)
[time-function](https://developer.mozilla.org/en-US/docs/Web/CSS/timing-function)
[cubic-bezier.com](https://cubic-bezier.com)
[easings.net](https://easings.net/)
