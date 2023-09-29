<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="num">Enter a number:</label>
        <input type="number" step="0.00000000001" name="num" id="num">
    </div>
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];
    echo intval($num);
}
