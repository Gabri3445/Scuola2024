<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="number">Enter a number (decimal):</label>
    <input type="number" id="number" name="number" required><br><br>

    <label>Select a bitwise operation:</label><br>
    <input type="radio" id="shift-right" name="operation" value="shift-right" required>
    <label for="shift-right">Shift Right</label><br>

    <input type="radio" id="shift-left" name="operation" value="shift-left" required>
    <label for="shift-left">Shift Left</label><br>

    <input type="radio" id="not" name="operation" value="not" required>
    <label for="not">NOT</label><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = (int)$_POST["number"];
    $operation = $_POST["operation"];

    switch ($operation) {
        case 'shift-right':
            $result = $number >> 1;
            break;
        case 'shift-left':
            $result = $number << 1;
            break;
        case 'not':
            $result = ~$number;
            break;
        default:
            $result = "Invalid operation.";
            break;
    }

    echo "<p>Result in binary: " . decbin($result) . "</p>";

    echo "<p>Result in decimal: $result</p>";
}
?>
