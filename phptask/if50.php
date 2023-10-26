<?php
function checkNumbers($num1, $num2) {
    if ($num1 === 50 || $num2 === 50 || $num1 + $num2 === 50) {
        return true;
    } else {
        return false;
    }
}


$num1 = 25;
$num2 = 25;

if (checkNumbers($num1, $num2)) {
    echo "True";
} else {
    echo "False";
}
?>
