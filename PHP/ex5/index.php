<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="number" min="1" max="120" name="age" id="age" required>
    </div>
    <table border="1" style="text-align: center">
        <tr>
            <td>Frequency</td>
            <td>Discount</td>
        </tr>
        <tr>
            <td>
                Monthly<br>
                Bimonthly<br>
                Three-Monthly<br>
                Yearly
            </td>
            <td>
                None<br>
                10%<br>
                15%<br>
                20%
            </td>
        </tr>
    </table>
    <div>
        <label for="freq">Frequency of payment</label>
        <select name="freq" id="freq" required>
            <option value="">Choose</option>
            <option value="monthly">Monthly</option>
            <option value="bimonthly">Bimonthly</option>
            <option value="three-monthly">Three-Monthly</option>
            <option value="yearly">Yearly</option>
        </select>
    </div>
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $freq = $_POST["freq"];

    $discountPerc = determineDiscount($freq);
    $price = determinePrice($age);

    $yearlyPrice = $price * 12;

    if ($discountPerc != 0) {
        $yearlyPrice = $yearlyPrice - ($yearlyPrice * $discountPerc / 100);
    }

    echo "
    <table border='1' style='text-align: center'>
        <tr>
            <td colspan='3'>
            Data entered
            </td>
            <td>
            Output from the server
            </td>
        </tr>
        <tr>
            <td>Name</td>
            <td>Age</td>
            <td>Payment</td>
            <td>Output</td>
        </tr>
        <tr>
            <td>$name</td>
            <td>$age</td>
            <td>$freq</td>
            <td>The price for one year is: $yearlyPrice €</td>
        </tr>
    </table>
    ";
}

function determineDiscount($freq): int
{
    if ($freq == "monthly") {
        return 0;
    }
    if ($freq == "bimonthly") {
        return 10;
    }
    if ($freq == "three-monthly") {
        return 15;
    }
    if ($freq == "yearly") {
        return 20;
    }
    return 0;
}

function determinePrice($age): int
{
    if ($age < 18 || $age > 64) {
        return 35;
    }
    return 45;
}