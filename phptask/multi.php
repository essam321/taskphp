<?php
function isMultipleOf5Or8($number) {
    if ($number <= 0) {
        return false;
    }

    if ($number % 5 == 0 || $number % 8 == 0) {
        return true; 
    } else {
        return false; 
    }
}


$number1 = 20;
$number2 = 12;
$number3 = 7;

if (isMultipleOf5Or8($number1)) {
    echo "$number1 is a multiple of 5 or 8.";
} else {
    echo "$number1 is not a multiple of 5 or 8.";
}

echo "<br>";

if (isMultipleOf5Or8($number2)) {
    echo "$number2 is a multiple of 5 or 8.";
} else {
    echo "$number2 is not a multiple of 5 or 8.";
}

echo "<br>";

if (isMultipleOf5Or8($number3)) {
    echo "$number3 is a multiple of 5 or 8.";
} else {
    echo "$number3 is not a multiple of 5 or 8.";
}
?>
