<?php

$arrayNumbers = [3, 5, 2, 8, 1, 4];
$arraySumOfPrimes = array_reduce($arrayNumbers,'sumOnlyPrimes', 0);

function sumOnlyPrimes(int $acum, int $number) : int{
       if ($number <= 1) return $acum;

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) return $acum;
    }

    return $acum + $number;
}
echo "Sum of primes: $sumOfPrimes";

?>
