<?php
$numero = '&nbsp';
if (isset($numero)) {
    for ($i = 0; $i < 11; $i++) {
        echo str_repeat("$numero", $i * 2);
        echo $i . "<br />";
    }
} else {
    echo "Defina el numero de espacios que necesita despues de cada numero";
}
