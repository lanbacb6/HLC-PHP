<?php

  echo "<pre>";
  # Conexión a la base de datos
  $conn = mysqli_connect('mariadb', 'dwec', 'dwec', 'dwec');

  # Sentencia para leer los registros de la tabla users
  $sql = "Select * From series";

  # Ejecutamos la consulta a la base de datos PRUEBAS
  $result = mysqli_query( $conn, $sql);
  # Recogemos el primer registro de la tabla
  $rows = mysqli_fetch_array( $result, MYSQLI_BOTH);

  # Lo imprimimos por pantalla
  print_r ( $rows);

  # Recorremos el array de registros hasta el final
  do {
    $data[] = $rows;
  }while ( $rows = mysqli_fetch_array( $result, MYSQLI_BOTH));

  # Mostramos por pantalla el array donde hemos guardado los registros
  print_r ( $data);

  # Cerramos la conexión
  mysqli_close( $conn);
  ?>