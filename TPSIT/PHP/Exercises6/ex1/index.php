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
    <div>
        <label for='number'>Enter a number</label>
        <input type='number' name='number' id='number'>
    </div>
    <input type="submit">
</form>



<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for ($i = 0; $i < 5; $i++) {
        $array[$i] = $_POST[$i];
    }
    echo "The number is present ". countNumberOccurrences($array, $_POST["number"]) ." times";
}


function countNumberOccurrences($array, $number) {
    $count = 0;
    $arrayLength = count($array);

    for ($i = 0; $i < $arrayLength; $i++) {
        if ($array[$i] == $number) {
            $count++;
        }
    }

    return $count;
}