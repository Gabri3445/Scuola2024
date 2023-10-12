<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
    echo "<h1>Dati Cliente</h1>";
    echo "Nome: " . $_POST["nome"] . "<br>";
    echo "Cognome: " . $_POST["cognome"] . "<br>";
    echo "Ragione Sociale: " . $_POST["ragione_sociale"] . "<br>";
    echo "Indirizzo: " . $_POST["indirizzo"] . "<br>";
    echo "Partita IVA: " . $_POST["p_iva"] . "<br>";
    echo "Telefono: " . $_POST["tel"] . "<br><br>";
    echo "<h1>Dati Prodotto</h1>";
    echo "Descrizione: " . $_POST["descrizione"] . "<br>";
    echo "Codice: " . $_POST["codice"] . "<br>";
    echo "Giacenza: " . $_POST["giacenza"] . "<br>";
    $single_price = $_POST["prezzo_unitario"];
    $single_price = str_replace(",",".",$single_price);
    echo "Prezzo Unitario: " . $single_price . "<br>";
    $vat_percentage = $_POST["percentuale_iva"];
    $vat_percentage = str_replace(",",".",$vat_percentage);
    echo "Percentuale IVA: " . $vat_percentage . "<br>";
    $quantity = $_POST["quantita"];
    echo "Quantità: " . $quantity . "<br>";
    $discount = $_POST["sconto"];
    $discount = str_replace(",",".",$discount);
    echo "Sconto: " . $discount . "<br>";
    $price = calcPrice($discount, $single_price, $quantity, $vat_percentage);
    echo "Prezzo finale: " . $price . "<br>";
}

function calcPrice($discount, $single_price, $quantity, $vat_percentage) {
    $price = $single_price * $quantity;
    $price = $price - ($price * $discount / 100);
    $price = $price + ($price * $vat_percentage / 100);
    return $price;
}

/*
 <h1>Dati Prodotto</h1>
        <label for="descrizione">Descrizione:</label>
        <input type="text" id="descrizione" name="descrizione" required><br><br>

        <label for="codice">Codice:</label>
        <input type="text" id="codice" name="codice" required><br><br>

        <label for="giacenza">Giacenza:</label>
        <input type="text" id="giacenza" name="giacenza" required><br><br>

        <label for="prezzo_unitario">Prezzo Unitario:</label>
        <input type="text" id="prezzo_unitario" name="prezzo_unitario" required><br><br>

        <label for="percentuale_iva">Percentuale IVA:</label>
        <input type="text" id="percentuale_iva" name="percentuale_iva" required><br><br>

        <label for="quantita">Quantitá:</label>
        <input type="text" id="quantita" name="quantita" required><br><br>

        <label for="sconto">Sconto:</label>
        <input type="text" id="sconto" name="sconto" required><br><br>

        <input type="submit" value="Submit">
*/
?>