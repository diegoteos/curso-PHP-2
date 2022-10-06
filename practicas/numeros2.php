<?php
$numero = '&nbsp';
if (isset($numero)) {
    for ($i = 1; $i < 12; $i++) {
        echo str_repeat("$numero", $i * 2);
        echo $i . "<br />";
        $i = $i + 1;
    }
} else {
    echo "Defina el numero de espacios que necesita despues de cada numero";
}
