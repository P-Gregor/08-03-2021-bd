<?php
/**
 * Skrypt pobiera wszystkie rekordy z bazy danych.
 * Korzystam z 2 metod, list i mysqli_fetch_array
 */
include_once("polaczenie.php");
echo("<br>");
$zapytanie_select = $polaczenie->query("SELECT idn,nazwa FROM nazwa");

 while (list($idn,$mojaNazwa)=mysqli_fetch_array($zapytanie_select))
 {
    echo
    ("
    IDN: $idn, Nazwa: $mojaNazwa <br>
    ");
 }

$polaczenie->close();

?>