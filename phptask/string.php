<?php
function reverseString($str) {
    $length = strlen($str);
    $reversed = '';
    
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    
    return $reversed;
}

$inputString = "welcome";
$reversedString = reverseString($inputString);
echo "Original String: $inputString<br>";
echo "Reversed String: $reversedString";
?>
