<?php

$arrayNumbers = [3, 5, 2, 8, 1, 4];
$arrayNumbersCubed = array_map('cubeNumber', $arrayNumbers);

function cubeNumber(float $number) : float {
    return $number ** 3;
}

foreach ($arrayNumbersCubed as $cubedNumber){
    echo $cubedNumber . " ";
}

?>