<?php
    # definimos dos variables y les asignamos un valor
    # podrían haberse obtenido por cualquier otro procedimiento
    # un array, a través de un formulario cuya action ejecute este script

   

    $A=$_GET["a"]; $B= $_GET["b"];
    if ($A==$B)
        print ("A es igual B");

    # cualquier otra instrucción que incluyeramos de aqui
    # en adelante se ejecutaría independientemente de que la condición
    # se cumpla ó no ya que esta forma de if (sin llaves)
    # unicamente considera la primera instrucción
    # comprobémoslo en este otro supuesto

    if ($A<$B)
        print ("A es menor que B");
        print("<br>A no es menor que b, pero esto saldrá<br>");
        print("Esta es la segunda instrucción. No la condicionará el if");
?>

<html>
<body>
<form action="Tarea7.5.1.php" method="get">
    Variable A: <input type="a" name="a"><br>
    Variable b: <input type="b" name="b"><br>
    <input type="submit" value="Enviar">
</form>
</body>
</html>