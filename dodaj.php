<?php
/**
 * Dokument odbierającą zmienną 'nazwa' jako superglobalna tablice $_POST['nazwa'];
 * Dokument dodaje do bazy danych mysqli: insert into 
 * */
include_once("polaczenie.php");
/*
$nazwa = $_POST['nazwa'];
echo
("
    $nazwa <br>
");
*/
$nazwa = $_POST['nazwa'];
echo("<br>Moja nazwa".$_POST['nazwa']."");

$zapytanie_insert = $polaczenie->query("INSERT INTO nazwa(nazwa) values('$nazwa')");


$polaczenie->close();
?>