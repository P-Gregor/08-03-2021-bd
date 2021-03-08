<?php
    /**
     * Na podstawie id rekordu usuwam z bazy rekord
     */
    include_once("polaczenie.php");
    if(isset($_GET['idnazwa']))
    {
        $id = $_GET['idnazwa'];
        $zapytanie_DELETE = $polaczenie->query("DELETE FROM nazwa WHERE idn = $id");
        echo("usunieto rekord z tabeli");
    }
    


    $polaczenie->close();
?>