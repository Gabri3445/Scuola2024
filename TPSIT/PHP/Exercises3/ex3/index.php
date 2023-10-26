<form method="post" action=<?php echo $_SERVER["PHP_SELF"] ?>>
<div>
<label for="a">A:</label>
<input required type="number" id="a" name="a">
<div>
<div>
<label for="B">B:</label>
<input required v type="number" id="B" name="b">
<div>
<div>
<label for="C">C:</label>
<input required type="number" id="C" name="c">
<div>
<input type="submit"/> <br>
</form>

<?php

function calcSecDegEq($a, $b, $c): string {
    $a = (float) $a;
    $b = (float) $b;
    $c = (float) $c;
    $delta = pow($b, 2) - 4 * $a * $c;
    if ($delta < 0) {
        return "Delta is less than 0";
    }
    $x1 = (-$b + sqrt($delta)) / (2* $a);
    $x2 = (-$b - sqrt($delta)) / (2* $a);
    if ($x1 == $x2) {
        return "The solutions are the same:". number_format
    }
    return "Results are: ". number_format($x1, 3) . ", " . number_format($x2, 3);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    echo calcSecDegEq($a, $b, $c);
}