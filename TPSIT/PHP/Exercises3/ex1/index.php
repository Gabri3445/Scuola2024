<form method="post" action=<?php echo $_SERVER["PHP_SELF"] ?> >
<label for="cents">Insert the amount in cents</label>
<input type="number" id="cents" name="cents">
<input type="submit">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $amount = $_POST["cents"];

        if (is_numeric($amount) || $amount > 0) {
            $amount = (int)$amount;

            echo "Amount: " . number_format($amount / 100, 2) . " euro<br>";
            echo "Coins necessary:<br>";

            $euro2 = intdiv($amount, 200);
            $amount %= 200;
            $euro1 = intdiv($amount, 100);
            $amount %= 100;
            $cent50 = intdiv($amount, 50);
            $amount %= 50;
            $cent20 = intdiv($amount, 20);
            $amount %= 20;
            $cent10 = intdiv($amount, 10);
            $amount %= 10;
            $cent5 = intdiv($amount, 5);
            $amount %= 5;
            $cent2 = intdiv($amount, 2);
            $amount %= 2;
            $cent1 = $amount;


            if ($euro2 > 0) echo "$euro2 x 2 euro<br>";
            if ($euro1 > 0) echo "$euro1 x 1 euro<br>";
            if ($cent50 > 0) echo "$cent50 x 50 cent<br>";
            if ($cent20 > 0) echo "$cent20 x 20 cent<br>";
            if ($cent10 > 0) echo "$cent10 x 10 cent<br>";
            if ($cent5 > 0) echo "$cent5 x 5 cent<br>";
            if ($cent2 > 0) echo "$cent2 x 2 cent<br>";
            if ($cent1 > 0) echo "$cent1 x 1 cent<br>";

            for ($i = 0; $i < $euro2; $i++) {
                echo "<img src='./static/2eur.png' width='256' height='256' alt='2 euro coin'>";
            }

            for ($i = 0; $i < $euro1; $i++) {
                echo "<img src='./static/1eur.png' width=256' height=256' alt='1 euro coin'>";
            }

            for ($i = 0; $i < $cent50; $i++) {
                echo "<img src='./static/50cent.png' width='256' height='256' alt='50 cent coin'>";
            }

            for ($i = 0; $i < $cent20; $i++) {
                echo "<img src='./static/20cent.png' width='256' height='256' alt='20 cent coin'>";
            }

            for ($i = 0; $i < $cent10; $i++) {
                echo "<img src='./static/10cent.png' width='256' height='256' alt='10 cent coin'>";
            }

            for ($i = 0; $i < $cent5; $i++) {
                echo "<img src='./static/5cent.png' width='256' height='256' alt='5 cent coin'>";
            }

            for ($i = 0; $i < $cent2; $i++) {
                echo "<img src='./static/2cent.png' width='256' height='256' alt='2 cent coin'>";
            }

            for ($i = 0; $i < $cent1; $i++) {
                echo "<img src='./static/1cent.png' width='256' height='256' alt='1 cent coin'>";
            }
        } else {
            echo "Enter a valid number of cents";
        }
    }