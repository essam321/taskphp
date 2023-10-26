<?php

function inputElements($n) {
    $arr = array();
    for ($i = 0; $i < $n; $i++) {
        echo "Enter element - $i: ";
        $element = trim(fgets(STDIN));
        $arr[] = $element;
    }
    return $arr;
}

function printArray($arr) {
    $count = count($arr);
    for ($i = 0; $i < $count; $i++) {
        echo "element - $i : " . $arr[$i] . "\n";
    }
}

echo "Enter the number of elements in the array: ";
$n = trim(fgets(STDIN));

if (!is_numeric($n)) {
    echo "Please enter a valid number for the number of elements.\n";
    exit;
}

$elements = inputElements($n);

printArray($elements);

?>
