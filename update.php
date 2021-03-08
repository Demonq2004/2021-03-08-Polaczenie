<?php 
include_once("polaczenie.php");
/**
 * Aktualizuje rekord na podstawie idnazwa
 */
if(isset($_GET['idnazwa'])){
    $id = $_GET['idnazwa'];


     $zapytanie_id = $polaczenie->query("SELECT nazwa FROM nazwa WHERE idn=$id limit 1");
    list($nazwa)=mysqli_fetch_array($zapytanie_id);

    echo("

    <fieldset>
    <legend>
        Dodawanie do bazy danych
    </legend>
    <form action='update.php' method='post'>
        Nazwa: <input type='text' name='nazwa' value='$nazwa'>
                <input type='hidden' name='idnazwa' value='$id'>
        <input type='submit' value='AKTUALIZUJ' name='aktualizuj'>
    </form>
    </fieldset>

    ");
 }
if(isset($_POST['nazwa']) && isset($_POST['idnazwa'])){
    $nazwa = $_POST['nazwa'];
    $id = $_POST['idnazwa'];
    $zapytanie_update = $polaczenie->query("UPDATE nazwa SET nazwa='$nazwa' WHERE idn=$id");

}


    $polaczenie->close();
?>