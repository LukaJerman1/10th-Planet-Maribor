<?php include('./php/ifLogin.php');?>

<?php
//echo class_exists('PDO');
?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

  <title>10th Planet Maribor</title>
</head>

<body class="bg-dark">

  <div class="navigacijska">
    <?php include('./php/menu.php'); ?>
      <div class=podatki_in_logout>
        <?php include("./php/podatki_in_logout.php"); ?>
      </div>
  </div>

  <div class="vsebinaUpo">
    <div class="iskanjeUpo">
      <div class="form-group">
        <label for="iskano">Brskanje po bazi uporabnikov</label>
        <input type="text" class="form-control" id="iskano" placeholder="Vnesite ime uporabnika">
      </div>
    </div>
    <div class="tabelaUporabnikov">
      <?php include("./php/nalaganjeTabele.php"); ?>
    </div>

    <div>
      <a target="_blank" href="./php/createPdf.php" class="btn btn-danger" style="margin-left:20px;">Generiraj PDF</a>
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