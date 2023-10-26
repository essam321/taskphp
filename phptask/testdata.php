<?php
function calculateFactorial($number) {
    if ($number == 0) {
        return 1; 
    } else {
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}


$number = readline("Input the number: ");


$factorial = calculateFactorial($number);


echo "The Factorial of $number is: $factorial\n";
?>
