<?php
function checkNumber($number) {
    if ($number > 0) {
        return "Positive";
    } elseif ($number < 0) {
        return "Negative";
    } else {
        return "Zero";
    }
}

$number = 10; 
$result = checkNumber($number);
echo "The number $number is $result.";
?>
