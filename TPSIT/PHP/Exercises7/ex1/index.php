<?php

$quotes = array(
    "Believe you can and you re halfway there. -Theodore Roosevelt",
    "Life is 10% what happens to us and 90% how we react to it. - Charles R. Swindoll",
    "Success is walking from failure to failure with no loss of enthusiasm. - Winston Churchill",
    "Life is what happens when you're busy making other plans. - John Lennon",
    "Success is not the key to happiness. Happiness is the key to success. - Albert Schweitzer",
    "Life is really simple, but we insist on making it complicated. - Confucius",
    "The best way to predict the future is to create it. - Peter Drucker",
    "Success is not final, failure is not fatal: It is the courage to continue that counts. - Winston Churchill",
    "It does not matter how slowly you go, as long as you do not stop. - Confucius",
    "The most important thing is to not stop questioning. - Albert Einstein"
);

$randomIndex = array_rand($quotes);
$randomQuote = $quotes[$randomIndex];

echo $randomQuote;