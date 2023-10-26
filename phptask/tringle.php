<?php
function displayRightAngleTriangle($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}


$numberOfRows = 5;
displayRightAngleTriangle($numberOfRows);
?>
