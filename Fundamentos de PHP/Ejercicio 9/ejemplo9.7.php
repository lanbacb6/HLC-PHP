<?
$numero=$visitante; 
$numero+=1; 
setcookie("visitante",$numero,time()+86400); 

if($numero==1){print "Es la $numero vez que visitas esta p�gina";} 
if($numero>1){print "Es la $numero � vez  que visitas esta p�gina";} 
?> 
