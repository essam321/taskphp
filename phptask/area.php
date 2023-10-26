<?php

function calculateCircleArea($radius) {
    $area = M_PI * ($radius ** 2);
    return $area;
}


function calculateCircleCircumference($radius) {
    $circumference = 2 * M_PI * $radius;
    return $circumference;
}


$radius = 5; 


$area = calculateCircleArea($radius);
echo "The area of the circle with radius $radius is: $area\n";


$circumference = calculateCircleCircumference($radius);
echo "The circumference of the circle with radius $radius is: $circumference\n";
?>
