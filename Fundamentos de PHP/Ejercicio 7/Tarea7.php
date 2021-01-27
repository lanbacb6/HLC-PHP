<?php
    # determinando el tipo de variable
    $a1=347;
    $a2=2147483647;
    $a3=-2147483647;
    $a4=23.7678;
    $a6="347";
    $a8="Solo literal";
    $a9="12.3 Literal con número";
    $a10="";
    
    #forzando los tipos
    //Convierte a tipo real
    echo ((real)$a1),"<br>";
    //Convierte la variable a2 a double
    echo ((double)$a2),"<br>";
    //Convierte la varibale a3 a float
    echo ((float)$a3),"<br>";
    //Convierte la variable a4 ha integer
    echo ((integer)$a4),"<br>";
    //Convierte la variable a6 ha entero
    echo ((int)$a6),"<br>";
    //Convierte la variable a8 devuelve un 0
    echo ((int)$a8),"<br>";
    //Convierte la variable a9 a double solo se motrarar  12.3
    echo ((double)$a9),"<br>";
    //Convierte la variable a10 a int mostrarar un 0
    echo ((int)$a10),"<br>";

 
?> 