<?php
$arrayStrings = ["Hola", "Random", "Palabra", "not", "whattt"];
$arrayFiltered = array_filter($arrayStrings, 'hasEvenLength');

function hasEvenLength(string $string): bool {
    return strlen($string) % 2 === 0;
}

foreach ($arrayFiltered as $string){
    echo $string . " ";
}

?>

