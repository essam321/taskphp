<?php
function add($num1, $num2) {
    return $num1 + $num2;
}

function subtract($num1, $num2) {
    return $num1 - $num2;
}

function multiply($num1, $num2) {
    return $num1 * $num2;
}

function divide($num1, $num2) {
    if ($num2 == 0) {
        return "Cannot divide by zero";
    }
    return $num1 / $num2;
}


$num1 = 10;
$num2 = 5;

echo "Addition: " . add($num1, $num2) . "\n";
echo "Subtraction: " . subtract($num1, $num2) . "\n";
echo "Multiplication: " . multiply($num1, $num2) . "\n";
echo "Division: " . divide($num1, $num2) . "\n";
?>
