<?php
/**
 * Tworze liste do aktualizacji
 * Dodaje przycisk aktualizuj
 * Za pomoca merody get przesylam idn rekordu do pliku update.php
 */
    include_once("polaczenie.php");
    echo "<br>";
    $zapytanie_SELECT = $polaczenie->query("SELECT idn,nazwa FROM nazwa;");

    while(list($idn, $nazwa) = mysqli_fetch_array($zapytanie_SELECT))
    {
        echo "idn: $idn nazwa: $nazwa 
        <a href='update.php?idnazwa=$idn' style='text-decoration:none; color:red;'>    UPDATE </a> 
        <a href='delete.php?idnazwa=$idn' style='text-decoration:none; color:green;'>    DELETE </a> 
        <br>   ";
    }




    $polaczenie->close();
?>