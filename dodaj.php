<?php
include_once("polaczenie.php");
/**
 *  Dokument odbierający zmienną 'nazwa' jako superglobalną tablice: $_POST['nazwa]
 *  Dokument dodaje do bazy danych Mysqli: insert into
 */
    $nazwa = $_POST['nazwa'];

  /*  echo("
        $nazwa <br>
    ");
    */
    echo("
        Moja nazwa: ".$_POST['nazwa']."<br>
    ");


    $zapytanie_insert = $polaczenie->query("INSERT INTO nazwa(nazwa) values('$nazwa')");

    $polaczenie->close();
?>