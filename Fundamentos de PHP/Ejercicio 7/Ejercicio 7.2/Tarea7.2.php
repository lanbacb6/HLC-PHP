<?php

    $variable1 = 6;
    $variable2 = 6;

    //El operador == compara los valores de dos variables devuelve 1 true y 0 false.
    if($variable1 == $variable2){
        echo "Cierto";
    }else{
        echo "falso";
    }
    echo "<br>";

    //El operador === es similar al anterior, pero realiza la comparación en sentido estricto.
    if($variable1 === $variable2){
        echo "Cierto";
    }else{
        echo "falso";
    }
    echo "<br>";

    $variable3 = 7;
    //El operador != devuelve 1 cuando los valores de las variables son distintos (en general ! indica negación, en este caso podríamos leer «no igual»)
    if($variable1 != $variable2){
        echo "Cierto";
    }else{
        echo "falso";
    }
    echo "<br>";

    //El operador < devuelve 1 cuando los valores de $variable1 son menores que los de $variable2 
    if($variable1 < $variable3){
        echo "Cierto";
    }else{
        echo "falso";
    }
    echo "<br>";

    //    Se comporta de forma idéntica al anterior. La única diferencia es que ahora aceptará como ciertos los casos de igualdad tanto en el caso de números como en el de códigos ASCII.
    if($variable1 <= $variable3){
        echo "Cierto";
    }else{
        echo "falso";
    }
    echo "<br>";

    //Es idéntico en el modo de funcionamiento– a $varibale1 < $variable2. Solo difiere de éste en el criterio de comparación que ahora requerirá que los valores de $A sean mayores que los de la variable $variable2.
    if($variable1 > $variable3){
        echo "Cierto";
    }else{
        echo "falso";
    }
    echo "<br>";   

    //Añade al anterior la posibilidad de certeza en caso de igualdad.

    if($variable1 >= $variable3){
        echo "Cierto";
    }else{
        echo "falso";
    }
    echo "<br>";




