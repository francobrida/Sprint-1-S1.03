<?php
$arrayStrings = ["Hola", "Random", "Palabra", "not", "whattt"];
$arrayFiltered = array_map('stringIsEven', $arrayStrings);

function stringIsEven ($string) {
    return strlen($string) % 2 === 0;
} 

?>