<?php
include 'header.php';
?>
<div class="container">
<h1 class="text-center">Haut Niveaux </h1>
  <hr>
  
  <div class="row ">
       <!--start html-->
    <div class="card" style="width: 18rem;height: 263px;">
        <img src="assets/html.JPG" id="niveux" class="card-img-top h-50 w-50 m-auto" alt="...">
         <div class="card-body p-0 d-none">
         <div class=" pb-5 niveux h-100" >
  <?php
  include 'conect.php';
  $stmt = $con->prepare("SELECT * FROM developpeurs INNER JOIN technos ON developpeurs.id = technos.ID WHERE html = 100;");
  $stmt->execute();
 
  foreach ($stmt as $st) {
    echo '
    <div  class="pt-3 ml-3 text-success font-weight-bold">
    <img  src="../'. $st['Image'] .'" class="card-img-top" alt="...">
    ' . $st["FulName"] . '
    </div>';
  }  
  ?>
  </div>
      </div>
    </div>
            <!--start html-->
       <!--start css-->
    <div class="card" style="width: 18rem;">
        <img src="assets/js.png" id="niveux" class="card-img-top h-50 w-50 m-auto" alt="...">
         <div class="card-body p-0  d-none">
         <div class=" pb-5 niveux h-100" >
  <?php
  include 'conect.php';
  $stmt = $con->prepare("SELECT * FROM developpeurs INNER JOIN technos ON developpeurs.id = technos.ID WHERE js = 100;");
  $stmt->execute();
 
  foreach ($stmt as $st) {
    echo '
    <div  class="pt-3 ml-3 text-success font-weight-bold">
    <img  src="../'. $st['Image'] .'" class="card-img-top" alt="...">
    ' . $st["FulName"] . '
    </div>';
  }  
  ?>
  </div>
      </div>
    </div>
            <!--start css-->
       <!--start js-->
    <div class="card" style="width: 18rem;">
        <img src="assets/ajax.jpg"  id="niveux" class="card-img-top h-50 w-50 m-auto" alt="...">
         <div class="card-body p-0  d-none">
         <div class=" pb-5 niveux h-100" >
  <?php
  include 'conect.php';
  $stmt = $con->prepare("SELECT * FROM developpeurs INNER JOIN technos ON developpeurs.id = technos.ID WHERE ajax = 100;");
  $stmt->execute();
 
  foreach ($stmt as $st) {
    echo '
    <div  class="pt-3 ml-3 text-success font-weight-bold">
    <img  src="../'. $st['Image'] .'" class="card-img-top" alt="...">
    ' . $st["FulName"] . '
    </div>';
  }  
  ?>
  </div>
      </div>
    </div>
            <!--start js-->
       <!--start mysql-->
    <div class="card" style="width: 18rem;">
        <img src="assets/php.png" id="niveux" class="card-img-top h-50 w-50 m-auto" alt="...">
         <div class="card-body p-0  d-none">
         <div class=" pb-5 niveux h-100" >
  <?php
  include 'conect.php';
  $stmt = $con->prepare("SELECT * FROM developpeurs INNER JOIN technos ON developpeurs.id = technos.ID WHERE php = 100;");
  $stmt->execute();
 
  foreach ($stmt as $st) {
    echo '
    <div  class="pt-3 ml-3 text-success font-weight-bold">
    <img  src="../'. $st['Image'] .'" class="card-img-top" alt="...">
    ' . $st["FulName"] . '
    </div>';
  }  
  ?>
  </div>
      </div>
    </div>
            <!--start mysql-->
       <!--start ajax-->
    <div class="card" style="width: 18rem;">
        <img src="assets/mysql.jpg" id="niveux" class="card-img-top h-50 w-50 m-auto" alt="...">
         <div class="card-body p-0 d-none">
         <div class=" pb-5 niveux h-100" >
  <?php
  include 'conect.php';
  $stmt = $con->prepare("SELECT * FROM developpeurs INNER JOIN technos ON developpeurs.id = technos.ID WHERE mysql = 100;");
  $stmt->execute();
 
  foreach ($stmt as $st) {
    echo '
    <div  class="pt-3 ml-3 text-success font-weight-bold">
    <img  src="../'. $st['Image'] .'" class="card-img-top" alt="...">
    ' . $st["FulName"] . '
    </div>';
  }  
  ?>
  </div>
  </div>
    </div>
            <!--start ajax-->
       <!--start php-->
    <div class="card" style="width: 18rem;">
        <img src="assets/css.jpg" id="niveux" class="card-img-top h-50 w-50 m-auto" alt="...">
         <div class="card-body p-0  d-none">
         <div class=" pb-5 niveux h-100" >
  <?php
  include 'conect.php';
  $stmt = $con->prepare("SELECT * FROM developpeurs INNER JOIN technos ON developpeurs.id = technos.ID WHERE css = 100;");
  $stmt->execute();
 
  foreach ($stmt as $st) {
    echo '
    <div  class="pt-3 ml-3 text-success font-weight-bold">
    <img  src="../'. $st['Image'] .'" class="card-img-top" alt="...">
    ' . $st["FulName"] . '
    </div>';
  }  
  ?>
  </div>
      </div>
    </div>
            <!--start php-->
  </div>
</div>
<?php
include 'footer.php';
?>
<script src="ADMIN.js"></script>