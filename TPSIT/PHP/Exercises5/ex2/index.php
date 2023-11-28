<?php
srand((double) microtime() * 1000000);
$numbers = array();
$oddCount = 0;
$evenCount = 0;

for ($i = 0; $i < 20; $i++) {
    $numbers[] = rand(1, 100);
    echo $numbers[$i] . " ";

    if ($numbers[$i] % 2 == 0) {
        $evenNumbers[] = $numbers[$i];
        $evenCount++;
    } else {
        $oddNumbers[] = $numbers[$i];
        $oddCount++;
    }
}

echo "<br><br>Even Numbers: $evenCount<br>";
echo "Odd Numbers: $oddCount<br>";

echo "<br>Even Numbers: ";
for ($i = 0; $i < $evenCount; $i++) {
    echo $evenNumbers[$i] . " ";
}

echo "<br>Odd Numbers: ";
for ($i = 0; $i < $oddCount; $i++) {
    echo $oddNumbers[$i] . " ";
}
?>

