<?php

$arrayOfWords = ["apple", "banana", "cherry", "date", "elderberry"];
$character = 'a';

function allWordsContainChar(array $arrayOfWords, string $character) :bool {

    foreach ($arrayOfWords as $word) {
        if (!str_contains($word, $character)){
            return false;
        } 
   }

return true;
}

?>
