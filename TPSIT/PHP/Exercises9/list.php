<?php
session_start();
if (isset($_SESSION["logged"])) {
    echo "<h1> Welcome </h1>
<a href='pages/page1.php' >Page 1</a> <br>
<a href='pages/page2.php' >Page 2</a> <br>
<a href='pages/page3.php' >Page 3</a> <br>
<br>
<a href='exit.php'>Exit the site</a>";
} else {
    echo "Not logged in<br>";
    echo "<a href='index.php'>Go back</a>";
}
