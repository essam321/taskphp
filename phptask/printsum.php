<?php

function addNumbers($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum;
}


$number1 = 5;
$number2 = 7;


$result = addNumbers($number1, $number2);
echo "The sum of $number1 and $number2 is: $result";
?>
