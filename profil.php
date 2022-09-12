<?php include('./php/ifLogin.php');?>
<?php include('./php/update_profile.php');?>
<?php include('./php/save_to_json.php');?> 

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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

  
  

  <div class="zunanji-registracija-form">


    <div class="registracija-form">

      <form method="POST" action="">
          

          <label for="pas_update">Pas:</label>
          <?php
          include("./php/select_update.php")
          ?>
          <br /><br />


          <!--
          <label for="naslov">Naslov:</label>
          <input type="text" id="naslov" name="naslov"><br><br>
          -->

          <input class="submit-button" name="update_user" id="update_user" type="submit" value="Update">

          <p id="result"></p>
      </form>
      
    </div>


    <div>
    <?php
      include("./php/trener_ali_vajenec.php");
    ?>
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
  <script>
    

/*
$(document).ready(function(){
$( "#sharniJSON" ).submit(function( event ) {
 
 // Stop form from submitting normally
 event.preventDefault();

 // Get some values from elements on the page:
 var $form = $( this ),
   username = $form.find( "input[name='pas_update']" ).val(),
   url = "./php/save_to_json.php";

   

 // Send the data using post
 var posting = $.post( url, { s: term } );

 //Ajax Function to send a get request
 $.ajax({
   type: "POST",
   url: url,
   dataType:"jsonp",
   success: function(response){
       //if request if made successfully then the response represent the data

       $( "#result" ).empty().append( response );
   }
 });
 
});
});*/

  </script>

</body>

</html>