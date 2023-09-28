<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $hdmi = (int) $_POST["hdmi"];
    $refresh = (int) $_POST["refresh"];
    $resolution = $_POST["resolution"];

    $minHDMI = 2;
    $minHz = 50;

    $hdmiAdvice = "";
    $refreshAdvice = "";
    $resolutionAdvice = "";

    if ($hdmi < 2) {
        $hdmiAdvice = "2 or more hdmi ports are recommended";
    }
    else {
        $hdmiAdvice = "All ok";
    }
    if ($refresh < 50) {
        $refreshAdvice = "50hz or more are recommended";
    }
    else {
        $refreshAdvice = "All ok";
    }
    if ($resolution == "hd-ready" || $resolution == "fhd") {
        $resolutionAdvice = "Ultra HD or 4k recommended";
    }
    else {
        $resolutionAdvice = "All ok";
    }
    $advice = "<b>Advice</b><br>
               Hdmi ports: $hdmiAdvice<br>
               Refresh rate: $refreshAdvice<br>
               Resolution: $resolutionAdvice";

    echo "
    <table border='1' style='text-align: center'>
        <tr>
            <th colspan='2'>Inserted Data</th>
            <th>Output</th>
        </tr>
        <tr>
            <td>Brand<br>Model<br>HDMI Ports<br>Refresh Rate<br>Resolution</td>
            <td>$brand<br>$model<br>$hdmi<br>$refresh<br>$resolution</td>
            <td rowspan='2'>
                $advice
            </td>
        </tr>
    </table>
    ";
}
