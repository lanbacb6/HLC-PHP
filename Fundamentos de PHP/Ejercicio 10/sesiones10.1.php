<?php
//El valor de la variable tipo array $_SESSION persistirá durante toda la vida de la aplicación
//Este valor puede ser modificado en cualquier momento
//En primer lugar es necesario iniciar la sesion
session_start();
$_SESSION['mi_sesion'] = "VALOR";
$_SESSION['mi_sesion2'] = "VALOR2";

//Método que nos genera un identificador único cada vez que se ejecute
session_id();
?>

<a href="sesiones2.php">Pruebas de Sesion</a>