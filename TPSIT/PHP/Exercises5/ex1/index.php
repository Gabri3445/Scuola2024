<?php
srand((double) microtime() * 1000000);
for ($i = 0; $i < 10; $i++) {
    $numbers[] = rand(10, 100);
}

echo "Original array: ";
foreach ($numbers as $number) {
    echo $number . " ";
}

$numbers = array_reverse($numbers);

echo "<br>Reversed array: ";
foreach ($numbers as $number) {
    echo $number . " ";
}
?>
