<?php
include_once("polaczenie.php");
/**
 * Tworze liste do aktualizacji
 * dodaje przycisk aktualizuj
 * za pomocą metody get przesyłam idn rekordu do pliku UPDATE.php
 */


    $zapytanie_SELECT = $polaczenie->query("SELECT idn,nazwa FROM nazwa;");
    echo("<br>");
    while(list($idn,$nazwa) = mysqli_fetch_array($zapytanie_SELECT)){
        echo "idn: $idn nazwa: $nazwa <a href='update.php?idnazwa=$idn' style='text-decoration:none; color: red;'> UPDATE </a> <a href='delete.php?idnazwa=$idn' style='text-decoration:none; color: green;'> DELETE </a><br>";
    }


 $polaczenie->close();
?>