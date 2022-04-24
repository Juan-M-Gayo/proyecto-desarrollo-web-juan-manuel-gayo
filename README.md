* Proyecto de web para fotógrafa - Curso Desarrollo Web - Juan Manuel Gayo - Comisión 36545

Acá se subirán periódicamente modificaciones solicitadas para Desafíos entregables - Desafíos complementários y Pre-entregas y Entrega final del proyecto.

Todo lo relacionado con la ortografía, se corregirá para la entrega final del proyecto.



#
- * -  ( Versión 0.1 - Desafío entregable 04 )
#



# HTML

## Común a todas las páginas 

- Línea 17 y 18 (se introdujo link de animaciones dentro del HEAD)
- Línea 38 (se agregó "id" y se modificó "class")

## Específico para index

- Línea 117 (se cambió fotografía)

## Específico de la página memoria-ddhh

- Línea 94 a 109 (se cambió el orden de las imágenes)

## Específico de la página porfolio

- Línea 121 (se cambió fotografía)

# CSS

## Header

- Línea 105, 115, 123 y 131 (se reemplazó ".logo" por "#logo")

## Menú

- Línea 140 (se introdujo comentario)
- Línea 142 a 156 (se introdujo ".nav-bar li a:after {}")
- Línea 158 a 152 (se introdujo ".nav-bar li a:hover:after {}")
- Línea 202 (se introdujo "position: relative;")
- Línea 205 a 207 (se eliminó ".nav-bar .main-menu a:hover {}")

## Específico para página porfolio

- Línea 453 (se introdujo comentario)
- Línea 459 (se introdujo "filter: greyscale (0);")
- Línea 462 a 467 (se introdujo ".galery .galery-item img:hover {}")

## Específico para página bio

- Línea 513 (se introdujo comentario)
- Línea 515 a 523 (se introdujo ".imagen-bio:after {}")

## Específico para página contacto

- Línea 590 (se introdujo "font-family: 'Montserrat';")
- Línea 612 (se introdujo "font-family: 'Montserrat';")
- Línea 635 (se introdujo "font-family: 'Montserrat';")
- Línea 657 (se introdujo un comentario)
- Línea 660 (se introdujo "font-family: 'Montserrat';")
- Línea 664 (se introdujo "transition: 1s;")
- Línea 667 a 669 (se introdujo "#message:focus {}")
- Línea 687 (se introdujo un comentario)
- Línea 689 a 698 (se introdujo ".form input[type="submit"] {}")
- Línea 700 a 706 (se introdujo "@media (max-width: 480px) {}")
- Línea 708 a 714 (se introdujo "@media (max-width: 360px) {}")
- Línea 716 a 720 (se introdujo ".form input[type="submit"]:hover {}")
- Línea 722 a 725 (se introdujo ".form input[type="submit"]:focus {}")



#
- * -  ( Version 0.2 - Desafio entregable 05 y complementario 02 )
#



# CARPETA IMG

- Se agregan dentro de la carpeta "02-fotos' y a su vez, dentro de la carpeta "coberturas" (campana-frente-de-todos / mascotas-de-la-ciudad / river-eterno)

# CARPETA PAGE

- Se crea página (coberturas-danone-argentina.html)
- Se crea página (frente-de-todos.html)
- Se crea página (mascotas-de-la-ciudad.html)
- Se crea página (river-eterno.html)
- Se elimina página (portfolio.html)

# HTML

- Se formatean todas las páginas y dentro del <head> se reemplaza <link> a ícono hamburguesa por <link> a bootstrap.
- Se agregan 2 <script></script> de bootstrap antes del cierre del </body>
- Se agrega un <header> donde se coloca un <nav> que se trae de bootstrap y se modifica, y adapta, a la estructura y diseño del proyecto.

## Específico para página index

- Se agrega un <main> donde se coloca un carrusel (automático) traído de bootstrap y el mismo se modifica, y adapta, a la estructura y diseño del proyecto .

## Específico para página bio

- Se agrega un <main> donde se coloca una tarjeta traída de bootstrap y la misma se modifica, y adapta, a la estructura y diseño del proyecto.

## Específico para página contacto

- Se agrega un <main> y se crea un formulario de contacto utilizando las herramientas de bootstrap.

## Específico para página coberturas

- Se agrega un <main> y se importa el grid-galery de la actualmente eliminada página portfolio.html. La misma se modifica, y adapta, al diseño y la estructura actual del proyecto.

## Específico para el resto de las páginas

- Se agrega un <main> donde se coloca un carrusel (no automático) y el mismo se modifica, y adapta, a la estructura y diseño del proyecto.

# CSS

- Se formatea y se le da estilos a la nueva estructura de la página para que cumpla con la estructura y el diseño original del proyecto. Para ello se utilizan todas las herramientas aprendidas hasta ahora dentro del curso y otras aprendidas a través de tutoriales y material complementario de - * - la WEB.

# EXTRA

- Se chequea el correcto funcionamiento de todas las secciones y su estructura en general. También se corrobora que el proyecto sigue funcionando como Full Responsive. 



#
- * -  ( Version 0.3 - Pre-entrega 02 )
#



# HTML

## Común a todas las páginas

- Línea 19 (se introdujo un comentario dentro del HEAD)
- Línea 20 (se introdujo link de iconosBootstrap dentro del HEAD)
- Línea 29 (se agrego "id")

## Común a todas las páginas (salvo index, bio, contacto)

- Se introdujo dentro de <button> un ícono de bootstrap <i class="bi bi-chevron-left"></i> y <i class="bi bi-chevron-right"></i>

# CSS

