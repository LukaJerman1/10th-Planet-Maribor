<?php

session_start();

// variable
$host = "localhost";
$uporabniskoIme = "root";
$geslo = "";
$imePodatkovneBaze = "nova_baza";


$errors = array();

$options = [
    'cost' => 11
    /*
    'salt' => "Warning! The salt option is deprecated. 
    It is now preferred to simply use the salt that is generated by default. 
    As of PHP 8.0.0, an explicitly given salt is ignored.
    ",*/
    ];

//povezava do podatkovne baze

//$db = new PDO('mysql:host='.$host.';dbname='.$imePodatkovneBaze.';charset=utf8mb4', $uporabniskoIme, $geslo);
$db = new mysqli($host,$uporabniskoIme,$geslo,$imePodatkovneBaze);


    //registracija
    if (isset($_POST['reg_user'])){

        // mysqli_real_escape_string == Escape special characters in strings

        $ime = mysqli_real_escape_string($db, $_POST['fname']);
        $priimek = mysqli_real_escape_string($db, $_POST['lname']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['geslo']);
        $password_2 = mysqli_real_escape_string($db, $_POST['geslo2']);
        $datum_rojstva = mysqli_real_escape_string($db, $_POST['datumRojstva']);
        $barva_pasu = mysqli_real_escape_string($db, $_POST['pas']);

        //validacija

        if(empty($ime )) {
            array_push($errors, "Vnesite ime!");
        }
        if(empty($priimek )) {
            array_push($errors, "Vnesite priimek!");
        }
        if(empty($email )) {
            array_push($errors, "Vnesite email!");
        }
        if(empty($password_1 )) {
            array_push($errors, "Vnesite geslo!");
        }
        if($password_1 != $password_2) {
            array_push($errors, "Gesli se ne ujemata!");
        }
        if(empty($datum_rojstva)){
            array_push($errors, "Vnesite datum rojstva!");
        }

        //  mysqli_query == Perform query against a database
        //  mysqli_fetch_assoc == Fetch a result row as an associative array

        $preveri_ce_uporabnik_obstaja = "SELECT * FROM uporabnik WHERE email ='$email' LIMIT 1";
        $result = mysqli_query($db, $preveri_ce_uporabnik_obstaja);
        $user = mysqli_fetch_assoc($result);
            
        if ($user){
            if($user['email'] === $email){
                array_push($errors, "Uporabnik s tem e-naslovom že obstaja!");
            }
        }

        /*      ENKRIPCIJA GESLA IN SHRANJEVANJE V PB       */
        if(count($errors) == 0){

            

            $oivHash = password_hash($password_1, PASSWORD_BCRYPT);

            /*
            $sifrirano_geslo = md5($password_1);
            */
            
            $query = "INSERT INTO uporabnik (email, geslo, ime, priimek, datum_rojstva, pas)
            VALUES ('$email', '$oivHash', '$ime', '$priimek', '$datum_rojstva', '$barva_pasu')";

                
        if (mysqli_query($db, $query)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($db);
        }

            
            $_SESSION['email'] = $email;
            $_SESSION['geslo'] = $oivHash;
            $_SESSION['success'] = "Zdaj ste prijavljeni";


            
            

            include("./php/poslji_mail.php");

            header('location: ../DSR_project/index.php');
        }
   
    }


    
    if(isset($_POST['login_user'])){
        $email_prijava = mysqli_real_escape_string($db, $_POST['emailPrijava']);
        $geslo_prijava = mysqli_real_escape_string($db, $_POST['gesloPrijava']);

        if (empty($email_prijava)){
            array_push($errors, "Potrebno je vnesti email!");
        }
        if (empty($geslo_prijava)){
            array_push($errors, "Potrebno je vnesti geslo!");
        }
        
        if(count($errors) == 0){

            /*              PRIDOBIŠ GESLO IZ PODATKOVNE BAZE              */

            //$sifrirano_geslo_prijava = md5($geslo_prijava);
            
        
            
            //$sifrirano_geslo_prijava = password_hash($geslo_prijava, PASSWORD_BCRYPT);
           

            $query_prijava = "SELECT * FROM uporabnik WHERE email='$email_prijava' "; //AND geslo='$sifrirano_geslo_prijava'
            $results_prijava = mysqli_query($db, $query_prijava);

            if(mysqli_num_rows($results_prijava) == 0 ){
                array_push($errors, "Napačen Email!");
            }else{
                
                $sqlGeslo = "SELECT geslo FROM uporabnik WHERE email='$email_prijava' LIMIT 1";
                $resultGeslo = $db -> query($sqlGeslo);
                $rowgeslo = $resultGeslo -> fetch_assoc();
                $gesloPB = $rowgeslo["geslo"];

                if(password_verify($geslo_prijava,$gesloPB) == 0) {
                    array_push($errors, "Napačno Geslo!");
                    array_push($errors, "Vstavljeno: " . $geslo_prijava );
                    array_push($errors, "PB: " . $gesloPB);
                    $vrni = password_verify($geslo_prijava,$gesloPB);
                    array_push($errors, "boolean verify : " . $vrni);
                };
            }

            


            if (mysqli_num_rows($results_prijava) == 1 && count($errors) == 0){
                $_SESSION['email'] = $email_prijava;
                $_SESSION['geslo'] = $geslo_prijava;
                $_SESSION['success'] = "Zdaj ste prijavljeni";

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

                header('location: ../DSR_project/index.php');
            }
            else {
                array_push($errors, "Email ali geslo je napačno!" );
            }
        }

    }




?>