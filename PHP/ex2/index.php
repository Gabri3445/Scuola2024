<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div>
        <label for="name">Name: </label>
        <input type="text" required id="name" name="name">
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="text" required id="password" name="password">
    </div>
    <br>
    <div>
       Which HTML arguments would you like to learn more about: <br>
        <div>
            <label for="info">Information about html</label>
            <input type="checkbox" id="info" name="info" value="info" />
        </div>
        <div>
            <label for="images">Images</label>
            <input type="checkbox" id="images" name="images" value="images" />
        </div>
        <div>
            <label for="url">Urls</label>
            <input type="checkbox" id="url" name="url" />
        </div>
    </div>
    <input type="submit" value="Submit">
</form>

<?php
$username = "username";
$password = "pwd";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["name"] == $username && $_POST["password"] == $password) {
        echo "Name: ".$_POST["name"]."<br>";
        echo "Password: ".$_POST["password"]."<br>";
        if (isset($_POST["info"])) {
            echo "Info was checked<br>";
        }
        if (isset($_POST["images"])) {
            echo "Images was checked<br>";
        }
        if (isset($_POST["url"])) {
            echo "Url was checked<br>";
        }
    }
    else {
        echo "Wrong password or username";
    }
}
?>