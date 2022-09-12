<?php

    echo'<div class="vloga">';

    if (!isset($_SESSION['admin'])){
        echo'VAJENEC';
      }else{
        echo'TRENER';
      }
      ;


      echo'</div>';
?>