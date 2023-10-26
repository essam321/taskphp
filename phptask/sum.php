<?php

function sumNumbersFrom1To10() {
    $sum = 0;
    
    for ($i = 1; $i <= 10; $i++) {
        $sum += $i;
    }
    
    return $sum;
}

$sum = sumNumbersFrom1To10();
echo "The sum of numbers from 1 to 10 is: $sum";

?>
