<?php
# asignemos un valor a la variable $A
$A=0;
/* establezcamo la condici�n menor que cinco
 e insertemos dentro de la instrucci�n algo que modifique
 el valor de esa variable de modo que en algun momento
 deje de cumplirse la condici�n;
 de no ocurrir esto, el bucle se repetir�a indefinidamente
 en este ejemplo ser� el autoincremento ++ de la variable
 el que har� que vaya modificandose su valor*/

while ($A<5) echo "El valor de A es: ",$A++,"<br>";
# comprobemos que este while solo ejecuta una instrucci�n
# la delimitada por el punto y coma anterior
print("Esto solo aparecer� una vez. While no lo incluye en su bucle");
?>

