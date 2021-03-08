<?php include_once("polaczenie.php")?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System SELECT, UPDATE, INSTERT, DELETE</title>
</head>
<body>
    
    <fieldset>
        <legend>
            Dodawanie do bazy danych
        </legend>
        <form action="dodaj.php" method="post">
            Nazwa: <input type="text" name='nazwa'>
            <input type="submit" value="DUDAj" name="submit">
        </form>
    </fieldset>
    <a href="pobierz.php">Zobacz Dane</a><Br>
    <a href="aktualizuj.php">Zaktualizacja Danych</a>
</body>
</html>
<?php $polaczenie->close();?>