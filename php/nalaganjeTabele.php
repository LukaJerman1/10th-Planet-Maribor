<?php

$host = "localhost";
$uporabniskoIme = "root";
$geslo = "";
$imePodatkovneBaze = "nova_baza";

$db = new mysqli($host,$uporabniskoIme,$geslo,$imePodatkovneBaze);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
  }

  $sql = "SELECT ime, priimek, email, datum_rojstva, pas FROM uporabnik";
  $result = $db->query($sql);
    
  if ($result->num_rows > 0) {
    // output data of each row

    if(isset($_POST['iskano'])){

        $Name = $_POST['iskano'];
        $Query = "SELECT ime FROM uporabnik WHERE ime LIKE '%$Name%' LIMIT 5";

        $ExecQuery = mysqli_query($db, $Query);



        
    }else{

        echo'<table class="table table-striped table-dark">';
        echo'<tr>';
        echo'<th scope="col">Ime</th>
                <th scope="col">Priimek</th>
                <th scope="col">Email</th>
                <th scope="col">Rojstni datum</th>
                <th scope="col">Pas</th>';
        echo'</tr>';
    
        while($row = $result->fetch_assoc()) {
            echo'<tr>';
            echo '<td>'.$row["ime"].'</td><td>'.$row["priimek"].'</td><td>'.$row["email"].'</td>
            <td>'.$row["datum_rojstva"].'</td><td>'.$row["pas"].'</td>';
            echo'</tr>';
        }
    
        echo'</table>';

    }

  } else {
    echo "0 results";
  }
  



  




?>