- Se realiza una limpieza del codigo
- Se ordenan los estilos
- Se eliminan las animaciones a partir de mobile
- Se retoca, mejorando la estetica, de la "card" dentro de bio.html
- Se retoca, mejorando la estetica, del "form" dentro de contacto.html
- Se le da estilos a los iconos del carrusel 
- Se introduce animacion, para la seleccion de categoria, dentro de coberturas.html

# EXTRA

- Se chequea el correcto funcionamiento de todas las secciones y su estructura en general. También se corrobora que el proyecto sigue funcionando como Full Responsive y que no presenta errores en ninguna de sus medidas. 



#
- * -  ( Version 0.4 - Desafio entregable 06 )
#



# CARPETA IMG

- Se agregan dentro de la carpeta "02-fotos", las carpetas "index" e "inicio".

# HTML

## Común a todas las páginas

- Se corrigen errores algunos de escritura.

# CSS

- Se renombra, bajo el nombre de "stilo.css", para luego migrar el contenido a "style.scss".
- una vez migrado, se elimina el archivo "stilo.css" utilizado hasta la fecha.
- Se recibe archivo "style.css" creado automáticamente a partir de contenido del archivo "style.scss".

# SASS

- Se crea carpeta sass.
- Se crea archivo "style.css" y se copia dentro de él, el contenido perteneciente al archivo "styles.css" utilizado hasta el momento y recientemente renombrado bajo el nombre de "stilo.css"
- Se pasa de escritura "css" a escritura "scss" todo el contenido del archivo.
- Se crean los archivos "_bio.scss", "_coberturas.scss", "_contacto.scss", "_default.scss", "_header.scss", "_mainfotos.scss" y "_reset.scss". Se pega dentro de ellas la estructura correspondiente que se corto del archivo "style.scss"
- Se crea el archivo "_vars.scss" y dentro del mismo, se introducen etiquetas para los distintos colores y colores de fondo utilizados dentro del documento.
- Se importan dentro del archivo "style.scss" los archivos "_vars.scss", "_bio.scss", "_coberturas.scss", "_contacto.scss", "_default.scss", "_header.scss", "_mainfotos.scss" y "_reset.scss".

# EXTRA

- Se chequea el correcto funcionamiento de todas las secciones y su estructura en general. También se corrobora que el proyecto sigue funcionando como Full Responsive y que no presenta errores en ninguna de sus medidas. 
- Se corrige escritura dentro del archivo README.



#
- * -  ( Versión 0.5 - Desafío entregable 07 ) 
#



# HTML

## Común a todas las páginas 

- Se corrigen todos los errores ortográficos y gramaticales.
- Se modifican los títulos de cada una de las páginas, quedando cada una de ellas con su título correspondiente.
- Se agrega "SEO" para que cada página tenga su "Description" correspondiente y todas ellas, las mismas "Keywords".
- A todas las páginas que contienen "Alt", se les revisan y corrigen las mismas para que la web resulte accesible para todas las personas.
- Se agregan a los comentarios "HEADER" y "ESPECÍFICO PARA..." sus respectivas líneas dentro del archivo CSS, para que sea más sencillo ubicarlas dentro del mismo.

## Específico para las 4 paginas dentro de coberturas.html

- se agrega "breadcrumb" (conberturas) dentro de los "h2" para volver a la pagina coberturas.html.

# SASS

- Se crea el archivo "_map.scss" y se desarrolla, dentro del mismo, un "map" y un "extend"
- Se crea el archivo "_mixin.sccs" y se desarrolla, dentro del mismo, un "mixin"

## Específico para style.scss

- Se agregan los números de línea en CSS y HTML correspondientes a cada "@import", para que sea más sencillo ubicarlos dentro de las estructuras correspondientes.

## Específico para _vars.scss

- Se agregan 2 colores.

## Específico para _reset.scss

- Se agrega el número de línea dentro del CSS para que sea sencillo ubicarlo dentro de la estructura del mismo.
- Se le da estilo a la "scroll-bar"

## Específico para _main-fotos.scss

- Se agregan los números de línea en CSS y HTML correspondientes, para que sea más sencillo ubicarlos dentro de las estructuras correspondientes.
- se importa el archivo "_mixin.scss" y se utiliza dentro de la estructura ".carousel".

## Específico para _header.scss

- Se agregan los números de línea en CSS y HTML correspondientes, para que sea más sencillo ubicarlos dentro de las estructuras correspondientes.

## Específico para _default.scss

- Se agrega el número de línea dentro del CSS para que sea sencillo ubicarlo dentro de la estructura del mismo.

## Específico para _contacto.scss

- Se agregan los números de línea en CSS y HTML correspondientes, para que sea más sencillo ubicarlos dentro de las estructuras correspondientes.

## Específico para _coberturas.scss

- Se agregan los números de línea en CSS y HTML correspondientes, para que sea más sencillo ubicarlos dentro de las estructuras correspondientes.

## Específico para _bios.scss

- Se agregan los números de línea en CSS y HTML correspondientes, para que sea más sencillo ubicarlos dentro de las estructuras correspondientes.
- se importa el archivo "_maps.scss" y se utiliza dentro de la estructura ".bio-card".

# EXTRA

- Se crea dentro de la carpeta "page", la subcarpeta "Portfolio" y se migran, dentro de la misma, todos los archivos .html menos bio.html y contacto.html.
- Se crea dentro de la carpeta "Portfolio", la subcarpeta "coberturas" y se migran, dentro de la misma, los archivos coberturas-danone-argentina.html, coberturas-frente-de-todos.html, coberturas-mascotas-de-la-ciudad.html y coberturas-river-eterno.html.
- Se corrigen todos los enlaces a cada una de las carpetas dentro de todos los archivos HTML.
- Se controlan todos los archivos HTML, y el archivo CSS, utilizando la herramienta dentro de las páginas de W3C y se corrobora que ningún archivo presenta errores.