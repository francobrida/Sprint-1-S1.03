<?php

$arrayNumbers = [3, 5, 2, 8, 17, 4];

function sumOnlyPrimes(int $acum, int $number) : int {
    
    if ($number <= 1) return $acum;

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) return $acum;
    }

    return $acum + $number;
}

$arraySumOfPrimes = array_reduce($arrayNumbers,'sumOnlyPrimes', 0);

echo "Sum of primes: $arraySumOfPrimes";

?>
