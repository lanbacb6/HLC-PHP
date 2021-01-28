<?php
    $a=23;
    $b="pepe";
    //probando el operador ++;
        print_r("Probando el operador ++");
        //Incrementa el valor a 24
        echo ++$a;
        echo "<br>";
        //multiplica 24 * 2
        echo ++$a*2;
        echo "<br>";
        //Incrementa una letra
        echo ++$b;
        echo "<br>";
        //Sale 0
        echo ++$b*2;
        echo "<br>";
    //probando el operador --;
        print_r("Probando el operador --");
        echo "<br>";
        //resta dos
        echo --$a*2;
        $b="pepe";
        echo "<br>";
        $b="pepe";
        echo "<br>";
    //probando el operador +=n;
        print_r("Probando el operador +=n");
        echo "<br>";
        //suma 5 al valor que tiene
        echo $a+=5;
        echo "<br>";
        //muestra su valor.
        echo $a;
        echo "<br>";
        //multiplica su valor mas 5 despues
        echo 2*$a+=5;
        echo "<br>";
        echo 2*$a;
        echo "<br>";
        echo $b+=5;
        echo "<br>";
        echo $b;
        echo "<br>";
        echo 2*$b+=5;
        echo "<br>";
        echo 2*$b;
        echo "<br>";
    //probando el operador –=n;
        print_r("Probando el operador -=n");
        echo "<br>";
        //su valor le resta 5
        echo $a-=5;
        echo "<br>";
        echo $a;
        echo "<br>";
        //multiplica y despues resta 5
        echo 2*$a-=5;
        echo "<br>";
        echo 2*$a;
        echo "<br>";
        echo $b-=5;
        echo "<br>";
        echo $b;
        echo "<br>";
        //multiplica por dos y resta cico
        echo 2*$b-=5;
        echo "<br>";
        echo 2*$b;
        echo "<br>";
    //probando operadores de post-incremento;
        print_r("Probando el operadores de post-incremento");
        echo "<br>";
        //incrementa 1
        echo $a++;
        echo "<br>";
        //muesta su valor
        echo $a;
        echo "<br>";
        //multuiplica su valor de la variablE a y incrementa 1
        echo 2*$a++;
        echo "<br>";
        //multiplica su valor de la variable a
        echo 2*$a;
        echo "<br>";
        //quita 1 valor de la variable a
        echo $a--;
        echo "<br>";
        //muestra su valor a
        echo $a;
        echo "<br>";
        //mutlpicar su valor a 2 y le quita 1
        echo 2*$a--;
        echo "<br>";
        //multiplica su valor a por dos
        echo 2*$a;
?>