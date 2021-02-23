<?php

  
  # Conexión a la base de datos
  $conn = mysqli_connect('mariadb', 'dwec', 'dwec', 'dwec');
  if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
  }
  echo "<pre>";
  print_r($conn);
  
  # Sentencia para insertar registros en la base de datos
  $insert = "insert into series( titulo, cadena, director, anyo, terminada) values( 'tituloserie', 'cadenaserie', 'directorserie', 1998, true);";

  # Instrucción que ejecuta el insert anterior en la base de datos PRUEBAS
  $return = mysqli_query ( $conn, $insert);

  

  # Mostramos por pantalla el resultado del insert
  print_r( ( $return));

  # Cerramos conexión
  mysqli_close( $conn);
  ?>