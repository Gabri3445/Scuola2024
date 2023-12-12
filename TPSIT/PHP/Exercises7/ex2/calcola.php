<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['pietanze']) && is_array($_POST['pietanze'])) {
        $menu = array(
            'Pasta' => 10.00,
            'Risotto' => 12.50,
            'Pollo' => 15.00,
            'Bistecca' => 18.50,
            'Tiramisu' => 8.00,
            'PannaCotta' => 7.00,
        );

        $costoServizioDomicilio = isset($_POST['servizio-domicilio']) ? $_POST['servizio-domicilio'] : 0.00;


        $totale = $costoServizioDomicilio;
        $ordini = $_POST['pietanze'];

        echo "<h2>Ordine</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Pietanza</th><th>Prezzo</th></tr>";

        foreach ($ordini as $ordine) {
            echo "<tr><td>$ordine</td><td>{$menu[$ordine]}</td></tr>";
            $totale += $menu[$ordine];
        }

        echo "<tr><td>Servizio a domicilio</td><td>$costoServizioDomicilio</td></tr>";
        echo "<tr><td><strong>Totale</strong></td><td><strong>$totale</strong></td></tr>";
        echo "</table>";
    } else {
        echo "Nessun piatto selezionato.";
    }
}
