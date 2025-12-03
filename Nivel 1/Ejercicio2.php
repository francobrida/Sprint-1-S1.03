<?php

$array = ["A1", "B2", "C3", "D4", "E5", "F6"];

echo "Tamaño del array:" . count($array) . "\n";

unset($array[2]);
$array = array_values($array);

echo "Tamaño del array:" . count($array) . "\n";
foreach ($array as $element) {
    echo $element . " ";
} // Output to check items after removal

?>