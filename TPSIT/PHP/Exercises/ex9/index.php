<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="number1" placeholder="number1">
    <input type="text" name="number2" placeholder="number2">
    <input type="text" name="number3" placeholder="number3">
    <input type="text" name="number4" placeholder="number4">
    <input type="text" name="number5" placeholder="number5">
    <input type="text" name="number6" placeholder="number6">
    <input type="text" name="number7" placeholder="number7">
    <input type="text" name="number8" placeholder="number8">
    <input type="text" name="number9" placeholder="number9">
    <input type="text" name="number10" placeholder="number10">
    <input type="submit" value="Submit">
</form>

<?php
//enter 10 numbers in 10 different inputs, and then submit and check that they are all numbers, if not print a error message
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $numbers = $_POST;
    $errors = [];
    foreach ($numbers as $number){
        if(!is_numeric($number)){
            $errors[] = $number;
            echo "Error: $number is not a number";
            break;
        }
    }
    if(empty($errors)){
        echo "All numbers are numbers";
        echo "<br>";
    }
}