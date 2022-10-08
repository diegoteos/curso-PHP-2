<?php


for ($i=0; $i < 11; $i++) { 

    $figura = str_repeat('&nbsp*', $i);
    echo $figura . '<br />';
}

echo '<br /><br /><br />';

for ($i=1; $i = 11; $i--) { 

    $figura = str_repeat('&nbsp*', ($i (10 - $i)));
    echo $figura . '<br />';
}

