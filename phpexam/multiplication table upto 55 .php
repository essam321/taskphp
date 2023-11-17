<?php

echo "Multiplication Table up to 5x5:\n";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        $result = $i * $j;
        echo "$i * $j = $result\t";
    }
    echo "\n"; 
}

?>
