<?php
include_once("polaczenie.php");

/**
 * Na podstawie id rekordu usuwam z bazy rekord 
 */
    if(isset($_GET['idnazwa'])){
        $id=$_GET['idnazwa'];

        $zapytanie_delete = $polaczenie->query("DELETE FROM nazwa WHERE idn=$id");

        echo("Usunęto rekord z bazy danych");
    }

 $polaczenie->close();
?>