* Proyecto de web para fotografa - Curso Desarrollo Web -Juan Manuel Gayo - Comision 36545

Aca se subiran periodicamente modificaciones solicitadas para Desafios entregables - Desafios complementarios - Pre-entregas y Entrega final del proyecto-

Todo relacionado con la ortografia, se corregira para la entrega final del proyecto

#
- * - Version 0.1 - Desafio entregable 04 
#

# HTML

## Comun a todas las paginas 

- Linea 17 y 18 (se introdujo link de animaciones dentro del HEAD)
- Linea 38 (se agrego "id" y se modifico "class")

## Especifico para index

- Linea 117 (se cambio fotografia)

## Especifico de la pagina memoria-ddhh

- Linea 94 a 109 (se cambio el orden de las imagenes)

## Especifico de la pagina portfolio

- Linea 121 (se cambio fotografia)

# CSS

## Header

- Linea 105, 115, 123 y 131 (se reeplazo ".logo" por "#logo")

## Menu

- Linea 140 (se introdujo comentario)
- Linea 142 a 156 (se introdujo ".nav-bar li a:after {}")
- Linea 158 a 152 (se introdujo ".nav-bar li a:hover:after {}")
- Linea 202 (se introdujo "position: relative;")
- Linea 205 a 207 (se elimino ".nav-bar .main-menu a:hover {}")

## Especifico para pagina portfolio

- Linea 453 (se introdujo comentario)
- Linea 459 (se introdujo "filter: greyscale (0);")
- Linea 462 a 467 (se introdujo ".galery .galery-item img:hover {}")

## Especifico para pagina bio

- Linea 513 (se introdujo comentario)
- Linea 515 a 523 (se introdujo ".imagen-bio:after {}")

## Especifico para pagina contacto

- Linea 590 (se introdujo "font-family: 'Montserrat';")
- Linea 612 (se introdujo "font-family: 'Montserrat';")
- Linea 635 (se introdujo "font-family: 'Montserrat';")
- Linea 657 (se introdujo un comentario)
- Linea 660 (se introdujo "font-family: 'Montserrat';")
- Linea 664 (se introdujo "transition: 1s;")
- Linea 667 a 669 (se introdujo "#message:focus {}")
- Linea 687 (se introdujo un comentario)
- Linea 689 a 698 (se introdujo ".form input[type="submit"] {}")
- Linea 700 a 706 (se introdujo "@media (max-width: 480px) {}")
- Linea 708 a 714 (se introdujo "@media (max-width: 360px) {}")
- Linea 716 a 720 (se introdujo ".form input[type="submit"]:hover {}")
- Linea 722 a 725 (se introdujo ".form input[type="submit"]:focus {}")

#
- * - Version 0.2 - Desafio entregable 05 y complementario 02
#

# CARPETA IMG

- se agregan dentro de la carpeta "02-fotos' y a su vez, dentro de la carpeta "coberturas" (campana-frente-de-todos / mascotas-de-la-ciudad / river-eterno)

# CARPETA PAGE

- se crea pagina (coberturas-danone-argentina.html)
- se crea pagina (frente-de-todos.html)
- se crea pagina (mascotas-de-la-ciudad.html)
- se crea pagina (river-eterno.html)
- se elimina pagina (portfolio.html)

# HTML

- se formatean todas las paginas y dentro del <head> se reemplaza <link> a icono hamburguesa por <link> a bootstrap.
- se agregan 2 <script></script> de bootstrap antes del cierre del </body>
- se agrega un <header> donde se coloca un <nav> que se trae de bootstrap y se modifica, y adapta, a la estructura y diseño del proyecto.

## Especifico para pagina index

- se agrega un <main> donde se coloca un carrusel (automatico) traido de bootstrap y el mismo se modifica, y adapta, a la estructura y diseño del proyecto .

## Especifico para pagina bio

- se agrega un <main> donde se coloca una tarjeta traida de bootstrap y la misma se modifica, y adapta, a la estructura y diseño del proyecto.

