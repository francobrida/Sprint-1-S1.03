<?php

$guestList1 = ["Alice", "Bob", "Charlie", "Mark", "Ethan"];
$guestList2 = ["Diana", "Ethan", "Fiona", "Bob", "Peter"];

$commonGuests = getCommonGuests($guestList1, $guestList2);
$exclusiveGuestsList1 = getExclusiveGuests($guestList1, $commonGuests);
$exclusiveGuestsList2 = getExclusiveGuests($guestList2, $commonGuests);

function getCommonGuests(array $list1, array $list2): array {

    $guestListInCommon = array_intersect($list1, $list2);
    return $guestListInCommon;
}

function getAllGuests(array $list1, array $list2): array {
    $fullGuestList = array_merge($list1, $list2);
    $withoutDuplicates = array_unique($fullGuestList);

    return $withoutDuplicates;
}

function getExclusiveGuests(array $list, array $commonGuests): array {

    $guestExclusives = array_diff($list, $commonGuests);
    return $guestExclusives;
}

?>