<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    <h1>First Squad</h1>
    <div>
        <label for="name1">Name: </label>
        <input name="name1" id="name1" required type="text"/>
    </div>
    <div>
        <label for="won1">Matches won: </label>
        <input name="won1" id="won1" required type="number"/>
    </div>
    <div>
        <label for="draw1">Matches drawn: </label>
        <input name="draw1" id="draw1" required type="number"/>
    </div>
    <div>
        <label for="lost1">Matches lost: </label>
        <input name="lost1" id="lost1" required type="number"/>
    </div>
    <h1>Second Squad</h1>
    <div>
        <label for="name2">Name: </label>
        <input name="name2" id="name2" required type="text"/>
    </div>
    <div>
        <label for="won2">Matches won: </label>
        <input name="won2" id="won2" required type="number"/>
    </div>
    <div>
        <label for="draw2">Matches drawn: </label>
        <input name="draw2" id="draw2" required type="number"/>
    </div>
    <div>
        <label for="lost2">Matches lost: </label>
        <input name="lost2" id="lost2" required type="number"/>
    </div>
    <br>
    <input type="submit">
    <br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstSquad = [
        "name" => $_POST["name1"],
        "won" => (int)$_POST["won1"],
        "draw" => (int)$_POST["draw1"],
        "lost" => (int)$_POST["lost1"]
    ];
    $secondSquad = [
        "name" => $_POST["name2"],
        "won" => (int)$_POST["won2"],
        "draw" => (int)$_POST["draw2"],
        "lost" => (int)$_POST["lost2"]
    ];
    $firstSquadPoints = ($firstSquad["won"] * 2) + $firstSquad["draw"];
    $secondSquadPoints = ($secondSquad["won"] * 2) + $secondSquad["draw"];
    $firstSquadPlayedMatches = $firstSquad["won"] + $firstSquad["draw"] + $firstSquad["lost"];
    $secondSquadPlayedMatches = $secondSquad["won"] + $secondSquad["draw"] + $secondSquad["lost"];
    $differentMatches = "";
    if ($firstSquadPlayedMatches != $secondSquadPlayedMatches) {
        $differentMatches = "The two squads have played a different number of matches";
    }
    $leaderboardString = "";
    if ($firstSquadPoints > $secondSquadPoints) {
        $leaderboardString = "
            {$firstSquad["name"]} = $firstSquadPoints<br>
            {$secondSquad["name"]} = $secondSquadPoints<br>
            $differentMatches";
    }
    elseif ($firstSquadPoints < $secondSquadPoints) {
        $leaderboardString = "
            {$secondSquad["name"]} = $secondSquadPoints<br>
            {$firstSquad["name"]} = $firstSquadPoints<br>
            $differentMatches";
    }
    else {
        $leaderboardString = "
            {$firstSquad["name"]} = $firstSquadPoints<br>
            {$secondSquad["name"]} = $secondSquadPoints<br>
            $differentMatches";
    }

    
    echo "
<table border='1' style='text-align: center'>
    <tr>
        <th colspan='2'>Inserted Data</th>
        <th>Output</th>
    </tr>
    <tr>
        <td>Name<br>Won<br>Draw<br>Lost</td>
        <td>{$firstSquad["name"]}<br>{$firstSquad["won"]}<br>{$firstSquad["draw"]}<br>{$firstSquad["lost"]}<br> </td>
        <td rowspan='2'>Leaderboard<br>
            $leaderboardString
        </td>
    </tr>
    <tr>
        <td>Name<br>Won<br>Draw<br>Lost</td>
        <td>{$secondSquad["name"]}<br>{$secondSquad["won"]}<br>{$secondSquad["draw"]}<br>{$secondSquad["lost"]}<br> </td>
    </tr>
</table>
    ";
}
?>