<html>
<head>
<style>
    table,td{
        border: 2px solid black;
    }
</style>
</head>
<?php
include_once("polaczenie.php");
/**
 * Skrypt pobiera wszystkie rekordy z bazy danych
 */
    echo("<table><tr><td>IDN</td><td>Nazwa</td></tr>");


    $zapytanie_select = $polaczenie->query("SELECT idn,nazwa FROM nazwa;");

    while(list($idn,$nazwa) = mysqli_fetch_array($zapytanie_select)) {
        echo "
            <tr><td>$idn </td><td>$nazwa</td></tr>";
    }
    echo("</table>");
    echo ("<br>Wróć do indexu: <a href='index.php'>Wróć</a>");
?>
<?php
    $polaczenie->close();
?>
</html>