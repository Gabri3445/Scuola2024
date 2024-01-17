<?php
$username = $_POST["username"];
$password = $_POST["password"];
if ($username == "user" && $password == "pwd") {
    session_start();
    $_SESSION["logged"] = true;
    echo "Logged in <br>";
    echo "<a href='list.php'>Go to list</a>";
} else {
    echo "Wrong password";
}