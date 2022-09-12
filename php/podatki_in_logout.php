
<?php  
    if (isset($_SESSION['email'])) {
        $ime = $_SESSION['ime'];
        $priimek = $_SESSION['priimek'];
        $pas = $_SESSION['pas'];

        echo'<div class="podatkiUporabnika">';
        echo'<p>Pozdravljen '.$ime.'  <br />  Pas: '.$pas.'</p>';
        echo'</div>';
        
        echo'<div class="gumbLogOut">';
        $location = "../DSR_project/index.php?logout=1";
    	echo'<a href="../DSR_project/index.php?logout=1" class="btn btn-danger">logout</a>';
        echo'</div>';
    }
?>


<?php


    /*              PRIKAZ PODATKOV             */ 


    /*
    if (isset($_SESSION['email'])) {


                
        // variable
        $host = "localhost";
        $uporabniskoIme = "root";
        $geslo = "";
        $imePodatkovneBaze = "nova_baza";

        //povezava do podatkovne baze

        $email = $_SESSION['email'];
       

        $db = new mysqli($host,$uporabniskoIme,$geslo,$imePodatkovneBaze);

        

        $sql = "SELECT ime, priimek, pas, admin FROM uporabnik WHERE email='$email' LIMIT 1";

        $result = $db -> query($sql);

        $row = $result -> fetch_assoc();

            $_SESSION['ime'] = $row["ime"];
            $_SESSION['priimek'] = $row["priimek"];
            $_SESSION['pas'] = $row["pas"];

            if($row["admin"] == 1){
                $_SESSION['admin'] = 1;
            }

        }
    */


?>
