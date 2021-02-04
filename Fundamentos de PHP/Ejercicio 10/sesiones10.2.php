<?php
//Recogemos la sesión que estamos pasando
session_start();
echo $_SESSION['mi_sesion'];
echo "<br>";
//Ahora mostramos todo el contenido de la variable array $_SESSION
print_r($_SESSION);
echo "<br>";
echo session_id();
?>