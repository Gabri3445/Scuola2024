<?php
if(isset($_COOKIE['utente'])) {
    $cookieValue = $_COOKIE['utente'];
    echo "Nome: utente<br>";
    echo "Contenuto: $cookieValue";
} else {
    $nomeCognome = "Gabriele Lopez";
    $scadenza = time() + 60 * 60 * 24; // 1 giorno
    setcookie('utente', $nomeCognome, $scadenza, '/');
    echo "Il cookie di nome 'utente' non è settato.<br>";
    echo "potrebbe essere necessario ricaricare la pagina, per visualizzare il contenuto del cookie";
}
