<?php include('./php/validacija.php');?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>10th Planet Maribor</title>
    <!--

    <style> 
    .error{
    color:red;
    }
    </style>

    -->
   

</head>

<body class="bg-dark">

    <div class="navigacijska">
    <?php include './php/menu.php'; ?>
    </div>

    <div class="container-1">
        <div class="box-1">
            <img src="./logo.png" alt="10th planet logo">
        </div>
    </div>

    <div class="zunanji-registracija-form">


        <div class="registracija-form">

            <form method="POST" action="./registracija.php">
                

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email"><br><br>
                <label for="geslo">Geslo:</label>
                <input type="password" id="geslo" name="geslo" onkeyup='check();'><br><br>
                <label for="geslo2">Ponovno vnesite geslo:</label>
                <input type="password" id="geslo2" name="geslo2" onkeyup='check();'><br><br>


                <label for="fname">Ime:</label>
                <input type="text" id="fname" name="fname"><br><br>
                <label for="lname">Priimek:</label>
                <input type="text" id="lname" name="lname"><br><br>

                <label for="datumRojstva">Datum rojstva:</label>
                <input type="date" id="datumRojstva" name="datumRojstva"><br><br>

                <label for="pas">Pas:</label>
                <select type="text" id="pas" name="pas">
                    <option value="beli">Beli</option>
                    <option value="moder">Moder</option>
                    <option value="vijolcen">Vijolčen</option>
                    <option value="rjavi">Rjav</option>
                    <option value="crni">Črn</option>
                </select><br><br>

                <!--
                <label for="naslov">Naslov:</label>
                <input type="text" id="naslov" name="naslov"><br><br>
                -->

                <input class="submit-button" name="reg_user" type="submit" value="Submit">
            </form>

            <p>Ste že registrirani? <br /><a href="./prijava.php">Prijavi se!</a></p>


        </div>

        <div class="sporocilo">
            
            <div class="prikaziGesloDiv">
                <input type="checkbox" onclick="odkrijZakrijGeslo()">Prikazi geslo</input><br />
            </div>

            <!-- <input type="image" src="./show-password-icon.png" id="prikaziGesloGumb" onclick="odkrijZakrijGeslo()"></input> -->
            <div class="gesliSeNeUjemata">
                <span id='sporocilo'></span>
            </div>

            <div class="error">
                <?php include('./php/errors.php'); ?>
            </div>

        </div>


    </div>


    <div class="footer">
    <div class="pageFooter">

    <?php
      include('./php/footer.php');
    ?>
    </div>
  </div>

    <script src="js.js"></script>

</body>

</html>