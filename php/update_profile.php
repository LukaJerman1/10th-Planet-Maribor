<?php


    /*              UPDATE PODATKOV                 */
    // variable
    $host = "localhost";
    $uporabniskoIme = "root";
    $geslo = "";
    $imePodatkovneBaze = "nova_baza";


    $errors = array();

    //povezava do podatkovne baze

    //$db = new PDO('mysql:host='.$host.';dbname='.$imePodatkovneBaze.';charset=utf8mb4', $uporabniskoIme, $geslo);
    $db = new mysqli($host,$uporabniskoIme,$geslo,$imePodatkovneBaze);

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }


    if(isset($_POST['update_user'])){

        $barva_pasu_update = $_POST['pas_update'];
        $trenuten_email = $_SESSION['email'];

        $sql_update = "UPDATE uporabnik SET pas='".$barva_pasu_update."' WHERE email='".$trenuten_email."'";
/*
        echo''.$barva_pasu_update.'';
        echo''.$trenuten_email.'';
*/
        //$barva_pasu_update = mysqli_real_escape_string($db, $_POST['pas_update']);

        if(mysqli_query($db, $sql_update)){
            //echo"Posodobitev uspešna !";
            unset($_SESSION['pas']);
            $_SESSION['pas'] = $barva_pasu_update;
        }else{
            echo'ERROR: ' . mysqli_error($db);
        }


        



    }


    


    /*              UPDATE PODATKOV                 */
?>