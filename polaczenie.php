<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pawelgregor";
    $port = 3306;

    $polaczenie = @new Mysqli($host,$username,$password,$dbname,$port);

    if(mysqli_connect_errno() != 0)
    {
        echo("Blad polaczenia do bazy danych, nr: ".mysqli_connect_error());
    }
    else
    {
        echo("Polaczono do bazy danych");
    }
?>