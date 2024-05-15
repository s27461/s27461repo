<?php

$wpisane_wartosci = readline();
$szukana_wartosc = readline();

$tablica = explode(" ", $wpisane_wartosci,  PHP_INT_MAX);
if ($szukana_wartosc <= sizeof($tablica) && $szukana_wartosc >= 0) {
    array_splice($tablica, $szukana_wartosc, 0, "$");

    for ($i = 0; $i < sizeof($tablica); $i++) {
        echo $tablica[$i] . " ";
    }
} else {
    echo "BŁĄD";
}
?>