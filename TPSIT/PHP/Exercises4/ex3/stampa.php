<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correct_password = md5("pwd");
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    if ($password != $confirm_password) {
        echo "Passwords do not match";
        return;
    }
    $password = md5($password);
    if ($password != $correct_password) {
        echo "Incorrect password";
        return;
    }
    echo "Password is correct";
}