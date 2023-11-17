<?php

function generateUniqueRandomNumbers($min, $max, $count) {
    if ($count > ($max - $min + 1)) {
        return false;
    }

    $numbers = range($min, $max);
    shuffle($numbers);

    return array_slice($numbers, 0, $count);
}

$minRange = 1;
$maxRange = 100;
$numberOfRandomNumbers = 10;

$uniqueRandomNumbers = generateUniqueRandomNumbers($minRange, $maxRange, $numberOfRandomNumbers);

if ($uniqueRandomNumbers !== false) {
    echo "Generated unique random numbers: " . implode(', ', $uniqueRandomNumbers);
} else {
    echo "Unable to generate unique random numbers. Count exceeds the range.";
}
?>
