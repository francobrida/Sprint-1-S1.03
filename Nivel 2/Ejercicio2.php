<?php

$studentsQualifications = [
    "Luis" => [7, 4, 10, 8, 6],
    "Ana" => [6, 9, 5, 7, 8],
    "Carlos" => [8, 8, 9, 6, 7],
    "Marta" => [10, 9, 8, 9, 10],
    "Sofia" => [5, 6, 7, 0, 6]
];

$averages = calculateStudentsAverage($studentsQualifications);

function calculateStudentsAverage(array $studentsQualifications) : array {
    $averages = [];
    foreach ($studentsQualifications as $student => $qualifications) {
        $averages[$student] = calculateAverage($qualifications);
    }
    return $averages;
}

function calculateAverage(array $qualifications) : float {
    return array_sum($qualifications) / count($qualifications);
}

function calculateClassAverage(array $averages) : float {
    return array_sum($averages) / count($averages);
}

// Show results
echo "Students Averages:<br>";
foreach ($averages as $student => $average) {
    echo "$student: $average<br>";
}

echo "Total Class Average: " . calculateClassAverage($averages) . "<br>";

?>