<?php

$arrayNumbers = [3, 5, 2, 8, 1, 4];
$arrayNumbersCubed = array_map('numberCubed', $arrayNumbers);

function numberCubed($number) {
    return $number ** 3;
}

?>