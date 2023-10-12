<?php

$messages = [
    '<blink>Scopri la nostra offerta speciale!</blink>',
    '<marquee>Acquista ora e risparmia!</marquee>',
];


$randomIndex = rand(0, count($messages) - 1);
$randomMessage = $messages[$randomIndex];

echo $randomMessage;
