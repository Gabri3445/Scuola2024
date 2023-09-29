<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    <div>
        <label for="var">Insert variable</label>
        <input type="text" required name="var" id="var">
    </div>
    <div>
        <label>
            Transform to ascii char
            <input type="radio" name="transform" value="char">
        </label>
    </div>
    <div>
        <label>
            Transform to ascii number
            <input type="radio" name="transform" value="num">
        </label>
    </div>
    <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $var = $_POST["var"];
    $transform = $_POST["transform"];
    if ($transform == "char") {
        if (is_numeric($var)) {
            echo "Char: ".chr($var)."<br>";
        }
        else {
            echo "Invalid input";
        }

    }
    else {
        if (ctype_alpha($var)) {
            echo "Number: ".ord($var)."<br>";
        }
        else {
            echo "Invalid input";
        }
    }
}