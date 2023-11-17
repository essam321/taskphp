<?php

function removeDuplicates($sortedList) {
    $length = count($sortedList);

    if ($length == 0) {
        return [];
    }

    $result = [$sortedList[0]];

    for ($i = 1; $i < $length; $i++) {
        if ($sortedList[$i] != $sortedList[$i - 1]) {
            $result[] = $sortedList[$i];
        }
    }

    return $result;
}

$sortedList = [1, 2, 2, 3, 4, 4, 4, 5, 6, 6];
$uniqueList = removeDuplicates($sortedList);

echo "Original List: " . implode(', ', $sortedList) . "\n";
echo "List with Duplicates Removed: " . implode(', ', $uniqueList) . "\n";

?>
