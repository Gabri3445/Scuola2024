<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="number1">Enter the first number (decimal):</label>
    <input type="number" id="number1" name="number1" required><br><br>

    <label for="number2">Enter the second number (decimal):</label>
    <input type="number" id="number2" name="number2" required><br><br>

    <label>Select a bitwise operation:</label><br>
    <input type="radio" id="and" name="operation" value="and" required>
    <label for="and">AND</label><br>

    <input type="radio" id="or" name="operation" value="or" required>
    <label for="or">OR</label><br>

    <input type="radio" id="xor" name="operation" value="xor" required>
    <label for="xor">XOR</label><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $number1 = (int)$_POST["number1"];
    $number2 = (int)$_POST["number2"];
    $operation = $_POST["operation"];

    switch ($operation) {
        case 'and':
            $result = $number1 & $number2;
            break;
        case 'or':
            $result = $number1 | $number2;
            break;
        case 'xor':
            $result = $number1 ^ $number2;
            break;
        default:
            $result = "Invalid operation.";
            break;
    }

    echo "<p>Number 1 in binary: " . decbin($number1) . "</p>";
    echo "<p>Number 2 in binary: " . decbin($number2) . "</p>";
    echo "<p>Result in binary: " . decbin($result) . "</p>";

    echo "<p>Number 1 in decimal: $number1</p>";
    echo "<p>Number 2 in decimal: $number2</p>";
    echo "<p>Result in decimal: $result</p>";
}
?>