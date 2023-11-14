<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div>
        <label for="day">Day:</label>
        <select name="day" id="day" required>
            <option value="" disabled selected>Select a day</option>
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
    </div>
    <div>
        <label for="month">Month:</label>
        <select name="month" id="month" required>
            <option value="" disabled selected>Select a month</option>
            <?php
            for ($i = 1; $i <= 12; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
    </div>
    <div>
        <label for="year">Year:</label>
        <input type="number" name="year" id="year" min="1900" max="2100" required>
    </div>
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $day = $_POST["day"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    $dateEntered = mktime(0, 0, 0, $month, $day, $year);
    $today = time();
    $daysPassed = ($today - $dateEntered) / (60 * 60 * 24);
    $daysPassed = round($daysPassed);
    $daysPassed = abs($daysPassed);
    echo "Days passed: $daysPassed";

}