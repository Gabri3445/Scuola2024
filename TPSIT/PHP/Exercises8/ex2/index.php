<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $exp = 0;
    if (isset($_POST["remember"])) {
        $exp = time() + 60 * 60 * 24;
    }
    setcookie("username", $username, $exp);
    setcookie("password", $password, $exp);
    header("Location: PaginaRiservata.php");
}
?>

<h1>Login</h1>

<form method="post" action=<?php echo $_SERVER["PHP_SELF"] ?>>
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
    </div>
    <div>
        <label for="remember">Remember Me?</label>
        <input type="checkbox" name="remember" id="remember">
    </div>
    <input type="submit">
</form>
