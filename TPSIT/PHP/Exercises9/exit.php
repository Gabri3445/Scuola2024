<?php
session_start();
if (isset($_SESSION["logged"])) {
    session_destroy();
    echo "Goodbye<br>";
    echo "<a href='index.php'>Go back</a>";
} else {
    echo "Not logged<br>";
    echo "<a href='index.php'>Go back</a>";
}
