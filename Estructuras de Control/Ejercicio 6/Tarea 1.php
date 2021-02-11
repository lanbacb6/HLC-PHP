<?php
if ($i == 0) {
    echo "i es igual a 0";
} elseif ($i == 1) {
    echo "i es igual a 1";
} elseif ($i == 2) {
    echo "i es igual a 2";
}

switch ($i) {
    case 0: // si la variable tiene como valor 0 mostrara este caso
        echo "i es igual a 0";
        break;
    case 1: // si la variable tiene como valor 1 mostrara este caso
        echo "i es igual a 1";
        break;
    case 2: // si la variable tiene como valor 2 mostrara este caso
        echo "i es igual a 2";
        break;
}
?>