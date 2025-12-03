<?php

$arrayOfWords = ["apple", "banana", "cherry", "date", "elderberry"];
$character = 'a';

function allWordsContainChar ($arrayOfWords, $character) {

   for ($i = 0; $i < count($arrayOfWords); $i++){
    if (!str_contains($arrayOfWords[$i], $character)){
        return false;
    } 
   }

return true;
}

?>
