<?php

$guestList1 = ["Alice", "Bob", "Charlie", "Mark", "Ethan"];
$guestList2 = ["Diana", "Ethan", "Fiona", "Bob", "Peter"];
$guestListInCommon = guestsInCommon($guestList1, $guestList2);
$exclusivesInList1 = exclusiveGuests($guestList1, $guestListInCommon);
$exclusivesInList2 = exclusiveGuests($guestList2, $guestListInCommon);

function guestsInCommon ($guestList1, $guestList2) {

    $guestListInCommon = array_intersect($guestList1, $guestList2);
    return $guestListInCommon;
}

function allGuests ($guestList1, $guestList2){
    $fullGuestList = array_merge($guestList1, $guestList2);
    $withoutDuplicates = array_unique($fullGuestList);

    return $withoutDuplicates;
}

function exclusiveGuests ($guestList, $guestListInCommon){

    $guestExclusives = array_diff($guestList, $guestListInCommon);
    return $guestExclusives;
}



?>