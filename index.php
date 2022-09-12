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


  <header>
    <video id="video" class="video-container" muted autoplay loop>
      <source class="video" src="ADCC.mp4" type="video/mp4">
    </video>


    <!-- <h1><span class="rumen">B</span>razillian <span class="rumen">J</span>iu <span class="rumen">J</span>itsu</h1> -->
    <button class="switch-btn">Stop/Start</button>
  </header>


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