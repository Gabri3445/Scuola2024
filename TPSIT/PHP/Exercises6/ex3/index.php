<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" >
    Enter 6 numbers
    <?php
    for ($i = 0; $i < 6; $i++) {
        echo "
        <div>
        <label for=$i>$i</label>
        <input required id=$i name=$i type='number'>
        </div>
        ";
    }
    ?>
    <div>
        <label for='number'>Enter a number</label>
        <input type='number' name='number' id='number'>
    </div>
    <input type="submit">
</form>



<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for ($i = 0; $i < 6; $i++) {
        $array[$i] = $_POST[$i];
    }
    $number = $_POST["number"];
    if (array_even_sum($array) <= $number) {
        echo "Passed" . array_even_sum($array);
    }
    else {
        echo "Not passed" . array_even_sum($array);
    }
}

function array_even_sum($array) {
    $length = count($array);
    $sum = 0;

    for ($i = 0; $i < $length; $i++) {
        echo $i;
        if ($i % 2 == 0) {
            $sum += $array[$i];
        }
    }

    return $sum;
}