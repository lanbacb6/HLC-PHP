<!-- Repetimos la inclusi�n de ambos ficheros
	    pero veremos que no aparece mensaje de error
	    por duplicidad de funciones y adem�s
	    pese a hacer una doble inserci�n de ejemplo1
	    solo se visualiza una vez por efecto del filtro
	    establecido por include_onde   //-->
<? include_once("ejemplo2.inc") ?>
<? Encabezado() ?>
Aqu� ir�a el contenido de la p�gina<br>
....................<br>
...........................<br><br><br>
<? include_once("ejemplo1.inc") ?>
....................<br>
no aparecer� nada aqu� debajo<br><br><br>
<? include_once("ejemplo1.inc") ?>
<? include_once("ejemplo2.inc") ?>