## Especifico para pagina contacto

- se agrega un <main> y se crea un formulario de contacto utilizando las herramientas de bootstrap.

## Especifico para pagina coberturas

- se agrega un <main> y se importa el grid-galery de la actualmente eliminada pagina portfolio.html. La misma se modifica, y adapta, al diseño y la estructura actual del proyecto.

## Especifico para el resto de las paginas

- se agrega un <main> donde se coloca un carrusel (no automatico) y el mismo se modifica, y adapta, a la estructura y diseño del proyecto.

# CSS

- Se formatea y se le da estilos a la nueva estructura de la pagina para que cumpla con la estructura y el diseño original del proyecto. Para ello se utilizan todas las herramientas aprendidas hasta ahora dentro del curso y otras aprendidas a traves de tuturiales y material complementario de la WEB.

# EXTRA

- Se chequea el correcto funcionamiento de todas las secciones y su estructura en general. Tambien se corrobora que el proyecto sigue funcionando como Full Responsive. 

#
- * - Version 0.3 - Pre-entrega 02
#

# HTML

## Comun a todas las paginas

- Linea 19 (se introdujo un comentario dentro del HEAD)
- Linea 20 (se introdujo link de iconosBootstrap dentro del HEAD)
- Linea 29 (se agrego "id")

## Comun a todas las paginas (salvo index, bio, contacto)

- se introdujo dentro de <button> un icono de bootstrap <i class="bi bi-chevron-left"></i> y <i class="bi bi-chevron-right"></i>

# CSS

- se realiza una limpieza del codigo
- se ordenan los estilos
- se eliminan las animaciones a partir de mobile
- se retoca, mejorando la estetica, de la "card" dentro de bio.html
- se retoca, mejorando la estetica, del "form" dentro de contacto.html
- se le da estilos a los iconos del carrusel 
- se introduce animacion, para la seleccion de categoria, dentro de coberturas.html

# EXTRA

- Se chequea el correcto funcionamiento de todas las secciones y su estructura en general. Tambien se corrobora que el proyecto sigue funcionando como Full Responsive y que no presenta errores en ninguna de sus medidas. 

#
- * - Version 0.4 - Desafio entregable 06
#

# CARPETA IMG

- se agregan dentro de la carpeta "02-fotos", las carpetas "index" e "inicio".

# HTML

## Comun a todas las paginas

- se corrigen errores algunos de escritura.

# CSS

- se renombra bajo el nombre de "stilo.css" para luego migrar el contenido a "style.scss".
- una vez migrado, se elimina el archivo "stilo.css" utilizado hasta la fecha.
- se recibe archivo "style.css" creado actumaticamente a partir de contenido del archivo "style.scss".

# SASS

- se crea carpeta sass.
- se crea archivo "style.css" y se copia dentro de el, el contenido perteneciente al archivo "styles.css" utilizado hasta el momento y recientemente renombrado bajo el nombre de "stilo.css"
- se pasa de escritura "css" a escritura "scss" todo el contenido del archivo
- se crean los archivos "_bio.scss", "_coberturas.scss", "_contacto.scss", "_default.scss", "_header.scss", "_mainfotos.scss" y "_reset.scss". Se pegan dentro de ellas la estructura correspondiente que se corto del archivo "style.scss"
- se crea el archivo "_vars.scss" y dentro del mismo, se introducen etiquetas para los distintos colores y colores de fondo utilizados dentro del documento.
- se importan dentro del archivo "style.scss" los archivos "_vars.scss", "_bio.scss", "_coberturas.scss", "_contacto.scss", "_default.scss", "_header.scss", "_mainfotos.scss" y "_reset.scss".

# EXTRA

- Se chequea el correcto funcionamiento de todas las secciones y su estructura en general. Tambien se corrobora que el proyecto sigue funcionando como Full Responsive y que no presenta errores en ninguna de sus medidas. 
- se corrige escritura dentro del archivo README.



