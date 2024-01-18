<?php
session_start();

if (isset($_SESSION["logged"])) {
    if (!isset($_SESSION['count2']))
        $_SESSION['count2'] = 1;
    else
        $_SESSION['count2']++;
    echo "This page has been viewed " . $_SESSION["count2"] . " times <br>";
    echo "Your session id is ". session_id();
} else {
    echo "Not logged in<br>";
    echo "<a href='../index.php'>Go back</a>";
}