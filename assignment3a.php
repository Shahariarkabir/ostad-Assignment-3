<?php

function checkEvenOdd($num) {
    if ($num % 2 == 0) {
        return "$num is an even number.";
    } else {
        return "$num is an odd number.";
    }
}

$num = 8;
echo checkEvenOdd($num);

?>