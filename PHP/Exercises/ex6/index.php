<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    <label for="var">Insert variable</label>
    <input type="text" required name="var" id="var">
    <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $var = $_POST["var"];
    echo "Variable in integer: ".(int) $var. "<br>";
    echo "Variable in float: ".(float) $var. "<br>";
    echo "Variable in boolean: ".(bool) $var. "<br>";
    echo "Variable in string: ". $var. "<br>";
}