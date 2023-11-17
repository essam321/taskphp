<?php

function fibonacci($n) {
    $fibonacciSeries = array();
    
    if ($n >= 1) {
        $fibonacciSeries[] = 0;
    }
    if ($n >= 2) {
        $fibonacciSeries[] = 1;
    }
    
    for ($i = 2; $i < $n; $i++) {
        $fibonacciSeries[] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
    }
    
    return $fibonacciSeries;
}

$numTerms = 10;
$fibonacciSeries = fibonacci($numTerms);

echo "Fibonacci Series up to $numTerms terms: " . implode(", ", $fibonacciSeries);

?>
