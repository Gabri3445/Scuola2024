<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
    <div>
        <label for="position">Position</label>
        <input type="text" id="position" required name="position" placeholder="Position">    
    </div>
    <div>
        <label for="date">Date</label>
        <input type="text"  id="date" required name="date" placeholder="Date">
    </div>
    <div>
        <label for="hour">Hour</label>
        <input type="number" id="hour" required name="hour" placeholder="Hour">
    </div>
    <div>
        Type:
        <label for="OFC">OFC</label>
        <input type="radio" required id="OFC" name="type" value="OFC">
        <label for="AMB">AMB</label>
        <input type="radio" id="AMB" name="type" value="AMB">
        <label for="ORA">ORA</label>
        <input type="radio" id="ORA" name="type" value="ORA">
    </div>
    <div>
        <label for="humidity">Humidity</label>
        <select name="humidity" required id="humidity">
            <option value="">Choose</option>
            <option value="relative">Relative</option>
            <option value="absolute">Absolute</option>
        </select>
    </div>
    <div>
        <label for="currentWeather">Current weather</label>
        <select name="currentWeather" required id="currentWeather">
            <option value="">Choose</option>
            <option value="clear">Clear</option>
            <option value="rain">Rain</option>
            <option value="windy">Windy</option>
            <option value="humid">Humid</option>
            <option value="fog">Fog</option>
        </select>
    </div>
    <div>
        <label for="Altitude">Altitude</label>
        <input type="number" id="Altitude" required name="altitude" min="0" max="10000" placeholder="Altitude">
    </div>
    <input type="submit" value="Submit">
</form>

<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $position = $_POST['position'];
    $date = $_POST['date'];
    $hour = $_POST['hour'];
    $type = $_POST['type'];
    $humidity = $_POST['humidity'];
    $currentWeather = $_POST['currentWeather'];
    $altitude = $_POST['altitude'];
    echo $position, '<br>';
    echo $date, '<br>';
    echo $hour, '<br>';
    echo $type, '<br>';
    echo $humidity, '<br>';
    echo $currentWeather, '<br>';
    echo $altitude, '<br>';
    echo '<br>';
}
?>