<?php
$numbers = array();

for ($i = 0; $i < 20; $i++) {
    $numbers[] = rand(1, 10);
}

$occurrences = array_count_values($numbers);
$maxOccurrences = max($occurrences);

echo "Array: ";
for ($i = 0; $i < 20; $i++) {
    echo $numbers[$i] . " ";
}

if ($maxOccurrences > 1) {
    echo "<br><br>Number with the highest occurrences: ";
    for ($i = 0; $i < 20; $i++) {
        if ($occurrences[$numbers[$i]] == $maxOccurrences) {
            echo $numbers[$i];
            break; // Stop the loop after the first occurrence is found
        }
    }
} else {
    echo "<br><br>No repeated numbers.";
}
?>

