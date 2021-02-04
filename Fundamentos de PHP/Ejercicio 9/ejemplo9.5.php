<?
$valores=Array("Verde","Verano","Rolls-Royce","Millonario");

setcookie("cookie5[color]",$valores[0],time()+3600);
setcookie("cookie5[estacion]",$valores[1],time()+3600);
setcookie("cookie5[coche]",$valores[2],time()+3600);
setcookie("cookie5[finanzas]",$valores[3],time()+3600);

if (isset( $cookie5) ) {
   while( list( $indice, $valor) = each( $cookie5 ) ) {
	  echo "$indice == $valor\n";
   }
}


?>
