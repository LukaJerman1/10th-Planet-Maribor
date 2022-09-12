<?php include('./php/ifLogin.php');?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <title>10th Planet Maribor</title>
</head>

<body class="bg-dark">

  
<div class="navigacijska">
    <?php include('./php/menu.php'); ?>
      <div class=podatki_in_logout>
        <?php include("./php/podatki_in_logout.php"); ?>
      </div>
  </div>

  <div class="container-1">
    <div class="box-1">
      <img src="./logo.png" alt="10th planet logo">
    </div>
  </div>



  <!-- 
    <div class="box-2">
      <img src="./10th-planet-maribor-20.jpg" alt="10th planet sparring">

    </div>
    <div class="box-3">
      <img src="./next_to_logo.png" alt="10th planet sparring">
    </div>
    <div class="box-4">
      <img src="./10th-planet-maribor-31.jpg" alt="10th planet sparring">
    </div>
  -->

  <div class="info-telo">


    <div class="kontakt-in-urnik">

    <div class="urnik">

        <table>
          <tr>
            <th></th>
            <th>Pon.</th>
            <th>Tor.</th>
            <th>Sre.</th>
            <th>Čet.</th>
            <th>Pet.</th>
          </tr>
          
          <tr>
            <th>Jutranji</th>
            <td></td>
            <td>8h</td>
            <td></td>
            <td>8h</td>
            <td>8h</td>
          </tr>

          <tr>
            <th>Začetniki</th>
            <td>17.30h</td>
            <td>19h</td>
            <td>17.30h</td>
            <td>19h</td>
            <td></td>
          </tr>

          <tr>
            <th>Napredni</th>
            <td>18.30h</td>
            <td>20h</td>
            <td>18.30h</td>
            <td>20h</td>
            <td></td>
          </tr>

          <tr>
            <th>Open mat</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>18h</td>
          </tr>

        </table>

      </div>

      <div class="kontakt">
        <p>
          The introductory session is for the introduction to the Jiu-Jitsu itself and the coach.
          Personal contact is very important for us to find the best solution for your wishes and needs – 
          according to prior knowledge, body type, skill levels, injuries…
          Together we find the best group for you and date for the first training.
          This session is free and non-binding.
        </p>
      </div>

      

    </div>

    <div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6157.826903082719!2d15.654854399104323!3d46.56746401776821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476f771b04903011%3A0xec5b121fc43f11a!2zS0lORVRJS0EsIGJvcmlsbmUgdmXFocSNaW5l!5e0!3m2!1sen!2ssi!4v1640861367525!5m2!1sen!2ssi" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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