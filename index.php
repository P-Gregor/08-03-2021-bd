<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Select, Update, Insert, Delete</title>
</head>
<body>
    
    <fieldset>
        <legend>Dodawanie do bazy danych</legend>    
        <form action="dodaj.php" method="post">
            Nazwa: <input type="text" name="nazwa">
            <input type="submit" name="submit" value="DODAJ">
        </form>
    </fieldset>

    <div style="text-align:center;">
        <a href="pobierz.php">Pobieranie danych z bazy danych</a><br>
        <a href="aktualizuj.php">Aktualizacja danych</a><br>
    </div>

</body>
</html>