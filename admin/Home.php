<?php
include 'header.php';

?>
<div class="container">
<script type="text/javascript"> 
         function refresh(){
             var t = 1000; // rafraîchissement en millisecondes 1000 ms = 1s
             setTimeout('showDate()',t) // Appel de la fonction showDate
         }
         
         function showDate() {
             var date = new Date() // Créer un objet de type Date
             var h = date.getHours(); // Récupérer les heures avec une fonction prédéfinie
             var m = date.getMinutes();
             var s = date.getSeconds();
             if( h < 10 ){ h = '0' + h; } 
             if( m < 10 ){ m = '0' + m; }
             if( s < 10 ){ s = '0' + s; }
             var time = h + ':' + m + ':' + s // Affectation
             document.getElementById('horloge').innerHTML = time; //DOM
             refresh();
          }
      </script>
   </head>
   <body onload=showDate();>
   <?php
if( $_SESSION["ussername"]->Role === "admin"){
   echo'
   <div class="text-center information-admin">
   <h1 class="text-center">Welcom ' .  $_SESSION["ussername"]->FulName . '</h1>
   <hr>
   <img  src="../'. $_SESSION["ussername"]->Image .'" class="card-img-top " alt="...">
   </div>
   ';
}else {
    header('location: ../index.php');
}
   ?>
  <div class="mt-5 text-center">
      <span id='horloge'></span>
      </div>
   </body>
  </div>
      
  <?php
include 'footer.php';
?>