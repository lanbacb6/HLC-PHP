<!-- empezar�amos incluyendo el fichero que contiene 
	    las funciones. No escribir�a nada hasta que las
	    funciones que contiene no fueran invocadas //-->
<? include("ejemplo2.inc") ?>
<!-- Insertaremos un script PHP que invoque
	    la funci�n encabezado. Debe llevar las etiquetas
	    de apertura y cierre <? y ?> de PHP   //-->
<? Encabezado() ?>
<!-- Insertaremos c�digo HTML
	       seg�n nuestra conveniencia   //-->
Aqu� ir�a el contenido de la p�gina<br>
.... esto es texto HTML................<br>
...........................<br><br><br>
<!-- Incluimos el fichero ejemplo1.inc y dado que no contiene
	    ninguna funci�n, insertar� aqu� todo su contenidos //-->
<? include("ejemplo1.inc") ?>
<!-- Insertaremos m�s codigo  HTML -->
....................<br>
...........................<br><br><br>
<!-- Incluimos nuevamente el fichero ejemplo1.inc  Puede repetirme
	    la inclusi�n porque no contiene funciones
	    si las contuviera habr�a un conflicto de duplicidad
	    porque una funcion no puede estar definida dos veces
	    con el mismo nombre. La instrucci�n include
	    como en todos los casos deber� ir dentro de un script PHP
	    y por tanto entre <? y ?> //-->
<? include("ejemplo1.inc") ?>
<!-- Ahora ejecutaremos la funcion PHP Calcula() pasando como
	    par�metros 7 y 9. El return de la funci�n nos devolver�
	    el resultado que imprimiremos aqu� //-->

<? print "Aqu� va el resultado de la multiplicaci�n: ".Calcula(7,9); ?>
<!-- Por ultimo invocaremos la funci�n Pie() -->
<? Pie() ?>