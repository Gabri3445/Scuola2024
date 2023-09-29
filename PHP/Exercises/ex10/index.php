<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="name" placeholder="Enter a string with a capital letter">
    <input type="submit" value="Submit">
</form>

<?php
//check for at least one capital letter at any position
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    foreach (str_split($name) as $letter) {
        if(ctype_upper($letter)) {
            echo "The string contains a capital letter";
            exit;
        }
    }
    echo "The string does not contain a capital letter";
    exit;
}