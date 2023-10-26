<form method="post" action=<?php echo $_SERVER["PHP_SELF"] ?>>
<div>
    <label for="login">Login:</label>
    <input required type="text" id="login" name="login"/>
</div>
<div>
    <label for="pwd">Password:</label>
    <input required type="text" id="pwd" name="pwd"/>
</div>
<input type="submit">
</form>

<?php

function checkInput($log, $pass) {
    $login = "admin";
    $password = "nimda";
    if ($log == $login && $pass == $password) {
        return "Login and password are ok";
    }
    else if ($log != $login && $pass == $password) {
        return "Login is wrong";
    }
    else if ($log == $login && $pass != $password) {
        return "Password is wrong";
    }
    else if ($log != $login && $pass != $password) {
        return "Login and password are wrong";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo checkInput($_POST["login"],$_POST["pwd"]);
}