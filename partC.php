<?php

function isPrime($num) {
    if ($num <= 1) return false;
    if ($num <= 3) return true;

    if ($num % 2 == 0 || $num % 3 == 0) return false;

    for ($i = 5; $i * $i <= $num; $i += 6) {
        if ($num % $i == 0 || $num % ($i + 2) == 0) return false;
    }

    return true;
}

function answer($n) {
    $primeString = "";
    $num = 2;

    while (strlen($primeString) < $n + 5) {
        if (isPrime($num)) {
            $primeString .= strval($num);
        }
        $num++;
    }

    return substr($primeString, $n, 5);
}

// Test cases
echo answer(0) . "\n"; // Output: 23571
echo answer(1) . "\n"; // Output: 35711
echo answer(2) . "\n"; // Output: 57111
echo answer(3) . "\n"; // Output: 71113
echo answer(100) . "\n"; // Output: 19319
echo answer(139) . "\n"; // Output: 26927


?>