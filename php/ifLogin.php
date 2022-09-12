<?php

session_start();

$host = "localhost";
$uporabniskoIme = "root";
$geslo = "";
$imePodatkovneBaze = "nova_baza";

$db = new mysqli($host,$uporabniskoIme,$geslo,$imePodatkovneBaze);

if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
}else{

    $email_prijava = $_SESSION['email'];
    /*          PRIDOBIVANJE PODATKOV            */
    $sql = "SELECT ime, priimek, pas, admin FROM uporabnik WHERE email='$email_prijava' LIMIT 1";

    $result = $db -> query($sql);

    $row = $result -> fetch_assoc();

        $_SESSION['ime'] = $row["ime"];
        $_SESSION['priimek'] = $row["priimek"];
        $_SESSION['pas'] = $row["pas"];

        if($row["admin"] == 1){
            $_SESSION['admin'] = 1;
        }
    /*          PRIDOBIVANJE PODATKOV            */
}



if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    unset($_SESSION['ime']);
    unset($_SESSION['priimek']);
    unset($_SESSION['pas']);
    unset($_SESSION['admin']);
    header("location: prijava.php");
}

?>