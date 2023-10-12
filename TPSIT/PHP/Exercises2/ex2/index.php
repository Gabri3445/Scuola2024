<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <div>
        <label>
            First Number:
            <input name="first" type="number">
        </label>
    </div>
    <div>
        <label>
            Second Number:
            <input name="second" type="number">
        </label>
    </div>
    <input type="submit">

</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $first = $_POST['first'];
    $second = $_POST['second'];
    if (is_numeric($first) && is_numeric($second)){
        if ($first > $second) {
            echo "GCD of $first and $second is ".gcd($first, $second);
            echo "<br>";
            echo "LCM of $first and $second is ".($first * $second) / gcd($first, $second);
            echo "<br>";
        }
        else{
            echo "First number must be greater than second number";
        }
    }
    else{
        echo 'Enter two numbers';
    }
}

function gcd($a, $b)
{
    if ($b == 0)
        return $a;
    return gcd($b, $a % $b);
}