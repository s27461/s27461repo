<?php
$zakres_indeksu_poczatek = readline();
$zakres_indeksu_koniec = readline();
$zakres_wartosci_liczb_poczatek = readline();

$tablica = [];

for ($i = $zakres_indeksu_poczatek; $i <= $zakres_indeksu_koniec; $i++){
    $tablica[$i] = $zakres_wartosci_liczb_poczatek++;
}

print_r($tablica);

?>