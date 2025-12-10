<?php

$guestList1 = ["Alice", "Bob", "Charlie", "Mark", "Ethan"];
$guestList2 = ["Diana", "Ethan", "Fiona", "Bob", "Peter"];

$commonGuests = array_intersect($guestList1, $guestList2);
$exclusiveGuestsList1 = array_diff($guestList1, $commonGuests);
$exclusiveGuestsList2 = array_diff($guestList2, $commonGuests);

function getAllGuests(array $list1, array $list2): array {
    $fullGuestList = array_merge($list1, $list2);
    $withoutDuplicates = array_unique($fullGuestList);

    return $withoutDuplicates;
}

?>