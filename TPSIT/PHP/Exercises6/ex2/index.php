<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" >
    Enter 5 numbers
    <?php
    for ($i = 0; $i < 5; $i++) {
        echo "
        <div>
        <label for=$i>$i</label>
        <input required id=$i name=$i type='number'>
        </div>
        ";
    }
    ?>
    <input type="submit">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for ($i = 0; $i < 5; $i++) {
        $array[$i] = $_POST[$i];
    }
    $arrayB = array_slice($array, 0);
    echo "Array 1: ". implode(" ", $array) ."<br> Array 2: ". implode(" ", $arrayB);
}